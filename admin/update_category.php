<?php
include"../connect.php";
$unique_id=$_POST['unique_id'];
$category1=$_POST['category'];
$category=str_replace(' ','_',$category1);



$query=mysql_query("UPDATE  categories SET category='$category' WHERE unique_id='$unique_id'") or die(mysql_error());
$query=mysql_query("UPDATE  product_category SET category='$category' WHERE unique_id='$unique_id'") or die(mysql_error());

echo '<script type="text/javascript">'; 
echo 'alert("Record updated..");'; 
echo 'window.location.href = "categories.php";';
echo '</script>';
?>