<?php
// 景点汇
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>目的地</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/scenic.css">
</head>
<body>
<?php
$tab = 'scenic'
?>
<?php require 'top.php' ?>
<div class="scenic-header">
  <img src="../images/scenic/top.jpg">
  <div class="search-box">
    <div class="hello-world"><span style="color: #fff">世界那么大，</span> <span style="color: #ff9d00">我想去看看！</span>
    </div>
    <div class="search-input">
      <div class="left">
        <input type="text" placeholder="搜索目的地">
      </div>
      <div class="right">
        <a href="javascript:void(0)" class="search-btn">
          <span class="glyphicon glyphicon-search"></span>
          搜索
        </a>
      </div>
    </div>
  </div>
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
                  <li class="city-name" onclick="toScenicDetail()">东京</li>
                  <li class="city-name" onclick="toScenicDetail()">曼谷</li>
                  <li class="city-name" onclick="toScenicDetail()">香港</li>
                  <li class="city-name" onclick="toScenicDetail()">台北</li>
                  <li class="city-name" onclick="toScenicDetail()">新加坡</li>
                  <li class="city-name" onclick="toScenicDetail()">巴黎</li>
                  <li class="city-name" onclick="toScenicDetail()">罗马</li>
                  <li class="city-name" onclick="toScenicDetail()">伦敦</li>
                  <li class="city-name" onclick="toScenicDetail()">首尔</li>
                  <li class="city-name" onclick="toScenicDetail()">洛杉矶</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  免签及落地签最热旅行地
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">济州岛</li>
                  <li class="city-name" onclick="toScenicDetail()">印度尼西亚</li>
                  <li class="city-name" onclick="toScenicDetail()">泰国</li>
                  <li class="city-name" onclick="toScenicDetail()">塞班岛</li>
                  <li class="city-name" onclick="toScenicDetail()">摩洛哥</li>
                  <li class="city-name" onclick="toScenicDetail()">卡塔尔</li>
                  <li class="city-name" onclick="toScenicDetail()">毛里求斯</li>
                  <li class="city-name" onclick="toScenicDetail()">柬埔寨</li>
                  <li class="city-name" onclick="toScenicDetail()">厄瓜多尔</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  热门海岛
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">塞班岛</li>
                  <li class="city-name" onclick="toScenicDetail()">长滩岛</li>
                  <li class="city-name" onclick="toScenicDetail()">马尔代夫</li>
                  <li class="city-name" onclick="toScenicDetail()">沙巴</li>
                  <li class="city-name" onclick="toScenicDetail()">普吉岛</li>
                  <li class="city-name" onclick="toScenicDetail()">巴厘岛</li>
                  <li class="city-name" onclick="toScenicDetail()">芽庄</li>
                  <li class="city-name" onclick="toScenicDetail()">帕劳</li>
                  <li class="city-name" onclick="toScenicDetail()">冲绳市</li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="japan">
            <div class="row">
              <div class="col-md-4">
                <div class="city-header">
                  日本
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">东京</li>
                  <li class="city-name" onclick="toScenicDetail()">大阪</li>
                  <li class="city-name" onclick="toScenicDetail()">京都</li>
                  <li class="city-name" onclick="toScenicDetail()">冲绳</li>
                  <li class="city-name" onclick="toScenicDetail()">北海道</li>
                  <li class="city-name" onclick="toScenicDetail()">名古屋</li>
                  <li class="city-name" onclick="toScenicDetail()">奈良</li>
                  <li class="city-name" onclick="toScenicDetail()">札幌</li>
                  <li class="city-name" onclick="toScenicDetail()">富士山</li>
                  <li class="city-name" onclick="toScenicDetail()">箱根</li>
                  <li class="city-name" onclick="toScenicDetail()">镰仓</li>
                  <li class="city-name" onclick="toScenicDetail()">神户</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  韩国
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">首尔</li>
                  <li class="city-name" onclick="toScenicDetail()">济州岛</li>
                  <li class="city-name" onclick="toScenicDetail()">釜山</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  港澳台
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">香港</li>
                  <li class="city-name" onclick="toScenicDetail()">澳门</li>
                  <li class="city-name" onclick="toScenicDetail()">台北</li>
                  <li class="city-name" onclick="toScenicDetail()">垦丁</li>
                  <li class="city-name" onclick="toScenicDetail()">花莲</li>
                  <li class="city-name" onclick="toScenicDetail()">高雄市</li>
                  <li class="city-name" onclick="toScenicDetail()">台中市</li>
                  <li class="city-name" onclick="toScenicDetail()">九份</li>
                  <li class="city-name" onclick="toScenicDetail()">台南</li>
                  <li class="city-name" onclick="toScenicDetail()">淡水</li>
                  <li class="city-name" onclick="toScenicDetail()">宜兰</li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="asia">
            <div class="row">
              <div class="col-md-4">
                <div class="city-header">
                  泰国
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">曼谷</li>
                  <li class="city-name" onclick="toScenicDetail()">普吉岛</li>
                  <li class="city-name" onclick="toScenicDetail()">清迈</li>
                  <li class="city-name" onclick="toScenicDetail()">苏梅岛</li>
                  <li class="city-name" onclick="toScenicDetail()">芭提雅</li>
                  <li class="city-name" onclick="toScenicDetail()">甲米</li>
                  <li class="city-name" onclick="toScenicDetail()">华欣</li>
                  <li class="city-name" onclick="toScenicDetail()">皮皮岛</li>
                  <li class="city-name" onclick="toScenicDetail()">泰国象岛</li>
                  <li class="city-name" onclick="toScenicDetail()">拜县</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  新加坡
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">新加坡</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  越南
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">芽庄</li>
                  <li class="city-name" onclick="toScenicDetail()">岘港</li>
                  <li class="city-name" onclick="toScenicDetail()">胡志明市</li>
                  <li class="city-name" onclick="toScenicDetail()">河内</li>
                  <li class="city-name" onclick="toScenicDetail()">美奈</li>
                  <li class="city-name" onclick="toScenicDetail()">大叻</li>
                  <li class="city-name" onclick="toScenicDetail()">富国岛</li>
                  <li class="city-name" onclick="toScenicDetail()">下龙湾</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  马来西亚
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">沙巴</li>
                  <li class="city-name" onclick="toScenicDetail()">吉隆坡</li>
                  <li class="city-name" onclick="toScenicDetail()">槟城</li>
                  <li class="city-name" onclick="toScenicDetail()">亚庇</li>
                  <li class="city-name" onclick="toScenicDetail()">兰卡威</li>
                  <li class="city-name" onclick="toScenicDetail()">马六甲</li>
                  <li class="city-name" onclick="toScenicDetail()">仙本那</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  印度尼西亚
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">巴厘岛</li>
                  <li class="city-name" onclick="toScenicDetail()">美娜多</li>
                  <li class="city-name" onclick="toScenicDetail()">乌布德</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  菲律宾
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">长滩岛</li>
                  <li class="city-name" onclick="toScenicDetail()">马尼拉</li>
                  <li class="city-name" onclick="toScenicDetail()">薄荷岛</li>
                  <li class="city-name" onclick="toScenicDetail()">杜马盖地</li>
                  <li class="city-name" onclick="toScenicDetail()">宿雾市</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  斯里兰卡
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">科伦坡</li>
                  <li class="city-name" onclick="toScenicDetail()">斯里兰卡康提</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  柬埔寨
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">暹粒</li>
                  <li class="city-name" onclick="toScenicDetail()">金边</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  亚洲其他
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">迪拜</li>
                  <li class="city-name" onclick="toScenicDetail()">马尔代夫</li>
                  <li class="city-name" onclick="toScenicDetail()">阿布扎比</li>
                  <li class="city-name" onclick="toScenicDetail()">耶路撒冷</li>
                  <li class="city-name" onclick="toScenicDetail()">基什岛</li>
                  <li class="city-name" onclick="toScenicDetail()">加德满都</li>
                  <li class="city-name" onclick="toScenicDetail()">德里</li>
                  <li class="city-name" onclick="toScenicDetail()">仰光</li>
                  <li class="city-name" onclick="toScenicDetail()">多哈</li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="europe">
            <div class="row">
              <div class="col-md-4">
                <div class="city-header">
                  意大利
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">罗马</li>
                  <li class="city-name" onclick="toScenicDetail()">佛罗伦萨</li>
                  <li class="city-name" onclick="toScenicDetail()">威尼斯</li>
                  <li class="city-name" onclick="toScenicDetail()">米兰</li>
                  <li class="city-name" onclick="toScenicDetail()">五渔村</li>
                  <li class="city-name" onclick="toScenicDetail()">那不勒斯</li>
                  <li class="city-name" onclick="toScenicDetail()">西西里岛</li>
                  <li class="city-name" onclick="toScenicDetail()">比萨</li>
                  <li class="city-name" onclick="toScenicDetail()">维罗纳</li>
                  <li class="city-name" onclick="toScenicDetail()">锡耶纳</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  英国
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">伦敦</li>
                  <li class="city-name" onclick="toScenicDetail()">爱丁堡</li>
                  <li class="city-name" onclick="toScenicDetail()">剑桥</li>
                  <li class="city-name" onclick="toScenicDetail()">牛津</li>
                  <li class="city-name" onclick="toScenicDetail()">英国湖区</li>
                  <li class="city-name" onclick="toScenicDetail()">曼彻斯特</li>
                  <li class="city-name" onclick="toScenicDetail()">巴斯</li>
                  <li class="city-name" onclick="toScenicDetail()">约克</li>
                  <li class="city-name" onclick="toScenicDetail()">苏格兰</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  德国
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">慕尼黑</li>
                  <li class="city-name" onclick="toScenicDetail()">法兰克福</li>
                  <li class="city-name" onclick="toScenicDetail()">柏林</li>
                  <li class="city-name" onclick="toScenicDetail()">科隆</li>
                  <li class="city-name" onclick="toScenicDetail()">海德堡</li>
                  <li class="city-name" onclick="toScenicDetail()">汉堡</li>
                  <li class="city-name" onclick="toScenicDetail()">斯图加特</li>
                  <li class="city-name" onclick="toScenicDetail()">杜塞尔多夫</li>
                  <li class="city-name" onclick="toScenicDetail()">纽伦堡</li>
                  <li class="city-name" onclick="toScenicDetail()">德累斯顿</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  法国
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">巴黎</li>
                  <li class="city-name" onclick="toScenicDetail()">尼斯</li>
                  <li class="city-name" onclick="toScenicDetail()">普罗旺斯</li>
                  <li class="city-name" onclick="toScenicDetail()">阿维尼翁</li>
                  <li class="city-name" onclick="toScenicDetail()">里昂</li>
                  <li class="city-name" onclick="toScenicDetail()">马赛</li>
                  <li class="city-name" onclick="toScenicDetail()">波尔多</li>
                  <li class="city-name" onclick="toScenicDetail()">斯特拉斯堡</li>
                  <li class="city-name" onclick="toScenicDetail()">戛纳</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  西班牙
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">巴塞罗那</li>
                  <li class="city-name" onclick="toScenicDetail()">马德里</li>
                  <li class="city-name" onclick="toScenicDetail()">赛维尼亚</li>
                  <li class="city-name" onclick="toScenicDetail()">格拉纳达</li>
                  <li class="city-name" onclick="toScenicDetail()">瓦伦西亚</li>
                  <li class="city-name" onclick="toScenicDetail()">托莱多</li>
                  <li class="city-name" onclick="toScenicDetail()">西班牙龙达</li>
                  <li class="city-name" onclick="toScenicDetail()">马略卡岛</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  瑞士
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">苏黎世</li>
                  <li class="city-name" onclick="toScenicDetail()">卢塞恩</li>
                  <li class="city-name" onclick="toScenicDetail()">因特拉肯</li>
                  <li class="city-name" onclick="toScenicDetail()">日内瓦</li>
                  <li class="city-name" onclick="toScenicDetail()">伯尔尼</li>
                  <li class="city-name" onclick="toScenicDetail()">洛桑</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  奥利力
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">维也纳</li>
                  <li class="city-name" onclick="toScenicDetail()">萨尔茨堡</li>
                  <li class="city-name" onclick="toScenicDetail()">哈尔斯塔特</li>
                  <li class="city-name" onclick="toScenicDetail()">因斯布鲁克</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  俄罗斯
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">莫斯科</li>
                  <li class="city-name" onclick="toScenicDetail()">贝加尔湖</li>
                  <li class="city-name" onclick="toScenicDetail()">圣彼得堡</li>
                  <li class="city-name" onclick="toScenicDetail()">伊尔库茨克</li>
                  <li class="city-name" onclick="toScenicDetail()">符拉迪沃斯托克（海参崴）</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  捷克
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">布拉格</li>
                  <li class="city-name" onclick="toScenicDetail()">捷克克鲁姆洛夫</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  荷兰
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">阿姆斯特丹</li>
                  <li class="city-name" onclick="toScenicDetail()">羊角村</li>
                  <li class="city-name" onclick="toScenicDetail()">鹿特丹</li>
                  <li class="city-name" onclick="toScenicDetail()">海牙</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  希腊
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">圣托里尼</li>
                  <li class="city-name" onclick="toScenicDetail()">雅典</li>
                  <li class="city-name" onclick="toScenicDetail()">克里特岛</li>
                  <li class="city-name" onclick="toScenicDetail()">米克诺斯岛</li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="america">
            <div class="row">
              <div class="col-md-4">
                <div class="city-header">
                  澳大利亚
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">墨尔本</li>
                  <li class="city-name" onclick="toScenicDetail()">悉尼</li>
                  <li class="city-name" onclick="toScenicDetail()">黄金海岸</li>
                  <li class="city-name" onclick="toScenicDetail()">布里斯班</li>
                  <li class="city-name" onclick="toScenicDetail()">凯恩斯</li>
                  <li class="city-name" onclick="toScenicDetail()">珀斯</li>
                  <li class="city-name" onclick="toScenicDetail()">塔斯马尼亚岛</li>
                  <li class="city-name" onclick="toScenicDetail()">阿德莱德</li>
                  <li class="city-name" onclick="toScenicDetail()">袋鼠岛</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  新西兰
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">奥克兰</li>
                  <li class="city-name" onclick="toScenicDetail()">皇后镇</li>
                  <li class="city-name" onclick="toScenicDetail()">基督城</li>
                  <li class="city-name" onclick="toScenicDetail()">新西兰南岛</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  美国
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">洛杉矶</li>
                  <li class="city-name" onclick="toScenicDetail()">纽约</li>
                  <li class="city-name" onclick="toScenicDetail()">塞班岛</li>
                  <li class="city-name" onclick="toScenicDetail()">旧金山</li>
                  <li class="city-name" onclick="toScenicDetail()">拉斯维加斯</li>
                  <li class="city-name" onclick="toScenicDetail()">圣迭戈</li>
                  <li class="city-name" onclick="toScenicDetail()">波士顿</li>
                  <li class="city-name" onclick="toScenicDetail()">华盛顿</li>
                  <li class="city-name" onclick="toScenicDetail()">黄石国家公园</li>
                  <li class="city-name" onclick="toScenicDetail()">夏威夷</li>
                  <li class="city-name" onclick="toScenicDetail()">西雅图</li>
                  <li class="city-name" onclick="toScenicDetail()">关岛</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  加拿大
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">温哥华</li>
                  <li class="city-name" onclick="toScenicDetail()">班夫国家公园</li>
                  <li class="city-name" onclick="toScenicDetail()">多伦多</li>
                  <li class="city-name" onclick="toScenicDetail()">蒙特利多</li>
                  <li class="city-name" onclick="toScenicDetail()">加拿大尼亚加拉瀑布城</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  其他
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">帕劳</li>
                  <li class="city-name" onclick="toScenicDetail()">坎昆</li>
                  <li class="city-name" onclick="toScenicDetail()">墨西哥城</li>
                  <li class="city-name" onclick="toScenicDetail()">哈瓦那</li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="africa">
            <div class="row">
              <div class="col-md-4">
                <div class="city-header">
                  摩洛哥
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">卡萨布兰卡</li>
                  <li class="city-name" onclick="toScenicDetail()">马拉喀什</li>
                  <li class="city-name" onclick="toScenicDetail()">菲斯</li>
                  <li class="city-name" onclick="toScenicDetail()">舍夫万沙</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  埃及
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">开罗</li>
                  <li class="city-name" onclick="toScenicDetail()">卢克索</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  南非
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">开普敦</li>
                  <li class="city-name" onclick="toScenicDetail()">约翰内斯堡</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  肯尼亚
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">内罗毕</li>
                  <li class="city-name" onclick="toScenicDetail()">马赛马拉国家保护区</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  秘鲁
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">马丘比丘</li>
                  <li class="city-name" onclick="toScenicDetail()">利马</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  阿根廷
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">布宜诺斯艾利斯</li>
                  <li class="city-name" onclick="toScenicDetail()">乌斯怀亚</li>
                  <li class="city-name" onclick="toScenicDetail()">埃尔卡拉法特</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  毛里求斯
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">毛里求斯</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  智利
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">圣地亚哥</li>
                  <li class="city-name" onclick="toScenicDetail()">复活节岛</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  巴西
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">里约热内卢</li>
                  <li class="city-name" onclick="toScenicDetail()">圣保罗</li>
                  <li class="city-name" onclick="toScenicDetail()">萨尔瓦多</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  玻利维亚
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">乌尤尼</li>
                  <li class="city-name" onclick="toScenicDetail()">拉巴斯</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="city-header">
                  厄尔瓜多
                </div>
                <ul class="city-content">
                  <li class="city-name" onclick="toScenicDetail()">加拉帕戈斯群岛</li>
                  <li class="city-name" onclick="toScenicDetail()">基多</li>
                  <li class="city-name" onclick="toScenicDetail()">瓜亚基尔</li>
                </ul>
              </div>
            </div>
          </div>
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
          <div role="tabpanel" class="tab-pane" id="theme2">
            <div class="row">
              <div class="col-md-3">
                <div class="on-pic">
                  <img src="../images/scenic/middle/2-1.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      京都
                    </div>
                    <div class="describe-body">
                      春樱秋枫，神社古庙，古道旁，再现平安时代的风华盛景。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/2-2.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      亚兹德
                    </div>
                    <div class="describe-body">
                      丝绸之路途中的千年驿站，沙漠中的古城。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/2-3.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      马丘比丘
                    </div>
                    <div class="describe-body">
                      神秘的印加帝国遗迹。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/2-4.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      蒲甘
                    </div>
                    <div class="describe-body">
                      千塔之城，每一座佛塔都是一段时光的记忆。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/2-5.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      马六甲
                    </div>
                    <div class="describe-body">
                      追寻郑和的足迹。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/2-6.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      罗滕堡
                    </div>
                    <div class="describe-body">
                      保存完好的中世纪风貌，保存完好的德国浪漫之路。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/2-7.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      庆州
                    </div>
                    <div class="describe-body">
                      新罗时代的金城。
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="theme3">
            <div class="row">
              <div class="col-md-3">
                <div class="on-pic">
                  <img src="../images/scenic/middle/3-1.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      东京夜景
                    </div>
                    <div class="describe-body">
                      电影里的东京夜色令人无限向往，切身实地去感受东京的夜。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/3-2.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      光影米兰
                    </div>
                    <div class="describe-body">
                      光与影的曼妙结合，在米兰的夜晚上演。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/3-3.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      曼谷之夜
                    </div>
                    <div class="describe-body">
                      穿着人字拖，逛逛夜市，曼谷总是给人一舒服的感觉。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/3-4.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      夜行首尔
                    </div>
                    <div class="describe-body">
                      夜晚的明洞，繁忙又热闹，首尔的独特也在其中。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/3-5.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      不夜城香港
                    </div>
                    <div class="describe-body">
                      香港是个不夜城，夜宵美味，酣畅淋漓，夜不停息。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/3-6.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      俯瞰夜巴黎
                    </div>
                    <div class="describe-body">
                      凯旋门、卢浮宫、埃菲尔铁塔，俯瞰巴黎夜色。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/3-7.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      纽约酒吧
                    </div>
                    <div class="describe-body">
                      夜幕降临，你可以在酒吧中叫上三五好友一起嘬上一杯鸡尾酒或者啤酒，洗去上班或旅行的疲惫。
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="theme4">
            <div class="row">
              <div class="col-md-3">
                <div class="on-pic">
                  <img src="../images/scenic/middle/4-1.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      纳斯卡线遗址
                    </div>
                    <div class="describe-body">
                      存在了2000年的谜局，这些被镶刻在大地之上的神秘线条，至今仍无人能破解——究竟是谁创造了纳斯卡线条、它们又是怎样创造出来的、神秘线条背后意味着什么？
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/4-2.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      狮身人面像
                    </div>
                    <div class="describe-body">
                      狮身人面像简直就是三大金字塔的孪生兄弟，狮身人面像又叫斯芬克斯，传说中是巨人和蛇妖所生。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/4-3.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      图卢姆玛雅遗址
                    </div>
                    <div class="describe-body">
                      位于坎昆约130公里的加勒比海，是14世纪玛雅文化末期最繁荣的宗教都市遗迹。古城里的建筑都是用石头砌成的，雕刻着图案花纹。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/4-4.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      马丘比丘
                    </div>
                    <div class="describe-body">
                      神秘的印加帝国遗迹。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/4-5.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      奇琴伊察
                    </div>
                    <div class="describe-body">
                      奇琴伊察古城遗址是最出名的、也是修复的最好的尤卡坦玛雅遗址，每个人都会伸长脖子看这个世界第七大奇观。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/4-6.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      巨石阵
                    </div>
                    <div class="describe-body">
                      在一大片草地中，这些横着竖着的大石头看似毫无规律的摆放，确是人类史的一大奇迹。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/4-7.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      复活节岛
                    </div>
                    <div class="describe-body">
                      据人们推测，这些被称为摩艾的石雕像是岛上古老祭拜仪式的一部分，它们制成于公元1250年至1500年之间。
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="theme5">
            <div class="row">
              <div class="col-md-3">
                <div class="on-pic">
                  <img src="../images/scenic/middle/5-1.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      波盖利亚市场
                    </div>
                    <div class="describe-body">
                      各类新旧物件和手工品，是欧洲最古老的市场之一。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/5-2.png" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      霍巴特萨拉曼加集市
                    </div>
                    <div class="describe-body">
                      各种精美玻璃器皿和陶器皮具，还能欣赏街头艺人的音乐。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/5-3.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      首尔传统跳蚤市场
                    </div>
                    <div class="describe-body">
                      韩国历史最为悠久的跳蚤市集，物品故事多。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/5-4.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      罗马Porta Portese跳蚤市场
                    </div>
                    <div class="describe-body">
                      二手货的天堂，小到针头线脑大到实木家具。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/5-5.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      雅典Monastiraki跳蚤市场
                    </div>
                    <div class="describe-body">
                      稀有塑胶唱片、军靴、旧书和各色古玩宝贝应有尽有。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/5-6.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      巴黎圣旺跳蚤市场
                    </div>
                    <div class="describe-body">
                      巴黎二手市场的鼻祖，欧洲vintage文化发源地。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/5-7.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      旧金山金银岛
                    </div>
                    <div class="describe-body">
                      <div class="content">
                        对于艺术家、收藏夹、设计师和匠人们，这里简直就是狂欢的圣地。
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="theme6">
            <div class="row">
              <div class="col-md-3">
                <div class="on-pic">
                  <img src="../images/scenic/middle/6-1.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      比尔森
                    </div>
                    <div class="describe-body">
                      以啤酒出名的小镇，在这里可以品尝正宗的捷克啤酒。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/6-2.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      富士山
                    </div>
                    <div class="describe-body">
                      地方虽然不大，但却给人一种一尘不染的脱俗感。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/6-3.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      五渔村
                    </div>
                    <div class="describe-body">
                      依山而建的五颜六色的房子很美，海水很蓝很干净。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/6-4.png" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      洛迦诺
                    </div>
                    <div class="describe-body">
                      位于瑞士东南部提契诺州的马焦雷湖畔，宛如童话世界。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/6-5.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      高威
                    </div>
                    <div class="describe-body">
                      一个安静祥和，却不失活力元素，生活节奏慢的地方。
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 vertical">
                <div class="image">
                  <img src="../images/scenic/middle/6-6.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      布雷根茨
                    </div>
                    <div class="describe-body">
                      湖光山色，景色不错，紧挨瑞士德国，乃交通要塞。
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="../images/scenic/middle/6-7.jpeg" alt="">
                  <div class="describe">
                    <div class="describe-header">
                      拉姆绍
                    </div>
                    <div class="describe-body">
                      非常漂亮的森林小镇，尤其是在阳光下，这里湖水的颜色是有层次的。
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="month">
        <div class="title">
          月度推荐
        </div>
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"><a aria-controls="month1" href="#month1" role="tab" data-toggle="tab">1月</a></li>
          <li role="presentation"><a aria-controls="month2" href="#month2" role="tab" data-toggle="tab">2月</a></li>
          <li role="presentation"><a aria-controls="month3" href="#month3" role="tab" data-toggle="tab">3月</a></li>
          <li role="presentation"><a aria-controls="month4" href="#month4" role="tab" data-toggle="tab">4月</a></li>
          <li role="presentation" class="active"><a aria-controls="month5" href="#month5" role="tab" data-toggle="tab">5月</a>
          </li>
          <li role="presentation"><a aria-controls="month6" href="#month6" role="tab" data-toggle="tab">6月</a></li>
          <li role="presentation"><a aria-controls="month7" href="#month7" role="tab" data-toggle="tab">7月</a></li>
          <li role="presentation"><a aria-controls="month8" href="#month8" role="tab" data-toggle="tab">8月</a></li>
          <li role="presentation"><a aria-controls="month9" href="#month9" role="tab" data-toggle="tab">9月</a></li>
          <li role="presentation"><a aria-controls="month10" href="#month10" role="tab" data-toggle="tab">10月</a></li>
          <li role="presentation"><a aria-controls="month11" href="#month11" role="tab" data-toggle="tab">11月</a></li>
          <li role="presentation"><a aria-controls="month12" href="#month12" role="tab" data-toggle="tab">12月</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane" id="month1">
            <div class="month-pic">
              <img src="../images/scenic/down/1-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  新西兰
                </div>
                <div class="describe-body">
                  在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/1-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  韩国·江原道
                </div>
                <div class="describe-body">
                  韩国的这个地方就是为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/1-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  美国·夏威夷
                </div>
                <div class="describe-body">
                  夏威夷是一个神奇的度假海岛，这里一年四季温暖如夏，不论你什么时候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有细致洁白的沙滩和众多摇曳多姿的椰子树。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/1-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  泰国·苏梅岛
                </div>
                <div class="describe-body">
                  苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和旱季，除了十到十二月之外，这里的气候都十分适合旅行。潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛丹，抑或去酒吧喝点啤酒释放激情。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/1-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  俄罗斯·贝加尔湖
                </div>
                <div class="describe-body">
                  一年四季，每一个季节都是大自然给我们最好的时光。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。当你全身心的去感受冬季的美，那么其他的季节得模样就再也无法入了你的眼。
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month2">
            <div class="month-pic">
              <img src="../images/scenic/down/2-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  伊斯坦布尔
                </div>
                <div class="describe-body">
                  伊斯坦布尔古称君士坦丁堡，自古都是王者之地。曾作为奥斯曼帝国的首都，帝国极盛之时，势力波及欧亚非三大洲，君主苏丹更是将自己视为天下之主，然兵败于一战，帝国的大厦轰然倒塌。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/2-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  乌兹别克斯坦·希瓦
                </div>
                <div class="describe-body">
                  希瓦是乌兹别克的一座古城，也曾是丝路重镇，王朝旧都。古为西域之地，其民风淳淳，如茗之烟。你大可以随意走进一家街边的餐馆，店主会轻巧一笑示意你落座，仿佛你不是他乡客，倒像是旧相识。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/2-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  香港
                </div>
                <div class="describe-body">
                  这个季节的香港没有夏天的潮热，气温上更加舒适。三五天时间，飞去吃吃喝喝，顺便逛个小街，不能更舒服了。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/2-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  摩洛哥
                </div>
                <div class="describe-body">
                  这个今年免签的彩色国度，每年11月至3月为旅行旺季。骑骆驼深入撒哈拉，躺卧着看一亿颗星星；探索梅克内斯、菲斯和马拉喀什三大古城，以及瓦卢比利斯、阿伊特·本·哈杜村共5处世界文化遗产，穿越回《一千零一夜》的岁月。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/2-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  瑞典
                </div>
                <div class="describe-body">
                  不管是不是最后一年的极光大爆发，每年的2月都是绝佳的看极光时机。瑞典具备观赏条件，而且性价比最高还”免签”，一起去做追光少年吧！
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month3">
            <div class="month-pic">
              <img src="../images/scenic/down/3-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  荷兰·丽兹
                </div>
                <div class="describe-body">
                  在荷兰，赏花地首推库肯霍夫公园。库肯霍夫号称世界上最美的春季公园，也是世界上最大的球茎花卉公园，园中各类花卉达600万株以上，是世界上被拍摄最多的地点，也是最受荷兰人钟爱的地方。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/3-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  日本
                </div>
                <div class="describe-body">
                  每年3月15日至4月15日是日本的“樱花节”，正是樱花最盛放的时候。穿一袭和服，漫步在樱花雨下，会不会也和下雪天一样，一不小心就走到了白头。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/3-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  韩国·济州岛
                </div>
                <div class="describe-body">
                  济州岛是韩国春天最早到来的地方，每到初春，油菜花便会率先开放。樱花的嫩粉和油菜花的艳黄，想象起来有些不搭调，不过在三月的济州岛，大自然给了我们一场精彩而又和谐的撞色T台秀。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/3-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  印度
                </div>
                <div class="describe-body">
                  印度的色彩节就在三月。这是一个用色彩来迎接春天的节日，预示着灰暗的冬天的结束，五彩斑斓的春天即将到来。这一天，人们纷纷走上街头，跳舞狂欢，将彩色粉末涂满全身或是涂在他人额头表示祝福。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/3-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  爱尔兰·都柏林
                </div>
                <div class="describe-body">
                  爱尔兰有个节日叫“绿帽子节”，人人都要带着绿帽子上街狂欢，它是为了纪念爱尔兰的守护神圣帕特里克，故又名圣帕特里克节。有些酒吧在节日期间还会出售特制的绿色啤酒，麦当劳也会出售绿色的奶昔。有机会一定要尝一尝。
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month4">
            <div class="month-pic">
              <img src="../images/scenic/down/4-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  美国·加利福尼亚
                </div>
                <div class="describe-body">
                  四月，春季，最适合来加州赏花。这个时候加州各个赏花胜地已经争奇斗艳起来了，风里都飘满着花香，空气里仿佛有糖一般，让身体和神经都在清新的空气里放松下来。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/4-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  台湾·垦丁
                </div>
                <div class="describe-body">
                  第一次知道春天的呐喊垦丁音乐节是因为五月天的一首歌，歌词说“爽要呐喊，不爽更要喊，用力的呐喊，喊到流汗，喊到没遗憾，一生能有几次，跟世界宣战。”一生能有几次机会不顾一切地呐喊，不顾一切地狂欢，垦丁音乐节给你这个机会。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/4-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  泰国
                </div>
                <div class="describe-body">
                  在曼谷、在芭提雅，到处都是蜂拥而至的人群，大家相互泼水、狂欢，享受清凉的“宋干节”。白天有灿烂的阳光、细腻的沙滩还有丰富的水上运动；夜晚则是另一种精彩：酒吧、音乐、表演，让整个城市充满激情，彻夜不眠。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/4-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  希腊
                </div>
                <div class="describe-body">
                  复活节是西方国家的重要节日之一，但在希腊，复活节的庆祝活动却要比圣诞还丰富热闹。复活节期间，希腊的许多博物馆和景点都免费开放。趁着复活节，去希腊一探究竟，看看这个古老的国度真实的模样。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/4-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  新加坡
                </div>
                <div class="describe-body">
                  4月是新加坡美食节，被称为“活的美食博物馆”。美食节期间，新加坡的到处是美食优惠信息，各个商家工厂也都在赶工，为了提供丰富的美食。一天五顿，顿顿都吃得爽快，把保持身材这种恼人的事尽情抛到脑后。
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane active" id="month5">
            <div class="month-pic">
              <img src="../images/scenic/down/5-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  法国·巴黎
                </div>
                <div class="describe-body">
                  去巴黎，当然不能不去大大小小的博物馆，却不可避免地总是在大太阳底下排着长队。5月20日是巴黎的博物馆之夜。当晚，巴黎无数的博物馆将会免费开放，没准还会有像《博物馆奇妙夜》一样的奇遇呢。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/5-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  伊朗·卡尚
                </div>
                <div class="describe-body">
                  玫瑰是卡尚旅游的一大主题。每年5月，全城充满了沁人心脾的玫瑰芬芳。在来自伊朗全国和世界各地的数万名游客注视下，当地人每天清晨摘下晶莹带露的“穆罕默迪”玫瑰花瓣，经过蒸馏等工艺，制成高品质玫瑰水。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/5-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  捷克·布拉格
                </div>
                <div class="describe-body">
                  五月，是前往布拉格最好的时候。每年从5月12日起在捷克布拉格市内举行“布拉格之春国际音乐节”，开展为期三个礼拜的音乐活动。各种音乐流派在这里荟萃，它既是捷克最大型的音乐盛会，也是世界闻名的音乐节。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/5-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  古巴·哈瓦那
                </div>
                <div class="describe-body">
                  穿梭在哈瓦那老城，迷宫般的大街小巷，路边一辆辆飞驰的复古车辆，仿佛穿越到了五十年代。古巴女郎、雪茄、朗姆酒、拉丁舞，一些属于古巴的名词让地方散发着迷人性感又神秘的气息。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/5-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  美国·塞班
                </div>
                <div class="describe-body">
                  五月，塞班的凤凰花开的正旺盛。碧海蓝天，火红的凤凰花，红蓝的碰撞，给这个初夏一点不一样的色彩。背倚热带植被覆盖的山脉，穿过道路两旁郁郁葱葱的椰树展现在面前的是纯净透澈的蓝绿色菲律宾海，置身其中，仿佛身心都得到了净化。
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month6">
            <div class="month-pic">
              <img src="../images/scenic/down/6-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  俄罗斯·圣彼得堡
                </div>
                <div class="describe-body">
                  6月的俄罗斯清凉宜人，十分适合避暑度假。特别是圣彼得堡——这个世界上少数有“白夜”的城市，会在每年6月21日迎来盛大的节日——白昼节。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/6-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  澳大利亚·塔斯马尼亚
                </div>
                <div class="describe-body">
                  正在发愁夏天看不到极光？不要怕，没有北极光，还可以有南极光。塔斯马尼亚岛，是澳洲最接近南极圈的地方，也是观赏南极光的最佳位置。现在出发，还能拥有极夜的独特体验。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/6-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  坦桑尼亚
                </div>
                <div class="describe-body">
                  6月-9月的非洲，由于旱季的到来，数以百万计的野生动物将会上演地球上最壮观的大迁徙场面——从坦桑尼亚的塞伦盖蒂保护区前往肯尼亚的马赛马拉国家公园。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/6-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  巴厘岛
                </div>
                <div class="describe-body">
                  6月的巴厘岛，迎来了一年当中最舒适的凉季——天气干爽，气候宜人。几乎不会下雨，夜晚清凉舒适。无论是阿勇河上的漂流、金巴兰海滩上完美的落日、还是圣泉寺里信徒虔诚的洗礼，都是一次最净化心灵的旅行。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/6-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  阿根廷
                </div>
                <div class="describe-body">
                  每年六月阿根廷开始进入滑雪季，大部分滑雪胜地都全面开放，想要避暑滑雪，就不要错过六月的阿根廷啦。更何况，前些日子，阿根廷刚对中国开放了十年往返签证，是时候去世界的尽头看看了。
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month7">
            <div class="month-pic">
              <img src="../images/scenic/down/7-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  美国·华盛顿
                </div>
                <div class="describe-body">
                  每年的7月4号是美国的国庆日，又称独立日，为的是纪念1776年的这一天《独立宣言》的签署。而作为美利坚合众国的首都，华盛顿自然要举行一系列庆祝活动。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/7-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  法国·巴黎
                </div>
                <div class="describe-body">
                  7月的巴黎，除了一年一度的夏季打折季和沙滩节之外，14日的法国国庆节也非常值得期待，法国国庆是为了纪念1789年的这一天巴黎人民攻占巴士底狱，那是个改变了法国乃至整个欧洲的日子。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/7-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  蒙古·乌兰巴托
                </div>
                <div class="describe-body">
                  蒙古的国庆节在每年的7月11号，为了纪念1921年的这天蒙古人民革命党领导的人民革命取得胜利。而在国庆当天，也会举行盛大的那达慕大会开幕仪式。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/7-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  意大利·翁布里亚
                </div>
                <div class="describe-body">
                  翁布里亚爵士音乐节也会在每年七月举行，这是世界上几大之知名的爵士音乐节之一，会持续一周左右的时间，每年这个时候，大区首府佩鲁贾都是游人云集，热闹非凡，爱好音乐的朋友一定不能错过。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/7-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  挪威
                </div>
                <div class="describe-body">
                  7月的挪威非常凉爽，历史均温也不过十余度上下。挪威旅行最大的看点就是那刀凿斧琢般的海岸线上无数风景壮美的峡湾了，其间还散落着许多地质奇观。布道石，奇迹石，恶魔之舌……光听名字就令人神往。
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month8">
            <div class="month-pic">
              <img src="../images/scenic/down/8-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  非洲·马赛马拉
                </div>
                <div class="describe-body">
                  每年夏天，在东非广袤的大地上，为了追逐丰美的水草，上百万头食草动物都会长途跋涉3000多公里，上演这个星球上最壮观的迁徙。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/8-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  俄罗斯·贝加尔湖
                </div>
                <div class="describe-body">
                  贝加尔湖古称北海，当年苏武便是于此牧羊。八月时节，原始森林葳蕤蓊郁，贝加尔湖瑰丽壮阔，气候宜人，生物成群。乘环湖火车赏景，湖边或可见一树一树的野花花开正盛，微风过处，落一地粉嫩鹅黄。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/8-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  斐济
                </div>
                <div class="describe-body">
                  8月的斐济，天气较他时更为凉爽，且受热带风暴袭击的概率较低，适宜旅行。若能约上三两好友，在海岛上度过几天懒散闲适的生活，更复何求？
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/8-4.png" alt="">
              <div class="describe">
                <div class="describe-header">
                  西班牙·布尼奥尔
                </div>
                <div class="describe-body">
                  每年8月的最后一个星期三，卡车都会在小镇上倾倒上百吨熟透的番茄，人们可以肆意地拿着番茄相互投掷，整个小镇都会成为红色的海洋。很少有这样的机会，可以将孩童的天性如此无拘无束地释放。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/8-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  乌兹别克斯坦·撒马尔罕
                </div>
                <div class="describe-body">
                  撒马尔罕是乌兹别克斯坦的旧都，中亚大地最传奇的城市。这里是曾经的丝路重镇，八方通衢。世纪之初跻身世界文化遗产，被称为“文化交汇之地”。
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month9">
            <div class="month-pic">
              <img src="../images/scenic/down/9-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  新西兰·皇后镇
                </div>
                <div class="describe-body">
                  有人说，上帝先到了这里，然后才创造了天堂。9月的皇后镇开始进入春季，繁花似锦，是一年中最美的时候。除了绝美的自然风光之外，皇后镇还被誉为“冒险之都”，在这里可以体验许多世界顶级的户外活动。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/9-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  意大利·米兰
                </div>
                <div class="describe-body">
                  9月的米兰天气日趋凉爽，除了宏伟的米兰大教堂和达芬奇的最后的晚餐真迹外，2017春夏米兰时装周也将于当地时间9月21日-9月26日举办。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/9-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  德国·慕尼黑
                </div>
                <div class="describe-body">
                  九月下旬慕尼黑会举办举世闻名的啤酒节，人们用华丽的马车运送啤酒，身着传统巴伐利亚民族服饰盛装游行，在巨大的啤酒帐篷里开怀畅饮，欣赏巴伐利亚铜管乐队演奏的民歌乐曲。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/9-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  加拿大
                </div>
                <div class="describe-body">
                  魁北克省和安大略省可以观赏加拿大的秋景，这里不仅有落基山空明澄澈的湖水、冰原大道千年不化的积雪、还有魁北克古城石板街的温婉浪漫、尼亚加拉大瀑布的恢宏壮阔和卡尔加里牛仔节魅力四射的激情……万千美景，集于一身。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/9-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  突尼斯
                </div>
                <div class="describe-body">
                  9月下旬是突尼斯夏秋交替之季。此时地中海岸鲜花盛开，撒哈拉地区气温也开始转凉，是沙漠观景的好时节。在突尼斯感受三毛与荷西的撒哈拉平凡爱情也会是充满特殊浪漫的旅程。
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month10">
            <div class="month-pic">
              <img src="../images/scenic/down/10-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  俄罗斯·莫斯科
                </div>
                <div class="describe-body">
                  俄罗斯的十月入秋不久，气温稍凉，秋风飒爽。作为俄罗斯的首都，莫斯科是世界上绿化最好的城市之一，这时候来莫斯科，还可以看到最美的金秋。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/10-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  瑞士
                </div>
                <div class="describe-body">
                  10月份是瑞士入秋的季节，这时候很适合徒步，并且游人较少。来这里，可以在国庆错峰出行，真正深入当地，体会民俗风情。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/10-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  匈牙利·布达佩斯
                </div>
                <div class="describe-body">
                  布达佩斯一直享受着“多瑙河上的小明珠”之称号，美丽的多瑙河流经这座浪漫而又文艺的城市。走在秋季的布达佩斯，犹如进入了电影的世界。一年一度的秋季艺术节也在这个10月里举行。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/10-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  南非
                </div>
                <div class="describe-body">
                  10月份南非刚刚开春，在开普敦等地区开满了鲜花，是旅行观光的最好时机。如果你不喜欢秋天，那么就去南非看花开吧。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/10-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  澳大利亚
                </div>
                <div class="describe-body">
                  每年的10月~次年2月是澳大利亚的夏季，也是澳大利亚最适合旅行的季节。澳洲是一个充满了生机的岛国，除了袋鼠和考拉，这里还有很多值得人们去体验的东西。比如花园城市墨尔本的有轨电车、大堡礁浮潜、黄金海岸的海鲜美味……
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month11">
            <div class="month-pic">
              <img src="../images/scenic/down/11-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  迪拜
                </div>
                <div class="describe-body">
                  11月至次年3月是迪拜的最佳旅行季节，在舒适的气候中更好的领略当地风情。作为目前世界上最高的建筑，高耸入云的迪拜塔已然成为迪拜的绝对地标。来迪拜游览这些独特的建筑，就能从中看到这几十年来穆斯林文化和西方文化碰撞的火花。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/11-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  柬埔寨
                </div>
                <div class="describe-body">
                  如果你去过柬埔寨，你一定会被当地的古迹和历史气息震撼到，在吴哥窟林立的古迹中漫步，就好像看到了神秘的高棉历史。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/11-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  越南
                </div>
                <div class="describe-body">
                  越南沿着海岸线的狭长地带，河内与胡志明市这两座城市连起了顺化、岘港、会安、芽庄、美奈、大叻这一串美丽的小城。这就是越南，惊险之中却有别样风情的国家。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/11-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  埃及
                </div>
                <div class="describe-body">
                  埃及冬季平均气温最高19℃，最低9℃，夏季温度最高可达三四十度。9至11月的埃及是最佳的选择。金字塔，神庙，木乃伊，吸引着全世界各地的人们前往这里。除此之外，埃及还有漂亮的红海，迷人的亚历山大港。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/11-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  马尔代夫
                </div>
                <div class="describe-body">
                  曾有人如此评价它：“如果你一生中有很多次出国旅游的机会，那你一定要来马尔代夫；如果你一生中只有一次出国旅游的机会，那你更要来马尔代夫”。
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="month12">
            <div class="month-pic">
              <img src="../images/scenic/down/12-1.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  日本·白川乡
                </div>
                <div class="describe-body">
                  如果要去日本看雪，也许你第一个想到的是北海道。除了北海道之外，也许你可以尝试去一趟白川乡。白川乡是坐落于日本中部的岐阜县，是个四面环山、水田纵横、河川流经的安静村落。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/12-2.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  芬兰·罗瓦涅米
                </div>
                <div class="describe-body">
                  大家都以为圣诞老人只是童话而已，但实际上芬兰就存在真正的圣诞老人。熟悉圣诞老人历史的人就会知道，他的家乡在拉普兰的罗瓦涅米。想去一睹圣诞老人的真容么？
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/12-3.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  美国
                </div>
                <div class="describe-body">
                  冬季的美国虽然没有夏季那么多有趣的玩乐项目，但你来这里却可以看到更加真实的它,遇到和美剧《老友记》中一样的普通人。圣诞节的时候，美国大街小巷上都会装饰起来，热闹的节日气氛感染着每一个人。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/12-4.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  苏格兰·爱丁堡
                </div>
                <div class="describe-body">
                  如果你看过电影《一天》，那么你肯定记住了爱丁堡这座山城。整个城市浓郁而独特的文化气息，会让你置身于一个完全不同的世界中。当新年到来之时，你来到爱丁堡街头，绝对会被这新年的气氛所感染，和大家一起高呼、一起载歌载舞。
                </div>
              </div>
            </div>
            <div class="month-pic">
              <img src="../images/scenic/down/12-5.jpeg" alt="">
              <div class="describe">
                <div class="describe-header">
                  台北
                </div>
                <div class="describe-body">
                  台湾没有太多壮丽的山水，却有对景点细致的发掘。而跨年来这里，最不能错过的就是在台北101观景台体会「在烟火里看烟火」的奇妙经验。在迎接新年的时候，爬到台北101的89楼俯瞰整个城市，天空中绽放着整片整片的眼花。
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
<?php require 'footer.php' ?>
</body>
</html>

<script>
  function toScenicDetail() {
    window.location.href = "./scenicdetail_gailan.php";
  }
</script>
