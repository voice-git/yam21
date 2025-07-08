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

<div class="sdgs_page_content">
<div class="subpage_main subpage_main_big">
  <div class="uk-height-1-1 subpage_main_dark">
  <div class="uk-container uk-height-1-1">
    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
      <div>
          
          <div uk-grid class="sdgs_main_grid uk-flex-bottom">
              <div>
                  <div class="sdgs_main_illust"><img src="/common/img/sdgs/main_illust.png" alt="イラスト"/></div>
              </div>
          	<div>
          		<div class="sdgs_main_title"><img src="/common/img/sdgs/main_title.png"  alt="ヤマダタッケンの考える“サスティナブルライフ”"/></div>
          		<div class="sdgs_main_txt">ヤマダタッケンの考える“サスティナブルライフ”</div>
          	</div>
          </div>
      </div>
      </div>
  </div>
  </div>
</div>

<div class="pankuzu">
  <nav class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="/">HOME</a></li>
      <li><span>サスティナブルライフ：<?php the_archive_title(); ?></span></li>
  </ul>
  </nav>
</div>

  <div class="rewise_menu_body">
  <?php get_template_part( 'template-parts/sdgs/tab_nav' ); ?>
  </div>

<article class="uk-container">
    <div class="sdgs_page_logo_bg_body"><div class="sdgs_page_logo"><img src="/common/img/sdgs/sdgs_logo.png" alt="SDGs"/></div>
    
    <div uk-grid class="mt50 uk-flex-bottom">
        <div class="uk-width-3-4@l">
            <div class="txt200p txt130sp mb20 uk-text-bold">ヤマダタッケンの考える“サスティナブルライフ”とは！？
</div>
            <div>
            私たちは工務店ですので、住まいを造りお客様に提供する立場です。長年住まいのことを考え抜いて導いた答えがあります。ただ単に“住みやすい”といった機能性は大切にしていることの一つですが、本当の意味での持続可能な“豊かな暮らし”って何なのか考えてきました。経年変化が楽しめる人に優しい自然素材にこだわることはもちろんですが、暮らしを豊かにする、人生を豊かにするライフスタイルをご提案させていただきます。<br>
私たちが賛同し共同で進めているプロジェクトメンバーの方々とお話しし、対談形式でご紹介させていただきます。
            </div>
        </div>
    </div></div>
    
    
    <div class="sdgs_page_cat_title"><div class="sdgs_page_cat_title_top">ARCHIVES</div>
    <div class="sdgs_page_cat_title_bot">すでに達成している活動<br>
継続して取組み、常態化を目指す項目</div></div>
<?php query_posts($query_string . '&posts_per_page=-1&orderby=menu_order&order=ASC');?>
  <?php
		if ( have_posts() ) : ?><div>
  <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
    
    
  <?php get_template_part( 'template-parts/sdgs/single_box' ); ?>
  <?php endwhile; ?></div>
<?php endif; ?>
    
    
    <div class="mt100 sdgs_page_foot_link_width pt50">
        <div uk-grid class="uk-child-width-1-2@s uk-child-width-1-1">
            <div>
                <a href="/sdgs_cat/new_goals" class="sdgs_page_foot_link sdgs_page_foot_link_01">
                    <div class="sdgs_page_foot_link_title">NEW GOALS</div>
                    <div class="sdgs_page_foot_link_txt">これから取組む活動と項目</div>
                    </a>
            </div>
            <div>
                <a href="/sdgs_cat/archives" class="sdgs_page_foot_link sdgs_page_foot_link_02 sdgs_page_foot_link_current">
                    <div class="sdgs_page_foot_link_title">ARCHIVES</div>
                    <div class="sdgs_page_foot_link_txt">すでに達成している活動<br>継続して取組み、常態化を目指す項目</div>
                    </a>
            </div>
        </div>
    </div>
    
    <div align="center" class="sdgs_page_foot_link_bnr_body"><a href="/satoyama" class="mouseover"><img src="/common/img/sdgs/bnr_satoyama.jpg" alt="リンクバナー" width="600"></a></div>
</article>


</div>

<?php
get_footer();