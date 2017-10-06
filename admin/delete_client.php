<?php

include('../connect.php');



$client_unique_id = $_GET['client_unique_id'];




	
mysql_query( "update client_details set is_del='deleted' where client_unique_id='$client_unique_id'") or die(mysql_error());



echo '<script type="text/javascript">'; 

echo 'alert("Record Deleted..");'; 

echo 'window.location.href = "all_clients.php";';

echo '</script>';





?>

