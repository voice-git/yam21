<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yam21
 */

get_header();
?>


   <div uk-slideshow="animation: fade;autoplay: false;ratio: 16:9;" class="sp_none">
    <div class="uk-position-relative">
  <ul class="uk-slideshow-items uk-child-width-1-1">
      <?php 
$posts = get_posts(array(
'posts_per_page' => -1, // 表示件数の指定
'post_type' => 'top_slide'
));
if( $posts ): ?>
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>
        <li>
          <?php if( get_field('ts2') ): ?>
            <a href="<?PHP the_field('ts2'); ?>" style="display: block; width: 100%; height: 100%; cursor: pointer;" class="mouseover">
          <?php else: ?>
            <a  style="display: block; width: 100%; height: 100% ; cursor: default;" class="">
          <?php endif; ?>
          <?php if( get_field('ts1') ): ?>
            <img src="<?PHP the_field('ts1'); ?>" alt="トップページスライド" uk-cover/>
          <?php else: ?>
                <div style="position:relative; width: 100%;
                             height: 100%;">
<iframe src="https://player.vimeo.com/video/<?PHP the_field('ts3'); ?>?
background=1&amp;
title=0&amp;
byline=0&amp;
portrait=0&amp;
autoplay=1;
muted=1;
autopause=0" style="position:absolute;top:0;
left:0;
width:100%;
height:100%;
" frameborder="0" allow="autoplay;
fullscreen" allowfullscreen="">
</iframe>
</div>
          <?php endif; ?></a>
      </li>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>	
  </ul>
<script src="https://player.vimeo.com/api/player.js"></script>
  <div class="uk-container uk-position-absolute uk-position-top uk-position-left uk-eidth-width-1-1 uk-height-1-1 pointer_events_none top_main_yajirusi_body">
      <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover txt-fff pointer_events_auto" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
      <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover txt-fff pointer_events_auto" href="#" uk-slidenav-next uk-slideshow-item="next"></a></div>
                </div>
                
    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>  
    </div>
   <div uk-slideshow="animation: fade;autoplay: false;ratio: 800:675;" class="sp_only">
    <div class="uk-position-relative">
  <ul class="uk-slideshow-items uk-child-width-1-1">
      <?php 
$posts = get_posts(array(
'posts_per_page' => -1, // 表示件数の指定
'post_type' => 'top_slide'
));
if( $posts ): ?>
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>		
        <li>
          <?php if( get_field('ts2') ): ?>
            <a href="<?PHP the_field('ts2'); ?>" style="display: block; width: 100%; height: 100%;" class="mouseover">
          <?php else: ?>
            <a  style="display: block; width: 100%; height: 100% ; " class="">
          <?php endif; ?>
          <?php if( get_field('ts1') ): ?>
            <img src="<?PHP the_field('ts1'); ?>" alt="トップページスライド" uk-cover/>
          <?php else: ?>
                
                <div style="position:relative; width: 100%;
                             height: 100%;" class="top_movie_sp_body">
<iframe src="https://player.vimeo.com/video/<?PHP the_field('ts3'); ?>?
background=1&amp;
title=0&amp;
byline=0&amp;
portrait=0&amp;
autoplay=1;
muted=1;
autopause=0" style="position:absolute;top:0;
left:0;
width:100%;
height:100%;
" frameborder="0" allow="autoplay;
fullscreen" allowfullscreen="">
</iframe>
</div>
          <?php endif; ?></a>
      </li>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>	
  </ul>
  <div class="uk-container uk-position-absolute uk-position-top uk-position-left uk-eidth-width-1-1 uk-height-1-1 pointer_events_none top_main_yajirusi_body">
      <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover txt-fff pointer_events_auto" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
      <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover txt-fff pointer_events_auto" href="#" uk-slidenav-next uk-slideshow-item="next"></a></div>
                </div>
                
    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>  
    </div>
    



    
<article class="uk-container mt50">
<div align="center">
        <p class="txt_18 mincho">CONCEPT</p>
        <p class="txt_30 trajan">Not House but Home.</p>
        <p class="txt_18 mincho">House ではなく Home.</p>
      </div>
    
      <div uk-grid class="mt50">
        <div class="uk-width-2-3@m">
          <p>貴方なら、どんなHomeを創造しますか？<br>
            住まいに大切なことは、工法や構造だけでしょうか？<br>
            いえ違います。空間デザインがとても重要です。素材がもつ温もりやアイデアにあふれた遊び心。そして家族を癒してくる居心地。そんな住まいは、心にゆとりが生まれ豊かな気持ちにさせてくれます。ただ住むだけの家( House ) ではなく、日々の暮らしを愉しむ住まい。<br>
            それが、本当に素晴らしい家『 Home 』と言えます。<br>
          皆様にグレートホームズの家が考える『 Home 』について、お伝えさせていただきます。</p>
        </div>
        <div class="uk-width-1-3@m">
          <div class="t_align_center_sp"><img src="/common/img/top/illust_house.svg" alt="Not House but Home" class="toppage_house_illust"></div>
        </div>
      </div>
        
      
  <div class="mt100 mb100 sp_mt80" uk-scrollspy="cls:uk-animation-slide-bottom-small; delay: 200">
    	<div uk-grid class="uk-child-width-1-2@s">
    		<div><a href="https://www.yam21.com/renovation/" target="_blank" class="toppage_green_link toppage_green_link_01">
    				<div class="toppage_green_link_txt_01">【リノベをご検討の方】</div>
    				<div class="toppage_green_link_txt_02">RENOVATION</div>
    				<div class="toppage_green_link_txt_03">ヤマダタッケンのリノベーションサイト</div>
    			</a></div>
    		<div><a href="/real_estate/?_sft_real_estate_cat=rec2" class="toppage_green_link toppage_green_link_02">
    				<div class="toppage_green_link_txt_01">【建売をご検討の方】</div>
    				<div class="toppage_green_link_txt_02">FOR SALE</div>
    				<div class="toppage_green_link_txt_03">ヤマダタッケンの建売分譲住宅</div>
    			</a></div>
    	</div>
    </div>
    
  <section class="mt100 mb100 sp_mt80">
    <h2 class="txt100p mb60 sp_mb40" align="center" uk-scrollspy="cls:uk-animation-fade; delay: 200"><span class="trajan txt_36">News/Event</span><br>
      <span class="ls2px">ヤマダタッケンの最新情報をお届け</span></h2>
    
    <div uk-grid class="uk-flex-center" uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 200">
      <div class="uk-width-2-3@m">
        <div uk-grid uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 250">
                  <?php 
$posts = get_posts(array(
'posts_per_page' => 4, // 表示件数の指定
'post_type' => 'news',
    'meta_key'=>'n_top',/*カスタムフィールドのフィールド名*/
    'meta_value'=>true/*カスタムフィールドの値*/
));
if( $posts ): ?>
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>		
<?php
$term_sp = get_the_terms( $post->ID, 'news_cat' ); 
foreach($term_sp as $term_s){
$term_id = $term_s->term_id;
$term_name = $term_s->name;
break;
}
$term_idsp = 'news_cat_'.$term_id; 
?>
            
          <div class="uk-width-1-2">
            <a href="<?php the_permalink(); ?>" class="news_link_box">
            <?php get_template_part( 'template-parts/link_img' ); ?>
            <p class="cat_name"><span style="background-color:<?php the_field('nc1',$term_idsp); ?>;"><?php $terms = get_the_terms($post->ID, 'news_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span></p>
            <p align="center" class="lh140p"><?php the_title(); ?></p>
              </a>
          </div>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>	
          <div class="uk-width-1-1">
            <p><a href="/news/" class="common_link_btn">more NEWS</a></p>
          </div>
        </div>
      </div>
      <div class="uk-width-5-6 uk-width-1-3@m sp_mt50">
        <div class="top_gray_box">
            <div uk-slider="autoplay: true">
    <ul class="uk-slider-items uk-child-width-1-1 uk-grid">
        <li class="top_column_li">
          <p align="center" class="lh140p mw300_title"><span class="trajan txt_26">Blog</span><br>
          <span class="txt_12 ls2px">代表 澤野のブログ</span></p>
            <?php 
$posts = get_posts(array(
'posts_per_page' => 1, // 表示件数の指定
'post_type' => 'column',
    'meta_key'=>'n_top',/*カスタムフィールドのフィールド名*/
    'meta_value'=>true/*カスタムフィールドの値*/
));
if( $posts ): ?>
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>
            <a href="<?php the_permalink(); ?>" class="news_link_box">
            <?php get_template_part( 'template-parts/link_img' ); ?>
  <p align="center" class="lh140p"><?php the_title(); ?></p>
          
          <?php if( get_field('n2') ): ?>
            <p class="txt_10"><?php
        $text = mb_substr(get_field('n2'),0,100,'utf-8'); 
        echo $text.'[・・・]';
        ?></p>
          <?php else: ?>
            <p class="txt_10"><?php echo mb_substr( get_the_excerpt(), 0, 100 ) . '[・・・]'; ?></p>
          <?php endif; ?>
            </a>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>	
            <p class="mb0"><a href="/column/" class="common_link_btn_white top_column_slide_link_btn">more BLOG</a></p>
        </li>
        <li class="top_column_li">
          <p align="center" class="lh140p mw300_title"><span class="trajan txt_26">Blog</span><br>
          <span class="txt_12 ls2px">スタッフブログ</span></p>
            <?php 
$posts = get_posts(array(
'posts_per_page' => 1, // 表示件数の指定
'post_type' => 'blog',
    'meta_key'=>'n_top',/*カスタムフィールドのフィールド名*/
    'meta_value'=>true/*カスタムフィールドの値*/
));
if( $posts ): ?>
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>
            <a href="<?php the_permalink(); ?>" class="news_link_box">
            <?php get_template_part( 'template-parts/link_img' ); ?>
          
          <?php if( get_field('n2') ): ?>
            <p class="txt_10"><?php
        $text = mb_substr(get_field('n2'),0,100,'utf-8'); 
        echo $text.'[・・・]';
        ?></p>
          <?php else: ?>
            <p class="txt_10"><?php echo mb_substr( get_the_excerpt(), 0, 100 ) . '[・・・]'; ?></p>
          <?php endif; ?>
            </a>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>	
            <p class="mb0"><a href="/blog/" class="common_link_btn_white top_column_slide_link_btn">more BLOG</a></p>
        </li>
    </ul>
                
    <ul class="uk-slider-nav uk-dotnav center uk-flex-center top_column_slide_dot"></ul>
</div>
          
      </div>
      </div>
  </div>
  </section>
    
    <!---->
    
    <section class="mb100 sp_mb50">
    <h2 class="txt100p mb60 sp_mb40" align="center" uk-scrollspy="cls:uk-animation-fade; delay: 200"><span class="trajan txt_36">Works</span><br>
      <span class="ls2px">ヤマダタッケンがつくるHOME</span></h2>
		<div uk-scrollspy="cls:uk-animation-fade; delay: 200"><div class="mb40 xs_only">
        <div class="uk-position-relative works_slider_body">
            <div uk-slider="autoplay: true">
            <div class="works_slider_width">
                <ul class="uk-slider-items uk-child-width-1-1 uk-grid">
                <?php
                $posts = get_posts( array(
                  'posts_per_page' => 4, // 表示件数の指定
                  'post_type' => 'works',
                  'meta_key' => 'n_top', /*カスタムフィールドのフィールド名*/
                  'meta_value' => true /*カスタムフィールドの値*/
                ) );
                if ( $posts ): ?>
                <?php
                foreach ( $posts as $post ):
                  setup_postdata( $post )
                ?>
                <?php
                $term_sp = get_the_terms( $post->ID, 'works_cat' );
                foreach ( $term_sp as $term_s ) {
                  $term_id = $term_s->term_id;
                  $term_name = $term_s->name;
                  break;
                }
                $term_idsp = 'works_cat_' . $term_id;
                ?>
                <li class="uk-width-1-1"> <a href="<?php the_permalink(); ?>" class="news_link_box">
                  <?php get_template_part( 'template-parts/link_img' ); ?>
                  <p class="cat_name"><span style="background: #888;">
                    <?php $terms = get_the_terms($post->ID, 'works_cat2'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?>
                    </span><span style="background-color:<?php the_field('nc1',$term_idsp); ?>;">
                    <?php $terms = get_the_terms($post->ID, 'works_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?>
                    </span></p>
                  <p align="center" class="lh140p">
                  <?php the_title(); ?>
                </p>
                  </a> </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </ul>
              </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a> <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            <ul class="uk-slider-nav uk-dotnav center uk-flex-center mt15">
              </ul>
          </div>
          </div>
            <p class="mt30 mb100"><a href="/works/" class="common_link_btn">more WORKS</a></p>
      </div></div>
      
    <div class="xs_none"><div uk-grid class="uk-flex-center" uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 500">
      <div class="uk-width-2-3@m">
        <div uk-grid  uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 250">
                  <?php 
$posts = get_posts(array(
'posts_per_page' => 4, // 表示件数の指定
'post_type' => 'works',
    'meta_key'=>'n_top',/*カスタムフィールドのフィールド名*/
    'meta_value'=>true/*カスタムフィールドの値*/
));
if( $posts ): ?>
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>		
<?php
$term_sp = get_the_terms( $post->ID, 'works_cat' ); 
foreach($term_sp as $term_s){
$term_id = $term_s->term_id;
$term_name = $term_s->name;
break;
}
$term_idsp = 'works_cat_'.$term_id; 
?>
            
          <div class="uk-width-1-2">
            <a href="<?php the_permalink(); ?>" class="news_link_box">
            <?php get_template_part( 'template-parts/link_img' ); ?>
            <p class="cat_name"><span style="background: #888;"><?php $terms = get_the_terms($post->ID, 'works_cat2'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span><span style="background-color:<?php the_field('nc1',$term_idsp); ?>;"><?php $terms = get_the_terms($post->ID, 'works_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span></p>
            <p align="center" class="lh140p"><?php the_title(); ?></p>
              </a>
          </div>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>	
          <div class="uk-width-1-1">
            <p><a href="/works/" class="common_link_btn">more WORKS</a></p>
          </div>
        </div>
      </div>
      <div class="uk-width-5-6 uk-width-1-3@m sp_mt50">
        <div class="top_gray_box top_lifestyler_slide_dody">
          <p align="center" class="lh140p mw300_title"><span class="trajan txt_26">Life Styler</span><br>
          <span class="txt_12 ls2px">ライフスタイラー</span></p>
            <div uk-slider="autoplay: false">
    <ul class="uk-slider-items uk-child-width-1-1 uk-grid">
        <?php 
$posts = get_posts(array(
'posts_per_page' => 4, // 表示件数の指定
'post_type' => 'life_styler',
    'meta_key'=>'n_top',/*カスタムフィールドのフィールド名*/
    'meta_value'=>true/*カスタムフィールドの値*/
));
if( $posts ): ?>
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>		       
        
        <li class="top_column_li">
          <div uk-lightbox="video-autoplay:true;">
              
              <div class="movie-wrap">
<iframe width="100%"  src="https://www.youtube.com/embed/<?PHP the_field('ls5'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
              <p align="center" class="lh140p"><?php the_title(); ?></p>
              
              <p class="txt_10"><?PHP the_field('ls3'); ?></p>
              </div>
        </li>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>	
        
        
    </ul>
            <p class="mb0"><a href="/life_styler/" class="common_link_btn_white top_column_slide_link_btn">more LIFE STYLER</a></p>
                
    <ul class="uk-slider-nav uk-dotnav center uk-flex-center top_column_slide_dot"></ul>
</div>
          
      </div>
      </div>
  </div></div>
  </section>
    
    <!---->
    
    <div class="top_link_wrap uk-flex uk-child-width-1-2@s uk-flex-wrap mt60 sp_mt40">
        <a href="/howtomake/" class="txt-fff uk-overflow-hidden top_link_wrap_a uk-flex uk-flex-center uk-flex-middle uk-transition-toggle" style="background-image: url(/common/img/top/link_pic_howto.jpg)" tabindex="0">
        <div class=" top_link_wrap_a_content">
          <div align="center">
      <div class="txt_30 trajan mb0">How to make</div>
      <div class="ls2px">ヤマダタッケンの家づくり</div>
      <div class="uk-transition-fade top_link_wrap_more_btn">more</div>
          </div>
            </div>
        </a>
        <a href="/aboutus/" class="txt-fff uk-overflow-hidden top_link_wrap_a uk-flex uk-flex-center uk-flex-middle uk-transition-toggle" style="background-image: url(/common/img/top/link_pic_about.jpg)" tabindex="0">
        <div class=" top_link_wrap_a_content">
          <div align="center">
      <div class="txt_30 trajan mb0">About us/Concept</div>
      <div class="ls2px">ヤマダタッケンについて</div>
      <div class="uk-transition-fade top_link_wrap_more_btn">more</div>
          </div>
            </div>
        </a>
        <a href="/owners_voice/" class="txt-fff uk-overflow-hidden top_link_wrap_a uk-flex uk-flex-center uk-flex-middle uk-transition-toggle uk-width-1-2@s uk-width-1-3@m" style="background-image: url(/common/img/top/link_pic_o_voice.jpg)" tabindex="0">
        <div class=" top_link_wrap_a_content">
          <div align="center">
      <div class="txt_30 trajan mb0">Owner's Voice</div>
      <div class="ls2px">お客様の声 3分インタビュー</div>
      <div class="uk-transition-fade top_link_wrap_more_btn">more</div>
          </div>
            </div>
        </a>
        <a href="/en_page" class="txt-fff uk-overflow-hidden top_link_wrap_a uk-flex uk-flex-center uk-flex-middle uk-transition-toggle uk-width-1-2@s uk-width-1-3@m" style="background-image: url(/common/img/top/link_pic_en.jpg)" tabindex="0">
        <div class=" top_link_wrap_a_content">
          <div align="center">
      <div class="txt_30 trajan mb0">English pages</div>
      <div class="ls2px">海外のお客様もサポートします</div>
      <div class="uk-transition-fade top_link_wrap_more_btn">more</div>
          </div>
            </div>
        </a>
        <a href="/sdgs_cat/new_goals" class="txt-fff uk-overflow-hidden top_link_wrap_a uk-flex uk-flex-center uk-flex-middle uk-transition-toggle uk-width-1-2@s uk-width-1-3@m" style="background-image: url(/common/img/top/link_pic_sdgs.jpg)" tabindex="0">
        <div class=" top_link_wrap_a_content">
          <div align="center">
      <div class="txt_30 trajan mb0">SDGs</div>
      <div class="ls2px">サスティナブルライフ</div>
      <div class="uk-transition-fade top_link_wrap_more_btn">more</div>
          </div>
            </div>
        </a>
      </div>
    
    <!---->
    
    <section class="mb100 sp_mb50 mt100 sp_mt50">
    <h2 class="txt100p mb60 sp_mb40" align="center" uk-scrollspy="cls:uk-animation-fade; delay: 200"><span class="trajan txt_36">Model Home</span><br>
      <span class="ls2px">ヤマダタッケンのモデルホームに行こう！</span></h2>
		
		<div uk-scrollspy="cls:uk-animation-fade; delay: 200"><div class="mb40 xs_only">
        <div class="uk-position-relative works_slider_body">
            <div uk-slider="autoplay: true">
            <div class="works_slider_width">
                <ul class="uk-slider-items uk-child-width-1-1 uk-grid">
        <?php 
  $posts = get_posts(array(
  'posts_per_page' => -1, // 表示件数の指定
  'post_type' => "model_home"
  ));
  if( $posts ): ?>
                <?php
                foreach ( $posts as $post ):
                  setup_postdata( $post )
                ?>
                <li class="uk-width-1-1">
      <div class="">
          <div align="center" class="toppage_slider_logo_img_box">
			  <div class="toppage_slider_logo_img_box_item_01">
			  	<img src="<?PHP the_field('tl1'); ?>" alt="ロゴ"/>
			  </div>
			  <div class="toppage_slider_logo_img_box_item_02">
			  	<img src="<?PHP the_field('tl2'); ?>" alt="イメージ"/>
			  </div>
		  </div>
          <p align="center" class="txt_16"><?php the_title(); ?><br>
<span class="txt_10"><?PHP the_field('mh_address'); ?></span></p>
          <p align="center" class="serif"><a href="<?php the_permalink(); ?>" class="top_more_btn">more</a></p>
        </div></li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </ul>
              </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a> <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            <ul class="uk-slider-nav uk-dotnav center uk-flex-center mt15">
              </ul>
          </div>
          </div>
            <p class="mt30 mb100"><a href="/model_home" class="common_link_btn">more <span class="trajan">Model Home</span></a></p>
      </div></div>
      
      
    <div class="xs_none"><div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 200">
        
        <?php 
  $posts = get_posts(array(
  'posts_per_page' => -1, // 表示件数の指定
  'post_type' => 'model_home'
  ));
  if( $posts ): ?>
  <?php foreach( $posts as $post ): 
  setup_postdata( $post )
  ?>		
      <div class="">
          <p align="center" class="mb0"><img src="<?PHP the_field('tl1'); ?>" alt="ロゴ"/><br>
<img src="<?PHP the_field('tl2'); ?>" alt="イメージ"/></p>
          <p align="center" class="txt_16"><?php the_title(); ?><br>
<span class="txt_10"><?PHP the_field('mh_address'); ?></span></p>
          <p align="center" class="serif"><a href="<?php the_permalink(); ?>" class="top_more_btn">more</a></p>
        </div>
  <?php endforeach; ?>	
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
        
        
      </div></div>
    </section>
    
    <!---->
    
    
  <section class="mb100 sp_mb50">
    <h2 class="txt100p mb60 sp_mb40" align="center" uk-scrollspy="cls:uk-animation-fade; delay: 200"><span class="trajan txt_36">Line Up</span><br>
      <span class="ls2px">私らしい暮らしを実現するブランド</span></h2>
      
      
    <section>
  <h3 class="title_1" uk-scrollspy="cls:uk-animation-fade; delay: 300"><strong class="trajan">New build</strong><span>新築</span></h3>
    <div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 200">
          <?php 
  $posts = get_posts(array(
  'posts_per_page' => -1, // 表示件数の指定
  'post_type' => 'top_lineup', // 
      'tax_query' => array(
      array(
          'taxonomy' => 'lineup_cat', // カスタム分類 
          'field' => 'slug',
          'terms' => 'lineup_cat1', // ターム  で絞り込む
          )
      )
  ));
  if( $posts ): ?>
  <?php foreach( $posts as $post ): 
  setup_postdata( $post )
  ?>		
      <div class="">
          <p align="center" class="mb0"><img src="<?PHP the_field('tl1'); ?>" alt="<?php the_title(); ?> ロゴ"/><br>
<img src="<?PHP the_field('tl2'); ?>" alt="<?php the_title(); ?> イメージ"/></p>
          <p class="txt_10 mt10"><?PHP the_field('tl3'); ?></p>
      <?php if (get_field('tl4')) : ?>
          <p align="center" class="serif"><a href="<?PHP the_field('tl4'); ?>" class="top_more_btn">more</a></p>
  <?php endif; ?>
        </div>
  <?php endforeach; ?>	
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
      </div>
    </section>
      
      <!---->
      
      <section class="mt100 sp_mt50">
  <h3 class="title_1" uk-scrollspy="cls:uk-animation-fade; delay: 200"><strong class="trajan">Renovation</strong><span>リノベーション</span></h3>
    <div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 200">
          <?php 
  $posts = get_posts(array(
  'posts_per_page' => -1, // 表示件数の指定
  'post_type' => 'top_lineup', // 
      'tax_query' => array(
      array(
          'taxonomy' => 'lineup_cat', // カスタム分類 
          'field' => 'slug',
          'terms' => 'lineup_cat2', // ターム  で絞り込む
          )
      )
  ));
  if( $posts ): ?>
  <?php foreach( $posts as $post ): 
  setup_postdata( $post )
  ?>		
      <div class="">
          <p align="center" class="mb0"><img src="<?PHP the_field('tl1'); ?>" alt="<?php the_title(); ?> ロゴ"/><br>
<img src="<?PHP the_field('tl2'); ?>" alt="<?php the_title(); ?> イメージ"/></p>
          <p class="txt_10 mt10"><?PHP the_field('tl3'); ?></p>
      <?php if (get_field('tl4')) : ?>
          <p align="center" class="serif"><a href="<?PHP the_field('tl4'); ?>" class="top_more_btn">more</a></p>
  <?php endif; ?>
        </div>
  <?php endforeach; ?>	
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
        </div>
      </section>
      
      <!---->
  </section>
    
    <!---->
  </article>
    
    
<?php 
$posts = get_posts(array(
'posts_per_page' => -1, // 表示件数の指定
'post_type' => 'real_estate',
    'meta_key'=>'n_top',/*カスタムフィールドのフィールド名*/
    'meta_value'=>true/*カスタムフィールドの値*/
));
if( $posts ): ?>
  <section class="top_realestate_body" uk-scrollspy="cls:uk-animation-slide-bottom-small; delay: 200">
    <h2 class="txt100p mb40 sp_mb30" align="center"><span class="trajan txt_36">Real Estate</span><br>
      <span class="ls2px">ヤマダタッケンの不動産情報</span></h2>
    <div class="uk-container top_realestate_slider_body">
      <div uk-slider="autoplay: true">
        <div  class="uk-position-relative uk-margin-auto uk-width-1-1\@m">
          <div class="uk-slider-container">
            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-4@m uk-grid">
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>
<?php
$term_sp = get_the_terms( $post->ID, 'real_estate_cat' ); 
foreach($term_sp as $term_s){
$term_id = $term_s->term_id;
$term_name = $term_s->name;
break;
}
$term_idsp = 'real_estate_cat_'.$term_id; 
?>
              <li>
            <a href="<?php the_permalink(); ?>" class="news_link_box"><p class="news_link_box_img" style="background-image: url(<?PHP the_field('n1'); ?>)"><img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>"/></p>
                <p class="cat_name mb10"><span style="background-color:<?php the_field('nc1',$term_idsp); ?>;"><?php $terms = get_the_terms($post->ID, 'real_estate_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span><span class="new_span bg_red">NEW</span></p>
                <div align="center" class="txt_16 mb05"><?PHP the_field('re2'); ?></div>
                  
                  </a>
              </li>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
            </ul>
          </div>
          
            <a class="uk-position-center-left-out uk-position-small uk-slidenav-large txt-fff" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small uk-slidenav-large txt-fff" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
      </div>
        <div class="mt30 sp_mt20" align="center">
            <a href="/real_estate/" class="serif top_more_btn2_white_big uk-display-inline-block uk-width-1-2@m">more <span class="trajan">Real Estate</span></a>
        </div>
    </div>
  </section>
<?php endif; ?>	


                
<?php 
$posts = get_posts(array(
'posts_per_page' => -1, // 表示件数の指定
'post_type' => 'recruit',
    'meta_key'=>'n_top',/*カスタムフィールドのフィールド名*/
    'meta_value'=>true/*カスタムフィールドの値*/
));
if( $posts ): ?>
<section class="top_realestate_body top_realestate_body_recruit_cutom" uk-scrollspy="cls:uk-animation-slide-bottom-small; delay: 200">
    <h2 class="txt100p mb40 sp_mb30" align="center"><span class="trajan txt_36">Recruit</span><br>
      <span class="ls2px">採用情報</span></h2>
    <div class="uk-container top_realestate_slider_body">
      <div uk-slider="autoplay: true">
        <div  class="uk-position-relative uk-margin-auto uk-width-1-1\@m">
          <div class="uk-slider-container">
            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-4@m uk-grid">
<?php foreach( $posts as $post ): 
setup_postdata( $post )
?>
            

              <li>
            <a href="<?php the_permalink(); ?>" class="news_link_box" style="pointer-events: none"><p class="news_link_box_img" style="background-image: url(<?PHP the_field('n1'); ?>)"><img src="<?PHP the_field('n1'); ?>" alt="<?php the_title(); ?>"/></p>
                <p align="center" class="lh140p mw300_title"><?php the_title(); ?>
                  <?php if (get_field('rec3')) : ?>
            <span class="new_span">NEW</span>
<?php endif; ?>	</p>
                <!--<p class="txt_10"><?php
        $text = mb_substr(get_field('n2'),0,100,'utf-8'); 
        echo $text.'[・・・]';
        ?></p>--></a>
              </li>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
            </ul>
          </div>
          
            <a class="uk-position-center-left-out uk-position-small uk-slidenav-large" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small uk-slidenav-large" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
      </div>
        <div class="mt30 sp_mt20" align="center">
            <a href="/recruit" class="serif top_more_btn2_white_big uk-display-inline-block uk-width-1-2@m">more <span class="trajan">Recruit</span></a>
        </div>
    </div>
  </section>
<?php endif; ?>	
                

    
    <!---->
<article class="uk-container">
    
      
      <section class="mt100 sp_mt50">
        <h3 class="title_1" uk-scrollspy="cls:uk-animation-fade; delay:200"><strong class="trajan">Group Business</strong><span>グループビジネス</span></h3>
    <div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 200">
          <?php 
  $posts = get_posts(array(
  'posts_per_page' => -1, // 表示件数の指定
  'post_type' => 'top_lineup', // 
      'tax_query' => array(
      array(
          'taxonomy' => 'lineup_cat', // カスタム分類 
          'field' => 'slug',
          'terms' => 'lineup_cat3', // ターム  で絞り込む
          )
      )
  ));
  if( $posts ): ?>
  <?php foreach( $posts as $post ): 
  setup_postdata( $post )
  ?>		
      <div class="">
          <p align="center" class="mb0"><img src="<?PHP the_field('tl1'); ?>" alt="<?php the_title(); ?> ロゴ"/><br>
<img src="<?PHP the_field('tl2'); ?>" alt="<?php the_title(); ?> イメージ"/></p>
          <p class="txt_10 mt10"><?PHP the_field('tl3'); ?></p>
      <?php if (get_field('tl4')) : ?>
          <p align="center" class="serif"><a href="<?PHP the_field('tl4'); ?>" class="top_more_btn">more</a></p>
  <?php endif; ?>
        </div>
  <?php endforeach; ?>	
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
    </div>
      </section>
    
  
    
    <!---->
    
      
          
	</article>
    
    <!---->
    

    
    <!---->
    
  <section class="mt100 mb100 sp_mt50 sp_mb50">
    <div class="uk-container" uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 200">
      
    <div class=" ">
        <h2 class="title_1" uk-scrollspy="cls:uk-animation-fade; delay:200"><strong class="trajan">Action!</strong><span>ヤマダタッケンの活動</span></h2>
        <div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 200">
            
            
        <?php 
  $posts = get_posts(array(
  'posts_per_page' => -1, // 表示件数の指定
  'post_type' => 'top_action'
  ));
  if( $posts ): ?>
  <?php foreach( $posts as $post ): 
  setup_postdata( $post )
  ?>		
                  <div class="">
          <p class="uk-flex uk-flex-center uk-flex-middle top_action_logo"><img src="<?PHP the_field('tl2'); ?>" alt="<?php the_title(); ?>"/></p>
          <p align="center" class="lh140p mw300_title"><?php the_title(); ?></p>
          <p class="txt_10"><?PHP the_field('tl3'); ?></p>
          <p align="center" class="serif"><a href="<?PHP the_field('tl4'); ?>" class="top_more_btn">more</a></p>
      </div>
  <?php endforeach; ?>	
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
      </div>
    </div>
    </div>
    </section>
    

<?php
get_footer();
