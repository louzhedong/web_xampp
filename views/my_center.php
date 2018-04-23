<?php
//个人中心
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>个人中心</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/my_center.css">
  <link rel="stylesheet" href="../package/jVectorMap/jquery-jvectormap-2.0.3.css" type="text/css" media="screen">
  <script src="../package/jVectorMap/jquery-1.12.4.min.js"></script>
  <script src="../package/jVectorMap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="../package/jVectorMap/world_mill.js"></script>
  <script src="../package/jVectorMap/jquery-jvectormap-cn-mill.js"></script>
</head>
<body>
<?php
$tab = 'center';
?>
<?php require 'top.php' ?>
<div class="my-center">
  <div id="big-map">
  </div>
  <div class="my-info">
    <div class="relative-read">
      <div class="MAvatar">
        <div class="MAvaImg hasAva">
          <img src="../images/touxiang.jpeg" height="120" width="120" alt="wuli思密达达达达达">
        </div>
        <div class="MAvaName">wuli思密达达达达达
        </div>

        <div class="its_tags">
          <span>vip</span>
          <span>达人</span>
          <span>足迹</span>
        </div>
        <div class="MAvaInfo clearfix MAvaMyInfo">
          <span class="MAvaLevel flt1">等级：<a title="Lv.3">Lv.3</a></span>
          <span class="MAvaPlace flt1" title="黄浦区">现居：黄浦区</span>
        </div>
        <div class="MAvaMore clearfix">
          <div class="MAvaNums">
            <strong><a>4</a></strong>
            <p>关注</p>
          </div>
          <div class="MAvaNums">
            <strong><a>0</a></strong>
            <p>粉丝</p>
          </div>
          <div class="MAvaNums last">
            <strong><a>0</a></strong>
            <p>青草</p>
          </div>
        </div>
      </div>
    </div>
    <div class="info">
      <div class="info-content">
        <div class="info-header">
          <strong>
            漂洋过海来睡你，在普吉宜必思邂逅绝美海岛时光
          </strong>
        </div>
        <div class="gailan">
          概览
        </div>
        <div class="detail">
          <span>游玩城市：</span>
          <span class="count">3</span>
          <span>到达国家：</span>
          <span class="count">2</span>
          <span>撰写游记：</span>
          <span class="count">12</span>
          <span>获得徽章：</span>
          <span class="count">3</span>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="cd-faq">
  <ul class="cd-faq-categories">
    <li><a class="selected" href="#basics"> 我的订单</a></li>
    <li><a href="#day1">我的收藏</a></li>
    <li><a href="#day2">我的游记</a></li>
    <li><a href="#day3">我的兑换</a></li>
    <li><a href="#day4">常用信息</a></li>
  </ul> <!-- cd-faq-categories -->

  <div class="cd-faq-items">
    <ul id="basics" class="cd-faq-group">
      <li class="cd-faq-title"><h2>我的订单</h2></li>
      <li>
        <div class="cd-faq-content">
          <table class="order-hd">
            <tbody>
            <tr>
              <th class="td-info">订单信息</th>
              <th class="td-date">行程日期</th>
              <th class="td-cost">支付金额</th>
              <th class="td-status">订单状态</th>
              <th class="td-operate">操作</th>
            </tr>
            </tbody>
          </table>
          <table class="order-item">
            <caption>
                <span class="num">
                  订单号：<a>2399942201804157197722</a>
                </span>
              <span class="time">下单时间：2018-04-15 13:21:08</span>
              <span class="telphone">联系电话：4006588799转3543</span>
            </caption>
            <tbody>
            <tr>
              <td class="td-info">
                <a class="pro-img">
                  <img
                    src="../images/order/1.jpeg">
                </a>
                <div class="pro-detail">
                  <p class="title" title="">【拒签全退】香港直飞日本大阪+东京+京都+富士山6天5晚跟团游（含签证+无自费+保证1晚温泉酒店+本愿寺+大阪城公园+豪华自助餐
                  </p>
                  <p class="sub" title="成人 × 1">成人 × 1</p>
                </div>
              </td>
              <td class="td-date">
                <p>出行日期：2018-04-26</p>
              </td>
              <td class="td-cost">
                <strong>￥5580</strong></td>
              <td class="td-status">
                <p class="s0">
                  已关闭
                </p>
              </td>
              <td class="td-operate">
                <a class="btn">
                  重新购买
                </a>
                <a class="btn">
                  联系客服
                </a>
                <a>
                  删除订单
                </a>
                <a>
                  查看订单
                </a>
              </td>
            </tr>
            </tbody>
          </table>
          <table class="order-item">
            <caption>
                <span class="num">
                  订单号：<a>2293018201804157195961</a>
                </span>
              <span class="time">下单时间：2018-04-15 11:00:31</span>
              <span class="telphone">联系电话：4006588799转3543</span>
            </caption>
            <tbody>
            <tr>
              <td class="td-info">
                <a class="pro-img">
                  <img
                    src="../images/order/2.jpeg">
                </a>
                <div class="pro-detail">
                  <p class="title" title="">【丽星邮轮处女星号】上海往返日本8天7晚邮轮之旅（暑期预售+家庭出游）
                  </p>
                  <p class="sub" title="成人 × 1">成人 × 2</p>
                </div>
              </td>
              <td class="td-date">
                <p>出行日期：2018-07-29</p>
              </td>
              <td class="td-cost">
                <strong>￥10198</strong></td>
              <td class="td-status">
                <p class="s0">
                  已关闭
                </p>
              </td>
              <td class="td-operate">
                <a class="btn">
                  重新购买
                </a>
                <a class="btn">
                  联系客服
                </a>
                <a>
                  删除订单
                </a>
                <a>
                  查看订单
                </a>
              </td>
            </tr>
            </tbody>
          </table>
          <table class="order-item">
            <caption>
                <span class="num">
                  订单号：<a>2146926201803286905361</a>
                </span>
              <span class="time">下单时间：2018-03-28 14:26:29</span>
              <span class="telphone">联系电话：4006588799转3543</span>
            </caption>
            <tbody>
            <tr>
              <td class="td-info">
                <a class="pro-img">
                  <img
                    src="../images/order/3.gif">
                </a>
                <div class="pro-detail">
                  <p class="title" title="">【美国维多利亚游轮美维系列】重庆出发长江三峡4天3晚游轮之旅（五星邮轮零购物产品）
                  </p>
                  <p class="sub" title="成人 × 1">成人 × 1</p>
                </div>
              </td>
              <td class="td-date">
                <p>出行日期：2018-03-31</p>
              </td>
              <td class="td-cost">
                <strong>￥1599</strong></td>
              <td class="td-status">
                <p class="s0">
                  已支付
                </p>
              </td>
              <td class="td-operate">
                <a class="btn">
                  重新购买
                </a>
                <a class="btn">
                  联系客服
                </a>
                <a>
                  删除订单
                </a>
                <a>
                  查看订单
                </a>
              </td>
            </tr>
            </tbody>
          </table>
        </div> <!-- cd-faq-content -->
      </li>
    </ul> <!-- cd-faq-group -->

    <ul id="day1" class="cd-faq-group">
      <li class="cd-faq-title"><h2>我的收藏</h2></li>
      <li>
        <div class="cd-faq-content">

        </div> <!-- cd-faq-content -->
      </li>

    </ul> <!-- cd-faq-group -->

    <ul id="day2" class="cd-faq-group">
      <li class="cd-faq-title"><h2>我的游记</h2></li>
      <li>
        <div class="cd-faq-content">
        </div> <!-- cd-faq-content -->
      </li>


    </ul> <!-- cd-faq-group -->

    <ul id="day3" class="cd-faq-group">
      <li class="cd-faq-title"><h2>我的兑换</h2></li>
      <li>
        <div class="cd-faq-content"

  </div> <!-- cd-faq-content -->
  </li>
  </ul> <!-- cd-faq-group -->

  <ul id="day4" class="cd-faq-group">
    <li class="cd-faq-title"><h2>常用信息</h2></li>
    <li>
      <div class="cd-faq-content">
      </div> <!-- cd-faq-content -->
    </li>
  </ul> <!-- cd-faq-group -->
  </div> <!-- cd-faq-items -->
  <a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="../js/society_travel_detail/main.js"></script>
<?php require 'footer.php' ?>
</body>
</html>

<script>
  $(function () {
    $('#big-map').vectorMap({
      map: 'cn_mill',
      backgroundColor: '#1f3957',
      color: "#BBBBBB",
      regionsSelectable: true,
      regionStyle: {
        initial: {
          fill: '#485e6f',
        },
        hover: {
          fill: '#cadead'
        },
        selected: {
          fill: '#ff9d00',
        }
      },
      zoomOnScroll: false,
    });
  });

</script>