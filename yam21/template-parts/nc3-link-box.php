
<?php
$term_sp = get_the_terms( $post->ID, 'news_cat' ); 
foreach($term_sp as $term_s){
$term_id = $term_s->term_id;
$term_name = $term_s->name;
break;
}
$term_idsp = 'news_cat_'.$term_id;
?>

<div class="cn3_archive__item">
  <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
    <?php get_template_part( 'template-parts/link_img' ); ?>
<!--
    <div class="cn3_archive__item__head">
      <time class="post_content_time copperplate" datetime="<?php echo get_post_time('Y-m-j'); ?>"><?php echo get_post_time('Y.m.d'); ?></time>
    </div>
-->
    <p class="post_content_title ta_left"><?php the_title(); ?></p>
  </a>
</div>