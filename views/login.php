<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>用户登陆</title>
	<?php require 'link.php'?>
    <link rel="stylesheet" href="../css/login.css">
    <style>
      * {
        margin: 0; padding: 0;
      }

      body {
        width: 100%;
        height: 100%;
        overflow: hidden;
      }
  </style>
  <script src="../js/login/nlq1kdt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
<div id="container">
  <video id="background_video" loop muted></video>
  <div id="video_cover"></div>
  <div id="overlay"></div>

  <div id="video_controls">
      <span id="play">
        <img src="../images/login/play.png">
      </span>
    <span id="pause">
        <img src="../images/login/pause.png">
      </span>
  </div>
</div>

<script src="../js/login/bideo.js"></script>
<script src="../js/login/main.js"></script>
<div class="container">
  <div class="login-box">
    <div class="login-header">
      <img src="../images/logo1.png" alt="">
      用户登陆
    </div>
    <div class="login-body">
      <form action="" class="form-horizontal">
        <div class="form-group">
          <div>
            <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名"
                   autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <div>
            <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码"
                   autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <button class="btn login-btn" type="button">立即登陆</button>
        </div>
        <div class="form-group fr">
          <label for="">还未注册？ <span class="reg-btn" onclick="toRegister()">去注册</span></label>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
<script>
	// 登陆
  var $loginBtn = $('.login-btn')[0];
  $loginBtn.addEventListener('click', function () {
      var $username = $("input[name='username']")[0];
      var $password = $("input[name='password']")[0];

      var username = $username.value;
      var password = $password.value;

      if (!username) {
          toastr.warning('用户名不能为空！');
          return;
      }
      if (!password) {
          toastr.warning('密码不能为空！');
          return;
      }

      var data = {
          'username': username,
          'password': $.md5(password)
      };

      $.ajax({
          type: 'POST',
          url: '../php/user/login.php',
          data: data,
          dataType: 'json',
          success: function (res) {
              if(res.resultCode === 0) {
                  // 设置用户信息，保存在本地
                  window.localStorage.setItem('user_name', res.data.username);
                  toastr.success('登陆成功！');
                  setTimeout(function () {
                      window.location.href = './index.php';
                  }, 1000);
              } else if (res.resultCode !== 0) {
                  toastr.warning(res.resultMsg);
              }
          },
          error: function () {
              
          }
      })
  }, false);
  
	function toRegister(){
		window.location.href = "./register.php";	
	}
</script>
</html>
