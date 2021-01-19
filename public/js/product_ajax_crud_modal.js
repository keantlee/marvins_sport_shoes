/**
 * CREATE
 */
$(document).on('submit','form.add_modal_form',function(event){
    event.preventDefault();

    var route = $('#add_modal_form').data('route');

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: route,
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        success: function(success_response){
            var html = '';
            
            if(success_response){
                html = '<div class="alert alert-success" role="alert">' + success_response.message + '</div>';
                $('#add_modal_form')[0].reset();
                $('#success_result').html(html);
            }
        },
        error: function(error_message){
            const error_msg = error_message.responseJSON;

            const show_errors = {
                name: $('#name_error'),
                item_description: $('#item_desc_error'),
                quantity: $('#quantity_error'),
                price: $('#price_error'),
                image: $('#image_error')
            };

            $.each(error_msg, function(index_01, value_01){
                $.each(show_errors, function(index_02, value_02){
                    if(($('input[name="'+index_01+'"]').val() == '') || ($('textarea[name="'+index_01+'"]').val() == '')){
                        if(index_01 === index_02){
                            html = '<div class="text-danger">' + value_01 + '</div>';
                            value_02.html(html);
                        }
                    }
                });
            });
        }
    });
});

/**
 * RETRIEVE
 */


/**
 * UPDATE
 */
$('.update-modal-btn').on('click', function () {
    $('#update_id').val($(this).data('id'));
    $('#update_name').val($(this).data('name'));
    $('#update_description').val($(this).data('item_description'));
    $('#update_brand').val($(this).data('brand'));
    $('#update_size').val($(this).data('size'));
    $('#update_color').val($(this).data('color'));
    $('#update_quantity').val($(this).data('quantity'));
    $('#update_price').val($(this).data('price'));
    $('#load-first-image').html($(this).data('image'));
});
$(document).on('submit','form.update_modal_form',function(event){
    event.preventDefault();

    // var img_src = $('.update-modal-btn').data('image');
    var product_id = $('#update_id').val();
    var route = $('#update_modal_form').data('route');
    var form_data = $(this);

    // console.log(img_src);
    $.ajax({
        type: 'PUT',
        url: route + "/" + product_id,
        data: form_data.serialize(),

        success: function(success_response){
            console.log('show success message');
            var html = '';

            if(success_response){
                html = '<div class="alert alert-success" role="alert">' + success_response.message + '</div>';
                $('#update_modal_form')[0].reset();
                $('#success_result').html(html);
            }
        },
        error: function(error_message){
            const error_msg = error_message.responseJSON;

            const show_errors = {
                name: $('#name_error'),
                item_description: $('#item_desc_error'),
                quantity: $('#quantity_error'),
                price: $('#price_error'),
                image: $('#image_error')
            };

            $.each(error_msg, function(index_01, value_01){
                $.each(show_errors, function(index_02, value_02){
                    if(($('input[name="'+index_01+'"]').val() == '') || ($('textarea[name="'+index_01+'"]').val() == '')){
                        if(index_01 == index_02){
                            html = '<div class="text-danger">' + value_01 + '</div>';
                            value_02.html(html);
                        }
                    }
                });
            });
        }
    });
});

/**
 * DELETE
 */
$('.delete-modal-btn').on('click', function(){
    $('#delete_id').html($(this).data('id'));
    $('#delete_img').html($(this).data('image'));
    $('#delete_name').html($(this).data('name'));
});
$(document).on('submit','form.delete_modal_form',function(event){
    event.preventDefault();

    var delete_id = $("delete_id").html($(this).data('id'));
    var route = $('#delete_modal_form').data('route');
});
