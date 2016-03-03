<?php $page_title="车贷计算-金融服务"; $page_class="金融服务"; $page_name="车贷计算"; include 'inc/header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/custom.css">

<style type="text/css">
#calculator {background:url(images/financial/cdjs-bg.jpg) top center no-repeat; height:583px;}

#car-model .row {height:136px; width:580px; position:relative;}
#car-model .row label {font-size:16px; border:1px solid #585858; padding:8px; margin-right:16px; display:inline-block; cursor:pointer}
#car-model .row label.ck-checked {color:#0067b2; border:1px solid #0067b2; }
#car-model .amount {position:absolute; top:0; right:0px; text-align:right;}
#car-model .amount i {width:35px; height:35px; background:url(images/financial/cdjs-ic.jpg) no-repeat; display:inline-block; margin-right:6px;}
/*下拉列表框*/
#car-model .selectstyle {width:146px; height:38px; position:relative; border:1px solid #585858; display:inline-block; line-height:38px; overflow:hidden; font-size:16px; background:url(images/financial/select-downarraw.png) 120px 16px no-repeat;}
#car-model .selectstyle select {position:absolute; left:-1px; top:0px; margin:0; padding:0; width:148px; height:38px; font-size:16px; font-family:"微软雅黑","Microsoft YaHei",Arial,"Microsoft JhengHei";}
#car-model .selectstyle .val {display:block; padding-left:5px; color:#333; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; padding-right:24px;}
/*END下拉列表框*/

#bank {}
#bank .row {margin-bottom:35px;}
#bank .result tr {line-height:36px;}
#bank .result td:nth-child(even) {text-align:right; font-family:Arial; font-style:normal;}
#bank .tips {position: }
/*下拉列表框*/
#bank .selectstyle {width:385px; height:40px; position:relative; border:0px; display:inline-block; line-height:38px; overflow:hidden; font-size:16px; background:#fff url(images/financial/select-downarraw.png) 355px 17px no-repeat;}
#bank .selectstyle select {position:absolute; left:0; top:0px; margin:0; padding:0; width:100%; height:38px; font-size:16px; font-family:"微软雅黑","Microsoft YaHei",Arial,"Microsoft JhengHei";}
#bank .selectstyle .val {display:block; padding-left:5px; color:#333; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; padding-right:24px;}
/*END下拉列表框*/
</style>

<!-- start content -->
<?php include 'inc/banner.php'; ?>
<?php include 'inc/menu_sec.php'; ?>

<div class="wrapper">
  <div class="w1200">
    <h3>车贷计算器</h3>
  </div>
</div>

<div class="wrapper mb80" id="calculator">
  <div class="w1200">
    <!-- <img src="images/financial/cdjs.jpg" /> -->
    <form action="">
      <div class="fl ml14" style="margin-top:93px" id="car-model">
        <div class="row">
          <div class="f18 fb ml30 mb16 gray">选择车型颜色</div>
          <select data-form="select">
            <option value="">选择车型</option>
            <option value="">工商银行</option>
            <option value="">中国银行</option>
            <option value="">建设银行</option>
          </select>

          <div class="amount">
            <div class="f18 fb mb8 blue">车款金额</div>
            <div class="f38 fb blue"><i></i>129,800</div>
          </div>
        </div>
        
        <div class="row">
          <div class="f18 fb ml30 mb16 gray">选择排量</div>
          <label class="ck-checked">
            <input data-form="radio" type="radio" name="displace" value="" checked="checked" >
            1.8TD+6AT
          </label>
          <label>
            <input data-form="radio" type="radio" name="displace" value="">
            2.4L+6AT
          </label>
          <label>
            <input data-form="radio" type="radio" name="displace" value="">
            3.5L+6AT
          </label> 
        </div>

        <div class="row">
          <div class="f18 fb ml30 mb16 gray">选择型号</div>
          <label class="ck-checked">
            <input data-form="radio" type="radio" name="model" value="" checked="checked">
            标准型
          </label>
          <label>
            <input data-form="radio" type="radio" name="model" value="">
            舒适型
          </label>
          <label>
            <input data-form="radio" type="radio" name="model" value="">
            豪华型
          </label>
          <label>
            <input data-form="radio" type="radio" name="model" value="">
            尊贵型
          </label>
          <label>
            <input data-form="radio" type="radio" name="model" value="">
            旗舰型
          </label> 
        </div>
      </div>

      <div class="fr" style="margin-top:50px; margin-right:75px;" id="bank">
        <div class="row">
          <div class="f18 fb mb8 white">金融机构</div>
          <select data-form="select">
            <option value="">招商银行</option>
            <option value="">工商银行</option>
            <option value="">中国银行</option>
            <option value="">建设银行</option>
          </select>
        </div>

        <div class="row">
          <div class="f18 fb mb8 white">首付比例</div>
          <select data-form="select">
            <option value="">60%</option>
            <option value="">50%</option>
            <option value="">40%</option>
            <option value="">30%</option>
          </select>
        </div>

        <div class="row">
          <div class="f18 fb mb8 white">贷款期限</div>
          <select data-form="select">
            <option value="">24</option>
            <option value="">36</option>
            <option value="">48</option>
            <option value="">60</option>
          </select>
        </div>
        
        <div class="f16 result white f-song" id="result">
          <table width="388" border="0">
            <tr>
              <td>首付款金额</td>
              <td>51,920 RMB</td>
            </tr>
            <tr>
              <td>贷款金额</td>
              <td>77,880 RMB</td>
            </tr>
            <tr>
              <td>月付款金额</td>
              <td>3，505 RMB</td>
            </tr>
          </table>
        </div>
        <div class="f14 mt30 tc f-song white"><span class="yellow">* </span>以上测算仅供参考，相关费率和月供以最终贷款合同为准</div>
        
      </div>
      <div class="clearfix"></div>
    </form>

  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tools.js"></script>
<!-- end content -->

<?php include 'inc/footer.php'; ?>