$(function () {
    // loading screen
    var webStorage = function () {
        if (sessionStorage.getItem('access')) {
            // When the user visit the page more than twice
            $('.loading').addClass('hide');
        } else {
            // The first time
            sessionStorage.setItem('access', 'true');
            $('.loading-animation').addClass('show');
            setTimeout(function () {
                $('.loading').addClass('hide');
                $('.loading-animation').removeClass('show');
            }, 2000);
        }
    }
    webStorage();
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
    // Show background when scrolling
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

    // Background Color: Change bg color smoothly when scrolling
    const target = document.querySelectorAll('.section_bg');
    const targetArray = Array.prototype.slice.call(target);
    // console.log(target, targetArray)
    let options;

    if (window.matchMedia('(max-width: 767px)').matches) {
        options = {
            root: null,
            rootMargin: '0px 0px',
            threshold: .4
        }
    } else {
        options = {
            root: null,
            rootMargin: '0px 0px',
            threshold: 0
        }
    };

    const observer = new IntersectionObserver(callback, options)
    targetArray.forEach((targets) => {
        observer.observe(targets)
    });
    // The callback parameter is a method that receives an array of entries, and the observer itself.
    function callback(active) {
        active.forEach(function (entry, i) {
            const target = entry.target;
            if (entry.isIntersecting && !target.classList.contains('is-active')) {
                const delay = i * 100
                setTimeout(function () {
                    target.classList.add('is-active');
                }, delay);
                observer.unobserve(target);
            }
        });
    };
});
