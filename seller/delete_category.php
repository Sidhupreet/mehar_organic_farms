<?php
include('../connect.php');

$unique_id = $_GET['unique_id'];

mysql_query( "update categories set is_del='yes' where unique_id='$unique_id'") or die(mysql_error());

echo '<script type="text/javascript">'; 
echo 'alert("Record Deleted..");'; 
echo 'window.location.href = "categories.php";';
echo '</script>';


?>
