<?php
include('../connect.php');

$product_unique_id = $_GET['product_unique_id'];

$show=mysql_query("select * from product_details where is_del='no' AND product_unique_id='$product_unique_id'") or die(mysql_error());
									
										while($row=mysql_fetch_array($show))
                                          {
											 
											  $model_no=$row['model_no'];
											  $un1=trim($model_no);
											  $model_no11=$un1."_".date("h:i:sa")."_".rand();
										  }


mysql_query( "update product_details set is_del='deleted',model_no='$model_no11' where product_unique_id='$product_unique_id'") or die(mysql_error());

echo '<script type="text/javascript">'; 
echo 'alert("Record Deleted..");'; 
echo 'window.location.href = "all_products.php";';
echo '</script>';


?>
