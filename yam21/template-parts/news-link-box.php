
<?php
$term_sp = get_the_terms( $post->ID, 'news_cat' );
foreach($term_sp as $term_s){
$term_id = $term_s->term_id;
$term_name = $term_s->name;
break;
}
$term_idsp = 'news_cat_'.$term_id;
?>

<?php
  // カスタムフィールドから値を取得
$custom_field_value = get_field('n0');

// タクソノミーから値を取得
$taxonomy_term = get_the_terms( get_the_ID(), 'news_cat' );
if ( $taxonomy_term && ! is_wp_error( $taxonomy_term ) ) {
    $taxonomy_term_name = $taxonomy_term[0]->name;
} ?>

<?php
// 条件分岐
if ( $taxonomy_term_name == '内覧会' ) { ?>
  <div class="post_box">
    <div class="post_list">
      <?php get_template_part( 'template-parts/link_img' ); ?>
      <div class="post_content">
        <div class="post_content_head">
          <time class="post_content_time copperplate" datetime="<?php echo get_post_time('Y-m-j'); ?>"><?php the_field('start'); ?></time>
          <time class="post_content_time copperplate" datetime="<?php echo get_post_time('Y-m-j'); ?>"> - <?php the_field('goal'); ?></time>
        </div>
        <p class="post_content_title ta_left"><?php the_title(); ?></p>
        <p class="post_content_text notosans ta_left">
        <?php
          $content = get_the_excerpt();
          $content = str_replace('&nbsp;', '', $content);
          echo $content;
        ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="post_content_link">ご予約はこちら</a>
      </div>
    </div>
  </div>
<?php } else { ?>
  <div class="post_box">
    <a href="<?php the_permalink(); ?>" class="post_list">
      <?php get_template_part( 'template-parts/link_img' ); ?>
      <div class="post_content">
        <div class="post_content_head">
<!--           <time class="post_content_time copperplate" datetime="<?php echo get_post_time('Y-m-j'); ?>"><?php echo get_post_time('Y.m.d'); ?></time> -->
          <p class="post_content_cat"><?php $terms = get_the_terms($post->ID, 'news_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></p>
        </div>
        <p class="post_content_title"><?php the_title(); ?></p>
        <p class="post_content_text notosans">
        <?php
          $content = get_the_excerpt();
          $content = str_replace('&nbsp;', '', $content);
          echo $content;
        ?>
        </p>
        <p class="post_content_link copperplate">READ MORE</p>
      </div>
    </a>
  </div>
<?php } ?>
