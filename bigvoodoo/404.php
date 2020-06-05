<?php
/**
 * 404 pg template
 * @package BigVoodoo
 */

get_header(); ?>

<!--=====title====-->
	<section class="page-title">
		<h1><?php the_title(); ?></h1>
	</section>

	<div class="container">
		<div id="primary" class="row">
			<!--- ====404 msg===== --->
			<main id="content" class="col-sm-12 col-lg-8">

        <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'bigvoodoo' ); ?></h2>
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'bigvoodoo' ); ?></p>

        <?php get_search_form(); ?>

			</main><!-- #content -->

			<!--- ====sidebar===== --->
			<aside class="col-sm-12 col-lg-4">
			<?php get_sidebar(); ?>
			</aside>

		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>
