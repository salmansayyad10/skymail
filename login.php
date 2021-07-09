<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="css/style1.css">
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
}




?>


	

</head>
<body>
	<a href="index.php"><img src="image/name.bmp" style="width:130px; height:30px;"align="left" /></a>
	<a href="index.php?option=login"><img src="image/DP.jpg" style="width:30px; height:30px;"align="right" /></a><br><br><hr><br>
	

	
		<form   method="post" >
		
		<div class="box">
		<h1> Sign up<br><?php echo @$msg;?></h1>
	
				
			
				
				<input type="text" placeholder="abc@smail.com" name="a" class="email" required/>
               <input type="password" placeholder="Password" name="b" class="email" required/> 
                
           		
              
				
               <input type="submit" value="Submit" name="save">
                                               <input type="reset" value="Reset">
        </form>
		
		</div> 
		 
			 <hr><h2>
	
	<a href="index.php?option=login">Sign_up</a>
	<a href="au.php">About_us</a>
	<a href="forgotpass.php">Forget_password</a>
	<a href="FB.php"> Feedback</a></h2>
	<hr>
		
		
	
   
</body>
</html>