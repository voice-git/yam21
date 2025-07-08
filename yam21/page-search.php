<?php
/*
Template Name: サイト内検索
*/
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
      <li><span>サイト内検索</span></li>
  </ul>
  </nav>
</div>

<article class="uk-container">
  <section>
      <?php get_search_form(); ?>
  </section>
</article>


<?php
get_footer();
