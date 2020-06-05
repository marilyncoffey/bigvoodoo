
<?php
/** Footer
 * @package BigVoodoo
 **/
wp_footer(); ?>
    <footer class="site-footer">
      <div class="container">
            <div class="row justify-content-center">
                <!--nav menu-->
                <div class="col-sm-12 col-lg-8">
                      <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                </div><!--first widget-->

                <!--logo-->
               <div class="col-sm-12 col-lg-4">
                    <h1><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sample-logo.png" alt="Logo" class="logo"></a></h1>
               </div><!--second widget-->

               <!--empty-->
               <div class="col-sm-12 col-lg-12">
                    <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
               </div><!--third widget-->

           </div><!--end widget row-->

            <!--social icons-->
            <div class="d-flex justify-content-center socialBar">
                  <div class="p-2 flex-fill">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </div>
                  <div class="p-2 flex-fill">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </div>
                  <div class="p-2 flex-fill">
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </div>
            </div><!--end social icons row-->

            <!--copy right-->
            <div class="row justify-content-center">
              <p>&copy; Copyright 2019 <a href="<?php echo home_url(); ?>">Sample Template</a></p>
            </div><!--end copyright-->

        </div><!--end container-->

    </footer>
  </body>
</html>
