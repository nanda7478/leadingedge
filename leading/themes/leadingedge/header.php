<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css"> 
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/carousel.css"> 
 
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/main.css">
      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">

 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/bootstrap.masonry.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/css/js/script.js"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/custom.css"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
		<div class="site-header-main">
		<div class="container">
		<div class="leadingedge_header">
        <div class="row">
              
        <div class="col-sm-5">
        <div class="header_left_menu">
        <div id="site-header-menu" class="site-header-menu">
        <?php if ( has_nav_menu( 'left-menu' ) ) : ?>
	   <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Left Menu', 'twentysixteen' ); ?>">
	   <?php
	   wp_nav_menu( array(
			'theme_location' => 'left-menu',
			'menu_class'     => 'primary-menu',
		) );
	   ?>
	  </nav><!-- .main-navigation -->
	  <?php endif; ?>
      </div>
      </div>
      </div>

      <div class="col-sm-2">
      <div class="logo_center">
      <div class="site-branding">
	 <?php twentysixteen_the_custom_logo(); ?>
	<?php if ( is_front_page() && is_home() ) : ?>
	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php else : ?>
	<p class="site-title">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	<?php bloginfo( 'name' ); ?>	
	</a>
	</p>
	<?php endif;

	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) : ?>
	<p class="site-description"><?php echo $description; ?></p>
	<?php endif; ?>
	</div><!-- .site-branding -->
     </div>
     </div>


     <div class="col-sm-5 text-right">
    <div class="right-side-header">
    <div class="header-top-right desktop-view">
    <div id="site-header-menu" class="site-header-menu">
    <?php if ( has_nav_menu( 'right-menu' ) ) : ?>
	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Right Menu', 'twentysixteen' ); ?>">
	<?php
	wp_nav_menu( array(
			'theme_location' => 'right-menu',
			'menu_class'     => 'primary-menu',
		) );
	?>
	</nav><!-- .main-navigation -->
	<?php endif; ?>
    </div>

    </div>
     
    

    </div>
    </div>
    </div>
  </div><!-- .container -->
  
  <div class="m-header">
  <div class="logo_center">
      <div class="site-branding">
	 <?php twentysixteen_the_custom_logo(); ?>
	<?php if ( is_front_page() && is_home() ) : ?>
	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php else : ?>
	<p class="site-title">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	<?php bloginfo( 'name' ); ?>	
	</a>
	</p>
	<?php endif;

	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) : ?>
	<p class="site-description"><?php echo $description; ?></p>
	<?php endif; ?>
	</div><!-- .site-branding -->
     </div>
 
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
  <span class="humbers" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
 <div class="manusection sidenav" id="mySidenav">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	  <?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
	 
	 <?php wp_nav_menu( array('theme_location' => 'primary',
							  'menu' => 'primary-menu') ); ?>
	
		</nav><!-- .main-navigation -->
	<?php endif; ?>
      <div class="header-social-icon">
    <ul>
           <li><a href=""><i class="fa fa-google-plus"></i></a></li>
           <li><a href=""><i class="fa fa-facebook"></i></a></li>
           <li><a href=""><i class="fa fa-twitter"></i></a></li>
           <li><a href=""><i class="fa fa-instagram"></i></a></li>
           </ul>
    </div>
    
    </div>
    <div class="clr"></div>
     </div>
     
     
     
  </div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
