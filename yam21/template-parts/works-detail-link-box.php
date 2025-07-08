
<?php
$term_sp = get_the_terms( $post->ID, 'works_cat' );
foreach($term_sp as $term_s){
$term_id = $term_s->term_id;
$term_name = $term_s->name;
break;
}
$term_idsp = 'works_cat_'.$term_id;
?>
<div class="post_box-detail work-detail__article__other__item">
  <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
    <?php get_template_part( 'template-parts/link_img' ); ?>
    <p class="work-detail__article__other__log">
      <span class="cat_log copperplate">LIFESTYLE LOG  NO.<?php the_field('num'); ?></span>
    </p>
    <p class="work-detail__article__other__title"><?php the_title(); ?></p>
  </a>
</div>