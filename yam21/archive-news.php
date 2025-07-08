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

<section class="news_mv">
  <h2 class="mv_lead">
    <span class="mv_lead_en copperplate">NEWS・EVENT</span>
    <span class="mv_lead_ja">お知らせ・イベント情報</span>
  </h2>
</section>


<article class="news_content">
  <main id="main" class="site-main" role="main">
    <div class="news_inner">
      <div class="news_cat">
        <p class="news_cat_head copperplate">CATEGOLY</p>
        <!--search&filter/絞り込み検索-->
        <div class="news_cat_select sp_mt20"><?php echo do_shortcode('[searchandfilter id="350" ]'); ?></div>
      </div>
      <div class="news_cat2">
        <p class="news_cat_head copperplate">CATEGOLY</p>
        <!--search&filter/絞り込み検索-->
        <div class="news_cat_select sp_mt20"><?php echo do_shortcode('[searchandfilter slug="news-eventsp"]'); ?></div>
      </div>
      <?php	if ( have_posts() ) : ?>
      <div uk-grid class="uk-child-width-1-3 blog_archive_infinite_grid works_toppage_grid">
      <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/news-link-box' ); ?>
      <?php endwhile; ?>
      </div>
      <?php endif; ?>
      <div class="page_navi copperplate">
        <?php
        global $wp_query;
        if ($wp_query->max_num_pages > 1) {
          $base_url = get_pagenum_link(1);
          $current_url = add_query_arg($_SERVER['QUERY_STRING'], '', home_url($wp->request));
          $base_url = strtok($current_url, '?');

          echo paginate_links(array(
            'mid_size' => 2,
            'base' => $base_url . '%_%',
            'format' => '?paged=%#%',
            'current' => max(1, $paged),
            'total' => $wp_query->max_num_pages,
            'prev_text' => '<div class="btn_prev">PREV</div>',
            'next_text' => '<div class="btn_next">NEXT</div>',
          ));
        }
        ?>
      </div>
    </div>
  </main>
</article>

<?php
get_footer();
