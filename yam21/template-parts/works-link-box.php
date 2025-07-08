
<?php
$term_sp = get_the_terms( $post->ID, 'works_cat' );
foreach($term_sp as $term_s){
$term_id = $term_s->term_id;
$term_name = $term_s->name;
break;
}
$term_idsp = 'works_cat_'.$term_id;
?>
<div class="post_box">
<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="news_link_box news_link_box_works_custom">
<?php get_template_part( 'template-parts/link_img' ); ?>
<p class="cat_name mb15 mt15">
  <span class="cat_log copperplate">LIFESTYLE LOG  NO.<?php the_field('num'); ?></span>
  <!-- <span style="background: #888;"><?php $terms = get_the_terms($post->ID, 'works_cat2'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span> -->
  <span><?php $terms = get_the_terms($post->ID, 'works_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span>
</p>
<p class="news_title lh140p mb0 mt0"><?php the_title(); ?></p>
<?php /*?>  <p align="center" class="lh140p"><?php the_title(); ?></p>
            <p class="txt_10"><?php echo mb_substr( get_the_excerpt(), 0, 100 ) . '[・・・]'; ?></p><?php */?>
</a>
</div>