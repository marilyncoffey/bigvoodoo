<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <!-- IE browser compatibility-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
      <!--===Top Nav===-->
      <div class="container">
      <nav class="top-navigation navbar-right">
        <?php
            wp_nav_menu( array(
              'theme_location' => 'top-nav',
              'container'		 => 'top-navigation'
            ) );
        ?>
      </nav>
      <!--====main header===-->

      <!--=logo and tagline-->
      <div class="row brand-section">
        <div class="col-sm-12 col-md-12 col-lg-5 order-lg-3 align-self-center">
          <table border="0">
    				<tr>
    					<td class="align-middle" width:"20%">CALL US TODAY</td>
    					<td class="align-middle" width="80%"><a href="tel:+18001234567"><h1>(800) 123-4567</h1></a></td>
    				</tr>
		      </table>
        </div><!--phone col-->
        <div class="col-sm-12 col-md-12 col-lg-4 align-self-center">
            <h1><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sample-logo.png" alt="Logo" class="logo"></a></h1>
        </div><!--logo col-->
        <div class="col-sm-12 col-md-12 col-lg-3 align-self-center">
            <h4><?php bloginfo( 'description' ); ?></h4>
        </div><!--tagline col-->
      </div><!--row-->
    </div><!-- container-->

    <!--=====main menu bar=====-->
    <!--hamburger-->
    <!--I couldn't figure out how to get the hamburger to move the same way as the screenshots.
    * I tried using a few different methods, but then it would disrupt the header order. I hope this is OK!-->
    <nav class="navbar navbar-expand-lg">
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
    		<i class="fas fa-bars"></i>
    	</button><!-- end hamburger-->

    	<div class="collapse navbar-collapse navbar-light bg-light justify-content-center" id="navbar-content">
        <!--display menu-->
    		<?php
    		wp_nav_menu( array(
    			'theme_location' => 'main menu',
    			'menu_id'        => 'main menu',
    			'container'      => false,
    			'depth'          => 2,
          'menu_class'     => 'nav navbar-nav',
          'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
          'walker'         => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
    	</div><!--collapse-->
    </nav><!--nav bar-->

</header>
