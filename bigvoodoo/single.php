<?php
/**
 * Single Post
 * @package BigVoodoo
**/

get_header();
?>

	<!-- ==== Blog Content ====-->
	<div class="container">
		<div class="row" id="primary">
			<main id="content" class="col-sm-8">
        <!--If have posts, load posts-->
    		<?php
      		while ( have_posts() ) :
      			the_post(); ?>
            <?php get_template_part( 'content', 'single' ); ?>
      			<?php the_post_navigation(
      				array(
      					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bigvoodoo' ) . '</span> <span class="nav-title">%title</span>',
      					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bigvoodootest' ) . '</span> <span class="nav-title">%title</span>',
      				)
      			);

      			// If have comments, load comments
      			if ( comments_open() || get_comments_number() ) :
      				comments_template();
      			endif;

      		endwhile;
    		?>
			</main><!-- #main -->

	<!-- ===== Side bar ====-->
	<aside class="col-sm-4">
		<?php get_sidebar(); ?>
	</aside><!--end sidebar-->
</div><!--end row-->
</div><!--end container-->
<?php
get_sidebar();
get_footer();
