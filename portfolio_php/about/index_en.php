<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="杉森佐和子の紹介ページです。">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/commons.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Poppins:wght@400;500&family=Ubuntu&display=swap');
    </style>
    <!-- php -->
    <?php
    $path = '../'; // ファイルパスの変数
    $is_about = true; // 現在の位置
    $is_en = true; // Current language
    $ja_page = './index.php'; // To JP page
    ?>
</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>

    <section class="about">
        <div class="intro">
            <h1 class="page_title">ABOUT</h1>
            <p>I’m a web designer and developer from Japan.<br>
                I love learning and creating which allows me to stay inspired.</p>
        </div>

        <div class="flex">
            <div class="image">
                <div class="sticky">
                    <img src="./images/aboutme02-min.png" alt="イラスト">
                </div><!-- sticky -->
            </div><!-- image -->
            <div class="text">
                <ul>
                    <li>
                        <h3>My dream is connecting people through design.</h3>
                        <p>I believe connecting people through design is a powerful way to foster communication, understanding, and collaboration among individuals. I also believe design has the ability to bridge gaps, break barriers, and create inclusive experiences that bring people together. By leveraging the principles of user-centered design, empathy, and effective communication, I would like to create meaningful connections and make a positive impact on people's lives. 
                        </p>
                    </li>
                    <li>
                        <h3>I like learning something new.</h3>
                        <p>I value the learning new things because it lets me to broaden my horizon.  I especially enjoy reading books which allows me to change my perspective.  I read about 10 books per month, with a strong preference for non-fiction genres such as human psychology and history.Furthermore, I find it exciting to communicate with people from different cultural backgrounds.  English, in particular, enables me to communicate with a various people, so I study it daily.
                        </p>
                    </li>
                    <li>
                        <h3>I like to be creative.</h3>
                        <p>I express my thoughts and ideas through writing, drawing, and other forms of artistic expression. I enjoy writing book reviews, creating artwork, and cooking as a way to give shape to my ideas.<br>
                            I started learning programming and web development because I believe it allows me to bring my own ideas to life.
                        </p>
                    </li>
                </ul>
            </div><!-- text -->
        </div><!-- flex -->
        <div class="ccl">
            <p class="title">Thank you for reading!</p>
            <p class="ccl_intro">I'm happy that you're interested in me.<br class="pc_only">
            Please feel free to get in touch with me.  Let’s create something together!</p>
        </div>
    </section>

    <!-- Footer -->
    <?php include 
    $path.'inc/footer.php';
    ?>
    <!-- jQuery -->
    <script>
    </script>
</body>

</html>