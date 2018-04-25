<?php
//跟团游
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>跟团游</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/mall_detail.css">
</head>
<body>
<?php
$tab = 'mall';
$mall_tab = 'mall_detail'
?>
<?php require 'top.php' ?>
<?php require 'mall_top.php' ?>
<div class="mall_detail">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a aria-controls="all" href="#all" role="tab" data-toggle="tab">全部</a></li>
        <li role="presentation"><a aria-controls="mall_detail" href="#mall_detail" role="hot" data-toggle="tab">跟团游</a></li>
        <li role="presentation" class="active"><a aria-controls="banzizhuyou" href="#banzizhuyou" role="tab" data-toggle="tab">半自助游</a></li>
        <li role="presentation"><a aria-controls="ziyouxing" href="#banzizhuyou" role="tab" data-toggle="tab">自由行</a></li>
        <li role="presentation"><a aria-controls="qianzheng" href="#banzizhuyou" role="tab" data-toggle="tab">签证</a></li>
        <li role="presentation"><a aria-controls="youlun" href="#banzizhuyou" role="tab" data-toggle="tab">邮轮</a></li>
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
        <div role="tabpanel" class="tab-pane" id="mall_detail">
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
      <div class="mall_detail-list">
        <div class="row">
          <div class="col-md-8">
            <a class="item" onclick="togood_detail()">
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
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin2.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售74</p>
                  <h3>【免费全国联运】上海直飞俄罗斯莫斯科+圣彼得堡9天7晚跟团游（赠俄餐/回程高铁/东航白班直飞/夏宫花园/冬宫入内/谢尔盖耶夫小镇）</h3>
                  <div class="s-tag">
                    <span>全国联运</span>
                    <span>增签证</span>
                    <span>24小时管家服务</span>
                  </div>
                  <p>
                    <span class="t">班期:五一六一04/28-06/20</span>
                  </p>
                </div>
                <div class="extra">
                  <div class="action">
                    <span class="btn">立即预定</span>
                    <div class="promo-tag">
                    </div>
                  </div>
                  <span class="price"><b>￥</b><strong>5699</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item" onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin3.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售100</p>
                  <h3>【一价全包】杭州直飞丽江+大理+玉龙雪山6天5晚半自助游（纯玩无自费+海边客栈+赠送丽水金沙+洱海骑行+1天自由行）</h3>
                  <div class="s-tag">
                    <span>纯玩无购物</span>
                    <span>高档酒店</span>
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
                  <span class="price"><b>￥</b><strong>2899</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item" onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin4.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售54</p>
                  <h3>【樱花季热卖】杭州直飞日本东京+大阪+京都6天5晚半自助游（东京1天自由活动+温泉享受+镰仓高校前站+富士山五合目+伏见稻荷大社+赠送旅游意外险+美食品尝）</h3>
                  <div class="s-tag">
                    <span>全程无自费</span>
                    <span>立减活动</span>
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
                  <span class="price"><b>￥</b><strong>5499</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin5.gif" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售30</p>
                  <h3>杭州直飞日本大阪+东京+京都6天5晚/7天6晚半自助游（2晚温泉酒店+东京1天自由活动+和服变身+茶道体验+日本料理）</h3>
                  <div class="s-tag">
                    <span>含签证</span>
                    <span>和服体验</span>
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
                  <span class="price"><b>￥</b><strong>5399</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin6.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售114</p>
                  <h3>杭州直飞美国塞班岛5天4晚半自助游（下单立减+赠北部环岛+嗨玩军舰岛+接送机+酒店自助早+一顿正餐+含导游小费+含1550税金）</h3>
                  <div class="s-tag">
                    <span>醉美七色海洋</span>
                    <span>浮潜圣地蓝洞</span>
                    <span>纯玩无购物</span>
                    <span>早订福利放送</span>
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
                  <span class="price"><b>￥</b><strong>3999</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin7.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售114</p>
                  <h3>【全国联运】昆明直飞尼泊尔7晚8天纯净心灵与蓝毗尼之旅（全国各地出发+纯玩无购物+免费接送机和住宿+6大世界遗产+骑大象穿越丛林+塔奴族歌舞表演+特色餐+360°观喜马拉雅雪峰+2人即可成团）</h3>
                  <div class="s-tag">
                    <span>纯玩无购物</span>
                    <span>骑大象穿越丛林</span>
                    <span>塔奴族歌舞表演</span>
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
                  <span class="price"><b>￥</b><strong>4488</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin8.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售78</p>
                  <h3>【全国联运】上海双高北京 故宫+恭王府+颐和园+八达岭+升旗仪式+天坛+圆明园 5天4晚京艳皇城轻松游(纯玩0购物0强销+全聚德/春饼宴/庆丰包子+连锁住宿+赠送贴心接送服务/天安门集体照+家庭出游首选！爆款！)</h3>
                  <div class="s-tag">
                    <span>全程无自费</span>
                    <span>纯玩无购物</span>
                    <span>全程连锁住宿</span>
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
                  <span class="price"><b>￥</b><strong>1906</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin9.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售94</p>
                  <h3>杭州出发直飞丽江 大理+丽江6天纯玩半自助游（准五酒店 玉龙雪山泡半山温泉 餐标35元/餐 BBQ自助烧烤/赠洱海大游船赠丽水金沙表演）</h3>
                  <div class="s-tag">
                    <span>包含接送机</span>
                    <span>纯玩+自由行</span>
                    <span>篝火晚会</span>
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
                  <span class="price"><b>￥</b><strong>2780</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin10.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售61</p>
                  <h3>杭州往返-曼谷+芭提雅+沙美岛6天5晚半自助（2晚国际五星+3晚泳池四星+1天自由活动+王权免税店+摩天轮夜市+骑大象）</h3>
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
                  <span class="price"><b>￥</b><strong>4599</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin11.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售114</p>
                  <h3>杭州往返-曼谷+芭提雅+普吉岛9天8晚半自助（升级2晚国际五星+2天出海+2天自由行+暹罗梦幻剧场+王权免税店）</h3>
                  <div class="s-tag">
                    <span>送上网卡</span>
                    <span>全程无自费</span>
                    <span>纯玩无购物</span>
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
                  <span class="price"><b>￥</b><strong>7880</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin12.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售163</p>
                  <h3>杭州直飞马来西亚沙巴5天4晚半自助游（舒适纯玩版+马努干双岛出海+可多次浮潜+野生长鼻猴+萤火虫）</h3>
                  <div class="s-tag">
                    <span>纯玩无购物</span>
                    <span>蜜月闺蜜亲子游</span>
                    <span>自由自在半自助</span>
                    <span>绝佳旅游度假胜地</span>
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
                  <span class="price"><b>￥</b><strong>4280</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin13.jpeg" height="150" width="200">
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
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin14.jpeg" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售89</p>
                  <h3>【深度游】杭州直飞普吉+斯米兰7天/6天游（世界级的水上天堂-斯米兰群岛+浮潜+含1/2天自由活动+2晚网评国际豪华酒店/带私人沙滩+3/4晚当地海边泰式豪华酒店）</h3>
                  <div class="s-tag">
                    <span>含1天自由活动</span>
                    <span>酒店奢华享受</span>
                    <span>世界级的水上天堂</span>
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
                  <span class="price"><b>￥</b><strong>3799</strong>起</span>

                </div>
              </div>
            </a>
            <a class="item"  onclick="togood_detail()">
              <div class="image">
                <img src="../images/mall/detail/shangpin15.gif" height="150" width="200">
                <span class="mark-type type-10">
                  <strong>杭州出发</strong>
                  <span>半自助游</span>
                </span>
              </div>
              <div class="detail">
                <div class="info">
                  <p>已售66</p>
                  <h3>【深度游】杭州直飞昆明+大理+丽江+香格里拉8日游（真纯玩+温泉SPA+赠骑马划船+送丽水金沙+享藏族土司宴+住海边客栈+乘洱海大游船+雪山索道多种套餐任选）</h3>
                  <div class="s-tag">
                    <span>纯玩无购物</span>
                    <span>全程无自费</span>
                    <span>24小时接送机</span>
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
                  <span class="price"><b>￥</b><strong>2788</strong>起</span>

                </div>
              </div>
            </a>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <div class="activity-header">
              最新活动
            </div>
            <div class="activity-item">
              <img src="../images/index/poster1.jpg" alt="">
              <img src="../images/index/poster2.png" alt="">
              <img src="../images/index/poster3.png" alt="">
              <div class="activity-describe">
                <div class="activity-describe-body">
                  <marquee direction=up behavior=scroll loop=13 scrollamount=1 scrolldelay=10 align=middle height=150 width=80% hspace=20 vspace=10 onmouseover=this.stop() onmouseout=this.start()>
                    【五一小长假即将来袭！】
                    <br><br>
                    如果还没定好去哪里玩，就让我们来帮你！<br>
                    可别错过了一年中最惬意的时光！<br>
                    <br><br>
                    【跟父母一起去远方】
                    <br><br>
                    每个成长的瞬间，都有他们的陪伴，<br>
                    曾经他们把世界带给我们，如今我们将世界呈现给他们。<br>
                    日本的古朴、清迈的悠闲、纽约的繁华…<br>
                    现在，是你带领他们看世界的时候了！<br>
                    <br><br>
                    【签证1元起，你还在等什么？】
                    <br><br>
                    时近暑期，还伴随着清明五一端午节的假日，<br>
                    闲不下来的你，是否被想出国耍的思绪搞的心痒痒？<br>
                    那不如，我们帮你搞定签证！</marquee>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<script>
    function togood_detail() {
        window.location.href = './good_detail.php';
    }
</script>