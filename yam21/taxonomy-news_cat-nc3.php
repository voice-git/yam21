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

<div class="cn3_content">
  <section class="cn3_mv">
    <h2 class="mv_lead">
      <span class="mv_lead_en copperplate">OPEN HOME</span>
      <span class="mv_lead_ja">内覧会情報</span>
    </h2>
  </section>

  <section class="cn3_session">
    <div class="cn3_mv__head">
      <h2 class="cn3_mv__head-en copperplate">IN SESSION</h2>
      <p class="cn3_mv__head-ja">ご予約受付中の内覧会</p>
    </div>
    <div class="cn3_session_content">
      <div class="cn3_inner">
        <?php
          $today = date('Ymd');
          $args = array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => -1, // すべての公開投稿を取得する場合は-1を指定
            'orderby' => 'post_date',
	          'order' => 'DESC',
            'tax_query' => array(
              array(
                'taxonomy' => 'news_cat',
                'field' => 'slug',
                'terms' => 'nc3'
                )
            ),
            'meta_query' => array(
              array(
                'key'     => 'start', // ACFで所得する公開日
                'value'   => $today,
                'compare' => '>=', // value(今日)とkey(公開日）を比較して未来の場合のみ表示
              ),
            ),
   
            );
            $custom_query = new WP_Query( $args );
        ?>
        <?php if ( $custom_query->have_posts() ) : ?>
        <div uk-grid class="uk-child-width-1-3 blog_archive_infinite_grid works_toppage_grid">
        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
        <?php get_template_part( 'template-parts/news-link-box' ); ?>
        <?php endwhile; ?>
        </div>
        <?php else: ?>
          <p>ご予約受付中の内覧会はありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="cn3_home">
    <div class="cn3_mv__head">
      <h2 class="cn3_mv__head-en copperplate">MODEL HOME</h2>
      <p class="cn3_mv__head-ja">いつでも見学可能なモデルホーム</p>
    </div>
    <div class="cn3_home_content">
      <div class="cn3_inner">
        <div uk-grid class="uk-child-width-1-3 blog_archive_infinite_grid works_toppage_grid">
          <div class="post_box">
            <div class="post_list">
              <picture class="news_link_box_picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/news/cn3_home_img_01.jpg" media="(max-width: 768px)" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/assets2024/img/news/cn3_home_img_01.jpg" alt="" width="267"/>
              </picture>
              <div class="post_content">
                <div class="post_content_left">
                  <div class="post_content_head">
                    <p class="post_content_time copperplate">AMERICAN HOMETOWN</p>
                  </div>
                  <p class="post_content_title">美川アメリカンモデルホーム</p>
                </div>
                <div class="post_content_right">
                  <a href="/model_home/#modelhome01" class="post_content_link">詳しく見る</a>
                  <a href="<?php echo home_url('/'); ?>form_yoyaku" class="post_content_link">来場予約をする</a>
                </div>
              </div>
            </div>
          </div>
          <div class="post_box">
            <div class="post_list">
              <picture class="news_link_box_picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/news/cn3_home_img_02.jpg" media="(max-width: 768px)" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/assets2024/img/news/cn3_home_img_02.jpg" alt="" width="267"/>
              </picture>
              <div class="post_content">
                <div class="post_content_left">
                  <div class="post_content_head">
                    <p class="post_content_time copperplate">70’s FUDOSAN&RENOVATION</p>
                  </div>
                  <p class="post_content_title">70年代不動産　<br class="sp_only">松任Down Townモデル</p>
                </div>
                <div class="post_content_right">
                  <a href="/model_home/#modelhome02" class="post_content_link">詳しく見る</a>
                  <a href="<?php echo home_url('/'); ?>form_yoyaku" class="post_content_link">来場予約をする</a>
                </div>
              </div>
            </div>
          </div>
          <div class="post_box">
            <div class="post_list">
              <picture class="news_link_box_picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/news/cn3_home_img_03.jpg" media="(max-width: 768px)" type="image/png">
                <img src="<?php echo get_template_directory_uri() ?>/assets2024/img/news/cn3_home_img_03.jpg" alt="" width="267"/>
              </picture>
              <div class="post_content">
                <div class="post_content_left">
                  <div class="post_content_head">
                    <p class="post_content_time copperplate">AYU-M MAMAN CHAMPETRE </p>
                  </div>
                  <p class="post_content_title">アユームママン <br class="sp_only">シャンペトル モデル展示場</p>
                </div>
                <div class="post_content_right">
                  <a href="/model_home/#modelhome03" class="post_content_link">詳しく見る</a>
                  <a href="<?php echo home_url('/'); ?>form_yoyaku" class="post_content_link">来場予約をする</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cn3_archive">
    <div class="cn3_mv__head">
      <h2 class="cn3_mv__head-en copperplate">ARCHIVE <br class="sp_only">OPEN HOME</h2>
      <p class="cn3_mv__head-ja">これまでの内覧会</p>
    </div>
    <div class="cn3_archive__content cn3_inner">
          <?php
          $today = date('Ymd');
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $current_post_id = get_the_ID();
          $args = new WP_Query(array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'paged' => $paged,

            'meta_query' => array(
              array(
                'key'     => 'goal', // ACFで所得する公開日
                'value'   => $today,
                'compare' => '<=', // value(今日)とkey(公開日）を比較して未来の場合のみ表示
              ),
            ),
          ));
          $max_num_pages = $args->max_num_pages;
          ?>
          <?php if ($args->have_posts()) : ?>
          <div uk-grid class="uk-child-width-1-3 blog_archive_infinite_grid2 works_toppage_grid">
            <ul class="cn3_archive__list">
            <?php while ($args->have_posts()) : $args->the_post(); ?>
            <?php get_template_part('template-parts/nc3-link-box' ); ?>
            <?php endwhile; ?>
            </ul>
          </div>
          <span class="next_posts_link">
          <?php
            global $args;
            if ($args->max_num_pages > 1) {
              echo paginate_links(array(
                'mid_size' => 2,
                'base' => get_pagenum_link(1) . '%_%',
                'format' => '?paged=%#%',
                'current' => max(1, $paged),
                'total' => $args->max_num_pages,
                'next_text' => '<div class="btn_next">NEXT</div>',
              ));
            }
            ?>
          </span>
          <?php
            global $paged;
            if( empty( $paged ) ) $paged = 1;

            global $args;
            $pages = $args -> max_num_pages;
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
          var infScroll = new InfiniteScroll( '.blog_archive_infinite_grid2', { // 記事を追加するブロックのclassを指定
              append: '.cn3_archive__list',             // 記事ブロックを指定
              path: '.next_posts_link .next',  // 次のページリンクを指定
              hideNav: '.next_posts_link', // 次のページリンクを非表示にする
              button: '.view-more-button', // 次のページの記事ブロックを読み込むボタンを指定
              scrollThreshold: false,      // スクロールで自動的に読み込まれる動作を解除
              status: '.page-load-status', // ステータスのブロックを指定
              history: 'false'             // ブラウザのアドレスを変更しない
          });
          </script> 
        </div>
  </section>
</div>


<?php
get_footer();
