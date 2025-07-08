<div class="post_box">
  <a href="<?php the_permalink(); ?>" class="news_link_box">
    <?php if( has_post_thumbnail() ): ?>
      <p class="news_link_box_img">
      <?php the_post_thumbnail('full'); ?>
      </p>
    <?php else: ?>
    <p class="news_link_box_img news_link_box_img_none">
      <img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/logo.jpg" alt="ヤマダタッケン" width="216">
    </p>
    <?php endif; ?>
    <span class="days_box_cat copperplate"><?php
	$terms = get_the_terms($post->ID, 'days_cat');
	if ($terms && !is_wp_error($terms)){
		foreach($terms as $term){
			$term_name = $term->name;
			echo $term_name;
			break;
		}
	} ?></span>
    <p class="days_box_title"><?php the_title(); ?></p>
    <p class="days_box_time copperplate"><?php the_time( 'Y.m.d' ); ?></p>
  </a>

</div>