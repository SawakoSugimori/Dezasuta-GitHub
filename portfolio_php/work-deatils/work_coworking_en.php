<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coworking Space Website :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="I desgin the website for a coworking space.">
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
    $ja_page = './work_coworking.php'; // To JP page
    ?>

</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>
    <section class="work_details">
        <div class="mockup">
            <img src="../work/images/mockup-workspace-at-2x-80-64acd76ea8bd8.webp" alt="サイトの写真">
        </div>
        <div class="text">
            <div class="title">
                <h1>Website Design</h1>
                <p>Coworking Space Demosite</p>
            </div>
            <div class="details">
                <table>
                    <tr>
                        <th class="name">Contex</th>
                        <td class="value">Personal Project</td>
                    </tr>
                    <tr>
                        <th class="name">Role</th>
                        <td class="value">UI Design</td>
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
            <!-- <div class="desc">
                <h2>デザインについて</h2>
                <p>
                    ウェブサイトデザインの模写をしました。Illustratorで作成されたデザインカンプに基づき、パソコンとスマホのデザインを作成しました。
                </p>
            </div> -->
        </div>
        <div class="whole_pic">
            <img src="../work/images/whole-workspace-pc.webp" alt="サイトの全体写真">
        </div>
        <div class="btn_block">
            <a href="../work/index.php" class="btn">Back to WORK Page</a>
        </div>
    </section>
    <!-- Footer -->
    <?php include 
    $path.'inc/footer.php';
    ?>
</body>

</html>