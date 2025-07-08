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

<section class="realestate_mv">
  <h2 class="mv_lead">
    <span class="mv_lead_en copperplate">REAL ESTATE</span>
    <span class="mv_lead_ja">不動産情報</span>
  </h2>
</section>

<article class="realestate_content">
  <main id="main" class="site-main" role="main">
    <div class="realestate_inner">
      <div class="news_cat">
        <p class="news_cat_head copperplate">CATEGOLY</p>
        <!--search&filter/絞り込み検索-->
        <div class="news_cat_select sp_mt20"><?php echo do_shortcode('[searchandfilter id="336" ]'); ?></div>
      </div>
      <div class="news_cat2">
        <p class="news_cat_head copperplate">CATEGOLY</p>
        <!--search&filter/絞り込み検索-->
        <div class="news_cat_select sp_mt20"><?php echo do_shortcode('[searchandfilter slug="real-estate-2"]'); ?></div>
      </div>
      <?php
	  $current_date = getdate();
      if (have_posts()) : ?>
        <div class="realestate_archive_infinite_grid">
          <?php while (have_posts()) : the_post(); ?>
            <div class="realestate_post_box">
              <a href="<?php the_permalink(); ?>" class="realestate_post_flex">
                <div class="realestate_post_box_pic">
	              <?php if (get_field('rec2')) : ?>
                  <div class="realestate_link_box_img soldout"><img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>" />
                  <?php else: ?>
                  <div class="realestate_link_box_img"><img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>" />
                  <?php endif; ?>
                    <?php if (get_field('rec2')) : ?>
                        <div class="baiyakuzumi trajan">Sold Out</div>
<!--
                      <?php if (is_object_in_term(get_the_ID(), 'real_estate_cat', 'rec1')) : ?>
                        <div class="baiyakuzumi" style="letter-spacing: 5px">成約済</div>
                      <?php elseif (is_object_in_term($post->ID, 'real_estate_cat', 'rec2')) : ?>
                        <div class="baiyakuzumi trajan">Sold Out</div>
                      <?php endif; ?>
-->
                    <?php endif; ?>
                  </div>
                  <?php $post_date = get_the_date('Y-m-d');if (strtotime($post_date) >= strtotime('-1 month', strtotime($current_date['year'] . '-' . $current_date['mon'] . '-' . $current_date['mday']))): ?>
                    <span class="bg_red copperplate">NEW</span>
                  <?php endif; ?>
                </div>
                <div class="realestate_post_right">
                  <?php
                    $group_field = get_field('realestate_info');

                    if ($group_field) {
                      $info_price = $group_field['info_price'];
                      $info_area = $group_field['info_area'];
                      $adress = $group_field['adress'];
                  ?>
                  <div class="realestate_post_right_head">
                    <p class="realestate_post_cat_name">
                    <?php $terms = get_the_terms($post->ID, 'real_estate_cat');
                      if ($terms && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                          $term_name = $term->name;
                          echo $term_name;
                          break;
                        };
                      }
                      ?>
                      </span>
                    </p>
                    <p class="realestate_post_cat_adress"><?php echo $adress; ?></p>
                  </div>

                  <p class="realestate_post_title"><?PHP the_field('re2'); ?></p>
                  <p class="realestate_post_area">土地面積 <?php echo $info_area; ?></p>
                  <p class="realestate_post_price">価格 <?php echo $info_price; ?></p>
                  <?php } ?>
                </div>
              </a>
              <div class="realestate_post_message">
                <?php if (get_field('n2')) : ?>
                  <p class="realestate_post_message_head copperplate">STAFF MESSAGE</p>
                  <p class="realestate_post_message_text notosans"><?PHP the_field('n2'); ?></p>
                <?php endif; ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
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
  </main>
</article>


<?php
get_footer();
