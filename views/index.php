<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <title>首页</title>
    <link rel="stylesheet" href="../css/index.css">
      <?php require 'link.php'?>
  </head>
  <body>
    <?php
      $tab = 'index'
    ?>
    <?php require 'top.php'?>
  <div>
      <div class="carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="../images/carousel/carousel1.jpeg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
            <div class="item">
              <img src="../images/carousel/carousel2.jpeg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
            <div class="item">
              <img src="../images/carousel/carousel3.jpeg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
            <div class="item">
              <img src="../images/carousel/carousel4.jpeg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
            <div class="item">
              <img src="../images/carousel/carousel5.jpeg" alt="...">
              <div class="carousel-caption">

              </div>
            </div>
            <div class="item">
              <img src="../images/carousel/carousel6.jpeg" alt="...">
              <div class="carousel-caption">

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
      </div>
    </div>
  </body>
</html>