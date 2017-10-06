<?php include "common_functions.php";
include "connect.php";
session_start();

//$id=session_id();
  //$_SESSION['sessid'] = $id;
  
//error_reporting(0);
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
<?php




//$email=$_SESSION['myusername'];
 

//$hotel_menu_id=$_GET['id'];



//print_r($_POST);
if(!empty($_POST["action"])) {
switch($_POST["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {        
			//echo "SELECT * FROM products WHERE code='" . $_GET["code"] . "'";
			$productByCode=mysql_query("select * from product_details where product_unique_id='".$_POST['product_unique_id']."' and is_del='no' and final_status='yes'");
									
									while($rw=mysql_fetch_array($productByCode))
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
									}
				//$itemArray = array($productByCode[0]["product_code"]=>array('product_name'=>$productByCode[0]["product_name"], 'product_code'=>$productByCode[0]["product_code"], 
			//'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'product_img_name'=>$productByCode[0]["product_img_name"]));
									
			$itemArray = array($productByCode[0]["product_unique_id"]=>array('product_name'=>$product_name, 'product_unique_id'=>$_POST['product_unique_id'], 
			'quantity'=>$_POST["quantity"], 'price'=>$price, 'photo'=>$photo));
									
		//print_r($itemArray);
			//$iteam_name=$_POST["$itemArray"];
					if(!empty($_SESSION["cart_item1"])) {
				if(in_array($productByCode[0]["product_unique_id"],$_SESSION["cart_item1"])) {
					foreach($_SESSION["cart_item1"] as $k => $v) {
							if($productByCode[0]["product_unique_id"] == $k)
								$_SESSION["cart_item1"][$k]["quantity"] = $_POST["quantity"];

              

					}
				} else {
				    // global $_SESSION["cart_item1"];
					 $_SESSION["cart_item1"] = array_merge($_SESSION["cart_item1"],$itemArray);
					//$test= $_SESSION["cart_item1"];
				//	print_r($_SESSION["cart_item1"]);
				
				}
			} else {
				$_SESSION["cart_item1"] = $itemArray;
				
			}
		
		}
		
		
		/*if(!empty($_POST["quantity"])) {
			//echo "SELECT * FROM products WHERE code='" . $_GET["code"] . "'";
			//$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE product_code='" . $_GET["code"] . "'");
			$productByCode=mysql_query("select * from product_details where product_unique_id='".$_GET['product_unique_id']."' and is_del='no' and final_status='yes'");
									
									while($rw=mysql_fetch_array($productByCode))
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
									}
			$itemArray = array($productByCode[0]["product_unique_id"]=>array('product_name'=>$product_name, 'product_unique_id'=>$_GET['product_unique_id'], 
			'quantity'=>$_POST["quantity"], 'price'=>$price, 'photo'=>$photo));
			print_r($itemArray);
			//$iteam_name=$_POST["$itemArray"];
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["product_unique_id"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["product_unique_id"] == $k)
							echo "in session item cart".$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
								
								
								
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	*/
}
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
   <?php css_links();?>
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
 
            <!-- /Main Slider -->

            <!-- What we offer -->
            <section class="offter spacetb">
		
                <div class="container">
               <form >
						<?php
						
if(isset($_SESSION["cart_item1"]))
{
	$item_total = 0;
	
	?>
                            <table class="table table-condense">
                                <thead>
                                    <tr>
                                        <th>Img</th>                                
                                        <th>Product Name</th>                                        
                                        <th>QTY</th>
                                        <th>Price</th> 
										 
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
foreach ($_SESSION["cart_item1"] as $item) {
	
	 $item["price"];
 
	?>
                                    <tr>
                                        <td><img src="<?php echo "admin/img/$item[photo]";?>" height="100" width="100"></td>
                                        <td >
                                           <h3> <?php echo $item["product_name"]; ?> </h3>
     
                </a>
                                           
                                        </td>
                                        <td >
                                            <div >
                                               
                                                <input type="text" class="input-text qty text" title="Qty" name="cart" value="<?php echo $item["quantity"]; ?>">
                                                
                                            </div>
                                        </td>
                                        <td > <strong> <?php echo $item["price"]; ?></strong></td> 
									<!---  <td >	 <a href="add_cart1.php?action=remove&code=<?php echo $item["product_unique_id"]; ?>" 
                class="btnRemoveAction"><img src="images/fav_close_icon.png"></a> </td > ---->
                                    </tr>
                                  <?php
								  	
        $item_total += ($item["price"]*$item["quantity"]);
	  // $item_total += $item["price"];
		}
		?>
		
		
		
		
                                   
                                </tbody>                               
                            </table>
							
                            <div >
                              <!---  <div >
                                    <a  href="index.php">Continue Shopping<i class="fa fa-caret-right"></i></a>
                                </div>---->
                                <div >
                                    <span>Subtotal:</span>
                                    <strong ><?php echo "".$item_total; ?></strong>
                                </div>
                            </div>
							<div class="chk-out">
							<form action="checkout1.php" method="post">
							
							<input type="hidden" name="id">
        	<input type="hidden" name="iteam_name" value="<?php echo $item["product_name"] ;  ?>">
            <input type="hidden" name="qty" value="<?php echo $item["quantity"] ;  ?>">
            <input type="hidden" name="price" value="<?php echo $item["price"] ;  ?>">
             <input type="hidden" name="all_total" value="<?php echo $item_total ;  ?>">
							
                                            <a href="checkout1.php" class="btn default-btn">Checkout</a>
                                        </form>
										</div>
                        </form>
						<?php
}
?>    
                 <!---table class="table table-condense">   
				 <tr>
				

				  <td><h2>Photo</h2> </td>
				  <td><h2>Name</h2> </td>
				  <td><h2>Quantity</h2> </td>
				   <td><h2>Price</h2></td>
				   
				   </tr>
				   <tr>
				    <td><img src="<?php echo "admin/img/$photo";?>"</td>
				   <td><h2><?php echo $product_name; ?></h2></td>
				 
				   <td><h2><?php echo $_POST['quantity']; ?></h2></td>
				     
				   <td><h2><?php echo $price*$_POST['quantity']; ?></h2></td>
				   </tr>
				 <table>
				<form  action="checkout1.php"  method="post">
												 
												
												<input type="hidden" name="product_unique_id" value="<?php echo $_POST['product_unique_id']; ?>"  id="myBtn">
												<input type="hidden" name="product_name" value="<?php echo $product_name; ?>"  id="myBtn">
												<input type="hidden" name="total_price" value="<?php echo $total_price; ?>"  id="myBtn">
												<input type="hidden" name="quantity" value="<?php echo $_POST['quantity']; ?>"  id="myBtn">
												<div class="summary-button">
                  <button type="submit"  class="btn-yellow text-uppercase" id="myBtn">Confirm</button>
				</div>
                                              
												</form>
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