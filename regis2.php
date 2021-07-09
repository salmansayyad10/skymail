<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="css/style1.css">

<div align="right" style="margin-bottom:-35px;">
<a href="index.php" class="c">|<u> Sign in </u></a><a href="regis.php" style="margin-left:2px;" class="c">|<u> Sign up</u></a>|</div>
<br>

 <a href="index.php" class="name1" >Sky</a><a href="index.php" class="name2" style="margin-left:-1px;">Mail</a><br /><hr />

	<body>
	
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$dt=date("d/m/Y"); 
$tm1=date("h:i:sa"); 		

$c1=strlen($c);
$d1=strlen($d);


$r1=mysqli_connect("localhost","root","","regis");
$z1=mysqli_connect("localhost","root","","Fail");
$i1=mysqli_connect("localhost","root","","inbox");

$tmz1=mysqli_connect("localhost","root","","time");
$tmz2=mysqli_connect("localhost","root","","time2");


$s1=mysqli_connect("localhost","root","","send");
$d1=mysqli_connect("localhost","root","","draft");
$t1=mysqli_connect("localhost","root","","trash");

$us1=mysqli_connect("localhost","root","","user");

$us2="SELECT * FROM un where un1='$c' OR mn='$e'";

if($result=mysqli_query($us1,$us2))
{
if(mysqli_num_rows($result)>0)
{

echo "<h1 align='center'><font color='red' face='cursive'>User name OR Mobile Number all ready used</font></h1>";
}
else
{

	


$us3="INSERT INTO un (un1,mn) VALUES ('$c','$e')";
mysqli_query($us1,$us3);

$r2="CREATE TABLE $c(ttime varchar(100),tdate varchar(100),fname varchar(20),lname varchar(20),email varchar(20),pass varchar(20),mob varchar(20),dob varchar(20),gender varchar(20))";
mysqli_query($r1,$r2);


 
$w="INSERT INTO $c(ttime,tdate,fname,lname,email,pass,mob,dob,gender) VALUES ('$tm1','$dt','$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($r1,$w);






mkdir("User_Data/$c");
mkdir("User_Data/$c/inbox");
mkdir("User_Data/$c/send");
mkdir("User_Data/$c/draft");
mkdir("User_Data/$c/trash");
mkdir("User_Data/$c/fail");
move_uploaded_file($_FILES['img']['tmp_name'],"User_Data/$c/".$_FILES['img']['name']);

$s2="CREATE TABLE $c(uid int(100) NOT NULL AUTO_INCREMENT,ttime varchar(100),tdate varchar(100),too varchar(50),cc varchar(50),bbc varchar(50),sub varchar(1000),msg varchar(10000),tm varchar(1000),
  PRIMARY KEY (uid))";
mysqli_query($s1,$s2);


$d2="CREATE TABLE $c(uid int(100) NOT NULL AUTO_INCREMENT,ttime varchar(100),tdate varchar(100),too varchar(50),cc varchar(50),bbc varchar(50),sub varchar(1000),msg varchar(10000),tm varchar(1000),
  PRIMARY KEY (uid))";
mysqli_query($d1,$d2);


$t2="CREATE TABLE $c(uid int(100) NOT NULL AUTO_INCREMENT,ttime varchar(100),tdate varchar(100),too varchar(50),cc varchar(50),bbc varchar(50),sub varchar(1000),msg varchar(10000),tm varchar(1000),
  PRIMARY KEY (uid))";
mysqli_query($t1,$t2);

$i2="CREATE TABLE $c(uid int(100) NOT NULL AUTO_INCREMENT,ttime varchar(100),tdate varchar(100),too varchar(50),cc varchar(50),bbc varchar(50),sub varchar(1000),msg varchar(10000),tm varchar(1000),
  PRIMARY KEY (uid))";
mysqli_query($i1,$i2);

$z2="CREATE TABLE $c(uid int(100) NOT NULL AUTO_INCREMENT,ttime varchar(100),tdate varchar(100),too varchar(50),cc varchar(50),bbc varchar(50),sub varchar(1000),msg varchar(10000),tm varchar(1000),
  PRIMARY KEY (uid))";
mysqli_query($z1,$z2);

$tms1="CREATE TABLE $c(uid int(100) NOT NULL AUTO_INCREMENT,ltime varchar(100),ldate varchar(100),  PRIMARY KEY (uid))";
$tms2="CREATE TABLE $c(uid int(100) NOT NULL AUTO_INCREMENT,lotime varchar(100),lodate varchar(100),  PRIMARY KEY (uid))";
mysqli_query($tmz1,$tms1);
mysqli_query($tmz2,$tms2);
echo "<h1 align='center'><font color='black' face='cursive'>You Are Successful Registered</font></h1>";
			

			

}

	
}

?>

		 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
			 	<h2>
	
	<a href="index.php?option=login">Sign_up</a> |
	<a href="au.php">About_us</a> |
	<a href="forgotpass.php">Forget_password</a> |
	<a href="FB.php"> Feedback</a></h2><br /> 
	<hr>
		

	
	
	</body>
</html>