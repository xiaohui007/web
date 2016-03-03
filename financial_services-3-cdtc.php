<?php $page_title="车贷套餐-金融服务"; $page_class="金融服务"; $page_name="车贷套餐"; include 'inc/header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/custom.css">

<style type="text/css">
#plans #model .selectstyle {width:184px; height:38px; position:relative; border:1px solid #585858; display:inline-block; line-height:38px; overflow:hidden; font-size:16px; background:url(images/financial/select-downarraw.png) 160px 16px no-repeat;}
#plans #model .selectstyle select {position:absolute; width:186px; height:38px; left:-1px; top:0px; margin:0; padding:0;  font-size:16px; font-family:"微软雅黑","Microsoft YaHei",Arial,"Microsoft JhengHei";}
#plans #model .selectstyle .val {display:block; padding-left:5px; color:#333; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; padding-right:24px;}
#plans #type .selectstyle {width:364px; height:38px; position:relative; border:1px solid #585858; display:inline-block; line-height:38px; overflow:hidden; font-size:16px; background:url(images/financial/select-downarraw.png) 340px 16px no-repeat;}
#plans #type .selectstyle select {position:absolute; width:366px; height:38px; left:-1px; top:0px; margin:0; padding:0; font-size:16px; font-family:"微软雅黑","Microsoft YaHei",Arial,"Microsoft JhengHei";}
#plans #type .selectstyle .val {display:block; padding-left:5px; color:#333; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; padding-right:24px;}

#plans {border:0; font-size:14px; color:#5a5657;}
#plans td {word-break:keep-all;white-space:nowrap;overflow:hidden;text-overflow:ellipsis; border-right:1px solid #fff;text-align:center; line-height:50px; vertical-align: middle;}
#plans tr:nth-child(odd)  {background-color:#d5dce2;}
#plans tr:nth-child(even) {background-color:#eaeef1;}
#plans tr:first-child {color:#fff; background-color:#0067b2;font-size:18px; font-weight:bold;font-family:"微软雅黑","Microsoft YaHei",Arial,"Microsoft JhengHei"; line-height:50px;}
#plans td a {width:88px; height:28px; display:block; background:url(images/financial/cdtc-btnbg.png) no-repeat; line-height:28px; font-weight:bold; color:#9d823d; margin:0 auto;}
</style>

<!-- start content -->
<?php include 'inc/banner.php'; ?>
<?php include 'inc/menu_sec.php'; ?>

<div class="wrapper">
  <div class="w1200">
    <h3>车贷套餐</h3>
  </div>
</div>

<div class="wrapper mb80" id="plans">
  <div class="w1200">
    <div class="row ml15 mb16">
      <div class="fl mr20" id="model">
        <select data-form="select">
          <option value="">新帝豪1</option>
          <option value="">新帝豪2</option>
          <option value="">新帝豪3</option>
          <option value="">新帝豪4</option>
        </select>
      </div>
      <div class="fl" id="type">
        <select data-form="select">
          <option value="">2016款 1.5L 手动 时尚型</option>
          <option value="">2015款 1.5L 手动 时尚型</option>
          <option value="">2014款 1.5L 手动 时尚型</option>
          <option value="">2013款 1.5L 手动 时尚型</option>
        </select>
      </div>
      <div class="clearfix"></div>
    </div>
 
    <div class="row mb16">
      <table width="1170" border="1" style="margin:0 auto;">
        <tr>
          <td>官方指导价</td>
          <td>套餐名称</td>
          <td>首付比例</td>
          <td>套餐年限</td>
          <td>尾款比例</td>
          <td>套餐月供</td>
          <td>选择</td>
        </tr>
        <tr>
          <td rowspan="6" style="vertical-align:middle;">￥69,800</td>
          <td>无忧智慧套餐</td>
          <td>50%</td>
          <td>1</td>
          <td>50%</td>
          <td>467</td>
          <td><a href="#">申请</a></td>
        </tr>
        <tr>
          <td>灵动智慧套餐A</td>
          <td>25%</td>
          <td>2</td>
          <td>25%</td>
          <td>1,943</td>
          <td><a href="#">申请</a></td>
        </tr>
        <tr>
          <td>灵动智慧套餐B</td>
          <td>25%</td>
          <td>3</td>
          <td>10%</td>
          <td>1,538</td>
          <td><a href="#">申请</a></td>
        </tr>
        <tr>
          <td>易享安稳套餐A</td>
          <td>30%</td>
          <td>4</td>
          <td>--</td>
          <td>2,387</td>
          <td><a href="#">申请</a></td>
        </tr>
        <tr>
          <td>易享安稳套餐B</td>
          <td>30%</td>
          <td>5</td>
          <td>--</td>
          <td>1,712</td>
          <td><a href="#">申请</a></td>
        </tr>
        <tr>
          <td>轻松易购套餐</td>
          <td>20%</td>
          <td>6</td>
          <td>--</td>
          <td>1,192</td>
          <td><a href="#">申请</a></td>
        </tr>
      </table>
    </div>

    <div class="f16 tc">
      <p>无忧智慧，灵动智慧套餐尾款可选择一次性还款，展期还款或选择参加二手车置换</p>
      <p>友情提示：网上售车报价为厂商指导价，实际月供以开票价为依据，详情请拨打全国车贷申请热线：400-8833-060</p>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tools.js"></script>
<!-- end content -->

<?php include 'inc/footer.php'; ?>