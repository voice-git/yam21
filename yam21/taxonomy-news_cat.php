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


<div class="subpage_main subpage_main_big" style="background-image: url(/common/img/subpage_main/news.jpg)">
  <div class="uk-height-1-1 subpage_main_dark">
  <div class="uk-container uk-height-1-1">
    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
      <div class="subpage_main_content">
  <div class="txt_40 trajan">News/Event</div>
  <div class="txt_18">ヤマダタッケンの最新情報をお届け</div>
      </div>
      </div>
  </div>
  </div>
</div>

<div class="pankuzu">
  <nav class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="/">HOME</a></li>
      <li><a href="/news/">NEWS</a></li>
      <li><span><?php the_archive_title(); ?></span></li>
  </ul>
  </nav>
</div>

      <?php
	$arr = array(    'parent' => 0,);
$taxonomy_name = 'news_cat'; //表示したいtaxonomynameを設定
$taxonomys = get_terms($taxonomy_name, $arr);
if(!is_wp_error($taxonomys) && count($taxonomys)):
    foreach($taxonomys as $taxonomy):
?>
<style>
    body.term-<?php echo esc_html($taxonomy->slug); ?> .option-<?php echo esc_html($taxonomy->slug); ?>{background: #E7EFDF !important; }
</style>
      <?php
    endforeach;
endif;
?>

<article class="uk-container">   
<div class="mb50" align="right">
  <form name="sort_form">
    カテゴリ：
      <select name="sort" onchange="dropsort()" class="uk-select uk-form-width-medium">
      <option value=""> --- 選択してください --- </option>
      <?php
	$arr = array(    'parent' => 0,);
$taxonomy_name = 'news_cat'; //表示したいtaxonomynameを設定
$taxonomys = get_terms($taxonomy_name, $arr);
if(!is_wp_error($taxonomys) && count($taxonomys)):
    foreach($taxonomys as $taxonomy):
?>
        
      <option value="/news_cat/<?php echo esc_html($taxonomy->slug); ?>/" class="option-<?php echo esc_html($taxonomy->slug); ?>"><?php echo esc_html($taxonomy->name); ?></option>
      <?php
    endforeach;
endif;
?>
      
      </select>
  </form>
  <script>function dropsort() {
    var browser = document.sort_form.sort.value;
    location.href = browser
}</script>
</div>
    
  <?php
		if ( have_posts() ) : ?>
  <div uk-grid class="uk-child-width-1-2@s uk-child-width-1-3@l blog_archive_infinite_grid">
    <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'template-parts/news-link-box' ); ?>
    
    <?php endwhile; ?>
  </div>
    
    <span class="next_posts_link">
    <?php next_posts_link(); ?>
    </span>
    
<?php
    global $paged;
    if( empty( $paged ) ) $paged = 1;

    global $wp_query;
    $pages = $wp_query -> max_num_pages;
    if( !$pages ) {
        $pages = 1;
    }
    // 1ページしかない or 最後のページでは出力しない条件分岐をさせる
    if( $pages != 1 && $paged < $pages ) {
 ?>
    <div align="center" class="txt-888 mt60">
  <button class="view-more-button" type="button">もっと見る</button>
  <div class="page-load-status" style="display:none;">
    <div class="infinite-scroll-request">LOADING...</div>
    <p class="infinite-scroll-last">これ以上は記事がありません</p>
    <p class="infinite-scroll-error">読み込むページがありません</p>
  </div>
    </div>

<?php } // 閉じるのを忘れずに！
 ?>
    

    	
    <?php endif; ?>	
</article>

<!--Infinite Scroll-->
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>
var infScroll = new InfiniteScroll( '.blog_archive_infinite_grid', { // 記事を追加するブロックのclassを指定
    append: '.post_box',             // 記事ブロックを指定
    path: '.next_posts_link a',  // 次のページリンクを指定
    hideNav: '.next_posts_link', // 次のページリンクを非表示にする
    button: '.view-more-button', // 次のページの記事ブロックを読み込むボタンを指定
    scrollThreshold: false,      // スクロールで自動的に読み込まれる動作を解除
    status: '.page-load-status', // ステータスのブロックを指定
    history: 'false'             // ブラウザのアドレスを変更しない
});
</script>

<?php
get_footer();
