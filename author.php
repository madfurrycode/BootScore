<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BootScore
 */

get_header();
?>
<div class="container mt-4">
	<div class="row">
		<div class="col-lg-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php if ( have_posts() ) : ?>
					<header class="card card-body shadow">
            <div class="media">
              <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" class="mr-3" alt="...">
              <div class="media-body">
                <h5 class="mt-0"><?php bootscore_posted_by(); ?></h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quisquam. Harum dignissimos facilis dolor corporis architecto quidem consequatur animi reprehenderit!
              </div>
            </div>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>


<?php

get_footer();
