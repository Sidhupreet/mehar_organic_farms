<?php
include"../connect.php";
$unique_id=$_POST['unique_id'];

$sub_category1= $_POST['sub_category'];
$sub_category=str_replace(' ','_',$sub_category1);



$query=mysql_query("UPDATE  product_category SET sub_category='$sub_category' WHERE unique_id='$unique_id'") or die(mysql_error());

echo '<script type="text/javascript">'; 
echo 'alert("Record updated..");'; 
echo 'window.location.href = "all_categories.php";';
echo '</script>';
?>