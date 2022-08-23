<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>時尚女孩</title>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- ajax CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/other.css">
    
</head>

<body>
    <!-- 導覽列 -->
    <nav data-aos="fade" data-aos-delay="500" data-aos-duration="3000">
        <div id="menu">
            <div class="mini_link_box">
                <ul class="mini_link">
                    <li>
                        <a href="./index.html"><img src="./img/logo_two.png" alt="形象天使標誌"></a>
                    </li>
                    <li>
                        <a href="./recommend.html">最新商品</a>
                    </li>
                    <li>
                        <div class="link_mini_work">
                            服裝類型
                            <ul class="sub_mini_link">
                                <li>
                                    <a href="./clothes.html">上衣</a>
                                </li>
                                <li>
                                    <a href="./pants.html">褲款</a>
                                </li>
                                <li>
                                    <a href="./skirt.html">裙款</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="link_mini_work_two">
                            配件樣式
                            <ul class="sub_mini_link_two">
                                <li>
                                    <a href="./accessories.html">飾品</a>
                                </li>
                                <li>
                                    <a href="./bag.html">包包</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li>
                        <a href="./contact.html" data-st-target="list" data-st-duration="1000"
                            data-st-offset="100">聯絡我們</a>
                    </li>
                </ul>
            </div>
        </div>
        <div></div>
        <div id="link">
            <a href="./index.html" class="logo"><img src="./img/logo_two.png" alt="形象天使標誌"></a>
            <a href="./recommend.html">最新商品</a>
            <div id="link_work">
                服裝類型
                <ul class="sub_link">
                    <li>
                        <a href="./clothes.html">上衣</a>
                    </li>
                    <li>
                        <a href="./pants.html">褲款</a>
                    </li>
                    <li>
                        <a href="./skirt.html">裙款</a>
                    </li>
                </ul>
            </div>

            <div id="link_work_two">
                配件樣式
                <ul class="sub_link_two">
                    <li>
                        <a href="./accessories.html">飾品</a>
                    </li>
                    <li>
                        <a href="./bag.html">包包</a>
                    </li>
                </ul>
            </div>
            <a href="./contact.html" data-st-target="list" data-st-duration="1000" data-st-offset="100">聯絡我們</a>
        </div>
        <div id="social">
            <a href="https://www.youtube.com/results?search_query=fashion+shop" target="blank"><img
                    src="./img/youtube.png" alt="youtube"></a>
            <a href="https://www.instagram.com/besscomha" target="blank"><img src="./img/instagram.png"
                    alt="instagram"></a>
            <a href="http://m.facebook.com/yanjun.liao.50?ref=bookmarks" target="blank"><img src="./img/facebook.png"
                    alt="facebook"></a>
            <a href="https://github.com/" target="blank"><img src="./img/github.png" alt="github"></a>
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
                src="./img/recommend_seven.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">leather bag(brown)</h3>
            <span class="product_price">$450</span>
        </div>
        <div class="card-2 card">
            <img class="product_image"
                src="./img/recommend_eight.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">christian dior(white)</h3>
            <span class="product_price">$550</span>
        </div>
        <div class="card-3 card">
            <img class="product_image"
                src="./img/recommend_nine.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">flat iron(black)</h3>
            <span class="product_price">$300</span>
        </div>
        <div class="card-4 card">
            <img class="product_image"
                src="./img/recommend_two.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">waterproof bag(green)</h3>
            <span class="product_price">$300</span>
        </div>
        <div class="card-5 card">
            <img class="product_image"
                src="./img/recommend_three.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">louis vuitton(pattern)</h3>
            <span class="product_price">$800</span>
        </div>

        <div class="card-6 card">
            <img class="product_image"
                src="./img/recommend_five.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">louis vuitton(pattern)</h3>
            <span class="product_price">$1000</span>
        </div>

        <div class="card-7 card">
            <img class="product_image"
                src="./img/bag_eight.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">louis vuitton(pattern)</h3>
            <span class="product_price">$600</span>
        </div>

        <div class="card-8 card">
            <img class="product_image"
                src="./img/recommend_ten.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">louis vuitton(pattern)</h3>
            <span class="product_price">$800</span>
        </div>

        <div class="card-9 card">
            <img class="product_image"
                src="./img/recommend_eleven.jpg"
                alt="">
            <button class="add_to_cart">Add to cart</button>
            <h3 class="product_name">louis vuitton(pattern)</h3>
            <span class="product_price">$500</span>
        </div>


    </div>
    <!--  end of products  -->

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

    <script src="./js/cart.js"></script>

</body>

</html>