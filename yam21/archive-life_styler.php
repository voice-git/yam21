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


<div class="subpage_main subpage_main_big" style="background-image: url(/common/img/subpage_main/lifestyler.jpg);background-position:center bottom">
  <div class="uk-height-1-1 subpage_main_dark">
  <div class="uk-container uk-height-1-1">
    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
      <div class="subpage_main_content">
  <div class="txt_40 trajan">Life Styler</div>
  <div class="txt_18">ライフスタイラー</div>
      </div>
      </div>
  </div>
  </div>
</div>

<div class="pankuzu">
  <nav class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="/">HOME</a></li>
      <li><span>LIFE STYLER</span></li>
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
      <div uk-lightbox="video-autoplay:true;"><a href="https://youtu.be/<?PHP the_field('ls5'); ?>" data-caption="<?php the_title(); ?>" class="txt-inherit uk-display-block movie_link">
        <div class="movie_link_dark">
          <p class="news_link_box_img news_link_box_img_movie" style="background-image: url(<?PHP the_field('ls4'); ?>)"><img src="<?PHP the_field('ls4'); ?>" alt="<?php the_title(); ?>"/></p>
          </div></a>
          <p class="serif txt_40 lh100p mt30" align="center">#<?PHP the_field('ls2'); ?></p>
        <p align="center" class="lh140p txt_18"><?php the_title(); ?></p>
        
        <p class="txt_10 mw720px uk-margin-auto-left uk-margin-auto-right"><?PHP the_field('ls3'); ?></p>
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
<?php
get_footer();
