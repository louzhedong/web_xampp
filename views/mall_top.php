<?php
// 商城top
?>

<head>
  <link rel="stylesheet" href="../css/mall_top.css">
</head>


<div class="mall-top">
  <div class="mall-top-search">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2 title">享商城</div>
      <div class="col-md-6">
        <div class="mall-search">
          <div class="icons glyphicon glyphicon-search"></div>
          <input class="search-input" placeholder="搜索国家、城市、产品"></input>
        </div>
      </div>
      <div class="col-md-2">

      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <div class="mall-wrap">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="mall-nav">
          <div class="mall-tab <?php if ($mall_tab == 'index') {echo 'active';}?>"
               onclick="<?php if ($mall_tab!= 'index') echo "toIndex()" ?>">首页</div>
          <div class="mall-tab <?php if ($mall_tab == 'gentuanyou') {echo 'active';}?>"
               onclick="<?php if ($mall_tab != 'gentuanyou') echo "toGentuanyou()" ?>">跟团游</div>
          <div class="mall-tab <?php if ($mall_tab == 'dangdiyou') {echo 'active';}?>"
               onclick="<?php if ($mall_tab != 'dangdiyou') echo "toDangdiyou()" ?>">当地自助游</div>
          <div class="mall-tab <?php if ($mall_tab == 'qianzheng') {echo 'active';}?>"
               onclick="<?php if ($mall_tab != 'qianzheng') echo "toQianzheng()" ?>">签证</div>
          <div class="mall-tab <?php if ($mall_tab == 'cruise') {echo 'active';}?>"
               onclick="<?php if ($mall_tab != 'cruise') echo "toCruise()" ?>">邮轮</div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>

<script>
  function toIndex() {
    window.location.href = './mall.php';
  }

  function toGentuanyou() {
    window.location.href = './gentuanyou.php';
  }

  function toDangdiyou() {
    window.location.href = './dangdiyou.php';
  }

  function toQianzheng() {
    window.location.href = './qianzheng.php';
  }

  function toCruise() {
    window.location.href = './cruise.php';
  }
</script>

