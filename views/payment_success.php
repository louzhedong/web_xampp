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
      <i><img src="../images/mall/payment/payment_sucess.png" style="width: 60px;height: 60px" alt=""></i>恭喜您，购买成功！
    </h3>
    <div class="item">
      <span class="order-id">订单号：</span>
      <span class="num">2399942201804157197722</span>
    </div>
    <div class="item">
      <span class="order-id">支付金额：</span>
      <span class="price"><em>￥</em>5580.00</span>
    </div>
  </div>
  <div class="payment-success">
    <div class="order-action">
    <span class="pay-btn" onclick="toIndex()">
      查看订单
    </span>
      <span class="pay-btn" onclick="toIndex()">
      返回首页
    </span>
    </div></div>
</div>

<?php require 'footer.php'?>
  <script>
    function toIndex() {
      location.href = './index.php';
    }
  </script>
</body>
</html>
