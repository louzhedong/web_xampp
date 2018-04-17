<?php
// 商城top
?>

<head>
  <link rel="stylesheet" href="../css/scenicdetail_top.css">
</head>


<div class="scenic-top">
  <div class="mall-top-search">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <div class="title">泰国</div>
        <div class="subtitle">Thailand</div>
      </div>

      <div class="col-md-8"></div>
    </div>
  </div>
  <div class="mall-wrap">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="mall-nav">
          <div class="mall-tab <?php if ($mall_tab == 'gailan') {echo 'active';}?>"
               onclick="<?php if ($mall_tab!= 'gailan') echo "toscenicdetail_gailan()" ?>">概览</div>
          <div class="mall-tab <?php if ($mall_tab == 'guide') {echo 'active';}?>"
               onclick="<?php if ($mall_tab != 'guide') echo "toscenicdetail_guide()" ?>">目的地指南</div>
          <div class="mall-tab <?php if ($mall_tab == 'hot_scenic') {echo 'active';}?>"
               onclick="<?php if ($mall_tab != 'hot_scenic') echo "toscenicdetail_scenic()" ?>">热门景点</div>
          <div class="mall-tab <?php if ($mall_tab == 'relate') {echo 'active';}?>"
               onclick="<?php if ($mall_tab != 'relate') echo "toscenicdetail_relate()" ?>">相关驴友记</div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>

<script>
  function toscenicdetail_gailan() {
    window.location.href = './scenicdetail_gailan.php';
  }

  function toscenicdetail_guide() {
    window.location.href = './scenicdetail_guide.php';
  }

  function toscenicdetail_scenic() {
    window.location.href = './scenicdetail_scenic.php';
  }

  function toscenicdetail_relate() {
    window.location.href = './scenicdetail_relate.php';
  }

</script>

