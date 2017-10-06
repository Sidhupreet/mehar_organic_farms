<?php include "common_functions.php";
session_start();
include "connect.php";
$_SESSION['sessid'];
//$test2= $_SESSION["cart_item1"];
//print_r($test2);
//error_reporting(0);
//print_r[$_POST];			
?>
 <!------?php $show=mysql_query("select * from product_details where is_del='no' and final_status='yes'");
				  $numrows=mysql_num_rows($show);
								//$show=mysql_query("select * from product_details where is_del='no' and final_status='no'");
			$i=0;						
									
$dyn_table="<table border=1 cellpadding=20>";
while($rw=mysql_fetch_array($show))
									{ 
									$rw['product_unique_id'];
									$product_name=$rw['product_name'];
									$photo=$rw['photo'];
					
					
		if($i%6==$numrows)
		{
		$dyn_table.='<tr><td class=foto_style><a href="shop-2.php?product_unique_id='.$rw['product_unique_id'].'"> <img src=admin/img/'.$rw['photo'].' alt="product" class="img-responsive"><br>'.$rw['product_name'].'</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
		
		}
		else
		{
		$dyn_table.='<td class=foto_style><a href="shop-2.php?product_unique_id='.$rw['product_unique_id'].'"><img src=admin/img/'.$rw['photo'].' alt="product" class="img-responsive"><br>'.$rw['product_name'].'</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
		}			
			$i++;		
						
					
									}

$dyn_table.='</tr></table>';
?------>
<!DOCTYPE html>
<html lang="en">


<head>
   <?php css_links();?>
    <script src="js/jquery.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="wrapper home01">
        <!-- Begin header -->
       <?php header1();?>
        <!-- End header -->

        <!-- Begin Main -->
        <div id="main" class="content-main">

            <!-- Main Slider -->
           

  <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
<style>
</script>
<style>
table {
  border-collapse: separate;
  border-spacing: 50px 0;
  background:#ccc;
}

td {
	border-collapse: separate;
   padding-top: 50px;
    padding-bottom: 50px;
  color:black;
}
</style>
  <script type="text/javascript" async>
               $(document).ready(function(){
                    $("#button").click(function(){
                         var name=$("#name").val();
						/// document.write(name);
                          var contact=$("#contact").val();
                          var city=$("#city").val();
						  var address=$("#address").val();
						  var zipcode=$("#zipcode").val();
 
                         $.ajax({
                             type:"post",
                              url:"insert_checkout.php",
                              data:"name="+name+"&contact="+contact+"&city="+city+"&address="+address+"&zipcode="+zipcode,
                             success:function(data){
                                 $("#info").html(data);
								 window.location='thank_you.php';
								
                              }
 
                        });
 
                    });
               });
       </script>
            <!-- /Main Slider -->

            <!-- What we offer -->
            <section class="offter spacetb">
		
                <div class="container">
                   
                 
				  <form  >
    <input type="hidden" name="product_unique_id" value="<?php echo $product_unique_id ?>" required>
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12">
									
												<!---<input type="hidden" name="product_unique_id" value=""  id="myBtn">
												<input type="hidden" name="product_name" value=""  id="myBtn">
												<input type="hidden" name="total_price" value=""  id="myBtn">
												<input type="hidden" name="quantity" value=""  id="myBtn">---->
                                        <div class="inner-addon">
                                          <b>Your Name:</b><input type="text" id="name" name="name" required placeholder="Enter Your Name Here..  *" class="form-control" required>
                                        </div>
                                    </div>
									 <div class="form-group col-md-12 col-sm-12">
                                        <div class="inner-addon">
                                           <b>City:</b> <input type="text" id="city" name="city" required placeholder="Enter Your City Here..  *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="inner-addon">
                                           <b>Your Phone Number:</b> <input type="text" id="contact" name="contact" required placeholder="Enter Your Contact No Here..  *" class="form-control" required>
                                        </div>
                                    </div>
                                     <div class="form-group col-md-12 col-sm-12">
                                        <div class="inner-addon">
                                           <b>Address:</b> <input type="text" id="address" name="address" required placeholder="Enter Your Address Here..  *" class="form-control" required>
                                        </div>
                                    </div>
                                   <div class="form-group col-md-12 col-sm-12">
                                        <div class="inner-addon">
                                           <b>Zipcode:</b> <input type="text" id="zipcode" name="zipcode" required placeholder="Enter Your zipcode Here..  *" class="form-control" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mt10">
                                            <input class="btn-yellow text-uppercase" id="button" type="submit"  name="Send Enquiry" title="Send Message">
                                        </div>
                                    </div>
                                </div>
                                </form>
    
				 
				<!----form  action="checkout_form.php"  method="post">
												 
												
												<input type="hidden" name="product_unique_id" value="<?php echo $_POST['product_unique_id']; ?>"  id="myBtn">
												<input type="hidden" name="total_price" value="<?php echo $total_price; ?>"  id="myBtn">
												<input type="hidden" name="quantity" value="<?php echo $_POST['quantity']; ?>"  id="myBtn">
												<div class="summary-button">
                  <button type="submit"  class="blue-btn-small" id="myBtn">Checkout</button>
				</div>
                                              
												</form---->
                     <!--<div class="col-lg-3" style="margin-left: 850px;margin-top: -96px;">
                         <form action="search_result.php" method="post">
 							<input type="text" name="query" placeholder="    Search..">
						</form>
                    </div>-->
                               
								
                  
                </div>
				
            </section>	
            <!-- /What we offer -->
            
            
  <!----------------------------------------------------Client Logo----------------------------------------------------------------->  
  
									     
            <!--<div class="brand-logo">
                <div class="container">
                <div class="big-title text-center">
                        <h2 class="tt02">Clients</h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="brand-slider">
                                <div id="owl-brand" class="owl-carousel">
                                
    <?php 
							/*	 $show=mysql_query("select  * from client_details where is_del='no'");
									
									while($rw=mysql_fetch_array($show))
									{  ?>
                                    <div class="item"><h4><b>
                                        <?php  echo $rw['client_name']; ?> &nbsp;
                                    </b></h4></div>
                                    
                                   <?php }*/
									?>   
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

           

          

          

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