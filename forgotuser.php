
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Forgot Username</title>
<link rel="stylesheet" href="css/style1.css">

<?php
if(isset($_POST['send']))
{

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
$err="<font color='green' face='cursive'>Your User Name Is=".$row['un1']."@skymail.com</font>";
}
}
else
{
$err="<font color='red' face='cursive'>Mobile Number and Password Does Not Match</font>";
}
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
<div align="right" style="margin-bottom:-30px;">
|<a href="index.php" class="c">Sign in</a>|<a href="regis.php" class="c">Sign up</a>|</div>
<br>

 <a href="index.php" class="name1" >Sky</a><a href="index.php" class="name2" style="margin-left:-1px;">Mail</a><br /><hr />


 
<br><br><br><br><br><br>


		<form method="post">
		<div class="box1">
		<h6> Forgot Username</h6>
<?php echo @$err;?>
				
			
			  <input type="password" placeholder="Password" name="a" class="email" required/>
              <input type="text" placeholder="Mobile Number" name="b" class="email" required/>
		                 
           
           <br><br>
           <input type="submit" value="Submit" name="send">
		   
		    </div> 
             </form>
			 <br><br><br><br><br><br><br>
		<font style="color:#FFF">I can't access my account</font><a href="hp.php" style="margin-left:9px;"><u>Help</u></a>	 
          
</body>
</html>
