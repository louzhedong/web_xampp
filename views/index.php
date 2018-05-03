<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>首页</title>
  <link rel="stylesheet" href="../css/index.css">
    <?php require 'link.php' ?>
</head>
<body>
<?php
$tab = 'index'
?>
<?php require 'top.php' ?>
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
        <img src="../images/index/carousel/carousel1.jpeg" alt="...">
        <div class="carousel-caption" onclick="tosociety_travel_detail()">
          <span class="date">2/2018</span>【跟着英剧镜头 玩转不列颠】独家英剧取景地打卡、唐顿庄园复古Vintage穿搭、超赞民宿
        </div>
      </div>
      <div class="item">
        <img src="../images/index/carousel/carousel2.jpeg" alt="...">
        <div class="carousel-caption">
          <span class="date">3/2018</span>只为那漫山野杏花，自驾新疆十六日
        </div>
      </div>
      <div class="item">
        <img src="../images/index/carousel/carousel3.jpeg" alt="...">
        <div class="carousel-caption" onclick="tosociety_travel_detail()">
          <span class="date">4/2018</span>夜夜夜新加坡，越夜越HAPPY，新加坡夜色大狂欢
        </div>
      </div>
      <div class="item">
        <img src="../images/index/carousel/carousel4.jpeg" alt="...">
        <div class="carousel-caption" onclick="tosociety_travel_detail()">
          <span class="date">5/2018</span>雪线之下无风景，路绳之上皆兄弟
        </div>
      </div>
      <div class="item">
        <img src="../images/index/carousel/carousel5.jpeg" alt="...">
        <div class="carousel-caption">
          新疆行记|人生何处不相逢
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- search-box -->
  <div class="search-box">
    <input type="text" class="search-input" placeholder="我想去...">
    <span class="search-btn">
      <span class="glyphicon glyphicon-search"></span>
    </span>
  </div>
</div>


<div class="index-body">
  <div class="row" style="margin-right: 0;margin-left: 0;">
    <div class="col-md-1"></div>
    <div class="col-md-7">
      <div class="flash-sell">
        <div class="flash-sell-header">
          <span class="left">每日特卖</span>
          <span class="right">每天给您最优惠的团购路线</span>
          <span class="righter" onclick="tomall()">
            更多<span class="glyphicon glyphicon-send"></span>
          </span>
        </div>
        <div class="flash-sell-content">
          <div class="flash-sell-item">
            <img src="../images/good/5.jpeg" alt="">
            <div class="describe">
              <div class="describe-inner">
                迪拜Atlantis亚特兰蒂斯酒店（含早餐+晚餐+增值税+服务费+酒店税费，可免费进入水世界/水族馆)（豪华房/海景房/棕榈岛房任选）
              </div>
            </div>
            <div class="price">
              <span class="number">￥2392</span>
              <span class="word">元起</span>
            </div>
          </div>
          <div class="flash-sell-item">
            <img src="../images/index/1-1.jpg" alt="">
            <div class="describe">
              <div class="describe-inner">
                柬埔寨暹粒吴哥窟5-6日4晚自由行·『北京直飞』 高评酒店+早航班多玩一天 度假优选 暑期预售
              </div>
            </div>
            <div class="price">
              <span class="number">￥3522</span>
              <span class="word">元起</span>
            </div>
          </div>
          <div class="flash-sell-item">
            <img src="../images/index/1-2.jpg" alt="">
            <div class="describe">
              <div class="describe-inner">
                以色列耶路撒冷+伯利恒+约旦安曼+死海11日8晚跟团游·【一价全含景点全】【精选四星+亚喀巴/死海升级卓越五星】【迦南美地+沙漠玫瑰】
              </div>
            </div>
            <div class="price">
              <span class="number">￥12990</span>
              <span class="word">元起</span>
            </div>
          </div>
        </div>
      </div>
      <br/>
      <div class="flash-sell">
        <div class="flash-sell-header">
          <span class="left">精品特选</span>
          <span class="right">精心为您挑选最优品质</span>
          <span class="righter" onclick="togentuanyou()">
            更多<span class="glyphicon glyphicon-send"></span>
          </span>
        </div>
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a aria-controls="all" href="#all" role="tab" data-toggle="tab">跟团游</a>
          </li>
          <li role="presentation"><a aria-controls="mall_detail" href="#mall_detail" role="hot"
                                     data-toggle="tab">当地游</a></li>
          <li role="presentation"><a aria-controls="banzizhuyou" href="#banzizhuyou" role="tab" data-toggle="tab">签证</a>
          </li>
          <li role="presentation"><a aria-controls="ziyouxing" href="#banzizhuyou" role="tab" data-toggle="tab">邮轮</a>
          </li>
        </ul>
        <div class="flash-sell-content">
          <div class="flash-sell-item">
            <img src="../images/index/2-1.jpg" alt="">
            <div class="describe">
              <div class="describe-inner">
                广西桂林+阳朔+漓江5日4晚跟团游(5钻)·VIP头等舱游全江大美梯田+攻略热搜十里画廊、全程酒店不备选大公馆+高标椿记+民族风味自助 赠礼
              </div>
            </div>
            <div class="price">
              <span class="number">￥2500</span>
              <span class="word">元起</span>
            </div>
          </div>
          <div class="flash-sell-item">
            <img src="../images/index/2-2.jpg" alt="">
            <div class="describe">
              <div class="describe-inner">
                华东5市+乌镇6日5晚跟团游(4钻)·枕乌镇&升1晚5星&餐标50&精华全含 西湖&山塘河双游船+听苏州评弹 精选0购物 千人好评 双飞
              </div>
            </div>
            <div class="price">
              <span class="number">￥3299</span>
              <span class="word">元起</span>
            </div>
          </div>
          <div class="flash-sell-item">
            <img src="../images/index/2-3.jpg" alt="">
            <div class="describe">
              <div class="describe-inner">
                阿联酋迪拜+阿布扎比5日4晚跟团游(5钻)·【A380双层客机直飞】【特色阿拉伯餐】【B线升级6星亚特】
              </div>
            </div>
            <div class="price">
              <span class="number">￥5199</span>
              <span class="word">元起</span>
            </div>
          </div>
        </div>
      </div>
      <br/>
      <div class="flash-sell">
        <div class="flash-sell-header">
          <span class="left">去哪儿</span>
          <span class="right">热门目的地看这里</span>
          <span class="righter" onclick="toscenic()">
            更多<span class="glyphicon glyphicon-send"></span>
          </span>
        </div>
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a aria-controls="all" href="#all" role="tab" data-toggle="tab">当季游</a>
          </li>
          <li role="presentation"><a aria-controls="mall_detail" href="#mall_detail" role="hot"
                                     data-toggle="tab">国内游</a></li>
          <li role="presentation"><a aria-controls="banzizhuyou" href="#banzizhuyou" role="tab"
                                     data-toggle="tab">国外游</a></li>
          <li role="presentation"><a aria-controls="ziyouxing" href="#banzizhuyou" role="tab" data-toggle="tab">主题精选</a>
          </li>
        </ul>
        <div class="goto-content">
          <img src="../images/index/3-1.jpeg" alt="">
          <span style="font-size: 30px">1. 泰国<a style="font-size: 14px;color: #fff"> 泼水节你敢来吗！</a></span>
        </div>
        <ul class="to-where-list fr">
          <li>
            <a onclick="toscenicdetail_gailan()">
              <span class="to-where-list-desc">
                <span class="to-where-list-name">2.婺源</span>极美的风光画卷</span>
              <span class="glyphicon glyphicon-heart" style="color: #ff9d00" aria-hidden="true"></span>
              <span class="to-where-love">
                24817
              </span>
            </a>
          </li>
          <li>
            <a onclick="toscenicdetail_gailan()">
              <span class="to-where-list-desc">
                <span class="to-where-list-name">3.武汉</span>漫天飞樱，美不胜收</span>
              <span class="glyphicon glyphicon-heart" style="color: #ff9d00" aria-hidden="true"></span>
              <span class="to-where-love">
                69010
              </span>
            </a>
          </li>
          <li>
            <a onclick="toscenicdetail_gailan()">
              <span class="to-where-list-desc">
                <span class="to-where-list-name">4.无锡</span>花开太湖佳绝处</span>
              <span class="glyphicon glyphicon-heart" style="color: #ff9d00" aria-hidden="true"></span>
              <span class="to-where-love">
                56145
              </span>
            </a>
          </li>
          <li>
            <a onclick="toscenicdetail_gailan()">
              <span class="to-where-list-desc">
                <span class="to-where-list-name">5.济州岛</span>茶香四溢，海风习习</span>
              <span class="glyphicon glyphicon-heart" style="color: #ff9d00" aria-hidden="true"></span>
              <span class="to-where-love">
                2152
              </span>
            </a>
          </li>
        </ul>
      </div>
      <div class="flash-sell">
        <div class="flash-sell-header">
          <span class="left">精彩驴友记</span>
          <span class="righter" onclick="tosociety_travel()">
            更多<span class="glyphicon glyphicon-send"></span>
          </span>
        </div>
        <div class="hot-travel">
          <a class="item" onclick="tosociety_travel_detail()">
            <div class="image">
              <img src="../images/society/society_travel/t1.jpeg" height="100%">
            </div>
            <div class="detail">
              <div class="info">
                <h3>泰国：FRIENDS六人行，泰美泰国！包含普吉岛自驾、曼谷扫货全攻略</h3>
                <div class="extra">
                  <div class="action">
                    <span class="btn"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></span>
                    <div class="promo-tag">
                    </div>
                  </div>
                </div>
                <p>
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  作者：<span onclick="">wuli思密达达达达达</span>
                  <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                  2369182人阅读过</p>
                <p>
                  <span class="t">提到泰国，大家都会想起什么？阳光、沙滩、大象、人妖……种种之类，泰国的标签实在是太多了！楼主作为一介名副其实的屌丝，第一次出国也是选择泰国作为目的地，不为别的，因为实在是又便宜又好！至今回头看看，这一次已经是第四次踏上泰国的的土地，这么看来又便宜又好当真是名不虚传！</span>
                </p>
              </div>

            </div>
          </a>
          <a class="item" onclick="tosociety_travel_detail()">
            <div class="image">
              <img src="../images/society/society_travel/t2.jpg" height="100%">
            </div>
            <div class="detail">
              <div class="info">
                <h3>古巴：【不为遇见，只为远方】被时光禁锢的--别样古巴Cuba</h3>
                <div class="extra">
                  <div class="action">
                    <span class="btn"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></span>
                    <div class="promo-tag">
                    </div>
                  </div>
                </div>
                <p>
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  作者：<span onclick="">戏眼朦朧￠</span>
                  <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                  435382人阅读过</p>
                <p>
                  <span class="t">古巴位于加勒比海的西北部，是中美洲大安的列斯群岛中最大的岛屿，最北端与美国的佛罗里达州Key West隔海相望，被誉为“墨西哥湾的钥匙”。据《纽约时报》统计，古巴已被列入今年全球十大必游地之一。</span>


                </p>
              </div>

            </div>
          </a>
          <a class="item" onclick="tosociety_travel_detail()">
            <div class="image">
              <img src="../images/index/4-2.jpeg" height="100%">
            </div>
            <div class="detail">
              <div class="info">
                <h3>稻城：色达到稻城，从你的全世界路过</h3>
                <div class="extra">
                  <div class="action">
                    <span class="btn"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></span>
                    <div class="promo-tag">
                    </div>
                  </div>
                </div>
                <p>
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  作者：<span onclick="">空气贝儿</span>
                  <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                  42972人阅读过</p>
                <p>
                  <span class="t">色达和稻城亚丁都是我旅行清单里写了很久，却未能完成的一段遗憾
找个秋天去稻城，这个小愿望终于在10月和几个小伙伴组队完成
也是在这趟旅行里，认识了一个，瞒着老妈去唱k，骗到身份证只身一人来到成都，和我们一起去旅行的不靠谱队友
敲下这篇游记，想以此记录的除了这一路的风景，还有那些发生在旅途中的故事
如此清晰又刻骨铭心！

                </p>
              </div>

            </div>
          </a>
          <a class="item" onclick="tosociety_travel_detail()">
            <div class="image">
              <img src="../images/index/4-3.jpeg" height="100%">
            </div>
            <div class="detail">
              <div class="info">
                <h3>马尔代夫：马尔代夫、迪拜七晚九日自由行</h3>
                <div class="extra">
                  <div class="action">
                    <span class="btn"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></span>
                    <div class="promo-tag">
                    </div>
                  </div>
                </div>
                <p>
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  作者：<span onclick="">shijie,zaizheli</span>
                  <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                  183211人阅读过</p>
                <p>
                  <span class="t">到马尔代夫和迪拜，又是一次临时性起意。

元旦刚过，看到穷游有一款自由行产品，马尔代夫、迪拜七晚九日自由行，虽然价格看上去不低，但恰好是我们没有去过一直计划去的地方，时间长短也比较符合我们的需求。

对于马代和迪拜，我们的认知可能与很多人有些不同。

                </p>
              </div>

            </div>
          </a>
          <a class="item" onclick="tosociety_travel_detail()">
            <div class="image">
              <img src="../images/index/4-4.jpeg" height="100%">
            </div>
            <div class="detail">
              <div class="info">
                <h3>香港：味道香港，最不起眼的米其林推荐</h3>
                <div class="extra">
                  <div class="action">
                    <span class="btn"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></span>
                    <div class="promo-tag">
                    </div>
                  </div>
                </div>
                <p>
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  作者：<span onclick="">开心开心很开心</span>
                  <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                  127639人阅读过</p>
                <p>
                  <span class="t">我曾经在香港，生活了3年。那时候，我总想好好记录生活中的香港，可每一次动笔，都有个小恶魔说，诶，反正来日方长，不如先看个剧好不好。好吧。
于是，直到我，一个人离开我还没为这座城市敲下过一个字。

我以为我对这座城市已经足够了解。可我越深入，才越发现我对它的认知是多么浅薄。

                </p>
              </div>

            </div>
          </a>

        </div>


      </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-2">
      <div class="activity">
        <div class="activity-header">
          最新活动
        </div>

        <div class="activity-item">
          <img src="../images/index/poster1.jpg" alt="">
          <img src="../images/index/poster2.png" alt="">
          <img src="../images/index/poster3.png" alt="">
          <div class="activity-describe">
            <div class="activity-describe-body">
              <marquee direction=up behavior=scroll loop=13 scrollamount=1 scrolldelay=10 align=middle height=150
                       width=80% hspace=20 vspace=10 onmouseover=this.stop() onmouseout=this.start()>
                【五一小长假即将来袭！】
                <br><br>
                如果还没定好去哪里玩，就让我们来帮你！<br>
                可别错过了一年中最惬意的时光！<br>
                <br><br>
                【跟父母一起去远方】
                <br><br>
                每个成长的瞬间，都有他们的陪伴，<br>
                曾经他们把世界带给我们，如今我们将世界呈现给他们。<br>
                日本的古朴、清迈的悠闲、纽约的繁华…<br>
                现在，是你带领他们看世界的时候了！<br>
                <br><br>
                【签证1元起，你还在等什么？】
                <br><br>
                时近暑期，还伴随着清明五一端午节的假日，<br>
                闲不下来的你，是否被想出国耍的思绪搞的心痒痒？<br>
                那不如，我们帮你搞定签证！
              </marquee>
            </div>
          </div>
        </div>
        <div class="strategy-header">
          公告栏
        </div>
        <ul class="notice-list">
        </ul>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="MessageModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">消息</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="col-sm-2"><p class="form-control-static">标题</p></div>
            <div class="col-sm-10">
              <p class="form-control-static" id="title"></p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2"><p class="form-control-static">内容</p></div>
              <div class="col-sm-10">
                <p class="form-control-static" id="content"></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>
    <?php require 'footer.php' ?>

</body>
</html>
<script>
  var messageList = [];
  var chooseMessage = {};
  (function () {
    getMessageList();
  }());

  function toscenicdetail_gailan() {
    window.location.href = './scenicdetail_gailan.php';
  }

  function tosociety_travel_detail() {
    window.location.href = './society_travel_detail.php';
  }

  function tomall() {
    window.location.href = './mall.php';
  }

  function togentuanyou() {
    window.location.href = './gentuanyou.php';
  }

  function toscenic() {
    window.location.href = './scenic.php';
  }

  function tosociety_travel() {
    window.location.href = './society_travel.php';
  }

  function getMessageList() {
    $.ajax({
      type: 'POST',
      url: '../php/message/xiaoxiliebiao.php',
      data: {
        pageNo: 1,
        pageSize: 5
      },
      dataType: 'json',
      success: function (res) {
        if (res.resultCode === 0) {
          var list = res.data.list;
          messageList = res.data.list;
          var tempStr = '';
          list.map(function (item, index) {
            var li = "<li><span class='gray-point'></span><span class='title' onclick='showMessage(" + index + ")'>" +
              item.title + "</span></li>";
            tempStr += li;
          });
          var $tbody = document.getElementsByClassName('notice-list')[0];
          $tbody.innerHTML = tempStr;
          $('[data-toggle="popover"]').popover()
        } else if (res.resultCode !== 0) {
          toastr.warning(res.resultMsg);
        }
      },
      error: function () {
      }
    })
  }

  function showMessage(index) {
    chooseMessage = messageList[index];
    document.getElementById('title').innerHTML = chooseMessage.title;
    document.getElementById('content').innerHTML = chooseMessage.content;
    $('#MessageModal').modal('show');
  }


</script>