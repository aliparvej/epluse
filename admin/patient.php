<?php
session_start();
include("connect.php");
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:index.php?msg=1");
}
$query="select * from tbl_patient";
$res=mysql_query($query);
?>
<html>
<head>
<title>Patients List</title>
<style>

#head1
{
	height:100px;width:100%;
	
}
#head1 ul
{
	list-style-type:none;
		
}
#head1 ul li
{
	display:inline;
	padding:0px;
  
	border-radius:10px 10px 10px 10px;
	font-size:27px;background-color:;font-family:;
	
}

#head1 ul li a:hover
{
	font-size:30px;
	
	
}
#head1 ul li a:hover
{
	color:white;
	
	
}
#head1 ul li a
{
	text-decoration:none;
	color:blue;
}

th{
	color:blue;font-size:28px;
}
td
{
	color:black;font-size:16px;
}

th{
	color:blue;font-size:26px;
}
td
{
	color:black;font-size:18px;
}
</style>
</head>
<body bgcolor="lightgreen">

<div style="height:40%;width:100%;background-color:lightblue;box-shadow:7px 7px 100px green inset;border:1px solid;">
</br></br></br>
<div style="height:150px;width:150px;border:1px solid;margin-left:43%;margin-top:-3%;border-radius:100px;background-image:url(../images/admin.png);background-size:cover;"></div>
<div style="margin-top:-0%;" id="head1">
<ul>
<li><a href="admin.php">Home</a></li>&nbsp&nbsp&nbsp&nbsp

<li><a href="doctor.php">View doctors</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="patient.php">View patients</a></li>&nbsp&nbsp&nbsp&nbsp

<li><a href="contact.php">View contacts</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="discussion.php">View discussion board</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="feedback.php">View feedback</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="appointment.php">View appointment</a></li>&nbsp&nbsp&nbsp&nbsp
</ul></div>
</div>

<h1 style="margin-left:35%;font-size:50px;"><u>All Patient's List</u></h1>
<table border="1" align="center" style="box-shadow:25px 25px 150px green inset;">
<tr>
<th>S.No.</th>
<th>Name</th>
<th>Father's Name</th>
<th>Gender</th>
<th>Email</th>
<th>Mobile</th>
<th>Address</th>
<th>Date & Time</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['address']; ?></td>

<td><?php echo $row['date']; ?></td>
</tr>

<?php	
$a++;
}
?></table>
</body>
</html>