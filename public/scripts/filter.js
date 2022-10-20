$(document).ready(function() {
    var filteredColors = [];
    var filteredSizes = [];

   $('.chkColors').change(function() {

        filteredColors = [];
        $('.chkColors').each(function () {
            if ($(this).is(":checked")) {
                filteredColors.push($(this).attr('id'));
            }
            else {
                var index = filteredColors.indexOf($(this).attr('id'));
                if (index >= 0) {
                    filteredColors.splice(index, 1);
                }
            }
        });

        fetchSetsByFilter(filteredColors, filteredSizes);

    });    

    $('.chkSizes').change(function() {
        filteredSizes = [];
        $('.chkSizes').each(function () {
            if ($(this).is(":checked")) {
                filteredSizes.push($(this).attr('id'));
            }
            else {
                var index = filteredSizes.indexOf($(this).attr('id'));
                if (index >= 0) {
                    filteredSizes.splice(index, 1);
                }
            }
        });

        fetchSetsByFilter(filteredColors, filteredSizes);

    });    
  
});

function fetchSetsByFilter(filteredColors, filteredSizes) {

    $('#product-list').empty();
    let category = $('#setCategory').text();
    $.ajax({
        type: 'GET',
        url: '/getSetsByFilter',
        data: {category:category, filteredColors:filteredColors, filteredSizes:filteredSizes},
        success: function (response) {
            
            console.log(response);
            let tempHtml = "";

            if (response.length == 0) {
                $('#product-list').append('No Data Found');
            } else {
                for (let i=0; i < response.length; i++){
                    let imageName = "/" + response[i].image;
                    let setName = response[i].name;
                    let price = response[i].price;
                    let slug = response[i].slug;
                    tempHtml += 
                    `<div class="col-lg-4 col-md-6 bags">
                        <div class="produc-img">
                            <a href="/ensembles/${slug}">   
                                <img src="${imageName}" alt="" class="d-block mx-auto img-fluid">
                            </a>
                        </div>
                        <div class="product-content text-center py-3">
                            <span class="d-block fw-bold text-uppercase">${setName}</span>
                            <span class="d-block">${price}</span>
                        </div>
                    </div>`;
                }

           
                $('#product-list').html(tempHtml);
            }
        }
    });
}