<?php
// 景点汇详情页
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>目的地详情页</title>
  <link rel="stylesheet" href="../css/scenicdetail_scenic.css">
  <?php require 'link.php' ?>
</head>
<body>
<?php
$tab = 'scenic';
$scenicdetail_tab = 'hot_scenic';
?>
<?php require 'top.php' ?>
<?php require 'scenicdetail_top.php' ?>
<div>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7">
      <div class="scenic_left">
        <div class="activity-header">
          泰国热门观光地
        </div>
        <div class="tab-pane">
          <div class="line">旅行地：<input type="checkbox">不限 <input type="checkbox">景点 <input type="checkbox">美食 <input
                type="checkbox">购物 <input type="checkbox">活动
          </div>
          <div class="line"> 主 &nbsp&nbsp题：<input type="checkbox">不限 <input type="checkbox">人文 <input type="checkbox">休闲娱乐 <input
                type="checkbox">沙滩海岛 <input type="checkbox">户外 <input type="checkbox">自然风光
            <input type="checkbox">美食 <input type="checkbox">购物
          </div>
        </div>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/mall/detail/shangpin1.jpeg" height="150" width="200">
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
    </div>
    <div class="col-md-3">
      <div class="scenic_right">
        <div class="activity-header">
          泰国地图
        </div>
        <div class="activity-item">
          <img src="../images/scenic/scenicdetail_scenic/map.jpeg" alt="">
        </div>
        <div class="strategy-header">
          相关攻略<a style="color: #666;font-size: 13px;margin: 100px 0 0 100px;;"><span
                class="glyphicon glyphicon-triangle-left" aria-hidden="true">1/15本</span><span
                class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></a>
        </div>
        <ul class="relate-strategy">
          <li><img src="../images/scenic/scenicdetail_gailan/Thailand.png">
            <p class="relate-strategy-title">泰国</p>
            <p class="relate-strategy-count">下载次数：273123</p>
            <button type="button" class="btn btn-warning" style="margin-left:40px;width: 150px"> 免费下载</button>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>


景点汇详情页
</div>
</body>
</html>
