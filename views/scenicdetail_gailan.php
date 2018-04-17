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
              <span class="price">苏梅岛</span>
            </div>
          </li>

        </ul>
      </div>
      <div class="more">
        <button type="button" class="btn btn-default" onclick="toscenicdetail_scenic()">点击查看更多</button>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="gailan_goods">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="bigtitle">
        泰国热门团购
      </div>
      <div class="goods">
        <ul class="hot-sale-content" style="overflow:hidden">
          <li class="hot-sale-item" onclick="tomall_detail()">
            <div class="image" >
              <img src="../images/mall/dangdi/hot_sale/1.jpeg" alt="">
              <div class="mark-tag">
                多日游
              </div>
            </div>
            <div class="caption">
              <h3>疯抢特价·苏梅岛一地3天2晚超值游 下单即送1晚酒店（纯玩0购物+蜈支洲岛+南山+天涯海角+呀诺达+3晚连住酒店）</h3>
              <span class="sell">已售 1150</span>
              <span class="price"><b>￥800</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item" onclick="tomall_detail()">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/2.gif" alt="">
              <div class="mark-tag">
                一日游
              </div>
            </div>
            <div class="caption">
              <h3>芭提雅，体验别样风情+客家私厨午宴一日游（12人VIP团+独家深入明清古村落）</h3>
              <span class="sell">已售 707</span>
              <span class="price"><b>￥398</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item" onclick="tomall_detail()">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/3.jpeg" alt="">
              <div class="mark-tag">
                多日游
              </div>
            </div>
            <div class="caption">
              <h3>泰国人妖表演，皮皮岛3天2晚大环线,经典全覆盖自由行（车辆+住宿+门票）</h3>
              <span class="sell">已售 870</span>
              <span class="price"><b>￥660</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item"  onclick="tomall_detail()">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/4.gif" alt="">
              <div class="mark-tag">
                多日游
              </div>
            </div>
            <div class="caption">
              <h3>曼谷 环海2日游玩体验～情人滩边摩挲花楼湖景房·独立空调不再冷（年销售过万份）</h3>
              <span class="sell">已售 2951</span>
              <span class="price"><b>￥369</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item" onclick="tomall_detail()">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/5.jpeg" alt="">
              <div class="mark-tag">
                多日游
              </div>
            </div>
            <div class="caption">
              <h3>纯净之旅~温暖冬天·这是一条极致奢华的7天6晚泰国高端冰雪之旅（ 酒店奢华温泉双次不限时 4-6人免费升级包炕）</h3>
              <span class="sell">已售 297</span>
              <span class="price"><b>￥3980</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item" onclick="tomall_detail()">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/6.jpeg" alt="">
              <div class="mark-tag">
                一日游
              </div>
            </div>
            <div class="caption">
              <h3>可订清迈+普吉岛纯玩一日游（赠自助午餐+耳麦+接机或高铁 ）</h3>
              <span class="sell">已售 6572</span>
              <span class="price"><b>￥208</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item"  onclick="tomall_detail()">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/7.jpeg" alt="">
              <div class="mark-tag">
                景点门票
              </div>
            </div>
            <div class="caption">
              <h3>即订即用 泰国乐园1日门票 破5万销量 快速换领fp fastpass （多人同行可刷一人身份证入园）</h3>
              <span class="sell">已售 10480</span>
              <span class="price"><b>￥278</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item" onclick="tomall_detail()">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/8.jpeg" alt="">
              <div class="mark-tag">
                景点门票
              </div>
            </div>
            <div class="caption">
              <h3>限时特惠.泰国天涯海角门票（随订随取）.必打卡景区</h3>
              <span class="sell">已售 49880</span>
              <span class="price"><b>￥20</b> 起</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="more">
        <button type="button" class="btn btn-default" onclick="toMall_detail()">点击查看更多</button>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="gailan_strategy">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="bigtitle">
        泰国热门驴友记
      </div>
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a aria-controls="theme1" href="#theme1" role="tab"
                                                  data-toggle="tab">悠久的古城遗迹</a></li>
        <li role="presentation"><a aria-controls="theme2" href="#theme2" role="hot" data-toggle="tab">不得不提的寺庙文化</a></li>
        <li role="presentation"><a aria-controls="theme3" href="#theme3" role="tab" data-toggle="tab">永远不会腻的买买买</a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="theme1">
          <div class="row">
            <div class="col-md-4">
              <div class="on-pic">
                <img src="../images/scenic/scenicdetail_gailan/travel2.jpeg" alt="">
                <div class="describe" onclick="tosociety_travel_detail()">
                  <p class="describe-img">
                    <img src="../images/society/society_travel/6.jpg">
                  </p>
                  <p class="describe-name">
                    环球世界我的目标
                  </p>
                  <p class="describe-header">
                    那座曾经消失的魏功甘古城
                  </p>
                  <p class="describe-body">
                    魏功甘古城，清迈之前的都城，曾经因为洪水而消失在人们的视野里，但是，断壁残垣并不能阻挡他的魅力
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="on-pic">
                <img src="../images/scenic/scenicdetail_gailan/travel3.jpeg" alt="">
                <div class="describe" onclick="tosociety_travel_detail()">
                  <p class="describe-img">
                    <img src="../images/society/society_travel/3.jpg">
                  </p>
                  <p class="describe-name">
                    世界世界在我脚下
                  </p>
                  <p class="describe-header">
                    清迈--行走在小城故事里
                  </p>
                  <p class="describe-body">
                    清迈的美景、美食介绍，还有好玩的人妖表演和夜间动物园哦~
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="on-pic">
                <img src="../images/scenic/scenicdetail_gailan/travel1.jpeg" alt="">
                <div class="describe" onclick="tosociety_travel_detail()">
                  <p class="describe-img">
                    <img src="../images/society/society_travel/4.jpg">
                  </p>
                  <p class="describe-name">
                    老年团伙~~~
                  </p>
                  <p class="describe-header">
                    北国玫瑰--清迈
                  </p>
                  <p class="describe-body">
                    清迈，是泰国第二大城市，是清迈府的首府，其发达程度仅次於首都曼谷。距曼谷700公里，位于海拔300米的高原盆地，四周群山环抱，气候凉爽，景色旖旎，古迹众多，商业繁荣，是东南亚著名的避暑旅游胜地。
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="theme2">
          <div class="row">
            <div class="col-md-4">
              <div class="on-pic">
                <img src="../images/scenic/scenicdetail_gailan/travel4.jpeg" alt="">
                <div class="describe" onclick="tosociety_travel_detail()">
                  <p class="describe-img">
                    <img src="../images/society/society_travel/2.jpg">
                  </p>
                  <p class="describe-name">
                    慧慧
                  </p>
                  <p class="describe-header">
                    清迈寻觅佛迹
                  </p>
                  <p class="describe-body">
                    在泰国这个佛教国家，清迈这朵泰北玫瑰是去旅行时一个不可错过的城市。拥有众多历史悠久的古佛寺，信仰的熏陶造就了这里淳朴、和善的民风，众多的手工艺品，物超所值的小吃，做为泰国的第二大城市生活的便利自然也不成问题。
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="on-pic">
                <img src="../images/scenic/scenicdetail_gailan/travel5.jpeg" alt="">
                <div class="describe" onclick="tosociety_travel_detail()">
                  <p class="describe-img">
                    <img src="../images/society/society_travel/3.jpg">
                  </p>
                  <p class="describe-name">
                    高德高德
                  </p>
                  <p class="describe-header">
                    清迈の精美寺庙
                  </p>
                  <p class="describe-body">

                    清迈是泰国第二大城市，至今仍保留着很多珍贵的历史和文化遗迹。清迈有太多值得留恋的地方，古城内以及城外遍布了很多大大小小的寺庙，精美而庄严。
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="on-pic">
                <img src="../images/scenic/scenicdetail_gailan/travel6.jpeg" alt="">
                <div class="describe" onclick="tosociety_travel_detail()">
                  <p class="describe-img">
                    <img src="../images/society/society_travel/4.jpg">
                  </p>
                  <p class="describe-name">
                    多多人儿
                  </p>
                  <p class="describe-header">
                    在曼谷一定要去参拜的寺庙
                  </p>
                  <p class="describe-body">
                    泰国被称为千佛之国，几乎每个村落都会有一两座寺庙，而在首都曼谷更是有着大大小小众多寺庙，有一些相当宏伟、壮观，有些则精致、具有特别的意义。
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="theme3">
          <div class="row">
            <div class="col-md-4">
              <div class="on-pic">
                <img src="../images/scenic/scenicdetail_gailan/travel7.jpeg" alt="">
                <div class="describe" onclick="tosociety_travel_detail()">
                  <p class="describe-img">
                    <img src="../images/society/society_travel/7.jpg">
                  </p>
                  <p class="describe-name">
                    hihihigh起来
                  </p>
                  <p class="describe-header">
                    清迈的购物清单
                  </p>
                  <p class="describe-body">
                    去清迈两次，就说说我每次都会买的东西。
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="on-pic">
                <img src="../images/scenic/scenicdetail_gailan/travel8.jpeg" alt="">
                <div class="describe" onclick="tosociety_travel_detail()">
                  <p class="describe-img">
                    <img src="../images/society/society_travel/3.jpg">
                  </p>
                  <p class="describe-name">
                    社会我的幂姐呀。。
                  </p>
                  <p class="describe-header">
                    最喜欢的清迈几个购物点
                  </p>
                  <p class="describe-body">
                    非常赞的几个清迈夜市。
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="on-pic">
                <img src="../images/society/society_travel/t1.jpeg" alt="">
                <div class="describe" onclick="tosociety_travel_detail()">
                  <p class="describe-img">
                    <img src="../images/touxiang.jpeg">
                  </p>
                  <p class="describe-name">
                    wuli思密达达达达达
                  </p>
                  <p class="describe-header">
                    FRIENDS六人行，泰美泰国！...
                  </p>
                  <p class="describe-body">
                    提到泰国，大家都会想起什么？阳光、沙滩、大象、人妖……种种之类，泰国的标签实在是太多了！楼主作为一介名副其实的屌丝，第一次出国也是选择泰国作为目的地，不为别的，因为实在是又便宜又好！
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="more">
          <button type="button" class="btn btn-default" onclick="tosociety_travel() ">点击查看更多</button>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>



</div>
<div class="gailan_discuss">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="bigtitle">
        热门评论
      </div>
      <div class="discuss">
        <form>
          <ul>
            <li class="user">
              <h3><img src="../images/society/society_travel/2.jpg"></h3>
              <div class="e_con">
                <h4><a href="#">种子</a></h4>
                <span>Lv.15</span>
                <em>2018-03-12 17:41:58</em>
                <div class="clear"></div>
                <p>好想去泰国呀呀呀，想玩想玩，很吸引我</p>
                <div class="clear"></div>
                <div class="opatation">
                  <a href="javascript:void(0);" class="reply_wall">1楼</a>
                  <div class="clear"></div>
                </div>
              </div>
            </li>
            <li class="user">
              <h3><img src="../images/touxiang.jpeg"></h3>
              <div class="e_con">
                <h4><a href="#">娜娜~~~</a></h4>
                <span>Lv.1</span>
                <em>2018-03-17 09:41:18</em>
                <div class="clear"></div>
                <p>还没有出过国，特别想去泰国玩，非常漂亮</p>
                <div class="clear"></div>
                <div class="opatation">
                  <a href="javascript:void(0);" class="reply_wall">2楼</a>
                  <div class="clear"></div>
                </div>
              </div>
            </li>
            <li class="user">
              <h3><img src="../images/society/society_travel/4.jpg"></h3>
              <div class="e_con">
                <h4><a href="#">飞飞飞，飞起来</a></h4>
                <span>Lv.2</span>
                <em>2018-03-19 11:40:00</em>
                <div class="clear"></div>
                <p>表示怎么你那个签证啊，不知道诶，指教一下大神</p>
                <div class="clear"></div>
                <div class="opatation">
                  <a href="javascript:void(0);" class="reply_wall">3楼</a>
                  <div class="clear"></div>
                </div>
              </div>
            </li>
            <li class="user">
              <h3><img src="../images/touxiang.jpeg"></h3>
              <div class="e_con">
                <h4><a href="#">传说中的某某某</a></h4>
                <span>Lv.10</span>
                <em>2018-04-06 21:27:43</em>
                <div class="clear"></div>
                <p>攻略还不错哒，哈哈哈</p>
                <div class="clear"></div>
                <div class="opatation">
                  <a href="javascript:void(0);" class="reply_wall">4楼</a>
                  <div class="clear"></div>
                </div>
              </div>
            </li>
            <li class="user">
              <h3><img src="../images/logo1.png"></a></h3>
              <div class="e_con">
                <h4><a href="#" target="_blank">ajdfbc</a></h4>
                <span>Lv.8</span>
                <em>2018-04-16 13:08:09</em>
                <div class="clear"></div>
                <p>泰国那个海边很好玩值得一去</p>
                <div class="clear"></div>
                <div class="opatation">
                  <a href="javascript:void(0);" class="reply_wall">5楼</a>
                  <div class="clear"></div>
                </div>
              </div>
            </li>
            <div class="clear"></div>
          </ul>
          <div class="discuss-text">
            <textarea></textarea>
            <a id="submit" href="#">提交</a>
            <div class="clear"></div>
          </div>
          <!-- 发言-->

          <nav aria-label="Page navigation" style="float:right; margin-top: 10px">
            <ul class="pagination" id="turn_page">
              <li><a href="#aaa">«</a></li>
              <li class="active"><a href="#aaa">1</a></li>
              <li><a href="#aaa">2</a></li>
              <li><a href="#aaa">3</a></li>
              <li><a href="#aaa">4</a></li>
              <li><a href="#aaa">5</a></li>
              <li><a href="#" >»</a></li>
            </ul>
          </nav>
        </form>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
<script>
    function toscenicdetail_scenic() {
        window.location.href = './scenicdetail_scenic.php';
    }


    function tomall_detail() {
        window.location.href = './mall_detail.php';
    }

    function tosociety_travel_detail() {
        window.location.href = './society_travel_detail.php';
    }

    function tosociety_travel() {
        window.location.href = './society_travel.php';
    }

</script>
</body>
</html>
