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
      <div id="user"><img src="../images/touxiang.jpeg"> 娜娜
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
        <div class="line">价格区间：<input type="checkbox">不限 <input type="checkbox">1000-5000 <input type="checkbox">5000-10000
          <input type="checkbox">10000+
        </div>
        <div class="line">产品特色：<input type="checkbox">不限 <input type="checkbox">全程无自费 <input type="checkbox">纯玩无购物
          <input type="checkbox">含自由活动
        </div>
        <div class="line">优惠类型：<input type="checkbox">不限 <input type="checkbox">立减活动 <input type="checkbox">第N件减
        </div>
      </div>

    </div>
    <ul class="hot-sale-content">
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/mall/dangdi/hot_sale/1.jpeg" alt="">
        </div>
        <div class="caption">
          <h3>疯抢特价·三亚一地3天2晚超值游 下单即送1晚酒店（纯玩0购物+蜈支洲岛+南山+天涯海角+呀诺达+3晚连住酒店）</h3>
          <span class="sell">已售 1150</span>
          <span class="price"><b>￥800</b> 起</span>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/mall/dangdi/hot_sale/2.gif" alt="">
        </div>
        <div class="caption">
          <h3>土楼探秘 云水谣+梅林古村+客家私厨午宴一日游（12人VIP团+独家深入明清古村落）</h3>
          <span class="sell">已售 707</span>
          <span class="price"><b>￥398</b> 起</span>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/mall/dangdi/hot_sale/3.jpeg" alt="">
        </div>
        <div class="caption">
          <h3>嗨18大促·漠河北极村北红村3天2晚大环线,经典全覆盖自由行（车辆+住宿+门票）</h3>
          <span class="sell">已售 870</span>
          <span class="price"><b>￥660</b> 起</span>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/mall/dangdi/hot_sale/4.gif" alt="">
        </div>
        <div class="caption">
          <h3>HI·亲爱的泸沽湖 环湖2日游玩体验～情人滩边摩挲花楼湖景房·独立空调不再冷（年销售过万份）</h3>
          <span class="sell">已售 2951</span>
          <span class="price"><b>￥369</b> 起</span>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/mall/dangdi/hot_sale/5.jpeg" alt="">
        </div>
        <div class="caption">
          <h3>纯净之旅~温暖冬天·这是一条极致奢华的7天6晚东北高端冰雪之旅（ 酒店奢华温泉双次不限时 4-6人免费升级包炕）</h3>
          <span class="sell">已售 297</span>
          <span class="price"><b>￥3980</b> 起</span>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/mall/dangdi/hot_sale/6.jpeg" alt="">
        </div>
        <div class="caption">
          <h3>可订长恨歌 兵马俑+华清宫+兵谏亭纯玩一日游（赠自助午餐+耳麦+接机或高铁 ）</h3>
          <span class="sell">已售 6572</span>
          <span class="price"><b>￥208</b> 起</span>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/mall/dangdi/hot_sale/7.jpeg" alt="">
        </div>
        <div class="caption">
          <h3>即订即用 上海迪士尼乐园1日门票 破5万销量 快速换领fp fastpass （多人同行可刷一人身份证入园）</h3>
          <span class="sell">已售 10480</span>
          <span class="price"><b>￥278</b> 起</span>
        </div>
      </li>
      <li class="hot-sale-item">
        <div class="image">
          <img src="../images/mall/dangdi/hot_sale/8.jpeg" alt="">
        </div>
        <div class="caption">
          <h3>限时特惠.三亚天涯海角门票（随订随取）.必打卡景区</h3>
          <span class="sell">已售 49880</span>
          <span class="price"><b>￥20</b> 起</span>
        </div>
      </li>
    </ul>

    <div class="gift-box">
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf1.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">高漫1060PRO手绘板</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            13000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span>
          </button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf2.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">爱奇艺半年会员</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            16000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf3.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">小米充电宝 20000ma</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            22000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
            <span>兑换</span>
          </button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf4.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">罗技无线鼠标 M545 黑色</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            22000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(255, 255, 255); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf5.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">米家LED智能台灯</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            25000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf6.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">三只松鼠坚果大礼包</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            33000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf7.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">小米行李箱 20寸</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            45000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf8.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">一加旅行双肩包</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            46000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf9.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">特百惠保温杯500ml</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            60000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf10.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">西部数据移动硬盘 2TB</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            90000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf11.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">罗技背光机械键盘 红轴</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            100000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf12.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">FIIL VOX耳机</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            130000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(255, 255, 255); border-bottom: 1px solid rgb(238, 238, 238);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf13.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">DW手表 女款</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            200000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(255, 255, 255);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf14.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">DW手表 男款</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            220000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(255, 255, 255);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf15.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">米家电动滑板车</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            300000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
            <span>兑换</span>
          </button>
        </div>
      </div>
      <div class="index-recent-class"
           style="padding-top: 16px; border-right: 1px solid rgb(238, 238, 238); border-bottom: 1px solid rgb(255, 255, 255);">
        <div class="gift-min-box" style="border-bottom: 1px dashed rgb(240, 240, 240);"><img
              src="../images/society/jifen/jf16.jpg" style="width: 176px; height: 176px;">
          <p class="yi-p yi-body-txt-five" style="margin: 20px 0px 8px;">DW手表 情侣款</p></div>
        <div class="gift-min-box"><p class="yi-p" style="color: rgb(255, 73, 73); font-size: 18px; margin-top: 8px;">
            420000积分</p>
          <button type="button" class="el-button el-button--primary" style="margin: 8px 0px 10px;">
              <span>
                        兑换
                    </span></button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-1"></div>
</div>


<?php require 'footer.php' ?>
<script src="../js/jifen/croppie.js"></script>
</body>
</html>