<?php
get_header();
?>
<section class="top_mv">
	<?php if( have_rows('pickup','option') ): ?>
	<div class="newswrap pickupnews">
		<p class="cate copperplate">PICK UP</p>
		<div class="text-wrap">
			<?php while( have_rows('pickup','option') ): the_row(); ?>
			<div class="block">
				<?php $text_pc = get_sub_field('表示テキスト');
				$trimmed_text_pc = (mb_strlen($text_pc) > 33) ? mb_substr($text_pc, 0, 33) . '…' : $text_pc;
				$text_sp = get_sub_field('表示テキスト');
				$trimmed_text_sp = (mb_strlen($text_sp) > 15) ? mb_substr($text_sp, 0, 15) . '…' : $text_sp;
				 ?>
				<a href="<?php the_sub_field('リンク先url'); ?>" class="text pc"><?php echo $trimmed_text_pc; ?></a>
				<a href="<?php the_sub_field('リンク先url'); ?>" class="text sp"><?php echo $trimmed_text_sp; ?></a>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>
	<?php $posts = get_posts(array(
		'posts_per_page' => 1,
		'post_type' => 'news',
        'meta_key' => 'n_top',
        'meta_value' => true,
		'tax_query' => array(
			array(
				'taxonomy' => 'news_cat',
				'field' => 'slug',
				'terms' => 'nc2',
			),
		),
	));
	if( $posts ):
	foreach( $posts as $post ): 
	setup_postdata( $post );

	$term_sp = get_the_terms( $post->ID, 'news_cat' ); 
	foreach($term_sp as $term_s){
		$term_id = $term_s->term_id;
		$term_name = $term_s->name;
		break;
	}
	$term_idsp = 'news_cat_'.$term_id; 
	?>
	<div class="newswrap">
		<p class="cate copperplate"><?php 
			$terms = get_the_terms($post->ID, 'news_cat');
			foreach ($terms as $term){
				$term_name = $term->name;
				if ($term_name === 'お知らせ'){
					echo 'NEWS';
				}elseif($term_name === 'イベント'){
					echo 'EVENT';
				}elseif($term_name === '内覧会'){
					echo 'OPEN HOUSE';
				}
				break;
			} ?></p>
		<a href="<?php the_permalink(); ?>" class="text pc"><?php the_title(); ?></a>
		<a href="<?php the_permalink(); ?>" class="text sp"><?php $title = get_the_title(); if(mb_strlen($title, 'UTF-8') > 19){ $title = mb_substr($title, 0, 19, 'UTF-8') . '…'; } echo $title; ?></a>
	</div>
	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>	

	
	<div id="slider" class="sliderwrap">
	<?php if( have_rows('スライド画像','option') ): ?>
	<?php while( have_rows('スライド画像','option') ): the_row(); ?>
		<div class="block">
			<span class="pc" style="background-image: url(<?php the_sub_field('pc画像'); ?>)"></span>
			<?php if(get_sub_field('sp画像')): ?>
				<span class="sp" style="background-image: url(<?php the_sub_field('sp画像'); ?>)"></span>
			<?php else: ?>
				<span class="sp" style="background-image: url(<?php the_sub_field('pc画像'); ?>)"></span>
			<?php endif; ?>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
		<div class="block slide03">
			<div class="textwrap">
				<picture class="yamadatakken">
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/top_mc03text_sp.svg" width="300" height="290">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/top_mc03text.svg" width="830" height="340" alt="NEW
BRAND SYMBO　ヤマダタッケンのブランドシンボルが新しくなりました。">
				</picture>
				<a href="https://www.yam21.com/column/60465" class="btn_more"><span class="copperplate">READ MORE</span></a>
			</div>
		</div>
		<div class="block slide04">
			<div class="textwrap w924 c-text">
				<p class="title copperplate">わたしたち<br class="sp">について</p>
				<h2 class="sub">BRAND CONCEPT</h2>
				<p class="text concept_text pc_only"><span><img src="<?php echo get_template_directory_uri();?>/assets2024/img/top/top_logo_text.svg" alt=""></span><span>に込めた<br class="sp">ヤマダタッケンの想い</span></p>
				<a href="https://www.yam21.com/concept" class="btn_more pc_only"><span class="copperplate">READ MORE</span></a>

				<div class="sp_text_content sp_only"><img src="<?php echo get_template_directory_uri();?>/assets2024/img/top/sp_concept_text.svg" alt=""></div>
				<a href="https://www.yam21.com/concept" class="btn_more sp_only"><span class="copperplate">READ MORE</span></a>
			</div>
		</div>
		<div class="block slide02">
			<div class="textwrap w690">
				<p class="title copperplate">LOG HOME</p>
				<h2 class="sub">ログホーム</h2>
				<p class="text">LOG HOMEは<br class="sp">私達が建築を始めた原点です。</p>
				<a href="/brandlineup/#loghome" class="btn_more"><span class="copperplate">READ MORE</span></a>
			</div>
		</div>
	</div>
</section>
<div class="bg_area area01">
	<section class="news_area">
		<div class="left_news">
			<div class="titlewrap">
				<img class="title" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/title_news.svg" width="148" height="30" alt="NEWS">
				<div class="link">
					<a class="btn all active"><span>すべて</span></a>
					<a class="btn news"><span>お知らせ</span></a>
					<a class="btn event"><span>イベント</span></a>
				</div>
			</div>
			<div class="newswrap all active">
				<?php $posts = get_posts(array(
					'posts_per_page' => 3,
					'post_type' => 'news',
	                'meta_key' => 'n_top',
	                'meta_value' => true,
					'tax_query' => array(
						array(
							'taxonomy' => 'news_cat',
							'field' => 'slug',
							'terms' => array('nc4', 'nc2'),
							'operator' => 'IN',
						)
					)
				));
				if( $posts ):
				foreach( $posts as $post ): 
				setup_postdata( $post );
	
				$term_sp = get_the_terms( $post->ID, 'news_cat' ); 
				foreach($term_sp as $term_s){
					$term_id = $term_s->term_id;
					$term_name = $term_s->name;
					break;
				}
				$term_idsp = 'news_cat_'.$term_id; 
				?>
				<a href="<?php the_permalink(); ?>" class="newsblock">
					<?php if( get_field('n1') ): ?>
					<span class="imgwrap" style="background-image: url(<?PHP the_field('n1'); ?>)"></span>
					<?php else: ?>
					<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/common/noimage.jpg)"></span>
					<?php endif; ?>
					<div class="textwrap">
						<div class="topwrap">
<!-- 							<p class="date copperplate"><?php the_time('Y.m.d'); ?></p> -->
							<p class="cate"><span><?php $terms = get_the_terms($post->ID, 'news_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span></p>
						</div>
						<h2 class="newstitle notosans"><?php the_title(); ?></h2>
					</div>
				</a>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>	
			</div>
			<div class="newswrap news">
				<?php $posts = get_posts(array(
					'posts_per_page' => 3,
					'post_type' => 'news',
	                'meta_key' => 'n_top',
	                'meta_value' => true,
					'tax_query' => array(
						array(
							'taxonomy' => 'news_cat',
							'field' => 'slug',
							'terms' => 'nc4',
						)
					)
				));
				if( $posts ):
				foreach( $posts as $post ): 
				setup_postdata( $post );
	
				$term_sp = get_the_terms( $post->ID, 'news_cat' ); 
				foreach($term_sp as $term_s){
					$term_id = $term_s->term_id;
					$term_name = $term_s->name;
					break;
				}
				$term_idsp = 'news_cat_'.$term_id; 
				?>
				<a href="<?php the_permalink(); ?>" class="newsblock">
					<?php if( get_field('n1') ): ?>
					<span class="imgwrap" style="background-image: url(<?PHP the_field('n1'); ?>)"></span>
					<?php else: ?>
					<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/common/noimage.jpg)"></span>
					<?php endif; ?>
					<div class="textwrap">
						<div class="topwrap">
<!-- 							<p class="date copperplate"><?php the_time('Y.m.d'); ?></p> -->
							<p class="cate"><span><?php $terms = get_the_terms($post->ID, 'news_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span></p>
						</div>
						<h2 class="newstitle notosans"><?php the_title(); ?></h2>
					</div>
				</a>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>	
			</div>
			<div class="newswrap event">
				<?php $posts = get_posts(array(
					'posts_per_page' => 3,
					'post_type' => 'news',
	                'meta_key' => 'n_top',
	                'meta_value' => true,
					'tax_query' => array(
						array(
							'taxonomy' => 'news_cat',
							'field' => 'slug',
							'terms' => 'nc2',
						)
					)
				));
				if( $posts ):
				foreach( $posts as $post ): 
				setup_postdata( $post );
	
				$term_sp = get_the_terms( $post->ID, 'news_cat' ); 
				foreach($term_sp as $term_s){
					$term_id = $term_s->term_id;
					$term_name = $term_s->name;
					break;
				}
				$term_idsp = 'news_cat_'.$term_id; 
				?>
				<a href="<?php the_permalink(); ?>" class="newsblock">
					<?php if( get_field('n1') ): ?>
					<span class="imgwrap" style="background-image: url(<?PHP the_field('n1'); ?>)"></span>
					<?php else: ?>
					<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/common/noimage.jpg)"></span>
					<?php endif; ?>
					<div class="textwrap">
						<div class="topwrap">
<!-- 							<p class="date copperplate"><?php the_time('Y.m.d'); ?></p> -->
							<p class="cate"><span><?php $terms = get_the_terms($post->ID, 'news_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span></p>
						</div>
						<h2 class="newstitle notosans"><?php the_title(); ?></h2>
					</div>
				</a>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>	
			</div>
			<a href="/news/" class="morebtn"><span class="copperplate">READ MORE</span></a>
		</div>
		<div class="right_openhouse">
			<div class="titlewrap">
				<img class="title" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/title_openhome.svg" width="308" height="30" alt="OPEN HOME">
			</div>
			<div class="newswrap active">
				<?php $posts = get_posts(array(
					'posts_per_page' => 3,
					'post_type' => 'news',
	                'meta_key' => 'n_top',
	                'meta_value' => true,
					'tax_query' => array(
						array(
							'taxonomy' => 'news_cat',
							'field' => 'slug',
							'terms' => 'nc3',
						)
					)
				));
				if( $posts ):
				foreach( $posts as $post ): 
				setup_postdata( $post );
	
				$term_sp = get_the_terms( $post->ID, 'news_cat' ); 
				foreach($term_sp as $term_s){
					$term_id = $term_s->term_id;
					$term_name = $term_s->name;
					break;
				}
				$term_idsp = 'news_cat_'.$term_id; 
				?>
				<a href="<?php the_permalink(); ?>" class="newsblock">
					<?php if( get_field('n1') ): ?>
					<span class="imgwrap" style="background-image: url(<?PHP the_field('n1'); ?>)"></span>
					<?php else: ?>
					<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/common/noimage.jpg)"></span>
					<?php endif; ?>
					<div class="textwrap">
<!--
						<div class="topwrap">
							<p class="date copperplate"><?php the_time('Y.m.d'); ?></p>
						</div>
-->
						<h2 class="newstitle notosans"><?php the_title(); ?></h2>
					</div>
				</a>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>	
			</div>
			<a href="/news_cat/nc3/" class="morebtn"><span class="copperplate">READ MORE</span></a>
		</div>
	</section>
	<section class="lifestylelog_area">
		<p class="sub">- 施工実績 -</p>
		<img class="title" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/title_lifestylelog.svg" width="626" height="60" alt="LIFESTYLE LOG">
		<h2 class="text">十人十色のいそがない人生。</h2>
		<div class="logwrap sp_slide">
            <?php
            $posts = get_posts( array(
              'posts_per_page' => 6,
              'post_type' => 'works',
              'meta_key' => 'n_top',
              'meta_value' => true,
            ) );
            if ( $posts ):
            foreach ( $posts as $post ):
              setup_postdata( $post );
            ?>
			<a href="<?php the_permalink(); ?>" class="logblock">
				<?php if( get_field('n1') ): ?>
				<span class="imgwrap" style="background-image: url(<?PHP the_field('n1'); ?>)"></span>
				<?php else: ?>
				<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/common/noimage.jpg)"></span>
				<?php endif; ?>
				<p  class="no copperplate">LIFESTYLE LOG NO.<?php the_field('num'); ?></p>
				<h3 class="logtitle notosans"><?php the_title(); ?></h3>
			</a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
		</div>
		<a href="/works/" class="morebtn"><span class="copperplate">READ MORE</span></a>
	</section>
	<section class="networkbusiness_area">
		<p class="sub">- ネットワークビジネス -</p>
		<img class="title pc" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/title_network.svg" width="740" height="60" alt="NETWORK BUSINESS">
		<img class="title sp" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/title_network_sp.svg" width="220" height="66" alt="NETWORK BUSINESS">
		<h2 class="text">全国に広がる<br class="sp">工務店・加盟店ネットワークの<br class="sp">本部を担っています。</h2>
		<div class="network_wrap">
			<div class="block">
				<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/network_img01.jpg" width="572" height="353" alt="">
				<div class="right_info">
					<img class="sp_w155" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/network_title01.svg" width="250" height="120" alt="Tree">
					<p class="info_text">「魅力あふれる商品力」「技術力」「ネットワークによる工務店様同士の繋がり」に優れた企画住宅をパッケージ化し、全国の工務店様に取り扱いいただいています。</p>
					<p class="info">石川県金沢市久安１丁目411番地<br>TEL：076-245-7777</p>
					<a href="http://www.maman-net.com/" target="_blank" class="link"><span>Maman HP</span></a>
				</div>
			</div>
			<div class="block">
				<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/network_img02.jpg" width="572" height="353" alt="">
				<div class="right_info">
					<img class="sp_w175" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/network_title02.svg" width="310" height="70" alt="Tree">
					<p class="info_text">本部であるヤマダタッケンが実践した「売る技術」もあわせて提供。各加盟店がアレンジしたビジネスモデルのフィードバックなども行っています。</p>
					<p class="info">石川県金沢市久安１丁目411番地<br>TEL：076-245-7777</p>
					<a href="https://www.70fudosan.jp/" target="_blank" class="link"><span>70年代不動産 HP</span></a>
				</div>
			</div>
		</div>
	</section>
</div>
<section class="concept_area">
	<div class="wrap">
		<p class="sub copperplate">BRAND STATEMENT</p>
		<h2 class="title">&nbsp;&nbsp;いそがない人生を。</h2>
		<p class="text">わたしたちが提案するライフスタイルは、ちょっと、めんどうくさい。<br>日々の暮らしを、手間ひまかけて、ていねいに整える。<br>大切な住まいを、時間をかけて、じっくりとつくる。<br>世の中はみるみる便利で効率的になっていきますが、<br>現代人はもっとおおらかに生きてもいいんじゃないか。<br>大事なものをゆっくり味わうように暮らしてもいいんじゃないか。<br>ヤマダタッケンはそう思うのです。<br>住まいをつくるとき、わたしたちは合理性を求めません。<br>１棟１棟をていねいにじっくりとつくるのは、<br>経年とともに劣化するのではなく、<br>歳月を経るごとに味わい深くなる住まいにするためです。<br>提案するインテリアや、運営するカフェや、<br>企画するイベントやプロジェクトも、すべて同じ考え方です。<br>本当の豊かさは、きっと、急いでばかりじゃ手に入らない。<br>ヤマダタッケンは提案したいのです。<br>“いそがない人生”というライフスタイルを、現代に生きるたくさんの人に。</p>
		<picture class="yamadatakken">
			<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/lcosf-yamadatakken.svg">
			<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/lcosf-yamadatakken.svg" width="390" height="130" alt="L/C.O.S.F. ヤマダタッケン">
		</picture>
		<a href="/concept#sec3" class="link"><div>ヤマダタッケンのミッション<span class="copperplate">MISSION STATEMENT</span></div></a>
		<a href="/concept#sec5" class="link mgt"><div>すべての事業は“いそがない人生”のために<span class="copperplate">BUSINESS DOMAIN</span></div></a>
	</div>
</section>
<div class="bg_area">
	<section class="storys_area">
		<img class="title" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/title_lcosfstory.svg" width="860" height="60" alt="L/C.O.S.F. STORY’S">
		<h2 class="text">「普遍的」「有機的」「持続可能性」「仲間」。<br>ヤマダタッケンが創業時から大切にしている<br class="sp">キーワードにまつわるお話。</h2>
		<div class="linkwrap">
			<a href="/story/story01/" class="linkblock">
				<div class="textwrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/story01.svg" width="212" height="15" alt="L/C.O.S.F. STORY 01">
					<p class="blocktitle copperplate">HISTORY OF<br>YAMADA TAKKEN</p>
					<h3 class="sub">ヤマダタッケンヒストリー</h3>
					<p class="blocktext">わたしたちの、はじまりのお話。</p>
				</div>
				<p class="more copperplate">READ MORE</p>
			</a>
			<a href="/story/story02/" class="linkblock">
				<div class="textwrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/story02.svg" width="214" height="15" alt="L/C.O.S.F. STORY 02">
					<p class="blocktitle copperplate">SUSTAINABILITY<br>LIFE</p>
					<h3 class="sub">サスティナビリティライフ</h3>
					<p class="blocktext">“持続可能な豊かな暮らし”を求めて。</p>
				</div>
				<p class="more copperplate">READ MORE</p>
			</a>
			<a href="/story/story03/" class="linkblock">
				<div class="textwrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/story03.svg" width="214" height="15" alt="L/C.O.S.F. STORY 03">
					<p class="blocktitle copperplate">RECYCLING<br>SPECIALTY SHOP</p>
					<h3 class="sub">RE古材専門店</h3>
					<p class="blocktext">古き良きものを後世に残す。</p>
				</div>
				<p class="more copperplate">READ MORE</p>
			</a>
			<a href="/story/story04/" class="linkblock">
				<div class="textwrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/story04.svg" width="214" height="15" alt="L/C.O.S.F. STORY 04">
					<p class="blocktitle copperplate">THIRD PLACE<br>PROJECT</p>
					<h3 class="sub">PIT21 CAFE</h3>
					<p class="blocktext">人生の余白時間を楽しむ。</p>
				</div>
				<p class="more copperplate">READ MORE</p>
			</a>
			<a href="/story/story05/" class="linkblock">
				<div class="textwrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/story05.svg" width="214" height="15" alt="L/C.O.S.F. STORY 05">
					<p class="blocktitle copperplate">ORGANIC<br>COMMUNITY</p>
					<h3 class="sub">オーガニックコミュニティ</h3>
					<p class="blocktext">家族が安心できる<br class="sp">食生活をおくるために。</p>
				</div>
				<p class="more copperplate">READ MORE</p>
			</a>
			<a href="/story/story06/" class="linkblock">
				<div class="textwrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/story06.svg" width="214" height="15" alt="L/C.O.S.F. STORY 06">
					<p class="blocktitle copperplate">GOOD FELLOWS</p>
					<h3 class="sub">グッドフェローズ</h3>
					<p class="blocktext">仲間や同志と、共に歩んでいく。</p>
				</div>
				<p class="more copperplate">READ MORE</p>
			</a>
		</div>
	</section>
	<section class="banner_area">
		<div class="banner_top">
			<a href="/brandlineup/" class="link_left">
				<div class="textwrap">
					<p class="title copperplate">BRAND LINEUP</p>
					<h2 class="sub">新築 / リノベーション</h2>
				</div>
			</a>
			<a href="/real_estate/" class="link_right">
				<div class="textwrap">
					<p class="title copperplate">REAL ESTATE</p>
					<h2 class="sub">不動産情報</h2>
				</div>
			</a>
		</div>
		<div class="banner_middle">
			<a href="/howtomake/" class="link">
				<div class="textwrap">
					<p class="title copperplate">HOW TO MAKE</p>
					<h2 class="sub">ヤマダタッケンの家づくり</h2>
				</div>
			</a>
			<a href="/aboutus/" class="link">
				<div class="textwrap">
					<p class="title copperplate">WHAT’S<br>YAMADA TAKKEN</p>
					<h2 class="sub">ヤマダタッケンについて</h2>
				</div>
			</a>
		</div>
		<div class="banner_foot">
			<a href="/recruit/" class="link_rec">
				<div class="text"><span class="copperplate">RECRUIT</span><span>採用情報</span></div>
			</a>
			<div class="link_blog">
				<div class="text"><span class="copperplate">BLOG</span><span>ブログ</span></div>
				<div class="hover_content">
<!-- 					<a href="/days/"><img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/foot_bloglink01.svg" width="198" height="16" alt="L/C.O.S.F. DAY'S"></a> -->
					<a href="/column/"><img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/foot_bloglink02.svg" width="198" height="16" alt="SAWANO DAY'S"></a>
					<a href="/blog/"><img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/top/foot_bloglink03.svg" width="212" height="16" alt="STAFF JOURNAL"></a>
				</div>
			</div>
			<a href="/form_contact/" class="link_contact">
				<div class="text"><span class="copperplate">CONTACT</span><span>お問い合わせ</span></div>
			</a>
		</div>
	</section>
</div>
<?php
get_footer();
?>