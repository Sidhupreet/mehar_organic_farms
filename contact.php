<?php include "common_functions.php";?>
<!DOCTYPE html>
<html lang="en">


<head>
   <?php css_links();?>	
	
</head>

<body>
    <div class="wrapper contactus">
        <!-- Begin header -->
        <?php header1();?>
        <!-- End header -->

        <!-- Begin Main -->
        <div id="main" class="content-main">

            <!-- section-subbanner -->
            <div class="section-subbanner" style="background-image:url(images/slider/Temperature_Measurement_Banner.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="caption text-uppercase">Contact</div>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a> </li>
                                <li><a href="contact.php">Contact Us</a> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /section-subbanner -->

            <!-- page-contact -->
            <div class="page-contact spacetb">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="wg-contact">
                                <h3>Contact Us</h3>
                                <p>Get In Touch If You Need Help or Ask Something..</p>
                            </div>
                            
                            <div class="frm">
                            <form action="send_mail.php" method="post" id="contactForm">
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-6">
                                        <div class="inner-addon">
                                           <b>First Name:</b> <input type="text" name="user_name" required placeholder="First Name  *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <div class="inner-addon">
                                          <b>Your Email:</b>  <input type="email" name="user_email" required placeholder="Your Email  *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="inner-addon">
                                           <b>Your Phone Number:</b> <input type="text" name="user_phone" required placeholder="Your Phone Number  *" class="form-control"rrequired>
                                        </div>
                                    </div>
                                    <!--<div class="form-group col-md-6 col-sm-6">
                                        <div class="inner-addon">
                                            <input type="text" required placeholder="Subject" class="form-control">
                                        </div>
                                    </div>-->
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="inner-addon">
                                         <b>Message:</b>   <textarea placeholder="Message" name="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mt10">
                                            <input class="btn-yellow text-uppercase" type="submit" value="Send" name="send" title="Send Message">
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="address-box relative">
                                        <span class="icon-corner"><i class="fa fa-map-marker"></i> </span>
                                        <h5 class="text-uppercase">Mailing Address</h5>
                                        <p>Hamilton</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="address-box relative">
                                        <span class="icon-corner"><i class="fa fa-phone"></i> </span>
                                        <h5 class="text-uppercase">Contact Info</h5>
                                        <p>Phone: 0223993684<br>
                                       
                                        Mail: <a href="#">sales@meharfarms.in</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="the-map">
<!--                                <iframe src="images/picture/map.jpg" width="570" height="360"></iframe>
-->                                <iframe src="https://maps.google.com/?ie=UTF8&amp;ll=-37.730675,175.273392&amp;spn=0.043846,0.077162&amp;t=m&amp;z=14&amp;output=embed" width="570" height="360" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page-contact -->

        </div>
        <!-- End Main -->

        <!-- Begin Footer -->
       <?php footer();?>
        <!-- End Footer -->
    </div>

    <!-- Java Scripts - Libs -->
    <?php js_links();?>
</body>


</html>
