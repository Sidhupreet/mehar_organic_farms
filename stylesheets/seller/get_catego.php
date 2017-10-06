<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["category"]))
 {
	$query ="SELECT * FROM product_category WHERE category = '" . $_POST["category"] . "'  ";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select Subcategory</option>
<?php
	foreach($results as $category) {
		$subcategory1=$category["sub_category"];
		$sub_category=str_replace('_',' ',$subcategory1);
?>
    									          

	<option value="<?php echo $category["sub_category"]; ?>"><?php echo $sub_category; ?></option>
<?php
	}
}
?>