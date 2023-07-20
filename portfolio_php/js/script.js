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
    // Stop button scrolling when the page reach the footer
    // A: ウィンドウのスクロール量（ぺージ上端から表示領域上端の距離）
    $(window).scroll(function () {
        let point = $(window).scrollTop();
        // B: 表示領域の高さ
        let windowHeight = $(window).height();
        // C: ページ全体の高さ
        let docHeight = $(document).height();
        // D: フッターの高さ
        let footerHeight = $('footer').innerHeight();
        console.log(point, docHeight - windowHeight - footerHeight);
        // A+B >= C+D
        if (point >= docHeight - windowHeight - footerHeight) {
            $('.ham_btn').addClass('is_hidden');
        } else {
            $('.ham_btn').removeClass('is_hidden');
        }
    }, 200);
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
