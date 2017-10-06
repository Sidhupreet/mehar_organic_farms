<?php include"common-function.php";
      include"../connect.php";
	  $product_unique_id1=$_GET['product_unique_id'];
	  $product_name="";
	  $show=mysql_query("select * from product_details where product_unique_id='$product_unique_id1'") or die(mysql_error());


while($row=mysql_fetch_array($show))
{
$product_id= $row ['product_id'];

$product_unique_id= $row ['product_unique_id'];

$product_name= $row ['product_name'];

$category= $row ['category'];
$category1=str_replace('_', ' ',$category);

$sub_category= $row ['sub_category'];
$sub_category1=str_replace('_', ' ',$sub_category);

$short_descr= $row ['short_descr'];

}


?>

?><html class="fixed">
	

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
						<h2>Add Description</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Add Description</span></li>
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
						
										<h2 class="panel-title">Add Description</h2>
									</header>
									<div class="panel-body">
                                    <?php
									
									
									
									?>
										<form class="form-horizontal form-bordered" action="adddescription.php" method="post">
                                        <input type="hidden" value="<?php echo $product_id;?>" name="product_id">
                                        <input type="hidden" value="<?php echo $product_unique_id;?>" name="product_unique_id">
                                              <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Product Name</label>
												<div class="col-md-6">
													<input class="form-control" id="sample_no" type="text" 
                                                    value="<?php echo $product_name;?>"  placeholder=""<?php echo $product_name;?>"" name="product_name" disabled>
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Category</label>
												<div class="col-md-6">
													<input class="form-control" id="sample_no" type="text" 
                                                    value="<?php echo $category1;?>"   name="category" disabled>
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Subcategory</label>
												<div class="col-md-6">
													<input class="form-control" id="sample_no" type="text" 
                                                    value="<?php echo $sub_category1;?>"  name="sub_category" disabled>
												</div>
											</div>
                                            
                                            
                                            
                                                    
                                                    
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="textareaDefault">Description</label>
												<div class="col-md-6">
													<textarea class="form-control" rows="3" name="description" id="description" required></textarea>
												</div>
											</div>
                                                    
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Make (Brand Name)</label>
												<div class="col-md-6">
													<input class="form-control" id="make" type="text" name="make" >
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Parameter</label>
												<div class="col-md-6">
													<input class="form-control" id="parameter1" type="text" name="parameter1" >
												</div>
											</div>
                                              
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Range</label>
												<div class="col-md-6">
													<input class="form-control" id="range1" type="text" name="range1" >
												</div>
											</div>

                                           
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Accuracy</label>
												<div class="col-md-6">
													<input class="form-control" id="accuracy" type="interface" name="accuracy" >
												</div>
											</div>
                                        <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Interface</label>
												<div class="col-md-6">
													<input class="form-control" id="interface" type="text" name="interface" >
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Software Required</label>
												<div class="col-md-6">
													<input class="form-control" id="software_required" type="text" name="software_required">
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Dimensions</label>
												<div class="col-md-6">
													<input class="form-control" id="dimesions" type="text" name="dimesions" >
												</div>
											</div>
                                       
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Power Option</label>
												<div class="col-md-6">
													<input class="form-control" id="power_option" type="text" name="power_option" >
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Display</label>
												<div class="col-md-6">
													<input class="form-control" id="display" type="text" name="display" >
												</div>
											</div>
                                            
                                           
                                            
                                              <div class="form-group">
												<label class="col-md-3 control-label" for="textareaDefault">Delivery Details</label>
												<div class="col-md-6">
													<textarea class="form-control" rows="3" name="delivery_details" id="delivery_details" ></textarea>
												</div>
											</div>
                                            
                                            <center>
                                            <input type="submit" name="Submit" value="Submit" class="mb-xs mt-xs mr-xs btn btn-warning">
										    <button type="reset" class="btn btn-default">Cancel</button>
                                            </center>
										</form>
                    </section>
                    </div></div>
                                            
						
											
						
											
						<br><br><br>
											
						
										
                                      

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
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>

<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.4.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Oct 2015 10:26:11 GMT -->
</html>