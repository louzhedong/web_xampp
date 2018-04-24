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
<div class="carousel">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../images/index/carousel/carousel1.jpeg" alt="...">
        <div class="carousel-caption">
          【跟着英剧镜头 玩转不列颠】独家英剧取景地打卡、唐顿庄园复古Vintage穿搭、超赞民宿
        </div>
      </div>
      <div class="item">
        <img src="../images/index/carousel/carousel2.jpeg" alt="...">
        <div class="carousel-caption">
          <span class="date">3/2018</span>只为那漫山野杏花，自驾新疆十六日
        </div>
      </div>
      <div class="item">
        <img src="../images/index/carousel/carousel3.jpeg" alt="...">
        <div class="carousel-caption">
          夜夜夜新加坡，越夜越HAPPY，新加坡夜色大狂欢
        </div>
      </div>
      <div class="item">
        <img src="../images/index/carousel/carousel4.jpeg" alt="...">
        <div class="carousel-caption">
          <span class="date">4/2018</span>雪线之下无风景，路绳之上皆兄弟
        </div>
      </div>
      <div class="item">
        <img src="../images/index/carousel/carousel5.jpeg" alt="...">
        <div class="carousel-caption">
          新疆行记|人生何处不相逢
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

  <!-- search-box -->
  <div class="search-box">
    <input type="text" class="search-input" placeholder="我想去...">
    <span class="search-btn">
      <span class="glyphicon glyphicon-search"></span>
    </span>
  </div>
</div>


<div class="index-body">
  <div class="row" style="margin-right: 0;margin-left: 0;">
    <div class="col-md-1"></div>
    <div class="col-md-7">
      <div class="flash-sell">
        <div class="flash-sell-header">
          <span class="left">每日特卖</span>
          <span class="right">每天给您最优惠的团购路线</span>
        </div>
        <div class="flash-sell-content">
          <div class="flash-sell-item">
            <img src="../images/good/5.jpeg" alt="">
            <div class="describe">
              <div class="describe-inner">
                迪拜Atlantis亚特兰蒂斯酒店（含早餐+晚餐+增值税+服务费+酒店税费，可免费进入水世界/水族馆)（豪华房/海景房/棕榈岛房任选）
              </div>
            </div>
            <div class="price">
              <span class="number">￥2392</span>
              <span class="word">元起</span>
            </div>
          </div>
          <div class="flash-sell-item">
            <img src="../images/index/1-1.jpg" alt="">
            <div class="describe">
              <div class="describe-inner">
                柬埔寨暹粒吴哥窟5-6日4晚自由行·『北京直飞』 高评酒店+早航班多玩一天 度假优选 暑期预售
              </div>
            </div>
            <div class="price">
              <span class="number">￥3522</span>
              <span class="word">元起</span>
            </div>
          </div>
          <div class="flash-sell-item">
            <img src="../images/index/1-2.jpg" alt="">
            <div class="describe">
              <div class="describe-inner">
                以色列耶路撒冷+伯利恒+约旦安曼+死海11日8晚跟团游·【以航直飞是一种体验+高铁联运】【一价全含景点全】【精选四星+亚喀巴/死海升级卓越五星】【游船品酒特色餐】【酒红沙漠皮卡冲沙】【迦南美地+沙漠玫瑰】
              </div>
            </div>
            <div class="price">
              <span class="number">￥12990</span>
              <span class="word">元起</span>
            </div>
          </div>
        </div>
      </div>
      <br/>
      <div class="flash-sell">
        <div class="flash-sell-header">
          <span class="left">精品特选</span>
          <span class="right">精心为您挑选最优品质</span>
        </div>
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"><a aria-controls="all" href="#all" role="tab" data-toggle="tab">全部</a></li>
          <li role="presentation"><a aria-controls="mall_detail" href="#mall_detail" role="hot" data-toggle="tab">跟团游</a></li>
          <li role="presentation" class="active"><a aria-controls="banzizhuyou" href="#banzizhuyou" role="tab" data-toggle="tab">半自助游</a></li>
          <li role="presentation"><a aria-controls="ziyouxing" href="#banzizhuyou" role="tab" data-toggle="tab">自由行</a></li>
          <li role="presentation"><a aria-controls="qianzheng" href="#banzizhuyou" role="tab" data-toggle="tab">签证</a></li>
          <li role="presentation"><a aria-controls="youlun" href="#banzizhuyou" role="tab" data-toggle="tab">邮轮</a></li>
        </ul>
        <div class="flash-sell-content">
          <div class="flash-sell-item">
            <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
            <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
            <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
      <br/>
      <div class="flash-sell">
        <div class="flash-sell-header">
          <span class="left">限时特卖</span>
          <span class="right">每日必看的特价精选</span>
        </div>
        <div class="flash-sell-content">
          <div class="flash-sell-item">
            <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
            <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
            <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
      <br/>
      <div class="flash-sell">
        <div class="flash-sell-header">
          <span class="left">限时特卖</span>
          <span class="right">每日必看的特价精选</span>
        </div>
        <div class="flash-sell-content">
          <div class="flash-sell-item">
            <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
            <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
            <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
          <img src="../images/index/carousel/carousel6.jpeg" alt="">
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
<?php require 'footer.php' ?>

</body>
</html>