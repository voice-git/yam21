<div class="">
    <a <?php if (get_field('tl4')) : ?>href="<?PHP the_field('tl4'); ?>"<?php else: ?> style="pointer-events: none; opacity: .5;" <?php endif; ?> class="news_link_box">
<p align="center" class="mb0"><img src="<?PHP the_field('tl1'); ?>" alt="<?php the_title(); ?> ロゴ"/><br>
<img src="<?PHP the_field('tl2'); ?>" alt="<?php the_title(); ?> イメージ"/></p>
<p class="txt_10 mt10 mb0" align="center"><?php the_title(); ?></p>
</a>
</div>