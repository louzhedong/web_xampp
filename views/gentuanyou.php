<?php
//跟团游
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>跟团游</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/gentuanyou.css">
</head>
<body>
<?php
$tab = 'mall';
$mall_tab = 'gentuanyou';
?>
<?php require 'top.php' ?>
<?php require 'mall_top.php' ?>
<div class="gentuanyou">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a aria-controls="all" href="#all" role="tab"
                                                  data-toggle="tab">全部</a></li>
        <li role="presentation"><a aria-controls="gentuanyou" href="#gentuanyou" role="hot" data-toggle="tab">跟团游</a>
        </li>
        <li role="presentation"><a aria-controls="banzizhuyou" href="#banzizhuyou" role="tab" data-toggle="tab">半自助游</a>
        </li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="all">
          <div class="line">出发日期：<input type="checkbox">不限 <input type="checkbox">5月 <input type="checkbox">6月 <input
              type="checkbox">7月 <input type="checkbox">8月 <input type="checkbox">9月 <input type="checkbox">10月 <input
              type="checkbox">11月 <input type="checkbox">12月
          </div>
          <div class="line">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000
            <input type="checkbox">10000+
          </div>
          <div class="line">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物
            <input type="checkbox">含自由活动
          </div>
          <div class="line">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="gentuanyou">
          <div class="line">出发日期：<input type="checkbox">不限 <input type="checkbox">5月 <input type="checkbox">6月 <input
              type="checkbox">7月 <input type="checkbox">8月 <input type="checkbox">9月 <input type="checkbox">10月 <input
              type="checkbox">11月 <input type="checkbox">12月
          </div>
          <div class="line">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000
            <input type="checkbox">10000+
          </div>
          <div class="line">行程天数：<input type="checkbox">不限 <input type="checkbox">1天 <input type="checkbox">2天 <input
              type="checkbox">3天 <input type="checkbox">5天 <input type="checkbox">7天 <input type="checkbox">8天 <input
              type="checkbox">9天 <input type="checkbox">10天 <input type="checkbox">12天 <input type="checkbox">15天 <input
              type="checkbox">18天
          </div>
          <div class="line">住宿类型：<input type="checkbox">不限 <input type="checkbox">青旅/客栈 <input type="checkbox">经济/连锁
            <input type="checkbox">民宿 <input type="checkbox">酒店式公寓 <input type="checkbox">高档酒店 <input type="checkbox">度假村
          </div>
          <div class="line">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物
            <input type="checkbox">含自由活动
          </div>
          <div class="line">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="banzizhuyou">
          <div class="line">出发日期：<input type="checkbox">不限 <input type="checkbox">5月 <input type="checkbox">6月 <input
              type="checkbox">7月 <input type="checkbox">8月 <input type="checkbox">9月 <input type="checkbox">10月 <input
              type="checkbox">11月 <input type="checkbox">12月
          </div>
          <div class="line">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000
            <input type="checkbox">10000+
          </div>
          <div class="line">行程天数：<input type="checkbox">不限 <input type="checkbox">1天 <input type="checkbox">2天 <input
              type="checkbox">3天 <input type="checkbox">5天 <input type="checkbox">7天 <input type="checkbox">8天 <input
              type="checkbox">9天 <input type="checkbox">10天 <input type="checkbox">12天 <input type="checkbox">15天 <input
              type="checkbox">18天
          </div>
          <div class="line">住宿类型：<input type="checkbox">不限 <input type="checkbox">青旅/客栈 <input type="checkbox">经济/连锁
            <input type="checkbox">民宿 <input type="checkbox">酒店式公寓 <input type="checkbox">高档酒店 <input type="checkbox">度假村
          </div>
          <div class="line">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物
            <input type="checkbox">含自由活动
          </div>
          <div class="line">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减
          </div>
        </div>
      </div>
      <div class="gentuanyou-list">
        <div class="row">
          <div class="col-md-8">
            <a class="item" href="#">
              <div class="image">
                <img src="../images/gentuanyou/shangpin1.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售114</p>
                  <h3>杭州直飞普吉岛+斯米兰岛7天5晚/6天4晚半自助游（2天自由活动+2晚网评国际五星+3晚泳池别墅+赠泰国流量卡+珊瑚区浮潜）</h3>
                  <div class="s-tag">
                    <span>赠5星精油SPA</span>
                    <span>人气餐厅</span>
                    <span>仅3站购物</span>
                  </div>
                  <p>
                    <span class="t">班期:清明五一04/02-06/25</span>
                  </p>
                </div>
                <div class="extra">
                  <div class="action">
                    <span class="btn">立即预定</span>
                    <div class="promo-tag">
                    </div>
                  </div>
                  <span class="price"><b>￥</b><strong>3280</strong>起</span>

                </div>
              </div>
            </a>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
