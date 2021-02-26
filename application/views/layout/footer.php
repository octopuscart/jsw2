<div style="clear: both"></div>
<div class="modal fade" id="productInquire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form  method="post" action="<?php echo site_url("Shop/enquiry");?>" >
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Inquiry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner p-md-3 row no-gutters">


                            <div class="cart-page-top table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td class="cart-form-heading text_center" style="width: 50%" colspan="2">Product</td>
                                            <td class="cart-form-heading text_center">Quantity</td>
                                            <td class="cart-form-heading"></td>
                                        </tr>
                                    </thead>
                                    <tbody id="quantity-holder">
                                        <tr ng-repeat="product in globleCartData.products">
                                            <td class="cart-img-holder" style="       width: 80px;
                                                text-align: center;">
                                                <a href="#">
                                                    <img  src="{{product.file_name}}" alt=""  alt="cart" class="img-responsive cart_image_block">
                                                </a>
                                            </td>
                                            <td  style="    border-left: 0px;">
                                                <h3 style="font-size: 15px;"><a href="#">{{product.title}}</a>
                                                    <br/>
                                                    <small style="font-size: 10px">{{product.short_description}}</small>
                                                </h3>

                                            </td>
                                            <td class="quantity">

                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-secondary"  ng-click="updateCart(product, 'add')"><i class="fa fa-plus" aria-hidden="true" ></i></button>
                                                    <button type="button" class="btn btn-secondary">{{product.quantity}}</button>
                                                    <button type="button" class="btn btn-secondary"  ng-click="updateCart(product, 'sub')"><i class="fa fa-minus" aria-hidden="true" ></i></button>
                                                </div>


                                            </td>
                                            <td class="dismiss"><a href="#"  ng-click="removeCart(product.product_id)"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        </tr>






                                    </tbody>
                                </table>

                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-4">
                                        <label class="form-label">
                                            NAME
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="name" placeholder=""  required="">
                                    </div>
                                    <!-- End Input -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-4">
                                        <label class="form-label">
                                            COMPANY NAME
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="company_name" placeholder="" >
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-4">
                                        <label class="form-label">
                                            EMAIL
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="email" placeholder="" required="">
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-4">
                                        <label class="form-label">
                                            CONTACT
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="contact_no" placeholder=""  required="">
                                    </div>
                                    <!-- End Input -->
                                </div>


                                <div class="col-md-12">
                                    <div class="js-form-message mb-4">
                                        <label class="form-label">
                                            MESSAGE
                                        </label>

                                        <div class="input-group">
                                            <textarea class="form-control p-5" rows="4" name="message" placeholder="" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="send_inquiry" class="btn btn-primary">Send Inquiry</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class=" ">
    <div class="container-fluid clearfix mb-3 mt-40 ">
        <div class="row">
            <div class="col-md-3 nobottommargin featureblock bluegradiant">
                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-thumbs-up2"></i>
                    </div>
                    <h3>100% Original</h3>
                    <hr/>
                    <p class="notopmargin">We grantee authentic parts & products</p>
                </div>
            </div>

            <div class="col-md-3 nobottommargin featureblock featureblock-black blackgradiant">
                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-box"></i>
                    </div>
                    <h3>OEM Products</h3>
                    <hr/>
                    <p class="notopmargin">We can customize product according to your requirement</p>
                </div>
            </div>

            <div class="col-md-3 nobottommargin featureblock bluegradiant">
                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-truck2"></i>
                    </div>
                    <h3>Shipping Globally</h3>
                    <hr/>
                    <p class="notopmargin">We can ship our products globally</p>
                </div>
            </div>

            <div class="col-md-3 nobottommargin col_last featureblock featureblock-black blackgradiant">
                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-undo"></i>
                    </div>
                    <h3>24X7 Support </h3>
                    <hr/>
                    <p class="notopmargin">We offer 24X7 customer support. </p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Footer
============================================= -->
<footer id="footer" class="dark blackgradiant">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_two_third">

                <div class="col_one_third">

                    <div class="widget clearfix">

                        <img src="<?php echo base_url(); ?>assets/images/logo_w.png" alt="" class="footer-logo">

                        <p>We are manufacturers and distributors of electronics worldwide.</p>

                        <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                            <address>
                                <strong>Headquarters:</strong><br>
                                Room AB, 9/F, Golden Sun Centre,<br/>
                                59/67 Bonham Strand West,<br/>
                                Sheung Wan, Hong Kong
                            </address>

                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@jswelectronics.com <br/>
                            <abbr title="Email Address"><strong>Email:</strong></abbr>  navrang@netvigator.com
                        </div>

                    </div>

                </div>

                <div class="col_one_third">

                    <div class="widget widget_links clearfix">

                        <h4 style="    margin-left: 15px;">Links</h4>

                        <ul>
                            <li><a class="" href="<?php echo site_url('/') ?>">My Account</a></li>
                            <li><a class="" href="<?php echo site_url('/') ?>">Terms & Conditions</a></li>
                            <li><a class="" href="<?php echo site_url('/') ?>">Privacy Policy</a></li>
                            <li><a class="" href="<?php echo site_url('/') ?>">Customer Service</a></li>
                            <li><a class="" href="<?php echo site_url('/') ?>">Returns / Exchange</a></li>
                            <li><a class="" href="<?php echo site_url('/') ?>">FAQs</a></li>
                            <li><a class="" href="<?php echo site_url('/') ?>">Product Support</a></li>
                        </ul>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix">
                        <h4>Recent Posts</h4>

                        <div id="post-list-footer">
                            <div class="spost clearfix">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">Now creating a cinematic audio experience is possible with JSW Speakers.</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>10th JAN 2021</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">Experience the most enriching sleep on the comfiest mattress.
                                            </a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>10th FAB 2021</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">Hairstyling comes in handy when you have a JSW hair dryer with you. So shop yours now.</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>12th FAB 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col_one_third col_last">

                <div class="widget clearfix" style="margin-bottom: -20px;">

                    <div class="row">

                        <div class="col-lg-12 bottommargin-sm">
                            <h5 class="nobottommargin">Contact Us</h5>
                            <div class="counter counter-small" style="    font-size: 17px;">+(852) 2368 7651</div>

                        </div>



                    </div>

                </div>

                <div class="widget subscribe-widget clearfix">
                    <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                    <div class="widget-subscribe-form-result"></div>
                    <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                        <div class="input-group divcenter">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="icon-email2"></i></div>
                            </div>
                            <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                            <div class="input-group-append">
                                <button class="btn btn-success btn-orange" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="widget clearfix" style="margin-bottom: -20px;">

                    <div class="row">

                        <div class="col-lg-6 clearfix bottommargin-sm">
                            <a href="https://www.facebook.com/jswelectronics" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                        </div>
                        <div class="col-lg-6 clearfix">
                            <a href="https://www.instagram.com/jswelectronics" target="_blank" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Follow</strong><br>on Instagram</small></a>
                        </div>

                    </div>

                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" class="bluegradiant">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights &copy; <?php echo date("Y"); ?> <span class='blankspace'>|</span> JSW Electronics From the house of <b>Navrang Hong Kong Limited</b>.<br>
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <a href="#" class="social-icon si-small si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-borderless si-instagram">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>


                    <a href="#" class="social-icon si-small si-borderless si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-youtube">
                        <i class="icon-youtube"></i>
                        <i class="icon-youtube"></i>
                    </a>



                </div>

                <div class="clear"></div>



            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->
<i class="icon-arrow-left"></i>
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="<?php echo base_url(); ?>assets/theme/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="<?php echo base_url(); ?>assets/theme/js/functions.js"></script>

<script src="<?php echo base_url(); ?>assets/owl/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/theme2/angular/shopController.js"></script>
<!--<script src="<?php echo base_url(); ?>assets/owl/jquery.min.js"></script>-->



</body>
</html>