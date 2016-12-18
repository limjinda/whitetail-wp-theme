<?php 

	$fields =  array(
		'author' =>
		'<div class="clearfix"><div class="sm-col sm-col-6"><label class="w-label" for="author">' . 'ชื่อของคุณ' . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>' .
		'<input class="w-tb first" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" /></div>',
		'email' =>
		'<div class="sm-col sm-col-6"><label class="w-label" for="email">' . 'ระบุอีเมล์' . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		'<input class="w-tb" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30" /></div>',
	);

	$form_args = array(
	  'id_form'           => 'commentform',
	  'class_form'				=> 'clearfix mxn2',
	  'id_submit'         => 'submit',
	  'class_submit'      => 'submit w-btn comment-submit-button',
	  'name_submit'       => 'submit',
	  'title_reply'       => __( 'แสดงความคิดเห็นของคุณที่นี่', 'jindatheme' ),
	  'title_reply_to'    => __( 'ตอบกลับไปยัง %s', 'jindatheme' ),
	  'cancel_reply_link' => __( 'ยกเลิกการตอบ', 'jindatheme' ),
	  'label_submit'      => 'ส่งความเห็น',
	  'format'            => 'xhtml',

	  'comment_field' =>  '<div class="sm-col sm-col-12"><label for="comment" class="w-label">' . '<span class="icon-speech-bubble"></span> ระบุความคิดเห็น ' . ( $req ? ' <span class="required">*</span>' : '' ) . '</label><textarea id="comment" class="w-textarea" name="comment" cols="45" rows="8" aria-required="true">' .
	    '</textarea></div>',

	  'must_log_in' => '<p class="must-log-in">' .
	    sprintf(
	      __( 'You must be <a href="%s">logged in</a> to post a comment.', 'jindatheme' ),
	      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
	    ) . '</p>',

	  'logged_in_as' => '<p class="logged-in-as"> ' .
	    sprintf(
	    __( 'คุณเข้าใช้ในชื่อ <a href="%1$s">%2$s</a>. <a href="%3$s" class="logout-link" title="Log out of this account">ออกจากระบบ คลิกที่นี่</a>', 'jindatheme' ),
	      admin_url( 'profile.php' ),
	      $user_identity,
	      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
	    ) . '</p>',

	  'comment_notes_before' => '',
	  'comment_notes_after' => '',
	  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	);

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title"> ความคิดเห็นจากบุคคลอื่นๆ
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comment-navigation" role="navigation">
				<div class="nav-links clearfix">

						<div class="sm-col sm-col-6">
							<?php if ( $prev_link = get_previous_comments_link('<span class="icon-arrow-left"></span> ความเห็นย้อนหลัง') ) : ?>
								<?php printf( '<div class="nav-previous">%s</div>', $prev_link ); ?>
							<?php else: ?>
								&nbsp;
							<?php endif; ?>
						</div>

						<div class="sm-col sm-col-6">
							<?php if ( $next_link = get_next_comments_link('ความเห็นถัดไป <span class="icon-arrow-right"></span>') ) : ?>
								<?php printf( '<div class="nav-next right-align">%s</div>', $next_link ); ?>
							<?php else: ?>
								&nbsp;
							<?php endif; ?>
						</div>

				</div><!-- .nav-links -->
			</nav><!-- .comment-navigation -->
		<?php	endif; ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 32,
				) );
			?>
		</ol><!-- .comment-list -->
		
	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'บทความนี้ไม่เปิดให้แสดงความคิดเห็น', 'jindatheme' ); ?></p>
	<?php endif; ?>

	<?php comment_form($form_args); ?>

</div>