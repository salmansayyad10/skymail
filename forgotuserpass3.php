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

 <a href="index.php" class="name1" >Sky</a><a href="index.php" class="name2" style="margin-left:-1px;">Mail</a><br /><hr />

<br>

	<body>


<?php
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
echo"<font color='green'>Password Successfully Reset</font><br>";
echo"<font color='green'>Username=".$a."@smail.com</font><br>";
echo"<font color='green'>Password=".$e."</font><br>";
}
}
else
{
echo"<font color='red' face='cursive'>Mobile Number and Date of Birth Does Not Match</font>";
}
}
}
else
{
echo"<font color='red' face='cursive'>Confirm Password Does Not Match</font>";
}
?>

	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
			 <hr><h2>

	
	
	</body>
</html>		
