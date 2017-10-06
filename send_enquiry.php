<?php
include 'connect.php';

$product_unique_id=$_POST['product_unique_id'];
$email_address=$_POST['email_address'];
$contact=$_POST['contact'];
$message=$_POST['message'];

"select * from product_details where product_unique_id='".$product_unique_id."' and is_del='no'";
$show=mysql_query("select * from product_details where 	product_unique_id='".$product_unique_id."' and is_del='no'") or die(mysql_error());

while($row=mysql_fetch_array($show))
{

 $product_name	=  $row ['product_name'];




	
	$message11=" Receive Product Enquiry For:Product : ".$product_name.",
	Contact : ".$contact.",
	Messege :".$message."";
					
					
$to= "shitaldighole19@gmail.com";
$from="".$email_address."";
$subject1 = "Enquiry For ".$product_name."";
$mail_body = '
From: ' . $from . '
Subject: ' . $subject1 . '
Message: '.$message11.'


';

$headers  = "highclonoidsoftec.com";
$headers .= "Content-type: text/htmlrn";
mail($to, $subject1, $mail_body, $headers);

/*echo '<script type="text/javascript">'; 
echo 'alert("Your Enquiry Has Been Sent Successfully..");'; 
echo 'window.location.href = "shop-1.php";';
echo '</script>';*/

echo '<script type="text/javascript">'; 
echo 'alert("Your Enquiry Has Been Sent Successfully..");'; 
echo 'window.location.href = "shop-1.php";';
echo '</script>';

}

?>
 
 