<?php
//积分中心
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>积分中心</title>
  <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/jifen.css">
</head>
<body>
<?php
$tab = 'travel';
?>
<?php require 'top.php' ?>
<div class="jifen-header">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
      <div id="user"><img src="../images/touxiang.jpeg" onclick="#"> wuli思密达达达达达
      </div>
    </div>
    <div class="col-md-3">
      <span class="sun_all">
        积分余额：
      </span>
      <span class="sun_useful">
        1500
      </span>

      <br>
      <span class="sun_all">
        可用积分：
      </span>
      <span class="sun_useful">
        1500
      </span>
    </div>
    <div class="col-md-4">
      <img src="../images/society/jifen/transfer.png">
      <img src="../images/society/jifen/love.png">
      <br>
      <span>
        兑换记录 我的收藏
      </span>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="jifen-content">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a aria-controls="all" href="#all" role="tab"
                                                data-toggle="tab">礼品筛选</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="all">
        <div class="line">积分区间：<input type="checkbox">不限 <input type="checkbox">0-20000 <input type="checkbox">20000-40000
          <input
              type="checkbox">40000-60000 <input type="checkbox">60000~~
        </div>
        <div class="line">礼品种类：<input type="checkbox">不限 <input type="checkbox">数码 <input type="checkbox">日用品
          <input type="checkbox">影视会员 <input type="checkbox">其他
        </div>
      </div>

    </div>
    <ul class="hot-sale-content">
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf1.jpg" alt="">
        </div>
        <div class="caption">
          <h3>高漫1060PRO手绘板</h3>
          <span class="price"><b>13000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf2.jpg" alt="">
        </div>
        <div class="caption">
          <h3>爱奇艺半年会员</h3>
          <span class="price"><b>16000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf3.jpg" alt="">
        </div>
        <div class="caption">
          <h3>小米充电宝 20000ma</h3>
          <span class="price"><b>22000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf4.jpg" alt="">
        </div>
        <div class="caption">
          <h3>罗技无线鼠标 M545 黑色</h3>
          <span class="price"><b>22000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf5.jpg" alt="">
        </div>
        <div class="caption">
          <h3>米家LED智能台灯</h3>
          <span class="price"><b>25000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf6.jpg" alt="">
        </div>
        <div class="caption">
          <h3>三只松鼠坚果大礼包</h3>
          <span class="price"><b>33000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf7.jpg" alt="">
        </div>
        <div class="caption">
          <h3>小米行李箱 20寸</h3>
          <span class="price"><b>45000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf8.jpg" alt="">
        </div>
        <div class="caption">
          <h3>高漫1060PRO手绘板</h3>
          <span class="price"><b>46000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf9.jpg" alt="">
        </div>
        <div class="caption">
          <h3>特百惠保温杯500ml</h3>
          <span class="price"><b>60000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf10.jpg" alt="">
        </div>
        <div class="caption">
          <h3>西部数据移动硬盘 2TB</h3>
          <span class="price"><b>90000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf11.jpg" alt="">
        </div>
        <div class="caption">
          <h3>罗技背光机械键盘 红轴</h3>
          <span class="price"><b>100000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf12.jpg" alt="">
        </div>
        <div class="caption">
          <h3>FIIL VOX耳机</h3>
          <span class="price"><b>130000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf13.jpg" alt="">
        </div>
        <div class="caption">
          <h3>DW手表 女款</h3>
          <span class="price"><b>200000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf14.jpg" alt="">
        </div>
        <div class="caption">
          <h3>DW手表 男款</h3>
          <span class="price"><b>220000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf15.jpg" alt="">
        </div>
        <div class="caption">
          <h3>米家电动滑板车</h3>
          <span class="price"><b>300000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/society/jifen/jf16.jpg" alt="">
        </div>
        <div class="caption">
          <h3>DW手表 情侣款</h3>
          <span class="price"><b>420000</b> 积分</span><br><br>
          <button type="button" class="btn btn-warning">兑换</button>
        </div>
      </li>

    </ul>
  </div>
  <div class="col-md-1"></div>
</div>


<?php require 'footer.php' ?>
<script src="../js/jifen/croppie.js"></script>
</body>
</html>