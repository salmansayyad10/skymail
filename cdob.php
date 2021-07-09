<h2 style="background-color:#09F; text-align:center; font-size:20px; height:27px; margin-bottom:0px; margin-top:-3px; opacity:0.8">Settings</h2>


	       	
<br>
<h6 style="text-align:center; height:25px; background-color: #FFF; color:#000;  margin-top:-20px;font-size:16px; word-spacing:2px; font-weight: normal; opacity:0.7">
	|<a href="home.php?option=cmn">Edit Mobile Number</a> |<a href="home.php?option=cdob">Edit Date Of Birth</a> |<a href="home.php?option=cnm">Edit Name</a> |<a href="home.php?option=pass">Edit Password</a> |<a href="home.php?option=user">Edit Username</a> |<a href="home.php?option=user1">Edit Username and Password</a> |</h6><hr style="margin-top:-37px;">


<?php
$u=$_SESSION['user'];
if(isset($_POST['c']))
{
	$user=$_SESSION['user'];
	$odob=$_POST['odob'];
	$ndob=$_POST['ndob'];
	$cdob=$_POST['cdob'];
	$pw=$_POST['pw'];
	$x=mysqli_connect("localhost","root","","regis");

	if($ndob==$cdob)
	{
		$z="SELECT * FROM $u where pass='$pw' AND dob='$odob'";
		if($result=mysqli_query($x,$z))
		{
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_array($result))
				{
					$up="UPDATE $u SET dob='$ndob'";
					if(mysqli_query($x,$up))
					{
						$err="<font color='green'>Date Of Birth Successfully Change</font>";
					}
				}
			}
			else
			{
				$err="<font color='red'>Old Date Of Birth or Password Does Not Match</font>";
			}
		}
	}
	else
	{
		$err="<font color='red'>Conform Conform Date Of Birth Does Not Match</font>";
	}
}
?>
<br />
<form method="post">
<div class="box2">
<h3>Change Date Of Birth</h3>
<?php echo @$err; ?>
<input type="text" placeholder="Old Date Of Birth(YYYY-MM-DD)" name="odob" class="email2" required/><br>
<input type="text" placeholder="New Date Of Birth(YYYY-MM-DD)" name="ndob"class="email2" required/><br>
<input type="text" placeholder="Confirm Date Of Birth (YYYY-MM-DD)"name="cdob"class="email2"required/><br>
<input type="password" placeholder="Password"name="pw"class="email2" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" value="Submit" name="c"/> 
<br> <br>
</div>


</form>
