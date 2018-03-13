<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>首页</title>
  <link rel="stylesheet" href="../css/index.css">
    <?php require 'link.php' ?>
</head>
<body>
<?php
$tab = 'index'
?>
<?php require 'top.php' ?>
<div>
  <div class="carousel">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../images/carousel/carousel1.jpeg" alt="...">
          <div class="carousel-caption">
            这里可以加文字
          </div>
        </div>
        <div class="item">
          <img src="../images/carousel/carousel2.jpeg" alt="...">
          <div class="carousel-caption">
            这里可以加文字
          </div>
        </div>
        <div class="item">
          <img src="../images/carousel/carousel3.jpeg" alt="...">
          <div class="carousel-caption">
            这里可以加文字
          </div>
        </div>
        <div class="item">
          <img src="../images/carousel/carousel4.jpeg" alt="...">
          <div class="carousel-caption">
            这里可以加文字
          </div>
        </div>
        <div class="item">
          <img src="../images/carousel/carousel5.jpeg" alt="...">
          <div class="carousel-caption">
            这里可以加文字
          </div>
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

    <div class="index-body">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
          <div class="flash-sell">
            <div class="flash-sell-header">
              <span class="left">限时特卖</span>
              <span class="right">每日必看的特价精选</span>
            </div>
            <div class="flash-sell-content">
              <div class="flash-sell-item">
                <img src="../images/carousel/carousel6.jpeg" alt="">
                <div class="describe">
                  <div class="describe-inner">
                    [上海送签]菲律宾旅游签证（全国受理+免存款+免在职+升级加急+极简资料+无需面试）
                  </div>
                </div>
                <div class="price">
                  <span class="number">￥1999</span>
                  <span class="word">元起</span>
                </div>
              </div>
              <div class="flash-sell-item">
                <img src="../images/carousel/carousel6.jpeg" alt="">
                <div class="describe">
                  <div class="describe-inner">
                    【星梦邮轮世界梦号】广州-冲绳-宫古岛-广州6天5晚邮轮之旅（五一暑假国庆航次+免签说走就走+含港务费+多航期）
                  </div>
                </div>
                <div class="price">
                  <span class="number">￥5122</span>
                  <span class="word">元起</span>
                </div>
              </div>
              <div class="flash-sell-item">
                <img src="../images/carousel/carousel6.jpeg" alt="">
                <div class="describe">
                  <div class="describe-inner">
                    【泼水节】上海直飞曼谷+芭提雅5晚6/7天半自助游（全程国际五星酒店+芭堤雅海边国五酒店+地道网红夜市+杜拉拉水市场+宝妮小马俱乐部/蜜月岛浮潜海钓）
                  </div>
                </div>
                <div class="price">
                  <span class="number">￥7196</span>
                  <span class="word">元起</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
          <div class="activity">
            <div class="activity-header">
              最新活动
            </div>
            <div class="activity-item">
              <img src="../images/carousel/carousel6.jpeg" alt="">
              <div class="activity-describe">
                <div class="activity-describe-header">
                  坎儿井造就的绿洲奇迹
                </div>
                <div class="activity-describe-body">
                  在吐鲁番盆地中，几乎每一片在戈壁荒漠中突兀出现的小绿洲，都可在它的上游方向找到一条条形同串珠儿搬的坎儿井链
                </div>
              </div>
            </div>
            <div class="strategy-header">
              旅游攻略推荐
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
</div>
</body>
</html>