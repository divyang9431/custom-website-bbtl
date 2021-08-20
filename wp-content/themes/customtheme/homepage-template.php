<?php

/* Template Name: Home Template */

get_header();
?>


                  <!-- Slider -->
				  <div class="swiper-container slidertoolbar swiper-init" data-effect="slide" data-parallax="true" data-pagination=".swiper-pagination"  data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev">
                    <div class="swiper-wrapper">
                    
                      <div class="swiper-slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/slide1.jpg);">
		     <div class="slider_trans">
			 <div class="slider-caption">
			          <span class="subtitle" data-swiper-parallax="-60%">CREATIVE SOLUTION</span>
				  <h2 data-swiper-parallax="-100%">FOR MOBILE PROJECTS</h2>
				  
				  <p data-swiper-parallax="-30%">Design and create, and build the most wonderful place in the world. But it takes people to make the dream a reality.</p>
			 </div>
		      </div> 
                       </div>
                      <div class="swiper-slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/slide2.jpg);">
			<div class="slider_trans">		  
				<div class="slider-caption">
				<span class="subtitle" data-swiper-parallax="-60%">MULTIPURPOSE DESIGNS</span>
				<h2 data-swiper-parallax="-100%">WITH BEAUTIFUL</h2>
				
				<p data-swiper-parallax="-30%">You can design and create, and build the most wonderful place in the world. But it takes people to make the dream a reality.</p>
				</div>	
			</div>	
                      </div>
                      <div class="swiper-slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/slide3.jpg);">
			<div class="slider_trans">		  
				<div class="slider-caption">
				<span class="subtitle" data-swiper-parallax="-60%">WEB AND NATIVE</span>
				<h2 data-swiper-parallax="-100%">READY FOR APPS</h2>
				
				<p data-swiper-parallax="-30%">You can design and create, and build the most wonderful place in the world. But it takes people to make the dream a reality.</p>
				</div>
                       </div>
		   </div> 		   
                    </div>
                    <div class="swiper-pagination"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>	
                  </div>
			  
		 <div class="swiper-container-toolbar swiper-toolbar swiper-init" data-effect="slide" data-slides-per-view="1" data-slides-per-group="1" data-space-between="0" data-pagination=".swiper-pagination-toolbar">
			<div class="swiper-pagination-toolbar"></div>
			<div class="swiper-wrapper">
			  <div class="swiper-slide toolbar-icon">
				<a href="about.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/users.png" alt="" title="" /><span>ABOUT</span></a>
			        <a href="features.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/features.png" alt="" title="" /><span>FEATURES</span></a>
				<a href="#" data-popup=".popup-login" class="open-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/lock.png" alt="" title="" /><span>LOGIN</span></a>
				<a href="blog.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/blog.png" alt="" title="" /><span>JOURNAL</span></a>
				<a href="photos.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/photos.png" alt="" title="" /><span>PHOTOS</span></a>
				<a href="contact.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/contact.png" alt="" title="" /><span>CONTACT</span></a>
			  </div> 
			  <div class="swiper-slide toolbar-icon">
				  <a href="shop.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/shop.png" alt="" title="" /><span>SHOP</span></a>
				  <a href="music.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/music.png" alt="" title="" /><span>MUSIC</span></a>
				  <a href="form.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/form.png" alt="" title="" /><span>CUSTOM FORM</span></a>
				  <a href="#" data-popup=".popup-social" class="open-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/twitter.png" alt="" title="" /><span>SOCIAL</span></a>
				  <a href="videos.html" data-view=".view-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/video.png" alt="" title="" /><span>VIDEOS</span></a>
				  <a href="tel:12345678" class="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blue/phone.png" alt="" title="" /><span>CALL NOW!</span></a>
			   </div>

			</div>
		  </div>	

			  
            </div>
          </div>
        </div>



      </div>
    </div>

	
    <!-- Login Popup -->
    <div class="popup popup-login">
        <div class="content-block">
            <h4>LOGIN</h4>
            <div class="loginform">
                <form id="LoginForm" method="post">
                    <input type="text" name="Username" value="" class="form_input required" placeholder="username" />
                    <input type="password" name="Password" value="" class="form_input required" placeholder="password" />
                    <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">Forgot Password?</a></div>
                    <input type="submit" name="submit" class="form_submit" id="submitlogin" value="SIGN IN" />
                </form>
                <div class="signup_bottom">
                    <p>Don't have an account?</p>
                    <a href="#" data-popup=".popup-signup" class="open-popup">SIGN UP</a>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

    <!-- Register Popup -->
    <div class="popup popup-signup">
        <div class="content-block">
            <h4>REGISTER</h4>
            <div class="loginform">
                <form id="RegisterForm" method="post">
                    <input type="text" name="Username" value="" class="form_input required" placeholder="Username" />
                    <input type="text" name="Email" value="" class="form_input required" placeholder="Email" />
                    <input type="password" name="Password" value="" class="form_input required" placeholder="Password" />
                    <input type="submit" name="submit" class="form_submit" id="submitregister" value="SIGN UP" />
                </form>
		<h5>- OR REGISTER WITH A SOCIAL ACCOUNT -</h5>
		<div class="signup_social">
			<a href="http://www.facebook.com/" class="signup_facebook external">FACEBOOK</a>
			<a href="http://www.twitter.com/" class="signup_twitter external">TWITTER</a>            
		</div>		
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
	
    <!-- Forgot Password Popup -->
    <div class="popup popup-forgot">
        <div class="content-block">
            <h4>FORGOT PASSWORD</h4>
            <div class="loginform">
                <form id="ForgotForm" method="post">
                    <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
                    <input type="submit" name="submit" class="form_submit" id="submitforgot" value="RESEND PASSWORD" />
                </form>
                <div class="signup_bottom">
                    <p>Check your email and follow the instructions to reset your password.</p>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
	
    <!-- Social Icons Popup -->
    <div class="popup popup-social">
    <div class="content-block">
      <h4>Social Share</h4>
      <p>Share icons solution that allows you share and increase your social popularity.</p>
      <ul class="social_share">
      <li><a href="http://twitter.com/" class="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/twitter.png" alt="" title="" /><span>TWITTER</span></a></li>
      <li><a href="http://www.facebook.com/" class="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/facebook.png" alt="" title="" /><span>FACEBOOK</span></a></li>
      <li><a href="http://plus.google.com" class="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/gplus.png" alt="" title="" /><span>GOOGLE</span></a></li>
      <li><a href="http://www.dribbble.com/" class="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/dribbble.png" alt="" title="" /><span>DRIBBBLE</span></a></li>
      <li><a href="http://www.linkedin.com/" class="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/linkedin.png" alt="" title="" /><span>LINKEDIN</span></a></li>
      <li><a href="http://www.pinterest.com/" class="external"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/pinterest.png" alt="" title="" /><span>PINTEREST</span></a></li>
      </ul>
      <div class="close_popup_button"><a href="#" class="close-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/black/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>
   

<?php
get_sidebar();
get_footer();
