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

<?php
$term_sp = get_the_terms( $post->ID, 'news_cat' );
foreach($term_sp as $term_s){
$term_id = $term_s->term_id;
$term_name = $term_s->name;
break;
}
$term_idsp = 'news_cat_'.$term_id;
?>

<section class="news-detail__fv">
  <?php
  $custom_field_value = get_field('n0');
  $taxonomy_term = get_the_terms( get_the_ID(), 'news_cat' );
  if ( $taxonomy_term && ! is_wp_error( $taxonomy_term ) ) {
      $taxonomy_term_name = $taxonomy_term[0]->name;
  } ?>

  <?php if ( $taxonomy_term_name == '内覧会' ) { ?>
    <p class="news-detail__fv__img">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/news/cn3_detail_mv_sp.jpg" media="(max-width: 768px)" type="image/png">
        <img src="<?php echo get_template_directory_uri() ?>/assets2024/img/news/cn3_detail_mv.jpg" alt="" width="267"/>
      </picture>
    </p>
    <h2 class="news-detail__fv__lead">
      <span class="mv_lead_en copperplate">OPEN HOME</span>
      <span class="mv_lead_ja">内覧会情報</span>
    </h2>
  <?php } else { ?>
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
  <?php } ?>
</section>

<article class="article">
  <div class="news-detail__article__inner">
    <div class="news-detail__article__head">
      <?php
      if ( $taxonomy_term_name == '内覧会' ) { ?>
        <p class="news-detail__article__time copperplate"><?php the_field('start'); ?> - <?php the_field('goal'); ?></p>
      <?php } else { ?>
<!--         <p class="news-detail__article__time copperplate"><?php the_time('Y.m.d'); ?> -->
          <span class="news-detail__article__cat">
          <?php
          $terms = get_the_terms($post->ID, 'news_cat');
          foreach($terms as $term) {
            $term_name = $term->name;
            echo $term_name; break;
          }; ?>
          </span>
        </p>
      <?php } ?>
      <h1 class="news-detail__article__title mincho"><?php the_title(); ?></h1>
    </div>
    <div class="news-detail__article__thumbnail">
      <?php if( get_field('n1') ): ?>
        <img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>" />
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/logo.jpg" alt="ヤマダタッケン" width="216">
      <?php endif; ?>
      
    </div>
    <?php
      $group_field = get_field('event');

      if ($group_field) {
        $event_info = $group_field['event_info'];
        $event_day = $group_field['event_day'];
        $event_time = $group_field['event_time'];
        $event_place = $group_field['event_place'];
        $event_parking = $group_field['event_parking'];
    ?>
    <?php if ($event_info) : ?>
    <table class="news-detail__article__table notosans">
      <tbody class="news-detail__article__body">
        <?php if ($event_info) : ?>
        <tr class="news-detail__article__tr">
          <th class="news-detail__article__th notosans">イベント情報</th>
          <td class="news-detail__article__td"><?php echo $event_info; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($event_day) : ?>
        <tr class="news-detail__article__tr">
          <th class="news-detail__article__th notosans">日程</th>
          <td class="news-detail__article__td"><?php echo $event_day; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($event_time) : ?>
        <tr class="news-detail__article__tr">
          <th class="news-detail__article__th notosans">時間</th>
          <td class="news-detail__article__td"><?php echo $event_time; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($event_place) : ?>
        <tr class="news-detail__article__tr">
          <th class="news-detail__article__th notosans">場所</th>
          <td class="news-detail__article__td"><?php echo $event_place; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($event_parking) : ?>
        <tr class="news-detail__article__tr">
          <th class="news-detail__article__th notosans">駐車場</th>
          <td class="news-detail__article__td"><?php echo $event_parking; ?></td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
    <div class="news-detail__btn">
      <?php if(get_field('予約フォーム')): ?>
      <a class="btn notosans" href="#form_link">ご予約はこちら</a>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php } ?>

    <div class="news-detail__content notosans clearfix">
      <?php if ( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile;?>
      <?php endif; ?>

      <?php if(get_field('予約フォーム')): ?>
      <br>
      <div id="form_link">
        <?php the_field('予約フォーム'); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
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
</article>

<?php
get_footer();
