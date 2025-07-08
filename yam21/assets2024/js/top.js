// スライダー
$(function(){
    $(slider).slick({
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 750,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        dots: true,
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1
    });
    if ($(window).width() <= 768) {
	    $('.sp_slide').slick({
	        autoplay: true,
	        autoplaySpeed: 6000,
	        speed: 750,
	        pauseOnFocus: false,
	        pauseOnHover: false,
	        pauseOnDotsHover: false,
	        dots: true,
	        slidesToShow: 1,
	        arrows: true,
	        slidesToScroll: 1
	    });
    }
});


// ブログリンク
$(document).ready(function(){
    if ($(window).width() <= 768) {
        $('.banner_foot .link_blog').click(function(){
            $(this).toggleClass('active');
        });
    } else {
        $('.banner_foot .link_blog').mouseenter(function(){
            $(this).addClass('active');
        }).mouseleave(function(){
            $(this).removeClass('active');
        });
    }
});

// NEWS切り替え
$(document).ready(function(){
	$('.news_area .titlewrap .link .btn').click(function(){
		$('.news_area .titlewrap .link .btn').removeClass('active');
		$(this).addClass('active');
		var targetClass = $(this).attr('class').split(' ')[1];
		$('.news_area .left_news .newswrap').removeClass('active');
		$('.news_area .left_news .newswrap.' + targetClass).addClass('active');
	});
});