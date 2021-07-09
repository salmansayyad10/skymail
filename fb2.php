<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="css/style1.css">

<a href="index.php"><img src="image/name.bmp" style="width:130px; height:30px;"align="left" /></a>
	<a href="index.php?option=login"><img src="image/DP.jpg" style="width:30px; height:30px;"align="right" /></a><br><br><hr><br>
	<body>	
	<?php
	
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	
	$x=mysqli_connect("localhost","root","","feed");
	
	$z="INSERT INTO db (fname,lname,email,mno,red,des) VALUES ('$a','$b','$c','$d','$e','$f')";
	if(mysqli_query($x,$z))
	{
	echo"<font color='green' face='cursive'>Submit</font>";		
	}
	else
	{
	echo"<font color='red' face='cursive'>Please Try Again</font>";
	}
	
  
	
	
	?>
	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
			 <hr><h2>
	
	<a href="index.php?option=login">Sign_up</a>
	<a href="au.php">About_us</a>
	<a href="forgotpass.php">Forget_password</a>
	<a href="FB.php"> Feedback</a></h2>
	<hr>
		

	
	
	</body>
</html>		
