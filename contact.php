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

<?php get_footer(); ?>