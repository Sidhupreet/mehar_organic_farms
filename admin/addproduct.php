<?php
error_reporting(0);
session_start();
include "../connect.php";


		$product_name=$_POST['product_name'];
		$category=$_POST['category'];
		$subcategory=$_POST['subcategory'];
		$descr=$_POST['descr'];
		//$model_no=$_POST['model_no'];
		//$techno_specification=$_POST['techno_specification'];
		$price=$_POST['price'];
		
			
$file = $_FILES['photo']['tmp_name'];
$file = $_FILES['photo']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


$file_size=$_FILES["photo"]["size"];
$file_type=$_FILES["photo"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["photo"]["tmp_name"])
	    {
		  $tt1= $_FILES["photo"]["name"];
                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
                         move_uploaded_file($_FILES["photo"]["tmp_name"],"../admin/img/".$filename1);
                
         }
		 
$file = $_FILES['photo1']['tmp_name'];
$file = $_FILES['photo1']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


$file_size=$_FILES["photo1"]["size"];
$file_type=$_FILES["photo1"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["photo1"]["tmp_name"])
	    {
		  $tt1= $_FILES["photo1"]["name"];
                        $filename2=date("d-m")."_".rand().str_replace(" ","_",$tt1);
                         move_uploaded_file($_FILES["photo1"]["tmp_name"],"../admin/img/".$filename2);
                
         }
		 
$file = $_FILES['photo2']['tmp_name'];
$file = $_FILES['photo2']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


$file_size=$_FILES["photo2"]["size"];
$file_type=$_FILES["photo2"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["photo2"]["tmp_name"])
	    {
		  $tt2= $_FILES["photo2"]["name"];
                        $filename3=date("d-m")."_".rand().str_replace(" ","_",$tt2);
                         move_uploaded_file($_FILES["photo2"]["tmp_name"],"../admin/img/".$filename3);
                
         }
	
		
		$un1=str_replace(' ', '_',$product_name);
	//	$un1=trim($news_heading);
		$product_unique_id=$un1."_".rand();
		
		
		
		$file = $_FILES['photo3']['tmp_name'];
$file = $_FILES['photo3']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


$file_size=$_FILES["photo3"]["size"];
$file_type=$_FILES["photo3"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["photo3"]["tmp_name"])
	    {
		  $tt3= $_FILES["photo3"]["name"];
                        $filename4=date("d-m")."_".rand().str_replace(" ","_",$tt3);
                         move_uploaded_file($_FILES["photo3"]["tmp_name"],"../admin/img/".$filename4);
                
         }
		 





$file = $_FILES['photo4']['tmp_name'];
$file = $_FILES['photo4']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


$file_size=$_FILES["photo4"]["size"];
$file_type=$_FILES["photo4"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["photo4"]["tmp_name"])
	    {
		  $tt4= $_FILES["photo4"]["name"];
                        $filename5=date("d-m")."_".rand().str_replace(" ","_",$tt4);
                         move_uploaded_file($_FILES["photo4"]["tmp_name"],"../admin/img/".$filename5);
                
         }
		 

		
		
   $query=mysql_query("Insert Into product_details(product_id,product_unique_id,product_name,category,sub_category,short_descr,price,photo,photo1,photo2,photo3,photo4,description_status,brochure_status,review_status,final_status,is_del)
   values('','$product_unique_id','$product_name','$category','$subcategory','$descr','$price','$filename1','$filename2','$filename3','$filename4','$filename4','not_added','not_added','not_added','no','no')") or die(mysql_error());
   
   
$query=mysql_query("Insert Into product_description(id,product_unique_id,product_name,category,subcategory,description,techno_specification,make,parameter1,range1,accuracy,interface,software_required,dimesions,power_option,display,delivery_details,final_status,is_del)

values('','$product_unique_id','$product_name','$category','$subcategory','$descr','','','','','','','','','','','','no','no')") or die(mysql_error());

		echo '<script type="text/javascript">'; 
		echo 'alert("1 Product added successfully..");'; 
		echo 'window.location.href = "productadd.php";';
		echo '</script>';

		
?>