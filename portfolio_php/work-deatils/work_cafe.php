<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Website :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="制作実績の紹介ページです。">
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
    ?>

</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>
    <section class="work_details">
        <div class="mockup">
            <img src="../work/images/mockup-cafe-at-2x-80-64acd76eb3071.webp" alt="カフェサイトの写真">
        </div>
        <div class="text">
            <div class="title">
                <h1>Website Design</h1>
                <p>カフェのデモサイト</p>
            </div>
            <div class="details">
                <table>
                    <tr>
                        <th class="name">制作人数</th>
                        <td class="value">個人</td>
                    </tr>
                    <tr>
                        <th class="name">担当</th>
                        <td class="value">コーディング</td>
                    </tr>
                    <tr>
                        <th class="name">ツール</th>
                        <td class="value">HTML / CSS / jQuery</td>
                    </tr>
                    <tr>
                        <th class="name">制作期間</th>
                        <td class="value">1週間</td>
                    </tr>
                </table>
            </div>
            <div class="desc">
                <h2>デザインについて</h2>
                <p>
                    カフェのデモサイトのコーディングをしました。 Illustratorのデザインカンプから、値を取得し、デザインを忠実に再現しています。具体的な機能は、トップへボタンの実装、Google
                    Mapsの地図の表示、画像スライダー等があります。トップへボタンに加え、グローバルメニューの各項目についても、ページ内リンクを設置しました。また、ファーストビューと、ギャラリーセクションでは、JavaScriptによって画像スライダーを設置しました。
                    ギャラリーセクションでは、画像をクリックすると、拡大した画像が表示されるモーダルウィンドウを実装しています。
                    <br>
                    さらに、ユーザーがサイトを使いやすくできるよう、パソコンとスマートフォンの画面サイズにレイアウトを最適化する、レスポンシブ対応をしています。
                </p>
            </div>
        </div>
        <div class="whole_pic">
            <img src="../work/images/whole-cafe-pc.png" alt="サイトの全体写真">
        </div>
        <div class="btn_block">
            <a href="../work/index.html" class="btn">WORK一覧へ戻る</a>
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
        });
    </script>
</body>

</html>