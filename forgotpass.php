
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>Forgot password</title>

<link rel="stylesheet" href="css/style1.css">


<?php

if(isset($_POST['send']))
{
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
			$err="<font color='green'>Password Successfully Reset</font>";
			}
		}
		else
		{
			$err="<font color='red' face='cursive'>Mobile Number and Date of Birth Does Not Match </font>";

		}

	}
	else
	{
		$err="<font color='red' face='cursive'>User Id Does Not Match</font>";
	}
}
else
{
$err="<font color='red' face='cursive'>Confirm Password Does Not Match</font>";
}

}
?>
<style>
.c
{
	text-decoration:underline;
	margin-left:10px;
	margin-right:10px;

    
}


</style>
</head>

	



<body>
<div align="right" style="margin-bottom:-35px;">
|<a href="index.php" class="c">Sign in</a>|<a href="regis.php" class="c">Sign up</a>|</div>
<br>

 <a href="index.php" class="name1" >Sky</a><a href="index.php" class="name2" style="margin-left:-1px;">Mail</a><br /><hr />


 
<br><br><br><br><br><br>
		<form method="post">
		<div class="box1">
        
		 <h6>Forgotten Password</h6>
<?php echo @$err;?>
			
			<br />
			<h2><input type="text" placeholder="Username" name="a" class="email2" required/>@smail.com</h2>
              <input type="text" placeholder="Mobile Number" name="b" class="email" required/>
		     <input type="text" placeholder="YYYY-MM-DD" name="c" class="email" required/>             
           
           <input type="password" placeholder="New Password" name="d" class="email" required/>
          <input type="password" placeholder="Confirm Password" name="e" class="email" required/><br><br>
           <input type="submit" value="Submit" name="send">
		   
		    </div> 
             </form>
<br><br><br>	
<font style="color:#FFF">I can't access my account</font><a href="hp.php" style="margin-left:9px;"><u>Help</u></a>			 


<br><br><br>
       </body>
</html>
