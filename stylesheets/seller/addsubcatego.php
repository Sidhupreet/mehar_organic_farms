<?php
error_reporting(0);
session_start();
include "../connect.php";


		$category1=$_POST['category'];
		
		$subcategory1=$_POST['subcategory'];


 $show=mysql_query("select * from categories where category='$category1' and is_del='no'");
									
									while($rw=mysql_fetch_array($show))
									{ 
									    $unique_id_catego=$rw['unique_id'];
											
									}
	
	
		
		//$un1=str_replace(' ', '_',$category1);
		$category=str_replace(' ', '_',$category1);
		$subcategory=str_replace(' ', '_',$subcategory1);

	//	$un1=trim($news_heading);
		//$unique_id=$un1."_".rand();
		
		
   $query=mysql_query("Insert Into product_category(id,unique_id,category,sub_category,is_del)
   values('','$unique_id_catego','$category','$subcategory','no')") or die(mysql_error());
   
   

		echo '<script type="text/javascript">'; 
		echo 'alert("1 Category added successfully..");'; 
		echo 'window.location.href = "subcategoadd.php";';
		echo '</script>';

		
?>