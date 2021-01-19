var valueCount;

//Increment button
$(document).on('click','button.plus-btn',function(event){
    event.preventDefault();

    var stock = $('#total-stock').data('quantity');

    valueCount = $('#quantity-value').val();
    valueCount++;

    // Check
    if(valueCount <= stock){
        $(this).parents('.quantity-counter').find('.quantity-value').val(valueCount);
    }else{
        var html = '';
        html = '<div class="text text-danger">'+"You have reached the maximum quantity."+'</div>';
        $('#maximum-quantity-message-error').html(html);
    }
});

//Decrement button
$(document).on('click','button.minus-btn',function(event){
    event.preventDefault();

    var html;

    valueCount = $('#quantity-value').val();
    valueCount--;

    // Check
    if(valueCount >= 0){
        html = $('#maximum-quantity-message-error').removeAttr("class");
        $('#maximum-quantity-message-error').html(html);
        $(this).parents('.quantity-counter').find('.quantity-value').val(valueCount);
    }else{
        html = $('#maximum-quantity-message-error').removeAttr("class");
        $('#maximum-quantity-message-error').html(html);
    }
});