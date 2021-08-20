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
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-startup-image-640x920.png">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/framework7.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swipebox.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animations.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body id="mobile_wrap" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="statusbar-overlay"></div>

<div class="panel-overlay"></div>

<div class="panel panel-left panel-reveal">
<div class="view view-subnav">
<div class="pages">
	<div data-page="panel-leftmenu" class="page pagepanel">	
				 <div class="page-content">
		<nav class="main_nav_underline">
		<ul>
		<li><a href="index.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/home.png" alt="" title="" /><span>Home</span></a></li>
		<li><a href="about.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/mobile.png" alt="" title="" /><span>About</span></a></li>
		<li><a href="features.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/features.png" alt="" title="" /><span>Features</span></a></li>
		
		<li><a href="#" data-popup=".popup-login" class="open-popup close-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/lock.png" alt="" title="" /><span>Login</span></a></li>
		<li><a href="team.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/users.png" alt="" title="" /><span>Team</span></a></li>
		<li><a href="blog.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/blog.png" alt="" title="" /><span>Blog</span></a></li>		

		<li><a href="photos.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/photos.png" alt="" title="" /><span>Photos</span></a></li>
		<li><a href="videos.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/video.png" alt="" title="" /><span>Videos</span></a></li>
		<li><a href="music.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/music.png" alt="" title="" /><span>Music</span></a></li>
		
		<li><a href="shop.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/shop.png" alt="" title="" /><span>Shop</span></a></li>
		<li class="subnav"><a href="categories.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/categories.png" alt="" title="" /><span>Sub level menu</span></a></li>
		<li><a href="cart.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/cart.png" alt="" title="" /><span>Cart</span></a></li>
		
		<li><a href="tables.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/tables.png" alt="" title="" /><span>Tables</span></a></li>
		<li><a href="chat.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/message.png" alt="" title="" /><span>Chat messages</span></a></li>
		<li><a href="form.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/form.png" alt="" title="" /><span>Custom Form</span></a></li>
		
		
		<li><a href="tel:012345678" class="close-panel external" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/phone.png" alt="" title="" /><span>Call now!</span></a></li>
		<li><a href="contact.html" class="close-panel" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/contact.png" alt="" title="" /><span>Contact</span></a></li>
		</ul>
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
			   <p>Welcome, <span>Nathalie</span></p>
			  </div>  
			  <div class="user_avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.jpg" alt="" title="" /></div>       
			</div>
			
			  <nav class="user-nav">
				<ul>
				  <li><a href="features.html" class="close-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/settings.png" alt="" title="" /><span>Account Settings</span></a></li>
				  <li><a href="features.html" class="close-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/briefcase.png" alt="" title="" /><span>My Account</span></a></li>
				  <li><a href="features.html" class="close-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/message.png" alt="" title="" /><span>Messages</span><strong>12</strong></a></li>
				  <li><a href="features.html" class="close-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/love.png" alt="" title="" /><span>Favorites</span><strong>5</strong></a></li>
				  <li><a href="index.html" class="close-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/lock.png" alt="" title="" /><span>Logout</span></a></li>
				</ul>
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
							<div class="logo_text"><a href="/">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
							endif;
							$customtheme_description = get_bloginfo( 'description', 'display' );
							if ( $customtheme_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $customtheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?></a></div>
						</div>

						<div class="navbar_right navbar_right_menu">
							<a href="#" data-panel="left" class="open-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/menu.png" alt="" title="" /></a>
						</div>
						<div class="navbar_right">
							<a href="#" data-panel="right" class="open-panel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/user.png" alt="" title="" /></a>
						</div>
						<!-- <div class="navbar_right">
							<a href="cart.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/cart.png" alt="" title="" /><span>3</span></a>
						</div> -->
					</div>
				
			
		





<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'customtheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			
		</div> -->
		<!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'customtheme' ); ?></button>
			 <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
		 -->
		<!-- #site-navigation -->
	<!-- </header>#masthead -->
