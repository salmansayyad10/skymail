<html>
<head>
<title>SkyMail.com</title>
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




$x=mysqli_connect("localhost","root","","regis");
$z="SELECT * FROM $a where email='$a' AND pass='$b'";

if($result=mysqli_query($x,$z))
{
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_array($result))
{

session_start();
$_SESSION['user']=$a;
echo "<script>window.location='home.php'</script>";
}
}
echo "<br><br><br><br><br><br><h1 align='center'><font color='red' face='Arial'>Username and password are invalid</h1></font>";
}
?>
<br>
<a href="index.php"><font color="#FF0000">click</font></a> here for sign up

</body>
</html>

	

