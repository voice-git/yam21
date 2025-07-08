<?php
/*
Template Name: リワイズ
*/
?>
<?php
get_header();
?>
<link href="https://fonts.googleapis.com/css?family=Cinzel:400&display=swap" rel="stylesheet">

<?PHP the_field('rewise1'); ?>
    
<div class="pankuzu">
  <nav class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="/">HOME</a></li>
      <li><span><?php the_title(); ?></span></li>
    </ul>
  </nav>
</div>

  <div class="rewise_menu_body">
  <?php get_template_part( '/template-parts/rewise_local_nav' ); ?>
  </div>
    
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php if ( is_page('rewise') ) : ?>
    
<section class="mt100">
    <h2 class="trajan txt240p txt200sp mb10" align="center"><i class="fa fa-instagram mr10"></i>Instagram</h2>
    

    
    <div class="uk-position-relative">
  <div class="uk-flex uk-child-width-1-2 uk-child-width-1-5@s uk-flex-wrap" id="instafeed">
  </div>
    <div class="rewise_top_insta_more_link"><a href="https://www.instagram.com/rewise_garden/" target="_blank">VIEW MORE</a></div>
    </div>
</section>

<script>
jQuery(function($){
	$.ajax({
		type: 'GET',
		url: 'https://graph.facebook.com/v6.0/17841405537718633?fields=name%2Cmedia.limit(5)%7Bcaption%2Clike_count%2Cmedia_url%2Cpermalink%2Ctimestamp%2Cusername%7D&access_token=EAAQqyjQf084BAEuiQbTjU0qGZByKuHz5PVymTI0ZCx6eZAq3Flty9QoTSS1pll4GHZBivPs9IfqjRC4OMKJigZBZAIeXSHXuipFOThlwVZCRRzgZAvnC5LZCjHfAJhdqX1IrzXyUi9ELWQprHpTkTDpZB9H60u3EF0ociD31rQGMaJvwZDZD',
		dataType: 'json',
		success: function(json) {
		    	
		    var html = '';
		    var insta = json.media.data;
		    for (var i = 0; i < insta.length; i++) {
		    	html += '<div class="rewise_top_insta_item"><a href="' + insta[i].permalink + '" target="_blank" style="background-image:url(' + insta[i].media_url + ')"></a></div>';
		    }
		      $("#instafeed").append(html);			
		},
		error: function() {

		//エラー時の処理
		}
	});
});	
</script>
    
  <?php get_template_part( '/works-rewise' ); ?>
    
<section class="mt120">
    <div class="w1200">
        <div class="rewise_top_about_bg" align="center">
            <h2 class="trajan txt240p mb10">About Us</h2>
            <div>提案から施工まで安心してお任せください</div>
      <div align="center" class="mt50">
        <div class="uk-width-1-2@s uk-width-1-3@m"><a href="/rewise/about" class="common_link_btn3_border_white uk-width-1-1">>> MORE</a></div>
        </div>
        </div>
        <div class="mw1000 mt80">
  <div class="rewise_top_contact_box txt110p">
    <div class="txt130p mb15">REWISEでは、いつでもエクステリアのご相談うけたまわります</div>
    <div>お庭をかわいくお洒落にしたい。オープンデッキは高いのかな…お見積もりだけでも欲しい。<br>
      そんなご相談をいつでも受け付けています。エクステリアに関する小さなことでもご相談にのります。<br>
      お気軽にお問い合わせください。</div>
    <div class="mt30"><a href="/rewise/contact" class="common_link_btn3_bg_white mw450px uk-width-1-1">>> <span class="trajan">Contact form</span>お問い合わせフォーム</a></div>
  </div>
        </div>
        <div uk-grid class="uk-flex-center uk-grid-small uk-flex-middle mt60">
  <div><img src="/common/img/rewise/top/rewise-logo.svg" alt="REWISE"/></div>
  <div><strong>REWISE Co.Ltd. 〒921－8164<br>
    ⽯川県⾦沢市久安1丁⽬411<br>
    TEL 076-245-7710</strong></div>
        </div>
    </div>
</section>

<?php endif; ?>


  <div class="rewise_menu_body rewise_menu_body_foot">
  <?php get_template_part( '/template-parts/rewise_local_nav' ); ?>
  </div>

<div class="rewise_side_contact_link"><a href="/rewise/contact">ご<br>相<br>談<br>・<br>お<br>問<br>合<br>わ<br>せ</a></div>

<?php
get_footer();
