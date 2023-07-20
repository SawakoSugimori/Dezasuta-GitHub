<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORK :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="Check out some of my latest work here.">
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
    $is_en = true; // Current language
    $ja_page = './index.php'; // To JP page
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
                <a class="hover_null" href="../work-deatils/work_salon_en.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">VIEW MORE</p>
                        </div>
                        <img src="./images/salonsite-mockup-80-64acd82400f75.webp" alt="Hair Salon Website">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 2 -->
            <li class="item" data-cat="web">
                <a class="hover_null" href="../work-deatils/work_cafe_en.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">VIEW MORE</p>
                        </div>
                        <img src="./images/cafesite-mockup-80-64acd81cec333.webp" alt="Cafe Website">
                    </div>
                    <p class="role">Frontend developer</p>
                </a>
            </li>
            <!-- item 3 -->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_ham01_en.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">VIEW MORE</p>
                        </div>
                        <img src="./images/banner-ham01-80-64acd75898935.webp" alt="Hamburger Banner">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 4-->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_ham02_en.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">VIEW MORE</p>
                        </div>
                        <img src="./images/banner-ham02-80-64acd7586348d.webp" alt="Hamburger Banner">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 5-->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_ham02_en.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">VIEW MORE</p>
                        </div>
                        <img src="./images/banner-ham03-80-64acd7632d333.webp" alt="Hamburger Banner">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 6 -->
            <li class="item" data-cat="web">
                <a class="hover_null" href="../work-deatils/work_coworking_en.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">VIEW MORE</p>
                        </div>
                        <img src="./images/coworkingsite-mockup-80-64acd820229e2.webp" alt="Website">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 7 -->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_mobile_en.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">VIEW MORE</p>
                        </div>
                        <img src="./images/banner-mobile-80-64acd75b13165.webp" alt="Banner">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>
            <!-- item 8 -->
            <li class="item" data-cat="ban">
                <a class="hover_null" href="../work-deatils/work_travel_en.php">
                    <div class="mask_area">
                        <div class="mask">
                            <p class="caption">VIEW MORE</p>
                        </div>
                        <img src="./images/banner-travel-80-64acd75b8212e.webp" alt="Banner">
                    </div>
                    <p class="role">Designer</p>
                </a>
            </li>

        </ul>
        <!-- A button to go back to TOP page -->
        <div class="btn_block">
            <button href="../index_en.php" class="btn pop">BACK TO TOP<span></span></button>
        </div>

    </section>

    <!-- Footer -->
    <?php include 
    $path.'inc/footer.php';
    ?>

    <!-- jQuery -->
    <script>
        $(function () {
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