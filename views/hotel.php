<?php
// 酒店
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>酒店</title>
  <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/hotel/style.css">
  <!-- Modernizr JS -->
  <!-- Superfish-->
  <link rel="stylesheet" href="../css/hotel/superfish.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../css/hotel/magnific-popup.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../css/hotel/bootstrap-datepicker.min.css">
  <!-- CS Select -->
  <link rel="stylesheet" href="../css/hotel/cs-select.css">
  <link rel="stylesheet" href="../css/hotel/cs-skin-border.css">
  <link rel="stylesheet" href="../css/hotel.css">

  <script src="../js/hotel/modernizr-2.6.2.min.js"></script>


</head>
<body>
<?php
$tab = 'hotel'
?>
<?php require 'top.php' ?>
<div>
  <div id="fh5co-wrapper">
    <div id="fh5co-page">


      <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover" data-stellar-background-ratio="0.5"
             style="background-image:url(../images/hotel/cover_bg_1.jpg);">
          <div class="desc">
            <div class="container">
              <div class="row">
                <div class="col-sm-5 col-md-5">
                  <div class="tabulation animate-box">

                    <!-- Nav tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane" id="hotels">
                        <div class="row">
                          <div class="col-xxs-12 col-xs-12 mt">
                            <div class="input-field">
                              <label for="from">城市:</label>
                              <input type="text" class="form-control" id="from-place" placeholder="输入您所在的城市"/>
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label for="date-start">入住日期:</label>
                              <input type="text" class="form-control" id="date-start" placeholder="05/08/2018"/>
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label for="date-end">离店日期:</label>
                              <input type="text" class="form-control" id="date-end" placeholder="05/09/2018"/>
                            </div>
                          </div>
                          <div class="col-sm-12 mt">
                            <section>
                              <label for="class">房间数量:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="economy">1</option>
                                <option value="first">2</option>
                                <option value="business">3</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <section>
                              <label for="class">成人:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <section>
                              <label for="class">小孩:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xs-12">
                            <input type="submit" class="btn btn-primary btn-block" value="搜索酒店">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="desc2">
                  <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                    <h2>让旅途更轻松一点</h2>
                    <h3> 千万房源任您挑选   质量保证</h3>
                    <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div id="fh5co-tours" class="fh5co-section-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
              <h3>热门城市酒店</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-1.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>纽约</h3>
                  <span>3个夜晚加上接机服务，五星级酒店</span>
                  <span class="price">¥1500</span>
                  <a class="btn btn-primary btn-outline" href="#">立刻预订 <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-2.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>菲律宾</h3>
                  <span>5个夜晚加上接机服务，五星级酒店</span>
                  <span class="price">¥1800</span>
                  <a class="btn btn-primary btn-outline" href="#">立刻预订  <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-3.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>香港</h3>
                  <span>2个夜晚加上接机服务，四星级酒店</span>
                  <span class="price">¥900</span>
                  <a class="btn btn-primary btn-outline" href="#">立刻预订  <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-4.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>英格兰</h3>
                  <span>2个夜晚加上接机服务，五星级酒店</span>
                  <span class="price">¥1050</span>
                  <a class="btn btn-primary btn-outline" href="#">立刻预订 <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-5.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>三亚</h3>
                  <span>4个夜晚加上接机服务，五星级酒店</span>
                  <span class="price">¥2100</span>
                  <a class="btn btn-primary btn-outline" href="#">立刻预订  <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-6.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>巴黎</h3>
                  <span>4个夜晚加上接机服务，四星级酒店</span>
                  <span class="price">¥2350</span>
                  <a class="btn btn-primary btn-outline" href="#">立刻预订  <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-7.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>丽江</h3>
                  <span>4个夜晚加上接机服务，五星级酒店</span>
                  <span class="price">¥1500</span>
                  <a class="btn btn-primary btn-outline" href="#">立刻预订 <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-8.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>爱尔兰</h3>
                  <span>4个夜晚加上接机服务，五星级酒店</span>
                  <span class="price">¥1980</span>
                  <a class="btn btn-primary btn-outline" href="#">立刻预订  <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-9.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>悉尼</h3>
                  <span>5个夜晚加上接机服务，四星级酒店</span>
                  <span class="price">¥2280</span>
                  <a class="btn btn-primary btn-outline" href="#">立刻预订  <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center animate-box">
              <p><a class="btn btn-primary btn-outline btn-lg" href="#">查看更多   <i
                      class="icon-arrow-right22"></i></a></p>
            </div>
          </div>
        </div>
      </div>

      <div id="fh5co-features">
        <div class="container">
          <div class="row">
            <div class="col-md-4 animate-box">

              <div class="feature-left">
							<span class="icon">
								<i class="icon-hotairballoon"></i>
							</span>
                <div class="feature-copy">
                  <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>住宿攻略</h3>
                  <p>区域攻略到特色主题，应有尽有</p>
                </div>
              </div>

            </div>

            <div class="col-md-4 animate-box">
              <div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
                <div class="feature-copy">
                  <h3><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>专享价格</h3>
                  <p>多平台价格对比，天天专享特惠</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 animate-box">
              <div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
                <div class="feature-copy">

                  <h3><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>真实点评</h3>
                  <p>超过100万真实用户点评和游记</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="fh5co-destination">
        <div class="tour-fluid">
          <div class="row">
            <div class="col-md-12">
              <ul id="fh5co-destination-list" class="animate-box">
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-1.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>洛杉矶</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-2.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>香港</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-3.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>意大利</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-4.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>菲律宾</h2>
                    </div>
                  </a>
                </li>

                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-5.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>日本</h2>
                    </div>
                  </a>
                </li>
                <li class="one-half text-center">
                  <div class="title-bg">
                    <div class="case-studies-summary">
                      <h2>更多高人气目的地</h2>
                      <span><a href="#">查看更多</a></span>
                    </div>
                  </div>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-6.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>巴黎</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-7.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>新加坡</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-8.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>马达加斯加岛</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-9.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>埃及</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-10.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>印尼</h2>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END fh5co-page -->

  </div>
</div>
<?php require 'footer.php' ?>
<script src="../js/hotel/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/hotel/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../package/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/hotel/jquery.waypoints.min.js"></script>
<script src="../js/hotel/sticky.js"></script>

<!-- Stellar -->
<script src="../js/hotel/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="../js/hotel/hoverIntent.js"></script>
<script src="../js/hotel/superfish.js"></script>
<!-- Magnific Popup -->
<script src="../js/hotel/jquery.magnific-popup.min.js"></script>
<script src="../js/hotel/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="../js/hotel/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="../js/hotel/classie.js"></script>
<script src="../js/hotel/selectFx.js"></script>

<!-- Main JS -->
<script src="../js/hotel/main.js"></script>
</body>
</html>
