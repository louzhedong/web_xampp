<?php
    // 驴友社
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>驴友记</title>
  <link rel="stylesheet" href="../css/society_travel.css">
    <?php require 'link.php' ?>
  <style type="text/css">
    #gallery-wrapper {
      position: relative;
      max-width: 75%;
      width: 75%;
      margin:50px auto;
    }
    img.thumb {
      width: 100%;
      max-width: 100%;
      height: auto;
    }
    .white-panel {
      position: absolute;
      background: white;
      border-radius: 5px;
      box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
      padding: 10px;
    }
    .white-panel h1 {
      font-size: 1em;
    }
    .white-panel h1 a {
      color: #A92733;
    }
    .white-panel:hover {
      box-shadow: 1px 1px 10px rgba(0,0,0,0.5);
      margin-top: -5px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }
    #turn_page li a{
      color: #ff9d00;
    }

    #turn_page li a:hover {
      background-color: #ff9d00;
      border-color: #ff9d00;
      color:#fff;
    }

    #turn_page li.active a {
      background-color: #ff9d00;
      border-color: #ff9d00;
      color: #FFF;
    }

    #select{
      margin-top:50px;
      margin-left:50px;
    }

    #select_content{
      cursor: pointer;
      display: inline-block;
      padding: 0 10px;
      line-height: 24px;
      color: #ff9d00;
      border-radius: 4px;
      border: 1px solid #dadada;
      margin-bottom:4px;
    }

    #select_content:hover{
      color: #fff;
      background-color: #ff9d00;
    }

    #select_content.active{
      color: #fff;
      background-color: #ff9d00;
    }



  </style>
</head>
<body>
<?php
$tab = 'society'
?>
<?php require 'top.php' ?>
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div id="select">
      <div>筛选条件：
        <span class="active" id="select_content">热门</span>
        <span id="select_content">优质文章</span>
      </div>
      <div>热门目的地：
        <span id="select_content">厦门</span>
        <span id="select_content">三亚</span>
        <span id="select_content">北京</span>
        <span id="select_content">香港</span>
        <span id="select_content">澳门</span>
        <span id="select_content">丽江</span>
        <span id="select_content">青岛</span>
        <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span id="select_content">普吉岛</span>
        <span id="select_content">韩国</span>
        <span id="select_content">瑞士</span>
        <span id="select_content">美国</span>
        <span id="select_content">埃及</span>
        <span id="select_content">马尔代夫</span>
        <span id="select_content">澳大利亚</span>
        <button type="button" class="btn btn-warning" style="float: right;margin-right: 55px">发表游记</button>
      </div>
    </div>
  </div>
  <dic class="col-md-1"></dic>
<br><br>
<br>
<br>
<br>
<br>
<br>

  <section id="gallery-wrapper">
    <article class="white-panel">
      <img src="../images/society_travel/1.jpg" class="thumb">
      <h1><a href="#">Title 1</a></h1>
      <p>Description 1</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/2.jpg" class="thumb">
      <h1><a href="#">Title 2</a></h1>
      <p>Description 2</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/3.jpg" class="thumb">
      <h1><a href="#">Title 3</a></h1>
      <p>Description 3</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/4.jpg" class="thumb">
      <h1><a href="#">Title 4</a></h1>
      <p>Description 4</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/5.jpg" class="thumb">
      <h1><a href="#">Title 5</a></h1>
      <p>Description 5</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/6.jpg" class="thumb">
      <h1><a href="#">Title 6</a></h1>
      <p>Description 6</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/7.jpg" class="thumb">
      <h1><a href="#">Title 7</a></h1>
      <p>Description 7</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/8.jpg" class="thumb">
      <h1><a href="#">Title 8</a></h1>
      <p>Description 8</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/9.jpg" class="thumb">
      <h1><a href="#">Title 9</a></h1>
      <p>Description 9</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/10.jpg" class="thumb">
      <h1><a href="#">Title 10</a></h1>
      <p>Description 10</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/11.jpg" class="thumb">
      <h1><a href="#">Title 11</a></h1>
      <p>Description 11</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/12.jpg" class="thumb">
      <h1><a href="#">Title 12</a></h1>
      <p>Description 12</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/13.jpg" class="thumb">
      <h1><a href="#">Title 13</a></h1>
      <p>Description 13</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/14.jpg" class="thumb">
      <h1><a href="#">Title 14</a></h1>
      <p>Description 14</p>
    </article>
    <article class="white-panel">
      <img src="../images/society_travel/15.jpg" class="thumb">
      <h1><a href="#">Title 15</a></h1>
      <p>Description 15</p>
    </article>
  </section>
  <nav aria-label="Page navigation" style="text-align: center;margin-top: 10px">
    <ul class="pagination" id="turn_page">
      <li class="active" ><a href="#aaa">1</a></li>
      <li><a href="#aaa">2</a></li>
      <li><a href="#aaa">3</a></li>
      <li><a href="#aaa">4</a></li>
      <li><a href="#aaa">5</a></li>
    </ul>
  </nav>
  <script src="../js/society_travel/jquery-1.11.0.min.js"></script>
  <script src="../js/society_travel/pinterest_grid.js"></script>
  <script type="text/javascript">
      $(function(){
          $("#gallery-wrapper").pinterest_grid({
              no_columns: 4,
              padding_x: 10,
              padding_y: 10,
              margin_bottom: 50,
              single_column_breakpoint: 700
          });

      });
  </script>
</body>
</html>
