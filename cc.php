<?php

$u=$_SESSION['user'];
if(isset($_POST['send']))
{
$to=$_POST['to'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];

$x=mysqli_connect("localhost","root","","regis");
$z="SELECT * FROM $to where email='$to'";
if(mysqli_query($x,$z))
{
$i1=mysqli_connect("localhost","root","","inbox");
$i2="INSERT INTO $to (too,sub,msg) VALUES ('$to','$sub','$msg')";
mysqli_query($i1,$i2);


$i3="INSERT INTO $cc (too,sub,msg) VALUES ('$to','$sub','$msg')";
mysqli_query($i1,$i3);

$i4="INSERT INTO $bbc (too,sub,msg) VALUES ('$to','$sub','$msg')";
mysqli_query($i1,$i4);

$r2="INSERT INTO $u (too,sub,msg) VALUES ('$to','$sub','$msg')";
mysqli_query($r1,$r2);


$r1=mysqli_connect("localhost","root","","send");
$r2="INSERT INTO $u (too,sub,msg) VALUES ('$to','$sub','$msg')";
mysqli_query($r1,$r2);
$err="<font color='green'>Massege has been Send</font>";
}
else
{
$err="<font color='red'>Massege has been fail</font>";

}

} 
else
if(isset($_POST['save']))
{
$i1=mysqli_connect("localhost","root","","draft");
$i2="INSERT INTO $u (too,sub,msg) VALUES ('$to','$sub','$msg')";
mysqli_query($i1,$i2);
$err="<font color='blue'>Massege has been Save</font>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Compose Mail</title>

<link rel="stylesheet" href="css/style2.css">
</head>
<body>

<form method="post">
<div class="box">
<?php echo @$err;?>
<h4><input type="text" placeholder="To" name="to" class="email3" required/>@smail.com</h4>
<a href="compose1.php">click here for cc</a>
<a href="compose1.php">click here for bbc</a>
<h4><input type="text" placeholder="CC" name="cc" class="email3" />@smail.com</h4>
<h4><input type="text" placeholder="BBC" name="bbc" class="email3"/>@smail.com</h4>	<br>
<input type="text" placeholder="Subject" name="sub" class="email"/><br>

<textarea rows="13" name="msg" class="email"/>
</textarea>
<br>
&nbsp;	<input type="file" value="" name="img">
<div align="Center"><input type="submit" value="Send" name="send"/>
<input type="submit" value="Save" name="save"></div>


</form>

</body>
</html>


