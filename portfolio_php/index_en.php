<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawako Sugimori's Portfolio</title>
    <meta name="description" content="The portfolio site of Sawako Sugimori - Frontend engineer and Web designer.">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/commons.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Poppins:wght@400;500&family=Ubuntu&display=swap');
    </style>
    <!-- php -->
    <?php
    $path = './'; // ファイルパスの変数
    $is_top = true; // 現在の位置
    $is_en = true; // Current language
    $ja_page = './index_.php'; // To English page
    ?>
</head>

<body>
    <!-- Loading -->
    <div class="loading">
        <div class="loading-animation">
            <div class="wrap">
                <div class="bounceball"></div>
                <div class="text">NOW LOADING</div>
            </div>
        </div>
    </div>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>
    <!-- top_wrapper -->
    <section class="top_wrapper">
        <div class="top_bg">
            <div class="layout">
                <div class="copy">
                    <h1>Design your connection</h1>
                    <p>I’m a web designer and developer from Japan.</p>
                </div>
                <div class="top_circle">
                    <div><img class="circular" src="./images/top_circle_letter-min.png" alt="sawa design"></div>
                    <div class="absolute"><img src="./images/logo-dark-thin-min.png" alt="TOP IMAGE"></div>
                </div>
            </div><!-- layout -->
        </div><!-- top_bg -->
        <div id="about_bg" class="pagedown_arrow"></div>
    </section><!-- top_wrapper-->

    <!-- About -->
    <section class="about section_bg">
        <div class="flex">
            <div class="profile_left">
                <div class="relative"><!-- ::beforeで高さを与える -->
                    <div class="inner"><!-- ここにもposition: absoluteを使用-->
                        <div class="circle"></div>
                        <div class="my_pic">
                            <img src="./images/profilepic-min.png" alt="杉森佐和子の写真">
                        </div>
                        <h2 class="sp_only">Hello<span>!</span></h2>
                    </div>
                </div>
            </div>
            <div class="content">
                <h2 class="pc_only">Hello<span>!</span></h2>
                <p>Nice to meet you, I'm Sawako from Japan. </p>
                <p>I love creating a design  because creating designs also allows me to think deeply about human cognition and thinking. This is my favorite time of the day.</p>
                <div id="work_bg" class="btn_block">
                    <button href="./about/index.php" class="btn pop">learn more about me<span></span></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Work -->
    <section class="work section_bg">
        <div class="centered">
            <h2>Selected Work</h2>
            <ul class="works">
                <!-- No.1 -->
                <li class="item">
                    <a class="hover_null" href="./work-deatils/work_salon_en.php">
                        <div class="mask_area">
                            <div class="mask">
                                <p class="caption">VIEW MORE</p>
                            </div>
                            <img src="./work/images/salonsite-mockup-80-64acd82400f75.webp" alt="Salon Website">
                        </div>
                        <p class="role">Designer</p>
                    </a>
                </li>
                <!-- No.2 -->
                <li class="item">
                    <a class="hover_null" href="./work-deatils/work_cafe_en.php">
                        <div class="mask_area">
                            <div class="mask">
                                <p class="caption">VIEW MORE</p>
                            </div>
                            <img src="./work/images/cafesite-mockup-80-64acd81cec333.webp" alt="Cafe Website">
                        </div>
                        <p class="role">Frontend developer</p>
                    </a>
                </li>
                <!-- No.3 -->
                <li class="item">
                    <a class="hover_null" href="./work-deatils/work_ham01_en.php">
                        <div class="mask_area">
                            <div class="mask">
                                <p class="caption">VIEW MORE</p>
                            </div>
                            <img src="./work/images/banner-ham01-80-64acd75898935.webp" alt="Hamburger Banner">
                        </div>
                        <p class="role">Designer</p>
                    </a>
                </li>
            </ul><!-- .works-->
            <div id="service_bg" class="btn_block">
                <button href="./work/index.php" class="btn pop">View all work<span></span></button>
            </div>
        </div><!-- .centered -->
    </section><!-- .works -->

    <section class="service section_bg">
        <div class="centered">
            <h2>What I do<span>?</span></h2>
            <div class="content">
                <div class="left">
                    <div class="sticky">
                        <div class="design">
                            <div>
                                <img src="./images/design_1-min.png" alt="Image">
                            </div>
                            <div class="text">
                                <h3>DESIGN</h3>
                                <ul class="skills">
                                    <li>Photoshop</li>
                                    <li>Illustrator</li>
                                    <li>Figma</li>
                                </ul>
                            </div>

                        </div>
                        <div class="coding">
                            <div>
                                <img src="./images/coding_1-min.png" alt="Image">
                            </div>
                            <div class="text">
                                <h3>CODING</h3>
                                <ul class="skills">
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>SCSS</li>
                                </ul>
                                <ul class="skills">
                                    <li>JavaScript</li>
                                    <li>jQuery</li>
                                    <li>C</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <ul class="right">
                    <!-- No.1 -->
                    <li class="card">
                        <div class="relative">
                            <p class="sub">service</p>
                            <p class="num">01</p>
                        </div><!-- .relative -->
                        <div class="center">
                            <div class="text">
                                <h3>Web Design</h3>
                                <p>After conducting a thorough client consultation to understand your requirements, I will create a design that effectively achieves your objectives.   
                                </p>
                            </div>
                        </div>
                    </li><!-- .card -->
                    <!-- No.2 -->
                    <li class="card">
                        <div class="relative">
                            <p class="sub">service</p>
                            <p class="num">02</p>
                        </div><!-- .relative -->
                        <div class="center">
                            <div class="text">
                                <h3 class="">Graphic Design</h3>
                                <p>I will create illustrations in line with your desires. I will propose illustrations that enhance the appeal of the service when creating illustrations for graphics in a website .</p>
                            </div>
                        </div>
                    </li><!-- .card -->
                    <!-- No.3 -->
                    <li id="contact_bg" class="card">
                        <div class="relative">
                            <p class="sub">service</p>
                            <p class="num">03</p>
                        </div><!-- .relative -->
                        <div class="center">
                            <div class="text">
                                <h3>Web development</h3>
                                <p>I will understand the intention of the design and integrate motion that enhance the design. I will implement a responsive design that optimizes the layout based on screen sizes.
                                </p>
                            </div>
                        </div>
                    </li><!-- .card -->
                </ul>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact section_bg">
        <h2>SAY HI<span>!</span></h2>
        <p>Please feel free to contact me.  Let’ｓ create something together!</p>
        <ul class="social_links">
            <li class="social_icon"><a href="#"><img src="./images/icons/github-icon-min.png" alt="Github"></a></li>
            <li class="social_icon"><a href="#"><img src="./images/icons/ig-icon-min.png" alt="Instagram"></a></li>
            <li class="social_icon"><a href="#"><img src="./images/icons/twitter-icon-min.png" alt="Twitter"></a></li>
        </ul>
    </section>
    <!-- Footer -->
    <?php include 
    $path.'inc/footer.php';
    ?>
    <script>
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
    </script>
</body>

</html>