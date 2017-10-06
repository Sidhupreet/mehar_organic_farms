<?php
error_reporting(0);
session_start();
include "../connect.php";

$product_unique_id=$_POST['product_unique_id'];
$brochure_descr=$_POST['brochure_descr'];

		
			
$file = $_FILES['brochure_img']['tmp_name'];
$file = $_FILES['brochure_img']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


$file_size=$_FILES["brochure_img"]["size"];
$file_type=$_FILES["brochure_img"]["type"];

           
	
	
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["brochure_img"]["tmp_name"])
	    {
		  $tt1= $_FILES["brochure_img"]["name"];
                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
                         move_uploaded_file($_FILES["brochure_img"]["tmp_name"],"brochure_img/".$filename1);
                
         }
		 



$file_size=$_FILES["file1"]["size"];
$file_type=$_FILES["file1"]["type"];
           


       if($_FILES["file1"]["tmp_name"]) {
		  $tt2= $_FILES["file1"]["name"];
                        $filename2=rand().str_replace(" ","_",$tt2);
                         move_uploaded_file($_FILES["file1"]["tmp_name"],"../all_pdf/".$filename2);
                
     }

	
		
		/*$un1=str_replace(' ', '_',$product_name);
	//	$un1=trim($news_heading);
		$product_unique_id=$un1."_".rand();*/
		
		
   $query=mysql_query("Insert Into product_brochure(brochure_id,product_unique_id,brochure_img,brochure_descr,file,final_status,is_del)
   values('','$product_unique_id','$filename1','$brochure_descr','$filename2','no','no')") or die(mysql_error());
   
   $query=mysql_query("UPDATE  product_details SET brochure_status='added' WHERE product_unique_id='$product_unique_id' ")or die(mysql_error());


		echo '<script type="text/javascript">'; 
		echo 'alert("1 Brochure added successfully..");'; 
		echo 'window.location.href = "add_brochure.php";';
		echo '</script>';

		
?>
