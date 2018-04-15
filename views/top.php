<head>
  <link rel="stylesheet" href="../css/top.css">
</head>
<body>
<div class="header">
  <div class="col-md-1"></div>
  <div class="col-md-11">
    <div class="header-left">
      <img src="../images/logo2.png" alt="" onclick="toIndex()">
    </div>
    <ul class="header-center">
      <li class="header-tab <?php if ($tab == 'index') echo 'active' ?>"
          onclick="<?php if ($tab != 'index') echo "toIndex()" ?>">
        首页
      </li>
      <li class="header-tab <?php if ($tab == 'scenic') echo 'active' ?>"
          onclick="<?php if ($tab != 'scenic') echo "toScenic()" ?>">
        目的地
      </li>
      <li class="header-tab <?php if ($tab == 'strategy') echo 'active' ?>"
          onclick="<?php if ($tab != 'strategy') echo "toStrategy()" ?>">
        攻略汇
      </li>
      <li class="header-tab dropdown martDropdown <?php if ($tab == 'mall') echo 'active' ?>">
        <div class="dropdown-toggle" id="dropdownMart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
             onclick="<?php if ($tab != 'mall') echo "toMall()" ?>">
          享商城
          <span class="caret"></span>
        </div>
        <ul class="dropdown-menu" aria-labelledby="dropdownMart">
          <li><a onclick="toGentuanyou()">跟团游</a></li>
          <li><a onclick="toDangdiyou()">当地游</a></li>
          <li><a onclick="toVisa()">签证</a></li>
          <li><a onclick="toCruise()">邮轮</a></li>
        </ul>
      </li>
      <li class="header-tab <?php if ($tab == 'hotel') echo 'active' ?>"
          onclick="<?php if ($tab != 'hotel') echo "toHotel()" ?>">
        酒店
      </li>
      <li class="header-tab dropdown societyDropdown <?php if ($tab == 'travel') echo 'active' ?>">
        <div class="dropdown-toggle" id="dropdownSociety" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="true"
             onclick="<?php if ($tab != 'travel') echo 'toTravel()' ?>">
          驴友社
          <span class="caret"></span>
        </div>
        <ul class="dropdown-menu" aria-labelledby="dropdownSociety">
          <li><a onclick="toTravel()">驴友记</a></li>
          <li><a onclick="toQuestion()">问答</a></li>
          <li><a onclick="toMyTips()">驴友小贴士</a></li>
          <li><a onclick="toJifen()">积分中心</a></li>
        </ul>
      </li>
    </ul>
    <div class="header-search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="搜索目的地/攻略">
        <span class="input-group-btn">
        <button class="btn btn-default btn-search" type="button"><span
            class="glyphicon glyphicon-search"></span></button>
      </span>
      </div>
    </div>
    <div class="header-right ">
      <div class="login-or-reg">
        <span class="to-login" onclick="toLogin()">登陆</span>
        /
        <span class="to-reg" onclick="toRegister()">注册</span>
      </div>
      <div class="show-name dropdown">
        <div class="hello dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
             id="dropdownMenu1"></div>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a onclick="toMyCenter()">个人中心</a></li>
          <li role="separator" class="divider"></li>
          <li data-toggle="modal" data-target="#layoutModal"><a>退出</a></li>
        </ul>
      </div>
      <div class="modal fade" id="layoutModal" tabindex="-1" role="dialog" aria-labelledby="lagoutModalLabel">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="lagoutModalLabel">提示</h4>
            </div>
            <div class="modal-body">
              确认登出吗？
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
              <button type="button" class="btn btn-primary" onclick="lagout()">确定</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--<div class="gouwuche">-->
<!--  <div class="gouwuche-header">-->
<!--    <img src="../images/gouwuche.png" alt="">-->
<!--    <span class="count"></span>-->
<!--  </div>-->
<!--  <div class="gouwuche-content">-->
<!---->
<!--  </div>-->
<!--</div>-->
</body>

<script>
  (function () {
    var loginOrReg = document.getElementsByClassName('login-or-reg')[0];
    var showName = document.getElementsByClassName('show-name')[0];
    var hello = document.getElementsByClassName('hello')[0];
    var username = localStorage.getItem('user_name');
    if (username) {
      showName.style.display = 'block';
      hello.innerHTML = '<span>你好，' + username + '</span>' + '<span class="caret"></span>';
    } else {
      loginOrReg.style.display = 'block';
    }
//    refreshGouwuche();
  })();

  $('li.martDropdown').mouseover(function () {
    $(this).addClass('open');
  }).mouseout(function () {
    $(this).removeClass('open');
  });

  $('li.societyDropdown').mouseover(function () {
    $(this).addClass('open');
  }).mouseout(function () {
    $(this).removeClass('open');
  });

  function toLogin() {
    window.location.href = "./login.php";
  }

  function toRegister() {
    window.location.href = "./register.php";
  }

  function toIndex() {
    window.location.href = "./index.php";
  }

  function toScenic() {
    window.location.href = "./scenic.php";
  }


  function toStrategy() {
    window.location.href = "./strategy.php";
  }

  function toMall() {
    window.location.href = "./mall.php";
  }

  function toGentuanyou() {
    window.location.href = './gentuanyou.php';
  }

  function toDangdiyou() {
    window.location.href = './dangdiyou.php';
  }

  function toVisa() {
    window.location.href = './visa.php';
  }

  function toCruise() {
    window.location.href = './cruise.php';
  }

  function toTravel() {
    window.location.href = './society_travel.php';
  }

  function toQuestion() {
    window.location.href = './question.php';
  }

  function toMyTips() {
    window.location.href = './society_remind.php';
  }

  function toJifen() {
    window.location.href = './jifen.php';
  }

  function lagout() {
    toastr.success('您已退出！');
    localStorage.removeItem('user_name');
    window.location.href = "./login.php";
  }

  function toMyCenter() {
    window.location.href = './my_center.php';
  }

  /**
   * 刷新购物车统计
   * 购物车信息保存在localStorage中，结构如下
   * goodsList: [{
   *  name: xx,
   *  content: {
   *    任意
   *  }
   * }]
   */

//  function refreshGouwuche() {
//    var goodsList = window.localStorage.goodsList;
//    var length = 0;
//    if (goodsList) {
//      length = goodsList.length;
//    }
//    document.getElementsByClassName('count')[0].innerText = length;
//  }
//
//  window.refreshGouwuche = refreshGouwuche;


</script>
