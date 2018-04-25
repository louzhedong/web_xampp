<?php
// 提交订单
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>订单提交</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/booking.css">
</head>
<body>
<?php
$tab = 'mall';
?>
<?php require 'top.php' ?>
<div class="booking">
  <div class="booking-cont">
    <div class="order-left">
      <div class="buy-step">
        <ul>
          <li class="step1"><p><i></i></p><em>提交订单</em></li>
          <li class="step2"><p><i></i></p><em>确认支付</em></li>
          <li class="step3"><p><i></i></p><em>完成购买</em></li>
        </ul>
      </div>
      <div class="order-info">
        <h2><i class="_j_step_num">1</i>预订人信息（<span>用于接收订单反馈</span>）</h2>
        <div class="user-int clearfix">
          <div class="form-sec flt1 form-sec-focus" style="clear: both">
            <label for="base_name">姓名</label>
            <input id="base_name" type="text" class="bord-red _j_booked_check" placeholder="请填写您的真实姓名" value="郑燕娜"
                   required="1" title="姓名">
          </div>
          <div class="ver-code clearfix">
            <p class="form-sec flt1  form-sec-focus">
              <input id="base_phone" type="tel" placeholder="手机" value="18268825904" required="1" title="手机号"
                     class="_j_booked_check">
              <label for="base_phone">手机</label>
            </p>
          </div>
          <div class="form-sec flt1  form-sec-focus" style="clear: both">
            <label for="base_email">邮箱</label>
            <div class="parentCls">
              <div id="mailListBox_0" class="justForJs parentCls"
                   style="min-width:262px;_width:262px;position:absolute;left:-6000px;top:40px;z-index:5;"></div>
              <input data-e="" id="base_email" type="text" class="bord-red _j_booked_check" placeholder="请填写邮箱"
                     value="382347276@qq.com" required="1" title="邮箱">
            </div>
          </div>
          <div class="form-sec flt1  form-sec-focus" style="clear: both">
            <label for="base_wechat">微信</label>
            <input id="base_wechat" type="text" placeholder="仅作为备用联系方式" value="1">
          </div>

          <div class="form-sec flt1 form-tare form-sec-focus">
            <label for="base_description">备注信息</label>
            <textarea id="base_description" type="text" placeholder="备注信息"></textarea>
          </div>
        </div>
      </div>
      <div class="order-info">
        <h2><i class="_j_step_num">2</i>出行人信息（<span>用于订单信息登记</span>）
          <span class="glyphicon glyphicon-plus" aria-hidden="true" style="cursor: pointer"></span>
        </h2>
        <div class="user-int clearfix">
          <div class="form-sec flt1 form-sec-focus" style="clear: both">
            <label for="base_name">姓名</label>
            <input id="base_name" type="text" class="bord-red _j_booked_check" placeholder="请填写您的真实姓名" value="郑燕娜"
                   required="1" title="姓名">
          </div>
          <div class="ver-code clearfix">
            <p class="form-sec flt1  form-sec-focus">
              <input id="base_phone" type="tel" placeholder="手机" value="18268825904" required="1" title="手机号"
                     class="_j_booked_check">
              <label for="base_phone">手机</label>
            </p>
          </div>
          <div class="form-sec flt1  form-sec-focus" style="clear: both">
            <label for="base_email">邮箱</label>
            <div class="parentCls">
              <div id="mailListBox_0" class="justForJs parentCls"
                   style="min-width:262px;_width:262px;position:absolute;left:-6000px;top:40px;z-index:5;"></div>
              <input data-e="" id="base_email" type="text" class="bord-red _j_booked_check" placeholder="请填写邮箱"
                     value="382347276@qq.com" required="1" title="邮箱">
            </div>
          </div>
          <div class="form-sec flt1  form-sec-focus" style="clear: both">
            <label for="base_wechat">微信</label>
            <input id="base_wechat" type="text" placeholder="仅作为备用联系方式" value="1">
          </div>

          <div class="form-sec flt1 form-tare form-sec-focus">
            <label for="base_description">备注信息</label>
            <textarea id="base_description" type="text" placeholder="备注信息"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="order-right">
      <div class="image">
        <img src="../images/good/2.jpeg" width="310" height="182">
      </div>
      <div class="order-adv">
        <h2>迪拜Atlantis亚特兰蒂斯酒店（含早餐+晚餐+增值税+服务费+酒店税费，可免费进入水世界/水族馆)（豪华房/海景房/棕榈岛房任选）</h2>
        <div class="order-info">
          <p>
            <span>3日2晚</span>
          </p>
          <p>
            <b>出行日期</b>
            <i>2018-04-26</i>
          </p>
          <p>
            <b>数量</b>
            <i>成人x1</i>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="booking-count">
    <div class="price">
      <ul>
        <li>
          <span>产品金额：</span>
          <em>
            5580元
          </em>
        </li>
        <li class="price-count"><span>支付总金额：</span><b>￥<i>5580</i></b></li>
      </ul>
    </div>
  </div>
  <div class="sub-order">
    <div class="btn-order" onclick="toPayment()">
      提交订单
    </div>
  </div>
  <script>
    function toPayment() {
      location.href = './payment.php';
    }
  </script>
</div>
<?php require 'footer.php'?>
</body>
</html>

