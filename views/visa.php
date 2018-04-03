<?php
//签证
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>签证</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/visa.css">
</head>
<body>
<?php
$tab = 'mall';
$mall_tab = 'visa';
?>
<?php require 'top.php' ?>
<?php require 'mall_top.php' ?>
<div class="visa">
  <div class="visa-banner">
  </div>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="visa-recommend">
        <div class="visa-recommend-header">
          <h3>驴享网推荐</h3>
        </div>
        <ul class="visa-recommend-content">
          <li class="visa-recommend-item">
            <div class="image">
              <img src="../images/mall/visa/recommend/1.jpeg" alt="">
              <div class="cover">
                <div class="city">
                  <span>日本</span><br>
                  <i class="line"></i>
                  <strong>北京送签</strong>
                </div>
              </div>
            </div>
            <div class="info">
              <div class="visa_tips">
                <span class="nation">日本</span>
                <span class="price"><em>¥268</em>起</span>
              </div>
            </div>
          </li>
          <li class="visa-recommend-item">
            <div class="image">
              <img src="../images/mall/visa/recommend/2.jpeg" alt="">
              <div class="cover">
                <div class="city">
                  <span>美国</span><br>
                  <i class="line"></i>
                  <strong>上海送签</strong>
                </div>
              </div>
            </div>
            <div class="info">
              <div class="visa_tips">
                <span class="nation">美国</span>
                <span class="price"><em>¥1140</em>起</span>
              </div>
            </div>
          </li>
          <li class="visa-recommend-item">
            <div class="image">
              <img src="../images/mall/visa/recommend/3.jpeg" alt="">
              <div class="cover">
                <div class="city">
                  <span>马来西亚</span><br>
                  <i class="line"></i>
                  <strong>全国送签</strong>
                </div>
              </div>
            </div>
            <div class="info">
              <div class="visa_tips">
                <span class="nation">马来西亚</span>
                <span class="price"><em>¥163</em>起</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
<?php require 'footer.php'?>
</body>
</html>
