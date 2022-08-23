<?php get_header(); ?>
    <!-- 導覽列 -->
    <nav data-aos="fade" data-aos-delay="500" data-aos-duration="3000">
        <div id="menu">
            <div class="mini_link_box">
                <ul class="mini_link">
                    <li>
                        <a href="./index.php"><img src="./img/logo_two.png" alt="形象天使標誌"></a>
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
            <a href="./index.php" class="logo"><img src="./img/logo_two.png" alt="形象天使標誌"></a>
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
            <a href="https://www.youtube.com/results?search_query=fashion+shop" target="blank"><img src="./img/youtube.png"
                    alt="youtube"></a>
            <a href="https://www.instagram.com/besscomha" target="blank"><img src="./img/instagram.png"
                    alt="instagram"></a>
            <a href="http://m.facebook.com/yanjun.liao.50?ref=bookmarks" target="blank"><img src="./img/facebook.png"
                    alt="facebook"></a>
            <a href="https://github.com/" target="blank"><img src="./img/github.png" alt="github"></a>
        </div>
    </nav>

    <!-- section#about>.big_box>h2+p-->
    <section id="choose" data-aos="fade" data-aos-duration="3000">
        <div class="big_box">
            <p>summer shock</p>

            <div class="mini_max_box">
                <div class="mini_box">
                    <div class="mini_card">
                        <a href="./clothes_bag.html" target="_blank">
                            <img src="./img/bag_one.jpg" alt="服裝">
                        </a>
                        <h3>時尚穿搭</h3>
                    </div>
                </div>

                <div class="mini_box">
                    <div class="mini_card">
                        <a href="./clothes_bag.html" target="_blank">
                            <img src="./img/bag_two.jpg" alt="服裝">
                        </a>
                        <h3>輕鬆夏日</h3>
                    </div>
                </div>

                <div class="mini_box">
                    <div class="mini_card">
                        <a href="./clothes_bag.html" target="_blank">
                            <img src="./img/bag_three.jpg" alt="服裝">
                        </a>
                        <h3>可愛風格</h3>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 頁尾 -->
    <footer>
        <div>
            <a href="./index.html" class="logo"><img src="./img/logo_two.png" alt="形象天使標誌"></a>
        </div>
        <small id="copy">
            &copy; LEO 2021.
        </small>
        <div id="link">
            <a href="./recommend.html">最新商品</a>
            <a href="./contact.html">聯絡方式</a>
        </div>
    </footer>

    <!-- AOS CDN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- slick CDN -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

    <script src="./js/main.js"></script>
</body>

</html>