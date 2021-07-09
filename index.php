<?php session_start(); ?>

</center>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>SkyMail.com</title>

 

<link rel="stylesheet" href="css/style0.css">

<?php

header("refresh:10;index.php");

if(isset($_POST['send']))
{
$a=$_POST['a'];
$b=$_POST['b'];
$dt=date("d/m/Y"); 
$tm1=date("h:i:sa"); 		




$x=mysqli_connect("localhost","root","","regis");
$tmz1=mysqli_connect("localhost","root","","time");
$z="SELECT * FROM $a where email='$a' AND pass='$b'";

if($result=mysqli_query($x,$z))
	{
		if(mysqli_num_rows($result)>0)
		{
		while($row=mysqli_fetch_array($result))
		{
		$tm2="INSERT INTO $a (ltime,ldate) VALUES ('$tm1','$dt')";	
		mysqli_query($tmz1,$tm2);
		session_start();
		$_SESSION['user']=$a;
		echo "<script>window.location='home.php'</script>";
		}
	    }
		else
	{
	$err="<h1 align='center'><font color='red' face='Arial'>Invalid_Password</h1></font>";
	}
	
	}
else
{
	$err="<h1 align='center'><font color='red' face='Arial'>Invalid_Username_&_password</h1></font>";
}
}
else
if(isset($_POST['sig']))
{
	echo "<script>window.location='regis.php'</script>";
}
?>


</head>
<body>

<img src="image/Flag.png" align="right" style="width:50px"; height="30px";/>
<div align="left" style="color:#000"><?php echo date("d/m/Y"); 

        echo "     ".date("h:i:sa"); ?></div>
       <a href="index.php" class="name1">Sky</a><a href="index.php" class="name2" style="margin-left:-1px;">Mail</a>
       <div style="margin-top:-25px; font-size:14px;" align="right" >|<a href="FB.php" style="margin-left:0px; font-size:14px;"> Feedback </a> | <a href="pp.php" style="margin-left:0px; font-size:14px;">Privacy Policy</a> |</div>	
<hr>

	  <br><br><br>
	<br>
    
    <br><br><br>
    
<form method="post">
		
		<div class="box1">
      
	<img src="image/logo.jpg"  style="width:70px; height:70px; opacity:0.8; margin-top:10px; margin-bottom:10px;"/> <br>	
		<?php echo @$err;?>

		<font style="color:#000" >Smail account</font><a href="au.php" style="color: #09F;"><u> What's this?</u></a>
			
				
				<h1><input type="text" placeholder="Username" name="a"class="email2">@smail.com</h1>
               <input type="password" placeholder="Password" name="b" class="email"> 
                
           		<br>
              
				
               <input type="submit" value="Sign In" name="send" /> 
                <input type="submit" value="Sign Up" name="sig" class="signup"><br />
</form>
        <br>
                 </div>
         <a href="forgotpass.php"> <u>Forgotten Password?</u></a>
        <br><br>
        <font style="color:#FFF">I can't access my account</font><a href="hp.php"><u>Help</u></a>
        <br><br><br><br><br><br>
<hr>


<h3>
<img src="image/FB.jpg" style=" width:35px; height:35px"/>
<img src="image/WA.jpg" style=" width:35px; height:35px"/>
  <img src="image/TW.jpg" style=" width:35px; height:35px"/>
<img src="image/SP.jpg" style=" width:35px; height:35px"/></h3>
<hr>
<a href="index.php">
<h4>SkyMail.com</h4>
<h5>&copy;.2019.SkyMail.com<br>All Right Reserved.</h5></a>

</body>
</html>
