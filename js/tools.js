/** 
* extend 表单控件自定义
* @author cuki13  
  .selectstyle {position:relative; border:1px solid #ccc; height:30px;display:inline-block;line-height:30px; width:100px; overflow:hidden;}
  .selectstyle select {position:absolute;left:0; top:0px; height:30px; margin:0; padding:0; width:100%; height:38px; }
  .selectstyle .val {display:block; padding-left: 5px; color: #333;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;padding-right: 24px;}
  obj.each(function (n) {
      dataFormType($(this));
  })
*/
(function() {
  var formSting = '[data-form="select"]';
  var Select = function  (number) {
    this.id = number;
  }

  Select.prototype.build = function  (el) {
    var $this = $(el);
    $this.css("opacity","0");
    $this.wrap("<span class='selectstyle'></span>");
    var gettxt = '<span class="val textb" >'+ $this.find("option:eq(0)").html()+'<i class="none"></i></span>';
    gettxt = $(gettxt);       
    gettxt.insertBefore($this);
    $this.parents(".selectstyle").addClass("select-"+ this.id);
    $this.on("change.resize",function  () {
      var vl = $(this).find("option:selected").html();
      $(this).prev('.val').html(vl);
      $(this).parents(".selectstyle").find('.val').html(vl);
    })
    $this.trigger('change.resize');
  }

  function Plugin(option) {
    return this.each(function (n) {
      var $this   = $(this)
      var number = $this.attr('id') || n 
      var data    = $this.data('ck.select')
      var options = typeof option == 'object' && option
      if (!data) $this.data('ck.select', (data = new Select(number)))
      if (option == 'build') data.build($(this))
      else if (option) data.setState(option)
    })
  }

  Select.init = function  () {
    var $this = $(formSting);
    Plugin.call($this,'build');
  }
  
  $(document).ready(function() {
    var $this = $(formSting);
    Plugin.call($this,'build');
  })

  $.fn.formSelect = function  (options) {
    var $this = $(this);
    Plugin.call($this,'build');
  }

})()

/*-- 表单radio [data-form="radio"] --*/
+function ($) {
  'use strict';
  var formSting = '[data-form="radio"]';
  
  var Radio = function  (number) {
    this.id = number;
  }

  Radio.prototype.build = function  (el) {
    var setCss = {
      "opacity":"0",
      "position":"absolute"
    }
    var $this = $(el);
    $this.css(setCss);
    $this.parent("label").css("position","relative");
    $this.on("change.resize",function  () {      
        $(this).parent("label").addClass("ck-checked").siblings("label").removeClass("ck-checked");     
    });
  }

  function Plugin(option) {
    return this.each(function (n) {
      var $this   = $(this)
      var number = $this.attr('id') || n 
      var data    = $this.data('ck.select')
      var options = typeof option == 'object' && option
      if (!data) $this.data('ck.select', (data = new Radio(number)))
      if (option == 'build') data.build($(this))
      else if (option) data.setState(option)
    })
  }

  $(document).on('ready.ck.radio', function (e) {
    var $this = $(formSting);
    Plugin.call($this,'build');
  })

  $(document).on('rebuildCkRadio', function (e) {
    var $this = $(formSting);
    alert('111222');
    $(formSting).each(function () {
      
      if ($(this).data('ck.select') == undefined) {
        Plugin.call($this,'build');
      }
    })    
  })
  
  $(window).load(function  () {
    $(formSting).each(function () {      
        if ($(this).is(':checked')) {
          $(this).trigger('change');
        }
    })
  })

}(jQuery);