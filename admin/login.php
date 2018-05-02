<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>管理员登陆</title>
    <?php require '../views/link.php'?>
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
</head>
<body>
<div class="container">
    <video id="background_video" loop muted autoplay>
        <source src="../video/login/night.mp4">
    </video>
    <div class="login-box">
        <div class="login-header">
            <img src="../images/logo1.png" alt="">
            管理员登陆
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
      'password': password
    };

    $.ajax({
      type: 'POST',
      url: '../php/adminLogin.php',
      data: data,
      dataType: 'json',
      success: function (res) {
        if(res.resultCode === 0) {
          // 设置用户信息，保存在本地
          window.sessionStorage.setItem('admin', res.data.username);
          toastr.success('登陆成功！');
          setTimeout(function () {
            window.location.href = './user.php';
          }, 1000);
        } else if (res.resultCode !== 0) {
          toastr.warning(res.resultMsg);
        }
      },
      error: function () {

      }
    })
  }, false);

</script>
</html>
