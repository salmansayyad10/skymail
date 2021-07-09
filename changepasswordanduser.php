<h2 style="background-color:#09F; text-align:center; font-size:20px; height:27px; margin-bottom:0px; margin-top:-3px; opacity:0.8">Settings</h2>


	       	
<br>
<h6 style="text-align:center; height:25px; background-color: #FFF; color:#000;  margin-top:-20px;font-size:16px; word-spacing:2px; font-weight: normal; opacity:0.7">
	|<a href="home.php?option=cmn">Edit Mobile Number</a> |<a href="home.php?option=cdob">Edit Date Of Birth</a> |<a href="home.php?option=cnm">Edit Name</a> |<a href="home.php?option=pass">Edit Password</a> |<a href="home.php?option=user">Edit Username</a> |<a href="home.php?option=user1">Edit Username and Password</a> |</h6><hr style="margin-top:-37px;">
<?php

$u=$_SESSION['user'];

if(isset($_POST['c']))
{
$user=$_SESSION['user'];
$ou=$_POST['ou'];
$nu=$_POST['nu'];
$nu1=$_POST['nu1'];
$op=$_POST['op'];
$np=$_POST['np'];
$np1=$_POST['np1'];
$mn=$_POST['mn'];


 $x=mysqli_connect("localhost","root","","regis");
		if($np==$np1 && $nu==$nu1)
		{
		$up="UPDATE $u SET pass='$np' WHERE email='$u'";
		$uq="UPDATE $u SET email='$nu' WHERE pass='$np'";
		
		
		$in=mysqli_connect("localhost","root","","inbox");
		$se=mysqli_connect("localhost","root","","send");
		$dr=mysqli_connect("localhost","root","","draft");
		$tr=mysqli_connect("localhost","root","","trash");
		$ur=mysqli_connect("localhost","root","","user");
		
		
		$in1="RENAME TABLE $u To $nu";
		$se1="RENAME TABLE $u To $nu";
		$dr1="RENAME TABLE $u To $nu";
		$tr1="RENAME TABLE $u To $nu";
		$x1="RENAME TABLE $u To $nu";
		$ur1="UPDATE un SET un1='$nu' WHERE mn='$mn'";
		
		mysqli_query($ur,$ur1);	
		mysqli_query($in,$in1);
		mysqli_query($se,$se1);
		mysqli_query($dr,$dr1);
		mysqli_query($tr,$tr1);
		mysqli_query($x,$x1);
		
		mysqli_query($x,$up);
		mysqli_query($x,$uq);
		//$err="<font color='green'>Password Successfully Change</font>";
		}
		else
		{
		$err="<font color='red'>Confirm Password Does Not Match</font>";
		}
/*	}
	else
	{
	$err="<font color='red'>Old Password Does Not Match</font>";
	}*/
}
?>
<br>
<form method="post">
<div class="box2">
<h3>Change Username & password</h3>

  
  
  <input type="text" placeholder="Mobile Number" name="mn" class="email2" required/><br>
     <input type="text" placeholder="Old Username" name="ou" class="email2" required/><br>
  <input type="text" placeholder="New username" name="nu" class="email2" required/><br> 
  <input type="text" placeholder="Confirom username" name="nu1"class="email2" required/><br>
  <input type="password" placeholder="Old Password" name="op" class="email2" required/><br>
  <input type="password" placeholder="New Password" name="np"class="email2" required/><br>
 <input type="password" placeholder="Confirm Password"name="np1"class="email2" required/><br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" value="Submit" name="c"/>

<br /><br />
 </div>

</form>




