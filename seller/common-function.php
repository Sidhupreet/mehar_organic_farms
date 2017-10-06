<?php
function all_links()
{
?>
<meta charset="UTF-8">

		<title>Mehar Farms</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->		<link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css" />		<link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.theme.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />		<link rel="stylesheet" href="assets/vendor/morris.js/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
<?php }?>

<?php
function menu_bar()
{
?>
<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="home.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
                                    <li class="nav-parent">
										<a>
											<i class="glyphicon glyphicon-align-left" aria-hidden="true"></i>
											<span>Categories/Sub Categories</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="categoadd.php">
													 Add New Category
												</a>
											</li>
                                            
											
                                            <li>
												<a href="subcategoadd.php">
													 Add New Sub Category
												</a>
											</li>
                                            <li>
												<a href="all_categories.php">
													 View All Categories
												</a>
											</li>
                                            <li>
												<a href="all_categories.php">
													 View All Categories/Subcategories
												</a>
											</li>
											<!--<li>
												<a href="all_subcategories.php">
													 View All Categories/Subcategories
												</a>
											</li>-->
											
											
										</ul>
                                        </li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Manage Products</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="productadd.php">
													 Add Product
												</a>
											</li>
                                            
											<li>
												<a href="all_products.php">
													 View All Products
												</a>
											</li>
											
											
										</ul>
                                        </li>
                                        <li class="nav-parent">
										<a href="view_orders.php">
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>View Orders</span>
										</a>
										</li>
                                        <!--<li class="nav-parent">
										<a>
											<i class="glyphicon glyphicon-th-list" aria-hidden="true"></i>
											<span>Manage Products Description</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="add_product_description.php">
													 Add Product Description
												</a>
											</li>
                                            
											<li>
												<a href="all_products_description.php">
													 View All Products Description
												</a>
											</li>
											
											
										</ul>
                                        </li>-->
                                       
										<!--<ul class="nav nav-children">
											<li>
												<a href="categoadd.php">
													 Add Category
												</a>
											</li>
                                            
											<li>
												<a href="all_categories.php">
													 View All Categories
												</a>
											</li>
											
											
										</ul>-->
                                        
                                        </li>
                                        
                                        
                                        </li>
                                        <!--<li class="nav-parent">
										<a>
                                       <!--<div class="demo-icon-hover mb-sm mt-sm col-md-6 col-lg-4 col-xl-3">
                                       <i class="glyphicon glyphicon-star-empty"></i> Manage Review 
                                       </div>>

											<i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i>
											<span>Manage Review</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="add_review.php">
													 Add Review
												</a>
											</li>
                                            
											<li>
												<a href="all_review.php">
													 View All Review
												</a>
											</li>
											
											
										</ul>
                                        </li>-->
                                        
                                        
                                        <li class="nav-parent">
										<a>
											<i class="glyphicon glyphicon-file" aria-hidden="true"></i>
											<span>Manage Product Catalogue</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="add_brochure.php">
													 Add Product Catalogue
												</a>
											</li>
                                            
											<li>
												<a href="all_brochures.php">
													 View All Product Catalogue
												</a>
											</li>
											
											
										</ul>
                                        </li>
                                        
                                        
                                        <!--<li class="nav-parent">

										<a>

											<i class="fa fa-user-plus" aria-hidden="true"></i>

											<span>Manage Clients</span>

										</a>

										<ul class="nav nav-children">

											<li>

												<a href="clientadd.php">

													 Add Client

												</a>

											</li>

                                            

											<li>

												<a href="all_clients.php">

													 View All Clients

												</a>

											</li>

											

											

										</ul>

                                        
                                        <li class="">

										<a href="logout.php">

											<i class="glyphicon glyphicon-off" aria-hidden="true"></i>

											<span>Logout</span>

										</a>

                                        </li>
									</li>-->
                                    
                                    
                                    
                                    
									<!--<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Manage Teachers</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="teacheradd.php">
													 Add Teacher
												</a>
											</li>
											<li>
												<a href="display_teachers.php">
													 View All Teachers
												</a>
											</li>
											
										</ul>
									</li>-->
                                    
									<!--<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Manage Batches</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="batchadd.php">
													 Add Batch
												</a>
											</li>
											<li>
												<a href="display_batches.php">
													 View All Batches
												</a>
											</li>
										</ul>
									</li>-->
									<!--<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Manage Subjects</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="subjectadd.php">
													 Add Subject
												</a>
											</li>
											<li>
												<a href="display_subjects.php">
													 View All Subjects
												</a>
											</li>
										</ul>
									</li>-->
									<!--<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Staff Management</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="staffadd.php">
													 Add New Staff
												</a>
											</li>
											
											<li>
												<a href="display_staff.php">
													 View All Staff
												</a>
											</li>
                                            
										</ul>
									</li>-->
                                    <!--<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Manage Standards</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="standardadd.php">
													 Add Standard
												</a>
											</li>
											<li>
												<a href="display_standard.php">
													 View All Standards
												</a>
											</li>
										</ul>
									</li>-->
                                    <!--<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Manage Field Types</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="fieldadd.php">
													 Add Field Type
												</a>
											</li>
											<li>
												<a href="display_fields.php">
													 View All Field Types
												</a>
											</li>
										</ul>
									</li>-->
									<!--<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>Attendance Management</span>
										</a>
										<ul class="nav nav-children">
											
											<li class="nav-parent">
												<a>Student</a>
												<ul class="nav nav-children">
                                                <li>
														<a href="view_batches.php">Add Attendance</a>
												</li>
													<li class="nav-parent">
														<a>View Attendance</a>
														<ul class="nav nav-children">
                                                        	<li>
																<a href="all_reports_student.php">All Reports</a>
															</li>
															<li>
																<a href="display_datewise.php">Display Datewise</a>
															</li>
                                                            <li>
																<a href="display_batchwise.php">Display Batchwise</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
                                        
                                        <ul class="nav nav-children">
											
											<li class="nav-parent">
												<a>Teacher</a>
												<ul class="nav nav-children">
                                                <li>
														<a href="teachers.php">Add Attendance</a>
												</li>
													<li class="nav-parent">
														<a>View Attendance</a>
														<ul class="nav nav-children">
                                                        	<li>
																<a href="all_reports_teacher.php">All Reports</a>
															</li>
															<li>
																<a href="displaydatewise.php">Display Datewise</a>
															</li>
															
														</ul>
													</li>
													
													
												</ul>
											</li>
										</ul>
                                        
                                        <ul class="nav nav-children">
											
											<li class="nav-parent">
												<a>Staff</a>
												<ul class="nav nav-children">
                                                <li>
														<a href="staff.php">Add Attendance</a>
												</li>
													<li class="nav-parent">
														<a>View Attendance</a>
														<ul class="nav nav-children">
                                                        	<li>
																<a href="all_reports_staff.php">All Reports</a>
															</li>
															<li>
																<a href="datewise.php">Display Datewise</a>
															</li>
															
														</ul>
													</li>
													
													
												</ul>
											</li>
										</ul>
									</li>-->
									<!--<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>Study Material</span>
										</a>
										<ul class="nav nav-children">
											
											<li class="nav-parent">
												<a>Notes(PDF/PPT/Doccument)</a>
												<ul class="nav nav-children">
													<li>
														<a href="upload_file.php">Add Notes</a>
													</li>
													<li>
														<a href="standards.php">View All</a>
													</li>
												</ul>
											</li>
                                            <li class="nav-parent">
												<a>Videos</a>
												<ul class="nav nav-children">
													<li>
														<a href="upload_video.php">Add Videos</a>
													</li>
													<li>
														<a href="standards1.php">View All</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>-->
									
									
									
								</ul>
							</nav>
				
							
							
						</div>
				
					</div>


<?php } ?>

<?php  function header_main()
{
?>

<header class="header">
				<div class="logo-container">
<h4>Mehar Organic Farms</h4><div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				
				<!-- end: search & user box -->
			</header>
			<?php  }?>

