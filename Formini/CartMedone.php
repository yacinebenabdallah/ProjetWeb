<?php
session_start();
$_SESSION['id'] = 55;
ob_start();


?>
<html class="no-js" lang="en">
    <head>
    <script>

function valider() {

if( (document.form1.coupon.value != "") ) {

return true;
}
else {
//sinon on affiche un message
alert("No coupon code here !");

return false;
}
}
function achat() {
    if((document.form2.prix.value != "")&&(document.form2.prix.value >= 0))
    {

conf=confirm('would you like to continue this purchase ?');
if(conf)
{
return true;
} else {

return false;
}
    }
    else {
        alert("Can't continue this purchase !");
        return false;

    }
}

</script>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Eduhome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/et-line-icon.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
		<header class="top">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="header-top-left">
                                <p>HAVE ANY QUESTION ?  +216 53 888 628</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="header-top-right text-right">
                                <ul>
                                    <li><a href="login.php">login</a></li>
                                    <li><a href="signup.php">signup</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-area two header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="logo">
                                <a href="index.html"><img src="img/logo/logo2.png" alt="eduhome" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-6">
                            <div class="content-wrapper text-right">
                                <!-- Main Menu Start -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">Home</a>
                                            </li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="courses.php">courses</a>
                                                <ul>
                                                    <li><a href="courses.php">courses</a></li>
                                                    <li><a href="course-details.php">courses details</a></li>
                                                    <li><a href="packs.php">packs</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="event.php">event</a>
                                                <ul>
                                                    <li><a href="event.php">event</a></li>
                                                    <li><a href="event-details.php">event details</a></li>
                                                </ul>
                                            </li>
                                            <li class="hidden-sm"><a href="teacher.php">teacher</a>
                                                <ul>
                                                    <li><a href="teacher.php">teacher</a></li>
                                                    <li><a href="teacher-details.php">teacher details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.php">blog</a>
                                                <ul>
                                                    <li><a href="blog.php">blog</a></li>
                                                    <li><a href="blog-details.php">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li class="cart-link1"><a href="CartMedone.php"><i aria-hidden="true" class="fa fa-shopping-basket"></i> View Cart</a> 
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--Search Form Start-->
                                <div class="search-btn">
                                    <ul data-toggle="dropdown" class="header-search search-toggle">
                                        <li class="search-menu">
                                            <i class="fa fa-search"></i>
                                        </li>
                                    </ul>
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="#">
                                                <input type="search" placeholder="Search here..." name="search" />
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>                                
                                        </div>
                                    </div>
                                </div>  
                                <!--End of Search Form-->
                                <!-- Main Menu End -->
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div> 
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- Header Area End -->
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center" style="background-image: url(img/banner/Cart-01.png)">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Cart</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
            <!-- Breadcrumps -->
    <section class="breadcrumbs">
        <div class="row">
            <div class="container">
                <div class="col-sm-6">
                    <h1>Cart</h1> </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li>You are here: </li>
                        <li><a href="index.html">Home</a> </li>
                        <li>Pages </li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumps -->

    <!-- Cart Section -->
    <section class="section_sapce bg_white">
        <div class="row">
            <div class="container">
                <div class="section-title margin-b50">
                    <h2>Order Summary Shopping Cart</h2>
                </div>
                <div class="row">
                    <!--Order Details-->
                    <div class="col-sm-8">
                        <div class="cart-section clearfix">
                            <div class="p-bottom80">
                                <h2>Configure</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                       
                                       <?php
                                        require "php/panier/views/afficherpanier.php";
                        
                                       ?>
                                    </tbody>
                                </table>
                             </div>
                            
                        </div>
                    </div>

                    <!--Order Summary-->
                    <div class="col-sm-4">
                        <div class="cart-section clearfix">
                            <h2>Order Summary</h2>
                            <div class="">
                                <table class="table table-bordered">
                                    <tbody>
                                    <?php
                                        require_once "php/panier/views/affichersomme.php";
                       
                                       ?>
                                     
                                    </tbody>
                                </table>
                                <form onsubmit="return valider()" name="form1" action="http://localhost/Formini/php/coupon/views/verifiercoupon.php" method="get">
                               
                               
                                <input  class="morsi" type="text" placeholder="Coupon Code" name= "coupon"/>

                                <input type="hidden" name="couponf" value="<?php if(isset($_GET['couponf'])) echo $_GET['couponf'] ;?>">
                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                                
                                <input class="button"  id="button" type="submit" value="Apply"  />
                                </form>
                                <br/>
                                <br/>
                            </div>
                            
                             <form name="form2" onsubmit="return achat()" action="http://localhost/Formini/php/panier/views/acheterpanier.php" method="get">
                                <input name="prix" type="hidden" value="<?=$prix?>"  />
                                <input name="coupon" type="hidden" value="<?php if(isset($_GET['coupon'])) echo $_GET['coupon'];?>"  />
                                <input type="hidden" name="couponf" value="<?php if(isset($_GET['couponf'])) echo $_GET['couponf'] ;?>">
                                <input name="id_coupon" type="hidden" value="<?php if(isset($_GET['id_coupon'])) echo $_GET['id_coupon'];?>"  />
                                <input class="btn btn-primary btn-lg btn-block margin-bottom-15" type="submit" value="Proceed To Checkout" />
                                <input  class="btn btn-default btn-lg btn-block" type="button" value="Continue Shopping" />
                               
                             </form>
                            
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Cart Section -->
     <!-- Subscribe Start -->
        <div class="subscribe-area pt-60 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="subscribe-content section-title text-center">
                            <h2>subscribe our newsletter</h2>
                            <p>I must explain to you how all this mistaken idea </p>
                        </div>
                        <div class="newsletter-form mc_embed_signup">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form"> 
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button> 
                                </div>    
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
        <!-- Footer Start -->
        <footer class="footer-area">
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-widget pr-60">
                                <div class="footer-logo pb-25">
                                    <a href="index.html"><img src="img/logo/footer-logo.png" alt="eduhome"></a>
                                </div>
                                <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and give you a coete account of the system. </p>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                        <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>information</h3>
                                <ul>
                                    <li><a href="#">addmission</a></li>
                                    <li><a href="#">Academic Calender</a></li>
                                    <li><a href="event.php">Event List</a></li>
                                    <li><a href="#">Hostel &amp; Dinning</a></li>
                                    <li><a href="#">TimeTable</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>useful links</h3>
                                <ul>
                                    <li><a href="courses.php">our courses</a></li>
                                    <li><a href="about.php">about us</a></li>
                                    <li><a href="teacher.php">teachers &amp; faculty</a></li>
                                    <li><a href="#">teams &amp; conditions</a></li>
                                    <li><a href="event.php">our events</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>get in touch</h3>
                                <p>Your address goes here, Street<br>City, Roadno 785 New York</p>
                                <p>+880  548  986  898  87<br>+880  659  785  658  98</p>
                                <p>info@eduhome.com<br>www.eduhome.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Copyright © <a href="https://freethemescloud.com/" target="_blank">Free themes Cloud</a> 2017. All Right Reserved By Free themes Cloud.</p>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>
        <!-- Footer End -->

        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>