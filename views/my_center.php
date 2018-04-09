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