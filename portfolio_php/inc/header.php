<header id="header">
        <div class="header_wrap">
            <nav class="global_nav">
                <ul class="nav_left">
                    <li <?php echo isset($is_top) ? 'class="current_page"': ''?>><a href="<?php echo $path;?>index<?php echo isset($is_en) ? '_en': ''?>.php">TOP</a></li>
                    <li <?php echo isset($is_work) ? 'class="current_page"': ''?>><a href="<?php echo $path;?>work/index<?php echo isset($is_en) ? '_en': ''?>.php">WORK</a></li>
                    <li <?php echo isset($is_about) ? 'class="current_page"': ''?>><a href="<?php echo $path;?>about/index<?php echo isset($is_en) ? '_en': ''?>.php">ABOUT</a></li>
                    <li <?php echo isset($is_contact) ? 'class="current_page"': ''?>><a href="<?php echo $path;?>contact/index<?php echo isset($is_en) ? '_en': ''?>.php">CONTACT</a></li>
                </ul>
                <div class="nav_right">
                    <div class="lang_switcher">
                        <p class="lang" <?php echo isset($is_ja) ? 'class="current_page"': ''?>><a href="<?php echo $ja_page;?>">日本語</a></p>
                        <span>/</span>
                        <p class="lang" <?php echo isset($is_en) ? 'class="current_page"': ''?>><a href="<?php echo $en_page;?>">English</a></p>
                    </div>
                    <ul class="social_links">
                        <li class="social_icon"><a href="#"><img src="<?php echo $path;?>/images/icons/github-icon-min.png"
                                    alt="Github"></a>
                        </li>
                        <li class="social_icon"><a href="#"><img src="<?php echo $path;?>/images/icons/ig-icon-min.png"
                                    alt="Instagram"></a>
                        </li>
                        <li class="social_icon"><a href="#"><img src="<?php echo $path;?>/images/icons/twitter-icon-min.png"
                                    alt="Twitter"></a>
                        </li>
                    </ul>
                </div>
            </nav><!-- global_nav -->
            <!-- hamburger menu-->
            <div class="fixed">
                <div class="ham_btn"><span></span><span></span></div>
            </div>
            <nav class="sp_nav null">
                <div class="close_btn"><span></span><span></span></div>
                <ul class="nav_left">
                    <li <?php echo isset($is_top) ? 'class="current_page"': ''?>><a href="<?php echo $path;?>index<?php echo isset($is_en) ? '_en': ''?>.php">TOP</a></li>
                    <li <?php echo isset($is_work) ? 'class="current_page"': ''?>><a href="<?php echo $path;?>work/index<?php echo isset($is_en) ? '_en': ''?>.php">WORK</a></li>
                    <li <?php echo isset($is_about) ? 'class="current_page"': ''?>><a href="<?php echo $path;?>about/index<?php echo isset($is_en) ? '_en': ''?>.php">ABOUT</a></li>
                    <li <?php echo isset($is_contact) ? 'class="current_page"': ''?>><a href="<?php echo $path;?>contact/index<?php echo isset($is_en) ? '_en': ''?>.php">CONTACT</a></li>
                </ul>
                <div class="nav_right">
                    <ul class="social_links">
                        <li class="social_icon"><a href="#"><img src="<?php echo $path;?>/images/icons/github-white-64af4ba148b4e.webp"
                                    alt="Github"></a>
                        </li>
                        <li class="social_icon"><a href="#"><img src="<?php echo $path;?>/images/icons/ig-white-64af4ba154069.webp"
                                    alt="Instagram"></a>
                        </li>
                        <li class="social_icon"><a href="#"><img src="<?php echo $path;?>/images/icons/twitter-white-64af4ba3dc597.webp"
                                    alt="Twitter"></a>
                        </li>
                    </ul>
                    <div class="lang_switcher">
                        <p class="lang" <?php echo isset($is_ja) ? 'class="current_page"': ''?>><a href="<?php echo $ja_page;?>">日本語</a></p>
                        <span>/</span>
                        <p class="lang" <?php echo isset($is_en) ? 'class="current_page"': ''?>><a href="<?php echo $en_page;?>">English</a></p>
                    </div>
                </div>
            </nav>
        </div>
    </header>
