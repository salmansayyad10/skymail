<h2 style="background-color:#09F; text-align:center; font-size:20px; height:27px; margin-bottom:0px; margin-top:-3px; opacity:0.8">Settings</h2>


	       	
<br>
<h6 style="text-align:center; height:25px; background-color: #FFF; color:#000;  margin-top:-20px;font-size:16px; word-spacing:2px; font-weight: normal; opacity:0.7">
	|<a href="home.php?option=cmn">Edit Mobile Number</a> |<a href="home.php?option=cdob">Edit Date Of Birth</a> |<a href="home.php?option=cnm">Edit Name</a> |<a href="home.php?option=pass">Edit Password</a> |<a href="home.php?option=user">Edit Username</a> |<a href="home.php?option=user1">Edit Username and Password</a> |</h6><hr style="margin-top:-37px;">



<?php

$u=$_SESSION['user'];
header("refresh:30;index.php");
if(isset($_POST['c']))
{
$user=$_SESSION['user'];
$ou=$_POST['ou'];
$nu=$_POST['nu'];
$nul=$_POST['nul'];
$cp=$_POST['cp'];
$mn=$_POST['mn'];
$x=mysqli_connect("localhost","root","","regis");

if($nu==$nul)
	{
		$z="SELECT * FROM $u where email='$u' AND pass='$cp'";
		if($result=mysqli_query($x,$z))
		{
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_array($result))
				{
					
					$up="UPDATE $u SET email='$nu' WHERE pass='$cp'";
					if(mysqli_query($x,$up))
					{
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
					}
				}
			}
			else
			{
				$err="<font color='red'>password OR Old Password Does Not Match</font>";
			}
		}
	}
	else
	{
		$err="<font color='red'>Conform Username Does Not Match</font>";
	}
}
?>
<br>
<form method="post">
<div class="box2">
<h3>Change Username</h3>

  <?php echo @$err; ?>
  
  
  <input type="text" placeholder="Old Username" name="ou" class="email2" required/><br>
 
 <input type="text" placeholder="New username" name="nu"class="email2" required/><br>
  <input type="text" placeholder="Confirom username" name="nul"class="email2" required/><br>
 <input type="password" placeholder="Password"name="cp"class="email2" required/>
 <input type="text" placeholder="Mobile Number"name="mn"class="email2" required/><br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" value="Submit" name="c"/>
 <br> <br>
 </div>
</form>
