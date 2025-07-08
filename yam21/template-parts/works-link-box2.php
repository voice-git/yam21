
                <?php
$term_sp = get_the_terms( $post->ID, 'works_cat' ); 
foreach($term_sp as $term_s){
$term_id = $term_s->term_id;
$term_name = $term_s->name;
break;
}
$term_idsp = 'works_cat_'.$term_id; 
?>
          <li>
            <a href="<?php the_permalink(); ?>" class="news_link_box">
            <?php get_template_part( 'template-parts/link_img' ); ?>
            <p class="cat_name"><span style="background: #888;"><?php $terms = get_the_terms($post->ID, 'works_cat2'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span><span style="background-color:<?php the_field('nc1',$term_idsp); ?>;"><?php $terms = get_the_terms($post->ID, 'works_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span></p>
            <p align="center" class="lh140p mw300_title"><?php the_title(); ?></p>
            <p class="txt_10"><?php echo mb_substr( get_the_excerpt(), 0, 100 ) . '[・・・]'; ?></p>
              </a>
          </li>