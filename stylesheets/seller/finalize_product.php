<?php
include"../connect.php";
$product_unique_id=$_GET['product_unique_id'];


$query=mysql_query("UPDATE  product_brochure SET final_status='yes' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
$query=mysql_query("UPDATE  product_description SET final_status='yes' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
$query=mysql_query("UPDATE  product_details SET final_status='yes' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
$query=mysql_query("UPDATE  product_review SET final_status='yes' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
$query=mysql_query("UPDATE  add_option SET final_status='yes' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());

?>
<script type="text/javascript">
alert("Product Has Been Finalized!!You can view Online Now..");
window.location.href = "all_brochures.php";
//window.location.href = "../preview.php?id=<?php //echo $product_unique_id?>";

</script>
