<?php
error_reporting(0);
session_start();
include "../connect.php";

$product_unique_id=$_POST['product_unique_id'];

		 
$label=$_POST['label'];
$value=$_POST['value'];

	

		
		
   $query=mysql_query("Insert Into add_option(id,product_unique_id,label,value,final_status,is_del)
   values('','$product_unique_id','$label','$value','no','no')") or die(mysql_error());
   
  

		echo '<script type="text/javascript">'; 
		echo 'alert("1 Field added successfully..");'; 
		echo 'window.location.href = "add_options.php?product_unique_id='.$product_unique_id.'";';
		echo '</script>';

		
?>