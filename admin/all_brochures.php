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
					
					
						<!---div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
						</div-->
					</header>

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								
						
								<h2 class="panel-title">All Brochures</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Product Name</th>
                                            <th>File</th>
                                            <th>Brochure Image</th>
											<th>Description</th>
											<th>Actions</th>
                                            <th>Preview</th>
                                            <th>Finalize</th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
									$show=mysql_query("select * from product_brochure where is_del='no'") or die(mysql_error());
									
										while($row=mysql_fetch_array($show))
                                          {
											  $brochure_id=$row['brochure_id'];
											  $product_unique_id=$row['product_unique_id'];
								 			  $brochure_img=$row['brochure_img']; 
											  $brochure_descr=$row['brochure_descr'];
											  $file_name= $row['file'];
											  $final_status= $row['final_status'];
											  
						$show1=mysql_query("select * from product_details where product_unique_id='$product_unique_id' and is_del='no'") or die(mysql_error());
									
										while($row1=mysql_fetch_array($show1))
                                          {
											  $product_name=$row1['product_name'];
											  
									?>
										<tr class="gradeU">
											<td><?php echo $product_name;?></td>
                                            
                                            
                                            <td>
											 <?php if($file_name!="")
											 {
                             					echo "<a href=../viewerjs/#../all_pdf/".$row['file'].">".$file_name."</a>";                                        
                              					 } 
                                            else
											{
												echo "No Pdf File Added..";
											}
											?>
                                            
											</td>
                                            
                                            
											<td><center>
                                            <?php if($brochure_img!=""){?>
                                            <img src="<?php echo 'brochure_img/'.$brochure_img ?>" style="width:50px;height:50px;">
                                            <?php } 
                                            else
											{
												echo "No Brochure Added..";
											}
											?>
                                            </center></td> 
											<td><?php echo $brochure_descr;?></td>
											<td class="actions">
                                            <?php echo "<a href=edit_brochure.php?product_unique_id=".$row['product_unique_id'].">Edit</a>"; ?>
											<?php echo "<a href=delete_brochure.php?product_unique_id=".$row['product_unique_id'].">Delete</a>"; ?>
                                            </td>
                                            <td class="actions">
                                            <?php echo "<button class=mb-xs mt-xs mr-xs btn btn-success><a href=../preview.php?product_unique_id=".$row['product_unique_id'].">Preview</a></button>"; ?>
                                            </td>
                                            <td class="actions">
                                            <button class=mb-xs mt-xs mr-xs btn btn-success>  
                                            <?php echo "<a href=finalize_product.php?product_unique_id=".$row['product_unique_id']."> Finalize</a>";?>
                                            </button>
                                            <?php
											if($final_status=='yes')
											{
											?>
                                            <div class="img1" style="margin-top: -30px; margin-left: 56px;">
                                            <img src="../images/finalize.png" height="30" width="30">
                                            </div>
                                            <?php } ?>



											</td>
                                            
                                           
										</tr>
                                         <?php }}?>
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