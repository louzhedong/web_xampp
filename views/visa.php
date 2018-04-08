<?php
//签证
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>签证</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/visa.css">
</head>
<body>
<?php
$tab = 'mall';
$mall_tab = 'visa';
?>
<?php require 'top.php' ?>
<?php require 'mall_top.php' ?>
<div class="visa">
  <div class="visa-banner">
  </div>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="visa-recommend">
        <div class="visa-recommend-header">
          <h3>驴享网推荐</h3>
        </div>
        <ul class="visa-recommend-content">
          <li class="visa-recommend-item">
            <div class="image">
              <img src="../images/mall/visa/recommend/1.jpeg" alt="">
              <div class="cover">
                <div class="city">
                  <span>日本</span><br>
                  <i class="line"></i>
                  <strong>北京送签</strong>
                </div>
              </div>
            </div>
            <div class="info">
              <div class="visa_tips">
                <span class="nation">日本</span>
                <span class="price"><em>¥268</em>起</span>
              </div>
            </div>
          </li>
          <li class="visa-recommend-item">
            <div class="image">
              <img src="../images/mall/visa/recommend/2.jpeg" alt="">
              <div class="cover">
                <div class="city">
                  <span>美国</span><br>
                  <i class="line"></i>
                  <strong>上海送签</strong>
                </div>
              </div>
            </div>
            <div class="info">
              <div class="visa_tips">
                <span class="nation">美国</span>
                <span class="price"><em>¥1140</em>起</span>
              </div>
            </div>
          </li>
          <li class="visa-recommend-item">
            <div class="image">
              <img src="../images/mall/visa/recommend/3.jpeg" alt="">
              <div class="cover">
                <div class="city">
                  <span>马来西亚</span><br>
                  <i class="line"></i>
                  <strong>全国送签</strong>
                </div>
              </div>
            </div>
            <div class="info">
              <div class="visa_tips">
                <span class="nation">马来西亚</span>
                <span class="price"><em>¥163</em>起</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="hot-nation">
        <div class="hot-nation-header">
          <h3>热门国家/地区</h3>
        </div>
        <ul class="hot-nation-content">
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/japan.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">日本</p>
              <p class="price"><em>¥40</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/taiguo.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">泰国</p>
              <p class="price"><em>¥20</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/taiwan.png" alt="">
            </div>
            <div class="info">
              <p class="nation">中国台湾</p>
              <p class="price"><em>¥69</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/meiguo.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">美国</p>
              <p class="price"><em>¥999</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/aodaliya.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">澳大利亚</p>
              <p class="price"><em>¥688</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/tuerqi.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">土耳其</p>
              <p class="price"><em>¥199</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/yuenan.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">越南</p>
              <p class="price"><em>¥999</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/faguo.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">法国</p>
              <p class="price"><em>¥999</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/yidali.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">意大利</p>
              <p class="price"><em>¥999</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/eluosi.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">俄罗斯</p>
              <p class="price"><em>¥689</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/yingguo.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">英国</p>
              <p class="price"><em>¥999</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/xinjiapo.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">新加坡</p>
              <p class="price"><em>¥479</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/feilvbin.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">菲律宾</p>
              <p class="price"><em>¥999</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/xinxilan.gif" alt="">
            </div>
            <div class="info">
              <p class="nation">新西兰</p>
              <p class="price"><em>¥599</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/malaixiya.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">马来西亚</p>
              <p class="price"><em>¥999</em>起</p>
            </div>
          </li>
          <li class="hot-nation-content-item">
            <div class="image">
              <img src="../images/mall/visa/country/jianada.jpeg" alt="">
            </div>
            <div class="info">
              <p class="nation">加拿大</p>
              <p class="price"><em>¥999</em>起</p>
            </div>
          </li>

        </ul>
      </div>
      <div class="hot-sale">
        <div class="hot-sale-header">
          <h3>本周热卖</h3>
        </div>
        <ul class="hot-sale-content">
          <li class="hot-sale-content-item">
            <div class="image">
              <img src="../images/mall/visa/hot_sale/1.jpeg" alt="">
              <p class="text">日本</p>
            </div>
            <div class="info">
              <h2>[上海送签]日本单次旅游签证（TOP商家无拒签＋拒一赔二＋日本使馆指定送签社＋可免机酒行程单＋赠免税店优惠券＋1对1咨询顾问）</h2>
              <div class="price">
                <span class="money"><em>¥188</em>起</span>
              </div>
            </div>
          </li>
          <li class="hot-sale-content-item">
            <div class="image">
              <img src="../images/mall/visa/hot_sale/2.jpeg" alt="">
              <p class="text">意大利</p>
            </div>
            <div class="info">
              <h2>[北京送签]意大利旅游签证 （限时立减60+24小时送签+赠意大利多日游+陪签服务+顺丰包邮+可升级拒签全退）</h2>
              <div class="price">
                <span class="money"><em>¥729</em>起</span>
              </div>
            </div>
          </li>
          <li class="hot-sale-content-item">
            <div class="image">
              <img src="../images/mall/visa/hot_sale/3.jpeg" alt="">
              <p class="text">新西兰</p>
            </div>
            <div class="info">
              <h2>[上海送签]新西兰旅游签证（限时立减80+16年澳新签证经验+3个月/5年多次签证+高出签率+一对一VIP客服服务+可升级拒签全退+可加急+贴签包顺丰回邮+家庭套餐更优惠）</h2>
              <div class="price">
                <span class="money"><em>¥999</em>起</span>
              </div>
            </div>
          </li>
          <li class="hot-sale-content-item">
            <div class="image">
              <img src="../images/mall/visa/hot_sale/4.png" alt="">
              <p class="text">新加坡</p>
            </div>
            <div class="info">
              <h2>[北京送签]新加坡旅游签证（一价全含+高出签率+极速出签+最快2工作日+诚信经营+暖心服务)</h2>
              <div class="price">
                <span class="money"><em>¥300</em>起</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
<?php require 'footer.php'?>
</body>
</html>
