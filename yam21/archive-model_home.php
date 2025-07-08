<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yam21
 */

get_header();
?>


<div class="subpage_main subpage_main_big" style="background-image: url(/common/img/subpage_main/modelhome.jpg);">
  <div class="uk-height-1-1 subpage_main_dark">
  <div class="uk-container uk-height-1-1">
    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
      <div class="subpage_main_content">
  <div class="txt_40 trajan">Model Home</div>
  <div class="txt_18">ヤマダタッケンのモデルホームに行こう</div>
      </div>
      </div>
  </div>
  </div>
</div>

<div class="pankuzu">
  <nav class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="/">HOME</a></li>
      <li><span>モデルホーム</span></li>
  </ul>
  </nav>
</div>

<article >
<?php query_posts($query_string . '&posts_per_page=-1');?>
  <?php
		if ( have_posts() ) : ?>
  <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
<a class="uk-display-block modelhome_archive_link_box" href="<?php the_permalink(); ?>"><div class="subpage_main subpage_main_big" style="background-image: url(<?PHP the_field('mh1'); ?>);background-position:center">
  <div class="uk-height-1-1 subpage_main_dark">
  <div class="uk-container uk-height-1-1 lh120p">
    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
      <div class="subpage_main_content">
<?PHP the_field('mh2'); ?>
            <div class="top_link_wrap_more_btn txt80p">more</div>
      </div>
      </div>
  </div>
  </div>
</div></a>
    
  <?php endwhile; ?>
<?php endif; ?>	
</article>




  <?php get_template_part( 'template-parts/works-modelhome' ); ?>
  
  <?php get_template_part( 'template-parts/recommended-modelhome' ); ?>


<?php
get_footer();