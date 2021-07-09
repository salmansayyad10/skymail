<html>
<title>Feedback</title>
<head>
<link rel="stylesheet" href="css/style0.css">

<?php
	if(isset($_POST['send']))
{
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	
	$x=mysqli_connect("localhost","root","","feed");
	
	$z="INSERT INTO db (fname,lname,email,mno,red,des) VALUES ('$a','$b','$c','$d','$e','$f')";
	if(mysqli_query($x,$z))
	{
	$err="<font color='green' face='cursive'>Submit</font>";		
	}
	else
	{
	$err="<font color='red' face='cursive'>Please Try Again</font>";
	}
	
  
}
	
	?>
</head>
<body>
<a href="index.php" class="name1">Sky</a><a href="index.php" class="name2" style="margin-left:-1px;">Mail</a>

<div align="right" style="margin-top:-50px;">|<u><a href="index.php">Sign in</a></u>  | <u><a href="regis.php"> Sign up </a></u> |</div>
<hr style="margin-top:30px;">
<br><br><br><br>
<form method="post">

<div class="box">

<h6 style="font-size:1.0em;
   color: #000;
   height:25px;
   margin:0px 0px -5px 0px;
   word-spacing:5px;
   background-color:#09F;"> Feedback</h6> <br>   <?php echo @$err;?>

<br>  
   <input type="text" placeholder="First name" name="a"class="email"  required/>   
   <input type="text" placeholder="Last name" name="b" class="email" required/>
   <input type="email" placeholder="email address" name="c"class="email"  required/>   
   <input type="text" placeholder="Mobile number" name="d" class="email" required/>
   <input type="text" placeholder="Regading" name="e"class="email"  required/>
    
   <textarea rows="4" cols="50" placeholder="Description" name="f" class="email" required>
   </textarea>
   
  <br><br>
  
    <input type="submit" value="Send" name="send"/>
	<br><br>
	</div>
</form>

<hr><h1>
	
	<a href="index.php?option=login">Sign_up</a>
	<a href="au.php">About_us</a>
	
	<a href="regis.php">Sign_in</a></h1>
	<hr>
</body>
</html>
