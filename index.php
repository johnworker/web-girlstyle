<?php
/**
 * Template Name: index
 *
 */
?>

<?php get_header(); ?>
    <!-- 導覽列 -->
    <nav data-aos="fade" data-aos-delay="500" data-aos-duration="3000">
        <div id="menu">
            <div class="mini_link_box">
                <ul class="mini_link">
                    <li>
                        <a href="./index.php"><img src="<?php bloginfo('template_directory') ?>/img/logo_two.png" alt="形象天使標誌"></a>
                    </li>
                    <li>
                        <a href="./recommend.php">最新商品</a>
                    </li>
                    <li>
                        <div class="link_mini_work">
                            服裝類型
                            <ul class="sub_mini_link">
                                <li>
                                    <a href="./clothes.php">上衣</a>
                                </li>
                                <li>
                                    <a href="./pants.php">褲款</a>
                                </li>
                                <li>
                                    <a href="./skirt.php">裙款</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="link_mini_work_two">
                            配件樣式
                            <ul class="sub_mini_link_two">
                                <li>
                                    <a href="./accessories.php">飾品</a>
                                </li>
                                <li>
                                    <a href="./bag.php">包包</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li>
                        <a href="./contact.php" data-st-target="list" data-st-duration="1000"
                            data-st-offset="100">聯絡我們</a>
                    </li>
                </ul>
            </div>
        </div>
        <div></div>
        <div id="link">
            <a href="./index.php" class="logo"><img src="<?php bloginfo('template_directory') ?>/img/logo_two.png" alt="形象天使標誌"></a>
            <a href="./recommend.php">最新商品</a>
            <div id="link_work">
                服裝類型
                <ul class="sub_link">
                    <li>
                        <a href="./clothes.php">上衣</a>
                    </li>
                    <li>
                        <a href="./pants.php">褲款</a>
                    </li>
                    <li>
                        <a href="./skirt.php">裙款</a>
                    </li>
                </ul>
            </div>

            <div id="link_work_two">
                配件樣式
                <ul class="sub_link_two">
                    <li>
                        <a href="./accessories.php">飾品</a>
                    </li>
                    <li>
                        <a href="./bag.php">包包</a>
                    </li>
                </ul>
            </div>
            <a href="./contact.php" data-st-target="list" data-st-duration="1000" data-st-offset="100">聯絡我們</a>
        </div>
        <div id="social">
            <a href="https://www.youtube.com/results?search_query=fashion+shop" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/youtube.png"
                    alt="youtube"></a>
            <a href="https://www.instagram.com/besscomha" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/instagram.png"
                    alt="instagram"></a>
            <a href="http://m.facebook.com/yanjun.liao.50?ref=bookmarks" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/facebook.png"
                    alt="facebook"></a>
            <a href="https://github.com/" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/github.png" alt="github"></a>
        </div>
    </nav>

    <!-- 輪播 -->
    <div id="banner">
        <!-- (.banner$>h1{標題一}+h2{標題二})*3 -->
        <div class="banner1">
            <h2 data-aos="fade-up" data-aos-duration="1000">實體店面</h2>
        </div>
        <div class="banner2">
            <h2 data-aos="fade-up" data-aos-duration="1000">新品專區</h2>
        </div>
        <div class="banner3">
            <h2 data-aos="fade-up" data-aos-duration="1000">服裝款式</h2>
        </div>
    </div>
    
    <!-- 關於APP -->
    <h2 class="title-big">RECOMMEND</h2>
    <!-- section#about>.big_box>h2+p-->
    <section id="about" data-aos="fade" data-aos-duration="3000">
        <div class="big_box">
            <p>enjoy your moments</p>

            <div class="mini_max_box">
                <div class="mini_box">
                    <div class="mini_card">
                        <a href="./clothes_shirt.php" target="_blank">
                            <img src="<?php bloginfo('template_directory') ?>/img/girl1.jpg" alt="手機螢幕">
                        </a>
                        <h3>時尚穿搭</h3>
                    </div>
                </div>

                <div class="mini_box">
                    <div class="mini_card">
                        <a href="./clothes_skirt.php" target="_blank">
                            <img src="<?php bloginfo('template_directory') ?>/img/girl2.jpg" alt="手機螢幕">
                        </a>
                        <h3>輕鬆夏日</h3>
                    </div>
                </div>

                <div class="mini_box">
                    <div class="mini_card">
                        <a href="./clothes_bag.php" target="_blank">
                            <img src="<?php bloginfo('template_directory') ?>/img/skirt_three.jpg" alt="手機螢幕">
                        </a>
                        <h3>可愛風格</h3>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 最新消息 -->
    <section id="news">
        <h2 class="title-big">New Products</h2>
        <div id="news-content">
            <!-- (.news-card>img+h3{標題三}+p{lorem10}+button{按鈕})*3 -->
            <div class="news-card" data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="1000">
                <a href="https://shopee.tw/blog/aw-fashion-wear/" target="blank">
                    <img class="recipe1" src="<?php bloginfo('template_directory') ?>/img/new_product_one.jpg" alt="食譜最新消息"></a>
                <a href="https://shopee.tw/blog/aw-fashion-wear/" target="blank">
                    <img class="recipe2" src="<?php bloginfo('template_directory') ?>/img/new_product_two.jpg" alt="食譜最新消息">
                </a>
                <a href="https://shopee.tw/blog/aw-fashion-wear/" target="blank">
                    <h4>時尚套裝</h4>
                </a>
            </div>
            <div class="news-card" data-aos="zoom-in-up" data-aos-delay="800" data-aos-duration="1000">
                <a href="https://www.harpersbazaar.com.hk/fashion/business-casual-outfits" target="blank">
                    <img class="recipe1" src="<?php bloginfo('template_directory') ?>/img/new_product_three.jpg" alt="外送最新消息">
                </a>
                <a href="https://www.harpersbazaar.com.hk/fashion/business-casual-outfits" target="blank">
                    <img class="recipe2" src="<?php bloginfo('template_directory') ?>/img/new_product_four.jpg" alt="外送最新消息">
                </a>
                <a href="https://www.harpersbazaar.com.hk/fashion/business-casual-outfits" target="blank">
                    <h4>正式配裝</h4>
                </a>
            </div>
            <div class="news-card" data-aos="zoom-in-up" data-aos-delay="1000" data-aos-duration="1000">
                <a href="https://www.chachagood.com/article/spring-and-summer-outfit/6-american-casual-style" target="blank">
                    <img class="recipe1" src="<?php bloginfo('template_directory') ?>/img/new_product_five.jpg" alt="餐廳最新消息">
                </a>
                <a href="https://www.chachagood.com/article/spring-and-summer-outfit/6-american-casual-style" target="blank">
                    <img class="recipe2" src="<?php bloginfo('template_directory') ?>/img/new_product_six.jpg" alt="餐廳最新消息">
                </a>
                <a href="https://www.chachagood.com/article/spring-and-summer-outfit/6-american-casual-style" target="blank">
                    <h4>休閒著裝</h4>
                </a>
            </div>

        </div>
    </section>

    <!-- 頁尾 -->
    <footer>
        <div>
            <a href="./index.php" class="logo"><img src="<?php bloginfo('template_directory') ?>/img/logo_two.png" alt="形象天使標誌"></a>
        </div>
        <small id="copy">
            &copy; LEO 2021.
        </small>
        <div id="link">
            <a href="./recommend.php">最新商品</a>
            <a href="./contact.php">聯絡方式</a>
        </div>
    </footer>

    <!-- data-st-top 箭頭要出現的高度 -->
    <!-- data-st-time 特效的持續時間 -->
    <a id="arrow" data-st-target="top" data-st-duration="800" data-st-top="300" data-st-time="1000"></a>

    <?php get_footer(); ?>