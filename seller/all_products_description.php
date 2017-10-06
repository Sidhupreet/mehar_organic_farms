<?php include"common-function.php";

include"../connect.php";

?>
<!doctype html>
<html class="fixed">
	
<head>

			<!-- Basic -->
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
						<h2>Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
						</div>
					</header>

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								
						
								<h2 class="panel-title">All Products Description</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Product Name</th>
                                            <th>Category</th>
											<th>Subcategory</th>
                                            <th>Description</th>
											<th>Make(Brand Name)</th>
                                            <th>Parameter</th>
											<th>Range</th>
                                            <th>Accuracy</th>
											<th>Interface</th>
                                            <th>Software Required</th>
                                            <th>Dimensions</th>
											<th>Power Option</th>
                                            <th>Display</th>
											<th>Delivery Details</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
									$show=mysql_query("select * from product_description where is_del='no'") or die(mysql_error());
									
										while($row=mysql_fetch_array($show))
                                          {
											  $id=$row['id'];
											  $product_unique_id=$row['product_unique_id'];
								 			  $product_name=$row['product_name']; 
											  $category1=$row['category'];
											  $category=str_replace('_', ' ',$category1);
								 			  $sub_category1=$row['subcategory'];
											  $sub_category=str_replace('_', ' ',$sub_category1);
											  $description=$row['description'];
											  $make=$row['make'];
											  $parameter1=$row['parameter1'];
								 			  $range1=$row['range1']; 
											  $accuracy=$row['accuracy'];
								 			  $interface=$row['interface'];
											  $software_required=$row['software_required'];
											  $dimesions=$row['dimesions'];
											  $power_option=$row['power_option'];
											  $display=$row['display'];
								 			 /* $color=$row['color']; 
											  $style=$row['style'];
											  $size=$row['size'];
								 			  $packaging_details=$row['packaging_details'];*/
											  $delivery_details=$row['delivery_details'];

											  
									?>
									
										<tr class="gradeU">
											<td><?php echo $product_name;?></td>
											<td><?php echo $category;?></td> 
                                            <td><?php echo $sub_category;?></td>
											<td><?php echo $description;?></td>
                                            <td><?php echo $make;?></td>
											<td><?php echo $parameter1;?></td> 
											<td><?php echo $range1;?></td>
                                            <td><?php echo $accuracy;?></td>
											<td><?php echo $interface;?></td> 
                                            <td><?php echo $software_required;?></td>
											<td><?php echo $dimesions;?></td>
                                            <td><?php echo $power_option;?></td>
											<td><?php echo $display;?></td>
											<td><?php echo $delivery_details;?></td> 
											
                                            
                                            <td class="actions">
                                            <?php echo "<a href=edit_product_description.php?product_unique_id=".$row['product_unique_id'].">Edit</a>"; ?>
											<?php echo "<a href=delete_product_description.php?product_unique_id=".$row['product_unique_id'].">Delete</a>"; ?>
                                            <?php echo "<button class=mb-xs mt-xs mr-xs btn btn-success><a href=add_options.php?product_unique_id=".$row['product_unique_id'].">Add More Fields</a></button>"; ?>
                                            
                                            <?php echo "<button class=mb-xs mt-xs mr-xs btn btn-success><a href=../preview.php?product_unique_id=".$row['product_unique_id'].">Preview</a></button>"; ?>

											</td>
 
                                           
										</tr>
                                         <?php }?>
									</tbody>
								</table>
							</div>
						</section>
						
						
					<!-- end: page -->
				</section>
			</div>

		
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="assets/vendor/jquery-cookie/jquery-cookie.js"></script>		<script src="assets/vendor/style-switcher/style.switcher.js"></script>		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		<script src="assets/vendor/select2/js/select2.js"></script>		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
	</body>

</html>