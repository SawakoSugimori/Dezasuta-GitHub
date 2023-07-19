<footer>
    <div class="footer_bg">
        <a href="#header" class="footer_left">
            <div class="arrow"></div>
            <p>page top</p>
        </a>
        <div class="footer_right">
            <ul class="footer_nav">
                <li><a href="<?php echo $path;?>index<?php echo isset($is_en) ? '_en"': ''?>.php">TOP</a></li>
                <li><a href="<?php echo $path;?>work/index<?php echo isset($is_en) ? '_en"': ''?>.php">WORK</a></li>
                <li><a href="<?php echo $path;?>about/index<?php echo isset($is_en) ? '_en"': ''?>.php">ABOUT</a></li>
                <li><a href="<?php echo $path;?>contact/index<?php echo isset($is_en) ? '_en"': ''?>.php">CONTACT</a></li>
            </ul>
            <!-- © 最初の発行年 著作権者の氏名 -->
            <p>&copy; 2023 Sawako Sugimori</p>
        </div>
    </div>
</footer>
<!-- Common js -->
<script src="<?php echo $path;?>js/script.js"></script>