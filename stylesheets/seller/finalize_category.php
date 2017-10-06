<?php
include"../connect.php";
$product_unique_id=$_GET['product_unique_id'];


$query=mysql_query("UPDATE  product_category SET final_staus='yes' WHERE unique_id='$product_unique_id'") or die(mysql_error());
?>
<script type="text/javascript">
alert("Category Has Been Finalized!!You can view Online Now..");
window.location.href = "all_categories.php";
//window.location.href = "../preview.php?id=<?php //echo $product_unique_id?>";

</script>
