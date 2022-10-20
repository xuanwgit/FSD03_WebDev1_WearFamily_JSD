window.addEventListener("load", startup, false);
var productID = -1;

function startup(){

    $('.sizes').on('click', function() {
        productID = $(this).attr('id');
    });

    $('.addToCart').on("click", function() {

        var hasError = false;
        var price  = document.getElementById('price').value;
        var quantity = document.getElementById('quantity').value;
        var errorMessage = "";
        if (!$("input[name='allColors']:checked").val()) {
            errorMessage = "Please select a color </br>"
            hasError = true;
        }
        if (!$("input[name='size']:checked").val()){
            errorMessage = errorMessage + "Please select a size </br>"
            hasError = true;
        }
        if (quantity <= 0){
            errorMessage = errorMessage + "Quantity cannot be less than 0"
            hasError = true;
        }
        if (!hasError){
            requestShoppingCart(productID, quantity, price);
        }
        else {
            $('#cartError').css("display", "block");
            $('#cartErrorMsg').html(errorMessage);
        }
    });
}


function requestShoppingCart(productID, quantity, total) {
    $.ajax({
        type: 'GET',
        url: '/addToCart',
        data: {total:total, quantity:quantity, productID:productID},
        success: function (response) {
            if (response == -1) {
                window.location.href = "/login";
            }    
            else{
                let cartTotal = response[0].total;
                $('#cartUpdated').css("display", "block");
                $('#cartUpdatedMsg').html("Item is added.  Your new cart total is $" + cartTotal);
            }
            console.log(response);
        }
    });
}

// get list of radio buttons with name 'size'

document.addEventListener("DOMContentLoaded", function(e) {

    var sz = document.forms['form'].elements['size'];

    // loop through list

    for (var i=0; i<sz.length; i++) {

        sz[i].onclick = function() { // assign onclick handler function to each

            // put clicked radio button's value in total field

            this.form.elements.total.value = this.value;

        };

    }

 })

