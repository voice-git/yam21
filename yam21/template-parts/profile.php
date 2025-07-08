<?php
  $term_sp = get_the_terms( $post->ID, 'blog_staff' );
  if (!empty($term_sp) && !is_wp_error($term_sp)) {
  foreach($term_sp as $term_s){
  $term_id = $term_s->term_id;
  $term_name = $term_s->name;
  break;
  }
  $term_idsp = 'blog_staff_'.$term_id;
  
?>


<div class="profile">
  <div class="profile__box_sp">
    <div class="profile__box">

      <div class="profile__img">
        <img src="<?php the_field('staff1',$term_idsp); ?>" alt="" width="267"/>
      </div>
      <div class="profile__content">

        <p class="profile__content__job notosans">
          <?php the_field('staff2',$term_idsp); ?> <?php the_field('staff4',$term_idsp); ?>
        </p>
        <p class="profile__content__name">
          <span class="profile__content__name__ja"><?php echo $term_name; ?></span>
          <span class="profile__content__name__en"><?php the_field('staff5',$term_idsp); ?></span>
        </p>
        <p class="profile__content__text notosans"><?php the_field('staff3',$term_idsp); ?></p>
      </div>
    </div>
    <p class="profile__content__text_sp notosans"><?php the_field('staff3',$term_idsp); ?></p>
  </div>
</div>

<?php } ?>