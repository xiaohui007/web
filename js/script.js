$(document).ready(function() {

  $('#loading').fadeOut();

  $("img.imglazy").lazyload({
    effect : "fadeIn",
    threshold : 400
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
        // console.log(_obj);
        _obj.empty().append(data);
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
        _obj.empty().append(data);
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
  $('.ajax-menu3').on('click', 'a:not(".cur")', function(event) {
    event.preventDefault();
    var _this = $(this);
    var _url = _this.data('ajax');
    var _obj = $('.xq-header .list-wrapper .wrapper')
    var _loading = $('<div class="loading"><img src="images/loading.gif"></div>');
    $.ajax({
      type: "POST",
      url: "ajax/"+_url+".html",
      dataType: 'html',
      async: true,
      success: function(data){
        console.log(_obj);
        _obj.empty().append(data);
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

  var timer,timer2,timer3;
  $('.car-pop').mouseenter(function(event) {
    clearTimeout(timer2);
    clearTimeout(timer3);
    var _obj = $('.car-list');
    timer = setTimeout(function(){
      $(this).addClass('cur');
      _obj.show();
      _obj.children('.bg').fadeIn(300);
      setTimeout(function(){
        _obj.children('.list-wrapper').show().css('height', '0').stop().animate({ height: '430px' }, 300);
      }, 300);
    }, 300);
  }).mouseleave(function(event) {
    var _obj = $('.car-list');
    var _this = $(this);
    clearTimeout(timer);
    timer2 = setTimeout(function(){
      _this.removeClass('cur');
      _obj.children('.list-wrapper').fadeOut(300);
      _obj.children('.bg').fadeOut(300);
      setTimeout(function(){ _obj.hide(); }, 300);
    }, 300);
  });
  $('.xq-header .list-wrapper').mouseenter(function(event) {
    clearTimeout(timer2);
    clearTimeout(timer3);
    var _obj = $('.car-list');
    $('.car-pop').addClass('cur');
    _obj.show();
    _obj.children('.bg').fadeIn(300);
    setTimeout(function(){
      _obj.children('.list-wrapper').show();
    }, 300);
  }).mouseleave(function(event) {
    var _obj = $('.car-list');
    var _this = $('.car-pop');
    timer3 = setTimeout(function(){
      _this.removeClass('cur');
      _obj.children('.list-wrapper').fadeOut(300);
      _obj.children('.bg').fadeOut(300);
      setTimeout(function(){ _obj.hide(); }, 300);
    }, 300);
  });
  $('.car-hover').on('mouseenter', '.block .fl a', function() {
    var _obj = $(this).data('show');
    $('.car-hover .block .fl a').removeClass('hover');
    $(this).addClass('hover');
    $('.car-hover .block .fr').hide();
    $(this).parents('.block').children('.'+_obj).fadeIn(300);
  });

  var timer4,timer5,timer6;
  $('.fin-pop').mouseenter(function(event) {
    clearTimeout(timer5);
    clearTimeout(timer6);
    var _obj = $('.xq-header .financial');
    timer4 = setTimeout(function(){
      $(this).addClass('cur');
      _obj.show().css('height', '0').stop().animate({ height: '345px' }, 300);
    }, 300);
  }).mouseleave(function(event) {
    var _obj = $('.xq-header .financial');
    var _this = $(this);
    clearTimeout(timer4);
    timer5 = setTimeout(function(){
      _this.removeClass('cur');
      _obj.fadeOut(300);
    }, 300);
  });
  $('.xq-header .financial').mouseenter(function(event) {
    clearTimeout(timer5);
    clearTimeout(timer6);
    var _obj = $(this);
    $('.fin-pop').addClass('cur');
    _obj.show();
  }).mouseleave(function(event) {
    var _obj = $(this);
    timer6 = setTimeout(function(){
      $('.fin-pop').removeClass('cur');
      _obj.fadeOut(300);
    }, 300);
  });
});

$(window).load(function(){
  // $('#loading').fadeOut();
});

$(window).resize(function(event) {
  if ($('.index-banner').length==0) { var _scrollT = $('.page-banner').offset().top; };
  if ($('.index-banner').length!=0) { var _scrollT = $('.index-banner').offset().top; };
  var _scrollW = $(window).scrollTop();
  if ( _scrollW > _scrollT ) {
    $('.scrollbar').fadeIn(300);
  }else{
    $('.scrollbar').fadeOut(300);
  };
});

$(function() {
  if ($('.index-banner').length==0) { var _scrollT = $('.page-banner').offset().top; };
  if ($('.index-banner').length!=0) { var _scrollT = $('.index-banner').offset().top; };
  var _scrollW = $(window).scrollTop();
  if ( _scrollW > _scrollT ) {
    $('.scrollbar').fadeIn(300);
  }else{
    $('.scrollbar').fadeOut(300);
  };
  $(window).scroll(function(){
    $('.car-list').fadeOut(300);
    var _scrollW = $(window).scrollTop();
    if ( _scrollW > _scrollT ) {
      $('.scrollbar').fadeIn(300);
    }else{
      $('.scrollbar').fadeOut(300);
    };
  });
  $('.scrollbar').on('click', '.a7', function(event) {
    event.preventDefault();
    $('html,body').animate({ scrollTop: 0 }, 300);
  });
});