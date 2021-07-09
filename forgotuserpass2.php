<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="css/style1.css">

<style>
.c
{
	text-decoration:underline;
	margin-left:10px;
	margin-right:10px;

    
}
</style>
	<div align="right" style="margin-bottom:-30px;">
|<a href="index.php" class="c">Sign in</a>|<a href="regis.php" class="c">Sign up</a>|</div>
<br>

 <a href="index.php" class="name1" >Speed</a><a href="index.php" class="name2" style="margin-left:-1px;">Mail</a><br /><hr />

<br>
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
?><body>
<form method="post" action="forgotuserpass3.php">
		<div class="box1">
		<h6> Forgot Username</h6>
<br>
				
			 <h2><input type="text" placeholder="abc@smail.com" name="a" class="email2" required/>@smail.com</h2>
              <input type="text" placeholder="Mobile Number" name="b" class="email" required/>
		     <input type="text" placeholder="DOB YYYY-MM-DD" name="c" class="email" required/>             
           <input type="password" placeholder="New Password" name="d" class="email" required/>
          <input type="password" placeholder="Confirm Password" name="e" class="email" required/>
		                 
           
           <br><br>
           <input type="submit" value="Submit" name="submit">
		   
		    </div> 
             </form>
			 <br>
	
		<font style="color:#FFF">I can't access my account</font><a href="hp.php" style="margin-left:9px;"><u>Help</u></a>	 			 

	
	
	</body>
</html>		
