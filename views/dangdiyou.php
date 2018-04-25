<?php
//当地游
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>当地自助游</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/dangdiyou.css">
</head>
<body>
<?php
$tab = 'mall';
$mall_tab = 'dangdiyou';
?>
<?php require 'top.php' ?>
<?php require 'mall_top.php' ?>
<div class="dangdiyou">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <ul class="tag-tabs">
        <li class="tag-tabs-item nav-ticket" onclick="tomall_detail()">
          <a href="#">
            <span class="glyphicon glyphicon-home"></span>
            <div>景点门票</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-around" onclick="tomall_detail()">
          <a href="#">
            <span class="glyphicon glyphicon-pawn"></span>
            <div>一日游</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-days" onclick="tomall_detail()">
          <a href="#">
            <span class="glyphicon glyphicon-queen"></span>
            <div>多日游</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-experience" onclick="tomall_detail()">
          <a href="#">
            <span class="glyphicon glyphicon-road"></span>
            <div>当地体验</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-days" onclick="tomall_detail()">
          <a href="#">
            <span class="glyphicon glyphicon-hourglass"></span>
            <div>当地定制</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-hotel" onclick="tomall_detail()">
          <a href="#">
            <span class="glyphicon glyphicon-lamp"></span>
            <div>酒店套餐</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-show" onclick="tomall_detail()">
          <a href="#">
            <span class="glyphicon glyphicon-bishop"></span>
            <div>演出展览</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-food" onclick="tomall_detail()">
          <a href="#">
            <span class="glyphicon glyphicon-grain"></span>
            <div>美食</div>
          </a>
        </li>
      </ul>
      <div class="hot-sale">
        <div class="hot-sale-header">
          <h1>正在热卖</h1>
        </div>
        <ul class="hot-sale-content">
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/1.jpeg" alt="">
              <div class="mark-tag">
                多日游
              </div>
            </div>
            <div class="caption" onclick="togood_detail()">
              <h3>疯抢特价·三亚一地3天2晚超值游 下单即送1晚酒店（纯玩0购物+蜈支洲岛+南山+天涯海角+呀诺达+3晚连住酒店）</h3>
              <span class="sell">已售 1150</span>
              <span class="price"><b>￥800</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/2.gif" alt="">
              <div class="mark-tag">
                一日游
              </div>
            </div>
            <div class="caption" onclick="togood_detail()">
              <h3>土楼探秘 云水谣+梅林古村+客家私厨午宴一日游（12人VIP团+独家深入明清古村落）</h3>
              <span class="sell">已售 707</span>
              <span class="price"><b>￥398</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/3.jpeg" alt="">
              <div class="mark-tag">
                多日游
              </div>
            </div>
            <div class="caption" onclick="togood_detail()">
              <h3>漠河北极村北红村3天2晚大环线,经典全覆盖自由行（车辆+住宿+门票）</h3>
              <span class="sell">已售 870</span>
              <span class="price"><b>￥660</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/4.gif" alt="">
              <div class="mark-tag">
                多日游
              </div>
            </div>
            <div class="caption" onclick="togood_detail()">
              <h3>HI·亲爱的泸沽湖 环湖2日游玩体验～情人滩边摩挲花楼湖景房·独立空调不再冷（年销售过万份）</h3>
              <span class="sell">已售 2951</span>
              <span class="price"><b>￥369</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/5.jpeg" alt="">
              <div class="mark-tag">
                多日游
              </div>
            </div>
            <div class="caption" onclick="togood_detail()">
              <h3>纯净之旅~温暖冬天·这是一条极致奢华的7天6晚东北高端冰雪之旅（ 酒店奢华温泉双次不限时 4-6人免费升级包炕）</h3>
              <span class="sell">已售 297</span>
              <span class="price"><b>￥3980</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/6.jpeg" alt="">
              <div class="mark-tag">
                一日游
              </div>
            </div>
            <div class="caption" onclick="togood_detail()">
              <h3>可订长恨歌 兵马俑+华清宫+兵谏亭纯玩一日游（赠自助午餐+耳麦+接机或高铁 ）</h3>
              <span class="sell">已售 6572</span>
              <span class="price"><b>￥208</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/7.jpeg" alt="">
              <div class="mark-tag">
                景点门票
              </div>
            </div>
            <div class="caption" onclick="togood_detail()">
              <h3>即订即用 上海迪士尼乐园1日门票 破5万销量 快速换领fp fastpass （多人同行可刷一人身份证入园）</h3>
              <span class="sell">已售 10480</span>
              <span class="price"><b>￥278</b> 起</span>
            </div>
          </li>
          <li class="hot-sale-item">
            <div class="image">
              <img src="../images/mall/dangdi/hot_sale/8.jpeg" alt="">
              <div class="mark-tag">
                景点门票
              </div>
            </div>
            <div class="caption" onclick="togood_detail()">
              <h3>限时特惠.三亚天涯海角门票（随订随取）.必打卡景区</h3>
              <span class="sell">已售 49880</span>
              <span class="price"><b>￥20</b> 起</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="travel-strategy">
        <div class="travel-strategy-header">
          <h1>自由行攻略</h1>
        </div>
        <ul class="travel-strategy-content">
          <li class="travel-strategy-item">
            <div class="image">
              <img src="../images/mall/dangdi/travel_strategy/1.jpeg" alt="">
              <div class="place">香港</div>
            </div>
            <div class="detail">
              <h3>听说香港酒店很贵？乱讲...</h3>
              <p>1）免费住酒店的方法</p>
              <p>2）用积分兑换酒店的方法</p>
              <div class="view">查看详情</div>
            </div>
          </li>
          <li class="travel-strategy-item">
            <div class="image">
              <img src="../images/mall/dangdi/travel_strategy/2.jpeg" alt="">
              <div class="place">喀拉拉邦</div>
            </div>
            <div class="detail">
              <h3>印度最美丽的地方喀拉拉邦，李安的少年派也来取景</h3>
              <p>第1站 海滩之旅</p>
              <p>Kovalam Beach：最具人气海滩</p>
              <div class="view">查看详情</div>
            </div>
          </li>
          <li class="travel-strategy-item">
            <div class="image">
              <img src="../images/mall/dangdi/travel_strategy/3.jpeg" alt="">
              <div class="place">阿尔巴尼亚</div>
            </div>
            <div class="detail">
              <h3>阿尔巴尼亚4月起对中国开启旺季免签，神秘小国等你来</h3>
              <p>历史的天堂，遗迹古堡数量惊人</p>
              <p>布特林特：2000年历史的古罗马遗迹</p>
              <div class="view">查看详情</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="gallery">
  <ul class="gallery-list">
    <li>
      <img src="../images/mall/detail/shangpin4.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin2.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin3.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin1.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin6.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin7.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin8.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin9.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin10.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin11.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin12.jpeg" alt="">
    </li>
    <li>
      <img src="../images/mall/detail/shangpin13.jpeg" alt="">
    </li>
  </ul>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<script>
    function tomall_detail() {
        window.location.href = './mall_detail.php';
    }

    function togood_detail() {
        window.location.href = './good_detail.php';
    }
</script>