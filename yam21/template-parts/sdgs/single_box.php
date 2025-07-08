<div class="sdgs_single_box">
  <div class="sdgs_single_box_title">“
    <?php the_title(); ?>
    „</div>
  <div class="sdgs_single_box_icon_box">
    <div uk-grid>
      <div class="uk-width-auto@m">
        <div class="sdgs_single_box_icon"> <img src="/common/img/sdgs/icon_<?PHP the_field('sdgs_01'); ?>.png" alt="アイコン"> </div>
      </div>
      <div class="uk-width-expand@m">
        <div class="sdgs_single_box_right">
          <div uk-grid class="uk-flex-middle uk-height-1-1">
      <div class="uk-width-auto@m">
              <div class="sdgs_single_box_target">
                <?PHP the_field('sdgs_02'); ?>
              </div>
            </div>
      <div class="uk-width-expand@m">
              <div class="sdgs_single_box_target_lead">
                <div class="sdgs_single_box_target_lead_txt"><?PHP the_field('sdgs_03'); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mw1000"><?php if( get_field('sdgs_04') ): ?>
  <div>
    <?php
    while ( have_rows( 'sdgs_04' ) ): the_row();
    $sdgs_04_01 = get_sub_field( 'sdgs_04_01' );
    $sdgs_04_02 = get_sub_field( 'sdgs_04_02' );
    ?>
    <div class="sdgs_single_box_katudou">
      <div class="sdgs_single_box_katudou_top"><?php echo $sdgs_04_01; ?></div>
      <div class="sdgs_single_box_katudou_bot"><?php echo $sdgs_04_02; ?></div>
    </div>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>
  <?php if( get_field('sdgs_img') ): ?>
  <div class="sdgs_single_box_img_body">
    <div uk-grid class="uk-child-width-1-3@s uk-child-width-1-2 sdgs_single_box_img_grid uk-grid-small">
      <?php
      while ( have_rows( 'sdgs_img' ) ): the_row();
      $image = wp_get_attachment_image_src( get_sub_field( 'sdgs_img_01' ), 'large' );
    $sdgs_img_02 = get_sub_field( 'sdgs_img_02' );
      ?>
      <div align="center">
          <div>
          	<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"  />
          </div>
          <?php if(get_sub_field('sdgs_img_02')) : ?>
          <div class="txt90p mt05"><?php echo $sdgs_img_02; ?></div>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if( get_field('sdgs_05') ): ?>
  <div class="sdgs_single_box_kongo_title">今後の活動予定</div>
  <div>
    <?php
    while ( have_rows( 'sdgs_05' ) ): the_row();
    $sdgs_05_01 = get_sub_field( 'sdgs_05_01' );
    ?>
    <div class="sdgs_single_box_kongo_item">
      <div class="sdgs_single_box_kongo_item_txt"><?php echo $sdgs_05_01; ?></div>
    </div>
    <?php endwhile; ?>
  </div>
  <?php endif; ?></div>
</div>
