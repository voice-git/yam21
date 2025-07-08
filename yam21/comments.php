<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yam21
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area notosans">

	<?php
	// You can start editing here -- including this comment!
	

  $args = array(
		'title_reply' => 'この記事のご質問・ご感想を<br class="sp_only">お待ちしております。',
		'comment_notes_before' => '<p class="comment-reply-sub">※ご記入いただいたメールアドレスが公開されることはありません。</p>',
    'comment_form_fields' => '',
		'label_submit' => '送信'
	);

	comment_form($args);
	?>

</div><!-- #comments -->
