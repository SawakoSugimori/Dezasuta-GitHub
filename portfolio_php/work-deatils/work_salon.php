<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Website :Sawako Sugimori's Portfolio</title>
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
            <img src="../work/images/mockup-salon-at-2x-80-64acd774ead76.webp" alt="美容室のサイトの写真">
        </div>
        <div class="text">
            <div class="title">
                <h1>Website Design</h1>
                <p>美容室のデモサイト</p>
            </div>
            <div class="details">
                <table>
                    <tr>
                        <th class="name">制作人数</th>
                        <td class="value">個人</td>
                    </tr>
                    <tr>
                        <th class="name">担当</th>
                        <td class="value">UI Design</td>
                    </tr>
                    <tr>
                        <th class="name">ツール</th>
                        <td class="value">Illustrator / Photoshop</td>
                    </tr>
                    <tr>
                        <th class="name">制作期間</th>
                        <td class="value">2週間</td>
                    </tr>
                </table>
            </div>
            <div class="desc">
                <h2>デザインについて</h2>
                <p>
                    このランディングページでは、20代～50代の女性をターゲットに、美容室の認知向上、予約の獲得、SNSのフォロワーの獲得を目的としています。20代～50代の女性がターゲットということで、コーポレートカラーのピンクを基調に、明るい雰囲気に仕上げました。欧文フォントは、女性らしさや落ち着いた雰囲気を出すために、セリフ体を使用しています。また、美容室内や人物の写真を積極的にしようすることにより、お店の雰囲気や人が感じられるようなウェブサイトにしました。
                    <br>    
                    予約ボタンと各SNSのボタンは、右サイドに追従するようにデザインし、予約の獲得とSNSのフォロワーの獲得につながりやすくするという意図があります。
                </p>
            </div>
        </div>
        <div class="whole_pic">
            <img src="../work/images/whole-salon-64acd84d55638.webp" alt="美容室のサイトの全体写真">
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