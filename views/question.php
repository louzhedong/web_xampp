<?php
//问答
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>问答</title>
    <?php require 'link.php' ?>
    <link rel="stylesheet" href="../css/question.css">
    <link href="../package/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$tab = 'travel';
?>
<?php require 'top.php' ?>
<br>
<div class="row">
  <!-- sf-left start -->
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="col-md-8 col-sm-12 sf-left">

      <ul class="list-group sf-box">
        <li class="list-group-item navi-top-list">
          <span class="fr"><a href="#"><i class="fa fa-pencil"></i>发表</a></span>
          <a class="btn btn-sm btn-primary current" href="/forum/index.php?r=topic%2Findex">全部</a>
          <a class="btn btn-default btn-sm" href="#">热门问题</a>
          <a class="btn btn-default btn-sm" href="#">最新问题</a>
          <a class="btn btn-default btn-sm" href="#">待回答问题</a>
        </li>
        <li class="list-group-item media">
          <a class="media-left item-avatar" href="#">
            <img class="img-circle media-object" src="#" alt="娜娜">
          </a>
          <div class="media-body">
            <h5 class="media-heading"><a href="#">【常驻人口必读】发帖规范/社区功能/常见疑难解答</a></h5>
            <div class="small gray">
              <a class="badge fr count-info" href="#">4</a>
              <a class="btn btn-xs node small" href="#">全部</a> • <strong><i class="fa fa-user"></i><a href="#">娜娜</a><span class="user-level user-level-2">V2</span></strong> • <i class="fa fa-arrow-up"></i>置顶
            </div>
          </div>
        </li>
        <li class="list-group-item media">
          <a class="media-left item-avatar" href="#">
            <img class="img-circle media-object" src="/images/society/society_travel/1.jpg" alt="Sophie">
          </a>
          <div class="media-body">
            <h5 class="media-heading"><a href="#">出国护照需要带哪些资料呀，每个地方都一样的吗？</a></h5>
            <div class="small gray">
              <a class="badge fr count-info" href="#">1</a>
              <a class="btn btn-xs node small" href="#">最新问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=9298">Sophie</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>6天前
            </div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=2285">
            <img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/4202ee83f0d8a3944c4b72dd/1492135417.jpg!forum.avatar.normal" alt="冷羽枫"></a><div class="media-body">
            <h5 class="media-heading">
              <a href="/forum/index.php?r=topic%2Fview&amp;id=145&amp;ip=1">歪歪歪，南来的，北往的，五一去哪哈皮</a>
            </h5>
            <div class="small gray">
              <a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=145&amp;ip=1">5</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=lsjjd">热门问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=2285">冷羽枫</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>9天前
            </div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=3993"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/35475c0c2274dd4f9931d3e6/1492781951.jpg!forum.avatar.normal" alt="无敌不寂寞"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=143&amp;ip=1">你对台湾的印象是什么？为什么选择去台湾旅行？</a></h5>
            <div class="small gray">
              <a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=143&amp;ip=1">4</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=lsjjd">热门问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=3993">无敌不寂寞</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>18天前
            </div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=25768"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/teacher.png!forum.avatar.normal" alt="吴慧"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=144&amp;ip=1">如何在旅途中，选到一个热情有趣的房东和民宿？！！！！！</a></h5>
            <div class="small gray"><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=jwglj">热门问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=25768">吴慧</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>28天前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=6969"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/teacher.png!forum.avatar.normal" alt="胡华英"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=142&amp;ip=1">旅行中如何晒出高逼格的朋友圈？</a></h5>
            <div class="small gray"><a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=142&amp;ip=1">5</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=lsjjd">热门问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=6969">胡华英</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>1个月前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=5982"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/teacher.png!forum.avatar.normal" alt="杨林"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=128&amp;ip=1">中国有哪些人少但值得一去的古镇？</a></h5>
            <div class="small gray"><a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=128&amp;ip=1">4</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=lsjxxy">热门问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=5982">杨林</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>1个月前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=4064"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/f6c3bea4c55bd10409c45e5a/1487581748.jpg!forum.avatar.normal" alt="悠悠"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=66&amp;ip=1">旅行小白怎么识别旅游景点常见的坑人伎俩？</a></h5>
            <div class="small gray"><a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=66&amp;ip=1&amp;p=2">32</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=cpfks">热门问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=4064">悠悠</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>1个月前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=18253"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/teacher.png!forum.avatar.normal" alt="杨舒涵"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=141&amp;ip=1">作为一个旅行者，你眼中的日本是什么样的？</a></h5>
            <div class="small gray"><a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=141&amp;ip=1">3</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=lsjjd">热门问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=18253">杨舒涵</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>1个月前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=3994"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/35b3f39d670b3e2862c95de3/1492441548.jpg!forum.avatar.normal" alt="今天也不知道叫什么"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=135&amp;ip=1">国内有哪些适合居住一周左右的静心小镇？</a></h5>
            <div class="small gray"><a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=135&amp;ip=1">8</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=lsjjd">最新问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=3994">今天也不知道叫什么</a> <span class="user-level user-level-4">V4</span></strong> • <i class="fa fa-clock-o"></i>2个月前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=4393"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/ed11a9c746af6e905aade48c/1486257521.jpg!forum.avatar.normal" alt="张玲妹"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=139&amp;ip=1">你经历过最穷的旅行，到底有多穷？</a></h5>
            <div class="small gray"><a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=139&amp;ip=1">3</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=cpfks">最新问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=4393">张玲妹</a> <span class="user-level user-level-2">V2</span></strong> • <i class="fa fa-clock-o"></i>2个月前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=1235"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/teacher.png!forum.avatar.normal" alt="陈会婷"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=136&amp;ip=1">一个吃货的旅行，是怎样的？</a></h5>
            <div class="small gray"><a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=136&amp;ip=1">6</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=lsjjd">热门问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=1235">陈会婷</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>2个月前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=18588"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/26103f78d988357e98e02eb8/1501317993.jpg!forum.avatar.normal" alt="杨淼"></a><div class="media-body">
            <h5 class="media-heading"><a href="/forum/index.php?r=topic%2Fview&amp;id=140&amp;ip=1">去曼谷能吃到哪些经典的泰国美食？</a></h5>
            <div class="small gray"><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=cpfks">最新问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=18588">杨淼</a> <span class="user-level user-level-2">V2</span></strong> • <i class="fa fa-clock-o"></i>2个月前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=23823"><img class="img-circle media-object" src="https://cdn-2.yi-you.org/avatar/9fd172650340947e442d8dee/1506994584.jpg!forum.avatar.normal" alt="李丁鑫"></a><div class="media-body">
            <h5 class="media-heading"><a href="#">你在旅途中，做过最疯狂最刺激的事是什么？</a></h5>
            <div class="small gray"><a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=129&amp;ip=1">9</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=cpfks">热门问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=23823">李丁鑫</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>2个月前</div>
          </div>
        </li>
        <li class="list-group-item media"><a class="media-left item-avatar" href="/forum/index.php?r=user%2Fview&amp;userid=8817"><img class="img-circle media-object" src="https://cdn-1.yi-you.org/avatar/teacher.png!forum.avatar.normal" alt="朱旭冉"></a><div class="media-body">
            <h5 class="media-heading"><a href="#">如何回应“去日本旅游的人都是卖国贼”的言论？</a></h5>
            <div class="small gray"><a class="badge fr count-info" href="/forum/index.php?r=topic%2Fview&amp;id=134&amp;ip=1">2</a><a class="btn btn-xs node small" href="/forum/index.php?r=topic%2Fnode&amp;name=lsjjd">待回答问题</a> • <strong><i class="fa fa-user"></i><a href="/forum/index.php?r=user%2Fview&amp;userid=8817">朱旭冉</a> <span class="user-level user-level-1">V1</span></strong> • <i class="fa fa-clock-o"></i>2个月前</div>
          </div>
        </li>





        <li class="list-group-item item-pagination">
          <ul class="pagination">
            <li class="prev disabled"><span>«</span></li>
            <li class="active"><a href="#" data-page="0">1</a></li>
            <li><a href="#" data-page="1">2</a></li>
            <li><a href="#" data-page="2">3</a></li>
            <li><a href="#" data-page="3">4</a></li>
            <li><a href="#" data-page="4">5</a></li>
            <li class="next"><a href="#" data-page="1">»</a></li></ul>
        </li>

      </ul>



    </div>

    <!-- sf-left end -->

    <!-- sf-right start -->
    <div class="col-md-4 sf-right">


      <ul class="list-group sf-box">
        <li class="list-group-item">
          <img class="img-circle" src="https://cdn-2.yi-you.org/avatar/4202ee83f0d8a3944c4b72dd/1517467566.jpg!forum.avatar.normal" alt="娜娜"> <a href="/forum/index.php?r=user%2Fview&amp;userid=777">娜娜</a> <span class="user-level user-level-2">V2 [ 铜牌会员 ]</span>        <ul class="list-inline text-center favorite-list">
            <li><a href="#">0<br><span class="gray">板块收藏</span></a></li>
            <li><a href="#">1<br><span class="gray">主题收藏</span></a></li>
            <li><a href="/#">0<br><span class="gray">特别关注</span></a></li>
          </ul>
        </li>
        <li class="list-group-item"><a href="#"><i class="fa fa-pencil"></i>发表新主题</a> <a href="#"><i class="fa fa-envelope"></i>发送私信</a></li>
        <li class="list-group-item">
          <span class="fr">
            <a class="btn btn-xs node" href="#">21<i class="fa fa-trophy silver" aria-hidden="true"></i>88<i class="fa fa-trophy copper" aria-hidden="true"></i></a>
          </span>
          <a href="#"><i class="fa fa-bell-o"></i>0 条提醒</a>
        </li>
      </ul>
      <ul class="list-group sf-box">
        <li class="list-group-item"><a href="#"><i class="fa fa-gift" aria-hidden="true"></i>每日签到</a></li>
      </ul>

      <div class="panel panel-default sf-box">
        <div class="panel-heading gray">社区运行状况</div>
        <div class="panel-body">
          <span class="si-label">注册会员:</span><span class="si-info">6624</span>
          <span class="si-label">板块:</span><span class="si-info">4</span>
          <span class="si-label">主题:</span><span class="si-info">123</span>
          <span class="si-label">回复:</span><span class="si-info">761</span>
        </div>
      </div>
    </div>
    <!-- sf-right end -->
    <div class="col-md-2"></div>

  </div>

  <script src="../js/question/jquery-1.12.2.min.js"></script>
  <script src="../js/question/yii.js"></script>
  <script src="../js/question/jquery.lazyload.min.js"></script>
  <script src="../js/question/simpleforum.js"></script>
  <script src="../package/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</div>

</body>
</html>