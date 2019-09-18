<?php
/**
* @package BootScore
* @since 1.0.0
*/

get_header();
?>
<section class="front-page-header">
  <div class="container">
    <?php the_title( '<h1 class="front-page-title">', '</h1>' ); ?>
  </div>
</section>
<div class="container mt-4">
	<div class="row">
		<div class="col-lg-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();
          ?>

            <article id="post-<?php the_ID(); ?>" class="card <?php post_class(); ?>">

            	<?php bootscore_post_thumbnail(); ?>

            	<div class="card-body">

            		<?php the_content(); ?>

            	</div>

            </article>

          <?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>


<?php

get_footer();
