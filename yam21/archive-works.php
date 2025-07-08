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

<section class="work_mv">
  <h2 class="mv_lead">
    <span class="mv_lead_top">−施工実績−</span>
    <span class="mv_lead_en copperplate">LIFESTYLE LOG</span>
    <span class="mv_lead_ja">十人十色の急がない人生。</span>
  </h2>
  <div class="work_mv_bg"></div>
</section>

<article class="work_content" id="works_content">
  <main id="main" class="site-main" role="main">
    <div class="work_inner">
      <div class="work_cats_wrap">
        <h2 class="work_cats_head">ブランドから選ぶ</h2>
        <?php
        $current_url = home_url($_SERVER['REQUEST_URI']);
        $slug = '/works/';

        if (strpos($current_url, $slug) !== false && strpos($current_url, '?') === false) {
            $class = 'is-active';
        } else {
            $class = '';
        }
        echo '<a href="/works/#works_content" class="work_cats_all sp_only ' . $class . '">すべてのブランド</a>';
        echo '<a href="/works/#works_content" class="work_cats_all pc_only ' . $class . '">すべて</a>';
        ?>
        <div class="work_cats_list"><?php echo do_shortcode('[searchandfilter slug="works"]'); ?></div>
      </div>
      <?php if ( have_posts() ) : ?>
        <div uk-grid class="uk-child-width-1-3 blog_archive_infinite_grid works_toppage_grid">
        <?php	while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/works-link-box' ); ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <div class="page_navi copperplate">
      <?php
        global $wp_query;
        if ($wp_query->max_num_pages > 1) {
            $base_url = get_pagenum_link(1);
            $current_url = add_query_arg($_SERVER['QUERY_STRING'], '', home_url($wp->request));
            $base_url = strtok($current_url, '?');
            $format = '/page/%#%';

            echo paginate_links(array(
              'mid_size' => 2,
                'base' => $base_url . '%_%',
                'format' => $format,
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
