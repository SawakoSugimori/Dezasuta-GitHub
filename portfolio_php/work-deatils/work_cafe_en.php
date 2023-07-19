<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Website :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="I created a cafe website">
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
    $is_en = true; // Current language
    $ja_page = './work_cafe.php'; // To JP page
    ?>

</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>
    <section class="work_details">
        <div class="mockup">
            <img src="../work/images/mockup-cafe-at-2x-80-64acd76eb3071.webp" alt="Cafesite Image">
        </div>
        <div class="text">
            <div class="title">
                <h1>Website Design</h1>
                <p>Cafe Demosite<p>
            </div>
            <div class="details">
                <table>
                    <tr>
                        <th class="name">Context</th>
                        <td class="value">Presonal Project</td>
                    </tr>
                    <tr>
                        <th class="name">Role</th>
                        <td class="value">Web development</td>
                    </tr>
                    <tr>
                        <th class="name">Tool</th>
                        <td class="value">HTML / CSS / jQuery</td>
                    </tr>
                    <tr>
                        <th class="name">Period</th>
                        <td class="value">1 week</td>
                    </tr>
                </table>
            </div>
            <div class="desc">
                <h2>About The Project</h2>
                <p>
                    I have coded a demo site for a café. I extracted values from the design mockup in Illustrator and faithfully reproduced the design. The specific functionalities include a back-to-top button, displaying a Google Maps map, and an image slider. In addition to the back-to-top button, I have also added page links for each item in the global menu. Moreover, I implemented image sliders using JavaScript for the first view and gallery section. In the gallery section, when you click on an image, it opens a modal window displaying the enlarged image.                    
                    <br>
                    Furthermore, to enhance user-friendliness, the layout has been optimized to be responsive, adapting to the screen sizes of both desktop and smartphone devices.                </p>
            </div>
        </div>
        <div class="whole_pic">
            <img src="../work/images/whole-cafe-pc.png" alt="サイトの全体写真">
        </div>
        <div class="btn_block">
            <a href="../work/index.php" class="btn">WORK一覧へ戻る</a>
        </div>
    </section>
    <!-- Footer -->
    <?php include 
    $path.'inc/footer.php';
    ?>
</body>

</html>