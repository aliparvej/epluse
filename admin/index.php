<?php
error_reporting(0);
$msg=$_REQUEST['msg']; //echo $msg;
?>

<div style="height:93%;width:100%;background-color:lightblue;box-shadow:20px 20px 200px blue inset;">
</br></br></br></br></br></br></br>
<img src="../images/admin.png" style="float:left;height:50%;width:30%;margin-left:10%;"/>
<div style="height:80%;width:30%;;margin-left:50%;margin-top:-5%;box-shadow:15px 15px 80px blue;border-radius:12px;">
</br>
<h1 style="margin-left:18%;color:green;font-family:Colonna MT;font-size:45px;"><u>Admin Login</u></h1>
<?php
if($msg==1)
{
	echo "<span style='color:red;margin-left:130px;'>";
	echo "Invalid! Please login.";
	echo "</span>";
}
?>
<form action="indexcode.php" method="post">

</br>
<input type="email" name="email" placeholder="E-mail address" style="height:40px;width:240px;margin-left:20%;border-radius:5px;"/>
</br>
</br>
<input type="password" name="password" placeholder="Password" style="height:40px;width:240px; ;margin-left:20%;border-radius:5px;"/>
</br></br></br></br></br>
<input type="submit" value="Login" style="height:40px;width:100px; ;margin-left:37%;background-color:green;color:white;font-size:25px;border-radius:7px;"/></br></br></br>
<a style="margin-left:7%;" href="#">forgoten password !</a>
</form>
</div>

</div>
<div style="height:50px;width:100%;background-color:lightgreen;box-shadow:10px 10px 20px green inset;"></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoyeright&copy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Design & Developer: Parvej Ali
</div>