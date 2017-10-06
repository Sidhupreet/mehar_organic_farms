<?php include "common_functions.php";?>
<!DOCTYPE html>
<html lang="en">


<head>
   <?php css_links();?>	
	
</head>

<body>
    <div class="wrapper">
        <!-- Begin header -->
        
        <?php header1();?>
        <!-- End header -->

        <!-- Begin Main -->
        <div id="main" class="content-main">

            <!-- section-subbanner -->
            <div class="section-subbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="caption text-uppercase">Our Clients</div>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a> </li>
                                <li><a href="clients.php">Clients</a> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /section-subbanner -->

            <!-- Our Work -->
            <div class="page-category spacetb work01">
                <div class="container">
                    <div class="tab-controls">
                        <!--<ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-fade1" data-toggle="tab">All</a></li>
                            <li><a href="#tab-fade2" data-toggle="tab">Interior Design</a></li>
                            <li><a href="#tab-fade3" data-toggle="tab">Architecture</a></li>
                            <li><a href="#tab-fade4" data-toggle="tab">Building</a></li>
                            <li><a href="#tab-fade5" data-toggle="tab">Plumbing</a></li>
                        </ul>-->
                        <div class="tab-content" id="tab1">
                            <!-- tab1 -->
                            <div class="tab-pane fade in active" id="tab-fade1">
                                <div class="row our-work-v1">
                                 <?php                        									
					/****************************************GET CLIENTS***************************************/
 						$query1=mysql_query("select * from client_details where is_del='no'");
									
									while($rw111=mysql_fetch_array($query1))
									{ 
									   $client_unique_id=$rw111['client_unique_id'];
									   $client_name=$rw111['client_name'];
									   $contact=$rw111['contact'];
									   $address=$rw111['address'];
									   $photo=$rw111['photo'];
									   $descr=$rw111['descr'];
									 
								
		?>
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="pic hvr-image mb35">
                                        <?php if($photo!=""){?>
                                   <a href="work-single.html"><img class="img-responsive" src="<?php echo "admin/img/client/".$photo."";?>" alt="product"></a>
                                           <?php } ?>
                                        </div>
                                    </div>
                                   <?php } ?>
                                </div>
                            </div>
                            <!-- /tab1 -->

                            <!-- tab2 -->
                            <div class="tab-pane fade" id="tab-fade2">
                                Tab Interior Design<br><br><br><br><br><br><br>
                            </div>
                            <!-- /tab2 -->

                            <!-- tab3 -->
                            <div class="tab-pane fade" id="tab-fade3">
                                Tab Architecture<br><br><br><br><br><br><br>
                            </div>
                            <!-- /tab3 -->

                            <!-- tab4 -->
                            <div class="tab-pane fade" id="tab-fade4">
                                Tab Building<br><br><br><br><br><br><br>
                            </div>
                            <!-- /tab4 -->

                            <!-- tab5 -->
                            <div class="tab-pane fade" id="tab-fade5">
                                Tab Plumbing<br><br><br><br><br><br><br>
                            </div>
                            <!-- /tab5 -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Our Work -->

        </div>
        <!-- End Main -->

        <!-- Begin Footer -->
          <!-- Begin Footer -->
       <?php footer();?>
        <!-- End Footer -->
    </div>

    <!-- Java Scripts - Libs -->
    <?php js_links();?>
    

</body>


</html>
