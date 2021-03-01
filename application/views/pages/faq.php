<?php

$this->load->view('layout/header');
?>
<section id="page-title" style="">

    <div class="container clearfix">
        <h1>FAQ's</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQ's</li>
        </ol>
    </div>

</section>
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- breadcrumb -->

    <!-- End breadcrumb -->

    <div class="container">
        <div class="hover3deffect mt-40" >
            <div class=" container">

                <!-- Basics Accordion -->
                <div id="basicsAccordion" class="mb-12">
                    <!-- Card -->
                    <div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
                        <div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingOne">
                            <h5 class="mb-0">
                                <button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn py-3 font-size-25 border-0"
                                        data-toggle="collapse"
                                        data-target="#basicsCollapseOner"
                                        aria-expanded="true"
                                        aria-controls="basicsCollapseOner">
                                    Who we are?

                                    <span class="card-btn-arrow">
                                        <i class="fas fa fa-arrow-down text-gray-90 font-size-18"></i>
                                    </span>
                                </button>
                            </h5>
                        </div>
                        <div id="basicsCollapseOner" class="collapse show"
                             aria-labelledby="basicsHeadingOne"
                             data-parent="#basicsAccordion">
                            <div class="card-body pl-0 pb-8">
                                <p class="mb-0">
                                    We are manufacturers and distributors of electronics worldwide! We have various brands that we have been manufacturing for OEM and ODM for the last 13 years!                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
                        <div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingTwo">
                            <h5 class="mb-0">
                                <button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0"
                                        data-toggle="collapse"
                                        data-target="#basicsCollapseTwo"
                                        aria-expanded="false"
                                        aria-controls="basicsCollapseTwo">
                                    How can I get distributorship?

                                    <span class="card-btn-arrow">
                                        <i class="fas fa fa-arrow-down text-gray-90 font-size-18"></i>
                                    </span>
                                </button>
                            </h5>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse"
                             aria-labelledby="basicsHeadingTwo"
                             data-parent="#basicsAccordion">
                            <div class="card-body pl-0 pb-8">
                                <p class="mb-0">
                                    We are currently looking for partners worldwide for our brand representation and distribution.<br/>
                                    You can contact us on navrang@netvigator.com or sales@jswelectronics.com, You can also call on +(852) 2368 7651.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                  

                  

                    <!-- Card -->
                    <div class="card mb-3 border-top-0 border-left-0 border-right-0 border-color-1 rounded-0">
                        <div class="card-header card-collapse bg-transparent-on-hover border-0" id="basicsHeadingFive">
                            <h5 class="mb-0">
                                <button type="button" class="px-0 btn btn-link btn-block d-flex justify-content-between card-btn collapsed py-3 font-size-25 border-0"
                                        data-toggle="collapse"
                                        data-target="#basicsCollapseFive"
                                        aria-expanded="false"
                                        aria-controls="basicsCollapseFive">
                                    How should I contact, if I have any queries?

                                    <span class="card-btn-arrow">
                                        <i class="fas fa fa-arrow-down text-gray-90 font-size-18"></i>
                                    </span>
                                </button>
                            </h5>
                        </div>
                        <div id="basicsCollapseFive" class="collapse"
                             aria-labelledby="basicsHeadingFive"
                             data-parent="#basicsAccordion">
                            <div class="card-body pl-0 pb-8">
                                <p class="mb-0">
                                    You can contact us on navrang@netvigator.com or sales@jswelectronics.com, You can also call on +(852) 2368 7651.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    
                </div>
                <!-- End Basics Accordion -->
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
<?php

$this->load->view('layout/footer');
?>