<?php
session_start();
$mail=$_POST['email']; //echo $mail;
$password=$_POST['password']; //echo $password;
include("connect.php");
$query="select * from tbl_admin where email='$mail' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['admin']=$mail;
	header("Location:admin.php");
}
else
{
	header("Location:index.php?msg=1");
}
?>