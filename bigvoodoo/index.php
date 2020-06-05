<?php

get_header();
?>

<!--=== title ===-->
<section class="page-title">
	<h1>The Blog</h1>
</section>


<!-- ==== Blog Content==== -->
<div class="container">
	<div class="row" id="primary">

		<main id="content" class="col-sm-12 col-lg-8" role="main">
				<!--post loop-->
				<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>
										<?php get_template_part( 'content', 'single' ); ?>

							<?php endwhile;

						else :
							echo '<p>There are no posts!</p>';

						endif;//end post loop
				?>
		</main><!-- #end main -->

<!-- ====side bar==== -->
			<aside class="col-sm-12 col-lg-4">
			<?php get_sidebar(); ?>
			</aside>
		</div><!-- primary -->
</div><!--container-->

<?php get_footer(); ?>
