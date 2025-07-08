<div class="post_box">
  <a href="<?php the_permalink(); ?>" class="news_link_box">
    <?php if (get_field('n1')) : ?>
      <p class="news_link_box_img" style="background-image: url(<?PHP the_field('n1'); ?>)"><img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>" /></p>
    <?php else : ?>
      <p class="news_link_box_img news_link_box_img_none">
        <img src="/common/img/header/logo.svg" alt="ヤマダタッケン" width="216">
      </p>
    <?php endif; ?>
    <p class="blog_box_cat">WRITER <?php $terms = get_the_terms($post->ID, 'blog_staff');
      foreach ($terms as $term) {
        $term_name = $term->name;
        echo $term_name;
        break;
      }; ?>
    </p>
    <p class="blog_box_title"><?php the_title(); ?></p>
  </a>
  <p class="blog_box_time copperplate"><?php the_time('Y.m.d'); ?></p>
</div>