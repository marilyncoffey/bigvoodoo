<?php
/**
	*Template Name: Home Page
  *@package BigVoodoo
**/

get_header(); ?>
<!--=====banner======-->
<?php get_template_part('content','hero'); ?>

  <div class="container main-content">

    <!--=======Content====-->
    <?php while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>

    <?php endwhile; // end of the loop. ?>

  </div>
  <!--======contact form widget ======-->
    <div class="formSection">
    	<?php dynamic_sidebar( 'homepage-widget' ); ?>
    </div><!--end contact form widget section-->

<?php get_footer(); ?>
