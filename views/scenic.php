<?php
// 景点汇
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>景点汇</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/scenic.css">
</head>
<body>
<?php
$tab = 'scenic'
?>
<?php require 'top.php' ?>
<div class="scenic-header">
  <img src="../images/scenic/top.png">
</div>
<!-- 热门城市推荐 -->
<div class="city-recommend">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="hot-city">
        <div class="title">
          热门城市推荐
        </div>
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a aria-controls="hot" href="#hot" role="tab"
                                                    data-toggle="tab">热门推荐</a></li>
          <li role="presentation"><a aria-controls="japan" href="#japan" role="hot" data-toggle="tab">日韩 港澳台</a></li>
          <li role="presentation"><a aria-controls="asia" href="#asia" role="tab" data-toggle="tab">东南亚及亚洲其他</a></li>
          <li role="presentation"><a aria-controls="europe" href="#europe" role="tab" data-toggle="tab">欧洲</a></li>
          <li role="presentation"><a aria-controls="america" href="#america" role="tab" data-toggle="tab">大洋洲 北美</a>
          </li>
          <li role="presentation"><a aria-controls="africa" href="#africa" role="tab" data-toggle="tab">非洲 南美</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="hot">
            <div class="row">
              <div class="col-md-4">
                <div class="city-header">
                  全球Top 10 城市
                </div>
                <ul class="city-content">
                  <li class="city-name">东京</li>
                  <li class="city-name">曼谷</li>
                  <li class="city-name">香港</li>
                  <li class="city-name">台北</li>
                  <li class="city-name">新加坡</li>
                  <li class="city-name">巴黎</li>
                  <li class="city-name">罗马</li>
                  <li class="city-name">伦敦</li>
                  <li class="city-name">首尔</li>
                  <li class="city-name">洛杉矶</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  免签及落地签最热旅行地
                </div>
                <ul class="city-content">

                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  热门海岛
                </div>
                <ul class="city-content">

                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="japan">japan</div>
          <div role="tabpanel" class="tab-pane" id="asia">asia</div>
          <div role="tabpanel" class="tab-pane" id="europe">europe</div>
          <div role="tabpanel" class="tab-pane" id="america">america</div>
          <div role="tabpanel" class="tab-pane" id="africa">africa</div>
        </div>
      </div>
      <div class="theme">
        <div class="title">
          主题精选
        </div>
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a aria-controls="theme1" href="#theme1" role="tab"
                                                    data-toggle="tab">俯瞰城市</a></li>
          <li role="presentation"><a aria-controls="theme2" href="#theme2" role="hot" data-toggle="tab">怀旧时光</a></li>
          <li role="presentation"><a aria-controls="theme3" href="#theme3" role="tab" data-toggle="tab">魅力夜色</a></li>
          <li role="presentation"><a aria-controls="theme4" href="#theme4" role="tab" data-toggle="tab">神秘遗址</a></li>
          <li role="presentation"><a aria-controls="theme5" href="#theme5" role="tab" data-toggle="tab">跳蚤市场</a>
          </li>
          <li role="presentation"><a aria-controls="theme6" href="#theme6" role="tab" data-toggle="tab">最爱小镇</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="theme1">
           <div class="row">
             <div class="col-md-3">
               <div class="on-pic">
                 <img src="../images/scenic/middle/1-1.jpeg" alt="">
                 <div class="describe">
                   <div class="describe-header">
                     洛克菲勒观景台
                   </div>
                   <div class="describe-body">
                     这里是欣赏曼哈顿天际线的绝佳位置，观景台一共有三层，不仅可以将帝国大厦、新世贸中心大楼等摩天大楼尽收眼底，向北可鸟瞰中央公园，甚至可以看到自由女神像的绰约风姿
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-md-3 vertical">
               <div class="image">
                 <img src="../images/scenic/middle/1-2.jpeg" alt="">
                 <div class="describe">
                   <div class="describe-header">
                     碎片大厦
                   </div>
                   <div class="describe-body">
                     天气晴朗的日子里，在碎片大厦观景台可以将伦敦市景一收眼底，伦敦眼、大本钟、泰晤士河……只描摹出城市轮廓的夕阳景色更是出众。
                   </div>
                 </div>
               </div>
               <div class="image">
                 <img src="../images/scenic/middle/1-3.jpeg" alt="">
                 <div class="describe">
                   <div class="describe-header">
                     米开朗琪罗广场
                   </div>
                   <div class="describe-body">
                     米开朗基罗广场位于佛罗伦萨市区南端的高地上，广场雄据半山腰，坐视整个佛罗伦萨城及远处起伏不断的丘陵，气势非凡，风光无限。
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-md-3 vertical">
               <div class="image">
                 <img src="../images/scenic/middle/1-4.png" alt="">
                 <div class="describe">
                   <div class="describe-header">
                     太平山
                   </div>
                   <div class="describe-body">
                     太平山是香港岛最高山峰，也是俯瞰香港的必到处，太平山顶可饱览维多利亚港全貌和薄扶林水塘的自然美景。
                   </div>
                 </div>
               </div>
               <div class="image">
                 <img src="../images/scenic/middle/1-5.jpeg" alt="">
                 <div class="describe">
                   <div class="describe-header">
                     象山
                   </div>
                   <div class="describe-body">
                     山不高，但前无屏障，台北盆地一览无遗，不仅是登高眺望的好据点，也是拍摄101高楼的绝佳地点。
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-md-3 vertical">
               <div class="image">
                 <img src="../images/scenic/middle/1-6.png" alt="">
                 <div class="describe">
                   <div class="describe-header">
                     六本木新城
                   </div>
                   <div class="describe-body">
                     六本木Hills建成于2003年，54层楼的玻璃大厦内有200多家店铺，餐饮、购物、娱乐一应俱全，很多日本人将它当做六本木的代名词。
                   </div>
                 </div>
               </div>
               <div class="image">
                 <img src="../images/scenic/middle/1-7.jpeg" alt="">
                 <div class="describe">
                   <div class="describe-header">
                     蒙帕纳斯大楼
                   </div>
                   <div class="describe-body">
                     蒙帕纳斯大楼(又称蒙巴纳斯高楼)建于1972年，共59层，高209米，是巴黎市区除埃菲尔铁塔外最高的建筑，也是市区唯一的一座摩天大楼。
                   </div>
                 </div>
               </div>
             </div>
           </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="theme2">japan</div>
          <div role="tabpanel" class="tab-pane" id="theme3">asia</div>
          <div role="tabpanel" class="tab-pane" id="theme4">europe</div>
          <div role="tabpanel" class="tab-pane" id="theme5">america</div>
          <div role="tabpanel" class="tab-pane" id="theme6">africa</div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
</body>
</html>
