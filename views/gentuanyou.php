<?php
    //跟团游
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>跟团游</title>
    <?php require 'link.php' ?>
</head>
<body>
<?php
$tab = 'mall';
$mall_tab = 'gentuanyou';
?>
<?php require 'top.php' ?>
<?php require 'mall_top.php'?>
<div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a aria-controls="all" href="#all" role="tab"
                                                    data-toggle="tab">全部</a></li>
          <li role="presentation"><a aria-controls="gentuanyou" href="#gentuanyou" role="hot" data-toggle="tab">跟团游</a></li>
          <li role="presentation"><a aria-controls="banzizhuyou" href="#banzizhuyou" role="tab" data-toggle="tab">半自助游</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="all">
            <div class="line1">出发地方：</div>
            <div class="line2">出发日期：<input type="checkbox">不限 <input type="checkbox">5月 <input type="checkbox">6月 <input type="checkbox">7月 <input type="checkbox">8月 <input type="checkbox">9月 <input type="checkbox">10月 <input type="checkbox">11月 <input type="checkbox">12月</div>
            <div class="line3">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000 <input type="checkbox">10000+</div>
            <div class="line4">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物 <input type="checkbox">含自由活动</div>
            <div class="line5">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减</div>
          </div>
          <div role="tabpanel" class="tab-pane" id="gentuanyou">
            <div class="line1">出发地方：</div>
            <div class="line2">出发日期：<input type="checkbox">不限 <input type="checkbox">5月 <input type="checkbox">6月 <input type="checkbox">7月 <input type="checkbox">8月 <input type="checkbox">9月 <input type="checkbox">10月 <input type="checkbox">11月 <input type="checkbox">12月</div>
            <div class="line3">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000 <input type="checkbox">10000+</div>
            <div class="line4">行程天数：<input type="checkbox">不限 <input type="checkbox">1天 <input type="checkbox">2天 <input type="checkbox">3天 <input type="checkbox">5天 <input type="checkbox">7天 <input type="checkbox">8天 <input type="checkbox">9天 <input type="checkbox">10天 <input type="checkbox">12天 <input type="checkbox">15天 <input type="checkbox">18天</div>
            <div class="line5">住宿类型：<input type="checkbox">不限 <input type="checkbox">青旅/客栈 <input type="checkbox">经济/连锁 <input type="checkbox">民宿 <input type="checkbox">酒店式公寓 <input type="checkbox">高档酒店 <input type="checkbox">度假村</div>
            <div class="line6">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物 <input type="checkbox">含自由活动</div>
            <div class="line7">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减</div>
          </div>
          <div role="tabpanel" class="tab-pane" id="banzizhuyou">
            <div class="line1">出发地方：</div>
            <div class="line2">出发日期：<input type="checkbox">不限 <input type="checkbox">5月 <input type="checkbox">6月 <input type="checkbox">7月 <input type="checkbox">8月 <input type="checkbox">9月 <input type="checkbox">10月 <input type="checkbox">11月 <input type="checkbox">12月</div>
            <div class="line3">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000 <input type="checkbox">10000+</div>
            <div class="line4">行程天数：<input type="checkbox">不限 <input type="checkbox">1天 <input type="checkbox">2天 <input type="checkbox">3天 <input type="checkbox">5天 <input type="checkbox">7天 <input type="checkbox">8天 <input type="checkbox">9天 <input type="checkbox">10天 <input type="checkbox">12天 <input type="checkbox">15天 <input type="checkbox">18天</div>
            <div class="line5">住宿类型：<input type="checkbox">不限 <input type="checkbox">青旅/客栈 <input type="checkbox">经济/连锁 <input type="checkbox">民宿 <input type="checkbox">酒店式公寓 <input type="checkbox">高档酒店 <input type="checkbox">度假村</div>
            <div class="line6">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物 <input type="checkbox">含自由活动</div>
            <div class="line7">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减</div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-8">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a aria-controls="all" href="#all" role="tab"
                                                        data-toggle="tab">全部</a></li>
              <li role="presentation"><a aria-controls="gentuanyou" href="#gentuanyou" role="hot" data-toggle="tab">跟团游</a></li>
              <li role="presentation"><a aria-controls="banzizhuyou" href="#banzizhuyou" role="tab" data-toggle="tab">半自助游</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="all">
                <div class="line1">出发地方：</div>
                <div class="line2">出发日期：<input type="checkbox">不限 <input type="checkbox">5月 <input type="checkbox">6月 <input type="checkbox">7月 <input type="checkbox">8月 <input type="checkbox">9月 <input type="checkbox">10月 <input type="checkbox">11月 <input type="checkbox">12月</div>
                <div class="line3">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000 <input type="checkbox">10000+</div>
                <div class="line4">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物 <input type="checkbox">含自由活动</div>
                <div class="line5">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减</div>
              </div>
              <div role="tabpanel" class="tab-pane" id="gentuanyou">
                <div class="line1">出发地方：</div>
                <div class="line2">出发日期：<input type="checkbox">不限 <input type="checkbox">5月 <input type="checkbox">6月 <input type="checkbox">7月 <input type="checkbox">8月 <input type="checkbox">9月 <input type="checkbox">10月 <input type="checkbox">11月 <input type="checkbox">12月</div>
                <div class="line3">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000 <input type="checkbox">10000+</div>
                <div class="line4">行程天数：<input type="checkbox">不限 <input type="checkbox">1天 <input type="checkbox">2天 <input type="checkbox">3天 <input type="checkbox">5天 <input type="checkbox">7天 <input type="checkbox">8天 <input type="checkbox">9天 <input type="checkbox">10天 <input type="checkbox">12天 <input type="checkbox">15天 <input type="checkbox">18天</div>
                <div class="line5">住宿类型：<input type="checkbox">不限 <input type="checkbox">青旅/客栈 <input type="checkbox">经济/连锁 <input type="checkbox">民宿 <input type="checkbox">酒店式公寓 <input type="checkbox">高档酒店 <input type="checkbox">度假村</div>
                <div class="line6">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物 <input type="checkbox">含自由活动</div>
                <div class="line7">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减</div>
              </div>
              <div role="tabpanel" class="tab-pane" id="banzizhuyou">
                <div class="line1">出发地方：</div>
                <div class="line2">出发日期：<input type="checkbox">不限 <input type="checkbox">5月 <input type="checkbox">6月 <input type="checkbox">7月 <input type="checkbox">8月 <input type="checkbox">9月 <input type="checkbox">10月 <input type="checkbox">11月 <input type="checkbox">12月</div>
                <div class="line3">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000 <input type="checkbox">10000+</div>
                <div class="line4">行程天数：<input type="checkbox">不限 <input type="checkbox">1天 <input type="checkbox">2天 <input type="checkbox">3天 <input type="checkbox">5天 <input type="checkbox">7天 <input type="checkbox">8天 <input type="checkbox">9天 <input type="checkbox">10天 <input type="checkbox">12天 <input type="checkbox">15天 <input type="checkbox">18天</div>
                <div class="line5">住宿类型：<input type="checkbox">不限 <input type="checkbox">青旅/客栈 <input type="checkbox">经济/连锁 <input type="checkbox">民宿 <input type="checkbox">酒店式公寓 <input type="checkbox">高档酒店 <input type="checkbox">度假村</div>
                <div class="line6">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物 <input type="checkbox">含自由活动</div>
                <div class="line7">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减</div>
              </div>

            </div>
          </div>
          <div class="col-md-4">本周热卖</div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
</div>
</body>
</html>
