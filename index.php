<?php
$_SESSION['username']="Admin";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Multi Color</title>

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                
    
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
   
    <link rel="stylesheet" href="css/hero-slider-style.css">                              
   
    <link rel="stylesheet" href="css/magnific-popup.css">                                 
   
    <link rel="stylesheet" href="css/tooplate-style.css"> 



</head>

    <body>
        
       
        <div class="cd-hero">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">
                        
                        <a class="navbar-brand text-uppercase" href="#"><i class="fa fa-gears tm-brand-icon"></i>Multi Color</a>

                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active selected">
                                    <a class="nav-link" href="#0" data-no="1">Multi One <span class="sr-only">(current)</span></a>
                                </li>                                
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="2">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="3">Keep in touch</a>
                                </li>
				<li class="nav-item">
                                    <a class="nav-link" href="login.html" target="_self" data-no="4">Admin Login</a>
                                </li>
                            </ul>
                        </div>                        
                    </div>

                </nav>
            </div> 

            <ul class="cd-hero-slider">

                <!-- Page 1 Gallery One -->
                <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one">
                                     <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title tm-white"><span class="tm-white">Multi Color Image Gallery</span></h2>
                                        
                                    </div>
                                <?php
                                include_once 'includes/dbh.php';
                                $sql = "SELECT * FROM gallary ORDER BY orderGallery DESC"
                                $stmt = mysqli_stmt_init($conn); 
                                if(!mysqli_stmt_prepare($stmt,$sql)){
                                    echo"SQL statement failed";
                                }else{
                                    mysqli_stmt_excute($stmt);
                                     $result=mysqli_stmt_get_result)($stmt);
                                     while($row=mysqli_fetech_assoc($result)){
                                          <div class="grid-item">
                                    <figure class="effect-bubba">
                                         
                                      echo '<a href="index.html">view more
                                    <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                                                
                                                    
                                                  </a>
                                    </figure>'
                                     ?>
                                     </div>
                                        
                                   <?php
                                   if(isset($_SESSION['username'])){

                                    echo '<div class="Gallery-upload">
                                    <h2>Upload</h2>
                                    <form action="includes/uplode.php" method="post" enctype="multipart/form-data">
                                    <input type="text" name="filename" placeholder="File name..">
                                    <input type="text" name="filetitle" placeholder="Image title..">
                                     <input type="text" name="filedesc" placeholder="Image description..">
	                             <input type="file" name="file">
	                            <button type="submit" name="submit">UPLOAD</button>
    
                                    </form>
                                   </div>
                                  '
                                 
                                      <!-- Page 4 About -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="2">
                            <div class="row tm-white-box-margin-b">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                                            <h2 class="tm-text-title">About our team</h2>
                                            <p class="tm-text"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>              
                    </div> <!-- .cd-full-width -->

                </li>

                <!-- Page 5 Contact Us -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="3">
                            <div class="tm-contact-page">                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container">                                
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">Say hello to us!</h2>
                                                                                               
                                                
                                                <!-- contact form -->
                                                <form action="index.html" method="post" class="tm-contact-form">

                                                    <div class="form-group">
                                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                    </div>
                                        
                                                    <div class="form-group">                                                        
                                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                    </div>                                                        
                                                    
                                                    <div class="form-group">
                                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Your message" required></textarea>
                                                    </div> 

                                                    <button type="submit" class="pull-xs-right tm-submit-btn">Send</button>  
                                                
                                                </form>  
                                            </div>

                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">Tarbai park, Kolhapur</h2>
                                                <!-- google map goes here -->
                                                <div id="google-map"></div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>    

                        </div>
                        
                    </div> 
                </li>

        
</ul>
            <footer class="tm-footer">
            
                <div class="tm-social-icons-container text-xs-center">
                    <a href="https://www.facebook.com/" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                    <a href="https://plus.google.com/discover" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                    <a href="https://twitter.com/login?lang=en" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                    <a href="https://in.linkedin.com/" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                </div>

            </footer>
                    
        </div> 
        

        
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
                     <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>             
        <script src="js/hero-slider-main.js"></script>          
        <script src="js/jquery.magnific-popup.min.js"></script> 
        
        <script>

            function adjustHeightOfPage(pageNo) {

                var offset = 80;
                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }

                if($(window).width() >= 992) { offset = 120; }
                else if($(window).width() < 480) { offset = 40; }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight + offset
                                        + $('.tm-footer').height();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-one').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
				/* Gallery Two pop up
                -----------------------------------------*/
				$('.gallery-two').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                   
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });
        
                
                $('body').addClass('loaded');
                           
            });

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(16.713512,74.248749),
                    scrollwheel: false
                };
            
                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });
            
                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
        
            // DOM is ready
            $(function() {                
                loadGoogleMap(); // Google Map
            });

        </script>            

</body>
</html>