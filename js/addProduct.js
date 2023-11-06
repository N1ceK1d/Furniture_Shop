$(document).ready(() => {
    $('.products-list').on('click', (event) => {
        if($(event.target).hasClass('to-cart')) {
            console.log($(event.target).parent());
        }
    })
})