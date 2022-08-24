<?php
/**
 * Template Name: recommend
 * Template Post Type: post, page
 *
 */
?>

<?php get_header(); ?>

<link rel="stylesheet" href="bloginfo('template_directory') ?>/css/other.css">
<link rel="stylesheet" href="bloginfo('template_directory') ?>/css/RWD_other.css">

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

      <!-- 關於APP -->
      <h2 class="title-big">RECOMMEND</h2>
      <!-- section#about>.big_box>h2+p-->
      <section id="new_products" data-aos="fade" data-aos-duration="3000">
          <div class="bigger_box">
              <p>enjoy your moments</p>
  
              <div class="mini_max_box">
                  <div class="mini_box">
                      <div class="mini_card">
                          <a href="./clothes_other.html" target="_blank">
                              <img src="<?php bloginfo('template_directory') ?>/img/recommend_seven.jpg" alt="手機螢幕">
                          </a>
                          <h3>時尚線條裙子</h3>
                          <p>450$</p>
                      </div>
                  </div>
  
                  <div class="mini_box">
                      <div class="mini_card">
                          <a href="./clothes_other.html" target="_blank">
                              <img src="<?php bloginfo('template_directory') ?>/img/recommend_eight.jpg" alt="手機螢幕">
                          </a>
                          <h3>反光亮片裙子</h3>
                          <p>550$</p>
                      </div>
                  </div>
  
                  <div class="mini_box">
                      <div class="mini_card">
                          <a href="./clothes_other.html" target="_blank">
                              <img src="<?php bloginfo('template_directory') ?>/img/recommend_nine.jpg" alt="手機螢幕">
                          </a>
                          <h3>牛仔短裙</h3>
                          <p>300$</p>
                      </div>
                  </div>

                  <div class="mini_box">
                    <div class="mini_card">
                        <a href="./clothes_other.html" target="_blank">
                            <img src="<?php bloginfo('template_directory') ?>/img/recommend_two.jpg" alt="手機螢幕">
                        </a>
                        <h3>休閒襯衫</h3>
                        <p>300$</p>
                    </div>
                </div>
                
                <div class="mini_box">
                  <div class="mini_card">
                      <a href="./clothes_other.html" target="_blank">
                          <img src="<?php bloginfo('template_directory') ?>/img/recommend_three.jpg" alt="手機螢幕">
                      </a>
                      <h3>微正式套裝</h3>
                      <p>800$</p>
                  </div>
              </div>

              <div class="mini_box">
                <div class="mini_card">
                    <a href="./clothes_other.html" target="_blank">
                        <img src="<?php bloginfo('template_directory') ?>/img/recommend_five.jpg" alt="手機螢幕">
                    </a>
                    <h3>風衣外套</h3>
                    <p>1000$</p>
                </div>
            </div>
  
            <div class="mini_box">
              <div class="mini_card">
                  <a href="./clothes_other.html" target="_blank">
                      <img src="<?php bloginfo('template_directory') ?>/img/bag_eight.jpg" alt="手機螢幕">
                  </a>
                  <h3>皮革包包</h3>
                  <p>600$</p>
              </div>
          </div>

          <div class="mini_box">
            <div class="mini_card">
                <a href="./clothes_other.html" target="_blank">
                    <img src="<?php bloginfo('template_directory') ?>/img/recommend_ten.jpg" alt="手機螢幕">
                </a>
                <h3>金星項鍊</h3>
                <p>800$</p>
            </div>
        </div>

        <div class="mini_box">
          <div class="mini_card">
              <a href="./clothes_other.html" target="_blank">
                  <img src="<?php bloginfo('template_directory') ?>/img/recommend_eleven.jpg" alt="手機螢幕">
              </a>
              <h3>菱形金耳環</h3>
              <p>500$</p>
          </div>
      </div>

              </div>
  
          </div>
      </section>
  

      <?php get_footer(); ?>