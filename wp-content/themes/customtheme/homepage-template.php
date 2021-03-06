<?php

/* Template Name: Home Template */

get_header();
?>
     
 <!-- Homepage Slider-->
 <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Meet Azures</h1>
                    <p class="boxed-text-xl">
                        Azures brings beauty and colors to your Mobile device with a stunning user interface to match.
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/pictures/17m.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Beyond Powerful</h1>
                    <p class="boxed-text-xl">
                        Azures is a Mobile Web App Kit, fully featured, supporting PWA and Native Dark Mode!
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/pictures/8m.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">A-Level Quality</h1>
                    <p class="boxed-text-xl">
                        We build custom, premium products, that are easy to use and provide all features for you! 
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/pictures/14m.jpg"></div>
            </div>
        </div>

        <div class="content mt-0">
            <div class="row">
                <div class="col-6">
                    <a href="#" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight">Purchase</a>
                </div>
                <div class="col-6">
                    <a href="#" class="btn btn-full btn-border btn-m rounded-s text-uppercase font-900 shadow-l border-highlight color-highlight">Contact US</a>
                </div>
            </div>
        </div>

        

        <div class="content mb-2">
            <h5 class="float-left font-16 font-500">Quality Features</h5>
            <a class="float-right font-12 color-highlight mt-n1" href="#">View All</a>
            <div class="clearfix"></div>
        </div>

        <div class="double-slider text-center owl-carousel owl-no-dots">
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="shield" data-feather-line="1" data-feather-size="45" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i>
                <h5 class="font-16">Elite Quality</h5>
                <p class="line-height-s font-11">
                    Built with care and <br>every detail in mind
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="smartphone" data-feather-line="1" data-feather-size="45" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i>
                <h5 class="font-16">PWA Ready</h5>
                <p class="line-height-s font-11">
                    Just add it to your <br>Home Screen
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="sun" data-feather-line="1" data-feather-size="45" data-feather-color="yellow1-dark"  data-feather-bg="yellow1-fade-light"></i>
                <h5 class="font-16">Eye Friendly</h5>
                <p class="line-height-s font-11">
                    Light & Dark and <br> Auto Dark Detection
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="smile" data-feather-line="1" data-feather-size="45" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i>
                <h5 class="font-16">Easy Code</h5>
                <p class="line-height-s font-11">
                    Built for you and me <br> copy and paste code.
                </p>
            </div>
        </div>
            

        <div class="card mt-4 preload-img" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/pictures/20s.jpg">
            <div class="card-body">
                <h4 class="color-white">Built For You</h4>
                <p class="color-white">
                    Our products suit your website, running incredibly fast and provide an unmatched UX and UI.
                </p>
                <div class="card card-style ml-0 mr-0 bg-white">
                    <div class="row mt-3 pt-1 mb-3">
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="globe" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="blue2-dark" 
                               data-feather-bg="blue2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Mobile<br>Website</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="smartphone" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="dark2-dark" 
                               data-feather-bg="dark2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Mobile<br>PWA</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="user" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="brown2-dark" 
                               data-feather-bg="brown2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">Mobile<br>Website</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="box" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="green1-dark" 
                               data-feather-bg="green1-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">Mobile<br>PWA</h5>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
        </div>
        
        <div class="card card-style">
            <div class="content text-center">
                <h2>Ready in 3 Steps</h2>
                <p class="boxed-text-xl">
                    Our products are designed to simplify the way you code a page, with focus on easy, copy and paste.
                </p>
            </div>
            <div class="divider divider-small mb-3 bg-highlight"></div>
            
            <div class="content">
                <div class="d-flex mb-4 pb-3">
                    <div>
                        <i class="far fa-star color-yellow1-dark fa-3x pt-3 icon-size"></i>
                    </div>
                    <div>
                        <h5 class="font-16 font-600">Find your Style</h5>
                        <p>
                            We've included multiple styles you can choose to match your exact project needs.
                        </p>
                    </div>
                </div>            
                <div class="d-flex mb-4 pb-3">
                    <div>
                        <i class="fa fa-mobile-alt color-blue2-dark fa-3x pt-3 icon-size"></i>
                    </div>
                    <div>
                        <h5 class="font-16 font-600">Paste your Blocks</h5>
                        <p>
                            Just choose the blocks you like, copy and past them, add your text and that's it!
                        </p>
                    </div>
                </div>            
                <div class="d-flex mb-2">
                    <div>
                        <i class="far fa-check-circle color-green1-dark fa-3x pt-3 icon-size"></i>
                    </div>
                    <div>
                        <h5 class="font-16 font-600">Publish your Page</h5>
                        <p>
                            Done with copy pasting? Your mobile site is now ready! Publish it or create an app!
                        </p>
                    </div>
                </div>            
            </div>
        </div>
        
        <div class="card card-style preload-img" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/pictures/20s.jpg" data-card-height="350">
            <div class="card-center text-center">
                <p class="line-height-xl font-19 font-300 color-white pl-3 pr-3 mb-2">
                    This is a great product! Many components that we can use, and I really appreciate the support from Enabled. Very responsive and provides great solutions.
                </p>
                <p class="opacity-50 color-white">Envato Customer</p>
                <a href="#" class="btn btn-m rounded-s btn-border color-white border-white text-uppercase font-900">View Testimonials</a>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
        </div>
        
        <div class="card card-style">
            <div class="content">
                <h5 class="float-left font-16 font-600">Happy Customers</h5>
                <a class="float-right font-12 color-highlight mt-n1" href="#">View All</a>
                <div class="clearfix"></div>
                <p class="pt-2">
                    Over 30.000 people use our products, and we're always happy to see the positiv impact our products have had! Thank you!
                </p>
            </div>
            <div class="user-list-slider owl-carousel mt-3 mb-n1">
                <div class="icon-user">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/avatars/1s.png" width="55" height="55" class="rounded-xl owl-lazy shadow-l bg-gradient-blue2">
                    <p>Jane</p>
                </div>     
                <div class="icon-user">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/avatars/2s.png" width="55" height="55" class="rounded-xl owl-lazy shadow-l bg-gradient-red2">
                    <p>Craig</p>
                </div>  
                <div class="icon-user">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/avatars/1s.png" width="55" height="55" class="rounded-xl owl-lazy shadow-l bg-gradient-green1">
                    <p>Jane</p>
                </div>     
                <div class="icon-user">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/avatars/2s.png" width="55" height="55" class="rounded-xl owl-lazy shadow-l bg-gradient-brown1">
                    <p>Craig</p>
                </div>  
            </div>
        </div>
        
        <div class="content mb-3">
            <h5 class="float-left font-16 font-500">Products we Love</h5>
                <a class="float-right font-12 color-highlight mt-n1" href="#">View All</a>
            <div class="clearfix"></div>
        </div>
        
        <div class="double-slider owl-carousel owl-no-dots text-center">
            <div class="item bg-theme pb-3 rounded-m shadow-l">
                <div data-card-height="200" class="card mb-2 bg-29">
                    <h5 class="card-bottom color-white mb-2">Sticky Mobile</h5>
                    <div class="card-overlay bg-gradient opacity-70"></div>
                </div>  
                <p class="mb-3 pl-2 pr-2 pt-2 font-12">
                    Classic, elegant and powerful. A best seller.
                </p>
                <a href="#" class="btn btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900">View</a>
            </div>
            <div class="item bg-theme pb-3 rounded-m shadow-l">
                <div data-card-height="200" class="card mb-2 bg-18">
                    <h5 class="card-bottom color-white mb-2">Eazy Mobile</h5>
                    <div class="card-overlay bg-gradient opacity-70"></div>
                </div>  
                <p class="mb-3 pl-2 pr-2 pt-2 font-12">
                    A best seller, elegant multi use design.
                </p>
                <a href="#" class="btn btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900">View</a>
            </div>
            <div class="item bg-theme pb-3 rounded-m shadow-l">
                <div data-card-height="200" class="card mb-2 bg-11">
                    <h5 class="card-bottom color-white mb-2">Bars Mobile</h5>
                    <div class="card-overlay bg-gradient opacity-70"></div>
                </div>  
                <p class="mb-3 pl-2 pr-2 pt-2 font-12">
                    Modern sidebars and a very intuitive interface.
                </p>
                <a href="#" class="btn btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900">View</a>
            </div>
        </div>
        
        <div class="card card-style mt-4 shadow-l" data-card-height="150">
            <div class="card-center pl-3 pr-3">
                <h4 class="color-white">Did you know?</h4>     
                <p class="color-white mb-0 opacity-60">
                    We're the top selling Mobile Author on Envato. We value the quality of products and efficiency of our support!
                </p>
            </div>
            <div class="card-overlay bg-highlight opacity-90"></div>
        </div>
        
        <div class="card card-style text-center">
            <div class="content pb-2">
                <h1>
                    <i data-feather="gift" 
                       data-feather-line="1" 
                       data-feather-size="55" 
                       data-feather-color="red2-dark" 
                       data-feather-bg="red2-fade-dark">
                    </i>
                </h1>
                <h3 class="font-700 mt-2">Purchase Today</h3>
                <p class="font-12 mt-n1 color-highlight mb-3">Quality and Premium Features for You</p>
                <p class="boxed-text-xl">
                    Fast, easy to use and filled with features. Give your site the Mobile Feeling it deserves.
                </p>
                <a href="#" class="btn btn-center-xl btn-m text-uppercase font-900 bg-highlight rounded-sm shadow-l">Buy now - $25</a>
            </div>
        </div>
   

<?php
// get_sidebar();
get_footer();
