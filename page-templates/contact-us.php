<?php
/**
* Template Name: Contact Us
*
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
		<div class="col-lg-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<div class="card shadow">
          <div class="card-body">
            <?php
      				if ( have_posts() ) :
      					while ( have_posts() ) :
      						the_post();
                    the_content();
      					endwhile;
      				endif;
    				?>
            <hr>
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

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
