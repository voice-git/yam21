<?php
/*
Template Name: 里山の暮らし
*/
?>
<?php
get_header();
?>
<link href="https://fonts.googleapis.com/css?family=Cinzel:400&display=swap" rel="stylesheet">
<div class="satoyama_page_content_body">
  <div class="pankuzu">
    <nav class="uk-container">
      <ul class="uk-breadcrumb">
        <li><a href="/">HOME</a></li>
        <li><span>
          <?php the_title(); ?>
          </span></li>
      </ul>
    </nav>
  </div>
  <div class="uk-container satoyama_title">
    <div> <span class="satoyama_title_svg_01"><img src="/common/img/satoyama/txt_satoyama.svg" alt="SATOYAMA"/></span> <span class="satoyama_title_svg_02"><img src="/common/img/satoyama/txt_life.svg" alt="Life"/></span> </div>
    <h1 class="satoyama_small_title mt25 sp_mt20">
      <?php the_title(); ?>
    </h1>
  </div>
  <div class="subpage_main mt50 uk-background-fixed" style="background-image: url(/common/img/satoyama/bg01.jpg)"> </div>
    <div class="uk-container" uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 250">
    <div align="center" class="mt150 sp_mt100"><div class="satoyama_svg_title_concept"><img src="/common/img/satoyama/txt_concept.svg" alt="コンセプト"/></div>
    <h2 class="satoyama_small_title mt05 mb40 sp_mb30">コンセプト</h2>
<div class="txt110p satoyama_concept_txt"><?PHP the_field('s_01'); ?></div></div>
    
    
    
  <?php 
$posts = get_posts(array(
'posts_per_page' => -1, // 表示件数の指定
'post_type' => 'column', // 
	'tax_query' => array(
	array(
		'taxonomy' => 'column_page', // カスタム分類 Products-cat
		'field' => 'slug',
		'terms' => 'satoyama', // ターム item1 で絞り込む
		)
	)
));
if( $posts ): ?>
    <div align="center" class="mt200 sp_mt100">
        <div class="satoyama_svg_title_blog"><img src="/common/img/satoyama/txt_blog.svg" alt="ブログ"/></div>
    <h2 class="satoyama_small_title mt05 mb60 sp_mb40">ブログ</h2></div>
        <div uk-grid  class="satoyama_blog_grid">
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>		
          <div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m satoyama_blog_grid_item">
            <a href="<?php the_permalink(); ?>" class="news_link_box">
            <?php get_template_part( 'template-parts/link_img' ); ?>
            <div class="lh140p txt120p"><?php the_title(); ?></div>
              </a>
          </div>
<?php endforeach; ?>
        </div>
            <div class="satoyama_more_btn mt80"></div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>	
        
            
    </div>
    
  <div class="subpage_main mt200 sp_mt100 uk-background-fixed" style="background-image: url(/common/img/satoyama/bg02.jpg)"> </div>
</div>
<?php
get_footer();
