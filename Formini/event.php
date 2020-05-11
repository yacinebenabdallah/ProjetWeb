<?php include('header.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
    
    <body>
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center" style="background-image: url(img/banner/Event-01.png)">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>event</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- Event Start -->
        <div class="event-area three text-center pt-100 pb-100">
            <div class="container">
            <div class="row">
                    <div class="col-xs-12">
                        <div class="course-title">
                            <h3>Search Events</h3>
                        </div>
                        <div class="course-form">
                            <form id="search" action="event.php" method="GET">
                                <input type="search" placeholder="Search..." name="recherche" />
                                <button type="submit">search</button>
                            </form>
                        </div>
                    </div>
            </div>
            <div id="listname" class="row">
                  <?php require 'php/event/views/eventlist.php'; ?> <!--          affichage des courses  -->
            </div>    
        </div>
        </div>      
        <!-- Event End -->

        <script src="js/classchange.js"></script>
        <script src="js/search.js"></script>
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
<?php include('footer.php'); ?>