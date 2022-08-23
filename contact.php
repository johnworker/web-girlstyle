<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>時尚女孩</title>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- slick CDN -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <link rel="stylesheet" href="./style.css">

    <!-- . 跟此檔案相同資料夾內的其他檔案 -->
    <!-- .. 在此檔案上一層資料夾內的其他檔案 -->
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
            <div id="link_work" href="">
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
            <a href="https://www.youtube.com/results?search_query=fashion+shop" target="blank"><img src="./img/youtube.png"
                    alt="youtube"></a>
            <a href="https://www.instagram.com/besscomha" target="blank"><img src="./img/instagram.png" alt="instagram"></a>
            <a href="http://m.facebook.com/yanjun.liao.50?ref=bookmarks" target="blank"><img src="./img/facebook.png" alt="facebook"></a>
            <a href="https://github.com/" target="blank"><img src="./img/github.png" alt="github"></a>
        </div>
    </nav>

    <h2 id="list" class="title-big" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1500">聯絡我</h2>
    <!-- 表單元素 action="" 傳遞給後端頁面，通常是 XXX.php -->
    <!-- 要設定 input type="submit" 表單資料才會傳到後端-->
    <!-- 方法：傳送資料的方式 -->
    <!-- GET 曝光表單資料 -->
    <!-- POST 不會曝光表單資料 -->
    <form action="javascript:Getform();">
        <input type="text" name="name" placeholder="請輸入您的姓名" required>
        <input type="email" name="email" placeholder="請輸入您的信箱" required>
        <textarea placeholder="輸入你想對我們說的話" type="text" name="msg"></textarea>
        <input type="submit" value="送出" class="btn">
    </form>

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
</body>

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

<script>
    function Getform() {
    var field1 = $("[name = 'name']").val();
    var field2 = $("[name = 'email']").val();
    var field3 = $("[name = 'msg']").val();

    $.ajax({
        url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLScfXOHPe-tYvhd6fsvi22RXT80SzCWLfBd_iQZ3TObJMdrg3A/formResponse",
        data: {
            "entry.2070678068": field1,
            "entry.45661872": field2,
            "entry.2008905253": field3,
        },
        type: "POST",
        dataType: "xml",
        statusCode: {
            0: function () {
                alart("完成");
            },
            200: function () {
                alart("完成");
            }
        }
    });
}   
</script>

</body>

</html>