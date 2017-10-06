<?php 
 include "common_functions.php";
include "connect.php";
session_start();
error_reporting(0);
//$id=session_id();
  //$_SESSION['sessid'] = $id;
 //$_SESSION['sessid'];
$product_unique_id=$_GET['product_unique_id'];
$product_review="";
$brochure_descr="";
 //$_SESSION["cart_item1"];
 //$test2= $_SESSION["cart_item1"];
//print_r($test2);
?>
<!DOCTYPE html>
<html lang="en">


<head>
     <?php css_links();?>
     
     <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<script type="text/javascript">
function changeIt(objName)
{
	//The image object accessed through its id we mentioned in the DIV block which is going to be visible currently
	var obj = document.getElementById(objName);
	
	//An array that hold the IDs of images that we mentioned in their DIV blocks
	var objId = new Array();
	
	//Storing the image IDs into the array starts here
	objId[0] = "image1";
	objId[1] = "image2";
	objId[2] = "image3";
	objId[3] = "image4";
	objId[4] = "image5";
	//Storing the image IDs into the array ends here
	
	//A counter variable going to use for iteration
	var i;
	
	//A variable that can hold all the other object references other than the object which is going to be visible
	var tempObj;
	
	//The following loop does the display of a single image based on its ID. The image whose ID we passed into this function will be the
	//only image that is displayed rest of the images will be hidden based on their IDs and that part has been handled by the else part
	//of the if statement within this loop.
	for(i=0;i<objId.length;i++)
	{
		if(objName == objId[i])
		{
			obj.style.display = "block";
		}
		else
		{
			tempObj = document.getElementById(objId[i]);
			tempObj.style.display = "none";	
		}
	}
	return;	
}
</script>
 <style>


div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 80px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height:80px;
	width: 80px;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>

<body>
    <div class="wrapper single-shop-page">
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
                                <li><a href="shop-2.php">Shop</a> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /section-subbanner -->

            <!-- Shop V2 -->
            <div class="shop single-shop">
                <div class="container">
                    <div class="row">

                        <!-- product-listing-wrapper -->
                        <div class="col-md-9 primary-content">
                            <article class="article-content">
                                <!-- single-shop -->
                                <div class="single-shop">

                                    <!-- single-product-details -->
                                    <?php 
			$show=mysql_query("select * from product_details where product_unique_id='".$product_unique_id."' and is_del='no' and final_status='yes'");
									
									while($rw=mysql_fetch_array($show))
									{ 
									   $product_name=$rw['product_name'];
									   $model_no=$rw['model_no'];
									   $photo=$rw['photo'];
									   $photo1=$rw['photo1'];
									   $photo2=$rw['photo2'];
									   $photo3=$rw['photo3'];
									   $photo4=$rw['photo4'];
									   $price=$rw['price'];
									   $short_descr=$rw['short_descr'];
									   $category=$rw['category'];
									   $sub_category=$rw['sub_category'];
									   $price=$rw['price'];
									
                                ?>
                                    <div class="single-product-details row">
                                        <div class="col-sm-6 product-images">
                                            <div id="sync1" class="owl-carousel">
               <?php if($photo!=""){ ?>
                <div id="image1">
			   <a class="product-image-light-box" href="<?php echo "admin/img/".$photo."";?>" data-toggle="lightbox" data-title="<?php echo $product_name ?>">
                <img src="<?php echo "admin/img/".$photo."";?>" alt="product"/>
                <span class="ef arrow_expand_alt3"></span>
                </a>
                </div>
               <?php }?>
               
               <?php if($photo1!=""){ ?>
                <div id="image2" style="display:none">
              <a class="product-image-light-box" href="<?php echo "admin/img/".$photo1."";?>" data-toggle="lightbox" data-title="<?php echo $product_name ?>">
                <img src="<?php echo "admin/img/".$photo1."";?>" alt="product"/>
                <span class="ef arrow_expand_alt3"></span>
                </a>
                </div>
                <?php }?>
                <?php if($photo2!=""){ ?>
                <div id="image3" style="display:none">
              <a class="product-image-light-box" href="<?php echo "admin/img/".$photo2."";?>" data-toggle="lightbox" data-title="<?php echo $product_name ?>">
                <img src="<?php echo "admin/img/".$photo2."";?>" alt="product"/>
                <span class="ef arrow_expand_alt3"></span>
                </a>
                </div>
                <?php } ?>
                <?php if($photo3!=""){ ?>
                <div id="image4" style="display:none">
              <a class="product-image-light-box" href="<?php echo "admin/img/".$photo3."";?>" data-toggle="lightbox" data-title="<?php echo $product_name ?>">
                <img src="<?php echo "admin/img/".$photo3."";?>" alt="product"/>
                <span class="ef arrow_expand_alt3"></span>
                </a>
                </div>
                <?php } ?>
                
                <?php if($photo4!=""){ ?>
                <div id="image5" style="display:none">
              <a class="product-image-light-box" href="<?php echo "admin/img/".$photo4."";?>" data-toggle="lightbox" data-title="<?php echo $product_name ?>">
                <img src="<?php echo "admin/img/".$photo4."";?>" alt="product"/>
                <span class="ef arrow_expand_alt3"></span>
                </a>
                </div>
                <?php }?>
                                            </div>
                                            <div id="sync2" class="owl-carousel">
             <?php if($photo!=""){ ?>
              <div class="img"><a id="one" href="#" onclick="changeIt('image1');"><img src="<?php echo "admin/img/".$photo."";?>"></a></div>
			  <?php }?>
             <?php if($photo1!=""){ ?> 
             <div class="img"><a id="two" href="#" onclick="changeIt('image2');"><img src="<?php echo "admin/img/".$photo1."";?>"></a></div>
			 <?php }?>
             <?php if($photo2!=""){ ?> 
             <div class="img"><a id="three" href="#" onclick="changeIt('image3');"><img src="<?php echo "admin/img/".$photo2."";?>"></a></div>
			 <?php }?>
			  <?php if($photo3!=""){ ?>
              <div class="img"><a id="four" href="#" onclick="changeIt('image4');"><img src="<?php echo "admin/img/".$photo3."";?>"></a></div>
			  <?php }?>
              <?php if($photo4!=""){ ?>
              <div class="img"><a id="five" href="#" onclick="changeIt('image5');"><img src="<?php echo "admin/img/".$photo4."";?>"></a></div>
			  <?php }?>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                        <!-- /product-images -->

                                        <div class="col-sm-6">
                                            <div class="summary">
                                                <h1 class="summary-title"><?php echo $product_name?></h1>
                                                <p><?php echo $short_descr?></p>
                                               
                                                
            
 <!----------------------------------------------------------------Product Description-------------------------------------------------------------------->             
              
               <?php 
			  
								 $show=mysql_query("select * from product_description where product_unique_id='".$product_unique_id."' and is_del='no' and final_status='yes'");
									
									while($rw=mysql_fetch_array($show))
									{ 
									   $description=$rw['description'];
									   $category1=$rw['category'];
									   $category=str_replace('_',' ',$category1);
									   $subcategory=$rw['subcategory'];
									   $product_type=$rw['product_type'];
									   $make=$rw['make'];
									   $parameter1=$rw['parameter1'];
									   $range1=$rw['range1'];
									   $accuracy=$rw['accuracy'];
									   $interface=$rw['interface'];
									   $software_required=$rw['software_required'];
									   //$brand_name=$rw['brand_name'];
									   //$logo=$rw['logo'];
									   $dimesions=$rw['dimesions'];
									   $power_option=$rw['power_option'];
									   $display=$rw['display'];
									  $additional_details=$rw['additional_details'];
									   
									   $delivery_details=$rw['delivery_details'];
                                ?>             
                                             
                                                <ul class="more-infor">
                                                    <table>
                                            <?php if($make!="") {?>
                                            <tr><td style="width:150px;"><b>Make</b><td>:</td></td><td>&nbsp;&nbsp;</td><td><?php echo "".$make."";?></td></tr>
                                            <?php } ?>
                                            
                                            <?php if($parameter1!="") {?>
                                            <tr><td><b>Parameter</b><td>:</td></td><td>&nbsp;&nbsp;</td><td><?php echo "".$parameter1."";?></td></tr> 
											<?php } ?>
                                            
                                            <?php if($range1!="") {?>
                                            <tr><td><b>Range</b><td>:</td></td><td>&nbsp;&nbsp;</td><td><?php echo "".$range1."";?></td></tr>
                                            <?php } ?>
                                            
                                            <?php if($accuracy!="") {?>
                                            <tr><td><b>Accuracy</b><td>:</td></td><td>&nbsp;&nbsp;</td><td><?php echo "".$accuracy."";?></td></tr>
                                            <?php } ?>
                                            
                                            <?php if($interface!="") {?>
                                            <tr><td><b>Interface</b><td>:</td></td><td>&nbsp;&nbsp;</td><td><?php echo "".$interface."";?></td></tr>
                                            <?php } ?>
                                            
                                            <?php if($software_required!="") {?>
                                            <tr><td><b>Software</b><td>:</td></td><td>&nbsp;&nbsp;</td><td><?php echo "".$software_required."";?></td></tr>
                                            <?php } ?>
                                            
                                            <?php if($dimesions!="") {?>
                                            <tr><td><b>Dimesions</b><td>:</td></td><td>&nbsp;&nbsp;</td><td><?php echo "".$dimesions."";?></td></tr>
                                            <?php } ?>
                                            
                                            <?php if($power_option!="") {?>
                                            <tr><td><b>Power Option</b><td>:</td></td><td>&nbsp;&nbsp;</td><td><?php echo "".$power_option."";?></td></tr>
                                            <?php } ?>
                                            
                                            <?php if($display!="") {?>
                                            <tr><td><b>Display</b><td>:</td></td><td>&nbsp;&nbsp;</td><td><?php echo "".$display."";?></td></tr>
                                             <?php } ?>
                                              
                                    

                                            </table></p>
                                            
                                            <div class="summary-button">
                                                    <button type="submit" class="btn-yellow text-uppercase" id="myBtn">Send Enquiry</button>
													
                                                </div>
												<form  action="add_cart1.php"  method="post">
												 
												<h3>Quantity </h3>
												<input type="hidden" name="product_unique_id" value="<?php echo $product_unique_id; ?>"  id="myBtn">
												<input type="hidden" name="action" value="add"  id="myBtn">
												<div class="summary-button">
												 
                                                    <input type="text" name="quantity" value="1" id="myBtn" required>In Kg
													
                                                </div>
												 <div class="summary-button">
                                                    <button type="submit"  class="btn-yellow text-uppercase" id="myBtn">Add To Cart</button>
													</div>
                                              
												</form>
												
                                              
 
                                                <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width:50%">
    <span class="close">×</span>
    
    <form action="send_enquiry.php" method="post" id="contactForm" >
    <input type="hidden" name="product_unique_id" value="<?php echo $product_unique_id ?>" required>
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="inner-addon">
                                          <b>Your Email:</b><input type="email" name="email_address" required placeholder="Enter Your Email Here..  *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="inner-addon">
                                           <b>Your Phone Number:</b> <input type="text" name="contact" required placeholder="Enter Your Contact No Here..  *" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="inner-addon">
                                         <b>Message:</b>   <textarea placeholder="Message" name="message" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mt10">
                                            <input class="btn-yellow text-uppercase" type="submit" value="Send" name="Send Enquiry" title="Send Message">
                                        </div>
                                    </div>
                                </div>
                                </form>
    
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

                                                
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php } } ?>
                                    <!-- /single-product-details -->
                                    
                                    
                                    <!--------------------------Review------------------------->
                                      <?php 
								 $show123=mysql_query("select * from product_review where product_unique_id='".$product_unique_id."' and is_del='no' and final_status='yes'");
									
									while($rw123=mysql_fetch_array($show123))
									{ 
									   $product_review=$rw123['review'];
									   
									}
									
									?>
                                    
                                    

                                    <!-- product-tabs -->
                                    <div class="product-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab-description" data-toggle="tab">Description</a>
                                            </li>
                                            <li>
                                                <a href="#tab-tags" data-toggle="tab">Delivery Information </a>
                                            </li>
                                            <li>
                                                <a href="#tab-addreview" data-toggle="tab">Product Review</a>
                                            </li>
                                            <li>
                                                <a href="#tab-review" data-toggle="tab">Product Catalogue</a>
                                            </li>
                                        </ul>
                                        <!-- tab description -->
                                        <div class="tab-content">
                                            <div class="tab-pane in active" id="tab-description">
                                                <div class="product-tabs-entry-content">
                                                    <p><?php echo $description;?></p>
                                                    
                                                    <table>
                                                      <?php  $show1=mysql_query("select * from add_option where product_unique_id='".$product_unique_id."' and is_del='no' and final_status='yes'");
									
									while($rw1=mysql_fetch_array($show1))
									{ 
									   $label=$rw1['label'];
									   $value=$rw1['value'];
									   
									   ?>
                                          <tr><td style="width:275px;"><b><?php echo $label;?></b><td>:</td><td>&nbsp;&nbsp;</td><td><?php echo $value;?></td></tr>
                                            
                                         <?php 
									}
			  ?>                   
              </table>
                                                </div>
                                            </div>
                                            <!-- /tab description -->

                                            <div class="tab-pane" id="tab-tags">
                                             <?php if($delivery_details!="")
											 {
											?>
                                                <p><?php echo $delivery_details?></p>
                                                
                                             <?php } else echo '<br><center>'."Delivery Details Not Added..!";?>

                                                
                                            </div>
                                            
                                            <div class="tab-pane" id="tab-addreview">
                                             <?php if($product_review!="")
											 {
											?>
                                                <p><?php echo $product_review?></p>
                                             <?php } else echo '<br><center>'."Product Review Not Added..!";?>

                                            </div>
                                              <?php 
								 $show22=mysql_query("select * from product_brochure where product_unique_id='".$product_unique_id."' and is_del='no' and final_status='yes'");
									
									while($rw22=mysql_fetch_array($show22))
									{ 
									   $brochure_img=$rw22['brochure_img'];
									   $brochure_descr=$rw22['brochure_descr'];
									   $file_name=$rw22['file'];
									}
									
									   ?>
                                            <div class="tab-pane" id="tab-review">
                                                <p><b>Description</b> : <?php echo $brochure_descr;?></p>
											 <p>
                                             <b>Brochure Image</b> :
                                             <?php if($brochure_img!="")
											 {
											?>
                                            <a target="_blank" href="<?php echo "admin/brochure_img/".$brochure_img."";?>" download>
                                       		 <img src="<?php echo 'admin/brochure_img/'.$brochure_img ?>" height="250px" width="250px" download> 
                                             </a>
                                             <?php } 
											 
											  else echo "No Brochure Added..!";?>
                                             
                                             
                                             </p>
                                             
                                             <div class="widget">
                                    <div class="download-brochure">
                                     <?php
											 
											 if($file_name!="")
											 {
											 ?>
                                             
                                                                                 <h3 class="wg-title text-uppercase">Download PDF</h3>


                                        <p><?php echo "<a href=viewerjs/#../all_pdf/".$file_name.">"; ?>
                                        <i class="fa fa-file-pdf-o"></i> <?php echo $file_name ?> <i class="fa fa-download"></i> <?php echo "</a>"; ?>
										 </p>
                                         <?php } ?>

                                    </div>
                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product-tabs -->

                                    <!-- related-products -->
                                    <!--<div class="related-products">
                                        <div class="product-title">
                                            Related Products
                                        </div>
                                        <ul class="products row">
                                            <li class="product-item col-xs-6 col-sm-4">
                                                <div class="flip-image">
                                                    <div class="pic"><img src="images/shop/shop-01.jpg" class="img-responsive" alt=""></div>
                                                    <div class="flip-back">
                                                        <a href="#" class="btn-addcart">Add to cart</a>
                                                    </div>
                                                </div>
                                                <div class="product-meta">
                                                    <a href="single-shop.html">
                                                        <div class="name">Speed Bench Drill Press</div>
                                                        <div class="price">
                                                            <del><span class="amount">$110.00</span></del>
                                                            <ins><span class="amount">$100.00</span></ins>
                                                        </div>
                                                        <div class="star-rating" title="Rated 4.50 out of 5">
                                                            <span style="width:80%"><strong class="rating">4.50</strong> out of 5</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="product-item col-xs-6 col-sm-4">
                                                <div class="flip-image">
                                                    <div class="pic"><img src="images/shop/shop-02.jpg" class="img-responsive" alt=""></div>
                                                    <div class="flip-back">
                                                        <a href="#" class="btn-addcart">Add to cart</a>
                                                    </div>
                                                </div>
                                                <div class="product-meta">
                                                    <a href="single-shop.html">
                                                        <div class="name">Speed Bench Drill Press</div>
                                                        <div class="price">
                                                            <del><span class="amount">$110.00</span></del>
                                                            <ins><span class="amount">$100.00</span></ins>
                                                        </div>
                                                        <div class="star-rating" title="Rated 4.50 out of 5">
                                                            <span style="width:80%"><strong class="rating">4.50</strong> out of 5</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="product-item col-xs-6 col-sm-4">
                                                <div class="flip-image">
                                                    <div class="pic"><img src="images/shop/shop-03.jpg" class="img-responsive" alt=""></div>
                                                    <div class="flip-back">
                                                        <a href="#" class="btn-addcart">Add to cart</a>
                                                    </div>
                                                </div>
                                                <div class="product-meta">
                                                    <a href="single-shop.html">
                                                        <div class="name">Speed Bench Drill Press</div>
                                                        <div class="price">
                                                            <del><span class="amount">$110.00</span></del>
                                                            <ins><span class="amount">$100.00</span></ins>
                                                        </div>
                                                        <div class="star-rating" title="Rated 4.50 out of 5">
                                                            <span style="width:80%"><strong class="rating">4.50</strong> out of 5</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>-->
                                    <!-- /related-products -->
                                    
                                </div>
                                <!-- /single-shop -->
                            </article>
                        </div>
                        <!-- /product-listing-wrapper -->

                        <!-- left-sidebar -->
                        <?php right_sidebar() ?>
                        <!-- /left-sidebar -->

                    </div>
                </div>
            </div>
            <!-- /Shop V2 -->

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
