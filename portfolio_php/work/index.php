<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORK :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="制作実績の紹介ページです。">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/commons.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Poppins:wght@400;500&family=Ubuntu&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kameron&display=swap');
    </style>
    <!-- php -->
    <?php
    $path = '../'; // ファイルパスの変数
    $is_work = true; // 現在の位置
    ?>
</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>

    <section class="work">
        <h1 class="page_title">WORK</h1>
        <ul class="tab">
            <li id="all">All</li>
            <li id="web">Web Design</li>
            <li id="banner">Banner Design</li>
        </ul>
        <!-- a list of works -->
        <ul class="wrapper">
            <!-- item 1 -->
            <li class="item" data-cat="web">
                <a class="hover_null" href="../work-deatils/work_salon.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">詳しく見る</p>
                        </div>
                        <img src="./images/salonsite-mockup-80-64acd82400f75.webp" alt="美容室サイトの写真">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 2 -->
            <li class="item" data-cat="web">
                <a class="hover_null" href="../work-deatils/work_cafe.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">詳しく見る</p>
                        </div>
                        <img src="./images/cafesite-mockup-80-64acd81cec333.webp" alt="カフェサイトの写真">
                    </div>
                    <p class="role">Frontend developer</p>
                </a>
            </li>
            <!-- item 3 -->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_ham01.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">詳しく見る</p>
                        </div>
                        <img src="./images/banner-ham01-80-64acd75898935.webp" alt="ハンバーガーのバナー">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 4-->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_ham02.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">詳しく見る</p>
                        </div>
                        <img src="./images/banner-ham02-80-64acd7586348d.webp" alt="バナー">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 5-->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_ham02.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">詳しく見る</p>
                        </div>
                        <img src="./images/banner-ham03-80-64acd7632d333.webp" alt="バナー">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 6 -->
            <li class="item" data-cat="web">
                <a class="hover_null" href="../work-deatils/work_coworking.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">詳しく見る</p>
                        </div>
                        <img src="./images/coworkingsite-mockup-80-64acd820229e2.webp" alt="コワーキングスペースのサイト">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 7 -->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_mobile.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">詳しく見る</p>
                        </div>
                        <img src="./images/banner-mobile-80-64acd75b13165.webp" alt="バナーの写真">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 8 -->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_travel.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">詳しく見る</p>
                        </div>
                        <img src="./images/banner-travel-80-64acd75b8212e.webp" alt="バナーの写真">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>

        </ul>
        <!-- A button to go back to TOP page -->
        <div class="btn_block">
            <a href="../index.php" class="btn">TOPへ戻る</a>
        </div>

    </section>

    <!-- Footer -->
    <footer>
        <div class="footer_bg">
            <a href="#header" class="footer_left">
                <div class="arrow"></div>
                <p>page top</p>
            </a>
            <div class="footer_right">
                <ul class="footer_nav">
                    <li><a href="../index.html">TOP</a></li>
                    <li><a href="../work/index.html">WORK</a></li>
                    <li><a href="../about/index.html">ABOUT</a></li>
                    <li><a href="../contact/index.html">CONTACT</a></li>
                </ul>
                <!-- © 最初の発行年 著作権者の氏名 -->
                <p>&copy; 2023 Sawako Sugimori</p>
            </div>
        </div>


    </footer>
    <!-- jQuery -->
    <script>
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

            // tab
            // Count the number of works
            let count_works = $('.tab li').length;
            console.log(count_works);

            $('.tab li').on('click', function () {
                // Convert the doc to lower case and get first 3 letters
                let selected = $(this).html().toLowerCase();
                let converted = selected.slice(0, 3);
                console.log(converted);

                $('.item').hide();

                // If a user selects 'ALL'
                if (converted == 'all') {
                    $('.item').hide();
                    $('.item').fadeIn();
                } else {
                    // If a user selects other
                    $('.item').each(function () {
                        console.log($(this).data('cat'), converted)
                        if ($(this).data('cat') == converted) {
                            $(this).fadeIn();
                        }
                    });
                }

            });
        });

    </script>
</body>

</html>