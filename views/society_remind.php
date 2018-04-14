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
      <div class="cd-full-width">
        <h2>张钧甯</h2>
        <!--
        <div class="hangqing_content zk">
          <div id="float2" class="cx_tb">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="cx_tb" id="TableBj">
              <tbody>
              <tr>
                <th class="dr" width="165" colspan="2" height="60" rowspan="2"><strong>货币</strong></th>
                <th colspan="8" class="bo_line"><strong>银 行</strong></th>
              </tr>
              <tr class="color2">
                <th class="hl" width="68">中国银行</th>
                <th class="hl" width="68">工商银行</th>
                <th class="hl" width="68">交通银行</th>
                <th class="hl" width="68">农业银行</th>
                <th class="hl" width="68">浦发银行</th>
                <th class="hl" width="68">建设银行</th>
                <th class="hl" width="68">招商银行</th>
                <th class="last" width="68">光大银行</th>
              </tr>
              </tbody></table>
          </div>


          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="cx_tb2" id="TableBj">
            <tbody>
            <tr>
              <th width="165" colspan="2" rowspan="2"></th>
              <th colspan="8"></th>
            </tr>
            <tr>
              <th width="68"></th><th width="68"></th><th width="68"></th><th width="68"></th><th width="68"></th><th width="68"></th><th width="68"></th><th width="68"></th>
            </tr>
            <tr align="center">
              <td align="center" rowspan="4" class="fir_td"><div>美元/人民币</div></td>
              <td class="dr" align="left">
                中间价
              </td>
              <td colspan="8" rowspan="76" style="padding:0px; border:0px">

                <div id="BankData">
                  <table cellpadding="0" cellspacing="0" background="0" width="550">
                    <tbody><tr><td width="68">628.98</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">628.60</td><td width="68"></td><td width="68">628.70</td><td width="68"></td></tr>
                    <tr><td width="68">622.31</td><td width="68">622.49</td><td width="68">623.40</td><td width="68">623.14</td><td width="68">622.31</td><td width="68">623.09</td><td width="68">622.41</td><td width="68">622.4724</td></tr>
                    <tr><td width="68">627.42</td><td width="68">627.52</td><td width="68">628.56</td><td width="68">627.67</td><td width="68">627.40</td><td width="68">627.43</td><td width="68">627.57</td><td width="68">627.7540</td></tr>
                    <tr><td width="68">630.08</td><td width="68">630.16</td><td width="68">631.20</td><td width="68">630.06</td><td width="68">629.86</td><td width="68">630.2</td><td width="68">630.27</td><td width="68">630.2690</td></tr>
                    <tr><td width="68">5.8617</td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68">5.84206</td><td width="68"></td><td width="68">5.8440</td><td width="68"></td></tr>
                    <tr><td width="68">5.6408</td><td width="68">5.6580</td><td width="68">5.69735</td><td width="68">5.641</td><td width="68">5.65511</td><td width="68">5.6577</td><td width="68">5.6365</td><td width="68">5.6333</td></tr>
                    <tr><td width="68">5.8217</td><td width="68">5.8245</td><td width="68">5.88637</td><td width="68">5.821</td><td width="68">5.82161</td><td width="68">5.8242</td><td width="68">5.8206</td><td width="68">5.8203</td></tr>
                    <tr><td width="68">5.8646</td><td width="68">5.8678</td><td width="68">5.92771</td><td width="68">5.862</td><td width="68">5.86251</td><td width="68">5.8687</td><td width="68">5.8674</td><td width="68">5.8671</td></tr>
                    <tr><td width="68">774.98</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">774.61</td><td width="68"></td><td width="68">774.81</td><td width="68"></td></tr>
                    <tr><td width="68">747.97</td><td width="68">750.13</td><td width="68">744.85</td><td width="68">747.28</td><td width="68">749.82</td><td width="68">749.92</td><td width="68">747.30</td><td width="68">746.9426</td></tr>
                    <tr><td width="68">771.96</td><td width="68">772.22</td><td width="68">769.96</td><td width="68">772.47</td><td width="68">771.90</td><td width="68">772.23</td><td width="68">771.71</td><td width="68">771.7374</td></tr>
                    <tr><td width="68">777.65</td><td width="68">777.95</td><td width="68">775.36</td><td width="68">777.9</td><td width="68">777.33</td><td width="68">777.42</td><td width="68">777.91</td><td width="68">777.9360</td></tr>
                    <tr><td width="68">894.67</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">895.38</td><td width="68"></td><td width="68">896.15</td><td width="68"></td></tr>
                    <tr><td width="68">865.08</td><td width="68">867.67</td><td width="68">854.05</td><td width="68">863.39</td><td width="68">866.72</td><td width="68">867.44</td><td width="68">864.34</td><td width="68">863.8458</td></tr>
                    <tr><td width="68">892.82</td><td width="68">893.21</td><td width="68">882.84</td><td width="68">892.5</td><td width="68">892.24</td><td width="68">892.98</td><td width="68">892.57</td><td width="68">892.5212</td></tr>
                    <tr><td width="68">899.4</td><td width="68">899.85</td><td width="68">889.04</td><td width="68">898.77</td><td width="68">898.52</td><td width="68">899.7</td><td width="68">899.73</td><td width="68">899.6900</td></tr>
                    <tr><td width="68">487.73</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">489.90</td><td width="68"></td><td width="68">489.76</td><td width="68"></td></tr>
                    <tr><td width="68">473.03</td><td width="68">474.11</td><td width="68">468.89</td><td width="68">472.28</td><td width="68">474.21</td><td width="68">474.03</td><td width="68">472.37</td><td width="68">472.2378</td></tr>
                    <tr><td width="68">488.2</td><td width="68">488.07</td><td width="68">482.70</td><td width="68">487.96</td><td width="68">488.18</td><td width="68">487.99</td><td width="68">487.80</td><td width="68">487.9137</td></tr>
                    <tr><td width="68">491.79</td><td width="68">491.69</td><td width="68">486.08</td><td width="68">491.88</td><td width="68">491.61</td><td width="68">491.66</td><td width="68">491.72</td><td width="68">491.8327</td></tr>
                    <tr><td width="68">499.39</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">499.87</td><td width="68"></td><td width="68">499.84</td><td width="68"></td></tr>
                    <tr><td width="68">482.47</td><td width="68">483.90</td><td width="68">474.37</td><td width="68">481.88</td><td width="68">483.87</td><td width="68">483.87</td><td width="68">482.10</td><td width="68">481.9885</td></tr>
                    <tr><td width="68">498.2</td><td width="68">498.15</td><td width="68">490.12</td><td width="68">497.88</td><td width="68">498.12</td><td width="68">498.12</td><td width="68">497.84</td><td width="68">497.9881</td></tr>
                    <tr><td width="68">501.87</td><td width="68">501.85</td><td width="68">494.04</td><td width="68">501.88</td><td width="68">501.62</td><td width="68">501.87</td><td width="68">501.84</td><td width="68">501.9881</td></tr>
                    <tr><td width="68">653.27</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">652.18</td><td width="68"></td><td width="68">652.52</td><td width="68"></td></tr>
                    <tr><td width="68">629.87</td><td width="68">631.77</td><td width="68">633.34</td><td width="68">629.29</td><td width="68">631.31</td><td width="68">631.62</td><td width="68">629.36</td><td width="68">628.9557</td></tr>
                    <tr><td width="68">649.93</td><td width="68">650.38</td><td width="68">654.37</td><td width="68">650.17</td><td width="68">649.89</td><td width="68">650.22</td><td width="68">649.91</td><td width="68">649.8339</td></tr>
                    <tr><td width="68">654.49</td><td width="68">655.21</td><td width="68">659.61</td><td width="68">655.4</td><td width="68">654.47</td><td width="68">655.11</td><td width="68">655.13</td><td width="68">655.0535</td></tr>
                    <tr><td width="68">80.13</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">80.07</td><td width="68"></td><td width="68">80.09</td><td width="68"></td></tr>
                    <tr><td width="68">79.29</td><td width="68">79.30</td><td width="68">79.43</td><td width="68">79.3</td><td width="68">79.35</td><td width="68">79.38</td><td width="68">79.37</td><td width="68">79.2967</td></tr>
                    <tr><td width="68">79.92</td><td width="68">79.95</td><td width="68">80.07</td><td width="68">79.94</td><td width="68">79.92</td><td width="68">79.94</td><td width="68">79.93</td><td width="68">79.9375</td></tr>
                    <tr><td width="68">80.24</td><td width="68">80.28</td><td width="68">80.39</td><td width="68">80.26</td><td width="68">80.23</td><td width="68">80.26</td><td width="68">80.25</td><td width="68">80.2579</td></tr>
                    <tr><td width="68">0.5875</td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">0.5644</td><td width="68">0.5687</td><td width="68">0.5731</td><td width="68">0.566</td><td width="68"></td><td width="68">0.5685</td><td width="68"></td><td width="68">0.5664</td></tr>
                    <tr><td width="68">0.585</td><td width="68">0.5854</td><td width="68"></td><td width="68">0.566</td><td width="68"></td><td width="68">0.585</td><td width="68"></td><td width="68">0.5852</td></tr>
                    <tr><td width="68">0.5896</td><td width="68">0.5898</td><td width="68">0.6159</td><td width="68">0.608</td><td width="68"></td><td width="68">0.6061</td><td width="68"></td><td width="68">0.5899</td></tr>
                    <tr><td width="68">20.14</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">20.1765</td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">19.48</td><td width="68">19.48</td><td width="68">19.45</td><td width="68">19.46</td><td width="68">19.5308</td><td width="68">19.477231</td><td width="68"></td><td width="68">19.4645</td></tr>
                    <tr><td width="68">20.1</td><td width="68">20.11</td><td width="68">20.09</td><td width="68">20.11</td><td width="68">20.0958</td><td width="68">20.098079</td><td width="68"></td><td width="68">20.1106</td></tr>
                    <tr><td width="68">20.26</td><td width="68">20.26</td><td width="68">20.25</td><td width="68">20.27</td><td width="68">20.338</td><td width="68">20.259319</td><td width="68"></td><td width="68">20.2722</td></tr>
                    <tr><td width="68">77.85</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">77.71</td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">75.15</td><td width="68">76.99</td><td width="68">77.12</td><td width="68">74.94</td><td width="68">76.46</td><td width="68">74.93</td><td width="68"></td><td width="68">76.9149</td></tr>
                    <tr><td width="68">77.76</td><td width="68">77.61</td><td width="68">77.74</td><td width="68">77.74</td><td width="68">77.39</td><td width="68">77.57</td><td width="68"></td><td width="68">77.5364</td></tr>
                    <tr><td width="68">78.07</td><td width="68">77.94</td><td width="68">78.04</td><td width="68">77.74</td><td width="68">78.96</td><td width="68">77.89</td><td width="68"></td><td width="68">77.8472</td></tr>
                    <tr><td width="68">463.79</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">464.54</td><td width="68"></td><td width="68">464.48</td><td width="68"></td></tr>
                    <tr><td width="68">448.5</td><td width="68">449.67</td><td width="68">442.10</td><td width="68"></td><td width="68">449.67</td><td width="68">449.6</td><td width="68">447.99</td><td width="68">447.7746</td></tr>
                    <tr><td width="68">462.78</td><td width="68">462.91</td><td width="68">456.77</td><td width="68"></td><td width="68">462.67</td><td width="68">462.83</td><td width="68">462.62</td><td width="68">462.6385</td></tr>
                    <tr><td width="68">466.04</td><td width="68">466.35</td><td width="68">460.43</td><td width="68"></td><td width="68">468.26</td><td width="68">466.32</td><td width="68">466.34</td><td width="68">466.3545</td></tr>
                    <tr><td width="68">479.06</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">479.46</td><td width="68"></td><td width="68">479.23</td><td width="68"></td></tr>
                    <tr><td width="68">462.92</td><td width="68">463.98</td><td width="68">462.53</td><td width="68">462.23</td><td width="68">464.11</td><td width="68">463.92</td><td width="68">462.22</td><td width="68">462.2142</td></tr>
                    <tr><td width="68">477.66</td><td width="68">477.64</td><td width="68">478.13</td><td width="68">477.81</td><td width="68">477.77</td><td width="68">477.58</td><td width="68">477.31</td><td width="68">477.5574</td></tr>
                    <tr><td width="68">481.02</td><td width="68">481.19</td><td width="68">481.47</td><td width="68">481.17</td><td width="68">481.14</td><td width="68">481.18</td><td width="68">481.15</td><td width="68">481.3932</td></tr>
                    <tr><td width="68">74.78</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">74.61</td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">71.98</td><td width="68">72.23</td><td width="68">72.35</td><td width="68">71.94</td><td width="68">72.22</td><td width="68">72.22</td><td width="68"></td><td width="68">71.9299</td></tr>
                    <tr><td width="68">74.27</td><td width="68">74.36</td><td width="68">74.75</td><td width="68">74.33</td><td width="68">74.35</td><td width="68">74.35</td><td width="68"></td><td width="68">74.3176</td></tr>
                    <tr><td width="68">74.87</td><td width="68">74.91</td><td width="68">75.35</td><td width="68">74.93</td><td width="68">74.88</td><td width="68">74.91</td><td width="68"></td><td width="68">74.9146</td></tr>
                    <tr><td width="68">104.07</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">104.04</td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">100.4</td><td width="68">100.74</td><td width="68">100.00</td><td width="68">100.29</td><td width="68">99.88</td><td width="68">100.71</td><td width="68"></td><td width="68">100.3119</td></tr>
                    <tr><td width="68">103.59</td><td width="68">103.71</td><td width="68">103.32</td><td width="68">103.62</td><td width="68">103.62</td><td width="68">103.68</td><td width="68"></td><td width="68">103.6418</td></tr>
                    <tr><td width="68">104.43</td><td width="68">104.48</td><td width="68">104.14</td><td width="68">104.45</td><td width="68">104.88</td><td width="68">104.46</td><td width="68"></td><td width="68">104.4742</td></tr>
                    <tr><td width="68">80.95</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">80.86</td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">77.97</td><td width="68">78.24</td><td width="68">77.45</td><td width="68">77.89</td><td width="68">78.27</td><td width="68">78.23</td><td width="68"></td><td width="68">77.9070</td></tr>
                    <tr><td width="68">80.46</td><td width="68">80.55</td><td width="68">80.02</td><td width="68">80.48</td><td width="68">80.57</td><td width="68">80.54</td><td width="68"></td><td width="68">80.4931</td></tr>
                    <tr><td width="68">81.1</td><td width="68">81.15</td><td width="68">80.66</td><td width="68">81.12</td><td width="68">81.15</td><td width="68">81.14</td><td width="68"></td><td width="68">81.1397</td></tr>
                    <tr><td width="68">12.08</td><td width="68"></td><td width="68">-</td><td width="68"></td><td width="68">12.1048</td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">11.68</td><td width="68">13.392</td><td width="68">11.64</td><td width="68"></td><td width="68">11.911</td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">12.05</td><td width="68">13.392</td><td width="68">-</td><td width="68"></td><td width="68">12.0563</td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">12.15</td><td width="68">13.833</td><td width="68">-</td><td width="68"></td><td width="68">12.2985</td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">52.15</td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">48.02</td><td width="68">49.48</td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68">50.5</td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">52.01</td><td width="68">52.01</td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68">51.91</td><td width="68"></td><td width="68"></td></tr>
                    <tr><td width="68">52.37</td><td width="68">52.39</td><td width="68"></td><td width="68"></td><td width="68"></td><td width="68">52.43</td><td width="68"></td><td width="68"></td></tr>
                    </tbody></table>
                </div>
              </td>
            </tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>日元/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>欧元/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>英镑/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr><tr align="center">
              <td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>澳元 /人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>加元/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>瑞士法郎/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>港币/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>韩元/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>泰铢/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>澳门元/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>新西兰元/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>新加坡元/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>瑞典克郎/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>丹麦克郎/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>挪威克郎/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>菲律宾比索/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            <tr align="center"><td align="center" rowspan="4" class="fir_td"><div>南非兰特/人民币</div></td>
              <td class="dr" align="left">中间价</td></tr>
            <tr align="center"><td class="dr" align="left">钞买价</td></tr>
            <tr align="center"><td class="dr" align="left">汇买价</td></tr>
            <tr align="center"><td class="dr" align="left">钞/汇卖价</td></tr>

            </tbody></table>

        </div>

      </div>
      -->
      <!-- .cd-full-width -->
    </li>

    <li>
      <div class="cd-half-width">
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
        <a  class="cd-btn">查看更多</a>

      </div> <!-- .cd-half-width -->

      <div class="cd-half-width cd-img-container">
        <img src="assets/tech-1.jpg" alt="tech 1">
      </div> <!-- .cd-half-width.cd-img-container -->
    </li>

    <li>
      <div class="cd-half-width cd-img-container">
        <img src="assets/tech-2.jpg" alt="tech 2">
      </div> <!-- .cd-half-width.cd-img-container -->

      <div class="cd-half-width">
        <h2>随身小件指南</h2>
        <p>1.充电宝：旅行途中最怕手机突然安静（因为没电了），于是漫长的旅途中你百无聊赖，又担心遇到紧急事情时失去联系，这时候，充电宝的存在就变得尤为重要。手机电量满满的，看着也有一股安全感~</p>
        <img src="../images/society/society_remind/3-1.jpeg">
        <p>2.洗漱用品旅行套装:折叠牙刷、小牙膏、小梳子……既满足了你精致的需求，又轻便易带。</p>
        <img src="../images/society/society_remind/3-2.jpeg">
        <p>3.旅行收纳包:多功能的收纳包，可以放置一些零碎的小物件。</p>
        <img src="../images/society/society_remind/3-3.jpg">
        <p>4.镜头手机壳:手机拍照功能越来越强大，可以用硬件来提升图片效果，这个手机壳中包含了广角，鱼眼，长焦，微距等镜头。</p>
        <img src="../images/society/society_remind/3-4.jpg">
        <p>5.“会说话”的T恤袋:这件T恤把40个最常用到的图标印在了胸口上。图标包括了火车、公交、医院、机场、Wi-Fi、电话、啤酒等等，而且使用的是目前几乎全世界都能一眼看懂的抽象图标。当你不会讲当地语言，也忘了怎么说某个特意学过的词，这件T恤就能派上用场了。</p>
        <img src="../images/society/society_remind/3-5.jpeg">
        <p>6.手机防水袋：去海岛的时候一定要必备一个手机防水袋，既能够防止手机进水还能够防止进入沙子，非常方便。</p>
        <img src="../images/society/society_remind/3-6.jpg">
        <p>7.手环数据线:小而美，既是数据线又是裤裤的手环，不必再把一大坨数据线塞在包里，大大方方地戴在手上，好看又实用。</p>
        <img src="../images/society/society_remind/3-7.jpg">
        <p>8.证件:最重要的就是我们自己的名信片了，出门在外它就是我们的代表，没了它我们就相当于黑户。如果在境外，我们可能回家都成了问题，所以出发之前一定要好好检查。</p>
        <p>9.信用卡:身上不要携带大量的现金，以防被偷盗。</p>
        <img


        <a  class="cd-btn">查看更多</a>
      </div> <!-- .cd-half-width -->

    </li>

    <li class="cd-bg-video">
      <div class="cd-full-width">
        <h2>演艺经历</h2>
        <p>入行初期，张钧甯主要以拍摄音乐录影带和广告为主。</p>
        <a  class="cd-btn">查看更多</a>
      </div> <!-- .cd-full-width -->

      <div class="cd-bg-video-wrapper" data-video="assets/video/video">
        <!-- video element will be loaded using jQuery -->
      </div> <!-- .cd-bg-video-wrapper -->
    </li>

    <li>
      <div class="cd-full-width">
        <h2>个人生活</h2>
        <p>张钧甯的父亲是台大法学教授，母亲是儿童作家， 她与姐姐张瀛都在德国出生。</p>
        <a  class="cd-btn">查看更多</a>
      </div> <!-- .cd-full-width -->
    </li>
  </ul> <!-- .cd-hero-slider -->

  <div class="cd-slider-nav">
    <nav>
      <span class="cd-marker item-1"></span>

      <ul>
        <li class="selected"><a href="#0">汇率中心</a></li>
        <li><a href="#0">健康助手</a></li>
        <li><a href="#0">随身小件指南</a></li>
        <li><a href="#0">不要</a></li>
        <li><a href="#0">不要</a></li>
      </ul>
    </nav>
  </div> <!-- .cd-slider-nav -->
</section> <!-- .cd-hero -->

<script src="../js/society_remind/jquery-2.1.1.js"></script>
<script src="../js/society_remind/main.js"></script> <!-- Resource jQuery -->
</body>
</html>