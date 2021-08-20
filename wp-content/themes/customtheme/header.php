<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<title><?php echo the_content(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/css/fontawesome-all.min.css">    
	<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/app/icons/icon-192x192.png">
	
	<?php wp_head(); ?>
</head>

<body class="theme-light" data-highlight="blue2" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="statusbar-overlay"></div>
<div class="panel-overlay"></div>
<div class="panel panel-left panel-reveal">
   <div class="view view-subnav">
      <div class="pages">
         <div data-page="panel-leftmenu" class="page pagepanel">
            <div class="page-content">
               <nav class="main_nav_underline">
                  <!-- Main Menu -->
                  <?php wp_nav_menu( array( 'theme_location' => 'menu-1', ) ); ?>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="panel panel-right panel-reveal">
   <div class="user_login_info">
      <div class="user_thumb">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page_photo.jpg" alt="" title="" />
         <div class="user_details">
            <!-- User Profile image -->
            <p>Welcome, <span><?php global $current_user; wp_get_current_user() ; echo $current_user->user_login; ?></span></p>
         </div>
         <div class="user_avatar">
            <?php $user = wp_get_current_user(); if ( $user ) : ?> <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" /> <?php endif; ?>
         </div>
      </div>
      <nav class="user-nav">
         <!-- Profile Menu -->
         <?php wp_nav_menu( array( 'theme_location' => 'menu-2', ) ); ?>
      </nav>
   </div>
</div>
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="index" class="page homepage">
<div class="page-content">
<div class="navbarpages">
   <div class="navbar_left">
      <div class="logo_text">
         <!-- Logo -->
         <?php the_custom_logo(); ?>
      </div>
   </div>
   <div class="navbar_right navbar_right_menu">
      <a href="#" data-panel="left" class="open-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/menu.png" alt="" title="" /></a>
   </div>
   <div class="navbar_right">
      <a href="#" data-panel="right" class="open-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/user.png" alt="" title="" /></a>
   </div>
</div>