<?php
get_header();
?>

<section class="top_mv">
	<div class="textwrap">
		<p class="title copperplate">BRAND LINEUP</p>
		<h2 class="sub">新築 / リノベーション</h2>
	</div>
	<div class="link_wrap">
		<a href="#newbrand" class="copperplate">NEW BUILD LINEUP</a>
        <span></span>
		<a href="#renovation" class="copperplate">RENOVATION LINEUP</a>
        <span></span>
		<a href="#other" class="copperplate">OTHER BRANDS</a>
	</div>
</section>
<div class="brandlineup_wrap">
	<div class="leftside">
		<div class="wrap">
			<div class="linkblock">
				<p class="top copperplate">NEW BUILD</p>
				<div class="linkwrap">
					<a href="#standardplan" class="link">規格住宅</a>
					<a href="#orderhome" class="link active">注文住宅</a>
					<a href="#loghome" class="link">ログホーム</a>
				</div>
			</div>
			<div class="linkblock">
				<p class="top copperplate">RENOVATION</p>
				<div class="linkwrap">
					<a href="#tree" class="link">トゥリーワークス</a>
					<a href="#realestate" class="link">70年代不動産</a>
					<a href="#exteriorwallrenovation" class="link">外壁リノベーション</a>
					<a href="#apartmentrenovation" class="link">マンションリノベーション</a>
				</div>
			</div>
			<div class="linkblock">
				<p class="top copperplate">OTHER BRANDS</p>
				<div class="linkwrap">
					<a href="#shopdesign" class="link">店舗デザイン</a>
					<a href="#exterior" class="link">エクステリア</a>
				</div>
			</div>
		</div>
	</div>
	<div class="rightside">
		<div class="sp_link_area">
			<div class="wrap">
				<p class="lefttext copperplate">BRAND</p>
				<div class="selectwrap">
					<select name="select" onChange="location.href=value;">
						<option value="#">ブランドを選択</option>
						<option value="#standardplan">規格住宅</option>
						<option value="#orderhome">注文住宅</option>
						<option value="#loghome">ログホーム</option>
						<option value="#tree">トゥリーワークス</option>
						<option value="#realestate">70年代不動産</option>
						<option value="#exteriorwallrenovation">外壁リノベーション</option>
						<option value="#apartmentrenovation">マンションリノベーション</option>
						<option value="#shopdesign">店舗デザイン</option>
						<option value="#exterior">エクステリア</option>
					</select>
				</div>
			</div>
		</div>
		<section id="newbrand" class="newbrand_area pdt100">
			<div class="title_wrap">
				<p class="title copperplate">NEW BUILD LINEUP</p>
				<h2 class="sub">新築ブランド</h2>
			</div>
			<div id="standardplan" class="brand_block">
				<div class="main_wrap maman">
					<div class="textwrap">
						<h3 class="main_title"><span class="copperplate">STANDARD PLAN</span><span>規格住宅</span></h3>
						<p class="main_text">アメリカンやフレンチカントリー、<br class="sp">海外のクラシカルデザインに拘った規格住宅。</p>
					</div>
				</div>
				<div class="head_wrap">
					<h4 class="head_title copperplate">AYU-M MAMAN</h4><span class="head_title_sub">アユームママン</span>
					<p class="head_text">愛らしいフランスの片田舎の暮らしを<br class="sp">コンセプトにした規格販売住宅。</p>
				</div>
				<div class="desc_wrap mgt75">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">家族にもじぶんにも<br>やさしい住まい。</h4>
							<p class="left_text">いそがしい日々の中、<br>じぶんを後回しにしがちですが、<br>それでも自分らしさを見失わず、<br>好きなこと、心動かされることを感じられる<br>暮らし。ありのままの自分で居られる家。</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img04.jpg" width="577" height="467" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img04-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">DAILY LIFE</h4>
							<p  class="feature_block_text">自然と家族同士のコミュニケーションがとれる。環境にも配慮した無垢の床材や塗り壁など、自然素材をつかった空間をご提案。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img04-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">APPEARANCE</h4>
							<p  class="feature_block_text">ナチュラルな風合いの塗り壁と洋瓦、愛らしい小さな窓たち。南フランスのプロヴァンスに佇む家をイメージ。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img04-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">WORK SPACE</h4>
							<p  class="feature_block_text">リビングの一角にあるワークスペース。趣味の事をしたり、じぶん時間を過ごす特別な場所。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img04-4.jpg);"></span>
							<h4 class="feature_block_title copperplate">INTERIOR PAINT<br class="sp">（Farrow and Ball)</h4>
							<p  class="feature_block_text">最高ランクの安全性をもつ英国製ペイントで、独特の色の深みと質の高い仕上がりに。</p>
						</div>
					</div>
				</div>
				<picture class="specimg">
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/spec04_sp.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/spec04.jpg" width="1000" height="866" alt="">
				</picture>
				<a href="/works/?_sft_works_cat=wc7" class="link_btn"><div><span class="copperplate">LIFESTYLE LOG</span><span>このブランドのライフスタイルをみる</span></div></a>
				<a href="https://vr.warphome.jp/yamadatakken/maman_30S/" target="_blank" class="link_btn mgt"><div><span class="copperplate">VR TOUR</span><span>アユームママンをVRでみる</span></div></a>
				<a href="https://www.yam21.com/maman_lp/" class="link_btn mgt"><div><span class="copperplate">PRICE SIMULATION</span><span>料金シミュレーション</span></div></a>
				<p class="bottom_text">Mamanはヤマダタッケンが開発をおこない<br class="sp">本部として展開するボランタリーチェーンです。<br>詳しくは<a href="http://www.maman-net.com/" target="_blank">こちら</a>をご覧ください。</p>
				<div class="head_wrap mgt120">
					<h4 class="head_title copperplate">AMERICAN HOME</h4><span class="head_title_sub">アメリカンホーム</span>
					<p class="head_text">ケープコッドの住宅をベースにプランした、<br class="sp">イングリッシュ・コロニアル様式。</p>
				</div>
				<div class="desc_wrap mgt75">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">家族の会話が自然と生まれる<br>オープンな間取りが魅力。</h4>
							<p class="left_text">輸入建材を使った<br>本格アメリカンデザインの住宅。<br>お天気の良い日に、<br>カヴァードポーチでコーヒーを飲んだり、<br>ゆっくりと本を読んで過ごしたり。<br>暮らしの楽しみが詰まったHOMEです。</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img04-2.jpg" width="577" height="466" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img04-2-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">DAILY LIFE</h4>
							<p  class="feature_block_text">内装のデザインも本格的なアメリカンホーム。壁・天井はすべて英国塗料のF＆Bを使用しています。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img04-2-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">AMERICAN STYLE</h4>
							<p  class="feature_block_text">屋根のある広々としたウッドデッキ、カヴァードポーチはアメリカのお家ならでは。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img04-2-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">KITCHEN & LIVING</h4>
							<p  class="feature_block_text">アイランドキッチンが中心のLDK。開放的な空間が広がります。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img04-2-4.jpg);"></span>
							<h4 class="feature_block_title copperplate">MATERIAL</h4>
							<p  class="feature_block_text">キッズルームは勾配天井やドーマー屋根と海外ドラマに出てきそうな仕上がりです。</p>
						</div>
					</div>
				</div>
				<picture class="specimg">
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/spec05_sp.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/spec05.jpg" width="1000" height="908" alt="">
				</picture>
				<a href="https://vr.warphome.jp/yamadatakken/mikawa_kikakujutaku/" target="_blank" class="link_btn"><div><span class="copperplate">VR TOUR</span><span>アメリカンホームをVRでみる</span></div></a>
			</div>
			<div id="orderhome" class="brand_block pdt90">
				<div class="main_wrap orderhome">
					<div class="textwrap">
						<h3 class="main_title"><span class="copperplate">CUSTOM HOME</span><span>注文住宅</span></h3>
						<p class="main_text">あなたと家族の為にカスタマイズされた<br class="sp">世界に一つだけの住まい。</p>
					</div>
				</div>
				<div class="desc_wrap">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">暮らしを楽しむ<br>HOMEづくり</h4>
							<p class="left_text">大好きなレコードでの音楽鑑賞、<br>子供たちとサイクリング、<br>仲間を招いて週末のホームパーティ。<br>家族それぞれのライフスタイルに合った<br>住まいを提案します。</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img01.jpg" width="577" height="467" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img01-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">DAILY LIFE</h4>
							<p  class="feature_block_text">自由度の高いプランニングはもちろん、デザインを考えながら性能の高いHOMEを提案してきます。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img01-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">MATERIAL</h4>
							<p  class="feature_block_text">創業当初より海外のスタイルを学んできました。<br class="pc">輸入建材を扱える強みが他社では真似のできない仕上がりになります。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img01-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">APPEARANCE</h4>
							<p  class="feature_block_text">海外の優れたデザインを取り入れ、周りの環境にマッチングしたデザインにしていきます。外観はまちの資産となります。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img01-4.jpg);"></span>
							<h4 class="feature_block_title copperplate">KITCHEN</h4>
							<p  class="feature_block_text">木製キャビネットを主に扱う国産キッチンメーカーと提携したオリジナルキッチン。設備のバリエーションも豊富です。</p>
						</div>
					</div>
				</div>
				<a href="/works/?_sft_works_cat=wc8" class="link_btn"><div><span class="copperplate">LIFESTYLE LOG</span><span>このブランドのライフスタイルをみる</span></div></a>
			</div>
			<div id="loghome" class="brand_block">
				<div class="main_wrap loghome">
					<div class="textwrap">
						<h3 class="main_title"><span class="copperplate">LOG HOME</span><span>ログホーム</span></h3>
						<p class="main_text">LOG HOMEは私達が建築を始めた原点です</p>
					</div>
				</div>
				<div class="desc_wrap">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">ナチュラルな素材を生かし<br>安心できるHOME</h4>
							<p class="left_text">コンテナを開けると、沢山の大木と共に<br>木箱に入ったウィスキー。<br>フィンランドのプレカット会社の<br>担当者からの贈り物。<br>毎回ギフトを受け取る気持ちで<br>コンテナが来るのを待ち遠しく思っています。</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img02.jpg" width="577" height="467" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img02-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">LOCATION</h4>
							<p  class="feature_block_text">海に山に自然に囲まれたロケーションが似合うLOG HOME。室内で過ごす時間はもちろん、外部のデッキで焚火を眺めながら過ごす至福の時間。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img02-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">BASEMENT</h4>
							<p  class="feature_block_text">高低差のある自然な地形に建つLOGは基礎の中を地下室として利用。スタジオやストックルームとして生活を潤す空間となります。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img02-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">FELLOW</h4>
							<p  class="feature_block_text">気の合う仲間と作るHOME。当初はアメリカ人の大工で時にはカントリーミュージックをかけながら陽気に作っていました。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img02-4.jpg);"></span>
							<h4 class="feature_block_title copperplate">MAKER</h4>
							<p  class="feature_block_text">ハンドカット・マシンカット・スクエア・D型・ポストアンドビーム。バリエーション豊かに作れるのは、私自身がログメーカーだからです。</p>
						</div>
					</div>
				</div>
<!--
				<picture class="specimg">
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/spec02_sp.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/spec02.jpg" width="1000" height="866" alt="">
				</picture>
-->
			</div>
		</section>
		<section id="renovation" class="newbrand_area">
			<div class="title_wrap">
				<p class="title copperplate">RENOVATION LINEUP</p>
				<h2 class="sub">リノベーションブランド</h2>
			</div>
			<div id="tree" class="brand_block pdt90">
				<div class="main_wrap tree">
					<div class="textwrap">
						<h3 class="main_title"><span class="copperplate">TREE WORKS</span><span>トゥリーワークス</span></h3>
						<p class="main_text">思い出の家をリノベーションすることで<br class="sp">生まれ変わるあたらしい暮らし。</p>
					</div>
				</div>
				<div class="desc_wrap">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">リノベーションで生まれ変わる、<br>自分らしく居心地のよい暮らし。</h4>
							<p class="left_text">自分たちの好きや拘りを大切にしたHomeDecorationTreeの提案する家づくり。</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img05.jpg" width="577" height="467" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img05-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">DAILY LIFE</h4>
							<p  class="feature_block_text">使い勝手が悪い間取りをご家族のライフスタイルに合わせてリノベーション。時代を越えて魅力的なインテリアと過ごす心地のいい日々。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img05-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">MOOD</h4>
							<p  class="feature_block_text">長い年月をかけてつくられた味のある建物と馴染む、木や塗り壁のあたたかみのある雰囲気を取り入れた仕上げに。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img05-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">KITCHEN</h4>
							<p  class="feature_block_text">キッチンやトイレなど、機能性も兼ね備えて。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img05-4.jpg);"></span>
							<h4 class="feature_block_title copperplate">INTERIOR</h4>
							<p  class="feature_block_text">家具も合わせてHomeDecorationTreeがトータルコーディネート。どこか懐かしく、温かみのあるカントリーテイストを軸にご提案します。
</p>
						</div>
					</div>
				</div>
				<a href="/works/?_sft_works_cat=wc5" class="link_btn"><div><span class="copperplate">LIFESTYLE LOG</span><span>このブランドのライフスタイルをみる</span></div></a>
			</div>
			<div id="realestate" class="brand_block">
				<div class="main_wrap realestate">
					<div class="textwrap">
						<h3 class="main_title"><span class="copperplate">70s REAL ESTATE</span><span>70年代不動産</span></h3>
						<p class="main_text">70年代ヴィンテージでセンスよく、趣味を<br class="sp">満喫できるリノベーションが生まれました。</p>
					</div>
				</div>
				<div class="desc_wrap">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">アパート家賃より安い月額で<br>叶う新しい暮らし。</h4>
							<p class="left_text">予算を抑えてもデザインには<br class="sp">こだわりたいもの。<br>BEFOREがどんな建物だったかなんて<br>まるで想像出来ない<br class="sp">リノベーションを実現。</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img06.jpg" width="577" height="467" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img06-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">DAILY LIFE</h4>
							<p  class="feature_block_text">昔ながらの部分を残しつつ、自分たちが暮らしやすいように改修。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img06-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">DESIGN</h4>
							<p  class="feature_block_text">使える建材は存分に活用し、コストを最大限に抑えつつデザインもこだわり抜きます。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img06-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">PLAYFULNESS</h4>
							<p  class="feature_block_text">遊び心を忘れずに。70年代不動産はアイデアの宝庫です。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img06-4.jpg);"></span>
							<h4 class="feature_block_title copperplate">INTERIOR</h4>
							<p  class="feature_block_text">レトロなデザインやヴィンテージの家具が似合う家。</p>
						</div>
					</div>
				</div>
				<a href="/works/?_sft_works_cat=wc4" class="link_btn"><div><span class="copperplate">LIFESTYLE LOG</span><span>このブランドのライフスタイルをみる</span></div></a>
				<p class="bottom_text">70年代不動産はヤマダタッケンが開発をおこない<br class="sp">本部として展開するボランタリーチェーンです。<br>詳しくは<a href="https://www.70fudosan.jp/" target="_blank">こちら</a>をご覧ください。</p>
			</div>
			<div id="exteriorwallrenovation" class="brand_block">
				<div class="main_wrap exteriorwallrenovation">
					<div class="textwrap">
						<h3 class="main_title"><span class="copperplate f62">EXTERIOR WALL RENOVATION</span><br><span class="mgl0">外壁リノベーション</span></h3>
						<p class="main_text">改修ではなく、デザインを取り入れた<br class="sp">外壁リノベーションを。</p>
					</div>
				</div>
				<div class="desc_wrap">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">外壁をリデザインしませんか？</h4>
							<p class="left_text justify">外観はお家の外見。厳しい自然環境にさらされ、表面が傷んできても塗り替えだけでは単なる改修です。私達からのご提案はデザインを取り入れた『外壁リノベーション』。アンティークなレンガや石を積んだ欧米に建っている住宅のようにすることも可能です。左官仕上げとなる塗壁は外断熱工法を取り入れ、断熱性能を高める事も。長年クラシカルデザインの住宅を作ってきた当社スタッフにご相談ください。</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img08.jpg" width="577" height="467" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img08-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">WALL PAINTING</h4>
							<p  class="feature_block_text">クラックに強く汚れもつきにくい外壁塗り壁材を使用。カラーも豊富で、テクスチャーによって様々な表情をつけることが出来ます。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img08-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">DESIGN CONCRETE</h4>
							<p  class="feature_block_text">海外にあるようなレンガの外壁や、古びた石積みの外壁を、専用のコンクリートを使用してひとつひとつ手作りで形をつくり表現することが可能です。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img08-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">PAINTING</h4>
							<p  class="feature_block_text">ひとつひとつのお家に合わせた、適材適所な塗料選びをいたします。</p>
						</div>
					</div>
				</div>
				<a href="https://www.yam21.com/renovation/wall/" target="_blank" class="link_btn"><div><span class="copperplate">PRICE SIMULATION</span><span>料金シミュレーション</span></div></a>
			</div>


			<div id="apartmentrenovation" class="brand_block">
				<div class="main_wrap apartmentrenovation">
					<div class="textwrap">
						<h3 class="main_title"><span class="copperplate f62">APARTMENT RENOVATION</span><br><span class="mgl0">マンションリノベーション</span></h3>
						<p class="main_text">お住まいのリノベーション、<br class="sp">中古マンション購入をお考えの方へ。</p>
					</div>
				</div>
				<div class="desc_wrap">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">自分らしく、<br>居心地の良い暮らしをご提案。</h4>
							<p class="left_text justify">生活の中に木があると何だか落ち着く。リビングでまったり読書したり、グリーンを飾って眺めたり、のんびりと趣味を愉しむ時間が増えていく。日々の暮らしがもっと愛おしく感じる。お気に入りの家具や雑貨に囲まれた自分らしい暮らし方。もっと心地いい自分だけの居場所にリノベーションしてみませんか？</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img09.jpg" width="577" height="467" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img09-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">KITCHEN</h4>
							<p  class="feature_block_text">温かみのある木製キッチン。カフェのような空間でお料理も楽しくなります。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img09-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">LAVATORY</h4>
							<p  class="feature_block_text">毎日使う洗面は自分好みにカスタマイズ。機能性を見直して収納スペースを確保。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img09-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">LIVING DOOR</h4>
							<p  class="feature_block_text">木製ドアはワンランク上の上質な空間を創り上げます。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img09-4.jpg);"></span>
							<h4 class="feature_block_title copperplate">WALL</h4>
							<p  class="feature_block_text">壁紙はもちろん、ペイントや塗り壁でワンランク上の空間に。</p>
						</div>
					</div>
				</div>
				<picture class="specimg">
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/spec09_sp.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/spec09.jpg" width="1000" height="474" alt="">
				</picture>
			</div>
		</section>
		<section id="other" class="newbrand_area pdb200">
			<div class="title_wrap">
				<p class="title copperplate">OTHER BRANDS</p>
				<h2 class="sub">その他のブランド</h2>
			</div>
			<div id="shopdesign" class="brand_block">
				<div class="main_wrap shopdesign">
					<div class="textwrap">
						<h3 class="main_title"><span class="copperplate">SHOP DESIGN</span><span>店舗デザイン</span></h3>
						<p class="main_text">デザイン重視の住宅を作り続けてきた<br class="sp">経験を活かした設計デザイン。</p>
					</div>
				</div>
				<div class="desc_wrap">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">店舗の設計施工も<br>数多く手がけております。</h4>
							<p class="left_text">新築リノベーションどちらも対応。<br>店舗併用住宅やテナント工事も<br class="sp">ご相談ください。</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img03.jpg" width="577" height="467" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img03-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">CAFE</h4>
							<p  class="feature_block_text">オーナーの想いを汲み取り、居心地の良さを期待させる外観デザイン。得意とするのは既存の物件の良いところを活かす提案。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img03-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">CAFE</h4>
							<p  class="feature_block_text">訪れるお客様の記憶に残る、細部にまでこだわったデザイン。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img03-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">APPAREL SHOP</h4>
							<p  class="feature_block_text">販売する商品に合わせた空間提案や照明計画、オーダーメードの什器作成。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img03-4.jpg);"></span>
							<h4 class="feature_block_title copperplate">BAR</h4>
							<p  class="feature_block_text">輸入建材のデザインコンクリートを活用したオリジナルな空間を実現。</p>
						</div>
					</div>
				</div>
			</div>
			<div id="exterior" class="brand_block pdt90">
				<div class="main_wrap exterior">
					<div class="textwrap">
						<h3 class="main_title"><span class="copperplate">EXTERIOR</span><span>エクステリア</span></h3>
						<p class="main_text">遊び心や居心地を大切にした、<br class="sp">家族みんなが集まるお庭を。</p>
					</div>
				</div>
				<div class="desc_wrap">
					<div class="left">
						<div class="textwrap">
							<p class="left_sub copperplate">BRAND STYLE</p>
							<h4 class="left_title">家づくりと同じく<br>輸入建材を活用。</h4>
							<p class="left_text">素材とアイディアを生かし、<br>個性的で表情豊かなエクステリアをご提案。</p>
						</div>
					</div>
					<img class="rightimg" src="<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/desc_img07.jpg" width="577" height="467" alt="">
				</div>
				<div class="feature_wrap">
					<h3 class="feature_title copperplate">FEATURE</h3>
					<div class="feature">
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img07-1.jpg);"></span>
							<h4 class="feature_block_title copperplate">GARDEN DESIGN</h4>
							<p  class="feature_block_text">ただ庭木を植えて駐車場を設けるのではなく、家族みんなが集まる<br class="pc">もう一つのリビングのようなお庭に。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img07-2.jpg);"></span>
							<h4 class="feature_block_title copperplate">DESIGN CONCRETE</h4>
							<p  class="feature_block_text">コンクリートの施工にひと手間加えたバリエーション豊かな施工。立体的な造形物もお任せください。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img07-3.jpg);"></span>
							<h4 class="feature_block_title copperplate">FENCE</h4>
							<p  class="feature_block_text">お庭の雰囲気に合わせて施工できる、様々なフェンスを取り扱っています。</p>
						</div>
						<div class="feature_block">
							<span class="imgwrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets2024/img/brandlineup/feature_img07-4.jpg);"></span>
							<h4 class="feature_block_title copperplate">STORAGE ROOM</h4>
							<p  class="feature_block_text">オリジナルの木製物置。好みのカラーで仕上げられます。</p>
						</div>
					</div>
				</div>
				<a href="/works/?_sft_works_cat=wc3" class="link_btn"><div><span class="copperplate">LIFESTYLE LOG</span><span>このブランドのライフスタイルをみる</span></div></a>
			</div>
		</section>
	</div>
</div>

<?php
get_footer();
