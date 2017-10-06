<?php include"common-function.php";



include "../connect.php";



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

									<a href="home.php">

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

								

						

								<h2 class="panel-title">All Products</h2>

							</header>

							<div class="panel-body">

								<table class="table table-bordered table-striped mb-none" id="datatable-default">

									<thead>

										<tr>

											<th>Client Name</th>

											<th>Contact</th>

                                            <th>Address</th>

                                            <th>Photo</th>

											<th>Description</th>

											<th>Actions</th>

										</tr>

									</thead>

									<tbody>

                                    <?php 

									$show=mysql_query("select * from client_details where is_del='no'") or die(mysql_error());

									

										while($row=mysql_fetch_array($show))

                                          {

											  $client_id=$row['client_id'];

											  $client_unique_id=$row['client_unique_id'];

								 			  $client_name=$row['client_name'];

											  $contact=$row['contact'];

											  $address=$row['address']; 

											  $photo=$row['photo'];

											   $descr=$row['descr']; 

											  //$short_descr=$row['short_descr'];

									?>

									

										<tr class="gradeU">

											<td><?php echo $client_name;?></td>

                                            

											

											<td><?php echo $contact;?></td>

											

											<td><?php echo $address;?></td>

											

                                           <td> <?php if($photo!=""){?>

                                            <img src="<?php echo 'img/client/'.$photo ?>" style="width:50px;height:50px;">

                                            <?php } 

                                            else

											{

												echo "No Photo Added..";

											}

											?>

                                            </center></td> 

											<td><?php echo $descr;?></td>

											<td class="actions">

                                            <?php echo "<a href=edit_client.php?client_unique_id=".$row['client_unique_id'].">Edit</a>"; ?>

											<?php echo "<a href=delete_client.php?client_unique_id=".$row['client_unique_id'].">Delete</a>"; ?>



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