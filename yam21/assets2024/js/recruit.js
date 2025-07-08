// 募集要項 切り替え
$(document).ready(function(){
	$('.guideline_area .link_wrap .btn').click(function(){
		$('.guideline_area .link_wrap .btn').removeClass('active');
		$(this).addClass('active');
		$('.content_wrap').removeClass('active');
		var className = $(this).attr('class').split(' ')[1];
		$('.content_wrap.' + className).addClass('active');
	});
});

// 追従ボタン表示
/*
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $('.btn_entry').addClass('show');
        } else {
            $('.btn_entry').removeClass('show');
        }
    });
});
*/
