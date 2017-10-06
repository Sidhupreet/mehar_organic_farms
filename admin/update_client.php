<?php

error_reporting(0);

include"../connect.php";

$client_unique_id=$_POST['client_unique_id'];

$client_name=$_POST['client_name'];

$contact= $_POST['contact'];





$address = $_POST['address'];



$descr = $_POST['descr'];



$photo_final1;



$hidden_image_name=$_POST['hidden_image_name'];



/*



echo"photo=".$hidden_image_name=$_POST['photo'];

echo"photo=".$hidden_image_name1=$_POST['photo1'];

echo"photo=".$hidden_image_name2=$_POST['photo2'];

echo"photo=".$hidden_image_name3=$_POST['photo3'];

echo"photo=".$hidden_image_name4=$_POST['photo4'];



*/







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

                         move_uploaded_file($_FILES["photo"]["tmp_name"],"img/client/".$filename1);

                

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





/*---------------------------------------------------------------------------*/





	$query=mysql_query("UPDATE  client_details SET client_name='$client_name',contact='$contact',address='$address',photo='$photo_final1',descr='$descr' WHERE client_unique_id='$client_unique_id'") or die(mysql_error());

/*

$query=mysql_query("UPDATE  product_details SET product_name='$product_name',category='$category',sub_category='$sub_category',photo='$filename1',photo1='$filename2',photo2='$filename3',photo3='$filename4',photo4='$filename5',short_descr='$short_descr',price='$price' WHERE product_unique_id='$product_unique_id'") or die(mysql_error());



}*/

echo '<script type="text/javascript">'; 

echo 'alert("Record updated..");'; 

echo 'window.location.href = "all_clients.php";';

echo '</script>';

?>