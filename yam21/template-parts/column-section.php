<section class="top_realestate_body mt150 sp_mt50">
    <h2 class="txt100p mb40 sp_mb30" align="center"><span class="trajan txt_36">Column</span><br>
      <span class="ls2px">暮らしにまつわるコラム</span></h2>
    <div class="uk-container top_realestate_slider_body">
      <div uk-slider="autoplay: true">
        <div  class="uk-position-relative uk-margin-auto uk-width-1-1\@m">
          <div class="uk-slider-container">
            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-4@m uk-grid ">
                <?php 
$posts = get_posts(array(
'posts_per_page' => -1, // 表示件数の指定
'post_type' => column
));
if( $posts ): ?>
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>
                <li><a href="<?php the_permalink(); ?>" class="news_link_box"><p class="news_link_box_img news_link_box_img_seihoukei" style="background-image: url(<?PHP the_field('n1'); ?>)"><img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>"/></p>
  <p align="center" class="lh140p"><?php the_title(); ?></p>
          
          <p class="txt_10"><?php
        $text = mb_substr(get_field('n2'),0,100,'utf-8'); 
        echo $text.'[・・・]';
        ?></p></a></li>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>	
            </ul>
          </div>
          
            <a class="uk-position-center-left-out uk-position-small uk-slidenav-large " href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small uk-slidenav-large " href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
      </div>
        <div class="mt30 sp_mt20" align="center">
            <a href="/column/" class="serif top_more_btn2_white_big uk-display-inline-block uk-width-1-2@m">more Column</a>
        </div>
    </div>
  </section>