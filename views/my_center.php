<?php
//个人中心
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>个人中心</title>
    <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/my_center.css">
  <link rel="stylesheet" href="../package/jVectorMap/jquery-jvectormap-2.0.3.css" type="text/css" media="screen">
  <script src="../package/jVectorMap/jquery-1.12.4.min.js"></script>
  <script src="../package/jVectorMap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="../package/jVectorMap/world_mill.js"></script>
  <script src="../package/jVectorMap/jquery-jvectormap-cn-mill.js"></script>
</head>
<body>
<?php
$tab = 'center';
?>
<?php require 'top.php' ?>
<div class="my-center">
  <div id="big-map">
    <div id="small-map-cover" onclick="toChinaMap()"></div>
    <div id="small-map"></div>
  </div>
  <div class="my-info">
    <div class="relative-read">
      <div class="MAvatar">
        <div class="MAvaImg hasAva">
          <img src="../images/touxiang.jpeg" height="120" width="120" alt="wuli思密达达达达达">
        </div>
        <div class="MAvaName">wuli思密达达达达达
        </div>

        <div class="its_tags">
          <span>vip</span>
          <span>达人</span>
          <span>足迹</span>
        </div>
        <div class="MAvaInfo clearfix MAvaMyInfo">
          <span class="MAvaLevel flt1">等级：<a title="Lv.3">Lv.3</a></span>
          <span class="MAvaPlace flt1" title="黄浦区">现居：黄浦区</span>
        </div>
        <div class="MAvaMore clearfix">
          <div class="MAvaNums">
            <strong><a>4</a></strong>
            <p>关注</p>
          </div>
          <div class="MAvaNums">
            <strong><a>0</a></strong>
            <p>粉丝</p>
          </div>
          <div class="MAvaNums last">
            <strong><a>0</a></strong>
            <p>青草</p>
          </div>
        </div>
      </div>
    </div>
    <div class="info">
      <div class="info-content">
        <div class="info-header">
          <strong>
            漂洋过海来睡你，在普吉宜必思邂逅绝美海岛时光
          </strong>
        </div>
        <div class="gailan">
          概览
        </div>
        <div class="detail">
          <span>游玩城市：</span>
          <span class="count">3</span>
          <span>到达国家：</span>
          <span class="count">2</span>
          <span>撰写游记：</span>
          <span class="count">12</span>
          <span>获得徽章：</span>
          <span class="count">3</span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require 'footer.php' ?>
</body>
</html>

<script>
  $(function () {
    $('#big-map').vectorMap({
      map: 'world_mill',
      backgroundColor: '#1f3957',
      color: "#BBBBBB",
      regionsSelectable: true,
      regionStyle: {
        initial: {
          fill: '#485e6f',
        },
        hover: {
          fill: '#cadead'
        },
        selected: {
          fill: '#ff9d00',
        }
      },
      zoomOnScroll: false,
    });
    $('#small-map').vectorMap({
      map: 'cn_mill',
      backgroundColor: '#1f3957',
      color: "#BBBBBB",
      regionsSelectable: false,
      regionStyle: {
        initial: {
          fill: '#485e6f',
        },
        hover: {
          fill: '#cadead'
        },
        selected: {
          fill: '#ff9d00',
        }
      },
      zoomOnScroll: false,
    });
  });

  function toChinaMap() {
    document.getElementById('big-map').innerHTML = '<div id="small-map-cover" onclick="toWorldMap()"></div><div id="small-map"></div>';
    $('#big-map').vectorMap({
      map: 'cn_mill',
      backgroundColor: '#1f3957',
      color: "#BBBBBB",
      regionsSelectable: true,
      regionStyle: {
        initial: {
          fill: '#485e6f',
        },
        hover: {
          fill: '#cadead'
        },
        selected: {
          fill: '#ff9d00',
        }
      },
      zoomOnScroll: false,
    })
    ;
    $('#small-map').vectorMap({
      map: 'world_mill',
      backgroundColor: '#1f3957',
      color: "#BBBBBB",
      regionsSelectable: false,
      regionStyle: {
        initial: {
          fill: '#485e6f',
        },
        hover: {
          fill: '#cadead'
        },
        selected: {
          fill: '#ff9d00',
        }
      },
      zoomOnScroll: false,
    });
  }

  function toWorldMap() {
    document.getElementById('big-map').innerHTML = '<div id="small-map-cover" onclick="toChinaMap()"></div><div id="small-map"></div>';
    $('#big-map').vectorMap({
      map: 'world_mill',
      backgroundColor: '#1f3957',
      color: "#BBBBBB",
      regionsSelectable: true,
      regionStyle: {
        initial: {
          fill: '#485e6f',
        },
        hover: {
          fill: '#cadead'
        },
        selected: {
          fill: '#ff9d00',
        }
      },
      zoomOnScroll: false,
    })
    ;
    $('#small-map').vectorMap({
      map: 'cn_mill',
      backgroundColor: '#1f3957',
      color: "#BBBBBB",
      regionsSelectable: false,
      regionStyle: {
        initial: {
          fill: '#485e6f',
        },
        hover: {
          fill: '#cadead'
        },
        selected: {
          fill: '#ff9d00',
        }
      },
      zoomOnScroll: false,
    });
  }
</script>