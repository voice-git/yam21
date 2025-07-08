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

<section class="blog_mv">
  <h2 class="mv_lead">
    <span class="mv_lead_en copperplate">STAFF JOURNAL</span>
    <span class="mv_lead_ja">スタッフブログ</span>
  </h2>
</section>


<article class="blog_content" id="blog_content">
  <div class="mb50" align="right">
    <form name="sort_form" class="blog_content_cat">
      <div class="blog_content_cat_wrap">
        <p class="blog_content_cat_text copperplate">WRITER</p>
        <div class="blog_content_select_arrow">
          <select name="sort" onchange="dropsort()" class="blog_content_select uk-form-width-medium" id="sort">
            <option value="">ライターを選択</option>
            <?php
            $current_slug = get_query_var('term', 'default_value'); // Get the current slug from the URL
            $arr = array('parent' => 0);
            $taxonomy_name = 'blog_staff';
            $taxonomys = get_terms($taxonomy_name, $arr);

            if (!is_wp_error($taxonomys) && count($taxonomys)) {
                foreach ($taxonomys as $taxonomy) {
                  $value = '/blog_staff/' . esc_html($taxonomy->slug) . '/#blog_content';
                  $name = esc_html($taxonomy->name);
                  $selected = ($current_slug === $taxonomy->slug) ? 'selected' : '';

                  echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
                }
            }
            ?>
          </select>
        </div>
      </div>
      <div class="blog_content_cat_wrap">
        <p class="blog_content_cat_text copperplate">DATE</p>
        <div class="blog_content_select_arrow">
          <select name="sort2" onchange="dropsort2()" class="blog_content_time uk-form-width-medium copperplate" id="sort2">
            <?php
              $args_monthly = array(
                'type' => 'monthly',
                'format' => 'option',
                'post_type' => 'blog',
                'before' => '',
                'after' => '',
              );

              echo wp_get_archives($args_monthly);
              ?>
          </select>
        </div>
      </div>
    </form>
    <script>
      function dropsort() {
      var browser = document.getElementById('sort').value;
          location.href = browser;
      }
      function dropsort2() {
      var browser2 = document.getElementById('sort2').value + '/#blog_content';
          location.href = browser2;
      }
    </script>
  </div>
  <?php
		if ( have_posts() ) : ?>
      <div uk-grid class="blog_archive_infinite_grid blog_content_grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/blog-link-box' ); ?>
        <?php endwhile; ?>
      </div>
  <?php
    global $paged;
    if( empty( $paged ) ) $paged = 1;

    global $wp_query;
    $pages = $wp_query -> max_num_pages;
    if( !$pages ) {
        $pages = 1;
    }
    // 1ページしかない or 最後のページでは出力しない条件分岐をさせる
    if( $pages != 1 && $paged < $pages ) {
  ?>
  <?php } endif; ?>
  <div class="page_navi_wrap">
    <div class="page_navi copperplate">
      <?php
      global $wp_query;
      if ($wp_query->max_num_pages > 1) {
        echo paginate_links(array(
          'mid_size' => 2,
          'base' => get_pagenum_link(1) . '%_%',
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
</article>

<?php
get_footer();
