<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="navigationSite" class="navigationMain">
      <div class="toggleMenu" aria-controls="primary-menu" aria-expanded="false">
          <a href="<?php echo (get_site_url())?>" rel="home">Fleurs d'oranger & chats errants</a>  
          <button class="menuBurger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
          </button>
      </div>
      <div class="menuPage">
              <img class="logomenu" 
                src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
              <ul id="menuText">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
              </ul>
              <img class="orchid"
              src="<?php echo get_template_directory_uri() . '/assets/images/orchid.png'; ?> " alt="fleur orchidée">
              <img class="sunflower"
              src="<?php echo get_template_directory_uri() . '/assets/images/sunflower.png'; ?> " alt="sun flower">
              <img class="flower"
              src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?> " alt="flower">
              <img class="randomflower"
              src="<?php echo get_template_directory_uri() . '/assets/images/random_flower.png'; ?> " alt=" random flower">
              <img class="hibiscus_footer"
              src="<?php echo get_template_directory_uri() . '/assets/images/hibiscus_footer.png'; ?> " alt=" hibiscus footer">
              <img class="chat-blue"
              src="<?php echo get_stylesheet_directory_uri() . '/images/blue-cat.png'; ?> " alt=" chat blue">
              <img class="chat-orange"
              src="<?php echo get_stylesheet_directory_uri() . '/images/orange-cat.png'; ?> " alt=" chat orange">
              <img class="chat-noir" 
              src="<?php echo get_stylesheet_directory_uri() . '/images/black-cat.png'; ?> " alt=" chat noir">

              <p class="basmenu">Studio Koukaki</p>
      </div>
		</nav><!-- #site-navigation -->
    
	</header><!-- #masthead -->
