<?php 
/*
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="arp"; // Database name
	*/

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="arp"; // Database name

	
// Connect to server and select databse.
$conn = mysql_connect("$host", "$username", "$password");
if(!$conn)
{
	die("cannot connect");
}
mysql_select_db("$db_name")or die("cannot select DB");


?>