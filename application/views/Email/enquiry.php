<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Order No#</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            .carttable{
                border-color: #fff;
            }

            .carttable td{
                padding: 5px 10px;
                border-color: #9E9E9E;
            }
            .carttable tr{
                /*padding: 0 10px;*/
                border-color: #9E9E9E;
                font-size: 12px
            }

            .detailstable td{
                padding:10px 20px;
            }

            .gn_table td{
                padding:3px 0px;
            }
            .gn_table th{
                padding:3px 0px;
                text-align: left;

            }
            .style_block{
                float: left;
                padding: 1px 1px;
                margin: 2.5px;
                /* background: #000; */
                color: white;
                border: 1px solid #e4e4e4;
                width: 47%;
                font-size: 12px;
            }


            .style_block span {
                background: #fff;
                margin-left: 5px;
                color: #000;
                padding: 0px 5px;
                width: 50%;
            }
            .style_block b {
                width: 46%;
                float: left;
                background: #dedede;
                color: black;
            }
            span.fr_value {
                margin-left: 1px;
                padding: 0;
                font-size: 9px;
                text-align: -webkit-left;
                position: absolute;
                margin-top: 0px;
                width: 20px;
            }

            .socialicons{
                height: 50px;
                /* float: left; */
                position: inherit;
                width: 50px;
                display: inline-block;
                margin-right: 20px;
            }

            .socialicons img {
                width: 50px;

            }
        </style>
    </head>
    <body style="margin: 0;
          padding: 0;
          background: rgb(225, 225, 225);
          font-family: sans-serif;">

        <div class="" style="padding:50px 0px">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #fff!important;    padding: 10px 20px 10px;">
                <tr>
                    <td>
                        <a href="https://jswelectronics.com"><img src="https://jswelectronics.com/assets/images/logo.png" height="50px" /></a>
                    </td>
                    <td >
                        <a href="https://www.instagram.com/jswelectronics/"  style="float: right;margin-left: 12px;"><img src="https://www.jswelectronics.com/assets/icon/instagram.png" style="height:30px;"/></a>

                        <a href="https://www.facebook.com/jswelectronics" style="float: right;"><img src="https://www.jswelectronics.com/assets/icon/facebook.png" style="height:30px;"/></a>

                    </td>
                </tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #2d353c!important;padding: 0 20px">
                <tr>
                    <td >
                        <center>      

                            <h3 style="color:white;">Thank you for your enquiry</h3>
                            <br/>
                            <a href="index.html"><img src="https://jswelectronics.com/assets/homeblock/h22.jpg" style="width:650px;margin-bottom: 20px;" /></a>



                        </center>
                    </td>

                </tr>
            </table>
            <table class="detailstable" align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #fff">
                <tr>
                    <td style="font-size: 12px;width: 30%;padding: 2px 20px;padding-top: 25px;" >

                    </td>

                    <td style="font-size: 12px;width: 70%;padding: 2px 20px;padding-top: 25px;" >


                    </td>
                </tr>

            </table>

            <table class="detailstable" align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #fff">
                <tr>
                    <th style="text-align: right;width:200px;padding-right: 10px;">Name</th>
                    <td style="    text-align: left; color:black!important; "><?php echo $booking_order['name']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: right;width:200px;padding-right: 10px;">Company Name</th>
                    <td style="    text-align: left; color:black!important; "><?php echo $booking_order['company_name']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: right;width:200px;padding-right: 10px;">Email</th>
                    <td style="    text-align: left; color:black!important; "><?php echo $booking_order['email']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: right;width:200px;padding-right: 10px;">Contact No.</th>
                    <td style="    text-align: left; color:black!important; "><?php echo $booking_order['contact']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: right;width:200px;padding-right: 10px;">Message</th>
                    <td style="    text-align: left; color:black!important; "><?php echo $booking_order['message']; ?></td>
                </tr>

            </table>
            <table class="carttable"  border-color= "#9E9E9E" align="center" border="1" cellpadding="0" cellspacing="0" width="700" style="background: #fff;padding:20px">
                <tr style="font-weight: bold">
                    <td style="width: 20px;text-align: center">S.No.</td>
                    <td colspan="2"  style="text-align: center">Product</td>
                    <td style="text-align: right">Qnty.</td>
                </tr>
                <!--cart details-->
                <?php
                foreach ($cartdata["products"] as $key => $value) {
                    ?>
                    <tr>
                        <td style="text-align: right">
                            <?php echo $key + 1; ?>
                        </td>
                        <td style="width: 50px">
                            <center>   
                                <img src=" <?php echo $value['file_name']; ?>" style="height: 50px;"></img>
                            </center>
                        </td>
                        <td style="width: 200px;">
                            <?php echo $value['title']; ?><br/>
                            <small style="font-size: 10px;">(<?php echo $value['short_description']; ?>)</small>
                        </td>
                        <td style="text-align: right">
                            <?php echo $value['quantity']; ?>
                        </td>
                    </tr>

                    <?php
                }
                ?>
                <!--end of cart details-->






            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #2d353c!important;    padding: 0px 20px 20px;">
                <tr>
                    <td style="width:50%;color:white;margin-bottom: 50px">
                        <h4>Innovation around the world.</h4>
                        <p>
                            We are manufacturers and distributors of electronics worldwide! We have various brands that we have been manufacturing for OEM and ODM for the last 13 years!
                        </p>
                        <p>
                            We have our own in house brand called JSW which we have recently started marketing and have a variety of products under the same label.We are currently looking for partners worldwide for our brand representation and distribution.
                        </p>
                        <center>

                            <a href="https://jswelectronics.com/" style="    border-radius: 10px;
                               background: blue;
                               color: white;
                               padding: 10px;
                               text-decoration: none;">View Details!</a>
                        </center>

                    </td>
                    <td style="width:50%;padding:20px;">
                        <a href="https://jswelectronics.com"><img src="https://jswelectronics.com/assets/homeblock/33.jpg" width="100%" /></a>

                    </td>

                </tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #fff!important;    padding: 0px 20px 20px;">
                <tr>
                    <td>
                        <a href="https://jswelectronics.com">
                            <img class="img-fluid product_image_set" src="https://jswelectronics.com/assets/images/defaultproduct.png" style="background-image:url(https://jswadmin.costcointernational.com/assets/product_images/4994591.jpg);background-size: cover;background-size: 70%;
                                 background-repeat: no-repeat;width:100%;height: 150px;
                                 background-position: center;" alt="Image Description">
                        </a>
                        <h5 style="    color: black!important;padding: 10px;">Full HD 1080p Andoird Smart TV</h5>
                        <center>

                            <a href="https://jswelectronics.com/" style="    border-radius: 10px;
                               background: blue;
                               color: white;
                               padding: 10px;
                               text-decoration: none;">View Details!</a>
                        </center>
                    </td>
                    <td style="border-left: 1px solid #000;border-right: 1px solid #000;">
                        <a href="https://jswelectronics.com">
                            <img class="img-fluid product_image_set" src="https://jswelectronics.com/assets/images/defaultproduct.png" style="background-image:url(https://jswadmin.costcointernational.com/assets/product_images/1678471.jpg);background-size: cover;background-size: 70%;
                                 background-repeat: no-repeat;width:100%;height: 150px;
                                 background-position: center;" alt="Image Description">
                        </a>
                        <h5 style="    color: black!important;padding: 10px;">JSW Microwave Oven With 20 Liter Capacity</h5>
                        <center>

                            <a href="https://jswelectronics.com/" style="    border-radius: 10px;
                               background: blue;
                               color: white;
                               padding: 10px;
                               text-decoration: none;">View Details!</a>
                        </center>
                    </td>
                    <td>
                        <a href="https://jswelectronics.com">
                            <img class="img-fluid product_image_set" src="https://jswelectronics.com/assets/images/defaultproduct.png" style="background-image:url(https://jswadmin.costcointernational.com/assets/product_images/7559151.jpg);background-size: cover;background-size: 70%;
                                 background-repeat: no-repeat;width:100%;height: 150px;
                                 background-position: center;" alt="Image Description">
                        </a>
                        <h5 style="    color: black!important;padding: 10px;">HI FI Audio System With FM Radio & 2 Speakers</h5>
                        <center>

                            <a href="https://jswelectronics.com/" style="    border-radius: 10px;
                               background: blue;
                               color: white;
                               padding: 10px;
                               text-decoration: none;">View Details!</a>
                        </center>
                    </td>
                </tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #2d353c!important;    padding: 0px 20px 20px;">
                <tr>
                    <td style="color:white;padding:20px;font-size: 12px;text-align: center;">
                        Copyrights &copy; <?php echo date("Y"); ?> <span class='blankspace'>|</span>JSW Electronics From the house of <b>Navrang Hong Kong Limited</b>.<br>

                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>