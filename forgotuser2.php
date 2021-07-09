<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="css/style1.css">

<a href="index.php"><img src="image/name.bmp" style="width:130px; height:30px;"align="left" /></a>
	<a href="index.php?option=login"><img src="image/DP.jpg" style="width:30px; height:30px;"align="right" /></a><br><br>
	<body>

<hr><h2>
	
	<a href="regis.php">Sign_in</a>
	<a href="forgotpass.php">Forgot_Password</a>
	<a href="forgotuser.php">Forgot_Username</a>
	<a href="forgotuserpass.php">Forgot_Username_And_Password</a>
	
	<a href="FB.php"> Feedback</a></h2>
	<hr><br><br><br><br>
<?php
$a=$_POST['a'];
$b=$_POST['b'];

$x=mysqli_connect("localhost","root","","user");

$z="SELECT un1 FROM un where mn='$b'";
if($result=mysqli_query($x,$z))
{
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_array($result))
{
echo "<font color='white' face='cursive'>Your User Name Is=".$row['un1']."@speedmail.com</font>";
}
}
else
{
echo"<font color='red' face='cursive'>Mobile Number and Password Does Not Match</font>";
}
}
?>

	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
			 <hr><h2>
	
	<a href="index.php?option=login">Sign_up</a>
	<a href="au.php">About_us</a>
	<a href="forgotpass.php">Forget_password</a>
	<a href="FB.php"> Feedback</a></h2>
	<hr>
		

	
	
	</body>
</html>		
