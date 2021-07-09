<h2 style="background-color:#09F; text-align:center; font-size:20px; height:27px; margin-bottom:0px; margin-top:-3px; opacity:0.8">Settings</h2>


	       	
<br>
<h6 style="text-align:center; height:25px; background-color: #FFF; color:#000;  margin-top:-20px;font-size:16px; word-spacing:2px; font-weight: normal; opacity:0.7">
	|<a href="home.php?option=cmn">Edit Mobile Number</a> |<a href="home.php?option=cdob">Edit Date Of Birth</a> |<a href="home.php?option=cnm">Edit Name</a> |<a href="home.php?option=pass">Edit Password</a> |<a href="home.php?option=user">Edit Username</a> |<a href="home.php?option=user1">Edit Username and Password</a> |</h6><hr style="margin-top:-37px;">


<?php
$u=$_SESSION['user'];
if(isset($_POST['c']))
{
	$user=$_SESSION['user'];
	$fnm=$_POST['fnm'];
	$lnm=$_POST['lnm'];
	$mn=$_POST['mn'];
	$pw=$_POST['pw'];
	$x=mysqli_connect("localhost","root","","regis");
	$z="SELECT * FROM $u where mob='$mn' AND pass='$pw'";
	if($result=mysqli_query($x,$z))
	{
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
				$up="UPDATE $u SET fname='$fnm'";
				$up1="UPDATE $u SET lname='$lnm'";
				if(mysqli_query($x,$up) && mysqli_query($x,$up1))
				{
					$err="<font color='green'>Name Successfully Change</font>";
				}
			}
		}
		else
			{
				$err="<font color='red'>Mobile number or password Does Not Match</font>";
			}
	}
			
}

?>
<br />
<form method="post">
<div class="box2">
<h3>Change Name</h3>
<?php echo @$err; ?>
<input type="text" placeholder="New First Name" name="fnm" class="email2" required/><br>
<input type="text" placeholder="New Last Name" name="lnm"class="email2" required/><br>
<input type="text" placeholder="Moblie Number"name="mn"class="email2"required/><br>
<input type="password" placeholder="Password"name="pw"class="email2" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" value="Submit" name="c"/> 
<br> <br>
</div>
</form>
