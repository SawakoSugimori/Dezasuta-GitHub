<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Website :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="I created a hair salon website.">
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
    $ja_page = './work_salon.php'; // To JP page
    ?>
    <!-- Include head.php -->
    <?php include 
    $path.'inc/head.php';
    ?>
</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>
    <section class="work_details">
        <div class="mockup">
            <img src="../work/images/mockup-salon-at-2x-80-64acd774ead76.webp" alt="Hair Salon Website">
        </div>
        <div class="text">
            <div class="title">
                <h1>Website Design</h1>
                <p>Hair Salon Demo site</p>
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
                    In this landing page, we are targeting women in their 20s to 50s with the aim of increasing awareness of a beauty salon, acquiring reservations, and gaining followers on social media. Considering the target audience of women in their 20s to 50s, we have used a corporate color scheme with pink as the main color to create a bright and inviting atmosphere. For the typography, we have used a serif font to convey femininity and a calm ambiance. Additionally, by incorporating photos of the salon interior and people, we have created a website that conveys the ambiance and presence of the establishment.
                    <br>
                    The reservation button and social media buttons have been designed to follow the user on the right side of the page, intending to facilitate easy access to reservations and encourage social media following.                
                </p>
            </div>
        </div>
        <div class="whole_pic">
            <img src="../work/images/whole-salon-64acd84d55638.webp" alt="Whole image of the website">
        </div>
        <div class="btn_block">
            <a href="../work/index_en.php" class="btn">Back to WORK Page</a>
        </div>
    </section>
    <!-- Footer -->
    <?php include 
    $path.'inc/footer.php';
    ?>
</body>

</html>