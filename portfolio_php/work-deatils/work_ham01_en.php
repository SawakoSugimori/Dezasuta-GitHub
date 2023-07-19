<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger Banner :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="I created a hamburger banner">
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
    $ja_page = './work_ham01.php'; // To JP page
    ?>

</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>
    <section class="work_details">
        <div class="banner_mockup">
            <img src="../work/images/banner-ham01-80-64acd75898935.webp" alt="Banner Image">
        </div>
        <div class="text">
            <div class="title">
                <h1>Banner Design</h1>
                <p>Hamburger Banner</p>
            </div>
            <div class="details">
                <table>
                    <tr>
                        <th class="name">Context</th>
                        <td class="value">Personal Project</td>
                    </tr>
                    <tr>
                        <th class="name">Role</th>
                        <td class="value">Design</td>
                    </tr>
                    <tr>
                        <th class="name">Tool</th>
                        <td class="value">Illustrator / Photoshop</td>
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
                I have designed and created a web banner for a hamburger advertisement. The target audience is students returning from school, so I aimed for a visually appealing design that showcases the volume of the burger. I made the photos and text larger to create impact. For the background color, I chose a dark shade of red that contrasts with the hamburger and also stimulates appetite.                </p>
            </div>
        </div>
        <!-- <div class="whole_pic">
            <img src="../work/images/whole-salon-64acd84d55638.webp" alt="美容室のサイトの全体写真">
        </div> -->
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