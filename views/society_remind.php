<?php
//驴友小贴士
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>驴友小贴士</title>
  <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/society_remind.css"><!-- Resource style -->
  <script src="../js/society_remind/modernizr.js"></script>
</head>
<body>
<?php
$tab = 'travel';
?>
<?php require 'top.php' ?>
<section class="cd-hero">
  <ul class="cd-hero-slider autoplay">
    <li class="selected">
      <div class="cd-full-width">
        <h2>张钧甯</h2>
        <p>2002年出道，2004年本科毕业于国立台北大学法律系，2006年因主演电视剧《白色巨塔》而走红[2]  </p>
        <a  class="cd-btn">查看更多</a>
      </div> <!-- .cd-full-width -->
    </li>

    <li>
      <div class="cd-half-width">
        <h2>早年经历</h2>
        <p>1994年~1997年，就读于台北市立金华国民中学。</p>
        <a  class="cd-btn">查看更多</a>

      </div> <!-- .cd-half-width -->

      <div class="cd-half-width cd-img-container">
        <img src="assets/tech-1.jpg" alt="tech 1">
      </div> <!-- .cd-half-width.cd-img-container -->
    </li>

    <li>
      <div class="cd-half-width cd-img-container">
        <img src="assets/tech-2.jpg" alt="tech 2">
      </div> <!-- .cd-half-width.cd-img-container -->

      <div class="cd-half-width">
        <h2>参演短片</h2>
        <p>五月天音乐概念电影</p>
        <a  class="cd-btn">查看更多</a>
      </div> <!-- .cd-half-width -->

    </li>

    <li class="cd-bg-video">
      <div class="cd-full-width">
        <h2>演艺经历</h2>
        <p>入行初期，张钧甯主要以拍摄音乐录影带和广告为主。</p>
        <a  class="cd-btn">查看更多</a>
      </div> <!-- .cd-full-width -->

      <div class="cd-bg-video-wrapper" data-video="assets/video/video">
        <!-- video element will be loaded using jQuery -->
      </div> <!-- .cd-bg-video-wrapper -->
    </li>

    <li>
      <div class="cd-full-width">
        <h2>个人生活</h2>
        <p>张钧甯的父亲是台大法学教授，母亲是儿童作家， 她与姐姐张瀛都在德国出生。</p>
        <a  class="cd-btn">查看更多</a>
      </div> <!-- .cd-full-width -->
    </li>
  </ul> <!-- .cd-hero-slider -->

  <div class="cd-slider-nav">
    <nav>
      <span class="cd-marker item-1"></span>

      <ul>
        <li class="selected"><a href="#0">介绍</a></li>
        <li><a href="#0">经历</a></li>
        <li><a href="#0">参演</a></li>
        <li><a href="#0">演艺</a></li>
        <li><a href="#0">生活</a></li>
      </ul>
    </nav>
  </div> <!-- .cd-slider-nav -->
</section> <!-- .cd-hero -->

<script src="../js/society_remind/jquery-2.1.1.js"></script>
<script src="../js/society_remind/main.js"></script> <!-- Resource jQuery -->
</body>
</html>