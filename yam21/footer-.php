<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yam21
 */

?>
<?php $webroot = $_SERVER['DOCUMENT_ROOT'];?>

<!--footer-->
<?php include($webroot."/_inc_file/footer.php");?>

<?php wp_footer(); ?>


<?php
if ( is_page()  ) {
  echo post_custom('form_tag');
}
?>


<?php if (get_post_type() === 'news' && is_single()): ?>
  <?php if (is_object_in_term($post->ID, 'syuukei','ns_02')): ?>
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
    ga('send', 'event', '内覧会予約', '送信', '内覧会予約フォーム');
    }, false );
  </script>
  <?php elseif (is_object_in_term($post->ID, 'syuukei','ns_03')): ?>
   <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
    ga('send', 'event', 'イベントワークショップ', '送信', 'イベントワークショップフォーム');
    }, false );
  </script>
  <?php endif; ?>
<?php endif; ?>


<script type="text/javascript">var Kairos3Tracker ="yam21";</script><script type="text/javascript" charset="utf-8" src="//c.k3r.jp"></script>

</body>
</html>


