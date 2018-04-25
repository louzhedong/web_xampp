<?php
// 景点汇详情页
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>目的地指南</title>
  <?php require 'link.php' ?>
  <link rel="stylesheet" href="../css/scenicdetail_guide.css">
  <script src="../js/scenicdetail_guide/jquery-1.11.2.min.js" type="text/javascript"></script>
  <script src="../js/scenicdetail_guide/jquery-accordion-menu.js" type="text/javascript"></script>
  <script type="text/javascript">

      $(function(){
          //顶部导航切换
          $("#demo-list li").click(function(){
              $("#demo-list li.active").removeClass("active")
              $(this).addClass("active");
          })
      })
  </script>
</head>
<body data-spy="scroll" data-target="#jquery-accordion-menu">
<?php
$tab = 'scenic';
$scenicdetail_tab = 'guide';
?>
<?php require 'top.php' ?>
<?php require 'scenicdetail_top.php' ?>
<div class="guide_row">
  <div class="col-md-1"></div>
  <div class="col-md-3">
    <div class="content">
      <div id="jquery-accordion-menu" class="jquery-accordion-menu red" data-spy="scroll" >
        <ul id="demo-list">
          <li class="active"><a href="#"><i class="fa fa-cog"></i>泰国文化地理 </a>
            <ul role="tablist" class="submenu">
              <li role="presentation"><a aria-controls="diliqihou" href="#diliqihou" role="tab" data-toggle="tab">地理气候 </a></li>
              <li role="presentation"><a aria-controls="lishi" href="#lishi" role="tab" data-toggle="tab">历史 </a></li>
              <li role="presentation"><a aria-controls="zongjiao" href="#zongjiao" role="tab" data-toggle="tab">宗教 </a></li>
              <li role="presentation"><a aria-controls="minzu" href="#minzu" role="tab" data-toggle="tab">民族 </a></li>
              <li role="presentation"><a aria-controls="jieri" href="#jieri" role="tab" data-toggle="tab">节日 </a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-cog"></i>泰国签证 </a>
            <ul class="submenu">
              <li><a href="#putongqianzheng">普通签证 </a></li>
              <li><a href="#luodiqianzheng">落地签证 </a></li>
              <li><a href="#guojingqianzheng">过境签证 </a>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-cog"></i>泰国交通 </a>
            <ul class="submenu">
              <li><a href="#shaungtiao">双条、出租车和Tuktuk </a></li>
              <li><a href="#qinggui">轻轨和地铁 </a></li>
              <li><a href="#zuche">租车 </a>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-cog"></i>泰国小贴士 </a>
            <ul class="submenu">
              <li><a href="#lvyouzhonggao">旅游忠告 </a></li>
              <li><a href="#chuyoubibei">出游必备 </a></li>
              <li><a href="#fengsujinji">风俗禁忌 </a></li>
              <li><a href="#xiaofei">小费 </a></li>
              <li><a href="#yiliao">医疗信息 </a></li>
              <li><a href="#youju">邮局信息 </a></li>
              <li><a href="#dianhua">重要电话网址 </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-7">
    <div role="tabpanel" class="tab-pane active" id="diliqihou">
      <div class="title">
        地理气候
      </div>
      <div class="text">
        泰国拥有510,890平方公里陆地面积和2,230平方公里水域面积，是世界第50大国；国土面积与西班牙相当。位于赤道以北15度，属热带气候，常年气温在19-38摄氏度（66-100华氏度）之间。

        一般来说，泰国的季节可以分为：夏季、雨季和凉季，但无论在哪个季节，您都可以找到合适的旅游景点。
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="lishi">
      <div class="title">
        历史
      </div>
      <div class="text">
        早在新石器时代，泰国文明就已经在现今的Ban Chiang孕育而生，现在，Ban Chiang已被联合国教科文组织认定为世界文化遗址。泰国的历史源远流长，令泰国人民深感自豪，记录详尽。在公元前几世纪，孟族、高棉族和泰族的人民就已经在现今的泰国境内建造了王国。

        然而，我们所了解的泰国历史是从13，14世纪开始的。那时的Lan Na(Chiang Rai/Chiang Mai)和Sukhothai王国建立了第一个真正意义上独立的泰王国。

        不幸的是，Burmese后来入侵了泰国，将Chaing Mai和Ayutthaya掀翻下马。他们侵占了Lan Na 的首都，并且洗劫了Ayutthaya，逼迫泰王国放弃中心地区，迁都南下，在靠近曼谷的Thon Buri 建立了新的首都。在Thon Buri做了短暂停留（1767-1772）之后，就迁都去了湄南河的另一边。Chakri朝代的Rama大帝一世，作为有历记以来第一任国王，建立了现在的首都曼谷，开辟了泰国历史上的Ratanakosin时代。

        现在泰国是由国家元首为最高首领的，King Bumibol Adulyadej (1946- present)是Chakri朝代的King Rama IX，在这位备受爱戴的摄政王的统治下，一个较为薄弱但是已功能健全的民主专政诞生了。
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="zongjiao">
      <div class="title">
        宗教
      </div>
      <div class="text">
        泰国有"佛之国"的称号，700多年来，佛教一直是泰国的国教，自素可泰王朝的李泰王出家修行以来，作为一种历史传统，每一个年过20岁的男子，在他的一生中必须提督出家修行5天到3个月，连国王也不例外，家家户户都就供奉佛经佛像，早晚笔起到，各学校都设有佛教课程，建筑奇观是佛寺，雕刻珍品是佛像，四大王朝倾力建造寺庙，他们的兴衰荣辱全刻划在寺庙的殿堂和佛像的容颜中。
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="minzu">
      <div class="title">
        民族
      </div>
      <div class="text">
        泰国6500万人口中，绝大部分（约80%）是泰族，其他的主要有华族、印度族、马来族、孟族、高棉族、缅甸族、老族等。聚居着700多万人口的首都曼谷更是一个种族大熔炉，那里居住着为数众多的来自全球各地的外籍人士。泰国的人口分布还有一个地域特点：在某些地区，如靠近马来西亚的南部区域，穆斯林人占大多数，而在北部山区，苗族人和克伦人则占大多数。
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="jieri">
      <div class="title">
        节日
      </div>
      <div class="text">
        1月1日：新年<br>

        2月-3月：万佛节（三大佛日之一，泰历3月15日）<br>

        4月6日：查克里王朝纪念日（纪念1782年拉玛一世国王登基 ）<br>

        4月13-15日：泼水节（或称宋干节，泰历新年）<br>

        5月：御耕节（庆祝农耕时节，日期由皇家占星师决定）<br>

        5月：维莎迦普差节（三大佛日之一，泰历6月15日）<br>

        5月1日：国际劳动节<br>

        5月5日：加冕日（纪念现任泰国国王加冕）<br>

        7月：阿莎加哈普差节（三大佛日之一，泰历8月15日）<br>

        守夏节：（泰历8月16日，僧人不能外出，留在寺庙安居修行3个月）<br>

        8月12日：母亲节（王后生日）<br>

        10月23日：朱拉隆功纪念日（朱拉隆功是泰国前任国王）<br>

        12月5日：父亲节（国王生日）<br>

        12月10日：宪法日（纪念泰国首部宪法）<br>

        12月31日：除夕<br>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="putongqianzheng">
      <div class="title">
        普通签证
      </div>
      <div class="text">
        Step 1. 下载和填写表格<br>
        从泰国大使馆网站下载并填写签证申请表
        <br>
        Step 2. 准备材料<br>
        签证所需的申请材料会因不同条件略有差别，一般需要特别准备的主要包括：<br>

        1. 往返机票复印件或确认过的机票订单。<br>
        2. 不少于10000元人民币的存款证明。<br>
        3. 由申请人本国单位或有关部门出具的担保信（英文或泰文），注明申请人的姓名、赴泰目的）公司抬头纸打印并加盖公章。<br>
        详细材料清单请以使馆网站上的材料要求为准，在职人员、退休人员和未成年人等特殊情况的申请材料会有区别，请在官方申请渠道提供的材料清单中特别注意。
        <br>
        Tips: 护照有效期
        <br>
        护照有效期需6个月以上。
        <br>
        Step 3. 递交材料<br>
        申请者本人需携带签证申请表及相关材料亲自去往当地或附近的大使馆签证处或领事馆递交签证。
        <br>
        签证费: 230元人民币。<br>

        办理时间: 所有类型的签证办理需三个工作日（如: 周五送签，下周三出签）。<br>

        出入境管理人员将会随机抽查入境泰国的游客携带的现金如下：旅游签需要携带现金或等值外币 20000泰铢（每人）40000泰铢（每户）
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="guojingqianzheng">
      <div class="title">
        过境签证
      </div>
      <div class="text">
        Step 1. 准备材料<br>
        签证所需的申请材料会因不同条件略有差别，一般需要特别准备的主要包括：
        <br>
        1. 有效期6个月以上的护照及复印件；<br>
        2. 三份用英文填写完整的旅游签证申请表；<br>
        3. 三张六个月内拍的两寸彩色免冠照片；<br>
        4. 连程机票复印件和确认的连程机票包含票号；<br>
        5. 第三国有效签证或旅行证及复印件；<br>
        Step 2. 递交材料<br>
        递交至泰国大使馆签证处或泰国驻中国各领事馆。<br>

        签证费用:180元。(单次入境)<br>

        办理时间: 所有类型的签证办理需三个工作日（如: 周五送签，下周三出签）。<br>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="luodiqianzheng">
      <div class="title">
        落地签证
      </div>
      <div class="text">
        Step 1. 准备材料<br>
        签证所需的申请材料会因不同条件略有差别，一般需要特别准备的主要包括：<br>

        1. 有效期6个月以上的护照及复印件；<br>
        2. 一张填写完整的旅游签证申请表；<br>
        3. 一张六个月内拍的两寸彩色免冠照片；<br>
        4. 入境后15天之内有效的返程机票复印件和确认过的机票<br>
        5. 入境时个人必须携带外币价值不少于10,000铢, 如一个家庭不少于20, 000铢。<br>
        Step 2. 递交材料<br>
        落地签在海关在泰国开放落地签证的32个口岸根据引导牌到相关办公室办理。<br>

        签证费用：2000泰铢。<br>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="shaungtiao">
      <div class="title">
        双条、出租车和Tuktuk
      </div>
      <div class="text">
        双条车是泰国特有的公共交通方式，上车前询问司机是否能够顺路，单程价格20到40铢，随叫随停。<br>

        出租车主要是在曼谷，上车前一定要问清是不是打表（by meter）。<br>

        Tuktuk为东南亚普遍的短途交通工具，司机开价会很高，记得砍价。<br>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="qinggui">
      <div class="title">
        轻轨和地铁
      </div>
      <div class="text">
        目前只有曼谷有轻轨（BTS）和地铁（MRT）系统，能够方便到达城市的主要区域，价格依照乘坐距离计算。
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="zuche">
      <div class="title">
        租车
      </div>
      <div class="text">
        建议选择国际连锁的大型租车公司，在主要城市都有网点，方便在特殊情况下及时联系公司进行解决。<br>

        租车公司：<br>

        1.AVIS ：www.avis.cn/<br>

        2.hertz：https://www.hertz.cn/rentacar/reservation/?targetPage=reservationOnHomepage.jsp&refererUrl=&searchString=&id=36373&LinkType=HZLK
        <br>
        详情可以参考ZUZUCHE平台上的比价信息<br>

        w.zuzuche.com/topic/1000yuan/?bd=1<br>

        关于驾照：<br>

        中国驾照需要进行翻译与公证方可使用
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="lvyouzhonggao">
      <div class="title">
        旅游忠告
      </div>
      <div class="text">
        1、注意尊重当地的习俗，尊重泰王室成员，尊重佛教礼仪。泰国王室受到特别的崇敬和尊重，在随处可见的国王画像面前请保持恰当的礼仪，不要用手指点，同时要注意言辞。在泰国切不可与人讨论关于国王、王室的话题，有可能会触犯法律。<br>

        2、 进入寺庙参观请需要注意着装，不可太过暴露，不能身穿吊带或无袖裙，裙子或裤子需要过膝。进入佛殿之前必须要脱鞋，但在佛寺周围行走不必脱鞋。不能踩门槛，不可攀爬院墙、佛塔。有的寺庙禁止拍摄佛像，需要留意一下指示牌。每尊佛像不论大小、完整程度，都是神圣物品，不要攀爬或踩踏佛像，不要把小佛像放在裤兜里。
        <br>
        3、泰国法律规定，严禁在公共场所吸烟。如有需要，需要找到专门的吸烟室，在订酒店房间时也请说明需要入住可吸烟房间（Smoking Room）。
        <br>
        4、在泰国骑车或开车时应靠左行驶，不要在路中央行驶，也不要随意停放车辆。骑摩托时一定佩戴头盔，遵守当地交规，避免发生事故。
        <br>
        5、泰国虽热，空调温度却开得很低，旅程请准备长衣防凉。
        <br>
        6、每天8:00和18:00，很多公共场合会播放泰国国歌，凡是听到国歌声的泰国民众都会立定，停下手头所有的事情，以表示敬意。在电影院看电影之前，也会播放纪念泰国国王的奏乐，全体人员起立致敬，请注意起立。
        <br>
        7、中国驻泰使馆提醒中国公民，入境泰国需要随身携带2万泰铢现金（约合4000元人民币）或等值外币，银行信用卡等无效。泰移民官以随机方式抽查，现金不足额者将被拒入境。这一规定适用包括落地签在内的各种签证入境人士。
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="chuyoubibei">
      <div class="title">
        出游必备
      </div>
      <div class="text">
        1、服饰类：来泰国旅游选择怎样的服装主要取决于您来旅游的季节和行程路线。短裤，无袖T恤，沙滩鞋是最实用的。泰国有些地方对着装的要求很高，并且不太喜欢打扮得太过随意的人，尤其是有些寺庙或者高级酒店，拒绝衣冠不整的人入内。

        宽松轻质，透气性好，易干的服装是雨季旅游最好的选择，街道在雨季容易被大水淹没，所以寺庙和一些办公场所会要求您拖鞋后再入内，所以拖鞋是很实用的，并且建议常备雨披或者雨伞。

        在凉季的时候，如果您准备去北部旅游，比如说去夜丰颂（Mae Hong Son） 或者清莱 （Chiang Rai），带一件长袖T恤或者夹克是个不错的选择。事实上，在泰国北部，有人会受寒而亡，在海拔2565米（8415英尺）高的茵他侬山（Doi Inthanon） 甚至能看到雪。所以在旅行前一定要查看天气预报，在去山区旅游之前，在清迈（Chiang Mai）或者清莱（Chiang Rai）的商店里购置保暖衣物。
        <br>
        2、证件类：护照、签证、体检证明（旅游签不需要）。
        <br>
        3、护肤品：建议使用控油防晒型化妆品和补水型保养品。
        <br>
        4、一些常用的发烧药、感冒药最好准备一些。
        <br>
        5、日用百货：主要指的是洗漱用品。
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="fengsujinji">
      <div class="title">
        风俗禁忌
      </div>
      <div class="text">
        皇室禁忌
        <br>

        1、泰国人都非常尊重他们的国王、王后以及王室家族，因此在别人面前批评王室要绝对慎重，泰国法律有对王室不敬罪的处罚条例。因此游客要小心表现适当的礼仪，如在公众场合有王室人员出席时， 最好是留意其他人的动作，跟着照做。
        <br>
        2、身为游客听到演奏泰国国歌，应马上停止活动并肃立。
        <br>
        社交礼仪
        <br>
        1、当泰国人互相打招呼时，不会采用典型的握手方式，而以双手合十， 状似祷告；泰国人称"wai"。一般来说，年幼的先向年长的打招呼，而年长的随后回礼合十。
        <br>
        2、以足部的下肢指向他人是不礼貌的行为。所以，与人对坐，应该避免这种情况出现。或若，向某人指示任何东西，请以手代脚。
        <br>
        3、泰国人认为”头部”在字义上或象征上是身体上的最高部分。因此，他们是不容许抚拍任何人的头部，纵使是友善的表现。同样，观察泰国人的社交聚会，年青人会在年长人士前刻意地把头部垂下，下至不高于年长人士的身高，以免留下"看不起"他们的印象。
        <br>
        4、公开宣示男女之间的爱意行为是难以接受的。你可能看过一些十分西化的年青夫妇，手牵手的情景，但是，这样子只在开明的社群中常见。
        <br>
        5、在泰国，发脾气是下下之策，特别是公然地发脾气，至于想要的也将无法得逞。泰国人认为这样子代表了卑劣的仪态。然而，保持冷静和平抑情绪则是上上之策，至于想要的也将得心应手。
        <br>
        6、若泰国人以你的名字代替姓氏称呼你时，如：卜克先生或玛莉女士，千万不要感到惊讶。因为，他们是这样互相称呼的，一般尊称"Kun"（先生、太太、女士）在名字前。
        <br>
        7、通常泰国女性都是比较保守的，请不要在未经她们同意的情况下，触摸她们（身体）。
        <br>
        8、泰国人认为人的右手清洁而左手不洁，左手只能用来拿一些不干净的东西。因此，重要东西用左手拿会招来嫌弃。左撇子在日常生活中可以不注意，但在正式场合绝对不可以。在比较正式的场合，还要双手奉上，用左手则会被认为是鄙视他人。泰国人吃饭用右手，给别人递东西时也用右手，以示尊敬。如不得已要用左手时，先应说声“左手，请原谅”。
        <br>
        9、与左手一样，脚掌也被认为是不净的。在入坐时，应避免将脚放在桌子上。用脚尖撞人或指人都会被严厉地呵斥，也绝对不能把脚掌冲向佛。泰国人认为脚部是卑贱的，只能用来走路，不能干其他事情，例如用脚踢门和用脚指东西等。坐着时，不要翘起脚和把脚底对着别人。妇女落座，要求更为严格，双腿必须并拢，否则会被认为是不文明，缺乏教养。
        <br>
        10、在泰国的公众场合，不要做出有损风貌的举动，如拥抱、亲吻或握手，这被认为是不符合当地风俗的。另外，仅在某些海滩允许裸体晒日光浴，在其他地方，泰国人不喜欢这种行为，尽管未构成犯法，但是违背泰国人的佛教理念。泰国男女间讲究授受不亲，即使在公开场合跳舞时，身体也不可接触。
        <br>
        11、泰国人不用红笔签名，因为泰国人死后，要在棺材口写上其姓氏，写时用的是红笔。泰国人喜爱红、黄色, 禁忌褐色。人们习惯用颜色表示不同日期：星期日为红色，星期一为黄色，星期二为粉红色，星期三为绿色，星期四为橙色, 星期五为淡蓝色, 星期六为紫红色。人们常按不同的日期, 穿不同色彩的服装。过去白色用于丧事, 现在改为黑色。
        <br>
        12、在人经常走过的地方，如门口、房顶等禁止悬挂衣物，特别是裤衩和袜子之类。
        <br>
        13、在一些农村里，忌赞美别人小孩子长得漂亮。
        <br>
        14、不能拣水灯。泰国人在泰历的每年12月月圆时要举行水灯节，这是泰国最热闹的一个节日。在观看水灯时一定要注意，无论那水灯多么精致美丽，都绝对不能拣起来，否则就会受到严厉的惩罚。
        <br>
        15、避免谈论的问题：政治、腐化、王室成员。即使是朋友之间，也不喜欢谈论个人问题。
        <br>
        16、假如你冒犯了别人，要微笑，说“对不起”以示歉意，还要双手合十。
        <br>
        17、进入泰国人的住宅之前要脱鞋，不能踩门槛。如果主人坐在地板上，客人要照样行事。脚不要交叉，把腿卷屈在身体下面，不要露出脚底。
        <br>
        18、给泰国人送礼，最好选用有包装的食物、糖果等，并以右手递给受礼者。如果泰国人送你一件礼品，在接受礼品前应先合十向他们表示感谢。除非对方要你打开，否则不要当面打开。
        <br>
        宗教禁忌
        <br>
        1、泰国寺院是泰国人公认的神圣地方。请在进入佛教寺庙时衣着得体端庄， 身着任何的短裙、短裤或袒胸露背装都将不得入内。在进入到佛堂、回教寺或私人住宅时， 游客需要脱鞋， 并注意不可脚踏门槛。
        <br>
        2、游览佛寺前， 先检查一下衣着， 袒胸露背者及穿短裤、背心者是禁止入内的， 甚至衬衣没塞进裤子、袖管翻卷在胳膊上的人也不准进佛寺的门。游客在进入佛殿前还要脱鞋，否则， 会被视为沾污佛堂。游客如果对寺庙、佛像、和尚做出轻率的举动， 就被视为罪恶滔天。拍摄佛像尤其要小心， 绝对不可爬上佛像拍照。
        <br>
        3、不要触摸佛像，不要爬上寺院内外的任何一尊佛像。对所有佛像， 不管大小都要尊敬。不要把佛像放在裤袋内， 泰国人认为身体的下部接触佛像是对佛像的亵渎。不能手指僧侣， 不能接触（身体）僧侣。尤其女性不许与僧侣握手， 在汽车上不许与僧侣邻坐， 即使是僧侣主动前来打招呼（外国女性常遇到）也应礼貌地拉开距离。
        <br>
        4、女士若想将东西奉给僧侣， 宜托男士转交， 如果要亲手赠送， 那么僧侣便会张开一块黄袍或手巾， 承接该女士交来的东西， 过程中僧侣是不容许碰触女性的。
        <br>
        5、 遇女尼时， 男子亦要小心不要触及她们身体。
        <br>
        6、遇见托钵化缘的和尚， 千万不能送现金， 因为这是破坏僧侣戒律的行为。
        <br>
        7、晴天路遇和尚时， 如果从和尚面前经过， 必须绕开和尚的身影。按佛教说法， 和尚的身影即和尚本人， 跨越和尚的身影， 等于跨越和尚， 这是对和尚不尊重的表现。
        <br>
        8、在给僧侣拍照前， 应先征得同意， 拍照后应有礼貌地表示谢意。
        <br>
        9、泰国法律中， 有部份是关于保护宗教的， 这些法例不单指佛教， 也包括国内其他信仰。不懂得宗教禁忌的人， 即使并非故意侮辱宗教， 也会引起别人的反感。在清真寺内， 男士要戴帽， 女士应穿长裤或长裙， 头发用领巾包扎。进入清真寺内也要脱鞋。
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="xiaofei">
      <div class="title">
        小费
      </div>
      <div class="text">
        除了大部分高档旅馆和饭店会在账单中增加10%的服务费外，还有其他一些地方可能需要支付小费。当然，这些不算是必须，更多的是一种礼仪。另外，在给小费的时候，不要给硬币，因为硬币是给乞丐的。要注意的是给小费最少要给20铢。
        <br>
        餐厅：一般是餐费的15%（快餐、自助餐、或帐单里写明已经包括，则不需要付小费）
        <br>
        行李搬运：一般1美元/件
        <br>
        的士：一般是车费的15%
        <br>
        酒吧：1美元（如果叫酒需给调酒师付小费）
        <br>
        游览：一般5-10美元/天（付给司机和导游）
        <br>
        Spa按摩：一般是费用的20%
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="yiliao">
      <div class="title">
        医疗信息
      </div>
      <div class="text">
        泰国是亚洲乃至世界最富盛名的旅游目的地之一。在医疗旅游方面，泰国可以说是重视自身保健人士的亚洲首选目的地，因为泰国是亚洲国家中最早提倡医疗旅游服务质量国家的之一，每年有超过一百多万来自世界各地的人来泰国接受医疗服务。全泰国拥有公立医院956家，私立医院309家。当然游客可以在旅行之前就自备一些医疗用品，例如感冒药、晕车药、消食片、止泻药、驱蚊水、创可贴等。
        <br>
        游客有可能会传染上像登革热这种疾病，这是一种由蚊子传播的，只要做好防蚊措施就没有问题了。热门景点主要医院：
        <br>
        曼谷医院
        <br>
        地址：2 Soi Soonvijai 7, New Petchaburi Rd., Bangkok, Thailand 10310
        <br>
        电话： +66-02-3103000
        <br>
        网址：http://www.bangkokhospital.com/
        <br>
        普吉国际医院（Phuket International Hospital）
        <br>
        地址：44 Chalermprakiat Ror 9 Rd, Phuket 83000
        <br>
        电话： +66-76-249400
        <br>
        网址：http://www.phuketinternationalhospital.com/
        <br>
        清迈拉姆医院（Chiang Mai Ram Hospital）
        <br>
        地址：8 Boonreungrit Road,A MUANG,Ching Mai
        <br>
        电话：+66-53-224880
        <br>
        网址：http://www.chiangmairam.com/
        <br>
        芭提雅国际医院
        <br>
        地址：Soi 4 Pattaya 2nd Rd, Pattaya City
        <br>
        电话：+66-38-428374
        <br>
        网址：http://www.pih-inter.com/
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="youju">
      <div class="title">
        邮局信息
      </div>
      <div class="text">
        泰国邮政服务高效、可靠，全国各主要城镇均设有邮政机构，营业时间为周一至周五8:00-16:30，周六周日9:00-13:00。坐落于New Road的曼谷邮政总局的营业时间为周一至周五8:00-18:00，周六周日9:00-13:00。
        <br>
        法定节假日时所有邮局均不营业，但多数大酒店均有信件、包裹代寄服务。
        <br>
        泰国邮政除了提供普通、挂号信件的国内国际陆地、航空寄送服务之外，还提供电报服务。
        <br>
        邮资：寄明信片到中国15泰铢。
        <br>
        热门景点主要邮局：
        <br>
        曼谷中央邮局
        <br>
        地址：123 Moo 5, U Thong Road
        <br>
        营业时间：周一到周六8:30-16:30，周日9:00-12:00。
        <br>
        清迈邮政总局
        <br>
        地址：清迈火车站附近
        <br>
        电话：+66-53-241070
        <br>
        芭提雅邮局
        <br>
        地址：芭提雅二路13-1巷
        <br>
        营业时间：周一至周五8:00-20:00，周六至周日8：00-13:00
      </div>
    </div>
    <div role="tabpanel" class="tab-pane active" id="dianhua">
      <div class="title">
        重要电话网址
      </div>
      <div class="text">
        报警、紧急求助：191；泰国国际区号为：66
        <br>
        1、泰国国家旅游局（提供旅游咨询）
        <br>
        电话：1672 工作时间：每日08:00-20:00
        <br>
        2、泰国旅游警察（提供旅游紧急协助）
        <br>
        电话：1155 工作时间：每日24小时
        <br>
        3、泰国旅游体育部防治旅游欺诈局
        <br>
        电话：023650650 传真：023560655
        <br>
        工作时间：周一至周五 08:30-16:30
        <br>
        4、曼谷素旺那普国际机场防治旅游欺诈局
        <br>
        电话：021344077 工作时间：每日24小时
        <br>
        5、中国驻泰使馆（提供领事保护和协助）：
        <br>
        电话：0854833327。
        <br>
        6、急救中心：1691
        <br>
        7、医疗救助：1669
        <br>
        8、火警：199
        <br>
        9、曼谷旅客协助中心: 02-2281-5051 、02-282-8129
        <br>
        重要网址
        <br>
        泰王国政府官方网站：http://www.thaigov.go.th/
        <br>
        泰国观光局：http://www.tattpe.org.tw/Main/Main.aspx
        <br>
        泰国国家旅游局官网：http://tourismthailand.org.cn/
        <br>
        泰国国家旅游局上海办事处：http://www.tatshanghai.cn/jingdian/bangkok/
      </div>
    </div>
  </div>

  <div class="col-md-1"></div>
</div>
<script type="text/javascript">
    jQuery("#jquery-accordion-menu").jqueryAccordionMenu();
</script>
</body>
</html>
