<?php
error_reporting(0);
include"../connect.php";
$product_unique_id=$_POST['product_unique_id'];
$product_name=$_POST['product_name'];
$category=$_POST['category'];
$sub_category= $_POST['sub_category'];
$short_descr= $_POST['short_descr'];
//$techno_specification=$_POST['techno_specification'];
$before_price= $_POST['before_price'];
$price= $_POST['price'];
//$model_no= $_POST['model_no'];

$photo_final1;
$photo_final2;
$photo_final3;
$photo_final4;
$photo_final5;
$hidden_image_name=$_POST['hidden_image_name'];
$hidden_image_name1=$_POST['hidden_image_name1'];
$hidden_image_name2=$_POST['hidden_image_name2'];
$hidden_image_name3=$_POST['hidden_image_name3'];
$hidden_image_name4=$_POST['hidden_image_name4'];

/**************************************************************************************************************************************/


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
		 
		 
$file_size=$_FILES["photo1"]["size"];
$file_type=$_FILES["photo1"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["photo1"]["tmp_name"])
	    {
		  $tt2= $_FILES["photo1"]["name"];
                        $filename2=date("d-m")."_".rand().str_replace(" ","_",$tt2);
                         move_uploaded_file($_FILES["photo1"]["tmp_name"],"../admin/img/".$filename2);
                
         }
		 
		 
$file_size=$_FILES["photo2"]["size"];
$file_type=$_FILES["photo2"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["photo2"]["tmp_name"])
	    {
		  $tt3= $_FILES["photo2"]["name"];
                        $filename3=date("d-m")."_".rand().str_replace(" ","_",$tt3);
                         move_uploaded_file($_FILES["photo2"]["tmp_name"],"../admin/img/".$filename3);
                
         }
		 
		 
$file_size=$_FILES["photo3"]["size"];
$file_type=$_FILES["photo3"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["photo3"]["tmp_name"])
	    {
		  $tt4= $_FILES["photo3"]["name"];
                        $filename4=date("d-m")."_".rand().str_replace(" ","_",$tt4);
                         move_uploaded_file($_FILES["photo3"]["tmp_name"],"../admin/img/".$filename4);
                
         }
		 
		 
		 
$file_size=$_FILES["photo4"]["size"];
$file_type=$_FILES["photo4"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["photo4"]["tmp_name"])
	    {
		  $tt5= $_FILES["photo4"]["name"];
                        $filename5=date("d-m")."_".rand().str_replace(" ","_",$tt5);
                         move_uploaded_file($_FILES["photo4"]["tmp_name"],"../admin/img/".$filename5);
                
         }


/*---------------------------------------------------------------------------------------------------------*/




if($_FILES["photo"]["tmp_name"]!="")
{
	
	 $photo_final1=$filename1;
	
}
if($_FILES["photo"]["tmp_name"]=="")
{
	
	  $photo_final1=$hidden_image_name;
	
	
}



if($_FILES["photo1"]["tmp_name"]!="")
{
	
	 $photo_final2=$filename2;
	
}


if($_FILES["photo1"]["tmp_name"]=="")
{
	
	  $photo_final2=$hidden_image_name1;
	
	
}


if($_FILES["photo2"]["tmp_name"]!="")
{
	
	$photo_final3=$filename3;
	
}
if($_FILES["photo2"]["tmp_name"]=="")
{
	
	$photo_final3=$hidden_image_name2;
	
	
}




if($_FILES["photo3"]["tmp_name"]!="")
{
	
	$photo_final4=$filename4;
	
}
if($_FILES["photo3"]["tmp_name"]=="")
{
	
	
	$photo_final4=$hidden_image_name3;
	
}


if($_FILES["photo4"]["tmp_name"]!="")
{
	
	 $photo_final5=$filename5;
	
}
if($_FILES["photo4"]["tmp_name"]=="")
{
	
	$photo_final5=$hidden_image_name4;
	
	
}








/*---------------------------------------------------------------------------*/






$query=mysql_query("UPDATE  product_details SET product_name='$product_name',category='$category',sub_category='$sub_category',photo='$photo_final1',photo1='$photo_final2',photo2='$photo_final3',photo3='$photo_final4',photo4='$photo_final5',short_descr='$short_descr',model_no='',techno_specification='',price='$price' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());
echo '<script type="text/javascript">'; 
echo 'alert("Record updated..");'; 
echo 'window.location.href = "all_products.php";';
echo '</script>';
?>