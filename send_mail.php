<?php
include 'connect.php';
error_reporting(0);
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_phone=$_POST['user_phone'];
$message=$_POST['message'];

/*$show=mysql_query("select * from login_details where is_del='no'") or die(mysql_error());

while($row=mysql_fetch_array($show))
{

 $user_name	=  $row ['user_name'];
}*/

	$message11=" Receive Mail From : ".$user_name.",
	Email : ".$user_email.",
	Contact : ".$user_phone.",
	Messege :".$message."";
					
					
$to= "shitaldighole19@gmail.com";
$from="".$user_email."";
$subject1 = "Receive Mail From ".$user_name."";
$mail_body = '
From: ' . $user_email . '
Message: '.$message11.'


';
$headers  = "highclonoidsoftec.com";
$headers .= "Content-type: text/htmlrn";
mail($to, $subject1, $mail_body, $headers);

echo '<script type="text/javascript">'; 
echo 'alert("Your Mail Has Been Sent Successfully..");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
?>


 
 