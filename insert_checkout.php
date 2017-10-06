<?php
session_start();
include "connect.php";

print_r($_POST);
 //$product_unique_id=$_POST['product_unique_id'];
// $product_name=$_POST['product_name'];//it is taken sa a primary key
// $total_price=$_POST['total_price'];
 // $quantity=$_POST['quantity'];
  $name=$_POST['name'];
   $contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$zipcode=$_POST['zipcode'];
//$date=date('d-m-Y');
    echo "Error in saving project";

//$result = mysqli_query($conn,"select * from route where id = '$route_id' and is_del='no'"); //bus_no='$id1' and
//while($r1=$result->fetch_object())
//{
//	$bus_no = $r1->bus_no;
//}
//print_r($_POST);
 $customer_id=date("Y-m-d").rand();
 

						
if(isset($_SESSION["cart_item1"]))
{
	

foreach ($_SESSION["cart_item1"] as $item) {
	
	 $item["price"];
 
	 $order_id="$customer_id=".rand();
                 
$res= mysql_query("insert into order_details (customer_id,order_id,customer_name,customer_contact,city,address,zipcode,product,quantity,total_price,date,is_del)
			 values
			 ('$customer_id','$order_id','$name','$contact','$city','$address','$zipcode','". $item["product_name"]."','". $item["quantity"]."','". $item["price"]."','".date("Y-m-d")."','no')",$conn) or die(mysql_error()); 
			
			 
			 
}
}
  //if($res == TRUE){
  //  echo "Project has been saved";
 // }
 // else{
 //   echo "Error in saving project";
 // }

 if($res == TRUE)
{
	 session_destroy();
echo'<script>';
  echo'window.location="thank_you.php"';
	echo'</script>';
	//echo ("<script language='JavaScript'>
     //  window.location.href='add_reading_details.php?id=$bus_id';
      //   window.alert('Add Closing reading Successfully')
       //</script>");
} 

?>
