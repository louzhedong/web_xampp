<?php
// 支付订单
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>订单支付</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/payment.css">
</head>
<body>
<?php
$tab = 'mall';
?>
<?php require 'top.php' ?>
<div class="payment">
  <div class="main-title">
    <span class="split"></span>
    <span class="sub">收银台</span>
  </div>
  <div class="buy-step">
    <ul>
      <li class="step1"><p><i></i></p><em>提交订单</em></li>
      <li class="step2"><p><i></i></p><em>确认支付</em></li>
      <li class="step3"><p><i></i></p><em>完成购买</em></li>
    </ul>
  </div>
  <div class="message">
    <h3>
      <i><img src="../images/mall/payment/success.png" alt=""></i>您的订单提交成功！
      <span class="countdown">支付剩余时间：<span id="left-time"></span>
    </h3>
    <div class="item">
      <span class="order-id">订单号：</span>
      <span class="num">2399942201804157197722</span>
    </div>
    <div class="item">
      <span class="order-id">应付金额：</span>
      <span class="price"><em>￥</em>5580.00</span>
    </div>
  </div>
  <div class="payment-method">
    <div class="hd">支付方式</div>
    <div class="bd">
      <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <img src="../images/mall/payment/weixin.png" alt="">
        <span>微信支付</span>
      </label>
      <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <img src="../images/mall/payment/zhifubao.png" alt="">
        <span>支付宝支付</span>
      </label>
      <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
        <img src="../images/mall/payment/yinhangka.png" alt="">
        <span>银行卡支付</span>
      </label>
    </div>
  </div>
  <div class="order-action">
    <span class="pay-btn" onclick="toPaymentSuccess()">
      确认支付
    </span>
  </div>
  <script>
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

    leftTime = 1000 * 60 * 60 - 1000;
    var leftTimeDom = document.getElementById("left-time");
    leftTimeDom.innerHTML = timeFormat('H:i:s', leftTime) + ',超时则订单关闭';
    var timer = null;
    if (leftTime > 0) {
      timer = setInterval(function () {
        leftTime -= 1000;
        leftTimeDom.innerHTML = timeFormat('H:i:s', leftTime) + ',超时则订单关闭';
      }, 1000)
    } else {
      clearInterval(timer);
      timer = null;
    }

    function toPaymentSuccess() {
      location.href = './payment_success.php';
    }
  </script>
</div>
</body>
</html>

