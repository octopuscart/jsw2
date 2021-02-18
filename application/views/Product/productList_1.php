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

                <div class="menu-title"> <span><?php echo $maincategory ? $maincategory['category_name'] : ""; ?></span></div>

                <nav>
                    <ul>
                        <?php
                        foreach ($listcategories as $key => $value) {
                            ?>
                            <li><a href="<?php echo site_url("product/productlist/1/" . $value['id']) ?>"><div><?php echo $value['category_name']; ?></div></a></li>
                            <?php
                        }
                        ?>

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

    <div class="container" style="min-height: 500px">
        
        



                <div id="shop" class="shop product-3 grid-container clearfix" data-layout="fitRows">

                    <div class="product clearfix "  ng-repeat="(k, product) in productResults.products">
                        <div class="product-image text-center">
                            <a href="#">
                                <img class="img-fluid product_image_set" src="<?php echo base_url(); ?>assets/images/defaultproduct.png" style="background-image:url(<?php echo PRODUCTIMAGELINK ?>{{product.file_name}});background-size: cover;background-size: contain;
                                     background-repeat: no-repeat;
                                     background-position: center;height: 300px;"   alt="Image Description"/>                                </a>

                            <div class="product-overlay">
                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Enquire</span></a>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc">
                            <div class="homeblock product-title overflowtext"><h3 ><a href="#">{{product.title}}</a></h3></div>
                            <div class="homeblock product-title overflowtext"><h3 ><a href="#" style="font-size: 12px">SKU: {{product.short_description}}</a></h3></div>
                            <div class="homeblock productdescription">{{product.description}}</div>
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