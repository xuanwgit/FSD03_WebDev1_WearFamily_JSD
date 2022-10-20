window.addEventListener("load", startup, false);

function startup(){

    var $tblrows = $("#tblProducts tbody tr");
    $tblrows.each(function (index) {

        var $tblrow = $(this);

        $tblrow.find('.quantity').on('change', function () {

            var quantity = $tblrow.find("[name=quantity]").val();
            var price = $tblrow.find("[name=price]").val();
            var subTotal = parseInt(quantity,10) * parseFloat(price);

            if (!isNaN(subTotal)) {
                $tblrow.find('.subtot').val(subTotal.toFixed(2));

                if (!isNaN(subTotal)) {
                    $tblrow.find('.subtot').val(subTotal.toFixed(2));
                    var grandTotal = 0;
                    var grandTotalShip = 0;
                    $(".subtot").each(function () {
                        var stval = parseFloat($(this).val());
                        grandTotal += isNaN(stval) ? 0 : stval;
                        grandTotalShip = grandTotal + 5.00;
                    });

                $('.grdtot').val(grandTotal.toFixed(2));
                $('.grdtotShip').val(grandTotalShip.toFixed(2));
                }
            }
            let productID = $(this).attr('id');
            updateShoppingCart(productID, quantity, grandTotal);
        });
    });

    $(".addToOrder").on('click', function() {
        if ($('.grdtot').val() > 0) {
          createOrderPaymentId();
        }
    });

}

function createOrderPaymentId() {

    $.ajax({
        type: 'GET',
        url: '/newOrderPaymentID',
        success: function (response) {
            order_payment_id = response;
            $("#tblProducts tbody tr").each(function () {

                var $tblrow = $(this);
            
                    var quantity = $tblrow.find("[name=quantity]").val();
                    var product_id = $tblrow.find("[name=product_id]").val();
                    insertItemInOrderItems(order_payment_id, product_id, quantity);
            });
            window.location.href = "/checkout";
        }
    });
}


function insertItemInOrderItems(order_payment_id, product_id, quantity) {

    $.ajax({
        type: 'GET',
        url: '/addToOrderItems',
        data: {order_payment_id:order_payment_id, product_id:product_id, quantity:quantity},
        success: function (response) {
            console.log(response);
        }
    });
}

function updateShoppingCart(productID, quantity, total) {
    $.ajax({
        type: 'GET',
        url: '/updateCart',
        data: {total:total, quantity:quantity, productID:productID},
        success: function (response) {
            console.log(response);
        }
    });
}
