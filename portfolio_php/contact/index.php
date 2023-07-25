<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="杉森佐和子へのお問い合わせページです。">
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
    $is_contact = true; // 現在の位置
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

    <section class="contact">
        <h1 class="page_title">CONTACT</h1>
        <p>ご依頼・ご質問等がありましたら、お問い合わせフォームやSNSより、お気軽にお問い合わせください。</p>
        <ul class="social_links">
            <li class="social_icon"><a href="https://instagram.com/sawako.atelier?igshid=MzNlNGNkZWQ4Mg==" target="_blank"><img src="../images/icons/ig-icon-min.png" alt="
                Instagram"></a>
            </li>
            <li class="social_icon"><a href="#" target="_blank"><img src="../images/icons/twitter-icon-min.png" alt="
                Twitter"></a>
            </li>

        </ul>
        <form
            action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfW3Gw83pX6i_pLZpG5GUARikziPbYqu8m0Eiq6oGSUUvM6Yw/formResponse"
            method="post" target="hidden_iframe" onsubmit="submitted=true">

            <label for="name">お名前</label>
            <input id="name" class="required" type="text" placeholder="山田 太郎" name="entry.1982888611" required>
            <p class="error_text"></p>

            <label for="email">メールアドレス</label>
            <input id="email" class="required" type="text" placeholder="example@mail.co.jp" name="entry.463273501"
                required>
            <p class="error_text"></p>

            <label for="msg">メッセージ</label>
            <textarea id="msg" class="required" placeholder="お気軽にお問い合わせください。" name="entry.1729223197"
                required></textarea>
            <p class="error_text"></p>

            <!-- <p class="submit">submit</p> -->
            <button class="submit btn" type="submit" name="button" value="送信">メッセージを送信する</button>
        </form>
    </section>

    <!-- Footer -->
    <?php include 
    $path.'inc/footer.php';
    ?>
    <!-- jQuery -->
    <script>
        var submitted = false;
        $(function () {
            // Form Validation 
            // Get values of the input field with id="required"
            let requireds = document.querySelectorAll('.required');
            // エラーメッセージを表示するpタグを取得
            let errors = document.querySelectorAll('.error_text');
            // 必須フィールドの数を取得
            let requiredLength = requireds.length;
            // sunmitボタンを取得
            const submit = document.querySelector('.submit');
            submit.addEventListener('click', function (e) {
                // Cancel default actions
                for (let i = 0; i < requiredLength; i++) {
                    if (requireds[i].value == "") {
                        // エラーメッセージを表示
                        errors[i].innerHTML = "このフィールドは必須です。";
                    } else {
                        errors[i].innerHTML = "";
                    }
                }
            });
        });

    </script>
    <!-- Render to the thank you page-->
    <iframe name="hidden_iframe" id="hidden_iframe" style="display: none;"
        onload="if(submitted) {window.location='./thanks.php';}">
    </iframe>
</body>

</html>