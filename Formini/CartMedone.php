<?php include('header.php'); ?>
<html class="no-js" lang="en">
    <body>
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
                    <h2><span>Order Summary</span>Shopping Cart</h2>
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
                                            <th>Product / Options</th>
                                            <th>Description</th>
                                            <th>Renewal</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Domain Registration</a>
                                            </td>
                                            <td><span>www.sreethemes.com</span></td>
                                            <td><span>Rs. 799.30/1yr</span></td>
                                            <td><span>$49.95</span></td>
                                            <td scope="row" class="text-center">
                                                <a data-original-title="Remove from cart" data-placement="top" data-toggle="tooltip" href="#" title=""></a>
                                                <a class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">S-2 Hosting</a>
                                            </td>
                                            <td><span>Cloud Hosting 1GB</span></td>
                                            <td><span>Rs. 799.30/1yr</span></td>
                                            <td><span>$69.95</span></td>
                                            <td scope="row" class="text-center">
                                                <a data-original-title="Remove from cart" data-placement="top" data-toggle="tooltip" href="#" title=""></a>
                                                <a class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">GSuit Email Accounts</a>
                                            </td>
                                            <td><span>25 Email Accounts</span></td>
                                            <td><span>Rs. 799.30/1yr</span></td>
                                            <td><span>$119.95</span></td>
                                            <td scope="row" class="text-center">
                                                <a data-original-title="Remove from cart" data-placement="top" data-toggle="tooltip" href="#" title=""></a>
                                                <a class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                             </div>
                            <form class="text-center coupon-code">
                                <h2 class="text-left m-bottom30">Add a coupon code</h2>
                                <input class="col-sm-3 input-copon" type="text" placeholder="Coupon Code" />
                                <input class="btn btn-xlg btn-default border col-sm-3" type="submit" value="Apply" />
                            </form>
                        </div>
                    </div>

                    <!--Order Summary-->
                    <div class="col-sm-4">
                        <div class="cart-section clearfix">
                            <h2>Order Summary</h2>
                            <div class="">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr class="">
                                            <th scope="row">Cart Subtotal</th>
                                            <td class="text-right">$239.85</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><small class="text-muted">Totals</small></th>
                                            <td class="text-right text-muted"><small>$239.85</small></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Order Total</th>
                                            <td>
                                                <h2 class="text-right">$239.85</h2>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                             <form>
                                <input class="btn btn-primary btn-lg btn-block margin-bottom-15" type="submit" value="Proceed To Checkout" />
                                <input class="btn btn-default btn-lg btn-block" type="submit" value="Continue Shopping" />
                             </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Cart Section --> 

        <!-- Script end --> 
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
        <!-- Script end --> 
    </body>
</html>
<?php include('footer.php'); ?>