<?php
$this->load->view('layout/header');
?>
<?php
$linklist = [];
foreach ($categorie_parent as $key => $value) {
    $cattitle = $value['category_name'];
    $catid = $value['id'];
    $liobj = "<li><a href='" . site_url("Product/ProductList/" . $catid) . "'>$cattitle</a></li>";
    array_push($linklist, $liobj);
}



$image1 = "";
$image2 = "";
?>
<div style="opacity: 0;position: fixed;">

    {{showmodel = 1}}
</div>

<style>
    .page_navigation a {
        padding: 5px 10px;
        border: 1px solid #fed700;
        margin: 5px;
        background: #fed700;
        color: black;
        border-radius: 19px;
    }
    .page_navigation a.active_page {
        padding: 5px 10px;
        border: 1px solid #fed700;
        margin: 5px;
        background: #fff;
        color: black;
    }

    .colorblock{
        font-weight: 500;

        padding: 0px 10px;
        height: 13px;
        width: 100x;
        /* float: left; */
        margin-top: -71px;
        position: absolute;
        margin: auto;
        border: 1px solid #0000005e;
        border: 1px solid #0000005e;
        text-shadow: 0px 1px 4px #000;
        margin-top: -71px;
        margin-left: -7px;
    }


    /*    .product-box1 .product-img-holder {
            min-height: 260px;
            display: block
        }*/



    /*    .product-box1{
            min-height: 260px;
    
        }*/

    .h-100 {
        height: 100% !important;
        border: 1px solid #f5f5f5;
    }
</style>


<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" ng-controller="ProductController">
    <!-- breadcrumb -->
    <div id="page-menu" class="no-sticky">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Portfolio <span>Variations</span></div>

					<nav>
						<ul>
							<li class="current"><a href="portfolio.html"><div>With Margin</div></a></li>
							<li><a href="portfolio-nomargin.html"><div>No Margin</div></a></li>
							<li><a href="portfolio-notitle.html"><div>No Title</div></a></li>
							<li><a href="portfolio-title-overlay.html"><div>Title Overlay</div></a></li>
							<li><a href="portfolio-fullwidth.html"><div>Full Width</div></a></li>
							<li><a href="portfolio-fullwidth-notitle.html"><div>Full Width - No Title</div></a></li>
						</ul>
					</nav>

				<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div>
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <?php
                        foreach ($linklist as $key => $value) {
                            ?>
                            <a class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 " aria-current="page" style="color:black"><?php echo $value; ?></a>
                            <a class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1" aria-current="page"></a>
                            <?php
                        }
                        ?>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="row mb-8">
            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                <div class="mb-8 border border-width-2 border-color-3 borders-radius-6">
                    <!-- List -->
                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar">
                        <li>

                            <div id="" class=" " >
                                <ul class="list-unstyled dropdown-list">
                                    <!-- Menu List -->
                                    <?php
                                    foreach ($categories as $catkey => $catvalue) {
                                        ?>
                                        <li>
                                            <a href="<?php echo site_url('Product/productList/1/' . $catvalue['id']) ?>"  class="dropdown-item">
                                                <?php echo $catvalue['category_name']; ?><span><i class="flaticon-next"></i></span>
                                            </a>
                                        </li>
                                    <?php } ?>


                                </ul>
                            </div>
                        </li>

                    </ul>
                    <!-- End List -->
                </div>

            </div>
            <div class="col-xl-9 col-wd-9gdot5">



                <div  class="shop clearfix">

                    <div class="product clearfix col-md-3 item"  ng-repeat="(k, product) in productResults.products">
                        <div class="product-image">
                            <a href="#">
                                <img class="img-fluid product_image_set" src="<?php echo base_url(); ?>assets/images/defaultproduct.png" style="background-image:url(<?php echo PRODUCTIMAGELINK ?>{{product.file_name}});background-size: cover;
                                     background-position: center;"   alt="Image Description"/>                                </a>

                            <div class="product-overlay">
                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Enquire</span></a>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc">
                            <div class="homeblock product-title overflowtext"><h3 ><a href="#">{{product.title}}</a></h3></div>
                        </div>
                    </div>

                </div>

        


            </div>
        </div>

    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

<script>
    var category_id = <?php echo $category; ?>;</script>
<!--angular controllers-->

<!--<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.pajinate.min.js"></script>-->

<script src="<?php echo base_url(); ?>assets/theme2/angular/productController.js"></script>


<script>
    var searchdata = "<?php echo isset($_GET["search"]) ? ($_GET["search"] != '' ? $_GET["search"] : '0') : "0"; ?>";

    var category_id = <?php echo $category; ?>;
    var custom_id = <?php echo $category; ?>;</script>
<?php
$this->load->view('layout/footer');
?>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme2/jquery.pajinate.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

    });
</script>