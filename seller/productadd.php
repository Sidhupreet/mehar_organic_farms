<?php include"common-function.php";
      include "../connect.php";
?>
<html class="fixed">
	

<head>

		<!-- Basic -->
		<?PHP  all_links();?>

  <script src="jquery.min.js" type="text/javascript"></script>
	</head>
	<script type="text/javascript" async>
function getCatego(val)
{
	//document.write(val);
	$.ajax({
	type: "POST",
	url: "get_catego.php",
	
	data:'category='+val,
	success: function(data){
		//document.write(data);
		$("#subcategory1").html(data);
	}
	});
}
</script>

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
						<h2>Add Product</h2>
					
						<!----div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Product Entry Form</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div-->
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
						
										<h2 class="panel-title">Add New Product</h2>
									</header>
									<div class="panel-body">
                                    <?php
									
									
									
									?>
										<form class="form-horizontal form-bordered" action="addproduct.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" value="<?php echo $product_id;?>" name="product_id">
                                        <input type="hidden" value="<?php echo $product_unique_id;?>" name="product_unique_id">
                                               <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Product Name</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="product_name" name="product_name" required>
												</div>
											    </div>
                                            
                                           <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault"><b>Category<b></label>
												<div class="col-md-6">
													
													<select class="form-control mb-md" name="category" id="category" onChange="getCatego(this.value);" required>
														 <option value="">Select Category</option>
                                 <?php 
								 $show=mysql_query("select  DISTINCT(`category`) from product_category");
									
									while($rw=mysql_fetch_array($show))
									{ 
									$category1=$rw['category'];								          
						            $category=str_replace('_', ' ',$category1);
									echo"<option value='".$rw['category']."'>"; echo $category; echo"</option>";
									}
                                ?>
													</select>
                                                    
                                                    
                                                
													
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Subcategory</label>
												<div class="col-md-6">
                                            
                                            <select class="form-control mb-md" name="subcategory" id="subcategory1">
														 <option value="">Select Subcategory</option>
                                
													</select>
                                                    </div>
                                                    </div>
                                             <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image<br><small><font color="#FF0000">(Please Add Image Size 350* 350)</font></small></label>
												<div class="col-md-6">
													<input type="file" class="form-control" id="photo" name="photo" required>
												</div>
											 </div>
                                             <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image<br><small><font color="#FF0000">(Please Add Image Size 350* 350)</font></small></label>
												<div class="col-md-6">
													<input type="file" class="form-control" id="photo1" name="photo1" >
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image<br><small><font color="#FF0000">(Please Add Image Size 350* 350)</font></small></label>
												<div class="col-md-6">
													<input type="file" class="form-control" id="photo2" name="photo2" >
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image<br><small><font color="#FF0000">(Please Add Image Size 350* 350)</font></small></label>
												<div class="col-md-6">
													<input type="file" class="form-control" id="photo3" name="photo3" >
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Image<br><small><font color="#FF0000">(Please Add Image Size 350* 350)</font></small></label>
												<div class="col-md-6">
													<input type="file" class="form-control" id="photo4" name="photo4">
												</div>
											</div>
                                            
                                              
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="textareaDefault">Description <br>
                                                <small><font color="#FF0000">(This Field Contans One-Two line Description Which is to be Displaying on the Top)</font></small></label>
                                               
												<div class="col-md-6">
													<textarea class="form-control" rows="3" name="descr" id="descr" required></textarea>
												</div>
											</div>
                                            
                                            <!--<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Technology Specification</label>
												<div class="col-md-6">
													<textarea class="form-control" rows="3" name="techno_specification" id="techno_specification"></textarea>
												</div>
											    </div>-->
                                                
                                                <!--<div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Model No</label>
												<div class="col-md-6">
													<input class="form-control" id="model_no" type="text" name="model_no" >
												</div>
												</div>-->
                                            
                                            
                                           	    <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Price</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="price" name="price">
												</div>
											    </div>
                                                <br><br><br><center>
                                             
<!--                                          <button type="button" onClick="" class="btn btn-primary">Preview</button>      
-->                                        <button type="submit" class="btn btn-primary">Submit</button>
										<button type="reset" class="btn btn-default">Cancel</button>
                                        </center>
                                          
										</form>
                                           
                    </section>
                    </div></div>
                                            
						
											
						
											
						
											
						
										
                                      

									</div>					
                                    <!-- end: page -->
	
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