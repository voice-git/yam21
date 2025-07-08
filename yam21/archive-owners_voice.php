<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yam21
 */

get_header();
?>


<div class="subpage_main subpage_main_big" style="background-image: url(/common/img/subpage_main/owners_voice.jpg);background-position:center">
  <div class="uk-height-1-1 subpage_main_dark" style="background-color: rgba(0,0,0,0.6);">
  <div class="uk-container uk-height-1-1">
    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
      <div class="subpage_main_content">
  <div class="txt_40 trajan">Owner's Voice</div>
  <div class="txt_18">お客様の声 3分インタビュー</div>
      </div>
      </div>
  </div>
  </div>
</div>

<div class="pankuzu">
  <nav class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="/">HOME</a></li>
      <li><span>お客様の声 3分インタビュー</span></li>
  </ul>
  </nav>
</div>

<article class="uk-container">
<?php query_posts($query_string . '&posts_per_page=-1');?>
  <?php
		if ( have_posts() ) : ?>
  <div class="uk-width-2-3@m uk-margin-auto-left uk-margin-auto-right">
  <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
    <div class="life_styler_box">
      <div>
          <div uk-lightbox="video-autoplay:true;"><a href="https://youtu.be/<?PHP the_field('ls5'); ?>" data-caption="<?php the_title(); ?>" class="txt-inherit uk-display-block movie_link">
        <div class="movie_link_dark">
          <p class="news_link_box_img news_link_box_img_movie" style="background-image: url(<?PHP the_field('ls4'); ?>)"><img src="<?PHP the_field('ls4'); ?>" alt="<?php the_title(); ?>"/></p>
          </div></a></div>
          <p class="serif txt_40 lh100p mt30" align="center">vol.<?PHP the_field('ls2'); ?></p>
        <p align="center" class="lh140p txt_18"><?php the_title(); ?></p>
        
        <p class="txt_10 mw720px uk-margin-auto-left uk-margin-auto-right" align="center"><?PHP the_field('ls3'); ?></p>
        
        
          <?php if (get_field('ls_url')) : ?>
      <p class="txt_10 mw720px uk-margin-auto-left uk-margin-auto-right" align="center"><a href="<?PHP the_field('ls_url'); ?>" target="_blank" class="owners_voice_to_works_link">お客様の施工写真はこちら</a></p>
<?php endif; ?>
        </div>
      </div>
  <?php endwhile; ?>
  </div>
<?php endif; ?>	
</article>


  <?php get_template_part( 'column-section' ); ?>

  <section class="mt100 sp_mt50">
    <div class="uk-container">
  <h2 class="txt100p mb40 sp_mb30" align="center"><span class="trajan txt_24 mr20 sp_mr0">RECOMMENDED !</span><br class="sp_only">
    <span class="ls2px">こちらのブランドもオススメ</span></h2>
      
      <div class="top_link_wrap uk-flex uk-child-width-1-2@s uk-flex-wrap mt60 sp_mt40">
        <a href="/works/" class="txt-fff uk-overflow-hidden top_link_wrap_a uk-flex uk-flex-center uk-flex-middle uk-transition-toggle" style="background-image: url(/common/img/subpage_main/works.jpg)" tabindex="0">
        <div class=" top_link_wrap_a_content">
          <div align="center">
            <div class="txt_36 trajan mb0 lh140p">Works</div>
            <div class="ls2px">ヤマダタッケンの家づくり施工例</div>
            <div class="uk-transition-fade top_link_wrap_more_btn">more</div>
          </div>
            </div>
        </a>
        <a href="/blog/" class="txt-fff uk-overflow-hidden top_link_wrap_a uk-flex uk-flex-center uk-flex-middle uk-transition-toggle" style="background-image: url(/common/img/subpage_main/blog.jpg)" tabindex="0">
        <div class=" top_link_wrap_a_content">
          <div align="center">
            <div class="txt_36 trajan mb0 lh140p">Staff Blog</div>
            <div class="ls2px">ヤマダタッケンのスタッフ紹介</div>
            <div class="uk-transition-fade top_link_wrap_more_btn">more</div>
          </div>
            </div>
        </a>
        <a href="/aboutus/" class="txt-fff uk-overflow-hidden top_link_wrap_a uk-flex uk-flex-center uk-flex-middle uk-transition-toggle" style="background-image: url(/common/img/subpage_main/aboutus.jpg)" tabindex="0">
        <div class=" top_link_wrap_a_content">
          <div align="center">
            <div class="txt_36 trajan mb0 lh140p">About us / Concept</div>
            <div class="ls2px">ヤマダタッケンについて</div>
            <div class="uk-transition-fade top_link_wrap_more_btn">more</div>
          </div>
            </div>
        </a>
        <a href="/column/" class="txt-fff uk-overflow-hidden top_link_wrap_a uk-flex uk-flex-center uk-flex-middle uk-transition-toggle" style="background-image: url(/common/img/subpage_main/column.jpg)" tabindex="0">
        <div class=" top_link_wrap_a_content">
          <div align="center">
            <div class="txt_36 trajan mb0 lh140p">Column</div>
            <div class="ls2px">代表 澤野のダイアリー</div>
            <div class="uk-transition-fade top_link_wrap_more_btn">more</div>
          </div>
            </div>
        </a>
        </div>
    </div>
  </section>

<style>
.movie_link_dark:before {
    opacity: .5;
}
.movie_link_dark:hover::before {
    opacity: .05;
}
.movie_link_dark:after {
    opacity: 1;
    text-shadow: 0 0 20px #000;
}
</style>

<?php
get_footer();
