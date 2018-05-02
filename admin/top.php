<head>
    <link rel="stylesheet" href="./top.css">
</head>
<body>
<div class="header">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <div class="header-left">
                <img src="../images/logo2.png">
                <span class="title">后台管理系统</span>
            </div>
            <ul class="header-center">
                <li class="header-tab <?php if ($tab == 'user') echo 'active' ?>"
                    onclick="<?php if ($tab != 'user') echo "toUser()" ?>">
                    会员管理
                </li>
                <li class="header-tab <?php if ($tab == 'message') echo 'active' ?>"
                    onclick="<?php if ($tab != 'message') echo "toMessage()" ?>">
                    信息发布
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    function toUser() {
      window.location.href = './user.php';
    }

    function toMessage() {
      window.location.href = './message.php';
    }
</script>
</body>