<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package yam21
 */

get_header();
?>

<?php
get_header();
?>

<div class="subpage_main subpage_main_small">
  <div class="uk-height-1-1 subpage_main_dark">
  <div class="uk-container uk-height-1-1">
    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
      <div class="subpage_main_content">
  <div class="txt_30">サイト内検索</div>
      </div>
      </div>
  </div>
  </div>
</div>

<div class="pankuzu">
  <nav class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="/">HOME</a></li>
      <li><a href="/search">サイト内検索</a></li>
      <li><span>『<?php the_search_query(); ?>』の検索結果</span></li>
  </ul>
  </nav>
</div>

<article class="mw940px uk-margin-auto-left uk-margin-auto-right">
  <div class="uk-container">
  <section>
    <h1 class="news_title mb0">『<?php the_search_query(); ?>』の検索結果"<?php echo $wp_query->found_posts; ?>件"
</h1>
      <!-- 投稿情報 loop -->
<?php if(have_posts()) : ?>
<div>
  <?php while(have_posts()):the_post() ?> 
  <section class="result_box">
    <a href="<?php the_permalink(); ?>">
      <div class="result_box_post_type">
        <?php echo esc_html(get_post_type_object(get_post_type())->label); ?>
        </div>
      <h2><?php the_title(); ?></h2>
      <div class=""> 
        <?php echo mb_substr( get_the_excerpt(), 0, 100 ) . '[・・・]'; ?>
        </div></a>
  </section>
  <?php endwhile; ?>
</div>
      
     <?php the_posts_pagination(); ?>
      
<?php else: ?>
    <div align="center">
        <p class="txt150p mt40">申し訳ございません。<br />該当する記事がございません。</p>
    </div>
<?php endif; ?>
  </section>
    
    <section class="mt150">
      <?php get_search_form(); ?>
    </section>
  </div>
</article>

<?php
get_footer();
