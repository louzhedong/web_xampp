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
      <div class="dangdiyou-box">
        <div class="row">
          <div class="col-md-4">
            <div class="dangdiyou-nav">
              <div class="dangdiyou-nav-item">
                <span class="left">当季推荐</span>
                <span class="glyphicon glyphicon-chevron-right right"></span>
                <div class="nav-panel">
                  <div class="nav-panel-item">
                    <span class="index">1</span>
                    <span class="name">九寨沟</span>
                    <span class="describe">人间瑶池，色彩迷离</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">2</span>
                    <span class="name">桂林</span>
                    <span class="describe">乘坐竹筏摇曳在山水之中</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">3</span>
                    <span class="name">青岛</span>
                    <span class="describe">红瓦绿树，千帆飞扬</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">4</span>
                    <span class="name">呼伦贝尔</span>
                    <span class="describe">俄式风情草原梦</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">5</span>
                    <span class="name">昆明</span>
                    <span class="describe">万花争艳，醉乡春城</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">6</span>
                    <span class="name">巴厘岛</span>
                    <span class="describe">婚礼圣地，浪漫岛屿</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">7</span>
                    <span class="name">斯里兰卡</span>
                    <span class="describe">佛教普度，锡兰茶都</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">8</span>
                    <span class="name">希腊</span>
                    <span class="describe">蓝白世界，梦幻殿堂</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">9</span>
                    <span class="name">西双版纳</span>
                    <span class="describe">感受热带雨林的侵袭</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">10</span>
                    <span class="name">杭州</span>
                    <span class="describe">来西子湖畔吟诗作曲</span>
                  </div>
                </div>
              </div>
              <div class="dangdiyou-nav-item">
                <span class="left">主题分类排行</span>
                <span class="glyphicon glyphicon-chevron-right right"></span>
                <div class="nav-panel">
                  <div class="nav-panel-item">
                    <span class="index">1</span>
                    <span class="name">马尔代夫</span>
                    <span class="describe">---潜水</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">2</span>
                    <span class="name">珠穆朗玛峰</span>
                    <span class="describe">---登山</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">3</span>
                    <span class="name">丽江</span>
                    <span class="describe">---古镇</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">4</span>
                    <span class="name">香格里拉</span>
                    <span class="describe">---感受大草原</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">5</span>
                    <span class="name">三亚</span>
                    <span class="describe">---海滩漫步</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">6</span>
                    <span class="name">洱海</span>
                    <span class="describe">---拍照聚集地</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">7</span>
                    <span class="name">成都</span>
                    <span class="describe">---赏花</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">8</span>
                    <span class="name">西双版纳</span>
                    <span class="describe">---民族风</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">9</span>
                    <span class="name">纽约</span>
                    <span class="describe">---大都市</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">10</span>
                    <span class="name">张家界</span>
                    <span class="describe">---玻璃栈桥</span>
                  </div>
                </div>
              </div>
              <div class="dangdiyou-nav-item">
                <span class="left">国内攻略</span>
                <span class="glyphicon glyphicon-chevron-right right"></span>
                <div class="nav-panel">
                  <div class="nav-panel-item">
                    <span class="index">1</span>
                    <span class="name">香港</span>
                    <span class="describe">香港迪士尼，尖沙咀</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">2</span>
                    <span class="name">三亚</span>
                    <span class="describe">天涯海角，三亚千古情景区</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">3</span>
                    <span class="name">深圳</span>
                    <span class="describe">世界之窗，欢乐谷</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">4</span>
                    <span class="name">青岛</span>
                    <span class="describe">黄岛金沙滩，栈桥</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">5</span>
                    <span class="name">张家界</span>
                    <span class="describe">天子山，黄石寨</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">6</span>
                    <span class="name">黄山</span>
                    <span class="describe">西海大峡谷，九龙瀑</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">7</span>
                    <span class="name">普吉岛</span>
                    <span class="describe">芭东海滩，邦古拉街</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">8</span>
                    <span class="name">大连</span>
                    <span class="describe">圣亚海洋世界，黄金海岸</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">9</span>
                    <span class="name">杭州</span>
                    <span class="describe">灵隐寺，清河坊街</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">10</span>
                    <span class="name">普陀山</span>
                    <span class="describe">百步沙，短姑圣迹</span>
                  </div>
                </div>
              </div>
              <div class="dangdiyou-nav-item">
                <span class="left">国外攻略</span>
                <span class="glyphicon glyphicon-chevron-right right"></span>
                <div class="nav-panel">
                  <div class="nav-panel-item">
                    <span class="index">1</span>
                    <span class="name">洛杉矶</span>
                    <span class="describe">好莱坞环球影城，威尼斯海滩</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">2</span>
                    <span class="name">迪拜</span>
                    <span class="describe">哈利法塔（迪拜塔），al-Qasba坎儿井</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">3</span>
                    <span class="name">东京</span>
                    <span class="describe">东京迪士尼乐园，银座</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">4</span>
                    <span class="name">悉尼</span>
                    <span class="describe">悉尼歌剧院，卧龙岗</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">5</span>
                    <span class="name">芭提雅</span>
                    <span class="describe">四方水上市场，中天海滩</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">6</span>
                    <span class="name">黄金海岸</span>
                    <span class="describe">冲浪者天堂，星空塔观景台</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">7</span>
                    <span class="name">巴黎</span>
                    <span class="describe">巴黎圣母院，凯旋门，卢浮宫</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">8</span>
                    <span class="name">开普敦</span>
                    <span class="describe">好望角，十二门徒峰</span>
                    <div class="nav-panel-item">
                      <span class="index">9</span>
                      <span class="name">新加坡</span>
                      <span class="describe">圣淘沙名胜世界，东海岸公园</span>
                    </div>
                    <div class="nav-panel-item">
                      <span class="index">10</span>
                      <span class="name">夏威夷</span>
                      <span class="describe">恐龙湾，钻石头山</span>
                    </div>
                  </div>
                </div>

              </div>
              <div class="dangdiyou-nav-item">
                <span class="left">海岛游/度蜜月推荐</span>
                <span class="glyphicon glyphicon-chevron-right right"></span>
                <div class="nav-panel">
                  <div class="nav-panel-item">
                    <span class="index">1</span>
                    <span class="name">圣托里尼</span>
                    <span class="describe">来爱琴海天长地久</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">2</span>
                    <span class="name">巴厘岛</span>
                    <span class="describe">巴厘岛免签啦</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">3</span>
                    <span class="name">毛里求斯</span>
                    <span class="describe">印度洋上的海上明珠</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">4</span>
                    <span class="name">塞班岛</span>
                    <span class="describe">错"季"出行，也有惊喜</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">5</span>
                    <span class="name">长滩岛</span>
                    <span class="describe">潜水与蜜月的天堂</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">6</span>
                    <span class="name">圣托里尼</span>
                    <span class="describe">蓝白之城映衬着海风吹拂</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">7</span>
                    <span class="name">沙美岛</span>
                    <span class="describe">如果你厌倦了芭提雅</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">8</span>
                    <span class="name">杜马盖地</span>
                    <span class="describe">找小丑鱼做客去</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">9</span>
                    <span class="name">兰卡威</span>
                    <span class="describe">海钓，潜水，看蓝天</span>
                  </div>
                  <div class="nav-panel-item">
                    <span class="index">10</span>
                    <span class="name">沙巴</span>
                    <span class="describe">这里有世界上最美的落日</span>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="carousel">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="../images/strategy/carousel/1.jpeg" alt="...">
                  </div>
                  <div class="item">
                    <img src="../images/strategy/carousel/2.jpeg" alt="...">
                  </div>
                  <div class="item">
                    <img src="../images/strategy/carousel/3.jpeg" alt="...">
                  </div>
                  <div class="item">
                    <img src="../images/strategy/carousel/4.jpeg" alt="...">
                  </div>
                  <div class="item">
                    <img src="../images/strategy/carousel/5.jpeg" alt="...">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <ul class="tag-tabs">
        <li class="tag-tabs-item nav-ticket">
          <a href="#">
            <span class="glyphicon glyphicon-home"></span>
            <div>景点门票</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-around">
          <a href="#">
            <span class="glyphicon glyphicon-home"></span>
            <div>一日游</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-days">
          <a href="#">
            <span class="glyphicon glyphicon-home"></span>
            <div>多日游</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-experience">
          <a href="#">
            <span class="glyphicon glyphicon-home"></span>
            <div>当地体验</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-days">
          <a href="#">
            <span class="glyphicon glyphicon-home"></span>
            <div>当地定制</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-hotel">
          <a href="#">
            <span class="glyphicon glyphicon-home"></span>
            <div>酒店套餐</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-show">
          <a href="#">
            <span class="glyphicon glyphicon-home"></span>
            <div>演出展览</div>
          </a>
        </li>
        <li class="tag-tabs-item nav-food">
          <a href="#">
            <span class="glyphicon glyphicon-home"></span>
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
            <div class="caption">
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
            <div class="caption">
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
            <div class="caption">
              <h3>嗨18大促·漠河北极村北红村3天2晚大环线,经典全覆盖自由行（车辆+住宿+门票）</h3>
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
            <div class="caption">
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
            <div class="caption">
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
            <div class="caption">
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
            <div class="caption">
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
            <div class="caption">
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
