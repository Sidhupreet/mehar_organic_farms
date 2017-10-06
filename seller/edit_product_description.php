<?php
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
						<h2>Edit Product</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Edit Product Details</span></li>
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
						
										<h2 class="panel-title">Update Record</h2>
									</header>
									<div class="panel-body">
                                    <?php
									
										$product_unique_id=$_GET['product_unique_id'];
										$show=mysql_query("select * from product_description where product_unique_id='$product_unique_id'") or die(mysql_error());
										
										while($row=mysql_fetch_array($show))
										{
										
										$product_id= $row ['id'];
										
										$product_unique_id= $row ['product_unique_id'];
										
										$product_name= $row ['product_name'];
										
										$category1= $row ['category'];
										$category=str_replace('_', ' ',$category1);
										
										$sub_category1= $row ['subcategory'];
										$subcategory=str_replace('_',' ',$sub_category1);
										
										$description= $row ['description'];
										
										$make= $row ['make'];
										
										$parameter1= $row ['parameter1'];
										
										$range1= $row ['range1'];
										
										$accuracy= $row ['accuracy'];
										
										$interface= $row ['interface'];
										
										$software_required= $row ['software_required'];
										
										$dimesions= $row ['dimesions'];
										
										//$brand_name= $row ['brand_name'];
										
										//$logo= $row ['logo'];
										
										$power_option= $row ['power_option'];
										
										$display= $row ['display'];
										
										$delivery_details= $row ['delivery_details'];
										
										
										}
									?>
                                   
										<form class="form-horizontal form-bordered" action="update_product_description.php" method="post" enctype="multipart/form-data">
                                        
                                        <input type="hidden" name="product_unique_id" value="<?php echo $product_unique_id;?>">
                                            
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Product Name</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="product_name" 
                                                    value="<?php echo $product_name; ?>" readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Category</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="category"
                                                    value="<?php echo $category; ?>" readonly>
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Sub Category</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="subcategory"
                                                    value="<?php echo $subcategory;?>" readonly>
												</div>
											</div>
                                            
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="textareaDefault">Description</label>
												<div class="col-md-6">
													<textarea class="form-control" rows="3" name="description" id="description" required><?php echo $description; ?></textarea>
												</div>
											</div>
                                            
                                             <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Make ( Brand Name )</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="make" 
                                                    value="<?php echo $make; ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Parameter</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="parameter1"
                                                    value="<?php echo $parameter1; ?>" >
												</div>
											</div>
                                           
                                            
                                            
                                             <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Range</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="range1" 
                                                    value="<?php echo $range1; ?>" >
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Accuracy</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="accuracy"
                                                    value="<?php echo $accuracy; ?>" >
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Interface</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault"name="interface"
                                                    value="<?php echo $interface;?>" >
												</div>
											</div>
                                            
                                             <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Software Required</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="software_required" 
                                                    value="<?php echo $software_required; ?>" >
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Dimesions</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="dimesions" 
                                                    value="<?php echo $dimesions; ?>" >
												</div>
											</div>
											<!--<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Brand Name</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="brand_name"
                                                    value="<?php// echo $brand_name; ?>" >
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Logo</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault"name="logo"
                                                    value="<?php// echo $logo;?>" >
												</div>
											</div>-->
                                             <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Power Option</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="power_option" 
                                                    value="<?php echo $power_option; ?>" >
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Display</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="display"
                                                    value="<?php echo $display; ?>" >
												</div>
											</div>
                                           
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Delivery Details</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault"name="delivery_details"
                                                    value="<?php echo $delivery_details;?>" >
												</div>
											</div>
						
											
						
											
						<br><br><br>
											
										<center>
										<button type="submit" class="mb-xs mt-xs mr-xs btn btn-info">Update</button>
                                        </center>
                                         

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

