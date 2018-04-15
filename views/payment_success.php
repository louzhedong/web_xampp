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
