<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yam21
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-09Q15GTC7K"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'G-09Q15GTC7K');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
<?php if(get_field('description')): ?>
	<meta name="description" content="<?PHP the_field('description'); ?>">
<?php endif; ?>
<?php if(get_field('keywords')): ?>
	<meta name="keywords" content="<?PHP the_field('keywords'); ?>">
<?php endif; ?>
<?php wp_head(); ?>

<!--ファビコン-->
<link rel="icon" href="/common/img/favicon/favicon_yamadatakken.ico">
<link rel="icon" type="image/vnd.microsoft.icon" ref="/common/img/favicon/favicon_yamadatakken.ico">
<link rel="shortcut icon" ref="/common/img/favicon/favicon_yamadatakken.ico">

<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--WEBフォント-->
<link rel="stylesheet" href="https://use.typekit.net/orx1sqx.css">
<script type="text/javascript" src="//webfonts.sakura.ne.jp/js/sakurav3.js"></script>
<script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/common.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/component.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/news.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/work.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/real-estate.css?<?php echo date("Ymd-Hi"); ?>" />

<?php if(is_front_page()) : ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/top.css?<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_page('story')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/story.css?<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_page(array('story01','story02','story03','story04','story05','story06'))) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/story_detail.css?<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_page('concept')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets_teaser/css/index.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets_teaser/js/index.js"></script>
<?php elseif(is_page('model_home')) : ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/model_home.css?<?php echo date("Ymd-Hi"); ?>" />

<?php elseif(is_post_type_archive('recruit')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/recruit.css?<?php echo date("Ymd-Hi"); ?>" />

<!-- blog -->
<?php elseif(is_post_type_archive('blog')||is_singular('blog')||is_tax('blog_staff')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/blog.css?<?php echo date("Ymd-Hi"); ?>" />

<!-- real-estate -->
<?php elseif(is_post_type_archive('real-estate')||is_single('real-estate')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/blog.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/real-estate.css?<?php echo date("Ymd-Hi"); ?>" />

<!-- days -->
<?php elseif(is_post_type_archive('days')||is_singular('days')||is_tax('days_cat')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/days.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/swiper.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- column -->
<?php elseif(is_post_type_archive('column')||is_singular('column')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/blog.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/column.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/swiper.css?<?php echo date("Ymd-Hi"); ?>" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- works -->
<?php elseif(is_post_type_archive('works')||is_single('works')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/work.css?<?php echo date("Ymd-Hi"); ?>" />

<!-- news -->
<?php elseif(is_post_type_archive('news')||is_single('news')||is_tax('news_cat-nc3')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/news.css?<?php echo date("Ymd-Hi"); ?>" />

<?php elseif(is_page('aboutus')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/aboutus.css?<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_page('brandlineup')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/brandlineup.css?<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_page('online')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/online.css?<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_page(array('form_contact','form_siryou','form_yoyaku'))) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/contact.css?<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_page('policy')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/policy.css?<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_page('sitemap')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/sitemap.css?<?php echo date("Ymd-Hi"); ?>" />
<?php endif; ?>

<!-- swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '439436917304125');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=439436917304125&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>
<body <?php body_class(); ?>>

<?php if(is_post_type_archive('column')||is_singular('column')||is_post_type_archive('days')||is_singular('days')||is_tax('days_cat')) : ?>
<a class="btn_hamburger tophamburger">
	<span></span>
	<span></span>
</a>
<header class="header blogheader">
<?php else: ?>
<header class="header">
<?php endif; ?>
	<div class="headerwrap">
<?php if(is_post_type_archive('column')||is_singular('column')) : ?>
		<h1 class="headerlogo bloghead"><a href="/column/"><img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/head_column.svg" width="300" height="30" alt="SAWANO DAY'S"></a></h1>
		<div class="rightwrap">
<?php elseif(is_post_type_archive('days')||is_singular('days')||is_tax('days_cat')) : ?>
		<h1 class="headerlogo bloghead"><a href="/days/"><img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/head_days.svg" width="300" height="30" alt="L/C.O.S.F. DAY'S"></a></h1>
		<div class="rightwrap">
<?php else: ?>
	<?php if(is_front_page()) : ?>
		<h1 class="headerlogo"><picture class="headerlogo">
			<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/header_logo.svg">
			<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/header_logo.svg" width="216" height="50" alt="新築注文住宅やリフォーム・リノベーションのヤマダタッケン">
		</picture></h1>
	<?php else: ?>
		<h1 class="headerlogo"><a href="/"><picture class="headerlogo">
			<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/header_logo.svg">
			<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/header_logo.svg" width="216" height="50" alt="新築注文住宅やリフォーム・リノベーションのヤマダタッケン">
		</picture></a></h1>
	<?php endif; ?>
		<div class="rightwrap">
			<a href="/" class="copperplate headerlink">TOP<span>トップ</span></a>
			<a href="/brandlineup/" class="copperplate headerlink">BRAND LINEUP<span>新築 / リノベーション</span></a>
			<a href="/works/" class="copperplate headerlink">LIFESTYLE LOG<span>施工実績</span></a>
			<a href="/news/?_sft_news_cat=nc2" class="copperplate headerlink">EVENT<span>イベント</span></a>
			<div class="copperplate headerlink accwrap">BLOG<span>ブログ</span>
				<div class="acc">
<!-- 					<a href="/days/" class="sublink"><img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_blog_sub01_w.svg" width="169" height="13" alt="L/C.O.S.F. DAY'S"></a> -->
					<a href="/column/" class="sublink"><img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_blog_sub02_w.svg" width="169" height="13" alt="SAWANO DAY'S"></a>
					<a href="/blog/" class="sublink"><img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_blog_sub03_w.svg" width="169" height="13" alt="STAFF JOURNAL"></a>
				</div>
			</div>
			<div class="right">
				<a class="sp" href="/works/">施工実績</a>
				<a class="pc" href="/online/">オンライン事前相談</a>
				<a href="/form_yoyaku/">来場予約</a>
			</div>
<?php endif; ?>
			<a class="btn_hamburger">
				<span></span>
				<span></span>
			</a>
		</div>
	</div>
</header>
<nav class="menu_hamburger">
	<div class="wrap">
		<div class="scroll">
			<p class="copperplate">SCROLL<span></span></p>
		</div>
		<div class="left">
			<a href="/story/" class="bnr">
				<h2 class="title"><picture>
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_title01.svg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_title01.svg" width="368" height="27" alt="L/C.O.S.F. STORY’S">
				</picture></h2>
				<p class="text">ヤマダタッケンにまつわるお話。</p>
			</a>
			<a href="/brandlineup/" class="bnr">
				<h2 class="copperplate title">BRAND LINEUP</h2>
				<p class="text">新築 / リノベーション</p>
			</a>
			<a href="/works/" class="bnr">
				<p class="sub">- 施工実績 -</p>
				<h2 class="copperplate title log">LIFESTYLE LOG</h2>
				<p class="text log">十人十色のいそがない人生。</p>
			</a>
			<a href="/concept/" class="bnr">
				<h2 class="copperplate title">BRAND CONCEPT</h2>
				<p class="text">ブランドコンセプト</p>
			</a>
		</div>
		<div class="right">
			<div class="right-left">
				<a href="/"><span class="copperplate">TOP</span><span>トップ</span></a>
				<a href="/news_cat/nc3/"><span class="copperplate">OPEN HOME</span><span>内覧会情報</span></a>
				<a href="/real_estate/"><span class="copperplate">REAL ESTATE</span><span>不動産情報</span></a>
				<a href="/aboutus/"><span class="copperplate">WHAT’S YAMADA<br>TAKKEN</span><span>ヤマダタッケンについて</span></a>
				<a href="/howtomake/"><span class="copperplate">HOW TO MAKE</span><span>ヤマダタッケンの家づくり</span></a>
			</div>
			<div class="right-right">
				<a href="/news/"><span class="copperplate">NEWS・EVENT</span><span>お知らせ・イベント</span></a>
				<a href="/model_home/"><span class="copperplate">MODEL HOME</span><span>モデルホーム</span></a>
				<a href="/recruit/"><span class="copperplate">RECRUIT</span><span>採用情報</span></a>
				<a href="/blog/"><span class="copperplate">BLOG</span><span>ブログ</span></a>
<!--
				<a href="/days/" class="sublink spmgt10"><picture>
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_blog_sub01.svg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_blog_sub01.svg" width="160" height="14" alt="L/C.O.S.F. DAY'S">
				</picture></a>
-->
				<a href="/column/" class="sublink"><picture>
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_blog_sub02.svg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_blog_sub02.svg" width="156" height="14" alt="SAWANO DAY'S">
				</picture></a>
				<a href="/blog/" class="sublink"><picture>
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_blog_sub03.svg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_blog_sub03.svg" width="182" height="14" alt="STAFF JOURNAL">
				</picture></a>
			</div>
			<div class="right-foot">
				<a href="/form_contact/"><div><span class="copperplate">CONTACT</span><br><span>お問い合わせ・資料請求・ご紹介者の方</span></div></a>
				<a href="/form_yoyaku/"><div><span class="copperplate">RESERVATION</span><br><span>来場予約</span></div></a>
				<a href="/online/"><div><span class="copperplate">ONLINE MEETING</span><br><span>オンライン事前相談</span></div></a>
				<div class="info">
					<p class="copperplate">TEL 076-245-7777</p>
					<div class="inforight pc">
						<p class="copperplate">OPEN　AM10:00 – PM6:00</p>
						<p class="copperplate">CLOSED　WED,HOLIDAY</p>
					</div>
					<div class="inforight sp">
						<p class="copperplate">OPEN AM10:00–PM6:00 CLOSED WED,HOLIDAY</p>
					</div>
				</div>
			</div>
		</div>
		<div class="foot">
			<img class="menu_foot" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/menu_foot.svg" width="410" height="140" alt="いそがない人生を。 ヤマダタッケン">
			<div class="linkwrap">
				<a class="insta_link" href="https://www.instagram.com/yamadatakken/" target="_blank"><span class="copperplate">INSTAGRAM</span></a>
				<a class="facebook_link" href="https://www.facebook.com/yam21com/" target="_blank"><span class="copperplate">FACEBOOK</span></a>
				<a class="youtube_link" href="https://www.youtube.com/@yamada-takken" target="_blank"><span class="copperplate">YOUTUBE</span></a>
				<div class="pc_block1215"></div>
				<a class="otherlink" href="/sitemap/">サイトマップ</a>
				<a class="otherlink" href="/policy/">プライバシーポリシー</a>
			</div>
		</div>
	</div>
</nav>
<nav class="right_nav">
	<a href="/form_siryou/" class="rightlink"><span>資料請求</span></a>
	<a href="/form_contact/" class="rightlink"><span>お問い合わせ</span></a>
</nav>