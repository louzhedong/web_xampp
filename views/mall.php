<?php
// 商城
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>享商城</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/mall.css">
</head>
<body>
<?php
$tab = 'mall';
$mall_tab = 'index';
?>
<?php require 'top.php' ?>
<?php require 'mall_top.php' ?>
<div class="carousel">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../images/mall/carousel/1.jpeg" alt="...">
      </div>
      <div class="item">
        <img src="../images/mall/carousel/2.jpeg" alt="...">
      </div>
      <div class="item">
        <img src="../images/mall/carousel/3.jpeg" alt="...">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="mall-menu">
    <div class="mall-menu-item">
      <span class="mall-menu-icon glyphicon glyphicon-king"></span>
      <div class="title">
        <h2 class="mall-menu-title">港澳台 国内</h2>
        <p class="mall-menu-subtitle">香港 澳门 台湾 三亚</p>
      </div>
      <span class="mall-menu-arrow glyphicon glyphicon-chevron-right"></span>
      <div class="menu-content">
        aaa
      </div>
    </div>
    <div class="mall-menu-item">
      <span class="mall-menu-icon glyphicon glyphicon-queen"></span>
      <div class="title">
        <h2 class="mall-menu-title">港澳台 国内</h2>
        <p class="mall-menu-subtitle">香港 澳门 台湾</p>
      </div>
      <span class="mall-menu-arrow glyphicon glyphicon-chevron-right"></span>
      <div class="menu-content">
        bbb
      </div>
    </div>
    <div class="mall-menu-item">
      <span class="mall-menu-icon glyphicon glyphicon-pawne"></span>
      <div class="title">
        <h2 class="mall-menu-title">港澳台 国内</h2>
        <p class="mall-menu-subtitle">香港 澳门 台湾</p>
      </div>
      <span class="mall-menu-arrow glyphicon glyphicon-chevron-right"></span>
      <div class="menu-content">
        ccc
      </div>
    </div>
    <div class="mall-menu-item">
      <span class="mall-menu-icon glyphicon glyphicon-bishop"></span>
      <div class="title">
        <h2 class="mall-menu-title">港澳台 国内</h2>
        <p class="mall-menu-subtitle">香港 澳门 台湾</p>
      </div>
      <span class="mall-menu-arrow glyphicon-chevron-right"></span>
      <div class="menu-content">
        ddd
      </div>
    </div>
    <div class="mall-menu-item">
      <span class="mall-menu-icon glyphicon glyphicon-knighte"></span>
      <div class="title">
        <h2 class="mall-menu-title">港澳台 国内</h2>
        <p class="mall-menu-subtitle">香港 澳门 台湾</p>
      </div>
      <span class="mall-menu-arrow glyphicon glyphicon-chevron-right"></span>
      <div class="menu-content">
        eee
      </div>
    </div>
    <div class="mall-menu-item">
      <span class="mall-menu-icon glyphicon glyphicon-film"></span>
      <div class="title">
        <h2 class="mall-menu-title">港澳台 国内</h2>
        <p class="mall-menu-subtitle">香港 澳门 台湾</p>
      </div>
      <span class="mall-menu-arrow glyphicon glyphicon-chevron-right"></span>
      <div class="menu-content">
        fff
      </div>
    </div>
  </div>
</div>
</body>
</html>
