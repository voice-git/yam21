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


<article class="blog_content">
  <div class="mb50" align="right">
    <form name="sort_form" class="blog_content_cat">
      <div class="blog_content_cat_wrap">
        <p class="blog_content_cat_text copperplate">WRITER</p>
        <select name="sort" onchange="dropsort()" class="blog_content_select uk-form-width-medium">
          <option value="">ライターを選択</option>
          <?php
            $arr = array('parent' => 0,);
            $taxonomy_name = 'blog_staff';
            $taxonomys = get_terms($taxonomy_name, $arr);

            if(!is_wp_error($taxonomys) && count($taxonomys)):
                foreach($taxonomys as $taxonomy):
          ?>
          <option value="/blog_staff/<?php echo esc_html($taxonomy->slug); ?>/"><?php echo esc_html($taxonomy->name); ?></option>
          <?php
            endforeach;
            endif;
          ?>
        </select>
      </div>
      <div class="blog_content_cat_wrap">
        <p class="blog_content_cat_text copperplate">DATE</p>
        <select name="sort" onchange="dropsort()" class="blog_content_time uk-form-width-medium copperplate">
          <option value="">年月を選択</option>
          <?php
            $year_month = get_archives(array(
                'type' => 'monthly',
                'format' => 'custom',
                'before' => '',
                'after' => '',
                'echo' => 0
            ));

            if ($year_month):
                foreach ($year_month as $year_month_link):
                    echo '<option value="' . esc_url($year_month_link) . '">' . esc_html($year_month_link) . '</option>';
                endforeach;
            endif;
          ?>
        </select>
      </div>
    </form>
    <script>
      function dropsort() {
        var browser = document.sort_form.sort.value;
        location.href = browser
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
