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
$term_sp = get_the_terms($post->ID, 'works_cat');
foreach ($term_sp as $term_s) {
  $term_id = $term_s->term_id;
  $term_name = $term_s->name;
  break;
}
$term_idsp = 'works_cat_' . $term_id;
?>
<?php
$term_sp2 = get_the_terms($post->ID, 'works_cat2');
foreach ($term_sp2 as $term_s2) {
  $term_id2 = $term_s2->term_id;
  $term_name2 = $term_s2->name;
  break;
}
$term_idsp = 'works_cat_' . $term_id;
?>
<section class="work-detail__fv">
  <p class="work-detail__fv__img"><img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>" /></p>
  <h2 class="work-detail__fv__head">
    <span class="work-detail__fv__title copperplate">LIFESTYLE LOG</span>
    <div class="work-detail__fv__wrap copperplate">
      <span class="work-detail__fv__no">NO.</span>
      <span class="work-detail__fv__num"><?php the_field('num'); ?></span>
    </div>
  </h2>
</section>

<article class="work-detail__article">
  <div class="work-detail__article__inner">
    <div class="work-detail__article__head">
      <span class="work-detail__article__brand">BRAND</span>
      <span class="work-detail__article__cat">
        <?php $terms = get_the_terms($post->ID, 'works_cat');
        foreach ($terms as $term) {
          $term_name = $term->name;
          echo $term_name;
          break;
        }; ?>
      </span>
    </div>
    <div class="work-detail__article__wrap">
      <h1 class="work-detail__article__title"><?php the_title(); ?></h1>
      <?php if (get_field('説明文')): ?>
      <div class="work-detail__article__sub">
        <?php the_field('説明文'); ?>
      </div>
      <?php endif; ?>
    </div>

    <div class="work-detail__content">

      <?php if (have_rows('コンテンツパーツ')): while (have_rows('コンテンツパーツ')): the_row(); ?>

        <?php if (get_row_layout() == 'pattern_a'): ?>
          <?php
            $imgid = get_sub_field('a_img');
            $img = wp_get_attachment_image_src($imgid, 'full');
          ?>
          <div class="pattern_a_block">
            <img src="<?php echo $img[0]; ?>" alt="">
          </div>
        <?php endif; ?>
        <?php if (get_row_layout() == 'pattern_b'): ?>
          <div class="pattern_b_block">
            <div class="pattern_b_block_box">
              <?php if (get_sub_field('b_img_left')): ?>
                <?php
                  $imgid = get_sub_field('b_img_left');
                  $img = wp_get_attachment_image_src($imgid, 'full'); ?>
                <div class="pattern_b_block_img">
                  <img src="<?php echo $img[0]; ?>" alt="">
                </div>
              <?php endif; ?>
              <?php if (get_sub_field('b_text_left')): ?>
                <p class="pattern_b_block_text"><?php the_sub_field('b_text_left'); ?></p>
              <?php endif; ?>
            </div>
            <div class="pattern_b_block_box">
              <?php if (get_sub_field('b_img_right')): ?>
                <?php
                  $imgid = get_sub_field('b_img_right');
                  $img = wp_get_attachment_image_src($imgid, 'full'); ?>
                <div class="pattern_b_block_img">
                  <img src="<?php echo $img[0]; ?>" alt="">
                </div>
              <?php endif; ?>
              <?php if (get_sub_field('b_text_right')): ?>
                <p class="pattern_b_block_text"><?php the_sub_field('b_text_right'); ?></p>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if (get_row_layout() == 'pattern_c'): ?>
          <div class="pattern_c_block">
            <?php if (get_sub_field('c_img_left')): ?>
              <?php
                $imgid = get_sub_field('c_img_left');
                $img = wp_get_attachment_image_src($imgid, 'full'); ?>
              <div class="pattern_c_block_img">
                <img src="<?php echo $img[0]; ?>" alt="">
              </div>
            <?php endif; ?>

            <?php if (get_sub_field('c_text_right')): ?>
              <div class="pattern_c_block_texts">
                <p class="pattern_c_block_text"><?php the_sub_field('c_text_right'); ?></p>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <?php if (get_row_layout() == 'pattern_d'): ?>
          <div class="pattern_d_block">
            <?php if (get_sub_field('d_text_right')): ?>
              <div class="pattern_d_block_texts">
                <p class="pattern_d_block_text"><?php the_sub_field('d_text_right'); ?></p>
              </div>
            <?php endif; ?>

            <?php if (get_sub_field('d_img_left')): ?>
              <?php
                $imgid = get_sub_field('d_img_left');
                $img = wp_get_attachment_image_src($imgid, 'full'); ?>
              <div class="pattern_d_block_img">
                <img src="<?php echo $img[0]; ?>" alt="">
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <?php if (get_row_layout() == 'pattern_e'): ?>
          <div class="pattern_e_block">
            <?php if (get_sub_field('e_text')): ?>
              <div class="pattern_e_block_texts">
                <p class="pattern_e_block_text"><?php the_sub_field('e_text'); ?></p>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      <?php endwhile; endif; ?>

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="single_page_nav copperplate uk-flex">
      <span class="navi_l"><?php previous_post_link('%link', 'PREV') ?></span>
      <span class="navi_back"><a href="/works/">INDEX</a></span>
      <span class="navi_r"><?php next_post_link('%link', 'NEXT'); ?></span>
    </div>
  </div>
  <div class="work-detail__article__inner-lg">
    <div class="work-detail__article__other">
      <div class="work-detail__article__other__head">
        <h2 class="work-detail__article__other__head-en copperplate">SAME BRAND LIFESTYLE</h2>
        <p class="work-detail__article__other__head-ja">同じブランドのライフスタイル</p>
      </div>
      <div class="work-detail__article__other__content">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $current_post_id = get_the_ID();
        $loop = new WP_Query(array(
          'post_type' => 'works',
          'paged' => $paged,
          'post__not_in' => array($current_post_id),
        ));
        $max_num_pages = $loop->max_num_pages;
        ?>
        <?php if ($loop->have_posts()) : ?>
        <div uk-grid class="uk-child-width-1-3 blog_archive_infinite_grid2 works_toppage_grid work-detail__article__other__list">
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
          <?php get_template_part('template-parts/works-detail-link-box' ); ?>
          <?php endwhile; ?>
        </div>
        <span class="next_posts_link">
        <?php
          global $loop;
          if ($loop->max_num_pages > 1) {
            echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => '?paged=%#%',
              'current' => max(1, $paged),
              'total' => $loop->max_num_pages,
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
        <div align="center" class="txt-888 mt60">
          <button class="view-more-button" type="button">READ MORE</button>
          <div class="page-load-status" style="display:none;">
            <div class="infinite-scroll-request">LOADING...</div>
            <p class="infinite-scroll-last">これ以上は記事がありません</p>
            <p class="infinite-scroll-error">読み込むページがありません</p>
          </div>
        </div>

        <?php } // 閉じるのを忘れずに！
        ?>
        <?php endif; ?>

        <!--Infinite Scroll-->
        <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
        <script>
        var infScroll = new InfiniteScroll( '.work-detail__article__other__list', { // 記事を追加するブロックのclassを指定
            append: '.post_box-detail',             // 記事ブロックを指定
            path: '.next',  // 次のページリンクを指定
            hideNav: '.next_posts_link', // 次のページリンクを非表示にする
            button: '.view-more-button', // 次のページの記事ブロックを読み込むボタンを指定
            scrollThreshold: false,      // スクロールで自動的に読み込まれる動作を解除
            status: '.page-load-status', // ステータスのブロックを指定
            history: 'false'             // ブラウザのアドレスを変更しない
        });
        </script>
      </div>
    </div>
    <div class="work-detail__article__pickup">
      <div class="work-detail__article__other__head">
        <h2 class="work-detail__article__other__head-en copperplate">PICKUP LIFESTYLE</h2>
        <p class="work-detail__article__other__head-ja">おすすめのライフスタイル</p>
      </div>
      <div class="work-detail__article__other__content">
        
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $current_post_id = get_the_ID();
          $loop = new WP_Query(array(
            'post_type' => 'works',
            'paged' => $paged,
            'post__not_in' => array($current_post_id),
          ));
          $max_num_pages = $loop->max_num_pages;
          ?>
          <?php if ($loop->have_posts()) : ?>
          <div uk-grid class="uk-child-width-1-3 blog_archive_infinite_grid2 works_toppage_grid">
            <ul class="work-detail__article__other__list">
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
              <?php if ( get_field( 'pickup' ) ): ?>
                <?php get_template_part('template-parts/works-detail-link-box' ); ?>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
            </ul>
          </div>
        
      </div>
    </div>
  </div>
</article>

<?php
get_footer();
