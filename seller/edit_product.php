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
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Edit Product Details</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
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
										$show=mysql_query("select * from product_details where product_unique_id='$product_unique_id'") or die(mysql_error());
										
										while($row=mysql_fetch_array($show))
										{
										
										$product_id= $row ['product_id'];
										
										$product_unique_id= $row ['product_unique_id'];
										
										$product_name= $row ['product_name'];
										
										$category1= $row ['category'];
										$category=str_replace('_', ' ',$category1);
										
										$sub_category1= $row ['sub_category'];
									    $sub_category=str_replace('_', ' ',$sub_category1);
										
										$short_descr= $row ['short_descr'];
										//$techno_specification= $row ['techno_specification'];
										
										//$model_no= $row ['model_no'];

										$price= $row ['price'];
										
										$photo= $row ['photo'];
										
										$photo1= $row ['photo1'];
										
										$photo2= $row ['photo2'];
										
										$photo3= $row ['photo3'];
										
										$photo4= $row ['photo4'];
										
										
										
										}
									?>
                                   
										<form class="form-horizontal form-bordered" action="update_product.php" method="post" enctype="multipart/form-data">
                                        
                                        <input type="hidden" name="product_unique_id" value="<?php echo $product_unique_id;?>">
                                            
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Product Name</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="product_name" 
                                                    value="<?php echo $product_name; ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Category</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="category"
                                                    value="<?php echo $category; ?>">
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Sub Category</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault"name="sub_category"
                                                    value="<?php echo $sub_category;?>">
												</div>
											</div>
                                            
                                            <?php if($photo!=""){?>
                                              <center><img src="<?php echo 'img/'.$photo ?>" style="width:100px;height:100px;"></center><br><br>
				                             <?php }
                                             else echo "<center>No Image Added !</center>";
											 ?>                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image</label>
												<div class="col-md-6">
                                                 <input type="hidden" name="hidden_image_name" value="<?php echo $photo;?>">
													<input type="file" class="form-control" id="photo"  name="photo">
												</div>
											</div>
                                            <?php if($photo1!=""){?>
                                              <center><img src="<?php echo 'img/'.$photo1 ?>" style="width:100px;height:100px;"></center><br><br>
				                             <?php }
                                             else echo "<center>No Image Added !</center>";
											 ?>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image</label>
												<div class="col-md-6">
                                                     <input type="hidden" name="hidden_image_name1" value="<?php echo $photo1;?>">
													<input type="file" class="form-control" id="photo1"  name="photo1" >
												</div>
											</div>
                                             <?php if($photo2!=""){?>
                                              <center><img src="<?php echo 'img/'.$photo1 ?>" style="width:100px;height:100px;"></center><br><br>
				                             <?php }
                                             else echo "<center>No Image Added !</center>";
											 ?>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image</label>
												<div class="col-md-6">
                                                 <input type="hidden" name="hidden_image_name2" value="<?php echo $photo2;?>">
													<input type="file" class="form-control" id="photo2"  name="photo2" >
												</div>
											</div>
                                            
                                              <?php if($photo3!=""){?>
                                              <center><img src="<?php echo 'img/'.$photo3 ?>" style="width:100px;height:100px;"></center><br><br>
				                             <?php }
                                             else echo "<center>No Image Added !</center>";
											 ?>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image</label>
												<div class="col-md-6">
                                                 <input type="hidden" name="hidden_image_name3" value="<?php echo $photo3;?>">
													<input type="file" class="form-control" id="photo3"  name="photo3" >
												</div>
											</div>
                                            
											 <?php if($photo4!=""){?>
                                              <center><img src="<?php echo 'img/'.$photo4 ?>" style="width:100px;height:100px;"></center><br><br>
				                             <?php }
                                             else echo "<center>No Image Added !</center>";
											 ?>                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image</label>
												<div class="col-md-6">
                                                 <input type="hidden" name="hidden_image_name4" value="<?php echo $photo4;?>">
				                                <input type="file" class="form-control" id="photo4"  name="photo4" >
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="textareaDefault">Description</label>
												<div class="col-md-6">
													<textarea class="form-control" rows="3" name="short_descr" id="short_descr"><?php echo $short_descr; ?></textarea>
												</div>
											</div>
                                            
                                            <!--<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Model No</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="model_no" 
                                                    value="<?php //echo $model_no; ?>">
												</div>
											</div>-->
                                            
                                            
                                            <!--<div class="form-group">
												<label class="col-md-3 control-label" for="textareaDefault">Technology Specification</label>
												<div class="col-md-6">
													<textarea class="form-control" rows="3" name="techno_specification" id="techno_specification"><?php //echo $techno_specification; ?></textarea>
												</div>
											</div>-->
                                            
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Current Price</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="price" 
                                                    value="<?php echo $price; ?>">
												</div>
											</div>
						
											
						
											
						<br><br><br>
											
						
										<button type="submit" class="btn btn-primary">Update</button>
                                        
                                         

										</form>
                                      

									</div>
								</section>
						
								
						
								
										
						
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/%21sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/%21sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/%21sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/%21sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
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

