<?php
error_reporting(0);
session_start();
include "../connect.php";


	 $category1=$_POST['category'];
	// $category1=$_GET['category'];
		
		//$subcategory1=$_POST['subcategory'];
	
           
	
		
		$un1=str_replace(' ', '_',$category1);
		$un11=preg_replace("/[^a-zA-Z]/", "", $un1);
		$category=str_replace(' ', '_',$category1);
		//$subcategory=str_replace(' ', '_',$subcategory1);

	//	$un1=trim($news_heading);
		$unique_id=$un11."_".rand();
		
		
   $query=mysql_query("Insert Into categories(id,unique_id,category,is_del)
   values('','$unique_id','$category','no')") or die(mysql_error());
   
   
if ($query==true){
echo "Data inserted";
}else {
echo "Not Done";
}

		//echo '<script type="text/javascript">'; 
		//echo 'alert("1 Category added successfully..");'; 
		//echo 'window.location.href = "categoadd.php";';
		//echo '</script>';

		
?>