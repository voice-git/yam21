// 募集要項 切り替え
$(document).ready(function(){
	$('.reservation_wrap .link_wrap .form_link').click(function(){
		$('.reservation_wrap .link_wrap .form_link').removeClass('active');
		$(this).addClass('active');
		$('.reservation_content').removeClass('active');
		var className = $(this).attr('class').split(' ')[1];
		$('.reservation_content.' + className).addClass('active');
	});

	const urlParams = new URLSearchParams(window.location.search);
	const tabParam = urlParams.get('form');
	if (tabParam === "americanhometown") {
		$('.reservation_wrap .link_wrap .form_link').removeClass('active');
		$('.reservation_content').removeClass('active');
		$('.reservation_wrap .link_wrap .form_link.link02').addClass('active');
		$('.reservation_content.link02').addClass('active');
	} else if (tabParam === "70sfudosan") {
		$('.reservation_wrap .link_wrap .form_link').removeClass('active');
		$('.reservation_content').removeClass('active');
		$('.reservation_wrap .link_wrap .form_link.link03').addClass('active');
		$('.reservation_content.link03').addClass('active');
	} else if (tabParam === "ayummaman") {
		$('.reservation_wrap .link_wrap .form_link').removeClass('active');
		$('.reservation_content').removeClass('active');
		$('.reservation_wrap .link_wrap .form_link.link04').addClass('active');
		$('.reservation_content.link04').addClass('active');
	}
});
