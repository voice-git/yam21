<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yam21
 */

get_header();
?>

<section class="realestate-detail__fv">
  <p class="realestate-detail__fv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/realestate/realestate_detail_mv_sp.jpg" media="(max-width: 768px)" type="image/png">
      <img src="<?php echo get_template_directory_uri() ?>/assets2024/img/realestate/realestate_detail_mv.jpg" alt="" width="267"/>
    </picture>
  </p>
  <h2 class="realestate-detail__fv__lead">
    <span class="mv_lead_en copperplate">REAL ESTATE</span>
    <span class="mv_lead_ja">不動産情報</span>
  </h2>
</section>

<article class="article">
  <div class="realestate-detail__article__inner notosans">
    <div class="news-detail__article__head">
      <p class="news-detail__article__time mincho">
        <?php $terms = get_the_terms($post->ID, 'real_estate_cat');
        if ($terms && !is_wp_error($terms)) {
          foreach ($terms as $term) {
            $term_name = $term->name;
            echo $term_name;
            break;
          };
        }
        ?>
        <span class="news-detail__article__cat">
          <?PHP the_field('re_address'); ?>
        </span>
      </p>
      <h1 class="news-detail__article__title mincho"><?PHP the_field('re2'); ?></h1>
    </div>
    <div class="realestate-detail__article__thumbnail"><img src="<?PHP the_field('n1'); ?>" width="800" alt="<?php the_title(); ?>"/></div>

    <div class="realestate-detail__article__info">
      <div class="realestate-detail__article__price">
        <?php
          $group_field = get_field('realestate_info');

          if ($group_field) {
            $info_price = $group_field['info_price'];
            $info_area = $group_field['info_area'];
            $adress = $group_field['adress'];
            $traffic = $group_field['traffic'];
            $remarks = $group_field['remarks'];
            $map = $group_field['googlemap'];
            $maplink = $group_field['map_link'];
            $environment = $group_field['environment'];
        ?>
        <p class="realestate-detail__article__info_text notosans">
          <span class="realestate-detail__article__info_ja">価格</span>
          <span class="realestate-detail__article__info_num"><?php echo esc_html($info_price); ?></span>
          <span class="realestate-detail__article__info_sm">(税込)</span>
        </p>
      </div>
      <ul class="realestate-detail__article__list">
        <li class="realestate-detail__article__item">
          <p class="realestate-detail__article__item__head">所在地</p>
          <p class="realestate-detail__article__item__body"><?php echo $adress; ?></p>
        </li>

        <!-- 新築/中古・リノベ物件 -->

          <li class="realestate-detail__article__item">
            <?php if(!($term_name == '賃貸')): ?>
            <p class="realestate-detail__article__item__head">土地面積</p>
            <p class="realestate-detail__article__item__body"><?php the_field('land_area'); ?></p>
            <?php endif; ?>
          </li>
          <?php if(!($term_name == '賃貸')): ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">取引態様（売主・仲介）</p>
            <p class="realestate-detail__article__item__body"><?php the_field('transaction'); ?></p>
          </li>
          <li class="realestate-detail__article__item">
            <?php if(!($term_name == '売土地')): ?>
            <p class="realestate-detail__article__item__head">建物面積</p>
            <p class="realestate-detail__article__item__body"><?php the_field('build_area'); ?></p>
            <?php endif; ?>
          </li>
          <?php endif; ?>

        <!-- 売土地 -->

        <?php if (get_field('area_ratio')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">建ぺい率・容積率</p>
            <p class="realestate-detail__article__item__body"><?php the_field('area_ratio'); ?></p>
          </li>
        <?php endif; ?>
        <?php if (get_field('ground_grain')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">地目</p>
            <p class="realestate-detail__article__item__body"><?php the_field('ground_grain'); ?></p>
          </li>
        <?php endif; ?>
        <?php if (get_field('use_area')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">用途地域</p>
            <p class="realestate-detail__article__item__body"><?php the_field('use_area'); ?></p>
          </li>
        <?php endif; ?>
        <?php if (get_field('conditions')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">条件</p>
            <p class="realestate-detail__article__item__body"><?php the_field('conditions'); ?></p>
          </li>
        <?php endif; ?>

        <!-- 賃貸 -->

        <?php if (get_field('fee')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">管理費・共益費</p>
            <p class="realestate-detail__article__item__body"><?php the_field('fee'); ?></p>
          </li>
        <?php endif; ?>
        <?php if (get_field('security_deposit')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">敷金</p>
            <p class="realestate-detail__article__item__body"><?php the_field('security_deposit'); ?></p>
          </li>
        <?php endif; ?>
        <?php if (get_field('key_money')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">礼金</p>
            <p class="realestate-detail__article__item__body"><?php the_field('key_money'); ?></p>
          </li>
        <?php endif; ?>
        <?php if (get_field('floor')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">間取り</p>
            <p class="realestate-detail__article__item__body"><?php the_field('floor'); ?></p>
          </li>
        <?php endif; ?>
        <?php if (get_field('structure')) : ?>
        <li class="realestate-detail__article__item">
          <?php if($term_name == '賃貸'): ?>
          <p class="realestate-detail__article__item__head">構造</p>
          <?php else: ?>
          <p class="realestate-detail__article__item__head">構造・工法</p>
          <?php endif; ?>
          <p class="realestate-detail__article__item__body"><?php the_field('structure'); ?></p>
        </li>
        <?php endif; ?>
        <?php if (get_field('construction')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">築年月</p>
            <p class="realestate-detail__article__item__body"><?php the_field('construction'); ?></p>
          </li>
        <?php endif; ?>
        <?php if (get_field('parking')) : ?>
          <li class="realestate-detail__article__item">
            <p class="realestate-detail__article__item__head">駐車場</p>
            <p class="realestate-detail__article__item__body"><?php the_field('parking'); ?></p>
          </li>
        <?php endif; ?>
      </ul>
      <ul class="realestate-detail__article__list2">
        <li class="realestate-detail__article__item2">
          <p class="realestate-detail__article__item__head2">交通</p>
          <p class="realestate-detail__article__item__body2"><?php echo $traffic; ?></p>
        </li>
        <li class="realestate-detail__article__item2">
          <p class="realestate-detail__article__item__head2">備考</p>
          <p class="realestate-detail__article__item__body2"><?php echo $remarks; ?></p>
        </li>
          <li class="realestate-detail__article__item3">
            <div class="realestate-detail__article__map">
            <?php echo $map; ?>
            </div>
            <div class="realestate-detail__article__btn">
              <a target="_blank" class="btn" href="<?php echo $maplink; ?>">大きな地図で見る</a>
            </div>
          </li>
          <li class="realestate-detail__article__item2">
            <p class="realestate-detail__article__item__head2">周辺環境</p>
            <p class="realestate-detail__article__item__body2">
            <?php echo $environment; ?>
            </p>
          </li>
      </ul>
      <?php } ?>
    </div>

    <div class="realestate-detail__content__inner">
      <?php if ( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile;?>
      <?php endif; ?>
    </div>
  </div>

  <div class="realestate-detail__article__nav">
    <div class="single_page_nav copperplate uk-flex">
      <span class="navi_l"><?php previous_post_link('%link', 'PREV') ?></span>
      <span class="navi_back"><a href="/real_estate/">INDEX</a></span>
      <span class="navi_r"><?php next_post_link('%link', 'NEXT'); ?></span>
    </div>
  </div>

</article>


<?php
get_footer();
