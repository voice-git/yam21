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

<section class="column_detail_mv">
  <h2 class="mv_lead">
    <img class="mv_lead_title" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/column/column_title.png" alt="SAWANO DAY’S">
    <!-- <span class="mv_lead_en copperplate">SAWANO DAY’S</span> -->
    <span class="mv_lead_ja">代表 澤野のライフスタイル ブログ</span>
  </h2>
  <div class="column_mv_wrap">
    <div class="mv_head">
      <P class="mv_head_time copperplate"><?php the_time( 'Y.m.d' ); ?></P>
      <P class="mv_head_title"><?php the_title(); ?></P>
    </div>
<!--
    <div class="mv_img_wrap">
      <p class="mv_img" style="background-image: url(<?PHP the_field('n1'); ?>)"><img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>"/></p>
    </div>
-->
  </div>
</section>

<article class="article">
  <div class="uk-container">
    <div class="column-detail__content notosans clearfix">
      <?php if ( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile;?>
      <?php endif; ?>
    </div>

    <div class="share-buttons__wrap">
      <p class="share-buttons__text notosans">この記事をシェアする</p>
      <ul class="share-buttons">
        <!-- Instagram -->
        <li class="share-buttons__item">
          <a class="share-buttons__link" href="https://www.instagram.com/yamadatakken/" target="_blank" rel="nofollow noopener">
            <img src="<?php echo esc_url(get_theme_file_uri('assets2024/img/common/insta.svg')); ?>" alt="Instagram">
          </a>
        </li>


        <!-- Facebook -->
        <li class="share-buttons__item">
          <a class="share-buttons__link" href="https://www.facebook.com/share.php?u=<?php echo $url_encode ?>" target="_blank" rel="nofollow noopener">
            <img src="<?php echo esc_url(get_theme_file_uri('assets2024/img/common/facebook.svg')); ?>" alt="">
          </a>
        </li>

        <!-- LINE -->
        <li class="share-buttons__item">
          <a class="share-buttons__link" href="http://line.me/R/msg/text/?<?php echo $url_encode ?>%0a<?php the_title(); ?>" target="_blank" rel="nofollow noopener">
            <img src="<?php echo esc_url(get_theme_file_uri('assets2024/img/common/line.svg')); ?>" alt="">
          </a>
        </li>
      </ul>
    </div>

    <div class="column-detail__article__nav">
      <div class="single_page_nav copperplate uk-flex">
        <span class="navi_l"><?php previous_post_link('%link', 'PREV') ?></span>
        <span class="navi_back"><a href="/column/">INDEX</a></span>
        <span class="navi_r"><?php next_post_link('%link', 'NEXT'); ?></span>
      </div>
    </div>

  </div>
</article>

<?php
get_footer();
