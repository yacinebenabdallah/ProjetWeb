<?php include('header.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
    <body>
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center" style="background-image: url(img/banner/Contact-01.png)">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>contact</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- Contact Start -->
        <div class="map-area">
            <!-- google-map-area start -->
            <div class="google-map-area">
                <!--  Map Section -->
                <div id="contacts" class="map-area">
                    <div id="googleMap" style="width:100%;height:440px;"></div>
                </div>
            </div>
        </div>
        <div class="contact-area pt-150 pb-140"> 
            <div class="container">     
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="contact-contents text-center">
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="img/contact/contact1.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>address</h3>
                                    <p>14, Rue de Russie, Centre ville</p>
                                    <p>Tunis, TUNISIE</p>
                                </div>
                            </div>
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="img/contact/contact2.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Phone</h3>
                                    <p>+216 53 888 628</p>
                                    <p>Monji Salim, CEO</p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <img src="img/contact/contact3.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>E-mail</h3>
                                    <p>Monji-Salim@Eduhome.tn</p>
                                    <!-- <p></p> -->
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="reply-area">
                            <h3>LEAVE A message</h3>
                            <p>If you have any reclamation or anything bothering or missing in our website, please let us know by fulfilling this form </p>
                            <form id="contact-form" method="POST" action="php/contacts.php">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Name</p>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Subject</p>
                                        <input type="text" name="subject" id="subject">
                                        <p>Massage</p>
                                        <textarea name="message" id="message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <button type="submit"  class="reply-btn" data-text="send" href="index.html"><span>send message</span></button>
                                <p class="form-messege"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <!-- Scrîpt -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script> 
                <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(36.806496, 10.181532), // New York
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };
                var mapElement = document.getElementById('googleMap');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });
            }
        </script>
        <script src="js/main.js"></script>
        </div>
        <!-- Script End -->
    </body>
</html>
<?php include('footer.php'); ?>
