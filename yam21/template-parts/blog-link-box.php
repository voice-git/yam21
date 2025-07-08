<div class="post_box">
  <a href="<?php the_permalink(); ?>" class="news_link_box">
    <?php if (get_field('n1')) : ?>
      <p class="news_link_box_img" style="background-image: url(<?PHP the_field('n1'); ?>);background-position: center center;background-size: cover;"><img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>" /></p>
    <?php else : ?>
      <p class="news_link_box_img news_link_box_img_none">
        <img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/common/logo.jpg" alt="ヤマダタッケン" width="216">
      </p>
    <?php endif; ?>
    <?php $terms = get_the_terms($post->ID, 'blog_staff');
	if ($terms && !is_wp_error($terms)){
		foreach ($terms as $term){
			$term_name = $term->name;
			echo '<p class="blog_box_cat">WRITER ' . $term_name . '</p>';
			break;
		}
	}else{
		echo '<p class="blog_box_cat"></p>';
	} ?>
    <p class="blog_box_title"><?php the_title(); ?></p>
    <p class="blog_box_time copperplate"><?php the_time('Y.m.d'); ?></p>
  </a>
</div>