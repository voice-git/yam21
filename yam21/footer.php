<?php wp_footer(); ?>
<footer class="footer">
	<img class="footerlogo01" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/foot_lcosf.svg" width="640" height="130" alt="L/C.O.S.F.">
	<div class="snswrap">
		<a class="copperplate insta_link" href="https://www.instagram.com/yamadatakken/" target="_blank">INSTAGRAM</a>
		<a class="copperplate facebook_link" href="https://www.facebook.com/yam21com/" target="_blank">FACEBOOK</a>
		<a class="copperplate youtube_link" href="https://www.youtube.com/@yamada-takken" target="_blank">YOUTUBE</a>
	</div>
	<picture class="footerlogo02">
		<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/footer_logo_sp.svg" width="126" height="52">
		<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/footer_logo.svg" width="156" height="54" alt="ヤマダタッケン">
	</picture>
	<p class="copyright copperplate">COPYRIGHT © YAMADA TAKKEN CO. LTD. <br class="sp">ALL RIGHTS RESERVED</p>
	<a href="#" class="pagetop"><img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/icon_pagetop.svg" width="12" height="18" alt="TOPに戻る"></a>
</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets2024/js/common.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php if(is_front_page()) : ?>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets2024/js/top.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php elseif(is_page('brandlineup')) : ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets2024/js/brandlineup.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php elseif(is_page('model_home')) : ?>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets2024/js/model_home.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php elseif(is_page('form_yoyaku')) : ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets2024/js/form_yoyaku.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php elseif(is_page('concept')) : ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script>
<script>
	imageMapResize();
	jQuery(document).ready(function() {
		jQuery(".map01over").mouseenter(function() {
			$(".un_business_img .imgwrap img").addClass('hide');
			$(".business_img_hover.img01").addClass('active');
		}).mouseleave(function(){
			$(".un_business_img .imgwrap img").removeClass('hide');
			$(".business_img_hover.img01").removeClass('active');
		});
		jQuery(".map02over").mouseenter(function() {
			$(".un_business_img .imgwrap img").addClass('hide');
			$(".business_img_hover.img02").addClass('active');
		}).mouseleave(function(){
			$(".un_business_img .imgwrap img").removeClass('hide');
			$(".business_img_hover.img02").removeClass('active');
		});
		jQuery(".map03over").mouseenter(function() {
			$(".un_business_img .imgwrap img").addClass('hide');
			$(".business_img_hover.img03").addClass('active');
		}).mouseleave(function(){
			$(".un_business_img .imgwrap img").removeClass('hide');
			$(".business_img_hover.img03").removeClass('active');
		});
		jQuery(".map04over").mouseenter(function() {
			$(".un_business_img .imgwrap img").addClass('hide');
			$(".business_img_hover.img04").addClass('active');
		}).mouseleave(function(){
			$(".un_business_img .imgwrap img").removeClass('hide');
			$(".business_img_hover.img04").removeClass('active');
		});
		jQuery(".map05over").mouseenter(function() {
			$(".un_business_img .imgwrap img").addClass('hide');
			$(".business_img_hover.img05").addClass('active');
		}).mouseleave(function(){
			$(".un_business_img .imgwrap img").removeClass('hide');
			$(".business_img_hover.img05").removeClass('active');
		});
		jQuery(".map06over").mouseenter(function() {
			$(".un_business_img .imgwrap img").addClass('hide');
			$(".business_img_hover.img06").addClass('active');
		}).mouseleave(function(){
			$(".un_business_img .imgwrap img").removeClass('hide');
			$(".business_img_hover.img06").removeClass('active');
		});
		jQuery(".map07over").mouseenter(function() {
			$(".un_business_img .imgwrap img").addClass('hide');
			$(".business_img_hover.img07").addClass('active');
		}).mouseleave(function(){
			$(".un_business_img .imgwrap img").removeClass('hide');
			$(".business_img_hover.img07").removeClass('active');
		});
	});
</script>
<?php elseif(is_post_type_archive('recruit')) : ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets2024/js/recruit.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php elseif(is_post_type_archive('days') || is_post_type_archive('column') || is_tax('days_cat')) : ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets2024/js/swiper.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php endif; ?>
<?php
if ( is_page()  ) {
  echo post_custom('form_tag');
}
?>
<?php if(is_post_type_archive('column')||is_singular('column')||is_post_type_archive('days')||is_singular('days')||is_tax('days_cat')) : ?>
<script>
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $('header').addClass('show');
        } else {
            $('header').removeClass('show');
        }
    });
});
</script>
<?php endif; ?>
<?php if (get_post_type() === 'news' && is_single()): ?>
  <?php if (is_object_in_term($post->ID, 'syuukei','ns_02')): ?>
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
    ga('send', 'event', '内覧会予約', '送信', '内覧会予約フォーム');
    }, false );
  </script>
  <?php elseif (is_object_in_term($post->ID, 'syuukei','ns_03')): ?>
   <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
    ga('send', 'event', 'イベントワークショップ', '送信', 'イベントワークショップフォーム');
    }, false );
  </script>
  <?php endif; ?>
<?php endif; ?>
<script type="text/javascript">var Kairos3Tracker ="yam21";</script><script type="text/javascript" charset="utf-8" src="//c.k3r.jp"></script>
</body>
</html>


