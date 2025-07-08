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
<link rel="stylesheet" type="text/css" href="/common/css/bootstrap.css">


<section class="news-detail__fv">
    <p class="news-detail__fv__img">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/news/news_detail_mv_sp.jpg" media="(max-width: 768px)" type="image/png">
        <img src="<?php echo get_template_directory_uri() ?>/assets2024/img/news/news_detail_mv.jpg" alt="" width="267"/>
      </picture>
    </p>
    <h2 class="news-detail__fv__lead">
      <span class="mv_lead_en copperplate">NEWS・EVENT</span>
      <span class="mv_lead_ja">お知らせ・イベント情報</span>
    </h2>
</section>

<article class="article">
  <div class="news-detail__article__inner">
    <div class="news-detail__article__head">
        <p class="news-detail__article__time copperplate"><?php the_time('Y.m.d'); ?></p>
      <h1 class="news-detail__article__title mincho"><?php the_title(); ?></h1>
    </div>
    <div class="news-detail__article__thumbnail">
      
    </div>

    <div class="news-detail__content notosans clearfix">
      <?php if ( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile;?>
      <?php endif; ?>
    </div>
  </div>
<!--
  <div class="news-detail__article__nav">
    <div class="single_page_nav copperplate">
      <span class="navi_l"><?php previous_post_link('%link', 'PREV') ?></span>
      <?php if ( $taxonomy_term_name == '内覧会' ) { ?>
        <span class="navi_back"><a href="/news_cat/nc3">INDEX</a></span>
      <?php } else { ?>
        <span class="navi_back"><a href="/news/">INDEX</a></span>
      <?php } ?>
      <span class="navi_r"><?php next_post_link('%link', 'NEXT'); ?></span>
    </div>
  </div>
-->
</article>

<?php
get_footer();
