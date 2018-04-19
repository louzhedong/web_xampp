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
            <img src="../images/scenic/scenicdetail_gailan/hot1.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>曼谷 <span style="color: #636363">Bangkok</span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>18237人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 曼谷大皇宫 、 玉佛寺 、 考山路 、 曼谷卧佛寺 、 伊拉旺神祠四面佛 、 郑王庙 、 曼谷唐人街 、 暹罗广场 、 胜利纪念碑 、 泰国素万那普机场 、 湄南河 、 曼谷出租车 ...</span>
              </p>
            </div>

          </div>
        </a>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/scenic/scenicdetail_gailan/hot2.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>清迈 <span style="color: #636363">Chiang Mai</span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>32647人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                  清迈古城 、 塔佩门 、 柴迪龙寺 、 帕辛寺 、 素贴山双龙寺 、 塔佩路 、 泰国清迈宁曼路 、 清迈周日市集 、 素贴山 、 周六夜市 、 清迈长康夜市 、 三王纪念碑 、 清曼寺  ...</span>
              </p>
            </div>

          </div>
        </a>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/scenic/scenicdetail_gailan/hot3.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>普吉岛 <span style="color: #636363">  Phuket Island</span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>72946人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 芭东海滩 、 芭东酒吧街 、 皇帝岛 、 普吉镇 、 卡塔海滩 、 攀牙湾 、 卡伦海滩 、 芭东夜市 、 普吉国际机场 、 珊瑚岛 、 江西冷购物中心 、 皮皮岛 、 神仙半岛 、 普吉西蒙人妖秀...
              </p>
            </div>

          </div>
        </a>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/scenic/scenicdetail_gailan/hot4.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>
                芭提雅  <span style="color: #636363"> Pattaya</span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>87923人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 芭堤雅海滩 、 芭堤雅步行街 、 东芭乐园 、 格兰岛 、 蒂芬妮人妖秀 、 四部水上市场 、 芭堤雅大象村 、 降落伞滑翔运动 、 是拉差龙虎园龙虎园 、 芭堤雅双条车 、 泰北文化村 ...
              </p>
            </div>

          </div>
        </a>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/scenic/scenicdetail_gailan/hot5.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>
                皮皮岛  <span style="color: #636363">Ko Phi-Phi</span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>9643人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 通赛湾 、 玛雅湾 、 维京洞穴 、 蚊子岛 、 竹子岛 、 猴子海滩 、 情人沙滩 、 皮皮岛一日游 、 罗达拉木湾 、 通赛湾码头 、 皮皮岛观景点 、 兰迪沙滩 、 谢谢餐厅 、 长滩 ...
              </p>
            </div>

          </div>
        </a>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/scenic/scenicdetail_gailan/travel1.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>拜县  <span style="color: #636363"> Pai</span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>87423人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 查汶海滩 、 拉迈海滩 、 波菩海滩 、 纳通镇 、 祖父祖母石 、 大佛寺和金色大佛 、 安通国家海洋公园 、 苏梅国际机场 、 曾蒙海滩 、 查武恩海滩 、 查汶步行街夜市...
              </p>
            </div>

          </div>
        </a>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/scenic/scenicdetail_gailan/hot6.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>
                苏梅岛 <span style="color: #636363"> Ko Samui </span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>76234人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 曼谷大皇宫 、 玉佛寺 、 考山路 、 曼谷卧佛寺 、 伊拉旺神祠四面佛 、 郑王庙 、 曼谷唐人街 、 暹罗广场 、 胜利纪念碑 、 泰国素万那普机场 、 湄南河 、 曼谷出租车 ...</span>
              </p>
            </div>

          </div>
        </a>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/scenic/scenicdetail_gailan/travel2.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>
                甲米 <span style="color: #636363"> Krabi</span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>26112人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>奥南 、 莱利 、 兰塔岛 、 甲米镇(Krabi Town) 、 虹岛 、 甲米双峰溶洞 、 翡翠湖 、 一线沙 、 鸡岛 、 虎窟寺 、 甲米周末夜市 、 喀比国际机场（甲米机场） 、 温泉瀑布 ...
              </p>
            </div>

          </div>
        </a>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/scenic/scenicdetail_gailan/travel3.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>
                清莱<span style="color: #636363">  Chiang rai</span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>8995人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 黑庙 、 金三角 、 长颈族村 、 清莱温泉广场 、 清莱夜市 、 清莱玉佛寺 、 美斯乐 、 皇太后行宫 、 清莱帕辛寺 、 辛哈公园&辛哈农场 、 荣誉钟塔 、 清盛古城 、 清莱界瑶寺...
              </p>
            </div>

          </div>
        </a>
        <a class="item" href="#">
          <div class="image">
            <img src="../images/scenic/scenicdetail_gailan/travel4.jpeg" height="150" width="200">
          </div>
          <div class="detail">
            <div class="info">
              <h3>
                大城 <span style="color: #636363"> Ayutthaya</span></h3>
              <div class="extra">
                <div class="action">
                  <span class="btn"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
                  <div class="promo-tag">
                  </div>
                </div>
              </div>
              <p>8644人去过</p>
              <p>
                <span class="t"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 大城 玛哈泰寺 、 大城卧佛寺 、 普斯里善佩寺 、 柴瓦塔娜兰寺 、 拉差布拉那寺 、 大城王宫遗址 、 大城历史公园 、 孟扣波琵寺 、 菩兰寺 、 亚柴蒙考寺 、 素旺达瓦寺...
              </p>
            </div>

          </div>
        </a>
        <nav aria-label="Page navigation" style="float:right; margin-top: 10px">
          <ul class="pagination" id="turn_page">
            <li><a href="#aaa">«</a></li>
            <li class="active"><a href="#aaa">1</a></li>
            <li><a href="#aaa">2</a></li>
            <li><a href="#aaa">3</a></li>
            <li><a href="#aaa">4</a></li>
            <li><a href="#aaa">5</a></li>
            <li><a href="#" >»</a></li>
          </ul>
        </nav>
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

</div>
</body>
</html>
