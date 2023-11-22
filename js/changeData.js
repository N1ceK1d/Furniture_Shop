$(document).ready(() => {
    let canChange = true;
    $('#change_btn').on('click', () => {
        canChange = !canChange;
        $.map($('.price_data'), (item) => {
            $(item).attr('readonly', canChange);
            canChange ? $(item).css('border', 'none') : $(item).css('border', '.2vw solid rgb(224, 182, 46)');
        })
    })

    $('#add_btn').on('click', () => {
        $('.addProduct_form').css('display', 'block');
    })

    $('.close').on('click', () => {
        $('.addProduct_form').css('display', 'none');
    })

    $('.image_path').on('input', () => {
        $('.loaded_image').attr('src', $('.image_path').val());
    })
})