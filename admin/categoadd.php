<?php include"common-function.php";
      include "../connect.php";
?><html class="fixed">
	

<head>

		<!-- Basic -->
		<?PHP  all_links();?>
		   


	</head>
	<script src="jquery.min.js" type="text/javascript"></script>
	<body>
	 <script type="text/javascript" async>
               $(document).ready(function(){
                    $("#submit").click(function(){
                         var category=$("#category").val();
						/// document.write(name);
                          
 
                         $.ajax({
                             type:"POST",
                              url:"addcatego.php",
                              data:"category="+category,
                             success:function(data){
                                 //$("#info").html(data);
                             if(data="Data inserted") {
      alert("Category Inserted successfully");
    } else {
      alert("Error");
    }
								
                              }
 
                        });
 
                    });
               });
       </script>
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
						<h2>Add Category</h2>
					
						<!---div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<!---li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Category Entry Form</span></li>
							</ol>
					
						</div--->
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
						
										<h2 class="panel-title">Add New Category</h2>
									</header>
									<div class="panel-body">
                                    <?php
									
									
									
									?>
										<form >
                                      
                                           <!--<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault"><b>Category<b></label>
												<div class="col-md-6">
													
													<select class="form-control mb-md" name="category" id="category" onChange="getCatego(this.value);" required>
														 <option value="">Select Category</option>
                                 <?php 
								 /*$show=mysql_query("select  DISTINCT(`category`) from product_category");
									
									while($rw=mysql_fetch_array($show))
									{ 
									echo"<option value='".$rw['category']."'>"; echo $rw['category']; echo"</option>";
									
									}*/
                                ?>
													</select>
                                                    
                                                    
                                                
													
												</div>
											</div>-->
                                            
                                            <!--<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Subcategory</label>
												<div class="col-md-6">
                                            
                                            <select class="form-control mb-md" name="subcategory" id="subcategory" onChange="" required>
														 <option value="">Select SubCategory</option>
                                					</select>
                                                    </div>
                                                    </div>-->
                                                    
                                                <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Add Category</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="category" name="category" required>
												</div>
											    </div>
                                                
                                                                                               
                                                    
                                            
                                          
                                          
                                           
                    </section>
                    </div></div>
                                            
						
											
						
											
						<br><br><br>
											
						
										<button type="submit" id="submit" class="btn btn-primary">Submit</button>
										<button type="reset" id="reset" class="btn btn-default">Cancel</button>
										</form>
                                      

									</div>					
                                    <!-- end: page -->
	
			
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