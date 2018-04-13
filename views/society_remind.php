<?php
//驴友小贴士
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>驴友小贴士</title>
  <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/society_remind.css"><!-- Resource style -->
  <script src="../js/society_remind/modernizr.js"></script>
</head>
<body>
<?php
$tab = 'travel';
?>
<?php require 'top.php' ?>
<section class="cd-hero">
  <ul class="cd-hero-slider">
    <li class="selected">
      <div class="cd-full-width">
        <h2>张钧甯</h2>
        <p align="center">
          <select id = "box1">
            <option name="gy" value = "港元">港元 Hong Kong Dollar HKD</option>
            <option name="my"  value = "美元">美元 America Dollar AD</option>
            <option name="rm" value = "人民币">人民币 Chinese Yuan Renminbi</option>
          </select>

          <input type="button" value="互换" onclick="changeType()" style="background-color:#6699cc"/>

          <select id="box2">
            <option name="rm" value = "人民币">人民币 Chinese Yuan Renminbi</option>
            <option name="gy" value = "港元">港元 Hong Kong Dollar HKD</option>
            <option name="my" value = "美元">美元 America Dollar AD</option>

          </select>

          数额： <input type="text" value="100" id="mount" >
          <input type="button" value="汇率转换" onclick="changeMoney()" style="background-color:#6699cc"/></p>

        <table align="center"  border="1" style="width: 60%; height: 200px; ">

          <tr id = "tr1" >
            <td colspan="3"><b>按当前税率兑换结果</b></td>
          </tr>

          <tr id="tr2">
            <td>港元</td>
            <td>汇率</td>
            <td>人民币</td>
          </tr>

          <tr id="tr3">
            <td>100</td>
            <td>0.849082</td>
            <td>84.9082</td>
          </tr>
        </table>

      </div> <!-- .cd-full-width -->
    </li>

    <li>
      <div class="cd-half-width">
        <h2>早年经历</h2>
        <p>1994年~1997年，就读于台北市立金华国民中学。</p>


      </div> <!-- .cd-half-width -->

      <div class="cd-half-width cd-img-container">
        <img src="../images/society/society_remind/tech-1.jpg" alt="tech 1">
      </div> <!-- .cd-half-width.cd-img-container -->
    </li>

    <li>
      <div class="cd-half-width cd-img-container">
        <img src="../images/society/society_remind/tech-2.jpg" alt="tech 2">
      </div> <!-- .cd-half-width.cd-img-container -->

      <div class="cd-half-width">
        <h2>参演短片</h2>
        <p>五月天音乐概念电影</p>

      </div> <!-- .cd-half-width -->

    </li>


  </ul> <!-- .cd-hero-slider -->

  <div class="cd-slider-nav">
    <nav>
      <span class="cd-marker item-1"></span>

      <ul>
        <li class="selected"><a href="#0">汇率中心</a></li>
        <li><a href="#0">健康助手</a></li>
        <li><a href="#0">随声小件指南</a></li>
      </ul>
    </nav>
  </div> <!-- .cd-slider-nav -->
<script src="../js/society_remind/jquery-2.1.1.js"></script>
<script src="../js/society_remind/main.js">
    <script type="text/javascript">

        function changeType()
        {
            //获取2个selectBox的元素节点
            var box1 = document.getElementById("box1");
            var box2 = document.getElementById("box2");

            //获取其选定的货币种类name1 和name2
            var name1 = box1.options[box1.selectedIndex].value;
            var length1 = box1.length;

            var name2 = box2.options[box2.selectedIndex].value;
            var length2 = box2.length;

//           设置box2中被选中的项为name1
            for (var i = 0; i < length2; i++)
            {
                if ( box2.options[i].value == name1)
                {
                    box2.selectedIndex = i;
                    break;
                }
            }
            // 设置box1中被选中的项为name2
            for (var i = 0; i < length1; i++)
            {
                if ( box1.options[i].value == name2)
                {
                    box1.selectedIndex = i;
                    return;
                }
            }
        }

    //传入左右边框选定的select对象
    function changeRate(typeLeft, typeRight)
    {
        /*汇率转换 定义数组存储汇率数据（按下拉框显示顺序）
         判断 value 6种情况
         美-人 美-港
         人-港 人-美
         港-人 港-美
         如果name1为港元 arrayMoneyG[]中取 取出的数传给表格32
         如果name1为美元 arrayMoneyA[]中取
         如果name1为人民币 arrayMoneyR[]中取
         返回rate*/
        var arrayMoneyG = [0.849082, 1, 0.1289];
        var arrayMoneyA = [6.865, 7.7575,  1];
        var arrayMoneyR = [1, 1.13, 0.1457];
        var rate;
//左边框选定的是港元
        if (typeLeft == "港元")
        {//右边框选定的是人民币
            if (typeRight == "人民币")
            {
                rate = arrayMoneyG[0];
            }
            else if (typeRight == "美元")
            {
                rate = arrayMoneyG[2];
            }
            else
            {
                rate = 1;
            }
        }
        else if(typeLeft == "美元")
        {
            if (typeRight == "人民币")
            {
                rate = arrayMoneyA[0];
            }
            else if (typeRight == "港元")
            {
                rate = arrayMoneyA[1];
            }
            else
            {
                rate = 1;
            }
        }
        else
        {
            if (typeRight == "港元")
            {
                rate = arrayMoneyR[1];
            }
            else if (typeRight == "美元")
            {
                rate = arrayMoneyR[2];
            }
            else
            {
                rate = 1;
            }
        }
        return rate;
    }

    function changeMoney()
    {
        //获取box1,box2的value值 box1显示在21 box2显示在23 金额显示在31
        var box1 = document.getElementById("box1");
        var box2 = document.getElementById("box2");
        var box3 = document.getElementById("mount");

        //获取选定的box1 2的value值
        var name1 = box1.options[box1.selectedIndex].value;
        var name2 = box2.options[box2.selectedIndex].value;
        var mount = box3.value;
        //获取汇率
        var getRate = changeRate(name1, name2);

        //获取表格21和23,分别赋值
        var tr1Table = document.getElementById("tr2");

        tr1Table.childNodes[0].innerHTML = name1;
        tr1Table.childNodes[2].innerHTML = name2;

        //给表格31赋值 33赋值 getRate传给表格32
        var tr2Table = document.getElementById("tr3");
//chroum中赋值不成功,需要在IE测试
        tr2Table.childNodes[0].innerHTML = mount;
        tr2Table.childNodes[1].innerHTML = getRate;
        tr2Table.childNodes[2].innerHTML = mount * getRate;
    }
</script>
</body>
</html>