<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Theme
 */

?>


        <!-- footer and footer card-->
        <div class="footer">

		<div class="card card-style mb-0">
    <a href="#" class="footer-title pt-4"><?php bloginfo( 'name' ); ?></a>
    <p class="text-center font-12 mt-n1 mb-3 opacity-70">
        Put a little <span class="color-highlight">color</span> in  your life
    </p>
    <p class="boxed-text-l">
        Built to match the design trends and give your page the awesome facelift it deserves.
    </p>
    <div class="text-center mb-3">
        <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-phone"><i class="fa fa-phone"></i></a>
        <a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm mr-1 shadow-l bg-red2-dark"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-highlight color-white"><i class="fa fa-arrow-up"></i></a>
    </div>
    <p class="footer-copyright pb-3 mb-1">Copyright © <span class="copyright-year"></span>. All rights reserved.</p>
</div>
<div class="footer-card card shape-rounded" data-card-height="230">
    <div class="card-overlay bg-highlight opacity-95"></div>
    <div class="card-bg preload-img" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/pictures/20s.jpg"></div>
</div>

<script type="text/javascript">
    //Activating the function to show the shape at the bottom
    $.card_extender();
</script>

		</div>  
    </div>    
    <!-- end of page content-->
    
    <!-- menu-share.html -->
    <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="420" 
         data-menu-effect="menu-over">

		 <h1 class="text-center font-700 font-26 mt-3 pt-2">Share Azures</h1>
<p class="boxed-text-xl under-heading">
    Share our page with the world, increase <br>
    your page exposure with the world.
</p>
<div class="divider divider-margins"></div>

<div class="row text-center mr-4 ml-4 mb-0">
    <div class="col-3 mb-n2">
        <a href="#" class="shareToFacebook icon icon-l bg-facebook rounded-s shadow-l"><i class="fab fa-facebook-f font-22"></i><br></a>
        <p class="font-11 opacity-70">Facebook</p>
    </div>
    <div class="col-3 mb-n2">
        <a href="#" class="shareToTwitter icon icon-l bg-twitter rounded-s shadow-l"><i class="fab fa-twitter font-22"></i><br></a>
        <p class="font-11 opacity-70">Twitter</p>
    </div>
    <div class="col-3 mb-n2">
        <a href="#" class="shareToLinkedIn icon icon-l bg-linkedin rounded-s shadow-l"><i class="fab fa-linkedin-in font-22"></i><br></a>
        <p class="font-11 opacity-70">LinkedIn</p>
    </div>
    <div class="col-3 mb-n2">
        <a href="#" class="shareToMail icon icon-l bg-mail rounded-s shadow-l"><i class="fa fa-envelope font-22"></i><br></a>
        <p class="font-11 opacity-70">Email</p>
    </div>
    <div class="col-3 mb-n2">
        <a href="#" class="shareToWhatsApp icon icon-l bg-whatsapp rounded-s shadow-l"><i class="fab fa-whatsapp font-22"></i><br></a>
        <p class="font-11 opacity-70">WhatsApp</p>
    </div>
    <div class="col-3 mb-n2">
        <a href="#" class="shareToCopyLink icon icon-l bg-blue2-dark rounded-s shadow-l"><i class="fa fa-link font-22"></i><br></a>
        <p class="font-11 opacity-70">Copy Link</p>
    </div>
    <div class="col-3 mb-n2">
        <a href="#" class="shareToPinterest icon icon-l bg-pinterest rounded-s shadow-l"><i class="fab fa-pinterest-p font-22"></i><br></a>
        <p class="font-11 opacity-70">Pinterest</p>
    </div>
    <div class="col-3 mb-n2">
        <a href="#" class="close-menu icon icon-l bg-red2-dark rounded-s shadow-l"><i class="fa fa-times font-22"></i><br></a>
        <p class="font-11 opacity-70">Close</p>
    </div>
</div>

<div class="divider divider-margins mt-n1 mb-3"></div>
<p class="text-center font-10 mb-0">Copyright © <span class="copyright-year"></span>. All rights reserved.</p>


    </div>    
    
	<!-- menu-colors.html -->
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="510" 
         data-menu-effect="menu-over"> 

		 <div class="card header-card shape-rounded h-40">
    <div class="card-overlay bg-highlight opacity-95"></div>
    <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
</div>

<h1 class="text-center color-white mt-4 font-35 font-800">AZURES</h1>
<p class="text-center color-white font-12 mt-n1 pb-2 mb-3">Put a little color in your life</p>

<div class="card card-style">
    <div class="highlight-changer pt-3 pb-2">
        <p class="text-center">
            Azures is packed with a beautiful color scheme.<br>Tap on your favorite! The page will adapt!
        </p>
        <a href="#" data-change-highlight="blue2"><i class="fa fa-circle color-blue2-dark"></i><span class="color-blue2-light">Default</span></a>
        <a href="#" data-change-highlight="red2"><i class="fa fa-circle color-red1-dark"></i><span class="color-red2-light">Red</span></a>    
        <a href="#" data-change-highlight="orange"><i class="fa fa-circle color-orange-dark"></i><span class="color-orange-light">Orange</span></a>    
        <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span class="color-pink2-light">Pink</span></a>    
        <a href="#" data-change-highlight="magenta2"><i class="fa fa-circle color-magenta2-dark"></i><span class="color-magenta2-light">Purple</span></a>    
        <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span class="color-aqua-light">Aqua</span></a>      
        <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span class="color-teal-light">Teal</span></a>      
        <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span class="color-mint-light">Mint</span></a>      
        <a href="#" data-change-highlight="green2"><i class="fa fa-circle color-green2-dark"></i><span class="color-green2-light">Green</span></a>    
        <a href="#" data-change-highlight="green1"><i class="fa fa-circle color-green1-dark"></i><span class="color-green1-light">Grass</span></a>       
        <a href="#" data-change-highlight="yellow2"><i class="fa fa-circle color-yellow2-dark"></i><span class="color-yellow2-light">Sunny</span></a>    
        <a href="#" data-change-highlight="yellow1"><i class="fa fa-circle color-yellow1-dark"></i><span class="color-yellow1-light">Goldish</span></a>
        <a href="#" data-change-highlight="brown1"><i class="fa fa-circle color-brown1-dark"></i><span class="color-brown1-light">Wood</span></a>    
        <a href="#" data-change-highlight="dark1"><i class="fa fa-circle color-dark1-dark"></i><span class="color-dark1-light">Night</span></a>
        <a href="#" data-change-highlight="dark2"><i class="fa fa-circle color-dark2-dark"></i><span class="color-dark2-light">Dark</span></a>
        <div class="clearfix"></div>
    </div>
</div>
<a href="#" class="close-menu btn btn-full btn-margins rounded-sm shadow-l bg-highlight btn-m font-900 text-uppercase mb-0">Close color Menu</a>
 
		 
    </div>
    
	<!-- menu-main -->
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-active="nav-welcome"
         data-menu-effect="menu-over"> 

		 <div class="menu-header">
    <a href="#" data-toggle-theme class="border-right-0"><i class="fa font-12 color-yellow1-dark fa-lightbulb"></i></a>
    <a href="#" data-menu="menu-highlights" class="border-right-0"><i class="fa font-12 color-green1-dark fa-brush"></i></a>
    <a href="#" data-menu="menu-share" class="border-right-0"><i class="fa font-12 color-red2-dark fa-share-alt"></i></a>
    <a href="#" class="border-right-0"><i class="fa font-12 color-blue2-dark fa-cog"></i></a>
    <a href="#" class="border-right-0"><i class="fa font-12 color-red2-dark fa-times"></i></a>
</div>

<div class="menu-logo text-center">
    <a href="#"><?php $user = wp_get_current_user(); if ( $user ) : ?> <img class="rounded-circle bg-highlight" width="80" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" /> <?php endif; ?></a>
    <h1 class="pt-3 font-800 font-28 text-uppercase"><?php global $current_user; wp_get_current_user() ; echo $current_user->user_login; ?></h1>
    <p class="font-11 mt-n2">Put a little <span class="color-highlight">color</span> in your life.</p>
</div>

<div class="menu-items">
    <h5 class="text-uppercase opacity-20 font-12 pl-3">Menu</h5>
    
    <a id="nav-welcome" href="index.html">
        <i data-feather="home" data-feather-line="1" data-feather-size="16" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-dark"></i>
        <span>Welcome</span>
        <em class="badge bg-highlight color-white">HOT</em>
        <i class="fa fa-circle"></i>
    </a>
    <a id="nav-starters" href="pages-starters-list.html">
        <i data-feather="star" data-feather-line="1" data-feather-size="18" data-feather-color="yellow1-dark" data-feather-bg="yellow1-fade-dark"></i>
        <span>Starters</span>
        <i class="fa fa-circle"></i>
    </a>
    <a id="nav-features" href="components.html">
        <i data-feather="heart" data-feather-line="1" data-feather-size="16" data-feather-color="red2-dark" data-feather-bg="red2-fade-dark"></i>
        <span>Features</span>
        <i class="fa fa-circle"></i>
    </a>
    <a id="nav-pages" href="pages.html">
        <i data-feather="file" data-feather-line="1" data-feather-size="16" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-dark"></i>
        <span>Pages</span>
        <i class="fa fa-circle"></i>
    </a>
    <a id="nav-media" href="media.html">
        <i data-feather="image" data-feather-line="1" data-feather-size="16" data-feather-color="green1-dark" data-feather-bg="green1-fade-dark"></i>
        <span>Media</span>
        <i class="fa fa-circle"></i>
    </a>
    <a href="#" data-submenu="sub-contact">
        <i data-feather="mail" data-feather-line="1" data-feather-size="16" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-dark"></i>
        <span>Contact</span>
        <strong class="badge bg-highlight color-white">1</strong>
        <i class="fa fa-circle"></i>
    </a>
    <div id="sub-contact" class="submenu">
        <a href="contact.html" id="nav-contact"><i class="fa fa-envelope color-blue2-dark font-16 opacity-30"></i><span>Email</span><i class="fa fa-circle"></i></a>
        <a href="#"><i class="fa fa-phone color-green1-dark font-16 opacity-50"></i><span>Phone</span><i class="fa fa-circle"></i></a>
        <a href="#"><i class="fab fa-whatsapp color-whatsapp font-16 opacity-30"></i><span>WhatsApp</span><i class="fa fa-circle"></i></a>
    </div>
    <a id="nav-settings" href="settings.html">
        <i data-feather="settings" data-feather-line="1" data-feather-size="16" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-dark"></i>
        <span>Settings</span>
        <i class="fa fa-circle"></i>
    </a>
    <a href="#" class="close-menu">
        <i data-feather="x" data-feather-line="3" data-feather-size="16" data-feather-color="red2-dark" data-feather-bg="red2-fade-dark"></i>
        <span>Close</span>
        <i class="fa fa-circle"></i>
    </a>
</div>

<div class="text-center pt-2">
    <a href="#" class="icon icon-xs mr-1 rounded-s bg-facebook"><i class="fab fa-facebook"></i></a>
    <a href="#" class="icon icon-xs mr-1 rounded-s bg-twitter"><i class="fab fa-twitter"></i></a>
    <a href="#" class="icon icon-xs mr-1 rounded-s bg-instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" class="icon icon-xs mr-1 rounded-s bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
    <a href="#" class="icon icon-xs rounded-s bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
    <p class="mb-0 pt-3 font-10 opacity-30">Copyright © <span class="copyright-year"></span>. All rights reserved</p>
</div>
 
    </div>
    
    <!-- Be sure this is on your main visiting page, for example, the index.html page-->
    <!-- Install Prompt for Android -->
    <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l"
         data-menu-height="350" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-l mt-4">
            <img class="rounded-l mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">Azures on your Home Screen</h4>
            <p>
                Install Azures on your home screen, and access it just like a regular app. It really is that simple!
            </p>
            <a href="#" class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Add to Home Screen</a><br>
            <a href="#" class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Maybe later</a>
            <div class="clear"></div>
        </div>
    </div>   

    <!-- Install instructions for iOS -->
    <div id="menu-install-pwa-ios" 
        class="menu menu-box-bottom menu-box-detached rounded-l"
         data-menu-height="320" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-xl mt-4">
            <img class="rounded-l mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">Azures on your Home Screen</h4>
            <p class="mb-0 pb-3">
                Install Azures on your home screen, and access it just like a regular app.  Open your Safari menu and tap "Add to Home Screen".
            </p>
            <div class="clear"></div>
            <a href="#" class="pwa-dismiss close-menu color-highlight font-800 opacity-80 text-center text-uppercase">Maybe later</a><br>
            <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
        </div>
    </div>

    
</div>    


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/custom.js"></script>


	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'customtheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'customtheme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'customtheme' ), 'customtheme', '<a href="https://divyanghp.in">Divyang Patel</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
