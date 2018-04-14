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
  <ul class="cd-hero-slider ">
    <li class="selected">
      <div id="result" style="width:680; overflow:hidden">
        <div id="rates" style="float:left;"><ul>
            <li class="ev">1 人民币 = 1.2491 <a>港元</a>(HKD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1.2159 <a>澳门元</a>(MOP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 4.6318 <a>台币</a>(TWD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.1283 <a>欧元</a>(EUR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1591 <a>美元</a>(USD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.1107 <a>英镑</a>(GBP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1957 <a>澳元</a>(AUD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 168.0459 <a>韩元</a>(KRW)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 16.8468 <a>日元</a>(JPY)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.9994 <a>离岸人民币</a>(CNH)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1908 <a>加拿大元</a>(CAD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 9.9492 <a>俄罗斯卢布</a>(RUB)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 4.9670 <a>泰国铢</a>(THB)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 8.2835 <a>菲律宾比索</a>(PHP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 17.3628 <a>阿尔巴尼亚列克</a>(ALL)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 3.1258 <a>阿根廷比索</a>(ARS)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.2694 <a>阿鲁巴岛弗罗林</a>(AWG)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.5840 <a>阿联酋迪拉姆</a>(AED)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.2694 <a>列斯荷兰盾</a>(ANG)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.2572 <a>阿塞拜疆新马纳特</a>(AZN)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 24.9829 <a>安哥拉宽扎</a>(AOA)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.1513 <a>巴哈马元</a>(BSD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.0570 <a>巴林第纳尔</a>(BHD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.3026 <a>巴巴多斯元</a>(BBD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 3029.4780 <a>白俄罗斯卢</a>(BYR)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.3023 <a>伯利兹元</a>(BZD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1513 <a>百慕大元</a>(BMD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 9.8019 <a>不丹卢比</a>(BTN)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 1.0366 <a>玻利维亚诺</a>(BOB)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1.5955 <a>博茨瓦纳普拉</a>(BWP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.4970 <a>巴西里亚伊</a>(BRL)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.2543 <a>保加利亚列瓦</a>(BGN)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 263.3845 <a>布隆迪法郎</a>(BIF)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 12.5356 <a>孟加拉塔卡</a>(BDT)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.2057 <a>文莱元</a>(BND)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 14.3681 <a>佛得角埃斯库多</a>(CVE)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 459.8844 <a>哥伦比亚比索</a>(COP)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 85.5956 <a>哥斯达黎加科朗</a>(CRC)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1513 <a>古巴比索</a>(CUP)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 3.3300 <a>捷克克朗</a>(CZK)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1511 <a>瑞士法郎</a>(CHF)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1.0000 <a>塞浦路斯镑</a>(CYP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 96.2154 <a>智利比索</a>(CLP)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 17.3900 <a>阿尔及利亚第纳尔</a>(DZD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.9696 <a>丹麦克朗</a>(DKK)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 7.2484 <a>多米尼加比索</a>(DOP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 26.7584 <a>吉布提法郎</a>(DJF)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 2.6648 <a>埃及镑</a>(EGP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 4.0933 <a>埃塞俄比亚比尔</a>(ETB)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 3783.0640 <a>厄瓜多尔苏克雷</a>(ECS)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 2.2683 <a>厄立特里亚</a>(ERN)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.1137 <a>福克兰群岛镑</a>(FKP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.3130 <a>斐济元</a>(FJD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 7.1349 <a>冈比亚达拉西</a>(GMD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 30.6746 <a>圭亚那元</a>(GYD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.6652 <a>加纳塞地</a>(GHS)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 1361.9030 <a>几内亚法郎</a>(GNF)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1.1112 <a>危地马拉格查尔</a>(GTQ)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1138 <a>直布罗陀镑</a>(GIP)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 9.3033 <a>海地古德</a>(HTG)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 3.5453 <a>洪都拉斯伦皮拉</a>(HNL)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.9794 <a>克罗地亚库纳</a>(HRK)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 40.6119 <a>匈牙利福林</a>(HUF)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 15.9933 <a>冰岛克朗</a>(ISK)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 9.7778 <a>印度卢比</a>(INR)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 2201.4280 <a>印度尼西亚卢比盾</a>(IDR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 5290.9930 <a>伊朗里亚尔</a>(IRR)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 178.7119 <a>伊拉克第纳尔</a>(IQD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.5316 <a>以色列镑</a>(ILS)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 19.1211 <a>牙买加元</a>(JMD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1071 <a>约旦第纳尔</a>(JOD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 136.1903 <a>朝鲜圆</a>(KPW)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 50.7263 <a>哈萨克斯坦腾格</a>(KZT)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 610.1400 <a>柬埔寨利尔斯</a>(KHR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1241 <a>开曼岛元</a>(KYD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 64.0730 <a>科摩罗法郎</a>(KMF)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 15.6695 <a>肯尼亚先令</a>(KES)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.0458 <a>科威特第纳尔</a>(KWD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 1256.0000 <a>老挝基普</a>(LAK)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.0939 <a>拉脱维亚拉图</a>(LVL)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 228.6484 <a>黎巴嫩镑</a>(LBP)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 2.1382 <a>莱索托洛提</a>(LSL)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 18.0013 <a>利比里亚元</a>(LRD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.2066 <a>利比亚第纳尔</a>(LYD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.4613 <a>立陶宛里塔斯</a>(LTL)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 23.1990 <a>斯里兰卡卢比</a>(LKR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 7.9777 <a>马其顿第纳尔</a>(MKD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 108.3681 <a>马拉维克瓦查</a>(MWK)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.6154 <a>马来西亚林吉特</a>(MYR)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 2.3561 <a>马尔代夫卢非亚</a>(MVR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 53.1626 <a>毛里塔尼亚乌吉亚</a>(MRO)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 5.1677 <a>毛里求斯卢比</a>(MUR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 2.9028 <a>墨西哥比索</a>(MXN)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 2.6232 <a>摩尔多瓦列伊</a>(MDL)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 370.1350 <a>蒙古图格里克</a>(MNT)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1.4384 <a>摩洛哥道拉姆</a>(MAD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 206.2900 <a>缅甸元</a>(MMK)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 475.9095 <a>马达加斯加阿里亚里</a>(MGA)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 2.1347 <a>纳米比亚元</a>(NAD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 15.6695 <a>尼泊尔卢比</a>(NPR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 4.6221 <a>尼加拉瓜科多巴</a>(NIO)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 53.4169 <a>尼日利亚奈拉</a>(NGN)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 1.2331 <a>挪威克朗</a>(NOK)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.2150 <a>新西兰元</a>(NZD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.0582 <a>阿曼里亚尔</a>(OMR)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 15.8964 <a>巴基斯坦卢比</a>(PKR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.1513 <a>巴拿马巴尔博亚</a>(PAB)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.4854 <a>巴布亚新几内亚基那</a>(PGK)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 851.7493 <a>巴拉圭瓜拉尼</a>(PYG)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.5511 <a>波兰兹罗提</a>(PLN)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.4911 <a>秘鲁索尔</a>(PEN)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.5780 <a>卡塔尔利尔</a>(QAR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.5995 <a>罗马尼亚新列伊</a>(RON)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 125.7899 <a>卢旺达法郎</a>(RWF)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 1.2741 <a>瑞典克朗</a>(SEK)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1.3241 <a>萨尔瓦多科朗</a>(SVC)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 3132.3770 <a>圣多美多布拉</a>(STD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.5674 <a>沙特阿拉伯里亚尔</a>(SAR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 2.0186 <a>塞舌尔法郎</a>(SCR)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1153.0780 <a>塞拉利昂利昂</a>(SLL)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 32.7593 <a>斯洛文尼亚托拉捷夫</a>(SIT)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1.1818 <a>所罗门群岛元</a>(SBD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 84.2867 <a>索马里先令</a>(SOS)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.1138 <a>圣赫勒拿群岛磅</a>(SHP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 1.0078 <a>苏丹第纳尔</a>(SDG)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 2.1358 <a>斯威士兰里兰吉尼</a>(SZL)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.2055 <a>新加坡元</a>(SGD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 77.9281 <a>叙利亚镑</a>(SYP)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.5784 <a>土耳其新里拉</a>(TRY)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 338.6599 <a>坦桑尼亚先令</a>(TZS)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.3489 <a>汤加潘加</a>(TOP)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1.0171 <a>特立尼达和多巴哥元</a>(TTD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.3808 <a>突尼斯第纳尔</a>(TND)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 1.3321 <a>塔吉克斯坦索莫尼</a>(TJS)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 4.0645 <a>乌克兰赫夫米</a>(UAH)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 4.4111 <a>乌拉圭新比索</a>(UYU)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 551.8734 <a>乌干达先令</a>(UGX)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 16.2717 <a>瓦努阿图瓦图</a>(VUV)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 1.5117 <a>委内瑞拉博利瓦</a>(VEF)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 3434.7000 <a>越南盾</a>(VND)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 0.3878 <a>萨摩亚塔拉</a>(WST)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 85.4231 <a>多哥非洲共同体法郎</a>(XOF)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 85.3943 <a>刚果中非共同体法郎</a>(XAF)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 0.4086 <a>格林纳达东加勒比元</a>(XCD)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 15.5439 <a>太平洋法郎</a>(XPF)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 37.7928 <a>也门里亚尔</a>(YER)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 1.0000 <a>津巴布韦元</a>(ZWD)&nbsp;&nbsp;<br><br></li>
            <li class="od">1 人民币 = 2.1352 <a>南非兰特</a>(ZAR)&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 人民币 = 1.5132 <a>赞比亚克瓦查</a>(ZMW)&nbsp;&nbsp;<br><br></li>
          </ul></div>
        <div id="inverse" style="float:right;"><ul>
            <li class="ev">1 港元(<a>HKD</a>) = 0.8006 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 澳门元(<a>MOP</a>) = 0.8224 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 台币(<a>TWD</a>) = 0.2159 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 欧元(<a>EUR</a>) = 7.7950 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 美元(<a>USD</a>) = 6.2854 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 英镑(<a>GBP</a>) = 9.0341 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 澳元(<a>AUD</a>) = 5.1091 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 韩元(<a>KRW</a>) = 0.0060 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 日元(<a>JPY</a>) = 0.0594 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 离岸人民币(<a>CNH</a>) = 1.0006 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 加拿大元(<a>CAD</a>) = 5.2406 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 俄罗斯卢布(<a>RUB</a>) = 0.1005 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 泰国铢(<a>THB</a>) = 0.2013 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 菲律宾比索(<a>PHP</a>) = 0.1207 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 阿尔巴尼亚列克(<a>ALL</a>) = 0.0576 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 阿根廷比索(<a>ARS</a>) = 0.3199 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 阿鲁巴岛弗罗林(<a>AWG</a>) = 3.7120 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 阿联酋迪拉姆(<a>AED</a>) = 1.7122 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 列斯荷兰盾(<a>ANG</a>) = 3.7120 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 阿塞拜疆新马纳特(<a>AZN</a>) = 3.8880 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 安哥拉宽扎(<a>AOA</a>) = 0.0400 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 巴哈马元(<a>BSD</a>) = 6.6094 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 巴林第纳尔(<a>BHD</a>) = 17.5439 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 巴巴多斯元(<a>BBD</a>) = 3.3047 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 白俄罗斯卢(<a>BYR</a>) = 0.0003 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 伯利兹元(<a>BZD</a>) = 3.3080 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 百慕大元(<a>BMD</a>) = 6.6094 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 不丹卢比(<a>BTN</a>) = 0.1020 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 玻利维亚诺(<a>BOB</a>) = 0.9647 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 博茨瓦纳普拉(<a>BWP</a>) = 0.6268 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 巴西里亚伊(<a>BRL</a>) = 2.0121 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 保加利亚列瓦(<a>BGN</a>) = 3.9324 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 布隆迪法郎(<a>BIF</a>) = 0.0038 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 孟加拉塔卡(<a>BDT</a>) = 0.0798 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 文莱元(<a>BND</a>) = 4.8614 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 佛得角埃斯库多(<a>CVE</a>) = 0.0696 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 哥伦比亚比索(<a>COP</a>) = 0.0022 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 哥斯达黎加科朗(<a>CRC</a>) = 0.0117 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 古巴比索(<a>CUP</a>) = 6.6094 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 捷克克朗(<a>CZK</a>) = 0.3003 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 瑞士法郎(<a>CHF</a>) = 6.6181 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 塞浦路斯镑(<a>CYP</a>) = 1.0000 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 智利比索(<a>CLP</a>) = 0.0104 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 阿尔及利亚第纳尔(<a>DZD</a>) = 0.0575 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 丹麦克朗(<a>DKK</a>) = 1.0314 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 多米尼加比索(<a>DOP</a>) = 0.1380 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 吉布提法郎(<a>DJF</a>) = 0.0374 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 埃及镑(<a>EGP</a>) = 0.3753 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 埃塞俄比亚比尔(<a>ETB</a>) = 0.2443 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 厄瓜多尔苏克雷(<a>ECS</a>) = 0.0003 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 厄立特里亚(<a>ERN</a>) = 0.4409 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 福克兰群岛镑(<a>FKP</a>) = 8.7951 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 斐济元(<a>FJD</a>) = 3.1954 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 冈比亚达拉西(<a>GMD</a>) = 0.1402 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 圭亚那元(<a>GYD</a>) = 0.0326 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 加纳塞地(<a>GHS</a>) = 1.5033 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 几内亚法郎(<a>GNF</a>) = 0.0007 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 危地马拉格查尔(<a>GTQ</a>) = 0.8999 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 直布罗陀镑(<a>GIP</a>) = 8.7873 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 海地古德(<a>HTG</a>) = 0.1075 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 洪都拉斯伦皮拉(<a>HNL</a>) = 0.2821 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 克罗地亚库纳(<a>HRK</a>) = 1.0210 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 匈牙利福林(<a>HUF</a>) = 0.0246 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 冰岛克朗(<a>ISK</a>) = 0.0625 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 印度卢比(<a>INR</a>) = 0.1023 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 印度尼西亚卢比盾(<a>IDR</a>) = 0.0005 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 伊朗里亚尔(<a>IRR</a>) = 0.0002 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 伊拉克第纳尔(<a>IQD</a>) = 0.0056 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 以色列镑(<a>ILS</a>) = 1.8811 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 牙买加元(<a>JMD</a>) = 0.0523 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 约旦第纳尔(<a>JOD</a>) = 9.3371 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 朝鲜圆(<a>KPW</a>) = 0.0073 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 哈萨克斯坦腾格(<a>KZT</a>) = 0.0197 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 柬埔寨利尔斯(<a>KHR</a>) = 0.0016 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 开曼岛元(<a>KYD</a>) = 8.0580 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 科摩罗法郎(<a>KMF</a>) = 0.0156 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 肯尼亚先令(<a>KES</a>) = 0.0638 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 科威特第纳尔(<a>KWD</a>) = 21.8341 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 老挝基普(<a>LAK</a>) = 0.0008 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 拉脱维亚拉图(<a>LVL</a>) = 10.6496 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 黎巴嫩镑(<a>LBP</a>) = 0.0044 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 莱索托洛提(<a>LSL</a>) = 0.4677 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 利比里亚元(<a>LRD</a>) = 0.0556 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 利比亚第纳尔(<a>LYD</a>) = 4.8403 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 立陶宛里塔斯(<a>LTL</a>) = 2.1678 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 斯里兰卡卢比(<a>LKR</a>) = 0.0431 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 马其顿第纳尔(<a>MKD</a>) = 0.1253 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 马拉维克瓦查(<a>MWK</a>) = 0.0092 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 马来西亚林吉特(<a>MYR</a>) = 1.6249 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 马尔代夫卢非亚(<a>MVR</a>) = 0.4244 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 毛里塔尼亚乌吉亚(<a>MRO</a>) = 0.0188 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 毛里求斯卢比(<a>MUR</a>) = 0.1935 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 墨西哥比索(<a>MXN</a>) = 0.3445 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 摩尔多瓦列伊(<a>MDL</a>) = 0.3812 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 蒙古图格里克(<a>MNT</a>) = 0.0027 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 摩洛哥道拉姆(<a>MAD</a>) = 0.6952 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 缅甸元(<a>MMK</a>) = 0.0048 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 马达加斯加阿里亚里(<a>MGA</a>) = 0.0021 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 纳米比亚元(<a>NAD</a>) = 0.4684 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 尼泊尔卢比(<a>NPR</a>) = 0.0638 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 尼加拉瓜科多巴(<a>NIO</a>) = 0.2164 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 尼日利亚奈拉(<a>NGN</a>) = 0.0187 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 挪威克朗(<a>NOK</a>) = 0.8110 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 新西兰元(<a>NZD</a>) = 4.6512 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 阿曼里亚尔(<a>OMR</a>) = 17.1821 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 巴基斯坦卢比(<a>PKR</a>) = 0.0629 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 巴拿马巴尔博亚(<a>PAB</a>) = 6.6094 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 巴布亚新几内亚基那(<a>PGK</a>) = 2.0602 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 巴拉圭瓜拉尼(<a>PYG</a>) = 0.0012 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 波兰兹罗提(<a>PLN</a>) = 1.8146 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 秘鲁索尔(<a>PEN</a>) = 2.0362 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 卡塔尔利尔(<a>QAR</a>) = 1.7301 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 罗马尼亚新列伊(<a>RON</a>) = 1.6681 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 卢旺达法郎(<a>RWF</a>) = 0.0079 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 瑞典克朗(<a>SEK</a>) = 0.7849 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 萨尔瓦多科朗(<a>SVC</a>) = 0.7552 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 圣多美多布拉(<a>STD</a>) = 0.0003 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 沙特阿拉伯里亚尔(<a>SAR</a>) = 1.7624 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 塞舌尔法郎(<a>SCR</a>) = 0.4954 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 塞拉利昂利昂(<a>SLL</a>) = 0.0009 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 斯洛文尼亚托拉捷夫(<a>SIT</a>) = 0.0305 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 所罗门群岛元(<a>SBD</a>) = 0.8462 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 索马里先令(<a>SOS</a>) = 0.0119 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 圣赫勒拿群岛磅(<a>SHP</a>) = 8.7873 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 苏丹第纳尔(<a>SDG</a>) = 0.9923 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 斯威士兰里兰吉尼(<a>SZL</a>) = 0.4682 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 新加坡元(<a>SGD</a>) = 4.8662 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 叙利亚镑(<a>SYP</a>) = 0.0128 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 土耳其新里拉(<a>TRY</a>) = 1.7289 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 坦桑尼亚先令(<a>TZS</a>) = 0.0030 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 汤加潘加(<a>TOP</a>) = 2.8662 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 特立尼达和多巴哥元(<a>TTD</a>) = 0.9832 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 突尼斯第纳尔(<a>TND</a>) = 2.6261 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 塔吉克斯坦索莫尼(<a>TJS</a>) = 0.7507 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 乌克兰赫夫米(<a>UAH</a>) = 0.2460 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 乌拉圭新比索(<a>UYU</a>) = 0.2267 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 乌干达先令(<a>UGX</a>) = 0.0018 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 瓦努阿图瓦图(<a>VUV</a>) = 0.0615 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 委内瑞拉博利瓦(<a>VEF</a>) = 0.6615 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 越南盾(<a>VND</a>) = 0.0003 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 萨摩亚塔拉(<a>WST</a>) = 2.5786 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 多哥非洲共同体法郎(<a>XOF</a>) = 0.0117 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 刚果中非共同体法郎(<a>XAF</a>) = 0.0117 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 格林纳达东加勒比元(<a>XCD</a>) = 2.4474 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 太平洋法郎(<a>XPF</a>) = 0.0643 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 也门里亚尔(<a>YER</a>) = 0.0265 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 津巴布韦元(<a>ZWD</a>) = 1.0000 人民币&nbsp;&nbsp;<br><br></li>
            <li class="od">1 南非兰特(<a>ZAR</a>) = 0.4683 人民币&nbsp;&nbsp;<br><br></li>
            <li class="ev">1 赞比亚克瓦查(<a>ZMW</a>) = 0.6609 人民币&nbsp;&nbsp;<br><br></li>
          </ul></div><div class="clear"></div>
      </div>
    </li>

    <li>
      <h2>旅途常用药品</h2>
      <p>1.感冒药：于这种病症，要根据自身状况选择。<br>
        中药制剂：可以应付一般的感冒症状，而且较少有副作用。<br>
        解热止痛药：可以退热和缓解头痛、关节痛等症状。<br>
        组胺拮抗剂：可以减少打喷嚏和流鼻涕，并有轻微的镇痛作用。 </p>
      <p>2.防晕药：可以选用乘车、船、飞机等运动引起的眩晕、呕吐等症状的晕车药。</p>
      <p>3.促进消化药：应付这种状况，可以选择食母生或乳生这些维生素类、有益菌类的消化药，但不能与抗生素、抑菌剂等合用。或者选择中成药。还可以选用由慢性胃炎等引起的消化不良、恶心、呕吐、胃烧灼感等的药。</p>
      <p>4.抗过敏药：过敏患者可以带一些息斯敏和扑尔敏，这些药物适用于过敏性湿疹、过敏性鼻炎、药物或食物过敏。与解热镇痛药同服，可以控制感冒时的鼻塞、流涕、咳嗽等症状。 </p>
      <p>5.止腹泻药：一般选用黄连素片治疗肠道细菌感染引起的胃肠炎、腹泻。或者选用中药类丸剂治疗。 </p>
      <p>6.眼药水：用于游泳或泡温泉后，或灰沙入眼；</p>
      <p>7.防水防菌创可贴：用于应付意外受伤；</p>
      <p>8.抑制细菌感染药：对付旅游途中发生的身体各系统细菌感染，可选用广谱抗菌药。腹泻严重时，可以和黄连素片同时使用。 </p>
      <p>9.降火药：旅游时休息不好很容易上火，可以准备牛黄解毒丸或黄连上清丸，可清热解毒，用于咽喉肿痛、牙龈肿痛、耳鸣口疮、大便不通等。 </p>
      <p>10.清凉油或花露水：用于应付蚊虫叮咬、头晕；</p>
      <h2>值得拥有的几件神器</h2>
      <p>1.U型枕&眼罩:在飞机、火车上的时间是旅行期间最难熬的，路途遥远，不如睡觉。此时U型枕和真丝眼罩就显得十分必要。</p>
      <p>2.保冷保温杯：新西兰S’well保冷保温杯就可以实现你在旅途中随时随地冷热水供应的梦想，它有着强悍的心脏，内层采用两层不锈钢材料，热水和冷水的温度分别可以保持12和24小时。而且任何东西，水、红酒、啤酒、鸡尾酒、咖啡、热巧克力和汤都可以。更重要的是颜值爆表！</p>
      <p>3.LUSH原子粒:它的另一个名字叫“牙膏粒”。坐飞机火车睡前不方便去刷牙，那就嚼一粒它吧！随着lush牙膏粒融化，就会产生泡沫。虽然泡沫不多，但清洁力很够。含有他他粉，具有不错的美白功效。固态牙膏粒+纸盒包装，相比普通牙膏能减轻不少重量，妥妥地可以带上飞机。</p>
      <p>4.免洗洗手液:出门在外，洗手总是一件让人头疼的事。所以一定要随身带一只免洗洗手液，坐完公交车、地铁还能洗洗手。美国BBW抗菌便携免洗洗手凝露中含有68%的酒精杀菌消毒，还有搓一搓就会化开的清洁颗粒。酒精挥发后，VE成分能保持手部的滋润，还能保持持久香气！</p>
      <p>5.防蚊止痒用品:Soffell可以说是泰国的全民驱蚊水，泰国的旅馆都会用这款来驱蚊。有30ml的便携装，美好的味道让你还可以假装穿了香水。</p>
    </li>

    <li>
      <h2>随身小件指南</h2>
      <p>1.充电宝：旅行途中最怕手机突然安静（因为没电了），于是漫长的旅途中你百无聊赖，又担心遇到紧急事情时失去联系，这时候，充电宝的存在就变得尤为重要。手机电量满满的，看着也有一股安全感~</p>
      <p class="image"><img src="../images/society/society_remind/3-1.jpeg"></p>
      <p>2.洗漱用品旅行套装:折叠牙刷、小牙膏、小梳子……既满足了你精致的需求，又轻便易带。</p>
      <p class="image"> <img src="../images/society/society_remind/3-2.jpeg"></p>
      <p>3.旅行收纳包:多功能的收纳包，可以放置一些零碎的小物件。</p>
      <p class="image"> <img src="../images/society/society_remind/3-3.jpg"></p>
      <p>4.镜头手机壳:手机拍照功能越来越强大，可以用硬件来提升图片效果，这个手机壳中包含了广角，鱼眼，长焦，微距等镜头。</p>
      <p class="image"><img src="../images/society/society_remind/3-4.jpg"></p>
      <p>5.“会说话”的T恤袋:这件T恤把40个最常用到的图标印在了胸口上。图标包括了火车、公交、医院、机场、Wi-Fi、电话、啤酒等等，而且使用的是目前几乎全世界都能一眼看懂的抽象图标。当你不会讲当地语言，也忘了怎么说某个特意学过的词，这件T恤就能派上用场了。</p>
     <p class="image"> <img src="../images/society/society_remind/3-5.jpeg"></p>
      <p>6.手机防水袋：去海岛的时候一定要必备一个手机防水袋，既能够防止手机进水还能够防止进入沙子，非常方便。</p>
      <p class="image"><img src="../images/society/society_remind/3-6.jpg"></p>
      <p>7.手环数据线:小而美，既是数据线又是裤裤的手环，不必再把一大坨数据线塞在包里，大大方方地戴在手上，好看又实用。</p>
      <p class="image"><img src="../images/society/society_remind/3-7.jpg"></p>
      <p>8.证件:最重要的就是我们自己的名信片了，出门在外它就是我们的代表，没了它我们就相当于黑户。如果在境外，我们可能回家都成了问题，所以出发之前一定要好好检查。</p>
      <p>9.信用卡:身上不要携带大量的现金，以防被偷盗。</p>
    </li>
  </ul> <!-- .cd-hero-slider -->

  <div class="cd-slider-nav">
    <nav>
      <span class="cd-marker item-1"></span>

      <ul>
        <li class="selected"><a href="#0">汇率中心</a></li>
        <li><a href="#0">健康助手</a></li>
        <li><a href="#0">随身小件指南</a></li>
      </ul>
    </nav>
  </div> <!-- .cd-slider-nav -->
</section> <!-- .cd-hero -->

<script src="../js/society_remind/jquery-2.1.1.js"></script>
<script src="../js/society_remind/main.js"></script> <!-- Resource jQuery -->
<?php require 'footer.php'?>
</body>
</html>