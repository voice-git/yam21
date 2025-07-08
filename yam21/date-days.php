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

<section class="days_mv">
  <h2 class="mv_lead">
    <span class="mv_lead_en copperplate">L/C.O.S.F. DAY'S</span>
    <span class="mv_lead_ja">“いそがない人生” をたくさんの人に。</span>
  </h2>
  <div class="mv_nav">
    <li class="mv_nav_list">
      <a class="mv_nav_link" href="<?php echo home_url('/'); ?>days_cat/staff#days_list">
        <span class="mv_nav_list_en copperplate">FROM STAFF</span>
        <span class="mv_nav_list_ja">ヤマダタッケン スタッフ</span>
      </a>
    </li>
    <li class="mv_nav_list">
      <a class="mv_nav_link" href="<?php echo home_url('/'); ?>days_cat/partner#days_list">
        <span class="mv_nav_list_en copperplate">FROM PARTNER</span>
        <span class="mv_nav_list_ja">グループ会社・パートナーさま</span>
      </a>
    </li>
    <li class="mv_nav_list">
      <a class="mv_nav_link" href="<?php echo home_url('/'); ?>days_cat/ob_og#days_list">
        <span class="mv_nav_list_en copperplate">FROM OB  OG</span>
        <span class="mv_nav_list_ja">OB・OGさま</span>
      </a>
    </li>
    <li class="mv_nav_list">
      <a class="mv_nav_link" href="<?php echo home_url('/'); ?>column">
        <span class="mv_nav_list_en copperplate">SAWANO DAY’S</span>
        <span class="mv_nav_list_ja">代表 澤野のブログ</span>
      </a>
    </li>
  </div>
  <div class="mv_slider">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slider">
            <a href="">
              <img src="<?php echo get_template_directory_uri() ?>/assets2024/img/days/days_mv.jpg" alt="sample" width="267"/>
              <div class="slider__head">
                <P class="slider__head__time copperplate">FROM STAFF | 2024.01.29</P>
                <P class="slider__head__title">ちょっと手間でも幸せな暮らし</P>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider">
            <a href="">
              <img src="<?php echo get_template_directory_uri() ?>/assets2024/img/days/days_mv.jpg" alt="sample" width="267"/>
              <div class="slider__head">
                <P class="slider__head__time copperplate">FROM STAFF | 2024.01.29</P>
                <P class="slider__head__title">ダミーテキストダミーテキストダミーテキスト</P>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider">
            <a href="">
              <img src="<?php echo get_template_directory_uri() ?>/assets2024/img/days/days_mv.jpg" alt="sample" width="267"/>
              <div class="slider__head">
                <P class="slider__head__time copperplate">FROM STAFF | 2024.01.29</P>
                <P class="slider__head__title">ちょっと手間でも幸せな暮らし</P>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev">
        <picture class="swiper-button__arrow__left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/days/slider_arrow_left.png" alt="" decoding="async" width="180" height="50">
        </picture>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next">
        <picture class="swiper-button__arrow__right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/days/slider_arrow_right.png" alt="" decoding="async" width="180" height="50">
        </picture>
      </div>
    </div>

  </div>
</section>

<article class="days_content">
  <p class="days_content_text">
    イフスタイルメディア<br class="sp_only">『L/C.O.S.F. DAY’S』では、<br>
    “いそがない人生”を送るうえで<br class="sp_only">大切にしていることや生活の工夫などを<br>
    「ヤマダタッケンのスタッフ」<br class="sp_only">「グループ企業やパートナーさま」<br class="sp_only">「OB・OGさま」の視点からご紹介します。<br>
    みなさんの、これからのライフスタイルを<br class="sp_only">考えるきっかけとなれば幸いです。
  </p>
  <form name="sort_form" class="days_content_cat" id="days_list">
  
    <div class="days_content_cat_wrap2">
      <p class="blog_content_cat_text copperplate">CATEGORY</p>
      <ul class="days_content_cat_list">
        <li class="days_content_cat_item copperplate">
          <a href="<?php echo home_url('/'); ?>days#days_list">ALL</a>
        </li>
        <li class="days_content_cat_item copperplate">
          <a href="<?php echo home_url('/'); ?>days_cat/staff#days_list">FROM STAFF</a>
        </li>
        <li class="days_content_cat_item copperplate">
          <a href="<?php echo home_url('/'); ?>days_cat/partner#days_list">FROM PARTNER</a>
        </li>
        <li class="days_content_cat_item copperplate">
          <a href="<?php echo home_url('/'); ?>days_cat/ob_og#days_list">FROM OB OG</a>
        </li>
      </ul>
    </div>
    <div class="blog_content_cat_wrap sp_only">
        <p class="days_content_cat_text copperplate">CATEGORY</p>
        <select name="sort" onchange="dropsort()" class="days_content_select uk-form-width-medium copperplate">
          <option value="">ALL</option>
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
    <div class="days_content_cat_wrap">
      <p class="blog_content_cat_text copperplate">DATE</p>
      <select name="sort" onchange="dropsort()" class="blog_content_time uk-form-width-medium copperplate">
        <option value="">2024.01</option>
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
  </form>
  <?php global $query_string;
    $args = $query_string;
    parse_str( $args, $args );

    $taxargs = array();
    array_push($taxargs,array('taxonomy'=>'column_page', 'terms'=>array( 'satoyama' ), 'field'=>'slug','operator'=>'NOT IN' ));
    array_push($taxargs,array( 'relation' => 'AND' ));
    $args = $args + array('tax_query'=>$taxargs);
    $args = $args + array('posts_per_page'=>9);
    query_posts( $args );
  ?>
  <?php
		if ( have_posts() ) : ?>
      <div uk-grid class="uk-child-width-1-2@s uk-child-width-1-3@l days_content_grid">
        <?php
          /* Start the Loop */
            while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/days-link-box' ); ?>
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
