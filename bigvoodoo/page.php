<?php
/**
 * Page Template
 *
 * @package BigVoodoo
 */

get_header(); ?>

<!--=====title====-->
	<section class="page-title">
		<h1><?php the_title(); ?></h1>
	</section>

	<!--==== Main content ====-->
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
</div><!--container-->
<?php get_footer(); ?>
