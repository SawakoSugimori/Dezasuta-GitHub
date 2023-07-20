<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for reaching out to me! :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="Thank you for reaching out to me!">
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
    $ja_page = './index.php'; // To JP page
    ?>
</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>

    <section class="thankyou">
        <div class="left">
            <div class="bouquet sp_only">
                <img src="./image/thanks_2-min.png" alt="Image">
            </div>
            <h1 class="page_title">thank you<span>!</span></h1>
            <div class="text">
                <p>Thank you for contacting me.<br>
                    I will reach you out immediately.</p>
            </div>
            <div class="btn_block">
                <button class="btn pop" href="../index_en.php">BACK TO TOP<span></span></button>
            </div>
        </div>
        <div class="right pc_only">
            <img src="./image/thanks_2-min.png" alt="Image">
        </div>
    </section>

    <!-- Footer -->
    <?php include 
    $path.'inc/footer.php';
    ?>
    <script>
    </script>
</body>

</html>