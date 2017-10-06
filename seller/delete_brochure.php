<?php
include('../connect.php');

$product_unique_id = $_GET['product_unique_id'];

mysql_query( "update product_brochure set is_del='yes' where product_unique_id='$product_unique_id'") or die(mysql_error());
mysql_query( "update product_details set brochure_status='not_added' where product_unique_id='$product_unique_id'") or die(mysql_error());


echo '<script type="text/javascript">'; 
echo 'alert("Record Deleted..");'; 
echo 'window.location.href = "all_brochures.php";';
echo '</script>';


?>
