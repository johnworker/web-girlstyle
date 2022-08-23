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

    <!-- 產品 -->
    <!--  cart modal  -->
    <div class="cart_modal_overlay">
        <div class="cart_modal">
            <i id="close_btn" class="fas fa-times"></i>
            <h1 class="cart_is_empty">Cart is empty</h1>

            <div class="product_rows">
            </div>
            <div class="total">
                <h1 class="cart_total">TOTAL</h1>
                
                <span class="total_price">$0</span>
                <button class="purchase_btn">PURCHASE</button>
            </div>
        </div>
    </div>
    <!--   end of cart modal -->
    <div class="cart_btn">
        <i id="cart" class="fas fa-shopping-cart"></i>
        <span class="cart_quantity">0</span>
    </div>
    <!--  products  -->
    <div class="items_container">
        <div class="card-1 card">
            <img class="product_image"
                src="<?php bloginfo('template_directory') ?>/img/bag_four.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">leather bag(brown)</h3>
            <span class="product_price">$350</span>
        </div>
        <div class="card-2 card">
            <img class="product_image"
                src="<?php bloginfo('template_directory') ?>/img/bag_five.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">christian dior(white)</h3>
            <span class="product_price">$600</span>
        </div>
        <div class="card-3 card">
            <img class="product_image"
                src="<?php bloginfo('template_directory') ?>/img/bag_nine.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">flat iron(black)</h3>
            <span class="product_price">$250</span>
        </div>
        <div class="card-4 card">
            <img class="product_image"
                src="<?php bloginfo('template_directory') ?>/img/bag_seven.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">waterproof bag(green)</h3>
            <span class="product_price">$500</span>
        </div>
        <div class="card-5 card">
            <img class="product_image"
                src="<?php bloginfo('template_directory') ?>/img/bag_eleven.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">louis vuitton(pattern)</h3>
            <span class="product_price">$700</span>
        </div>
    </div>
    <!--  end of products  -->

    <?php get_footer(); ?>