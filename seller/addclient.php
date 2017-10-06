<?php

error_reporting(0);

session_start();



include "../connect.php";





		$client_name=$_POST['client_name'];

		$contact=$_POST['contact'];

		$address=$_POST['address'];

		$descr=$_POST['descr'];

		

		

		

		

			

$file = $_FILES['photo']['tmp_name'];

$file = $_FILES['photo']['tmp_name'];

$file=file_get_contents($file);

$file=mysql_real_escape_string($file);





$file_size=$_FILES["photo"]["size"];

$file_type=$_FILES["photo"]["type"];

           

	

	

	//if($file_size<'52,42,880')

	//{

	if($_FILES["photo"]["tmp_name"])

	    {

		  $tt1= $_FILES["photo"]["name"];

                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);

                         move_uploaded_file($_FILES["photo"]["tmp_name"],"img/client/".$filename1);

                

         }

		 



		

		$un1=str_replace(' ', '_',$client_name);

	//	$un1=trim($news_heading);

	    $un11=preg_replace("/[^a-zA-Z]/", "", $un1);

		$client_unique_id=$un11."_".rand();

		

	 







		

$query=mysql_query("Insert Into client_details(client_id,client_unique_id,client_name,contact,address,photo,descr,is_del)

values('','$client_unique_id','$client_name','$contact','$address','$filename1','$descr','no')") or die(mysql_error());

   

   



		echo '<script type="text/javascript">'; 

		echo 'alert("1 Client added successfully..");'; 

		echo 'window.location.href = "clientadd.php";';

		echo '</script>';



		

?>

