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
  <script src="../package/jVectorMap/jquery-jvectormap-cn-mill.js"></script>
  <link rel="stylesheet" href="../package/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
</head>
<body>
<?php
$tab = 'center';
?>
<?php require 'top.php' ?>
<div class="my-center">
  <div id="big-map">
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
<section class="cd-faq">
  <ul class="cd-faq-categories">
    <li><a class="selected" href="#basics"> 我的订单</a></li>
    <li><a href="#day1">我的收藏</a></li>
    <li><a href="#day2">我的回答</a></li>
    <li><a href="#day3">我的兑换</a></li>
    <li><a href="#day4">常用信息</a></li>
  </ul> <!-- cd-faq-categories -->
  <div class="cd-faq-items">
    <ul id="basics" class="cd-faq-group">
      <li class="cd-faq-title"><h2>我的订单</h2></li>
      <li>
        <div class="cd-faq-content">
          <table class="order-hd">
            <tbody>
            <tr>
              <th class="td-info">订单信息</th>
              <th class="td-date">行程日期</th>
              <th class="td-cost">支付金额</th>
              <th class="td-status">订单状态</th>
              <th class="td-operate">操作</th>
            </tr>
            </tbody>
          </table>
          <table class="order-item">
            <caption>
                <span class="num">
                  订单号：<a>2399942201804157197722</a>
                </span>
              <span class="time">下单时间：2018-04-15 13:21:08</span>
              <span class="telphone">联系电话：4006588799转3543</span>
            </caption>
            <tbody>
            <tr>
              <td class="td-info">
                <a class="pro-img">
                  <img
                    src="../images/order/1.jpeg">
                </a>
                <div class="pro-detail">
                  <p class="title" title="">【拒签全退】香港直飞日本大阪+东京+京都+富士山6天5晚跟团游（含签证+无自费+保证1晚温泉酒店+本愿寺+大阪城公园+豪华自助餐
                  </p>
                  <p class="sub" title="成人 × 1">成人 × 1</p>
                </div>
              </td>
              <td class="td-date">
                <p>出行日期：2018-04-26</p>
              </td>
              <td class="td-cost">
                <strong>￥5580</strong></td>
              <td class="td-status">
                <p class="s0">
                  已关闭
                </p>
              </td>
              <td class="td-operate">
                <a class="btn">
                  重新购买
                </a>
                <a class="btn">
                  联系客服
                </a>
                <a>
                  删除订单
                </a>
                <a>
                  查看订单
                </a>
              </td>
            </tr>
            </tbody>
          </table>
          <table class="order-item">
            <caption>
                <span class="num">
                  订单号：<a>2293018201804157195961</a>
                </span>
              <span class="time">下单时间：2018-04-15 11:00:31</span>
              <span class="telphone">联系电话：4006588799转3543</span>
            </caption>
            <tbody>
            <tr>
              <td class="td-info">
                <a class="pro-img">
                  <img
                    src="../images/order/2.jpeg">
                </a>
                <div class="pro-detail">
                  <p class="title" title="">【丽星邮轮处女星号】上海往返日本8天7晚邮轮之旅（暑期预售+家庭出游）
                  </p>
                  <p class="sub" title="成人 × 1">成人 × 2</p>
                </div>
              </td>
              <td class="td-date">
                <p>出行日期：2018-07-29</p>
              </td>
              <td class="td-cost">
                <strong>￥10198</strong></td>
              <td class="td-status">
                <p class="s0">
                  已关闭
                </p>
              </td>
              <td class="td-operate">
                <a class="btn">
                  重新购买
                </a>
                <a class="btn">
                  联系客服
                </a>
                <a>
                  删除订单
                </a>
                <a>
                  查看订单
                </a>
              </td>
            </tr>
            </tbody>
          </table>
          <table class="order-item">
            <caption>
                <span class="num">
                  订单号：<a>2146926201803286905361</a>
                </span>
              <span class="time">下单时间：2018-03-28 14:26:29</span>
              <span class="telphone">联系电话：4006588799转3543</span>
            </caption>
            <tbody>
            <tr>
              <td class="td-info">
                <a class="pro-img">
                  <img
                    src="../images/order/3.gif">
                </a>
                <div class="pro-detail">
                  <p class="title" title="">【美国维多利亚游轮美维系列】重庆出发长江三峡4天3晚游轮之旅（五星邮轮零购物产品）
                  </p>
                  <p class="sub" title="成人 × 1">成人 × 1</p>
                </div>
              </td>
              <td class="td-date">
                <p>出行日期：2018-03-31</p>
              </td>
              <td class="td-cost">
                <strong>￥1599</strong></td>
              <td class="td-status">
                <p class="s0">
                  已支付
                </p>
              </td>
              <td class="td-operate">
                <a class="btn">
                  重新购买
                </a>
                <a class="btn">
                  联系客服
                </a>
                <a>
                  删除订单
                </a>
                <a>
                  查看订单
                </a>
              </td>
            </tr>
            </tbody>
          </table>
        </div> <!-- cd-faq-content -->
      </li>
    </ul> <!-- cd-faq-group -->

    <ul id="day1" class="cd-faq-group" style="display: none">
      <li class="cd-faq-title"><h2>我的收藏</h2></li>
      <li>
        <div class="cd-faq-content">
          <ul class="favlist">
            <li class="post_item">
              <div class="pic">
                <img src="../images/my_favorite/2.jpeg" alt="">
              </div>
              <div class="info">
                <h2>【跟着英剧镜头 玩转不列颠】独家英剧取景</h2>
                <div class="author">
                  <p class="authorA">
                    作者：<a>麦兜</a>,
                  </p>
                  <p class="authorB">回复：<a>麦兜</a>. 2017-02-21 15:16:31</p>
                </div>
                <div class="post_info">
                  <p>在这座孤傲地矗立在 欧洲 大陆之外的岛屿上，诞生了足以影响世界文明进程的伟大国家。 尽管昨日的辉煌已经驶离，这个曾经扮演了几百年世界中心的王国依然用自己的文化诠释着荣誉与传统，引领着无二不群的潮流。
                    阴暗</p>
                </div>
              </div>
            </li>
            <li class="post_item">
              <div class="pic">
                <img src="../images/my_favorite/3.jpeg" alt="">
              </div>
              <div class="info">
                <h2>只为那漫山野杏花，自驾新疆十六日</h2>
                <div class="author">
                  <p class="authorA">
                    作者：<a>孟夕</a>,
                  </p>
                  <p class="authorB">回复：<a>一路</a>. 2017-02-21 15:16:31</p>
                </div>
                <div class="post_info">
                  <p>16天的 新疆 自驾，被抓进派出所，在高原上发烧，在无人区陷车，暴雪夜在 独库公路
                    行驶三分之二却因封路住进巨简陋的招待所第二天又因暴雪折返，负重在泥浆中徒步去拍天鹅后内存卡损坏，骑马进山一小时拍野杏花后徒</p>
                </div>
              </div>
            </li>
            <li class="post_item">
              <div class="pic">
                <img src="../images/my_favorite/4.jpeg" alt="">
              </div>
              <div class="info">
                <h2>雪线之下无风景，路绳之上皆兄弟——北京大</h2>
                <div class="author">
                  <p class="authorA">
                    作者：<a>北大</a>,
                  </p>
                  <p class="authorB">回复：<a>吴小</a>. 2017-02-21 15:16:31</p>
                </div>
                <div class="post_info">
                  <p>1那个关于雪山的永久的梦想永远留在心里 没有什么风沙能将它打磨褪色 这不仅是关于攀登 也是关于成长与爱，关于生命与自由。 ——《八千米生命高度》 这大概是蚂蜂窝有史以来最与众不同的一篇游记。
                    这不是一个人的故</p>
                </div>
              </div>
            </li>
            <li class="post_item">
              <div class="pic">
                <img src="../images/my_favorite/5.jpeg" alt="">
              </div>
              <div class="info">
                <h2>新疆行记｜人生何处不相逢</h2>
                <div class="author">
                  <p class="authorA">
                    作者：<a>枝别</a>,
                  </p>
                  <p class="authorB">回复：<a>呈筱斯</a>. 2017-02-21 15:16:31</p>
                </div>
                <div class="post_info">
                  <p> 认识我们学设计的小伙伴Henry的时候，我正提着硕大的箱子从车站赶到酒店，一夜的火车已经十分疲惫
                    ，刚放下箱子没多久，酒店的监察大叔就过来找我，说大堂有个小伙子问我要不要去胡杨林，我迅速地洗了脸刷了牙走到</p>
                </div>
              </div>
            </li>
          </ul>
        </div> <!-- cd-faq-content -->
      </li>

    </ul> <!-- cd-faq-group -->

    <ul id="day2" class="cd-faq-group" style="display: none">
      <li class="cd-faq-title"><h2>我的问答</h2></li>
      <li>
        <div class="cd-faq-content">
          <div class="wd-total">
            共有8个回答
          </div>
          <div class="wd-list">
            <div class="wd-item">
              <div class="wd-title">
                <span class="label-mdd">秦皇岛</span>
                五一去秦皇岛玩2天能花多少钱
              </div>
              <div class="wd-detail">
                五一想和小伙伴去秦皇岛玩2天，想去风景好的地方，一个人大概能花费多少
              </div>
            </div>
            <div class="wd-item">
              <div class="wd-title">
                <span class="label-mdd">秦皇岛</span>
                燕塞湖四月末可以去吗？
              </div>
              <div class="wd-detail">
                秦皇岛的燕塞湖现在可以去吗？听说封山，四月末可以爬角山长城吗？
              </div>
            </div>
            <div class="wd-item">
              <div class="wd-title">
                <span class="label-mdd">秦皇岛</span>
                秦皇岛哪里有农家院～～可以陪同出海打鱼，住宿，最好有自己的私人沙滩
              </div>
              <div class="wd-detail">
                五月份想带着家人去秦皇岛玩，想找一个有自己的私人海滩，可以一起出海打鱼，吃海鲜的～～不知道有吗？或者导航导秦皇岛哪里，具体点的位置～谢谢推荐
              </div>
            </div>
            <div class="wd-item">
              <div class="wd-title">
                <span class="label-mdd">秦皇岛</span>
                秦皇岛阿那亚预约问题
              </div>
              <div class="wd-detail">
                请问一下 秦皇岛阿那亚如果不预约游客的话能进入嘛 另外就是秦皇岛有哪些值得一去的地方？
              </div>
            </div>
            <div class="wd-item">
              <div class="wd-title">
                <span class="label-mdd">秦皇岛</span>
                杭州有去秦皇岛的轮渡吗
              </div>
              <div class="wd-detail">
              </div>
            </div>
          </div>
        </div> <!-- cd-faq-content -->
      </li>
    </ul> <!-- cd-faq-group -->

    <ul id="day3" class="cd-faq-group" style="display: none">
      <li class="cd-faq-title"><h2>我的兑换</h2></li>
      <li>
        <div class="cd-faq-content">

        </div> <!-- cd-faq-content -->
      </li>
    </ul> <!-- cd-faq-group -->

    <ul id="day4" class="cd-faq-group" style="display: none">
      <li class="cd-faq-title"><h2>常用信息</h2></li>
      <li>
        <div class="cd-faq-content">
          <div class="content">
            <div class="hd">
              <strong>我的信息</strong>
            </div>

            <div class="userinfo">
              <form action="" method="post" id="_j_form">
                <div class="my-avatar">
                  <img src="../images/touxiang.jpeg" alt="">
                  <span class="upload">选择图片</span>
                  <input type="file" id="upload-avatar">
                </div>
                <dl class="clearfix">
                  <dt>名号：</dt>
                  <dd><input type="text" name="name" value="wuli思密达达达达达" maxlength="16" autocomplete="off"></dd>
                </dl>
                <dl class="clearfix">
                  <dt>性别：</dt>
                  <dd>
                    <label><span class="cssradio"><input type="radio" name="gender"
                                                         value="1"><span></span></span>男</label>
                    <label><span class="cssradio"><input type="radio" name="gender" value="0"
                                                         checked="true"><span></span></span>女</label>
                    <label><span class="cssradio"><input type="radio" name="gender"
                                                         value="2"><span></span></span>保密</label>
                  </dd>
                </dl>
                <dl class="clearfix">
                  <dt>居住城市：</dt>
                  <dd>
                    <div class="input-group">
                      <input type="hidden" name="citymddid" value="0" autocomplete="off">
                      <input type="text" name="city" value="黄浦区" autocomplete="off">
                    </div>
                  </dd>
                </dl>
                <dl class="clearfix">
                  <dt>出生日期：</dt>
                  <dd>
                    <input type="text" value="2018-04-15" id="datetimepicker">
                  </dd>
                </dl>
                <dl class="clearfix">
                  <dt>个人简介：</dt>
                  <dd><textarea name="intro" placeholder="例：摄影师/旅居澳洲/潜水爱好者"
                                maxlength="100"></textarea></dd>
                </dl>
                <dl class="clearfix">
                  <dt>收货地址：</dt>
                  <dd class="myaddress">
                    <a>新增收货地址</a>
                  </dd>
                </dl>
                <dl class="clearfix">
                  <dt></dt>
                  <dd class="tips">
                    <p class="title"><b>**</b>提示信息<b>**</b></p>
                    <p>如果您在驴享网活动中获得奖品，我们将按照该收货地址发送奖品，
                      所以请填写 真实有效 的收货信息。</p>
                  </dd>
                </dl>
                <dl class="clearfix">
                  <div class="btn-sub">
                    <button type="submit">保存</button>
                  </div>
                </dl>
              </form>
            </div>

          </div>
        </div> <!-- cd-faq-content -->
      </li>
    </ul> <!-- cd-faq-group -->
  </div> <!-- cd-faq-items -->
  <a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="../js/center/main.js"></script>
<?php require 'footer.php' ?>
</body>
</html>
<script src="../package/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="../package/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script>
  $('#datetimepicker').datetimepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    minView: 2
  });

  var $upload = document.getElementsByClassName('upload')[0];
  $upload.addEventListener('click', function () {
    var $input = document.getElementById('upload-avatar');
    $input.click();
  });

  $(function () {
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
    });
  });

</script>