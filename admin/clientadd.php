<?php include"common-function.php";
      include "../connect.php";
?>
<html class="fixed">

	



<head>



		<!-- Basic -->

		<?PHP  all_links();?>

<script src="assets/javascripts/jquery-2.1.1.min.js" type="text/javascript"></script>

        

<script>

function getCatego(val)

{

	

	$.ajax({

	type: "POST",

	url: "get_catego.php",

	

	data:'category='+val,

	success: function(data){

		$("#subcategory1").html(data);

	}

	});

}

</script>

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

						<h2>Add Client</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="#">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Client Entry Form</span></li>

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

						

										<h2 class="panel-title">Add New Product</h2>

									</header>

									<div class="panel-body">

                                   

										<form class="form-horizontal form-bordered" action="addclient.php" method="post" enctype="multipart/form-data">

                                               <div class="form-group">

												<label class="col-md-3 control-label" for="inputDefault">Client Name</label>

												<div class="col-md-6">

													<input type="text" class="form-control" id="client_name" name="client_name" required>

												</div>

											    </div>

                                                

                                                <div class="form-group">

												<label class="col-md-3 control-label" for="inputDefault">Contact No</label>

												<div class="col-md-6">

													<input type="text" class="form-control" id="contact" name="contact" >

												</div>

											    </div>

                                            

                                             <div class="form-group">

												<label class="col-md-3 control-label" for="textareaDefault">Address<br>

                                                </label>

												<div class="col-md-6">

													<textarea class="form-control" rows="3" name="address" id="address" title="Address" ></textarea>

												</div>

											</div>

                                            

                                            

                                             <div class="form-group">

												<label class="col-md-3 control-label" for="inputDefault">Image</label>

												<div class="col-md-6">

													<input type="file" class="form-control" id="photo" name="photo">

												</div>

											 </div>

                                            

                                              

                                            <div class="form-group">

												<label class="col-md-3 control-label" for="textareaDefault">Description<br>

                                                </label>

												<div class="col-md-6">

													<textarea class="form-control" rows="3" name="descr" id="descr" title="Description" ></textarea>

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