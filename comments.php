<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package bootscore
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area card card-body shadow" id="comments">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">

			<?php
			$comments_number = get_comments_number();
			if ( 1 === (int) $comments_number ) {
				printf(
					/* translators: %s: post title */
					esc_html_x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'bootscore' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: number of comments, 2: post title */
					esc_html( _nx(
						'%1$s thought on &ldquo;%2$s&rdquo;',
						'%1$s thoughts on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'bootscore'
					) ),
					number_format_i18n( $comments_number ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>

		</h2><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>

			<nav class="comment-navigation" id="comment-nav-above">

				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bootscore' ); ?></h1>

				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '&larr; Older Comments', 'bootscore' ) ); ?>
					</div>
				<?php } ?>

				<?php	if ( get_next_comments_link() ) { ?>
					<div class="nav-next">
						<?php next_comments_link( __( 'Newer Comments &rarr;', 'bootscore' ) ); ?>
					</div>
				<?php } ?>

			</nav><!-- #comment-nav-above -->

		<?php endif; // check for comment navigation. ?>

		<ol class="comment-list">

			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>

		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>

			<nav class="comment-navigation" id="comment-nav-below">

				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bootscore' ); ?></h1>

				<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '&larr; Older Comments', 'bootscore' ) ); ?>
					</div>
				<?php } ?>

				<?php	if ( get_next_comments_link() ) { ?>
					<div class="nav-next">
						<?php next_comments_link( __( 'Newer Comments &rarr;', 'bootscore' ) ); ?>
					</div>
				<?php } ?>

			</nav><!-- #comment-nav-below -->

		<?php endif; // check for comment navigation. ?>

	<?php endif; // endif have_comments(). ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bootscore' ); ?></p>

	<?php endif; ?>

	<?php if( comments_open() ) : ?>
		<div class="wb-comment-form">
			<?php
				$bootscore_comment_field = '<div class="comment-form-textarea form-group"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control" placeholder="'. esc_attr__('Enter your comment...*', 'bootscore') .'"></textarea></div>';
				$bootscore_fields =  array(
				  'author' => '<div class="comment-form-author form-group"><input id="author" placeholder="'. esc_attr__('Name *', 'bootscore') .'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" class="form-control" required /></div>',
				  'email'  => '<p class="comment-form-email form-group"><input id="email" placeholder="'. esc_attr__('Email *', 'bootscore') .'" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) .'" size="30" class="form-control" required /></p>',
				  'url'    => '<p class="comment-form-url form-group"><input id="url" placeholder="'. esc_attr__('Website', 'bootscore') .'" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" class="form-control" /></p>',
				);

				comment_form( array(
					'title_reply_before'   => '<h5 class="reply-title">',
					'title_reply_after'    => '</h5>',
					'title_reply'          => esc_html__('Leave a Reply', 'bootscore'),
					'cancel_reply_link'    => esc_html__('Cancel', 'bootscore'),
					'label_submit'         => esc_html__('Post Comment', 'bootscore'),
					'class_submit'         => 'submit btn btn-primary comment-submit-btn',
					'submit_field'         => '<div class="form-submit w-100 text-center">%1$s %2$s</div>',
					'cancel_reply_before'  => '<small class="wb-cancel-reply">',
					'class_form'           => 'comment-form align-items-center',
					'comment_notes_before' => '<div class="text-muted wb-comment-notes"><p>' . __( 'Your email address will not be published. Required fields are marked *', 'bootscore' ) . '</p></div>',
					'comment_notes_after'  => '',
					'comment_field'        => $bootscore_comment_field,
					'fields'               => $bootscore_fields,
				) );
			?>
		</div>
	<?php endif; ?>

</div><!-- #comments -->
