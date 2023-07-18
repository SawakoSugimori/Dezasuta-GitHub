$(function () {
    // hamburger menu
    $('.ham_btn').on('click', function () {
        if ($('.sp_nav').hasClass('null')) {
            $('.sp_nav').removeClass('null');
            $('.sp_nav').animate({ 'bottom': '0' }).addClass('active');
        }
    });
    $('.close_btn').on('click', function () {
        $('.sp_nav').animate({ 'bottom': '-450px' });
        $('.sp_nav').removeClass('active');
        $('.sp_nav').addClass('null');
    });

    // global nav: Show background when scrolling
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $(".global_nav").addClass('scroll-nav');
        }
        else {
            $(".global_nav").removeClass('scroll-nav');
        }
    });

    // Button animation
    // Get all animated buttons 
    let buttons = document.querySelectorAll(".pop");
    // console.log(button);
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', function (event) {
            $(".pop").addClass('animate');

            setTimeout(() => {
                $('.pop').removeClass('animate');
            }, 600)
            // ぺージ遷移
            setTimeout(() => {
                window.location = this.getAttribute('href');
            }, 600)
        });
    }
});
