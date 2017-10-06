<?php include "common_functions.php";
include "connect.php";


 $show=mysql_query("select * from product_details where is_del='no' and final_status='yes'");
								
								//$show=mysql_query("select * from product_details where is_del='no' and final_status='no'");
			$i=0;						
									
$dyn_table="<table border=1 cellpadding=10>";
while($rw=mysql_fetch_array($show))
									{ 
									$rw['product_unique_id'];
									$product_name=$rw['product_name'];
									$photo=$rw['photo'];
					
					
		if($i%3==0)
		{
		$dyn_table.='<tr><td td class=foto_style> <a href="shop-2.php?product_unique_id='.$rw['product_unique_id'].'"><img src=admin/img/'.$rw['photo'].' alt="product" class="img-responsive" style="width:200px; height:200px" ><br>'.$rw['product_name'].'</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
		
		}
		else
		{
		$dyn_table.='<td td class=foto_style><a href="shop-2.php?product_unique_id='.$rw['product_unique_id'].'"><img src=admin/img/'.$rw['photo'].' alt="product" class="img-responsive" style="width:200px; height:200px" ><br>'.$rw['product_name'].'</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
		}			
			$i++;		
						
					
									}

$dyn_table.='</tr></table>';
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <?php css_links();?>
	
</head>

<body>
    <div class="wrapper shoppage01">
        <!-- Begin header -->
          <?php header1();?>
        <!-- End header -->

        <!-- Begin Main -->
        <div id="main" class="content-main">

            <!-- section-subbanner -->
           <!-- <div class="section-subbanner" style="background-image:url(images/slider/Temperature_Measurement_Banner.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="caption text-uppercase">Shop</div>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a> </li>
                                <li><a href="shop-1.php">Shop</a> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /section-subbanner -->

            <!-- Shop V1 -->
          <div class="shop shop01">
                <div class="container">
                    <div class="row">
                        <!-- left-sidebar -->
                        <?php left_sidebar();?>
                        <!-- /left-sidebar -->

                        <!-- product-listing-wrapper -->
                        <div class="col-md-9 primary-content">
                            <article class="article-content">
                                <div class="product-listing-wp">
                                    <!-- product-title-wp -->
                                    <div class="product-title-wp clearfix">
                                        <div class="product-title">
                                            All Products
                                        </div>
                                        <!--
                                          <div class="col-lg-3" style="margin-left: 300px;">
                        <form action="search_result.php" method="post" class="searchForm">
                            <input type="search" name="query" placeholder="Search..." style="border-color:#000">
<!--                            <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </div>-->
                                    </div>
                                    <?php /*---------------product list----------------------------------*/?>
                                   
                                 <?php  echo $dyn_table;
										?>
							  
							   <?php /*-------------------------------------------------------------*/?>
									
								</div>
                            </article>
                        </div>
                        <!-- /product-listing-wrapper -->

                    </div>
                </div>
            </div>
            <!-- /Shop V1 -->

        </div>
        <!-- End Main -->

         <!-- Begin Footer -->
       <?php footer();?>
        <!-- End Footer -->
    </div>

    <!-- Java Scripts - Libs -->
   <?php js_links(); ?>
</body>


</html>
