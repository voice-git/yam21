<section class="top_realestate_body mt150 sp_mt50">
    <h2 class="txt100p mb40 sp_mb30" align="center"><span class="trajan txt_36">Works</span><br>
      <span class="ls2px">ヤマダタッケンの施工例をご紹介します。</span></h2>
    <div class="uk-container top_realestate_slider_body">
      <div uk-slider="autoplay: true">
        <div  class="uk-position-relative uk-margin-auto uk-width-1-1\@m">
          <div class="uk-slider-container">
            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-4@m uk-grid">
<?php
$args = array(
    'post_type' => 'works',
    'posts_per_page' => 12
        );
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

    <!-- ループの始まり -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <?php get_template_part( 'template-parts/works-link-box2' ); ?>
    <?php endwhile; ?><!-- ループの終わり -->

<?php endif; ?>
                
                
              
            </ul>
          </div>
          
            <a class="uk-position-center-left-out uk-position-small uk-slidenav-large color_green_yam21" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small uk-slidenav-large color_green_yam21" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
      </div>
        <div class="mt30 sp_mt20" align="center">
            <a href="/works/" class="serif top_more_btn2_white_big uk-display-inline-block uk-width-1-2@m">more WORKS</a>
        </div>
    </div>
  </section>