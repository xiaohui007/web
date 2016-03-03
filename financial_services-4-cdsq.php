<?php $page_title="车贷申请-金融服务"; $page_class="金融服务"; $page_name="车贷申请"; include 'inc/header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/custom.css">

<style type="text/css">
#apply {background-color:#f8f8f8; height:402px; padding-top:50px;}
#apply .row {margin-bottom:20px;}
#apply .tips {font-family:"宋体"; font-size:12px; color:#807e7f;}
#apply .btn {width:148px; height:36px; background:url(images/financial/cdsq-btnbg.png) no-repeat; border:0; font-size:16px; font-weight:bold; line-height:36px; color:#9d823d; cursor:pointer;}
#apply form {font-size:16px; color:#5a5657; width:450px; margin:0 auto;}
#apply form label {display:block; float:left; line-height:32px;}

#apply .selectstyle {width:362px; height:32px; position:relative; border:1px solid #585858; display:inline-block; line-height:32px; overflow:hidden; font-size:16px; background:url(images/financial/select-downarraw.png) 336px 14px no-repeat;vertical-align:middle;}
#apply .selectstyle select {position:absolute; width:364px; height:32px; left:-1px; top:0px; margin:0; padding:0; font-size:16px; font-family:"微软雅黑","Microsoft YaHei",Arial,"Microsoft JhengHei";}
#apply .selectstyle .val {display:block; padding-left:5px; color:#333; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; padding-right:24px;}

#province .selectstyle {width:150px; background:url(images/financial/select-downarraw.png) 125px 14px no-repeat;}
#province .selectstyle select {width:152px;}

#city .selectstyle {width:200px; background:url(images/financial/select-downarraw.png) 174px 14px no-repeat;}
#city .selectstyle select {width:202px;}

#name input,#phone input {width:357px; height:32px; border:1px solid #585858; background-color:#f8f8f8; color:#585858; line-height:32px; padding-left:5px; font-size:16px; font-family:"微软雅黑","Microsoft YaHei",Arial,"Microsoft JhengHei";}

#age .selectstyle,#gex .selectstyle {width:100px; background:url(images/financial/select-downarraw.png) 78px 14px no-repeat;}
#age .selectstyle select,#gex .selectstyle select {width:102px;}

.cutline {width:444px; height:6px; background:url(images/financial/cutline1.png) no-repeat; }
</style>

<!-- start content -->
<?php include 'inc/banner.php'; ?>
<?php include 'inc/menu_sec.php'; ?>

<div class="wrapper mb16">
  <div class="w1200">
  <!-- <img src="images/financial/cdsq.jpg" /> -->
    <h3>车贷申请</h3>
    <div class="f16 fb tc gray2 lh25">
      <p>填写以下购车意向，我们将在1个工作日内与您电话联系，</p>
      <p>沟通确认买车及贷款需求，并协同经销商为您提供一站式购车服务。</p>
    </div>
  </div>
</div>

<div class="wrapper mb80" id="apply">
  <div class="w1200">
    <form action="">
      <div class="row">
        <label>购买车型：</label>
        <select data-form="select">
          <option value="">车型1</option>
          <option value="">车型2</option>
          <option value="">车型3</option>
          <option value="">车型4</option>
        </select>    
      </div>
      
      <div class="row">
        <label>省份城市：</label>
        <div class="fl" id="province" style="margin-right:10px;">
          <select data-form="select">
            <option value="">省份1</option>
            <option value="">省份2</option>
            <option value="">省份3</option>
            <option value="">省份4</option>
          </select>
        </div>
        <div class="fl" id="city">
          <select data-form="select">
            <option value="">城市1</option>
            <option value="">城市2</option>
            <option value="">城市3</option>
            <option value="">城市4</option>C
          </select>
        </div>
        <div class="clearfix"></div>
      </div>
      
      <div class="row" id="name">
        <label>姓　　名：</label>
        <input type="text"> 
      </div>

      <div class="row">
        <label>年龄性别：</label>
        <div class="fl" id="age" style="margin-right:10px">
          <select data-form="select">
            <option value="">年龄1</option>
            <option value="">年龄2</option>
            <option value="">年龄3</option>
            <option value="">年龄4</option>
          </select>
        </div>
        <div class="fl" id="gex">
          <select data-form="select">
            <option value="">性别1</option>
            <option value="">性别2</option>
          </select>
        </div>
        <div class="clearfix"></div>
      </div>
      
      <div class="row" id="phone">
        <label>手　　机：</label>
        <input type="text"> 
      </div>

      <div class="cutline mb16"></div>
      <div class="tips mb16"><span class="red">* </span>以上信息均为必填项，请准确填写您的信息！</div>
      <div class="tc"><button class="btn" type="submit" value="Submit">提交申请</button></div>
    </form>
  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tools.js"></script>
<!-- end content -->

<?php include 'inc/footer.php'; ?>