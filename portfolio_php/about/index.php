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
    $is_ja = true; // Current language
    $en_page = './index_en.php'; // To English page
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

    <section class="about">
        <div class="intro">
            <h1 class="page_title">ABOUT</h1>
            <p>ここであなたと出会ったのも何かのご縁だと思います。<br>
                少しでも私について知っていただければ嬉しいです。</p>
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
                        <h3>「伝える、伝わる、つながる」を実現する。それが私の願いです。</h3>
                        <p>ウェブサイトは、遠い距離にいる人々が出会うことができる、コミュニケーションの場だと考えています。お客様の魅力が伝わる形、ユーザーが受け取りやすい形を追求することによって、想いがつながることを実現する。そんなデザイナーを目指しています。
                        </p>
                    </li>
                    <li>
                        <h3>新しい考えや知識を得るのが好きです。</h3>
                        <p>新しいことを知ることによって、自分の世界が広がる感覚を大切にしています。趣味の読書も、新たな観点からものを見ることができるようになる点が気に入っています。本は、月に10冊ほど読みます。人間の心理や歴史など、ノンフィクションが特に好きです。<br>また、違う文化背景がある人と話すことも、私にとってわくわくすることです。英語はより多くの人とのコミュニケーションを可能にしてくれるので、日々英語を勉強しています。
                        </p>
                    </li>
                    <li>
                        <h3>自分のアイディアを形にするのが好きです。</h3>
                        <p>思い浮かんだことを文章や絵などで表現しています。ブックレビューを書くこと、絵を描くこと、料理をすることなど、アイディアを形にすることを楽しんでいます。<br>プログラミングを学び、ホームぺージ制作も、自分のアイディアを形にすることができると思い、学び始めました。
                        </p>
                    </li>
                </ul>
            </div><!-- text -->
        </div><!-- flex -->
        <div class="ccl">
            <p class="title">Thank you for reading!</p>
            <p class="ccl_intro">読んでいただきありがとうございます。noteにて読書記録を投稿しています。<br class="pc_only">
                興味が湧いてきた方は、ぜひ一度訪れてみてください。</p>
            <p class="note_sec">note記事</p>
            <ul class="note">
                <li><a href="">時間とは。『モモ』読書記録#38 </a></li>
                <li><a href="">「死」によって生命は永遠になった 読書記録#37</a></li>
            </ul>
        </div>
        <!-- A button to go back to TOP page -->
        <div class="btn_block">
            <button href="../index.php" class="btn pop">TOPへ戻る<span></span></button>
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