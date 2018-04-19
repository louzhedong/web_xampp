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
                              <label for="from">City:</label>
                              <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label for="date-start">Return:</label>
                              <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label for="date-end">Check Out:</label>
                              <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                            </div>
                          </div>
                          <div class="col-sm-12 mt">
                            <section>
                              <label for="class">Rooms:</label>
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
                              <label for="class">Adult:</label>
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
                              <label for="class">Children:</label>
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
                            <input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="desc2">
                  <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                    <p>HandCrafted by <a href="#" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p>
                    <h2>Exclusive Limited Time Offer</h2>
                    <h3>Fly to Hong Kong via Los Angeles, USA</h3>
                    <span class="price">$599</span>
                    <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="copyrights">Collect from <a href="#" title="网站模板">网站模板</a></div>

      <div id="fh5co-tours" class="fh5co-section-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
              <h3>Hot Tours</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-1.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>New York</h3>
                  <span>3 nights + Flight 5*Hotel</span>
                  <span class="price">$1,000</span>
                  <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-2.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>Philippines</h3>
                  <span>4 nights + Flight 5*Hotel</span>
                  <span class="price">$1,000</span>
                  <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="../images/hotel/place-3.jpg" class="img-responsive">
                <div class="desc">
                  <span></span>
                  <h3>Hongkong</h3>
                  <span>2 nights + Flight 4*Hotel</span>
                  <span class="price">$1,000</span>
                  <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center animate-box">
              <p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i
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
                  <h3>Family Travel</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>

            </div>

            <div class="col-md-4 animate-box">
              <div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
                <div class="feature-copy">
                  <h3>Travel Plans</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4 animate-box">
              <div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
                <div class="feature-copy">
                  <h3>Honeymoon</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 animate-box">

              <div class="feature-left">
							<span class="icon">
								<i class="icon-wine"></i>
							</span>
                <div class="feature-copy">
                  <h3>Business Travel</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>

            </div>

            <div class="col-md-4 animate-box">
              <div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
                <div class="feature-copy">
                  <h3>Solo Travel</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>

            </div>
            <div class="col-md-4 animate-box">
              <div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
                <div class="feature-copy">
                  <h3>Explorer</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                  <p><a href="#">Learn More</a></p>
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
                      <h2>Los Angeles</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-2.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>Hongkong</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-3.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>Italy</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-4.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>Philippines</h2>
                    </div>
                  </a>
                </li>

                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-5.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>Japan</h2>
                    </div>
                  </a>
                </li>
                <li class="one-half text-center">
                  <div class="title-bg">
                    <div class="case-studies-summary">
                      <h2>Most Popular Destinations</h2>
                      <span><a href="#">View All Destinations</a></span>
                    </div>
                  </div>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-6.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>Paris</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-7.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>Singapore</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-8.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>Madagascar</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-9.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>Egypt</h2>
                    </div>
                  </a>
                </li>
                <li class="one-forth text-center" style="background-image: url(../images/hotel/place-10.jpg); ">
                  <a href="#">
                    <div class="case-studies-summary">
                      <h2>Indonesia</h2>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
              <h3>Recent From Blog</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis
                accusamus asperiores sint consequuntur debitis.</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row row-bottom-padded-md">
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="fh5co-blog animate-box">
                <a href="#"><img class="img-responsive" src="../images/hotel/place-1.jpg"></a>
                <div class="blog-text">
                  <div class="prod-title">
                    <h3><a href="#">30% Discount to Travel All Around the World</a></h3>
                    <span class="posted_by">Sep. 15th</span>
                    <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                      live the blind texts.</p>
                    <p><a href="#">Learn More...</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="fh5co-blog animate-box">
                <a href="#"><img class="img-responsive" src="../images/hotel/place-2.jpg"></a>
                <div class="blog-text">
                  <div class="prod-title">
                    <h3><a href="#">Planning for Vacation</a></h3>
                    <span class="posted_by">Sep. 15th</span>
                    <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                      live the blind texts.</p>
                    <p><a href="#">Learn More...</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="fh5co-blog animate-box">
                <a href="#"><img class="img-responsive" src="../images/hotel/place-3.jpg"></a>
                <div class="blog-text">
                  <div class="prod-title">
                    <h3><a href="#">Visit Tokyo Japan</a></h3>
                    <span class="posted_by">Sep. 15th</span>
                    <span class="comment"><a href="#">21<i class="icon-bubble2"></i></a></span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                      live the blind texts.</p>
                    <p><a href="#">Learn More...</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix visible-md-block"></div>
          </div>

          <div class="col-md-12 text-center animate-box">
            <p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Post <i
                    class="icon-arrow-right22"></i></a></p>
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
