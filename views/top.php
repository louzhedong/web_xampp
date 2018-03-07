<head>
  <link rel="stylesheet" href="../css/top.css">
</head>
<body>
<div class="header">
  <div class="header-wrap">
    <div class="header-left">
      logo
    </div>
    <ul class="header-center">
      <li class="header-tab <?php if ($tab == 'index') echo 'active' ?>" onclick="<?php if ($tab != 'index') echo "toIndex()"?>">
        首页
      </li>
      <li class="header-tab <?php if ($tab == 'scenic') echo 'active' ?>" onclick="<?php if ($tab != 'scenic') echo "toScenic()"?>">
        景点汇
      </li>
      <li class="header-tab <?php if ($tab == 'strategy') echo 'active' ?>" onclick="<?php if ($tab != 'strategy') echo "toStrategy()"?>">
        攻略汇
      </li>
      <li class="header-tab <?php if ($tab == 'mart') echo 'active' ?>" onclick="<?php if ($tab != 'mart') echo "toMart()"?>">
        享商城
      </li>
      <li class="header-tab <?php if ($tab == 'hotel') echo 'active' ?>" onclick="<?php if ($tab != 'hotel') echo "toHotel()"?>">
        酒店
      </li>
    </ul>
    <div class="header-right ">
      <div class="login-or-reg">
        <span class="to-login" onclick="toLogin()">登陆</span>
        /
        <span class="to-reg" onclick="toRegister()">注册</span>
      </div>
      <div class="show-name dropdown">
        <div class="hello dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" id="dropdownMenu1"></div>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a>个人中心</a></li>
          <li role="separator" class="divider"></li>
          <li onclick="lagout()"><a>退出</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>

<script>
  (function () {
    var username = localStorage.getItem('user_name');
    if (!username) {
      window.location.href = "./login.php";
    }
    var loginOrReg = document.getElementsByClassName('login-or-reg')[0];
    var showName = document.getElementsByClassName('show-name')[0];
    var hello = document.getElementsByClassName('hello')[0];
    var username = localStorage.getItem('user_name');
    if (username) {
      showName.style.display = 'block';
      hello.innerHTML = '你好，' + username;
    } else {
      loginOrReg.style.display = 'block';
    }
  })()

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

  function toMart() {
    window.location.href = "./mart.php";
  }

  function toHotel() {
    window.location.href = "./hotel.php";
  }
  
  function lagout() {
    toastr.success('您已退出！');
    localStorage.removeItem('token');
    localStorage.removeItem('uesr_name');
    window.location.href = "./login.php";
  }

</script>
