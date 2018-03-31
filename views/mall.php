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
        <div class="menu-content-header">港澳台</div>
        <div class="menu-content-body">
          <ul class="menu-content-item">
            <li>香港</li>
            <li>澳门</li>
          </ul>
          <ul class="menu-content-item">
            <li>香港迪士尼</li>
            <li>澳门塔</li>
            <li>摩天轮</li>
          </ul>
          <ul class="menu-content-item">
            <li>高铁票</li>
            <li>城市交通</li>
            <li>精选</li>
          </ul>
        </div>
        <div class="menu-content-header">国内</div>
        <div class="menu-content-body">
          <ul class="menu-content-item">
            <li>长白山</li>
            <li>三亚</li>
            <li>厦门</li>
            <li>张家界</li>
          </ul>
        </div>
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
      <span class="mall-menu-icon glyphicon glyphicon-pawn"></span>
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
      <span class="mall-menu-arrow glyphicon glyphicon-chevron-right"></span>
      <div class="menu-content">
        ddd
      </div>
    </div>
    <div class="mall-menu-item">
      <span class="mall-menu-icon glyphicon glyphicon-knight"></span>
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
<div class="discounts">
  <div class="discounts-content">
    <div class="discounts-item">
      <img src="../images/mall/discounts/discounts1.png" alt="">
    </div>
    <div class="discounts-item">
      <img src="../images/mall/discounts/discounts2.png" alt="">
    </div>
    <div class="discounts-item">
      <img src="../images/mall/discounts/discounts3.png" alt="">
    </div>
    <div class="discounts-item">
      <img src="../images/mall/discounts/discounts4.png" alt="">
    </div>
  </div>
</div>

<div class="kill">
  <div class="kill-content">
    <div class="kill-header">
      <p class="title">天天秒杀</p>
      <p class="subtitle">限时抢购，每日24点上新</p>
    </div>
    <div class="kill-time">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
          <a aria-controls="t1" href="#t1" role="tab" data-toggle="tab">
            <div class="left">
              12:00
            </div>
            <div class="right">
              <div>正在秒杀</div>
              <div id="leftTime"></div>
            </div>
          </a>
        </li>
        <li role="presentation"><a aria-controls="t2" href="#t2" role="tab" data-toggle="tab">
            <div class="left">
              24:00
            </div>
            <div class="right">
              <div>正在秒杀</div>
              <div id="leftTime"></div>
            </div>
          </a>
        </li>
      </ul>
      <div class="kill-body">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="t1">
            <div class="kill-pic">
              <div class="kill-item">
                <img src="../images/index/carousel/carousel6.jpeg" alt="">
                <div class="describe">
                  <div class="describe-inner">
                    [aa上海送签]菲律宾旅游签证（全国受理+免存款+免在职+升级加急+极简资料+无需面试）
                  </div>
                </div>
                <div class="price">
                  <span class="number">￥1999</span>
                  <span class="word">元起</span>
                </div>
              </div>
              <div class="kill-item">
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
              <div class="kill-item">
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
          <div role="tabpanel" class="tab-pane" id="t2">
            <div class="kill-pic">
              <div class="kill-item">
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
              <div class="kill-item">
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
              <div class="kill-item">
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
      </div>
    </div>
  </div>
</div>

<div class="package-tour">
  <div class="package-tour-content">
    <div class="package-tour-header">
      <p class="title">跟团游</p>
      <p class="subtitle">旅游需要好的选择，全网精选强力推荐</p>
    </div>
    <div class="package-tour-body">
      <ul class="package-tour-list">
        <li class="package-tour-one">
          <p class="pics">
            <img src="../images/mall/package_tour/1.jpeg" alt="">
          </p>
          <div class="mask"></div>
          <div class="tag">跟团游</div>
          <h3 class="title">[可用券]深圳直飞新加坡+印尼民丹岛5天4晚跟团游（探寻赤道秘境+穿梭红树林+见证黄金沙漠海洋+环游马坡岛+穿越狮城）</h3>
          <p class="price"><em>999</em>元起</p>
        </li>
        <li class="package-tour-item">
          <p class="pics">
            <img src="../images/mall/package_tour/2.jpeg" alt="">
          </p>
          <div class="infos">
            <h3 class="title">天津直飞北海道札幌4天3晚跟团游（品尝北海道特色烤肉+成吉思汗烤肉+石狩锅+一晚温泉酒店，北广岛奥特莱斯畅享购物）</h3>
            <p class="price"><em>2780</em>元起</p>
          </div>
        </li>
        <li class="package-tour-item">
          <p class="pics">
            <img src="../images/mall/package_tour/3.jpeg" alt="">
          </p>
          <div class="infos">
            <h3 class="title">北京直飞埃及10-12日文化之旅（埃航直飞/全程国际五星酒店/2晚红海/车载WiFi）</h3>
            <p class="price"><em>11299</em>元起</p>
          </div>
        </li>
        <li class="package-tour-item">
          <p class="pics">
            <img src="../images/mall/package_tour/4.jpeg" alt="">
          </p>
          <div class="infos">
            <h3 class="title">[国庆]洛杉矶佩吉拉斯5天4晚房车跟团游（小团VIP服务+美国营地体验+自营满意度高+可配上海/长沙/重庆往返机票）</h3>
            <p class="price"><em>6999</em>元起</p>
          </div>
        </li>
        <li class="package-tour-item">
          <p class="pics">
            <img src="../images/mall/package_tour/5.jpeg" alt="">
          </p>
          <div class="infos">
            <h3 class="title">北京直飞斯里兰卡7天6晚跟团游（斯航直飞，自营高满意度，一价全含，0自费，双火车体验，3晚五星酒店）</h3>
            <p class="price"><em>8289</em>元起</p>
          </div>
        </li>
        <li class="package-tour-item">
          <p class="pics">
            <img src="../images/mall/package_tour/6.jpeg" alt="">
          </p>
          <div class="infos">
            <h3 class="title">武汉直飞泰国普吉岛+斯米兰岛6天5晚跟团游（安排2晚当五沙滩别墅1晚国际五星2晚国际四星+普吉岛五星SPA+可选择斯米兰群岛浮潜）</h3>
            <p class="price"><em>3680</em>元起</p>
          </div>
        </li>
        <div class="package-tour-more" onclick="toGentuanyou()">
          <p class="title">查看更多<br>跟团游产品</p>
          <p class="arrow">
            <span class="glyphicon glyphicon-menu-right"></span>
          </p>
        </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="dangdi-tour">
  <div class="dangdi-tour-content">
    <div class="dangdi-tour-header">
      <p class="title">当地自助游</p>
      <p class="subtitle">像当地人一样，体验最本土的吃喝玩乐</p>
    </div>
    <div class="dangdi-tour-body">
      <ul class="dangdi-tour-list">
        <div class="dangdi-tour-one">
          <p class="pics">
            <img src="../images/mall/dangdi/1.jpeg" alt="">
          </p>
          <div class="mask"></div>
          <h3 class="title">【3月22再秒杀】【打卡必玩】日本东京迪斯尼乐园/迪士尼海洋1日/多日通票</h3>
          <div class="infos">
            <p class="type">城市玩乐</p>
            <p class="price"><em>435</em>元起</p>
          </div>
        </div>
        <div class="dangdi-tour-item">
          <div class="pics">
            <img src="../images/mall/dangdi/2.jpeg" alt="">
          </div>
          <h3 class="title">【樱花季买二免一】【穷游Q-Home首发】日本京都祇园花见和服体验</h3>
          <p class="price"><em>240</em>元起</p>
        </div>
        <div class="dangdi-tour-item">
          <div class="pics">
            <img src="../images/mall/dangdi/3.jpeg" alt="">
          </div>
          <h3 class="title">【【3月21秒杀】【酒店接】日本大阪京都一日游金阁寺+伏见稻荷大社+祗园等（大阪往返，一人成团）</h3>
          <p class="price"><em>195</em>元起</p>
        </div>
        <div class="dangdi-tour-item">
          <div class="pics">
            <img src="../images/mall/dangdi/4.jpeg" alt="">
          </div>
          <h3 class="title">【3月22再秒】【打卡必玩】日本大阪环球影城入园电子票</h3>
          <p class="price"><em>466</em>元起</p>
        </div>
        <div class="dangdi-tour-more" onclick="toDangdiyou()">
          <p class="title">查看更多<br>当地玩乐产品</p>
          <p class="arrow">
            <span class="glyphicon glyphicon-menu-right"></span>
          </p>
        </div>
        <div class="dangdi-tour-item">
          <div class="pics">
            <img src="../images/mall/dangdi/5.jpeg" alt="">
          </div>
          <h3 class="title">日本青森县星野酒店集团奥入濑溪流酒店</h3>
          <p class="price"><em>599</em>元起</p>
        </div>
        <div class="dangdi-tour-item">
          <div class="pics">
            <img src="../images/mall/dangdi/6.jpeg" alt="">
          </div>
          <h3 class="title">日本青森县星野酒店集团青森屋</h3>
          <p class="price"><em>388</em>元起</p>
        </div>
      </ul>
    </div>
  </div>
</div>


<?php require 'footer.php' ?>
</body>
</html>

<script>
  function toGentuanyou() {
    window.location.href = './gentuanyou.php';
  }

  function toDangdiyou() {
    window.location.href = './dangdiyou.php';
  }

  function timeFormat(format, timestamp) {
    var h = Math.floor(timestamp / (1000 * 60 * 60));
    var i = Math.floor((timestamp - h * 1000 * 60 * 60) / (1000 * 60));
    var s = Math.floor((timestamp - h * 1000 * 60 * 60 - i * 1000 * 60) / 1000);

    h = h < 10 ?
      '0' + h :
      h;
    i = i < 10 ?
      '0' + i :
      i;
    s = s < 10 ?
      '0' + s :
      s;
    return format
      .replace('H', h)
      .replace('i', i)
      .replace('s', s)
  }

  leftTime = 1000 * 24 * 60 * 60 - 1000;
  var leftTimeDom = document.getElementById("leftTime");
  leftTimeDom.innerHTML = "距结束" + timeFormat('H:i:s', leftTime);
  var timer = null;
  if (leftTime > 0) {
    timer = setInterval(function () {
      leftTime -= 1000;
      leftTimeDom.innerHTML = "距结束" + timeFormat('H:i:s', leftTime);
    }, 1000)
  } else {
    clearInterval(timer);
    timer = null;
  }
</script>