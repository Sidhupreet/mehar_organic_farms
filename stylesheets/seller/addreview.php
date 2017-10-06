<?php
session_start();
include "../connect.php";

$product_unique_id=$_POST['product_unique_id'];

		 
$review=$_POST['review'];

	

		
		
   $query=mysql_query("Insert Into product_review(review_id,product_unique_id,review,final_status,is_del)
   values('','$product_unique_id','$review','no','no')") or die(mysql_error());
   
   $query=mysql_query("UPDATE  product_details SET review_status='added' WHERE product_unique_id='$product_unique_id' ")or die(mysql_error());


		echo '<script type="text/javascript">'; 
		echo 'alert("1 Review added successfully..");'; 
		echo 'window.location.href = "add_review.php";';
		echo '</script>';

		
?>