<?php
// 驴友社
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>驴友记</title>
  <link rel="stylesheet" href="../css/society_travel.css">
    <?php require 'link.php' ?>
</head>
<body>
<?php
$tab = 'travel';
?>
<?php require 'top.php' ?>
<div  class="society-travel">
  <div class="background"></div>
  <div class="up-content">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div id="select">
        <div>筛选条件：
          <span class="active" id="select_content">综合</span>
          <span id="select_content">热门</span>
          <span id="select_content">优质文章</span>
        </div>
        <div>热门目的地：
          <span id="select_content">厦门</span>
          <span id="select_content">三亚</span>
          <span id="select_content">北京</span>
          <span id="select_content">香港</span>
          <span id="select_content">澳门</span>
          <span id="select_content">丽江</span>
          <span id="select_content">青岛</span>
          <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <span id="select_content">普吉岛</span>
          <span id="select_content">韩国</span>
          <span id="select_content">瑞士</span>
          <span id="select_content">美国</span>
          <span id="select_content">埃及</span>
          <span id="select_content">马尔代夫</span>
          <span id="select_content">澳大利亚</span>
          <button type="button" class="btn btn-warning" style="float: right;margin-right: 55px">发表游记</button>
        </div>
      </div>
    </div>
    <dic class="col-md-1"></dic>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="gallery-wrapper">
      <article class="white-panel" onclick="toSocietyDetail()">
        <img src="../images/society/society_travel/t1.jpeg" class="thumb">
        <h1>
          <span href="#">泰国：FRIENDS六人行，泰美泰国！包含普吉岛自驾、曼谷扫货全攻略！</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/touxiang.jpeg"><a>娜娜</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t16.jpg" class="thumb">
        <h1>
          <span href="#">德宏：云南德宏目瑙纵歌 | 赴一场盛大的万人狂欢</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/1.jpg"><a>有趣阿瑶</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t2.jpg" class="thumb">
        <h1>
          <span href="#">古巴：【不为遇见，只为远方】被时光禁锢的--别样古巴Cuba</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/2.jpg"><a>戏眼朦朧￠</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t3.jpg" class="thumb">
        <h1>
          <span href="#">东京：东京周边去哪玩？日光、秩父、成田铁路之旅</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/3.jpg"><a>末班车上de回忆</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t4.jpg" class="thumb">
        <h1>
          <span href="#">土耳其：带你去旅行 浪漫土耳其｜吃住行购全解析，附情侣照拍摄指南</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/4.jpg"><a>充斥著雜念′</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t5.jpg" class="thumb">
        <h1>
          <span href="#">巴黎：遇见不一样的【法国】，建筑、街头与城市航拍</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/5.jpg"><a>内心纠结的蜗牛</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t6.jpg" class="thumb">
        <h1>
          <span href="#">荷兰：你说这个周末有点闲 --- 2月 带着爸妈去荷兰 马斯特里赫特/阿姆斯特丹双城记</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/6.jpg"><a>曾經的苦惱╮</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t7.jpg" class="thumb">
        <h1>
          <span href="#">九寨沟：震后的九寨沟，从未离开，待我归来！</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/7.jpg"><a>尽赏五彩世界</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t8.jpg" class="thumb">
        <h1>
          <span href="#">贝加尔湖：冰封三月贝加尔湖，挡不住去野的心</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/8.jpg"><a>一曲幽怨。╮</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t9.jpg" class="thumb">
        <h1>
          <span href="#">玻利维亚：【探云】玻利维亚&秘鲁•云山彼端看云山（19天南美高原游记＋实用攻略+精品摄影）</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/9.jpg"><a>信念主导１切</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t10.jpg" class="thumb">
        <h1>
          <span href="#">菲律宾：「深中菲律宾的蓝毒」宿务-薄荷岛出海记</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/10.jpg"><a>其实我都懂</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t11.jpg" class="thumb">
        <h1>
          <span href="#">陕西：三月平利踏春行，寻找最美乡村的秘密</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/11.jpg"><a>人神控＠_＠</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t12.jpg" class="thumb">
        <h1>
          <span href="#">冰岛：冰岛，Dreamland，与极北之地的第一次邂逅</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/12.jpg"><a>灬cherish丨丶嗳</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t13.jpg" class="thumb">
        <h1>
          <span href="#">新西兰：新西兰第一次就该这么玩，14天南北岛户外体验之旅～</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/13.jpg"><a>逆流的那朵花</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t14.jpg" class="thumb">
        <h1>
          <span href="#">圣淘沙：欢乐圣淘沙，不费力的完美度假地，吃喝玩乐热闹中国年尽在圣淘沙名胜世界！</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/14.jpg"><a>勤儿</a></div>
      </article>
      <article class="white-panel">
        <img src="../images/society/society_travel/t15.jpg" class="thumb">
        <h1>
          <span href="#">呼伦贝尔：【呼伦贝尔】一路向北，解锁北方冬天的9个故事——附冬季穿衣攻略</span>
        </h1>
        <div id="label">
          <span class="glyphicon glyphicon-heart" aria-hidden="true" style="margin-right:20px "> 185</span>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> 101</span>
        </div>
        <div id="user"><img src="../images/society/society_travel/15.jpg"><a>小娜</a></div>
      </article>
    </section>
    <nav aria-label="Page navigation" style="text-align: center;margin-top: 10px">
      <ul class="pagination" id="turn_page">
        <li class="active"><a href="#aaa">1</a></li>
        <li><a href="#aaa">2</a></li>
        <li><a href="#aaa">3</a></li>
        <li><a href="#aaa">4</a></li>
        <li><a href="#aaa">5</a></li>
      </ul>
    </nav>
    <script src="../js/society_travel/jquery-1.11.0.min.js"></script>
    <script src="../js/society_travel/pinterest_grid.js"></script>
    <script type="text/javascript">
      function toSocietyDetail() {
        window.location.href = './society_travel_detail.php';
      }
      $(function () {
        $("#gallery-wrapper").pinterest_grid({
          no_columns: 4,
          padding_x: 10,
          padding_y: 10,
          margin_bottom: 50,
          single_column_breakpoint: 700
        });

      });
    </script>
  </div>

</div>
</body>
</html>
