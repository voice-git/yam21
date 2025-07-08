<?php
get_header();
?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets2024/css/contact.css?<?php echo date("Ymd-Hi"); ?>" />

<div id="introducing">
    <section class="top_mv">
        <div class="textwrap">
            <p class="title copperplate">CONTACT</p>
            <h2 class="sub pc">お問い合わせ・資料請求・ご紹介者の方</h2>
            <h2 class="sub sp">お問い合わせ・資料請求<br>ご紹介者の方</h2>
        </div>
    </section>

    <section class="form_text">
        <p>ご希望の項目を選択し、<br class="sp">フォーム入力の上送信ください。</p>
    </section>


    <?php include 'form-link.php'; ?>

	<div class="form_wrap"><?php echo do_shortcode('[contact-form-7 id="36532" title="ご紹介ページ"]'); ?></div>
    <script type="text/javascript">var Kairos3Tracker ="yam21";</script><script type="text/javascript" charset="utf-8"src="//c.k3r.jp"></script>

    <section class="form_tel">
        <div>
            <p>お電話でのお問い合わせ</p>
            <a href="">TEL 076-245-7777</a>
            <p class="pc">営業時間 10:00-18:00 ｜ 定休日 水曜・祝日</p>
            <p class="sp">営業時間 10:00-18:00<br>定休日 水曜・祝日</p>
        </div>
    </section>
</div>

<?php
get_footer();
?>