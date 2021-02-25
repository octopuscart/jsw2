<?php
$this->load->view('layout/header');
?> <!-- ========== MAIN CONTENT ========== -->
<section id="page-title" style="">

    <div class="container clearfix">
        <h1>Contact</h1>
        <span>Get in Touch with Us</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Contact Form
            ============================================= -->
            <div class="col_half">
                <div class="mr-xl-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title mb-0 pb-2 font-size-25">Leave us a Message</h3>
                    </div>
                    <p class="max-width-830-xl text-gray-90">We are manufacturers and distributors of electronics worldwide! We have various brands that we have been manufacturing for OEM and ODM for the last 13 years!We have our own in house brand called JSW which we have recently started marketing and have a variety of products under the same label.We are currently looking for partners worldwide for our brand representation and distribution.</p>
                    <form class="js-validate" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        First name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="firstName" placeholder="" aria-label="" required="" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Last name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="lastName" placeholder="" aria-label="" required="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Subject
                                    </label>
                                    <input type="text" class="form-control" name="Subject" placeholder="" aria-label="" data-msg="Please enter subject." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>
                            <div class="col-md-12">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Your Message
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary-dark-w px-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col_half col_last">
                <div class="mb-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title mb-0 pb-2 font-size-25">Our Address</h3>
                    </div>
                    <address class="mb-6 text-lh-23">
                        Room AB, 9/F, Golden Sun Centre, <br/>59/67 Bonham Strand West, <br/>Sheung Wan, Hong Kong

                        <div class="">Tel: +(852) 2368 7651</div>
                        <div class="">Email: <a class="text-blue text-decoration-on" href="">navrang@netvigator.com</a></div>
                    </address>
                    <h5 class="font-size-14 font-weight-bold mb-3">Opening Hours</h5>
                    <div class="">Monday to Friday: 9am-9pm</div>
                    <div class="mb-6">Saturday to Sunday: 9am-11pm</div>
                </div>
                <div class="" style="height: 500px;margin-top: 50px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7383.50200913203!2d114.148244!3d22.28742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3fc7db1e3e305b1b!2sGolden%20Sun%20Centre!5e0!3m2!1sen!2sin!4v1613663215631!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</section>

<!-- ========== END MAIN CONTENT ========== -->


<?php
$this->load->view('layout/footer');
?>