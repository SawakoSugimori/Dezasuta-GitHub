<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT :Sawako Sugimori's Portfolio</title>
    <meta name="description" content="You can contact me through here.">
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
    $is_en = true; // Current language
    $ja_page = './index.php'; // To JP page
    ?>
</head>

<body>
    <!-- Include header.php -->
    <?php include 
    $path.'inc/header.php';
    ?>

    <section class="contact">
        <h1 class="page_title">CONTACT</h1>
        <p>Please feel free to contact me.  Let’ｓ create something together!</p>
        <ul class="social_links">
            <li class="social_icon"><a href="#"><img src="../images/icons/ig-icon-min.png" alt="
                Instagram"></a>
            </li>
            <li class="social_icon"><a href="#"><img src="../images/icons/twitter-icon-min.png" alt="
                Twitter"></a>
            </li>

        </ul>
        <form
            action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfW3Gw83pX6i_pLZpG5GUARikziPbYqu8m0Eiq6oGSUUvM6Yw/formResponse"
            method="post" target="hidden_iframe" onsubmit="submitted=true">

            <label for="name">NAME</label>
            <input id="name" class="required" type="text" placeholder="" name="entry.1982888611" required>
            <p class="error_text"></p>

            <label for="email">EMAIL ADDRESS</label>
            <input id="email" class="required" type="text" placeholder="example@mail.co.jp" name="entry.463273501"
                required>
            <p class="error_text"></p>

            <label for="msg">MESSAGE</label>
            <textarea id="msg" class="required" placeholder="" name="entry.1729223197"
                required></textarea>
            <p class="error_text"></p>

            <!-- <p class="submit">submit</p> -->
            <button class="submit" type="submit" name="button" value="送信">SEND A MESSAGE</button>
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
                        errors[i].innerHTML = "Please fill this field.";
                    } else {
                        errors[i].innerHTML = "";
                    }
                }
            });
        });

    </script>
    <!-- Render to the thank you page-->
    <iframe name="hidden_iframe" id="hidden_iframe" style="display: none;"
        onload="if(submitted) {window.location='thanks.php';}">
    </iframe>
</body>

</html>