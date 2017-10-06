<?php
error_reporting(0);
include"../connect.php";
$product_unique_id=$_POST['product_unique_id'];

$brochure_descr= $_POST['brochure_descr'];

 $hidden_file_name=$_POST['hidden_file_name'];
 $hidden_image_name=$_POST['hidden_image_name'];

$file_size=$_FILES["file"]["size"];
$file_type=$_FILES["file"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["file"]["tmp_name"])
	    {
		  $tt2= $_FILES["file"]["name"];
                        $filename2=date("d-m")."_".rand().str_replace(" ","_",$tt2);
                         move_uploaded_file($_FILES["file"]["tmp_name"],"../all_pdf/".$filename2);
                
         }





$file_size=$_FILES["brochure_img"]["size"];
$file_type=$_FILES["brochure_img"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["brochure_img"]["tmp_name"])
	    {
		  $tt1= $_FILES["brochure_img"]["name"];
                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
                         move_uploaded_file($_FILES["brochure_img"]["tmp_name"],"brochure_img/".$filename1);
                
         }

if($filename1=="" && $filename2=="")
{
	$query=mysql_query("UPDATE  product_brochure
 SET brochure_img='$hidden_image_name',brochure_descr='$brochure_descr',file='$hidden_file_name' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());

	
}

else if($filename1=="")

{
	
	$query=mysql_query("UPDATE  product_brochure
 SET brochure_img='$hidden_image_name',brochure_descr='$brochure_descr',file='$filename2' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
	
}

else if($filename2=="")

{
	
	$query=mysql_query("UPDATE  product_brochure
 SET brochure_img='$filename1',brochure_descr='$brochure_descr',file='$hidden_file_name' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
	
}
else

{

$query=mysql_query("UPDATE  product_brochure
 SET brochure_img='$filename1',brochure_descr='$brochure_descr',file='$filename2' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
 
}
echo '<script type="text/javascript">'; 
echo 'alert("Record updated..");'; 
echo 'window.location.href = "all_brochures.php";';
echo '</script>';
?>