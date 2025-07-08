<?php
/*
Template Name: スタッフ紹介
*/
?>
<?php
get_header();
?>



<div class="subpage_main subpage_main_big" style="background-image: url(/common/img/subpage_main/staff.jpg)">
  <div class="uk-height-1-1 subpage_main_dark">
  <div class="uk-container uk-height-1-1">
    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
      <div class="subpage_main_content">
  <div class="txt_60 serif">STAFF</div>
  <div class="txt_18">スタッフ紹介</div>
      </div>
      </div>
  </div>
  </div>
</div>

<div class="pankuzu">
  <nav class="uk-container">
    <ul class="uk-breadcrumb">
      <li><a href="/">HOME</a></li>
      <li><span>スタッフ紹介</span></li>
  </ul>
  </nav>
</div>

<article class="uk-container">
  <section> 
<?php
	//カスタムタクソノミー (カスタム分類) のターム一覧を表示
	$taxonomies = array(
	'column_staff'
	);
	$args = array(
	'get' => 'all'
	);
	$terms = get_terms($taxonomies,$args);
	
	foreach($terms as $key => $value):
?>
      
    <div class="bg_gray uk-padding-large">
      <div uk-grid class="uk-flex-middle">
        <div class="uk-width-medium uk-width-1-4@s uk-margin-auto-left uk-margin-auto-right" align="center">
            <?php if( get_field('staff1', $value) ): ?>
          <div class="news_link_box_img news_link_box_img_seihoukei pic-circle" style="background-image: url(<?php the_field('staff1', $value); ?>)"><img src="<?php the_field('staff1', $value); ?>" alt="<?php echo esc_html($value->name); ?>"/></div>
            <?php else:?>
          <div class="news_link_box_img news_link_box_img_seihoukei" style="background-image: url(/common/img/staff/staff.svg)"><img src="/common/img/staff/staff.svg" alt="<?php echo esc_html($value->name); ?>"/></div>
            <?php endif;?>
          <div class="mt20">
            <?php the_field('staff2', $value); ?>
          </div>
          <div class="txt_18 mt05">
            <?php the_field('staff4', $value); ?>
            <?php echo esc_html($value->name); ?>
          </div>
          </div>
        <div class="uk-width-3-4@s">
          <div class="txt_18 mb15"><?php the_field('staff_hitokoto', $value); ?></div>
          <div class="lh180p"><?php the_field('staff3', $value); ?></div>
          <div class="mt10 t_align_center_sp"><a  href="/column/" class="common_link_btn3_border common_link_btn3_border_staff_custom mt10"><span class="trajan txt120p mr10">&gt;&gt; Column</span><span class="txt_10">代表 澤野のダイアリー</span></a></div>
          <div class=" t_align_center_sp">
              <a  href="/blog_staff/daihyo_sawano" class="common_link_btn3_border common_link_btn3_border_staff_custom mt10"><span class="trajan txt120p mr10">&gt;&gt; Blog</span><span class="txt_10">澤野 恵のブログ</span></a></div>
        </div>
      </div>
    </div>
      
<?php endforeach; ?>

  </section>
    
  <section class="mt60">
    <div uk-grid="masonry: true" class="uk-child-width-1-2@s uk-child-width-1-3@m" >
<?php
	//カスタムタクソノミー (カスタム分類) のターム一覧を表示
	$taxonomies = array(
	'blog_staff'
	);
	$args = array(
	'get' => 'all'
	);
	$terms = get_terms($taxonomies,$args);
	
	foreach($terms as $key => $value):
?>
            <?php if( get_field('staff3', $value) ): ?>
      <div>
        <div class="bg_gray uk-padding">
          <div class="center_200px">
            <?php if( get_field('staff1', $value) ): ?>
            <div class="news_link_box_img news_link_box_img_seihoukei pic-circle" style="background-image: url(<?php the_field('staff1', $value); ?>)"><img src="<?php the_field('staff1', $value); ?>" alt="<?php echo esc_html($value->name); ?>"/></div>
            <?php else:?>
            <div class="news_link_box_img news_link_box_img_seihoukei" style="background-image: url(/common/img/staff/staff.svg)"><img src="/common/img/staff/staff.svg" alt="<?php echo esc_html($value->name); ?>"/></div>
            <?php endif;?>
          </div>
            
          <div align="center">
            <div class="mt20">
              <?php the_field('staff2', $value); ?>
            </div>
            <div class="txt_18 mt05">
              <?php the_field('staff4', $value); ?>
              <?php echo esc_html($value->name); ?>
            </div>
          </div>
          <div class="lh180 mt20"><?php the_field('staff3', $value); ?></div>
            
          <div class="mt30" align="center"><a href="/blog_staff/<?php echo esc_html($value->slug); ?>/" class="common_link_btn3_border common_link_btn3_border_staff_custom"><span class="trajan txt120p mr15">&gt;&gt; Blog</span><span class="txt_10"><?php echo esc_html($value->name); ?>のブログ</span></a></div>
        </div>
      </div>
            <?php endif;?>
<?php endforeach; ?>
    </div>
  </section>
</article>


<?php
get_footer();
