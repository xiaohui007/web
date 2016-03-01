$(document).ready(function() {

  $('#loading').fadeOut();

  $("img.imglazy").lazyload({
    effect : "fadeIn"
  });

  $('.index-hot .arrow').on('click', 'a', function(event) {
    event.preventDefault();
    var _this = $(this);
    var _obj = $(this).parent().prev();
    if ( !_this.hasClass('cur') ) {
      _obj.animate({ height: '500px' }, 300, function(){
        _this.addClass('cur');
      });
    }else{
      _obj.animate({ height: '250px' }, 300, function(){
        _this.removeClass('cur');
      });
    };
  });

  $('.ajax-menu').on('click', 'a:not(".cur")', function(event) {
    event.preventDefault();
    var _this = $(this);
    var _url = _this.data('ajax');
    var _obj = _this.parent().next();
    var _loading = $('<div class="loading"><img src="images/loading.gif"></div>');
    $.ajax({
      type: "POST",
      url: "ajax/"+_url+".html",
      dataType: 'html',
      async: true,
      success: function(data){
        console.log(_obj);
        _obj.append(data);
        _this.addClass('cur').siblings().removeClass('cur');
        // _loading.remove();
        setTimeout(function(){ _loading.remove(); }, 500);
      },
      error: function () {
        alert('加载错误,请重新刷新页面');
      },
      beforeSend: function () {
        _loading.appendTo(_obj);
        // alert('正在加载...');
      }
    });
  });

  $('.ajax-menu2').on('click', 'a:not(".cur")', function(event) {
    event.preventDefault();
    var _this = $(this);
    var _url = _this.data('ajax');
    var _obj = _this.parent().parent().next();
    var _loading = $('<div class="loading"><img src="images/loading.gif"></div>');
    $.ajax({
      type: "POST",
      url: "ajax/"+_url+".html",
      dataType: 'html',
      async: true,
      success: function(data){
        console.log(233);
        _obj.append(data);
        _this.addClass('cur').siblings().removeClass('cur');
        // _loading.remove();
        // setTimeout(function(){ _loading.remove(); }, 500);
      },
      error: function () {
        alert('加载错误,请重新刷新页面');
      },
      beforeSend: function () {
        _loading.appendTo(_obj);
        // alert('正在加载...');
      }
    });
  });

});

$(window).load(function(){
  // $('#loading').fadeOut();
});