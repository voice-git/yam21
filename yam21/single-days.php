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

<section class="days_detail_mv">
  <h2 class="mv_lead">
    <img class="mv_lead_title" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/days/days_title.png" alt="L/C.O.S.F. DAY’S">
    <!-- <span class="mv_lead_en copperplate">L/C.O.S.F. DAY’S</span> -->
    <span class="mv_lead_ja">“いそがない人生” をたくさんの人に。</span>
  </h2>
  <div class="mv_nav">
    <li class="mv_nav_list">
      <a class="mv_nav_link" href="<?php echo home_url('/'); ?>days_cat/staff#days_list">
        <span class="mv_nav_list_en copperplate">FROM STAFF</span>
      </a>
    </li>
    <li class="mv_nav_list">
      <a class="mv_nav_link" href="<?php echo home_url('/'); ?>days_cat/partner#days_list">
        <span class="mv_nav_list_en copperplate">FROM PARTNER</span>
      </a>
    </li>
    <li class="mv_nav_list">
      <a class="mv_nav_link" href="<?php echo home_url('/'); ?>days_cat/ob_og#days_list">
        <span class="mv_nav_list_en copperplate">FROM OB・OG</span>
      </a>
    </li>
    <li class="mv_nav_list">
      <a class="mv_nav_link" href="<?php echo home_url('/'); ?>column">
        <span class="mv_nav_list_en copperplate">SAWANO DAY’S</span>
      </a>
    </li>
  </div>
  <div class="column_mv_wrap">
    <div class="mv_head">
      <div class="mv_head_wrap">
        <span class="mv_head_cat copperplate">
          <?php
	        $terms = get_the_terms($post->ID, 'days_cat');
	        if ($terms && !is_wp_error($terms)){
		        foreach($terms as $term){
			        $term_name = $term->name;
			        echo $term_name;
			        break;
		        }
	        }
          ?>
        </span>
        <P class="mv_head_time copperplate"><?php the_time( 'Y.m.d' ); ?></P>
      </div>

      <P class="mv_head_title"><?php the_title(); ?></P>
    </div>
    <div class="mv_img_wrap">
    <?php if( has_post_thumbnail() ): ?>
      <p class="mv_img">
      <?php the_post_thumbnail('full'); ?>
      </p>
    <?php else: ?>
      <p class="mv_img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/logo.jpg" alt="ヤマダタッケン" width="216">
      </p>
    <?php endif; ?>
    </div>
  </div>
</section>

<article class="article">
  <div class="uk-container">
    <div class="days-detail__content notosans clearfix">
      <?php if ( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile;?>
      <?php endif; ?>
    </div>

    <?php comments_template(); ?>

    <div class="days-detail__article__inner2">
      <div class="share-buttons__wrap">
        <p class="share-buttons__text notosans">この記事をシェアする</p>
        <ul class="share-buttons">
	      <?php $current_url = home_url(add_query_arg(array(),$wp->request));$url_encode = urlencode($current_url); ?>
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

      <?php get_template_part( 'template-parts/profile' ); ?>

      <div class="days-detail__article__nav">
        <div class="single_page_nav copperplate uk-flex">
          <span class="navi_l"><?php previous_post_link('%link', 'PREV') ?></span>
          <span class="navi_back"><a href="/days/">INDEX</a></span>
          <span class="navi_r"><?php next_post_link('%link', 'NEXT'); ?></span>
        </div>
      </div>
    </div>

  </div>
</article>
<div class="days-detail__article__related">
  <div class="work-detail__article__other__head">
    <h2 class="work-detail__article__other__head-en copperplate">RELATED BLOG</h2>
    <p class="work-detail__article__other__head-ja">同じカテゴリーの最新投稿</p>
  </div>
  <div class="days-detail__article__related__content">
    <?php
    $terms = get_the_terms($post->ID, 'days_cat');
    if ($terms && !is_wp_error($terms)) {
      $term_ids = wp_list_pluck($terms, 'term_id'); // タームIDを取得
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $current_post_id = get_the_ID();
    $loop = new WP_Query(array(
      'post_type' => 'days',
      'post_per_page' => '6',
      'paged' => $paged,
      'post__not_in' => array($current_post_id),
      'tax_query' => array(
        array(
            'taxonomy' => 'days_cat',
            'field' => 'term_id',
            'terms' => $term_ids
        )
      )
    ));
    $max_num_pages = $loop->max_num_pages;
    ?>
    <?php if ($loop->have_posts()) : ?>
    <div uk-grid class="uk-child-width-1-3 blog_archive_infinite_grid4 works_toppage_grid">
      <ul class="days-detail__article__other__list">
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
      <?php get_template_part('template-parts/days-link-box' ); ?>
      <?php endwhile; ?>
      </ul>
    </div>
    <span class="next_posts_link">
    <?php
      global $loop;
      if ($loop->max_num_pages > 1) {
        echo paginate_links(array(
          'mid_size' => 2,
          'base' => get_pagenum_link(1) . '%_%',
          'format' => '?paged=%#%',
          'current' => max(1, $paged),
          'total' => $loop->max_num_pages,
          'next_text' => '<div class="btn_next">NEXT</div>',
        ));
      }
      ?>
    </span>
    <?php
      global $paged;
      if( empty( $paged ) ) $paged = 1;

      global $loop;
      $pages = $loop -> max_num_pages;
      if( !$pages ) {
          $pages = 1;
      }
      // 1ページしかない or 最後のページでは出力しない条件分岐をさせる
      if( $pages != 1 && $paged < $pages ) {
    ?>
    <div class="blog-detail__article__related__btn">
      <button class="view-more-button" type="button">READ MORE</button>
      <div class="page-load-status" style="display:none;">
        <div class="infinite-scroll-request">LOADING...</div>
        <p class="infinite-scroll-last">これ以上は記事がありません</p>
        <p class="infinite-scroll-error">読み込むページがありません</p>
      </div>
    </div>

    <?php } // 閉じるのを忘れずに！
    ?>
    <?php else: ?>
      <p>投稿記事がありません。</p>
    <?php endif; ?>

    <?php } // 閉じるのを忘れずに！
    ?>

    <!--Infinite Scroll-->
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
    var infScroll = new InfiniteScroll( '.blog_archive_infinite_grid4', { // 記事を追加するブロックのclassを指定
        append: '.days-detail__article__other__list',             // 記事ブロックを指定
        path: '.next_posts_link .next',  // 次のページリンクを指定
        hideNav: '.next_posts_link', // 次のページリンクを非表示にする
        button: '.view-more-button', // 次のページの記事ブロックを読み込むボタンを指定
        scrollThreshold: false,      // スクロールで自動的に読み込まれる動作を解除
        status: '.page-load-status', // ステータスのブロックを指定
        history: 'false'             // ブラウザのアドレスを変更しない
    });
    </script>
  </div>
</div>

<?php
get_footer();
