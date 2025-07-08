// 追従ボタン表示
/*
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $('.right_nav').addClass('show');
        } else {
            $('.right_nav').removeClass('show');
        }
    });
});
*/

// スムーズスクロール
var scrollElm = (function() {
  if('scrollingElement' in document) {
    return document.scrollingElement;
  }
  if(navigator.userAgent.indexOf('WebKit') != -1) {
    return document.body;
  }
  return document.documentElement;
})();
 
$('a[href^="#"],area[href^="#"]').not('.noscroll').on('click', function() {
  var speed = 500;
  var easing = 'swing';
  var href= $(this).attr("href");
  $(scrollElm).animate({
    scrollTop: $(href == "#" ? 'html' : href).offset().top
  }, speed, easing);
  return false;
});
// ハンバーガー
$('.headerwrap .btn_hamburger,.btn_hamburger.tophamburger').click(function() {
	$('body').toggleClass('active')
});
$('.menu_hamburger a').on('click', function(){
	$('body').removeClass('active');
});
$('.headerwrap .accwrap').click(function() {
	$(this).toggleClass('active')
});
