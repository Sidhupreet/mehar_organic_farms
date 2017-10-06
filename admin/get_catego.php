<?php
//require_once("dbcontroller.php");
//$db_handle = new DBController();
//error_reporting(0);
session_start();
include "../connect.php";
 $_POST["category"];
?>
<option value="">Select Subcategory</option>
<?php 

	$show =mysql_query("SELECT * FROM product_category WHERE category = '". $_POST["category"] ."' ");
	//$results = $db_handle->runQuery($query);
?>
	
<!---?php
	foreach($results as $category) {
		$subcategory1=$category["sub_category"];
		echo $sub_category=str_replace('_',' ',$subcategory1);
?----->
<?php 
    		while($rw=mysql_fetch_array($show))
									{ 
									    $unique_id_catego=$rw['unique_id'];
										$sub_category =$rw['sub_category'];
									//$unique_id_catego1=str_replace(' ', '_',$unique_id_catego);
		                  // $subcategory1=str_replace(' ', '_',$sub_category);
									          
?>
	<option value="<?php echo $unique_id_catego; ?>"><?php echo $sub_category; ?></option>
<?php
	}


?>