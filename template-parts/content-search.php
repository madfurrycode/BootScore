<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BootScore
 */

?>

<article id="post-<?php the_ID(); ?>" class="card shadow <?php post_class(); ?>">
		<?php bootscore_post_thumbnail(); ?>
	<header class="card-header">
		<?php the_title( sprintf( '<h2 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="card-meta">
			<?php
			bootscore_posted_on();
			bootscore_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->



	<div class="card-body">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="card-footer">
		<?php bootscore_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
