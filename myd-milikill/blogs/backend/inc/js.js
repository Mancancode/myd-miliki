/**
 * Created by user on 9/8/17.
 */
$(document).ready(function () {
    $("#search").keyup(function () {
        var query = $(this).val();
        //alert(query);
        if (query != '') {
            $.ajax({

                url: "./inc/search.php",
                method: "POST",
                data: {query: query},
                success: function (data) {
                    $('#result').fadeIn();
                    $('#result').html(data);
                }
            });
        }
    });

    $(document).on('click', 'li', function () {
        $('#search').val($(this).text());
        $('#result').fadeOut();
    });

});
$("#search-form").on("submit", function (e) {
    $('#result').fadeOut();
    $('.search-result').html(' <div class="loader center-block"></div>');
    e.preventDefault();
    var key = $('#search').val();
    $.ajax({
        url: "./inc/search-page-result.php", method: "POST", data: {value: key},
        success: function (res) {
            //console.log(res)
            $('.search-result').html(res);}
    })
});

$(document).on("click",".add-modal-btn", function () {
    var id= $(this).attr('data-id');
    $('.add-product').attr('data-id',id);
});
$(document).on("click",".add-product", function () {
    $(this).html('<div class="loader center-block"></div>');
    var id = $(this).attr('data-id');
    var quantity = $('#i-quantity').val().trim();
    var cost = $('#i-cost').val().trim();
    var sell = $('#i-sell').val().trim();
    var track = $('#i-track').val().trim();

    $.ajax({
        url: "./inc/doAddItemtoStoreWSearch.php",
        method: "POST",
        data: {id: id,quantity:quantity,cost:cost,sell:sell,track:track},
        success: function (data) {
            if(data =='yes'){
            $(".modal").modal('hide');
           $(".add-modal-btn[data-id="+id+"]").closest('td').append('<button class="btn btn-primary">Added</button>');
           $(".add-modal-btn[data-id="+id+"]").remove();
            } else if(data=='outofplan') {
                swal({
                    title: "Out of plane",
                    text: "Your plan capacity is expired! Update your plane",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-warning',
                    confirmButtonText: "Update",
                    closeOnConfirm: false
                }, function () {
                    window.location.href='payment';
                });
                $('.add-product').html('Save');
            } else {
                alert('Error! Please, refresh page and try again!');
            }
        }
    });
})
.on("click",".product-edit-btn", function () {
    $(this).closest("tr").find('.edit-info-hide').hide();
    $(this).closest("tr").find('.edit-info-new').show();
    $(this).hide();
    $(this).next().show();
})
.on("click",".product-save-div", function () {
    var btn = $(this);
    var id =$(this).attr('data-id');
    var first = $(this).closest("tr").find('.edit-info-new.e-one').val();
    var second = $(this).closest("tr").find('.edit-info-new.e-two').val();
    var third = $(this).closest("tr").find('.edit-info-new.e-three').val();

    $.ajax({
        url: "./inc/doEditMainItem.php",
        method: "POST",
        data: {id:id,first: first,second:second,third:third},
        success: function (data) {
            console.log(data);
            $(btn).closest("tr").find('.edit-info-hide.e-one').html('<b>'+first+'</b>');
            $(btn).closest("tr").find('.edit-info-hide.e-two').html('<b>&#8358 '+second+'</b>');
            $(btn).closest("tr").find('.edit-info-hide.e-three').html('&#8358 '+third);
            $(btn).closest("tr").find('.edit-info-new').hide();
            $(btn).closest("tr").find('.edit-info-hide').show();
        }
    });

});

// MY SHOP SEARCH STARTS HERE WITH ID NAMES CHANGED TO MYSEARCH

$(document).ready(function () {
    $("#mysearch").keyup(function () {
        var query = $(this).val();
        //alert(query);
        if (query != '') {
            $.ajax({

                url: "./inc/mysearch.php",
                method: "POST",
                data: {query: query},
                success: function (data) {
                    $('#myresult').fadeIn();
                    $('#myresult').html(data);
                }
            });
        }
    });

    $(document).on('click', 'li', function () {
        $('#mysearch').val($(this).text());
        $('#myresult').fadeOut();
    });

});

$("#mysearch-form").on("submit", function (e) {
    $('#myresult').fadeOut();
    $('.mysearch-result').html(' <div class="loader center-block"></div>');
    e.preventDefault();
    var key = $('#mysearch').val();
    $.ajax({
        url: "./inc/mysearch-page-result.php", method: "POST", data: {value: key},
        success: function (res) {
            //console.log(res)
            $('.mysearch-result').html(res);}
    })
});

function changestatus(id){
   $.ajax({
        url: "./inc/changestatus.php", method: "POST", data: {value: id},
        success: function (res) {
            //console.log(res)
            }
    })
}
function doPayment(money){
    var mail = $('#user-email').val();
    var handler = PaystackPop.setup({
        key: 'pk_test_a922172415c6bad5b6ef810347e569714e829898',
        email: mail,
        amount: money,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        callback: function(response){
            $.ajax({
                url: "./inc/savePayment.php", method: "POST", data: {ref: response.reference,amount:money},
                success: function (res) {
                    location.reload();
                }
            })
        },
        onClose: function(){
            alert('Payment discarded!');
        }
    });
    handler.openIframe();
}
function show() {
    $('.container').css('display','block');
}