<?php
$this->load->view('layout/header');
?>
<!-- Page Title
                ============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1><?php echo $product_details['title']; ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#"><?php echo $product_details['title']; ?></a></li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="single-product">

                <div class="product">

                    <div class="col_two_fifth">

                        <!-- Product Single - Gallery
                        ============================================= -->
                        <div class="product-image">
                            <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                <div class="flexslider">
                                    <div class="slider-wrap" data-lightbox="gallery">
                                        <div class="slide" data-thumb="<?php echo PRODUCTIMAGELINK . $product_details['file_name']; ?>">
                                            <a href="<?php echo PRODUCTIMAGELINK . $product_details['file_name']; ?>" title="<?php echo $product_details['title']; ?>" data-lightbox="gallery-item">
                                                <img src="<?php echo base_url(); ?>assets/images/defaultproduct.png" alt="<?php echo $product_details['title']; ?>" style="background:url('<?php echo PRODUCTIMAGELINK . $product_details['file_name']; ?>');    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;">
                                            </a>
                                        </div>
                                        <div class="slide" data-thumb="<?php echo PRODUCTIMAGELINK . $product_details['file_name']; ?>">
                                            <a href="<?php echo PRODUCTIMAGELINK . $product_details['file_name']; ?>" title="<?php echo $product_details['title']; ?>" data-lightbox="gallery-item">
                                                <img src="<?php echo base_url(); ?>assets/images/defaultproduct.png" alt="<?php echo $product_details['title']; ?>" style="background:url('<?php echo PRODUCTIMAGELINK . $product_details['file_name']; ?>');    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div><!-- Product Single - Gallery End -->

                    </div>

                    <div class="col_two_fifth product-desc">

                        <!-- Product Single - Price
                        ============================================= -->
                        <div class="product-price"><?php echo $product_details['title']; ?></div><!-- Product Single - Price End -->

                        <!-- Product Single - Rating
                        ============================================= -->
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-half-full"></i>
                            <i class="icon-star-empty"></i>
                        </div><!-- Product Single - Rating End -->

                        <div class="clear"></div>
                        <div class="line"></div>

                        <!-- Product Single - Quantity & Cart Button
                        ============================================= -->
                        <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
                            <div class="quantity clearfix">
                                <input type="button" value="-" class="minus">
                                <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                                <input type="button" value="+" class="plus">
                            </div>
                            <button type="submit" class="add-to-cart button nomargin">Enquiry</button>
                        </form><!-- Product Single - Quantity & Cart Button End -->

                        <div class="clear"></div>
                        <div class="line"></div>

                        <!-- Product Single - Short Description
                        ============================================= -->
                        <p style="white-space: pre-line"><?php echo $product_details['description']; ?></p>


                        <!-- Product Single - Meta
                        ============================================= -->
                        <div class="card product-meta">
                            <div class="card-body">
                                <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku"><?php echo $product_details['short_description']; ?></span></span>
<!--                                <span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
                                <span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#" rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#" rel="tag">Printed</a>.</span>-->
                            </div>
                        </div><!-- Product Single - Meta End -->

                        <!-- Product Single - Share
                        ============================================= -->


                    </div>

                    <div class="col_one_fifth col_last">


                        <div class="divider divider-center"><i class="icon-circle-blank"></i></div>


                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-thumbs-up2"></i>
                            </div>
                            <h3>100% Original</h3>
                            <p class="notopmargin">We grantee authentic parts & products</p>
                        </div>

                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-box"></i>
                            </div>
                            <h3>OEM Product</h3>
                            <p class="notopmargin">We can customize product according to your requirement</p>
                        </div>

                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-truck2"></i>
                            </div>
                            <h3>Shipping Globally</h3>
                            <p class="notopmargin">We can ship our products globally</p>
                        </div>

                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-undo"></i>
                            </div>
                            <h3>24X7 Support </h3>
                            <p class="notopmargin">We offer 24X7 customer support. </p>
                        </div>


                    </div>



                </div>

            </div>

            <div class="clear"></div><div class="line"></div>

            <div class="col_full nobottommargin">

                <h4>Related Products</h4>

                <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">
                    <?php
                    foreach ($product_related as $key => $value) {
                        ?>
                        <div class="oc-item">
                            <div class="product iproduct clearfix">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="img-fluid product_image_set" src="<?php echo base_url(); ?>assets/images/defaultproduct.png" style="background-image:url(<?php echo PRODUCTIMAGELINK . $value['file_name']; ?>);background-size: cover;background-size: contain;
                                             background-repeat: no-repeat;
                                             background-position: center;"   alt="Image Description"/>                                      </a>


                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="#"><?php echo $value['title']; ?></a></h3></div>


                                </div>
                            </div>
                        </div>


                        <?php
                    }
                    ?>
                </div>

            </div>

        </div>

    </div>

</section><!-- #content end -->


<?php
$this->load->view('layout/footer');
?>
