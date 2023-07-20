<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for reaching out to me! :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="お問い合わせありがとうございます。">
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
    $is_ja = true; // Current language
    $en_page = './index_en.php'; // To English page
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
                <img src="./image/thanks_2-min.png" alt="イラスト">
            </div>
            <h1 class="page_title">thank you<span>!</span></h1>
            <div class="text">
                <p>お問い合わせありがとうございます！お送り頂きました内容を確認の上、3日以内に折り返しご連絡させて頂きます。</p>
                <p class="caution">
                    *3日が過ぎてもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、迷惑メールフォルダに振り分けられている可能性がございます。また、ドメイン指定をされている場合は、「sawakosugimori@gmail.com」からのメールが受信できるようあらかじめ設定をお願いいたします。
                </p>
            </div>
            <div class="btn_block">
                <button class="btn" href="../index.php">トップページに戻る<span></span></button>
            </div>
        </div>
        <div class="right pc_only">
            <img src="./image/thanks_2-min.png" alt="イラスト">
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