window.addEventListener("load", startup, false);

function startup(){

    $(".addToCheckout").on('click', function() {

        let order_payment_id = -1;
        let firstname = document.getElementById('firstname').value;
        let lastname = document.getElementById('lastname').value;
        let mobile = document.getElementById('mobile').value;
        let address = document.getElementById('address').value;
        let country = document.getElementById('country').value;
        let state = document.getElementById('state').value;
        let city = document.getElementById('city').value;
        let zip = document.getElementById('zip').value;
        let cc_name = document.getElementById('cc_name').value;
        let account_no = document.getElementById('account_no').value;
        let expiry = document.getElementById('expiry').value;
        let cvv = document.getElementById('cvv').value;
        let total = document.getElementById('total').value;
        let status = "In process"
        
        if(firstname.length!=0 && lastname.length!=0 && mobile.length!=0 
            && address.length!=0 && country.length!=0 && state.length!=0 
            && city.length!=0 && zip.length!=0 && cc_name.length!=0 
            && account_no.length!=0 && expiry.length!=0 && cvv.length!=0) {
            $.ajax({
                type: 'GET',
                url: '/getOrderPaymentID',
                success: function (response) {
                    order_payment_id = response;
                }
            });

            $.ajax({
                type: 'GET',
                url: '/updateOrderPayment',
                data: {firstname:firstname, lastname:lastname, mobile:mobile, 
                        address:address, city:city, zip:zip, country:country, state:state, 
                        cc_name:cc_name, account_no:account_no, expiry:expiry, cvv:cvv,
                        total:total, status:status, order_payment_id:order_payment_id},
                success: function (response) {
                console.log(response);
                window.location.href = "/confirmation";
                }
            });
        }
    });
}
