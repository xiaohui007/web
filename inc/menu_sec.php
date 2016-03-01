<!-- start second_menu -->

<?php if ( isset($page_class)&&$page_class=="金融服务" ) { ?>

<div class="page-menu">
  <div class="w1200">
    <div class="financial">
      <a href="#" class="<?php if (isset($page_name)&&$page_name=='车贷指南') { echo 'cur'; } ?>">车贷指南</a>
      <a href="#" class="<?php if (isset($page_name)&&$page_name=='车贷计算') { echo 'cur'; } ?>">车贷计算</a>
      <a href="#" class="<?php if (isset($page_name)&&$page_name=='车贷套餐') { echo 'cur'; } ?>">车贷套餐</a>
      <a href="#" class="<?php if (isset($page_name)&&$page_name=='车贷申请') { echo 'cur'; } ?>">车贷申请</a>
      <a href="#" class="<?php if (isset($page_name)&&$page_name=='常见问题') { echo 'cur'; } ?>">常见问题</a>
      <a href="#" class="<?php if (isset($page_name)&&$page_name=='吉致金融') { echo 'cur'; } ?>">吉致金融</a>
    </div>
  </div>
</div>

<?php } ?>

<!-- end second_menu -->