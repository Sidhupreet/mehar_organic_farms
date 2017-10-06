<?php
error_reporting(0);
include"common-function.php";
include"../connect.php";
?>
<html class="fixed">
	

<head>

				<?PHP  all_links();?>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
								<?php header_main();?>

		
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
					<?php menu_bar();?>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Edit Catalogue</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Edit Catalogue</span></li>
							</ol>
					
						</div>
					</header>
					<!-- start: page -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>
						
										<h2 class="panel-title">Update Catalogue</h2>
									</header>
									<div class="panel-body">
                                    <?php
									
										$product_unique_id=$_GET['product_unique_id'];
							$show=mysql_query("select * from product_brochure where product_unique_id='$product_unique_id'") or die(mysql_error());
										
										while($row=mysql_fetch_array($show))
										{
										
										$brochure_id= $row ['brochure_id'];
										
										$product_unique_id= $row ['product_unique_id'];
										
										$brochure_img= $row ['brochure_img'];
										
										$file1= $row ['file'];
										
										$brochure_descr= $row ['brochure_descr'];
										
										}
									?>
                                   
										<form class="form-horizontal form-bordered" action="update_brochure.php" method="post" enctype="multipart/form-data">
                                        
                                        <input type="hidden" name="product_unique_id" value="<?php echo $product_unique_id;?>">
                                             
                                             
                                            
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="textareaDefault">Description</label>
												<div class="col-md-6">
													<textarea class="form-control" rows="3" name="brochure_descr" id="brochure_descr" required><?php echo $brochure_descr; ?></textarea>
												</div>
											</div>

                                             <?php if ($file1==""){ echo "<center>No Pdf Added</center>";}?>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="Photo">File</label>
												<div class="col-md-6">
                                                    <input type="hidden" name="hidden_file_name" value="<?php echo $file1;?>">
													<input type="file" class="form-control" name="file" id="file" >
												</div>
											</div>
                                            <?php if ($brochure_img!=""){?>
                                             <center><img src="<?php echo 'brochure_img/'.$brochure_img ?>" style="width:100px;height:100px;"></center><br><br>
                                            <?php } else echo "<center>No Brochure Added</center>";?>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Brochure Image</label>
												<div class="col-md-6">
                                                    <input type="hidden" name="hidden_image_name" value="<?php echo $brochure_img;?>">
													<input type="file" class="form-control" id="brochure_img"  name="brochure_img" >
												</div>
											</div>
                                            
                                           
						
										<button type="submit" class="btn btn-primary">Update</button>
                                        
                                         

										</form>
                                      

									</div>
								</section>
						
								
						
								
										
						
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>

		
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="assets/vendor/jquery-cookie/jquery-cookie.js"></script>		<script src="assets/vendor/style-switcher/style.switcher.js"></script>		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		<script src="assets/vendor/jquery-ui/jquery-ui.js"></script>		<script src="assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>		<script src="assets/vendor/jquery-appear/jquery-appear.js"></script>		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>		<script src="assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>		<script src="assets/vendor/flot/jquery.flot.js"></script>		<script src="assets/vendor/flot.tooltip/flot.tooltip.js"></script>		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>		<script src="assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>		<script src="assets/vendor/raphael/raphael.js"></script>		<script src="assets/vendor/morris.js/morris.js"></script>		<script src="assets/vendor/gauge/gauge.js"></script>		<script src="assets/vendor/snap.svg/snap.svg.js"></script>		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		
		<script>		  
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>

</html>

