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
    <section id="page-title" style="padding: 24px 0;    ">

        <div class="container clearfix">
            <h1><?php echo $maincategory ? $maincategory['category_name'] : ""; ?></h1>
            <span> <?php
                $categorylist = [];
                foreach ($categorie_parent as $key => $value) {
                     $value['category_name'];
                    array_push($categorylist, $value['category_name']);
                }
              echo   implode(" - ", $categorylist);
                ?></span>
            <ol class="breadcrumb">
                <?php
                foreach ($linklist as $key => $value) {
                    ?>
                    <li class="breadcrumb-item"><a href="#"><?php echo $value; ?></a></li> /
                    <?php
                }
                ?>
            </ol>
        </div>

    </section><!-- #page-title end -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
               
                <!-- End breadcrumb -->

                <div class="container" style="min-height: 500px">
                    <div class="row">
<!--                        <div class="col-md-2">

                            <a href="#"><img src="<?php echo base_url(); ?>assets/homeblock/l11.jpg"  alt="Image"></a>
                            <div class="widget clearfix">

                                <h4>Last Viewed Items</h4>
                                <div class="widget-last-view">

                                    <?php
                                    $categorylist = [
                                        array("title" => "TV", "link" => "", "img" => "tv.png"),
                                        array("title" => "AC", "link" => "", "img" => "ac.png"),
                                        array("title" => "WASHING MACHINES", "link" => "", "img" => "washing.png"),
                                        array("title" => "TOASTER", "link" => "", "img" => "toaster.png"),
                                        array("title" => "FOOD PROCESSOR", "link" => "", "img" => "foodp.png"),
                                        array("title" => "MICROWAVE OVEN", "link" => "", "img" => "mvo.png"),
                                        array("title" => "BLENDERS", "link" => "", "img" => "blender.png"),
                                        array("title" => "FANS", "link" => "", "img" => "fans.png"),
                                        array("title" => "HIFI SYSTEM", "link" => "", "img" => "hifi.png"),
                                        array("title" => "STOVES", "link" => "", "img" => "stove.png"),
                                        array("title" => "OVEN", "link" => "", "img" => "own.png"),
                                        array("title" => "KETTLE", "link" => "", "img" => "kattle.png"),
                                        array("title" => "PRESSURE COOKERS", "link" => "", "img" => "cooker.png"),
                                        array("title" => "MATTRESS", "link" => "", "img" => "matress.png"),
                                        array("title" => "IRONS", "link" => "", "img" => "iron.png"),
                                        array("title" => "BOOMBOX", "link" => "", "img" => "boombox.png"),
                                        array("title" => "DVD PLAYERS", "link" => "", "img" => "dvdp.png"),
                                        array("title" => "WALL MOUNT", "link" => "", "img" => "wallm.png"),
                                    ];
                                    foreach ($categorylist as $key => $value) {
                                        ?>

                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="#">
                                                    <img src="<?php echo base_url(); ?>assets/categoryblock/<?php echo $value['img']; ?>" alt="JSW <?php echo $value['title']; ?>">

                                                </a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="#"><?php echo $value['title']; ?></a></h4>
                                                </div>

                                            </div>
                                        </div>

                                        <?php
                                    }
                                    ?>






                                </div>

                            </div>
                        </div>-->
                        <div class="col-md-12 ">


                            <div id="shop" class="shop product-1 grid-container clearfix" >
                                <div class="product clearfix "  ng-repeat="(k, product) in productResults.products" ng-class="productautoheight">
                                    <div class="{{$index%2 == 0?'changedescolor':'changedescolor2'}}">

                                        <div class="product-image " >
                                            <a href="#">
                                                <img class="img-fluid product_image_set" src="<?php echo base_url(); ?>assets/images/defaultproduct.png" style="background-image:url(<?php echo PRODUCTIMAGELINK ?>{{product.file_name}});background-size: cover;background-size: contain;
                                                     background-repeat: no-repeat;
                                                     background-position: center;"   alt="Image Description"/>  
                                            </a>



                                        </div>
                                        <div class="product-desc {{$index%2 == 0?'changedescolor':''}}" >
                                            <div class="product-title"><h3><a href="#">{{product.title}}</a></h3></div>
                                            <div class="product-price"><ins>{{product.short_description}}</ins></div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                            </div>
                                            <hr/>
                                            <div class="row featurelist">
                                                <div class="col-md-6"> 
                                                    <ul class="iconlist">
                                                        <li ng-repeat="feature1 in product.feature[0]"><i class="icon-caret-right"></i> {{feature1}}</li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <ul class="iconlist">
                                                        <li ng-repeat="feature1 in product.feature[1]"><i class="icon-caret-right"></i> {{feature1}}</li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div ng-if="$index == 2" >
                                        <img class="img-responsive" style="width: 100%;" src="<?php echo base_url(); ?>assets/images/break.jpg"/>

                                    </div>
                                </div>  




                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </section>
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