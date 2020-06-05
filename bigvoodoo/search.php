<?php
/**
 * Search results pg
 * @package Big Voodoo
 */

get_header(); ?>
<!--=====title====-->
	<section class="page-title">
		<h1><?php the_title(); ?></h1>
	</section>

	<div class="container">
		<div id="primary" class="row">
			<!--- ====search results content===== --->
			<main id="content" class="col-sm-12 col-lg-8">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/** search template**/
					get_template_part( 'content', 'search' );
					?>

				<?php endwhile; ?>

        <?php the_post_navigation(
          array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bigvoodoo' ) . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bigvoodoo' ) . '</span> <span class="nav-title">%title</span>',
          )
        ); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #content -->

			<!--- ====sidebar===== --->
			<aside class="col-sm-12 col-lg-4">
			<?php get_sidebar(); ?>
			</aside>

		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>
