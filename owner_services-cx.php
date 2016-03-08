<?php $page_title="车主服务-纯正精品"; $page_class="金融服务"; $page_name="车贷套餐"; include 'inc/header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/custom.css">

<style type="text/css">
i{font-style:normal;}
.f-l{float:left;}
.f-r{float:right;}
  .p-a{position:absolute;}
  .map{width:1170px;height:648px;margin:74px auto;position: relative;}
  .map-box{top:0;left:0;}
  .map-addr-show {width:378px;height:100%;background:url(images/owner/map-bg.png) no-repeat;top:-19px;right:0;}
  .select-map{width:100%;height:202px;background:url(images/owner/map-guang.png) center bottom no-repeat;padding:20px 38px 0px 38px;}
  .pro{width:300px;height:34px;font-family: "宋体";position: relative;margin-top:14px;}
  .pro i{font-size: 14px;color:#fff;}
  .pro select{opacity: 0;}
  .pro select,.pro-bg{width:202px;height:30px;position: absolute;left:90px;top:-6px;}
  .pro-bg{width:182px;background:#fff;line-height:30px;padding-left:20px;color:#5c5c5c;font-size:14px;}
  .pro em{position: absolute;width:11px;height:7px;background:url(images/owner/map-sj.png) no-repeat;right:34px;top:7px;}
  .swiper-wrapper{height:416px;}
  .swiper-container .swiper-slide{width:96%;margin-left:11px;}
  .swiper-slide{width:98%;height:122px;position: relative;font-family: "宋体";}
  .swiper-slide .map-icon{width:44px;height:47px;background:url(images/owner/map-icon.png) no-repeat;position: absolute;left:35px;}
  .swiper-slide .map-content-detail{position: absolute;right:40px;width:234px;height:84px;}
   .swiper-slide div span{margin-left:4px;}
    .swiper-slide h5{font-size: 16px;color:#fff;}
      .swiper-slide  p{color:#96c8fa;}
  .add-detail span{float:left;width:200px;}
  .slide-in{width:306px;margin:0 auto;height:102px;padding-top:20px;background:url(images/owner/map-line.png) center bottom no-repeat;}
 .no-line{background:none;}
</style>

<!-- start content -->
<?php include 'inc/banner.php'; ?>
<?php include 'inc/menu_sec.php'; ?>

<div class="wrapper w1200">
  <div class="map">
     <div class="map-box p-a">
        <img src="images/owner/map-pic.jpg" />
     </div>
     <div class="map-addr-show p-a">
        <div class="select-map">
          <p class="pro">
            <i>请选择省份</i>
            <span class="pro-bg">广东省</span><em></em>
            <select >
              <option>广东省</option>
            </select>
          </p>
          <p class="pro">
            <i>请选择城市</i>
            <span class="pro-bg">广州市</span><em></em>
            <select >
              <option>广东省</option>
            </select>
          </p>
          <p class="pro">
            <i>电动车服务站</i>
            <span class="pro-bg">广东省</span><em></em>
            <select >
              <option>广东省</option>
            </select>
          </p>
          <p class="pro">
            <i>一般的服务站</i>
            <span class="pro-bg">广东省</span><em></em>
            <select >
              <option>广东省</option>
            </select>
          </p>
        </div>
        <div class="map-addr">
           <div class="swiper-container">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div class="slide-in">
                          <i class="map-icon"></i>
                          <div class="map-content-detail">
                            <h5>广州****电动车服务站</h5>
                            <p class="add-detail"><i class="f-l"> 地址:</i><span>广州市海珠区广州大道南1601-1603号
                           华南汽贸广场内A区69号</span></p>
                            <p><i>电话:</i><span>020-84289008</span></p>
                          </div>
                      </div>
                  </div>                
                  <div class="swiper-slide">
                      <div class="slide-in">
                          <i class="map-icon"></i>
                          <div class="map-content-detail">
                            <h5>广州****电动车服务站</h5>
                            <p class="add-detail"><i class="f-l"> 地址:</i><span>广州市海珠区广州大道南1601-1603号
                           华南汽贸广场内A区69号</span></p>
                            <p><i>电话:</i><span>020-84289008</span></p>
                          </div>
                      </div>
                  </div>                
                  <div class="swiper-slide">
                      <div class="slide-in no-line">
                          <i class="map-icon"></i>
                          <div class="map-content-detail">
                            <h5>广州****电动车服务站</h5>
                            <p class="add-detail"><i class="f-l"> 地址:</i><span>广州市海珠区广州大道南1601-1603号
                           华南汽贸广场内A区69号</span></p>
                            <p><i>电话:</i><span>020-84289008</span></p>
                          </div>
                      </div>
                  </div>                
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
           </div>
        </div>
     </div>
  </div>

</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tools.js"></script>

<script>
   $(".own-jp-list li").hover(function(){
      $(this).addClass('own-current').siblings().removeClass();
   });

   $(".num-list li").click(function(){
      $(this).addClass('num-current').siblings().removeClass();
   });


  

  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        direction: 'vertical',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    autoplay : 1000
    });
       

</script>
<!-- end content -->

<?php include 'inc/footer.php'; ?>