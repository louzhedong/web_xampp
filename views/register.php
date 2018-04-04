<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>用户注册</title>
	<?php require 'link.php'?>
    <link rel="stylesheet" href="../css/register.css">
  	<style>
    body {
      background-image: url("../images/register/bg2.jpg");
      background-repeat: no-repeat;
      background-size: 100% 100%;
      background-attachment: fixed;
    }
  	</style>
</head>
<body>
<div class="container">
  <div class="register-box">
    <div class="register-header">
      <img src="../images/logo1.png" alt="">
      用户注册
    </div>
    <div class="register-body">
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
          <div>
            <input type="password" class="form-control" name="repassword" id="repassword" placeholder="请输入确认密码"
                   autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <button class="btn register-btn" type="button">立即注册</button>
        </div>
        <div class="form-group fr">
          <label for="">已经注册了？ <span class="login-btn" onclick="toLogin()">马上登录</span></label>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
<script>
	// 注册
    var $regBtn = $('.register-btn')[0];
    $regBtn.addEventListener('click', function () {
        var $username = $("input[name='username']")[0];
        var $password = $("input[name='password']")[0];
        var $repassword = $("input[name='repassword']")[0];
        var username = $username.value;
        var password = $password.value;
        var repassword = $repassword.value;

        if (!username) {
            toastr.warning('用户名不能为空！');
            return;
        }
        if (!password) {
            toastr.warning('密码不能为空！');
            return;
        }
        if (!repassword) {
            toastr.warning('确认密码不能为空！');
            return;
        }
        if (password !== repassword) {
            toastr.warning('两次密码不相同！');
            $password.value = '';
            $repassword.value = '';
            return;
        }
        var data = {
            'username': username,
            'password': $.md5(password)
        };

        $.ajax({
            type: 'POST',
            url: '../php/user/register.php',
            data: data,
            dataType: 'json',
            success: function (data) {
                if (data.resultCode === 0) {
                    toastr.success('注册成功！');
                    setTimeout(function () {
                        window.location.href = "/index/User/login";
                    }, 2000)
                } else if (data.resultCode !== 0) {
                    toastr.error('用户名已存在！');
                    $password.value = '';
                    $repassword.value = '';
                }
            },
            error: function () {

            }
        })
    }, false);
	
	function toLogin() {
		window.location.href = "./login.php";	
	}
</script>
</html>