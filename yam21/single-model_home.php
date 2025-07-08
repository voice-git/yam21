<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yam21
 */

get_header();
?>

<div class="subpage_main subpage_main_big" style="background-image: url(<?PHP the_field('mh1'); ?>)">
  <div class="uk-height-1-1 subpage_main_dark">
  <div class="uk-container uk-height-1-1">
    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
      <div class="subpage_main_content">
        <?PHP the_field('mh2'); ?>
      </div>
      </div>
  </div>
  </div>
</div>
    
<div class="pankuzu">
  <nav class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="/">HOME</a></li>
      <li><a href="/model_home/">モデルホーム</a></li>
      <li><span><?php the_title(); ?></span></li>
    </ul>
  </nav>
</div>

        <?PHP the_field('mh_content', $post_id, false); ?>


  <?php get_template_part( 'template-parts/works-modelhome' ); ?>
  
  <?php get_template_part( 'template-parts/recommended-modelhome' ); ?>

<?php
get_footer();
