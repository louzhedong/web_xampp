<?php
// 支付成功
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>支付成功</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/payment_success.css">
</head>
<body>
<?php
$tab = 'mall';
?>
<?php require 'top.php' ?>
<div class="success">

</div>
<div class="main-title">
    <span class="logo">
      <img src="../images/logo2.png" alt="">
    </span>
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
<div class="payment-success">
  <div class="image">
    <img src="../images/mall/payment/payment_sucess.png" alt="">
  </div>
  <div class="order-action">
    <span class="pay-btn" onclick="toIndex()">
      返回首页
    </span>
</div>
<?php require 'footer.php'?>
  <script>
    function toIndex() {
      location.href = './index.php';
    }
  </script>
</body>
</html>
