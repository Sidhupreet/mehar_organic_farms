<?php 
error_reporting(0);

session_start();
include '../connect.php';
$count=0;


$myemail=$_POST['myusername'];
$mypassword=$_POST['pwd'];

$show=mysql_query("select * from login_details where user_name	='$myemail' and pwd='$mypassword' and is_del='approved'") or die(mysql_error());
while($row=mysql_fetch_array($show))
{
	$count=1;
}
	if($count==1)
	{
		$_SESSION['email']=$myemail;
		
			echo '<script type=text/javascript>';
			echo 'window.location.href="home.php";';
			echo '</script>';	
	}
	else
	{
		//header("location:login.php");exit;	
		echo '<script type="text/javascript">'; 
		echo 'alert("wrong Password");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
	}

?>
