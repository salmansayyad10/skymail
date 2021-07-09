<html>
<head>
<title>SpeedMail.com</title>
<link rel="stylesheet" href="css/style0.css">

<body>
<a href="index.php"><img src="image/name.bmp" style="width:120px; height:35px;" align="left"/></a>
<br><br>
	<hr><h1>
	
	<a href="regis.php">Sign_in</a>
	<a href="forgotpass.php">Forgot_Password</a>
	<a href="forgotuser.php">Forgot_Username</a>
	<a href="forgotuserpass.php">Forgot_Username_And_Password</a>
	
	<a href="FB.php"> Feedback</a></h1>
	<hr>

<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$x=mysqli_connect("localhost","root","","regis");
if($d==$e)
{
$z="SELECT * FROM $a where mob='$b' AND dob='$c'";
if($result=mysqli_query($x,$z))
{
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_array($result))
{
$rn="UPDATE $a SET pass='$e' WHERE mob='$b' AND dob='$c'";
mysqli_query($x,$rn);
echo"<font color='green'>Password Successfully Reset</font>";
}
}
else
{
echo"<font color='red' face='cursive'>Mobile Number and Date of Birth Does Not Match OR </font>";

}

}
echo"<font color='red' face='cursive'>User Id Does Not Match</font>";
}
else
{
echo"<font color='red' face='cursive'>Confirm Password Does Not Match</font>";
}
?>

	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
			 <hr><h1>
	
	<a href="index.php?option=login">Sign_up</a>
	<a href="au.php">About_us</a>
	<a href="forgotpass.php">Forget_password</a>
	<a href="FB.php"> Feedback</a></h1>
	<hr>
		

	
	
	</body>
</html>		
