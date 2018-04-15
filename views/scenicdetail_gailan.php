<?php
// 景点汇详情页
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>目的地详情页--概览</title>
  <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/scenicdetail_gailan.css">
</head>
<body>
<?php
$tab = 'scenic';
$mall_ta = 'gailan';
?>
<?php require 'top.php' ?>
<?php require 'scenicdetail_top.php' ?>
<div class="gailan_header">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-8">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="../images/scenic/scenicdetail_gailan/carousel1.jpeg" alt="...">
              </div>
              <div class="item">
                <img src="../images/scenic/scenicdetail_gailan/carousel2.jpeg" alt="...">
              </div>
              <div class="item">
                <img src="../images/scenic/scenicdetail_gailan/carousel3.jpeg" alt="...">
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
        </div>
        <div class="col-md-4">
          <div class="title">
            关于泰国：
          </div>
          <div class="describe-text">
            泰国位于亚洲中南半岛中部，东南临泰国湾，西南濒安达曼海。西北与缅甸为邻，西南与马来西亚交接，东北毗连老挝，东南与柬埔寨接壤，总面积513,115平方公里，
            人口60,400,000人，是以泰族人为主，生活着华人、缅甸人、马来人、印度人、老挝人等的多民族国家。 泰国以“千佛之国”闻名于世，素有“黄袍佛国
            ”美誉，是一个具有两千多年佛教史的文明古国，在美丽富饶的国土上，有30,OOO多座充满神话色彩的古老寺院和金碧辉煌的宫殿。
          </div>
          <div class="describe-season">
            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
            最佳季节：11-3月。<br><br>
            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
            建议游玩：5-7天<br><br>
            <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
            签证难度：易
          </div>
          <div class="title-1">
            相关攻略：<a style="color: #666;font-size: 13px;padding-left: 155px;;"><span
                  class="glyphicon glyphicon-triangle-left" aria-hidden="true">1/15本</span><span
                  class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></a>
          </div>
          <ul class="relate-strategy">
            <li><img src="../images/scenic/scenicdetail_gailan/Thailand.png">
              <p class="relate-strategy-title">泰国</p>
              <p class="relate-strategy-count">下载次数：273123</p>
              <button type="button" class="btn btn-warning" style="margin-left:40px;width: 150px"> 免费下载</button>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="gailan_hot">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="bigtitle">
        泰国热门景点
      </div>
      <div class="pic">
        <ul class="hot-sale-content">
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/scenic/scenicdetail_gailan/hot1.jpeg" alt="">
              <div class="mark-tag">
                1
              </div>
            </div>
            <div class="caption">
              <h3><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                曼谷大皇宫 、 玉佛寺 、 考山路 、 曼谷卧佛寺 、 伊拉旺神祠四面佛 、 郑王庙 、 曼谷唐人街</h3>
              <span class="price">曼谷</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/scenic/scenicdetail_gailan/hot2.jpeg" alt="">
              <div class="mark-tag">
               2
              </div>
            </div>
            <div class="caption">
              <h3><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                清迈古城 、 塔佩门 、 柴迪龙寺 、 帕辛寺 、 素贴山双龙寺 、 塔佩路 、 泰国清迈宁曼路 </h3>
              <span class="price">清迈</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/scenic/scenicdetail_gailan/hot3.jpeg" alt="">
              <div class="mark-tag">
                3
              </div>
            </div>
            <div class="caption">
              <h3><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                芭东海滩 、 芭东酒吧街 、 皇帝岛 、 普吉镇 、 卡塔海滩 、 攀牙湾 、 卡伦海滩 、 芭东夜市 </h3>
              <span class="price">普吉岛</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/scenic/scenicdetail_gailan/hot4.jpeg" alt="">
              <div class="mark-tag">
                4
              </div>
            </div>
            <div class="caption">
              <h3><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                芭堤雅海滩 、 芭堤雅步行街 、 东芭乐园 、 格兰岛 、 蒂芬妮人妖秀 、 四部水上市场</h3>
              <span class="price">芭堤雅</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/scenic/scenicdetail_gailan/hot5.jpeg" alt="">
              <div class="mark-tag">
                5
              </div>
            </div>
            <div class="caption">
              <h3><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                通赛湾 、 玛雅湾 、 维京洞穴 、 蚊子岛 、 竹子岛 、 猴子海滩 、 情人沙滩 、 皮皮岛一日游</h3>
              <span class="price">皮皮岛</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/scenic/scenicdetail_gailan/hot6.jpeg" alt="">
              <div class="mark-tag">
                6
              </div>
            </div>
            <div class="caption">
              <h3><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                查汶海滩 、 拉迈海滩 、 波菩海滩 、 纳通镇 、 祖父祖母石 、 大佛寺和金色大佛 </h3>
              <span class="price">曼谷</span>
            </div>
          </li>

        </ul>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
</body>
</html>
