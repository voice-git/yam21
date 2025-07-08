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
<?php $webroot = $_SERVER['DOCUMENT_ROOT'];?>
<html <?php language_attributes(); ?>>
<head>
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
    
<!-- slick CSS -->
<link rel="stylesheet" type="text/css" href="/common/js/slick/slick.css">
<link rel="stylesheet" type="text/css" href="/common/js/slick/slick-theme.css">
    
<!-- UIkit CSS -->
<link href="/common/css/uikit.css" rel="stylesheet" type="text/css" />

<!-- UIkit JS -->
<script src="/common/js/uikit.min.js"></script>
<script src="/common/js/uikit-icons.min.js"></script>
<script src="/common/js/uk-lightbox.js"></script>
	
<link rel="stylesheet" type="text/css" href="/common/css/animate.css">
<link rel="stylesheet" type="text/css" href="/common/css/layout.css">
	
<!--jQuery-->
<script src="/common/js/jquery-extension.js"></script>

<!--ヘッダーナビ追従-->
<script src="/common/js/Debouncer.js"></script>
<script src="/common/js/features.js"></script>
<script src="/common/js/Headroom.js"></script>
<script src="/common/js/jQuery.headroom.js"></script>
	
<!--ファビコン-->
<link rel="icon" href="/common/img/favicon/favicon_yamadatakken.ico">
<link rel="icon" type="image/vnd.microsoft.icon" ref="/common/img/favicon/favicon_yamadatakken.ico">
<link rel="shortcut icon" ref="/common/img/favicon/favicon_yamadatakken.ico">

<!--レスポンシブcss-->
<link rel="stylesheet" href="/common/css/style-sm.css" media="print, screen and (max-width:1199px)">
<link rel="stylesheet" href="/common/css/style-s.css" media="screen and (max-width:959px)">
<link rel="stylesheet" href="/common/css/style-xs.css" media="screen and (max-width:640px)">
<link rel="stylesheet" href="/common/css/style-ml.css" media="print,  screen and (min-width:960px)">
<link rel="stylesheet" href="/common/css/style-m.css" media="print, screen and (min-width:960px) and (max-width:1199px)">
<link rel="stylesheet" href="/common/css/style-l.css" media="only screen and (min-width:1200px)">
	
<!--WEBフォント-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Sumana:wght@700&display=swap" rel="stylesheet">
    
<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3448399-1', 'auto');
  ga('send', 'pageview');

</script>



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
<!--header-->
<?php include($webroot."/_inc_file/header.php");?>