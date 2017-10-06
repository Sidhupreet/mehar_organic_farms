<?php include "common_functions.php";
//$category_shital=$_GET['category'];
 $query = $_POST['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length)
	
	{ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection


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
            <div class="section-subbanner" style="background-image:url(images/slider/Temperature_Measurement_Banner.jpg)">
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
                            <center>
                                <div class="product-listing-wp">
                                    <!-- product-title-wp -->
                                    <div class="product-title-wp clearfix">
                                        <div class="product-title" style="margin-left:250px;">
                                           <center> Search Results </center>
                                        </div>
                                        
                                    </div>
                                    <!-- //product-title-wp -->
                                    
                                    <br><br>

                                    <!-- product-box -->
                                      <?php   
									  $show = mysql_query("SELECT * FROM product_details
            WHERE (`product_name` LIKE '%".$query."%') OR (`category` LIKE '%".$query."%') OR (`sub_category` LIKE '%".$query."%') OR (`techno_specification` LIKE '%".$query."%')")  or die(mysql_error());
			
			 if (mysql_num_rows($show) == 0)
								 {
									 echo "<div class=col-lg-10 col-md-10 col-sm-9 col-xs-12>
                                    <h4><center>Ooops....! No Products Found For ".$query."..!</center></h4>
								    </div>";
								 } 
								 else
									if(mysql_num_rows($show) > 0)
									
									{ // if one or more rows are returned do following
								
								//$show=mysql_query("select * from product_details where is_del='no' and final_status='no'");
									
									while($rw=mysql_fetch_array($show))
									{ 
									$rw['product_unique_id'];
									$product_name=$rw['product_name'];
									$category=$rw['category'];
									$rw['sub_category'];
									$rw['short_descr'];
									$photo=$rw['photo'];
									$price=$rw['price'];
									
									//echo"<li><a href=shop-1.php>"; echo $rw['category']; echo"</li></a>";
									
                                ?>
                                    <div class="product-box">
                                        <ul class="products row">
                                            <li class="product-item col-xs-6 col-sm-4" style="margin-left:250px;">
                                                <div class="flip-image">
                                                    <div class="pic" class="foto_style"> 
													<?php    echo "<a href=shop-2.php?product_unique_id=".$rw['product_unique_id'].">";
											         echo "<img src=admin/img/".$photo." alt=product class=img-responsive style=height:250px; width=400px;>";
                                                     echo "</a>";
											        ?>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <div class="product-meta">
                                                    <a href="single-shop.html">
                                                        <div class="name"><?php echo $product_name;?></div>
                                                        <hr>
                                                       <!-- <div class="price">
                                                            <ins><span class="amount"><?php //echo $price;?></span></ins>
                                                        </div>-->
                                                     </a>
                                                </div>
                                            </li>
                                            
                                            
                                      
                                                                          
                                        </ul>
                                        
                                    </div>
                                    
                                    <?php } } } ?>
                                    <!-- product-box -->

                                </div>
                                </center>
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
