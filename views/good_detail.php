<?php
// 商品详情
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>驴友记</title>
  <link rel="stylesheet" href="../css/society_travel.css">
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/good_detail.css">
  <link rel="stylesheet" href="../package/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
</head>
<body style="background: #f5f5f5">
<?php
$tab = 'mall';
?>
<?php require 'top.php' ?>
<div class="good-detail">
  <div class="good-detail-up">
    <div class="up-left">
      <div class="image">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="../images/good/2.jpeg">
            </div>
            <div class="item">
              <img src="../images/good/5.jpeg">
            </div>
            <div class="item">
              <img src="../images/good/3.jpeg">
            </div>
            <div class="item">
              <img src="../images/good/4.jpeg">
            </div>
            <div class="item">
              <img src="../images/good/6.jpeg">
            </div>
          </div>
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
      <p>
        <span class="glyphicon glyphicon-heart" aria-hidden="true"
              style="margin: 10px 10px;cursor:pointer;width: 20px;color: #ff9d00"></span>
        <span>收藏</span>
      </p>
    </div>

    <div class="up-right">
      <div class="tab1">
        <div class="title">
          迪拜Atlantis亚特兰蒂斯酒店（含早餐+晚餐+增值税+服务费+酒店税费，可免费进入水世界/水族馆)（豪华房/海景房/棕榈岛房任选）
        </div>
        <div class="info">
          <div style="display: inline-block;">
            <span class="price">
              <em>2392</em>
              元起
            </span>
          </div>
          <div class="scan">
            <span class="scan-1">浏览</span>
            <span class="scan-2">25075</span>
          </div>
          <div class="sell">
            <span class="sell-1">销售</span>
            <span class="sell-2">20</span>
          </div>
        </div>
        <div class="tips">
          <div class="tips-inner">
            五星级的Atlantis度假村位于迪拜的朱美拉棕榈岛，享有阿拉伯海湾的壮丽美景，设有私人沙滩和水下水族馆。你可与海豚共游，还可免费进入水上冒险乐园水上乐园和Lost Chambers Aquarium水族馆。
          </div>
        </div>
      </div>
      <div class="tab2">
        <div class="choose">
          <h4>产品类型</h4>
          <ul>
            <li>
              秒杀价-豪华房/间/夜（只限7.1-7.15入住）
            </li>
            <li class="active">
              豪华房Deluxe Room/间/夜
            </li>
            <li>
              升级豪华海景房 补差价
            </li>
            <li>
              升级棕榈滩豪华房 补差价
            </li>
          </ul>
        </div>
        <div class="date-choose">
          <h4>出行日期</h4>
          <input type="text" value="2018-04-15" id="datetimepicker">
        </div>
        <div class="number">
          <h4>数量
          </h4>
          <div class="input">
            <span class="jian" onclick="subNumber()">-</span>
            <span class="jia" onclick="addNumber()">+</span>
            <div id="buy-number">1</div>
          </div>
        </div>
      </div>
      <div class="tab3">
        <div class="left">
          <span>¥
          <em id="total-count">4285</em>
          </span>
        </div>
        <div class="right" onclick="tobooking()">
          立即预订
        </div>
      </div>
    </div>
  </div>
  <div class="good-detail-down">
    <div class="good-detail-content">
      <div class="product_intro">
        <h2>产品简介</h2>
        <div class="product_intro-info">
          <h5>亮点推荐</h5>
          <div class="right">
            <p>五星级的Atlantis度假村位于迪拜的朱美拉棕榈岛，享有阿拉伯海湾的壮丽美景，设有私人沙滩和水下水族馆。你可与海豚共游，还可免费进入水上冒险乐园水上乐园和Lost Chambers
              Aquarium水族馆。</p>
          </div>
        </div>
        <div class="product_intro-info">
          <h5>优惠信息</h5>
          <div class="right">
            <p>1、玩乐天天抢在4月10日10:00，每个ID限购1个，先后顺序以付款时间为准。</p>
            <p>2、请于拍下后20分钟内付款，否则订单将自动关闭。</p>
            <p>3、秒杀产品下单成功后，请至少提前5个工作日告知准确使用日期及其他必须信息。</p>
            <p>4、该产品需要二次确认，请您提前安排好出游计划。</p>
            <p>5、秒杀产品为特价产品，一旦支付，如有退改，将收取100%的取消费用。</p>
          </div>
        </div>
      </div>
      <div class="product_intro">
        <h2>产品详情</h2>
        <div class="product_intro-info">
          <h5>产品信息</h5>
          <div class="right">
            <p style="color: #ff9d00">迪拜亚特兰蒂斯度假酒店 Atlantis The Palm</p>
            <p>五星级的Atlantis度假村位于迪拜的朱美拉棕榈岛，享有阿拉伯海湾的壮丽美景，设有私人沙滩和水下水族馆。你可与海豚共游 ，还可免费进入水上冒险乐园水上乐园和Lost Chambers
              Aquarium水族馆。</p>
            <img src="../images/good/2.jpeg" alt="">
            <img src="../images/good/3.jpeg" alt="">
            <img src="../images/good/4.jpeg" alt="">
            <p>餐饮场所包括布置现代且供应传统中国川菜的Yuan餐厅以及供应阿拉伯风味当代日式佳肴并获奖的Nobu餐厅。Bread Street Kitchen & Bar酒吧供应英式菜单和戈登拉姆齐Gordon
              Ramsay的美味饮料。客人可以在Levantine Bar And Terrace露台一边享受棕榈和迪拜天际的壮丽景色，一边品尝地道的黎巴嫩美食以及可口的饮料。</p>
            <img src="../images/good/5.jpeg" alt="">
            <img src="../images/good/6.jpeg" alt="">
            <img src="../images/good/7.jpeg" alt="">
            <p>客人可以免费进入水上冒险乐园 - 中东地区的水上乐园，其中设有海王星塔和波塞冬塔及各种惊险的水滑梯塔。度假村为儿童提供水上游乐场。儿童俱乐部（The Kids
              Club）为孩子们提供严格监管的日常娱乐项目。</p>
          </div>
        </div>
        <div class="product_intro-info">
          <h5>景点介绍</h5>
          <div class="right">
            <p style="color: #ff9d00">【豪华房】</p>
            <p>【豪华房】
              客房面积：45平米，可多入住：2成人</p>
            <p>豪华间的阳台窗户享有度假酒店的壮丽美景。客房提供免费WiFi、明亮宽敞的休息区、办公桌以及42英寸的平板电视。浴室提供步入式淋浴间、浴缸和免费ESPA®洗浴用品。</p>
            <p>此类客房的房价包括： </p>
            <p>•24小时客房服务 </p>
            <p>无限次免费进入Aquaventure水上乐园 </p>
            <p>在儿童俱乐部（Kids Club）或Club Rush俱乐部参加1次免费下午活动 </p>
            <p>免费浴室用品</p>
            <p style="color: #ff9d00">*请注意，特大号床间提供较大的阳台，双人大号床间提供法式阳台。所有要求均需视供应情况而定。</p>
            <img src="../images/good/8.jpeg" alt="">
            <img src="../images/good/9.jpeg" alt="">
          </div>
        </div>
      </div>
      <div class="product_intro">
        <h2>费用说明</h2>
        <div class="product_intro-info">
          <h5>费用包含</h5>
          <div class="right">
            <p>1、 豪华房/海景豪华房/棕榈滩豪华房(双人床/双床)-根据所选套餐而定</p>
            <p>2、 5%增值税+ 10%市政费+10%住宿方服务费</p>
            <p>3. 酒店早餐+晚餐</p>
          </div>
        </div>
        <div class="product_intro-info">
          <h5>费用不含</h5>
          <div class="right">
            <p>1.个人消费及以上未提及的任何费用</p>
            <p>2. 每晚AED 20.00 观光旅游费</p>
          </div>
        </div>
      </div>
      <div class="product_intro">
        <h2>预订须知</h2>
        <div class="product_intro-info">
          <h5>退款政策</h5>
          <div class="right">
            <p>本商品为特价商品，支付成功后，不支持任何变更，如遇退款或改期收取100%手续费。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="good-service">
      <div class="hd"><a>度假牛旅游网</a><span class="auth"><i></i>驴享汇认证商家</span>
      </div>
      <ul class="bd">
        <li class="item-service" style="" data-show-im="entrance">
          <span class="glyphicon glyphicon-comment"></span>
          <span class="s-num">咨询客服管家</span>
          <span class="s-time" data-show-im="hour">周一至周日 9:00-20:00</span>
        </li>
        <li class="item-tel">
          <span class="glyphicon glyphicon-earphone"></span>
          <span class="s-num">客服</span>
          <span class="s-num">4006588799转3743</span>
          <span class="s-time">周一至周日 09:00-21:35</span>
        </li>
      </ul>
    </div>
  </div>
  <script src="../package/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <script src="../package/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
  <script>
    function tobooking() {
      window.location.href = './booking.php';
    }

    $('#datetimepicker').datetimepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      minView: 2
    });

    function addNumber() {
      var $elm = document.getElementById('buy-number');
      var value = parseInt($elm.innerText);
      value++;
      $elm.innerText = value;
      document.getElementById('total-count').innerText = value * 4285;
    }

    function subNumber() {
      var $elm = document.getElementById('buy-number');
      var value = parseInt($elm.innerText);
      if (value > 1) {
        value--;
        $elm.innerText = value;
        document.getElementById('total-count').innerText = value * 4285;
      }
    }
  </script>
</div>
<?php require 'footer.php' ?>
</body>
</html>
