<?php
session_start();
$gmail=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:index.php?msg=1");
}
?>
<html>
<head>
<title>Presonal Info</title>
<style>
.box
{
	height:30%;width:22%;background-color:lightgreen;margin:6% 0% 0% 9%;float:left;box-shadow:12px 12px 60px green inset; border-radius:10px;
}
.box:hover
{
transform:scale(1.3);
}
</style>
</head>
<body>
<div style="height:100%;width:100%;background-color:lightgreen;">
<div style="height:100%;width:20%;background-color:lightblue;float:left;box-shadow:7px 7px 100px green inset;">
<h1 style="margin-left:15%;">WELCOME </br> <span style="margin-left:13%;">ADMIN</span></h1>

<div style="height:150px;width:150px;border:1px solid;margin-left:17%;border-radius:100px;background-image:url(../images/admin.png);background-size:cover;"></div>

</div>
<div style="height:100%;width:80%;float:left;background-image:url('../images/background3.png');background-size:cover;">
<div style="height:60px;width:100%;">
<a style="text-decoration:none;" href="changepass.php"><span style="font-size:30px;margin-left:3%;margin-top:0px;color:white;background-color:lightgreen;padding:10px;border-radius:10px;box-shadow:5px 5px 16px green inset">Change Password</span></a>
<span style="font-size:55px;margin-left:13%;margin-top:0px;color:blue;font-family:DriftType;"><u>All Data</u></span>
<a style="text-decoration:none;" href="logout.php"><span style="font-size:30px;margin-left:20%;margin-top:0px;color:white;background-color:lightgreen;padding:10px;border-radius:10px;box-shadow:5px 5px 16px green inset;">Logout</span></div></a>

<div>
<a href="doctor.php">
<div class="box">
<h1 style="font-size:50px;margin-left:22px;">View all Doctors</h1>
</div></a>
<a href="patient.php">
<div class="box">
<h1 style="font-size:50px;margin-left:22px;">View all Patient</h1>
</div></a>
<a href="contact.php">
<div class="box">
<h1 style="font-size:50px;margin-left:22px;">View all Contacts</h1>
</div></a>
</div>
<a href="Discussion.php">
<div>
<div class="box">
<h1 style="font-size:50px;margin-left:10px;margin-top:-2px;">View all Discussion Board</h1>
</div></a>
<a href="feedback.php">
<div class="box">
<h1 style="font-size:50px;margin-left:22px;">View all Feedback</h1>
</div></a>
<a href="appointment.php">
<div class="box">
<h1 style="font-size:50px;margin-left:22px;margin-top:-1px;">View all Appoin-</br>tment</h1>
</div></a>

</div>
</div>
</div>
<div style="height:50px;width:100%;background-color:#3F729B;box-shadow:5px 5px 15px black;"></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp
<span style="color:white;font-size:16px">Copyright&copy 2019 Reversed. &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Devloped by:Manish Yadav</span>
</div>
</body>
</html>