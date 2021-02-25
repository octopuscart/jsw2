<?php
$this->load->view('layout/header');
?>
<style>
    .container3d .image{
        padding: 15px;
    }
</style>
<section id="page-title" style="">

    <div class="container clearfix">
        <h1>Product Catalogs</h1>
        <span>Get Amazed By Our Products</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Catalogs</li>
        </ol>
    </div>

</section><!
<main id="content" role="main">
    

    <div class="container ">
        <div class=" " style="display: block;
             height: 350px;">

            <div class="hover3deffect">
                <div class=" container">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="container3d" >
                                <div class="image" >
                                    <a href="<?php echo base_url(); ?>assets/images/jswele.pdf" target="_blank">
                                        <img src="<?php echo base_url(); ?>assets/images/cat1.jpg">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container3d" >
                                <div class="image" >
                                    <a href="<?php echo base_url(); ?>assets/images/jswele.pdf" target="_blank">
                                        <img src="<?php echo base_url(); ?>assets/images/cat2.jpg">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container3d" >
                                <div class="image" >
                                    <a href="<?php echo base_url(); ?>assets/images/jswele.pdf" target="_blank">
                                        <img src="<?php echo base_url(); ?>assets/images/cat3.jpg">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>
</main>



<?php
$this->load->view('layout/footer');
?>