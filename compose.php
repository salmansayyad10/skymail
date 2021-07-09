<?php

$u=$_SESSION['user'];
if(isset($_POST['send']))
{
$to=$_POST['to'];
$cc=$_POST['cc'];
$bbc=$_POST['bbc'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];
$dt=date("d/m/Y"); 
$tm1=date("h:i:sa");

$zx=date("Ymdhisa");
 $x=mysqli_connect("localhost","root","","regis");
 $z="SELECT * FROM $to where email='$to'";
 $z2="SELECT * FROM $cc where email='$cc'";
 $z3="SELECT * FROM $bbc where email='$bbc'";
 
 
	if(mysqli_query($x,$z) && mysqli_query($x,$z) && mysqli_query($x,$z))
	{
	 $i1=mysqli_connect("localhost","root","","inbox");
	 $i2="INSERT INTO $to (ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$u','$cc','$bbc','$sub','$msg','$zx')";
	 mysqli_query($i1,$i2);
	 
	  	 
	  $i3="INSERT INTO $cc (ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$u','$cc','$bbc','$sub','$msg','$zx')";
	 mysqli_query($i1,$i3);
	 
	 $i4="INSERT INTO $bbc (ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$u','$cc','$bbc','$sub','$msg','$zx')";
	 mysqli_query($i1,$i4);
	 
	 
	 
	$r1=mysqli_connect("localhost","root","","send");
	 $r2="INSERT INTO $u (ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$to','$cc','$bbc','$sub','$msg','$zx')";
	 	 if(mysqli_query($r1,$r2))
		 {
		 
		 mkdir("User_Data/$u/send/$to/");
		 mkdir("User_Data/$u/send/$to/$zx/");
		 
		 
		 mkdir("User_Data/$u/send/$cc/");
		 mkdir("User_Data/$u/send/$cc/$zx/");
		 
		 mkdir("User_Data/$u/send/$bbc/");
		 mkdir("User_Data/$u/send/$bbc/$zx/");

		 mkdir("User_Data/$to/inbox/$u/");
		 mkdir("User_Data/$to/inbox/$u/$zx/");
		 
		 mkdir("User_Data/$cc/inbox/$u/");
		 mkdir("User_Data/$cc/inbox/$u/$zx/");
		 
		 mkdir("User_Data/$bbc/inbox/$u/");
		 mkdir("User_Data/$bbc/inbox/$u/$zx/");
		 
		 
		 
		 
		 move_uploaded_file($_FILES['img']['tmp_name'],"User_Data/$u/send/$to/$zx/".$_FILES['img']['name']);
		 
		 copy("User_Data/$u/send/$to/$zx/".$_FILES['img']['name'],"User_Data/$u/send/$cc/$zx/".$_FILES['img']['name']);
		 copy("User_Data/$u/send/$to/$zx/".$_FILES['img']['name'],"User_Data/$u/send/$bbc/$zx/".$_FILES['img']['name']);
		 
		 copy("User_Data/$u/send/$to/$zx/".$_FILES['img']['name'],"User_Data/$to/inbox/$u/$zx/".$_FILES['img']['name']);
		 copy("User_Data/$u/send/$to/$zx/".$_FILES['img']['name'],"User_Data/$cc/inbox/$u/$zx/".$_FILES['img']['name']);
		 copy("User_Data/$u/send/$to/$zx/".$_FILES['img']['name'],"User_Data/$bbc/inbox/$u/$zx/".$_FILES['img']['name']);
		 
		 
		 
		 

	$err="<font color='green'>Message has been Send</font>";
	}
	}
	else
	{
		
		$fl1=mysqli_connect("localhost","root","","fail");
	 $fl2="INSERT INTO $u (ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$to','$cc','$bbc','$sub','$msg','$zx')";
	 	 mysqli_query($fl1,$fl2);
		 mkdir("User_Data/$u/fail/$to/");
		 mkdir("User_Data/$u/fail/$to/$zx/");
		  move_uploaded_file($_FILES['img']['tmp_name'],"User_Data/$u/fail/$to/$zx/".$_FILES['img']['name']);
	$err="<font color='red'>Message fail</font>";

	}
	
}	
else
	if(isset($_POST['save']))
{
$to=$_POST['to'];
$cc=$_POST['cc'];
$bbc=$_POST['bbc'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];
$dt=date("d/m/Y"); 
$tm1=date("h:i:sa");

	$i8=mysqli_connect("localhost","root","","draft");
	 $i9="INSERT INTO $u (ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$to','$cc','$bbc','$sub','$msg','$zx')";
	 mysqli_query($i8,$i9);
	 mkdir("User_Data/$u/draft/$to/");
		 mkdir("User_Data/$u/draft/$to/$zx/");
	 move_uploaded_file($_FILES['img']['tmp_name'],"User_Data/$u/draft/$zx/".$_FILES['img']['name']);
	$err="<font color='blue'>Message has been Save</font>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Compose Mail</title>

<link rel="stylesheet" href="css/style2.css">
</head>
<body>

<form method="post"  enctype="multipart/form-data">
<div class="box">
<?php echo @$err;?>
<h4><input type="text" placeholder="To" name="to" class="email3" required/>@smail.com</h4>
		
	<h4><input type="text" placeholder="CC" name="cc" class="email3" />@smail.com</h4>
	<h4><input type="text" placeholder="BBC" name="bbc" class="email3"/>@smail.com</h4>	<br>
				<input type="text" placeholder="Subject" name="sub" class="email" required/><br>
			
				<textarea rows="13" name="msg" class="email"/>
				</textarea>
				<br>
		&nbsp;	 <input type="file" value="" name="img">
				<div align="Center"><input type="submit" value="Send" name="send"/>
				<input type="submit" value="Save" name="save"></div>
				
				
</form>
	
</body>
</html>
