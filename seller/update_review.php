<?php
include"../connect.php";
$product_unique_id=$_POST['product_unique_id'];

$review= $_POST['review'];

$query=mysql_query("UPDATE  product_review SET review='$review' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
echo '<script type="text/javascript">'; 
echo 'alert("Record updated..");'; 
echo 'window.location.href = "all_review.php";';
echo '</script>';
?>