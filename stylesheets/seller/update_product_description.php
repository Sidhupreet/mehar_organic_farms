<?php
include"../connect.php";
$product_unique_id=$_POST['product_unique_id'];
$product_name=$_POST['product_name'];
$category=$_POST['category'];
$subcategory= $_POST['subcategory'];
$description= $_POST['description'];
$make=$_POST['make'];
$parameter1=$_POST['parameter1'];
$range1= $_POST['range1'];
$accuracy= $_POST['accuracy'];
$interface=$_POST['interface'];
$software_required=$_POST['software_required'];
$dimesions=$_POST['dimesions'];
//$brand_name= $_POST['brand_name'];
//$logo= $_POST['logo'];
$power_option=$_POST['power_option'];
$display=$_POST['display'];
//$style=$_POST['style'];
//$packaging_details=$_POST['packaging_details'];
$delivery_details= $_POST['delivery_details'];


$query=mysql_query("UPDATE  product_description SET description='$description',make='$make',parameter1='$parameter1',range1='$range1',accuracy='$accuracy',interface='$interface',software_required='$software_required',dimesions='$dimesions',power_option='$power_option',display='$display',delivery_details='$delivery_details' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
echo '<script type="text/javascript">'; 
echo 'alert("Record updated..");'; 
echo 'window.location.href = "all_products_description.php";';
echo '</script>';
?>