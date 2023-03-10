<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Banquet Hall
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<a class="skip-link screen-reader-text" href="#content_navigate">
<?php esc_html_e( 'Skip to content', 'banquet-hall' ); ?>
</a>
<!--HEADER INFO AREA STARTS-->
<?php 
$header_contactnumber = get_theme_mod('header_contactnumber');
$hidetopbar = get_theme_mod('hide_header_topbar', 1);
?>
<!--HEADER INFO AREA ENDS-->
<div class="header">
  <div class="container">
    <div class="logo">
		<?php banquet_hall_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
    </div> 
    <?php if( $hidetopbar == '') { ?>
    <div class="headsearchbox">
        <span class="sintp">
            <a href="tel:<?php echo esc_html($header_contactnumber);?>"><i class="faphone"></i> <?php echo esc_html($header_contactnumber);?></a></span> 
    </div>
    <?php } ?>
    <div id="navigate-main">       
		   <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" type="button">
			<span aria-hidden="true"><?php esc_html_e( 'Menu', 'banquet-hall' ); ?></span>
			<span class="dashicons" aria-hidden="true"></span>
		   </button>
		  <nav id="main-navigation" class="site-navigation primary-navigation" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'primary-menu menu' ) );
			?>
		  </nav><!-- .site-navigation -->
	    </div>
  </div> <!-- container -->
  <div class="clear"></div>
</div><!--.header -->
<div class="clear"></div>