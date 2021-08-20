<?php 
//echo get_template_directory_uri();
//bloginfo('tempalte_directory');	
?>
<?php
get_header();
?>

<body>
	
	<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="265990080230354">
      </div>
	
 <!-- Preloading -->
<div id="preloader">
    <div class="spinner">
    </div>
</div>  
    
<!-- Wrapper --> 
<div class="wrapper top_60 container">
<div class="row">
        
<!-- Profile Section
================================================== --> 
<div class="col-lg-3 col-md-4">
    <div class="profile">
        <div class="profile-name">
            <span class="name">Divyang Patel</span><br>
            <span class="job">Creative Web Designer</span>
        </div>
        <figure class="profile-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/profile.jpg" alt="">
        </figure> 
        <ul class="profile-information">
            <li></li>
            <li><p><span>Name :</span> Divyang Patel</p></li>
            <li><p><span>Birthday :</span> 01 July 1994</p></li>
            <li><p><span>Phone :</span> <a href="tel:+917359800438">+91 73598 00438</a></p></li>
            <li><p><span>WhatsApp :</span> <a href="https://wa.me/917359800438?text=Hello..!" target="_blank">+91 73598 00438</a></p></li>
			<li><p><span>Email :</span> <a href="mailto:info@divyanghp.in">info@divyanghp.in</a></p></li>
            <li><p><span>Skype :</span> <a href="skype:pateldivyang9431_1?chat">pateldivyang9431_1</a></p></li>
			<li><p><span>Job :</span> Freelancer</p></li>
        </ul>
        <div class="col-md-12 abc">
            <button class="site-btn icon">Download Cv <i class="fa fa-download" aria-hidden="true"></i></button>
        </div>
    </div>
</div>

<!-- Page Tab Container Div -->   
<div id="ajax-tab-container" class="col-lg-9 col-md-8 tab-container">
    
<!-- Header
================================================== --> 
<div class="row">
    <header class="col-md-12">
        <nav>
            <div class="row">
                <!-- navigation bar -->
                <div class="col-md-8 col-sm-8 col-xs-4">
					<?php wp_nav_menu(array('theme_location'=> 'primary-menu', 'menu_class'=> 'tabs') ) ?>
                    <ul class="tabs abc">
                       <li class="tab">
                            <a class="home-btn" href="#home"><i class="fa fa-home" aria-hidden="true"></i></a>
                       </li>
                       <li class="tab"><a href="#resume">RESUME</a></li>
                       <li class="tab abc"><a href="#portfolio">PORTFOLIO</a></li>
                       <li class="tab abc"><a href="#blog">BLOG</a></li>
                       <li class="tab"><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-8 dynamic">
                    <a href="mailto:info@divyanghp.in"><button class="pull-right site-btn icon hidden-xs">Hire Me <i class="fa fa-paper-plane" aria-hidden="true"></i></button></a>
                    <div class="hamburger pull-right hidden-lg hidden-md"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div class="hidden-md social-icons pull-right"> 
                        <a class="fb" href="https://www.facebook.com/divyang1794" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
						<a class="ins" href="https://instagram.com/divyang9431" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a class="tw" href="https://twitter.com/divyang9431" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a class="fb" href="https://www.linkedin.com/in/divyang9431/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                    </div>
                </div>
            </div>
        </nav>
    </header>
        
    <!-- Page Content
    ================================================== --> 
    <div class="col-md-12">
        <div id="content" class="panel-container">
          
            <!-- Home Page
            ================================================== -->  
            <div id="home">
                <!-- Text Section -->
                <div class="row">
                    <section class="about-me line col-md-12 padding_30 padbot_45">
                    <div class="section-title"><span></span><h2>About Me</h2></div>
                    <p class="top_30">Enthusiastic and self-motivated Web Designer with 3+ years of experience in web design. Eager to comprehensive experience with Visual Design, Typography, Responsive, Frontend development, UI-UX and Mobile Web & Custom CMS design in E-commerce and B2B niches. Redesigned an international client website resulting in 40% increase in conversions and implemented an SEO-optimized design that boosted traffic by 100%.
                        <br>
                        <br> Created complex graphics and professional designs for a variety of businesses, organizations, professionals and individuals, including custom graphic and logo design. Provided web solutions and develop websites and web applications based on specific business needs for promotions, presentations, customer service and online services. </p>
                </section>
                </div>
                <!-- My Services Section -->
                <div class="row">
                    <section class="services line graybg col-md-12 padding_50 padbot_50">
                    <div class="section-title bottom_45"><span></span><h2>My Services</h2></div>
                    <div class="row">
                        <!-- a service -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <i class="flaticon-html"></i>
                                </div>
                                <span class="title">Web Development</span>
                                <p class="little-text">I have been working on web design for 10 years.</p>
                            </div>
                        </div>
                        <!-- a service -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <i class="flaticon-attach"></i>
                                </div>
                                <span class="title">Branding Identity</span>
                                <p class="little-text">We will make you a brand that is catchy and leaves a trace.</p>
                            </div>
                        </div>
                        <!-- a service -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <i class="flaticon-vector"></i>
                                </div>
                                <span class="title">Illustrator</span>
                                <p class="little-text">I have been working on illustration design for 3+ years.</p>
                            </div>
                        </div>
                        <!-- a service -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service">
                                <div class="icon">
                                    <i class="flaticon-schedule"></i>
                                </div>
                                <span class="title">Fast Delivery</span>
                                <p class="little-text">I deliver your business as fast as possible.</p>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
                <!-- Skills Section -->
                <div class="row">
                    <section class="design-skills col-md-6 padding_60 padbot_50">
                        <div class="section-title bottom_45"><span></span><h2>Design Skills</h2></div>
                        <ul class="skill-list">
                            <li> 
                                <h3>Photoshop</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:90%;"></div>
                                </div>
                            </li>
                            <li> 
                                <h3>CorelDraw</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:75%;"></div>
                                </div>
                            </li>
                            <li> 
                                <h3>Illustrator</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:60%;"></div>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <section class="code-skills col-md-6 padding_60">
                        <div class="section-title bottom_45"><span></span><h2>Code Skills</h2></div>
                        <ul class="skill-list">
                            <li> 
                                <h3>WordPress</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:90%;"></div>
                                </div>
                            </li>
                            <li> 
                                <h3>HTML5</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:80%;"></div>
                                </div>
                            </li>
                            <li> 
                                <h3>CSS3</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:70%;"></div>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
            
            <!-- Resume Page
            ================================================== --> 
            <div id="resume">
                <!-- Resume Section -->
                <div class="row">
                    <section class="education">
                    <div class="section-title top_30"><span></span><h2>Resume</h2></div>
                        <div class="row">
                            <!-- Working History -->
                            <div class="working-history col-md-6 padding_15 padbot_30">
                                <ul class="timeline col-md-12 top_30">
                                    <li><i class="fa fa-suitcase" aria-hidden="true"></i><h2 class="timeline-title">Working History</h2></li>
                                    <!-- a work -->
                                    <li><h3 class="line-title">Senior Developer</h3>
                                        <span>2019 - Present</span>
                                        <p class="little-text">Brainbean Technolabs @ Anand</p>
                                    </li>
                                   <!-- a work -->
                                    <li><h3 class="line-title">IT Admin & Web Designer</h3>
                                        <span>2015 - 2019</span>
                                        <p class="little-text">KaivalGyanpith Gurugadi Sarsapuri @ Sarsa</p>
                                    </li>
                                   <!-- a work -->
                                    <li><h3 class="line-title">Business Startup</h3>
                                        <span>2013 - 2020</span>
                                        <p class="little-text">Patel Printing Point Now Change Name to MidZone (Startup 2019) at Anand </p>
                                    </li>
                                </ul> 
                            </div>  
                            <!-- Education History -->
                            <div class="education-history col-md-6 padding_15 padbot_30">
                                <ul class="timeline col-md-12 top_30">
                                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i><h2 class="timeline-title">Education History</h2></li>
                                    <!-- a work -->
                                    <li><h3 class="line-title">Diploma Networking & Hardware</h3>
                                        <span>2018 - 2019</span>
                                        <p class="little-text"></p>
                                    </li>
                                   <!-- a work -->
                                    <li><h3 class="line-title t2">Diploma in Information Technology Management</h3>
                                        <span>2010 - 2013</span>
                                        <p class="little-text"></p>
                                    </li>
                                   <!-- a work -->
                                    <li><h3 class="line-title">C Programing</h3>
                                        <span>2009 - 2009</span>
                                        <p class="little-text"></p>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Clients Section -->
                <div class="row">
                    <section class="clients col-md-12 graybg padding_45 padbot_45">
                        <div class="section-title bottom_30"><span></span><h2>Associated With</h2></div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/aws.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/digitalocean.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/godaddy.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/razorpay.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Testimonials -->
                <div class="row">
                    <section class="testimonials bottom_30">
                        <div class="section-title top_60 bottom_30"><span></span><h2>Testimonials</h2></div>
                        <div class="owl-carousel row" data-items="3" data-autoplay="3000" data-pagination="true">
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="images/user.png" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Jatin Khanwani</span>
                                            <span class="job">Freelancer</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Great Working! he finished our work wonderfully and just in time. thanks for everything.</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="images/user.png" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Daxesh Patel</span>
                                            <span class="job">MidZone (Founder)</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Our logo and business card design look great. Thanks Divyang.</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="images/user.png" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Arpit Patel</span>
                                            <span class="job">Librarian - C P Patel & F H Shah Commerce College</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Divyang is a very creative and talented web designer. You have made our college library website very nice. I do not hesitate to work again.</p>
                                </div>
                            </div> 
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="images/user.png" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Nirav Patel</span>
                                            <span class="job">Freelancer</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Great logo designer! he finished our work wonderfully and just in time. thanks for everything.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
           
        
            <!-- Contact Page
            ================================================== --> 
            <div id="contact">
                <div class="row">
                    <!-- Contact Form -->
                    <section class="contact-form col-md-6 padding_30 padbot_45">
                        <div class="section-title top_15 bottom_30"><span></span><h2>Contact Form</h2></div>
                        <form class="site-form" action="send.php" method="post">
                            <table width="400" border="0" cellspacing="2" cellpadding="0">
                            <tr>
                            <td><input class="site-input" name="name" type="text" id="name" size="32" placeholder="Name" required></td>
                            </tr><tr>
                            <td><input class="site-input" name="email" type="email" id="email" size="32" placeholder="E-mail" required></td>
                            </tr>
                            <tr>
                            <td><textarea class="site-area bodytext" name="comment" cols="45" rows="6" id="comment" placeholder="Message" required></textarea></td>
                            </tr>
							<tr>
                            <td align="left" valign="top"><input class="site-btn" type="submit" name="Submit" value="Submit"></td>
                            </tr>
                            </table>
                            </form>   
                    </section>
                    <!-- Contact Informations -->
                    <section class="contact-info col-md-6 padding_30 padbot_45">
                        <div class="section-title top_15 bottom_30"><span></span><h2>Contact Informations</h2></div>
                        <ul>
                            <li><span>Address:</span> Anand (Gujarat) 388001</li>
							<li><span>Phone:</span> <a href="tel:+917359800438">+91 7359 800 438</a></li>
                            <li><span>E-mail:</span> <a href="mailto:info@divyanghp.in">info@divyanghp.in</a></li>
                            <li><span>Skype:</span> <a href="skype:pateldivyang9431_1?chat"> pateldivyang9431_1</a></li>
							<li><span>Job:</span> Freelancer</li>
                            <li>
                                <div class="social-icons top_15"> 
                                    <a class="fb" href="https://www.facebook.com/divyang1794" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
						<a class="ins" href="https://instagram.com/divyang9431" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a class="tw" href="https://twitter.com/divyang9431" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a class="fb" href="https://www.linkedin.com/in/divyang9431/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                                </div>
                            </li>
                        </ul>
                    </section>
                    <!-- Contact Map -->
                    <section class="contact-map col-md-12 top_15 bottom_15 abc">
                        <div class="section-title bottom_30"><span></span><h2>Contact Map</h2></div>  
						<iframe src="#" ></iframe>
                    </section>
                </div>
            </div>
            
        </div><!-- Content - End -->
     </div> <!-- col-md-12 end -->
</div><!-- row end -->
<!-- Footer
================================================== --> 
<footer>
    <div class="footer col-md-12 top_30 bottom_30">
		<div class="copyright1 name col-md-4 hidden-md hidden-sm hidden-xs"><a href="/">Home </a> | <a href="/privacy-policy.html">Privacy Policy</a> | <a href="/terms-conditions.html">Terms & Conditions</a></div>
        <div class="copyright col-lg-8 col-md-12">© 1994-2020 All rights reserved. Designed by <a href="#">Divyang Patel</a> </div>  
    </div>
</footer>
    
</div> <!-- Tab Container - End -->
</div> <!-- Row - End --> 
</div> <!-- Wrapper - End -->  
	


</body>

<?php get_footer() ?>