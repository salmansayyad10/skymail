<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<?php

		
$dt=date("d/m/Y"); 
$tm1=date("h:i:sa"); 		
session_start();
$x=$_SESSION['user'];
if($_SESSION['user']=="")
{
header('location:index.php');
}
else
{
	


error_reporting(0);
$pExt=array('jpg','png','jpeg','bmp','gif');
$sc=opendir("User_Data/$x");
while($file=readdir($sc))
{	
	if($file!='.' && $file!='..')
	{
		$filedata=pathinfo($file);
		if(in_array($filedata['extension'], $pExt))
		{
		$img=$filedata['basename'];
		
		}
		
	}
}

$z="SELECT * FROM $x ";

$x1=mysqli_connect("localhost","root","","time2");
$result1=mysqli_query($x1,$z);

while($row1=mysqli_fetch_array($result1))
	{
		$date=$row1['lodate'];
		$time=$row1['lotime'];
		
		
	}
$coubt="SELECT * FROM $x ";
$count1=0;
$x1=mysqli_connect("localhost","root","","inbox");
$result1=mysqli_query($x1,$z);

while($row1=mysqli_fetch_array($result1))
	{
		$count1+=1;
		


	}




?>

<title><?php  echo $x;?>@smail.com</title>
<link rel="stylesheet" href="css/style2.css">
</head>

<body  style="background-image:url('theme/<?php
		@$conTheme=$_REQUEST['thm'];
		if($conTheme)
		{
			$fo=fopen("User_Data/$x/theme","w");
			fwrite($fo,$conTheme);
		}
		
		@$f=fopen("User_Data/$x/theme","r");
		@$fr=fread($f, filesize("User_Data/$x/theme"));
		echo $fr;
		?>');">
        
        <div style="background-color:#09F; opacity:0.7; font-size:16px; margin-bottom:30px;"><table><tr><td>
	 <img src="image/logo.jpg" align="center"  style="width:50px; height:50px; opacity:0.8; margin-top:1px; margin-bottom:1px; margin-left:600px;"/></td><td style="color: #000; font-size:40px;" width="270">Mail</td><td >Welcome:-</td><td><?php echo $x; ?>@smail.com</td><td width="80">|<a href="home.php?option=pf" style="text-align:right;"><u>Edit profile</u></a>|</td><td><?php echo "<img src='User_Data/$x/$img' width='80' height='50px'/>  ";?></td></tr></table></div>
	

<h6 style="text-align:left; background-color:  #FFF; height:25px; margin-top:-30px;font-size:14px; word-spacing:2px; font-weight: normal; opacity:0.7">|<a href="home.php"><u>Home</u></a>

 |<a href="home.php?option=pf" style="text-align:right;"><u>My profile</u></a> |<a href="home.php?option=ser" style="text-align:right;"><u>Search mail</u></a> 
 
 |<a href="home.php?option=settings" ><u>Settings</u></a> |<a href="home.php?option=theme" ><u>Change Theme</u></a> |<a href="hp2.php" target="_blank" > <u>Help</u></a> |<a href="home.php?option=time1"><u>Sign In Details</u></a> |<a href="home.php?option=time2"><u>Sign out Details</u></a> |<a href="logout.php"style="color:#FF0000;"><u>Sign out</u></a> |<div align="right" style="margin-top:-20px; margin-right:5px; font-weight:bold;"> <?php echo $dt;
 echo "-". $tm1; ?> </div></h6><br /><hr style="margin-top:-54px;" />
<br>




 


 </td></tr></table><br />
 
 
  <table  style="  height:auto; width: auto; margin: 2px 2px 2px 2px;">
	 <tr>
	
	 <td valign="top">
     
     <div style=" border: groove; background-color:#FFF; opacity:0.7; border-color:#000; width:150px; height:400px; text-align:center;"><h5 style="font-size:16px; margin-bottom:-1px; margin-top:-1px; text-align:center">
	 
	 
	 <h5 style="background-color:#09F; text-align:center;  font-size:14px;  margin-bottom:0px; margin-top:0px; opacity:0.7"><?php $z="SELECT * FROM $x ";

$x1=mysqli_connect("localhost","root","","regis");
$result1=mysqli_query($x1,$z);

while($row1=mysqli_fetch_array($result1))
	{
		$fname=$row1['fname'];
		
		
		
		
	}
 echo $fname; ?></h5><?php echo "<img src='User_Data/$x/$img' height='80px' width='150px'/>  ";?><hr />


     
	<br><br>
    
	<a href="home.php?option=compose"><u>Compose</u></a><br><br>
	<a href="home.php?option=inbox"><u>Inbox(<?php echo $count1;?>)</u></a><br><br>
	<a href="home.php?option=sent"><u>Sent Mail</a></u><br><br>
	<a href="home.php?option=draft"><u>Draft</u></a><br><br>
    <a href="home.php?option=fail"><u>Failed</u></a><br><br>
	<a href="home.php?option=trash"><u>Trash</u></a><br><br>
	
    <br>
    <h5 style="background-color:#09F; height:26px; text-align:center;s opacity:0.7; font-size:8px; margin-top:-17px; opacity:0.7">
    ©.2019.SkyMail.com India Limited.<br /> <a href="pp.php"  style="font-size:8px;" target="_blank">Privacy Policy</a> | <a href="fb.php"  style="font-size:8px;" target="_blank">Feedback</a></h5>
	</td>
	<td valign="top" width="1130">
    
	<?php
	@$opt=$_GET['option'];
	switch($opt)
	{
	case 'user';
	include('changeuser.php');
	break;case 'user1';
	include('changepasswordanduser.php');
	break;
	case 'pass';
	include('changepassword.php');
	break;
	case 'theme';
	include('changetheme.php');
	break;
	case 'compose';
	include('compose.php');
	break;
	case 'inbox';
	include('inbox.php');
	break;
	case 'sent';
	include('sent.php');
	break;
	case 'draft';
	include('draft.php');
	break;
	case 'trash';
	include('trash.php');
	break;
	case 'fail';
	include('fail.php');
	break;
	case 'settings';
	include('Settings.php');
	break;
	case 'cmn';
	include('cmn.php');
	break;
	case 'cdob';
	include('cdob.php');
	break;
	case 'cnm';
	include('cnm.php');
	break;
	case 'pf';
	include('pf.php');
	break;
	case 'id';
	include('id.php');
	break;
	case 'time1';
	include('time1.php');
	break;
	case 'time2';
	include('time2.php');
	break;
	
	case 'ser';
	include('ser.php');
	break;
	
		
	
	
	
	}
	
	 		
	$zx=date("Ymdhisa");


	
if(isset($_GET['in']))
	{
		
	$in=$_GET['in'];
		$us1=mysqli_connect("localhost","root","","inbox");
		$us2="SELECT * FROM $x where uid='$in'";
		if($result=mysqli_query($us1,$us2))
			{
			if(mysqli_num_rows($result)>0)
			{
				echo "<div style='background-color:  #FFF; text-align:left; opacity:0.7; font-size:16px; margin-top:6px; opacity:0.7'>";
			echo"<table cellpadding='18'>";
			while($row=mysqli_fetch_array($result))
			{
				
				$too=$row['too'];
			$sub=$row['sub'];
			$msg=$row['msg'];
			$uid=$row['uid'];
			
				echo"<tr style='font-size:22px;'><td><u>".$row['sub']."</u></td></tr>";
			echo"<tr><td>From:<u>".$row['too']."@smail.com</u></td></tr>";
			
			
			$zx1=$row['tm'];
			
			
			 error_reporting(0);
			$pExt=array('jpg','png','jpeg','bmp','gif');
			$sc=opendir("User_Data/$x/inbox/$too/$zx1");
			while($file=readdir($sc))
			{	
				if($file!='.' && $file!='..')
				{
					$filedata=pathinfo($file);
					if(in_array($filedata['extension'], $pExt))
					{
					$img=$filedata['basename'];
					
					}
					
				}
			}
			
			

			
			echo"<tr><td></td><td >".$row['msg']."<br><br><br><br><a href='User_Data/$x/inbox/$too/$zx1/$img'><img src='User_Data/$x/inbox/$too/$zx1/$img' width='100' height='100px'/></a></td></tr>";
			
			echo"<tr><td></td><td></td><td style='font-size:13px; align='right'><u>".$row['tdate']."--".$row['ttime']."</u></td></tr></table></div>";
			
		
			
			echo"</br>";
			
	
	if(isset($_POST['delete']))
	{
	
	
  
   	$del1=mysqli_connect("localhost","root","","trash");
	$del2="INSERT INTO $x(ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$too','-','-','$sub','$msg','$zx')";
	
		mkdir("User_Data/$x/trash/$too/");
		 mkdir("User_Data/$x/trash/$too/$zx/");
		 	 copy("User_Data/$x/inbox/$too/$zx1/$img","User_Data/$x/trash/$too/$zx/$img");
	
	
	
	
	
	
	
	
	
	
	
	
	if(mysqli_query($del1,$del2))
	{
	$err="Message Deleted";
	}
	
	$del3=mysqli_connect("localhost","root","","inbox");
	$del4="Delete from $x WHERE uid='$uid'";
	mysqli_query($del3,$del4);

}

if(isset($_POST['save']))
	{
	 		

	
  
   	$del1=mysqli_connect("localhost","root","","draft");
	$del2="INSERT INTO $x(ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$too','-','-','$sub','$msg','$zx')";
	
	mkdir("User_Data/$x/draft/$too/");
		 mkdir("User_Data/$x/draft/$too/$zx/");
		 	 copy("User_Data/$x/inbox/$too/$zx1/$img","User_Data/$x/draft/$too/$zx/$img");
	
	if(mysqli_query($del1,$del2))
	{
	$err="Message Save";
	}
	
	
}

echo "<div align='center'  style='background-color:  #FFF; margin-top:-20px; opacity:0.7;'>";
			 echo'<form method="POST">';
echo "$err<br>	";
echo'<input type="submit" name="delete" value="Delete"/>';
echo'<input type="submit" name="save" value="Save"/>';

echo "<br><br></div>";

			}
			}

			}
	}
	else
	
	if(isset($_GET['sn']))
	{
		$sn=$_GET['sn'];
		$us1=mysqli_connect("localhost","root","","send");
		$us2="SELECT * FROM $x where uid='$sn'";
		if($result=mysqli_query($us1,$us2))
			{
			if(mysqli_num_rows($result)>0)
			{
				echo "<div style='background-color:  #FFF; text-align:left; opacity:0.7; font-size:16px; margin-top:6px; opacity:0.7'>";
			echo"<table cellpadding='18'>";
			while($row=mysqli_fetch_array($result))
			{
				
				echo"<tr style='font-size:22px;'><td><u>".$row['sub']."</u></td></tr>";
			echo"<tr><td>From:<u>".$row['too']."@smail.com</u></td></tr>";
			$too=$row['too'];
			$cc=$row['cc'];
			$bbc=$row['bbc'];
			$sub=$row['sub'];
			$msg=$row['msg'];
			$uid=$row['uid'];
			
			$zx1=$row['tm'];
			
			
			 error_reporting(0);
			$pExt=array('jpg','png','jpeg','bmp','gif');
			$sc=opendir("User_Data/$x/send/$too/$zx1");
			while($file=readdir($sc))
			{	
				if($file!='.' && $file!='..')
				{
					$filedata=pathinfo($file);
					if(in_array($filedata['extension'], $pExt))
					{
					$img=$filedata['basename'];
					
					}
					
				}
			}
			
			
			
			
			echo"<tr><td></td><td >".$row['msg']."<br><br><br><br><a href='User_Data/$x/send/$too/$zx1/$img'><img src='User_Data/$x/send/$too/$zx1/$img' width='100' height='100px'/></a></td></tr>";
			
			echo"<tr><td></td><td></td><td style='font-size:13px; align='right'><u>".$row['tdate']."--".$row['ttime']."</u></td></tr></table></div>";
			
			
			
		
	
			
	
	if(isset($_POST['delete']))
	{
	
	
  
   	$del1=mysqli_connect("localhost","root","","trash");
	$del2="INSERT INTO $x(ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$too','$cc','$bbc','$sub','$msg','$zx')";
	mkdir("User_Data/$x/trash/$too/");
		 mkdir("User_Data/$x/trash/$too/$zx/");
		 	 copy("User_Data/$x/send/$too/$zx1/$img","User_Data/$x/trash/$too/$zx/$img");

	
	if(mysqli_query($del1,$del2))
	{
	$err="Message Deleted";
	}
	
	$del3=mysqli_connect("localhost","root","","send");
	$del4="Delete from $x WHERE uid='$uid'";
	mysqli_query($del3,$del4);

}

if(isset($_POST['save']))
	{
	
	
  
   	$del1=mysqli_connect("localhost","root","","draft");
	$del2="INSERT INTO $x(ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$too','$cc','$bbc','$sub','$msg','$zx')";
mkdir("User_Data/$x/draft/$too/");
		 mkdir("User_Data/$x/draft/$too/$zx/");
		 	 copy("User_Data/$x/send/$too/$zx1/$img","User_Data/$x/draft/$too/$zx/$img");

	if(mysqli_query($del1,$del2))
	{
	$err="Message Save";
	}
	
	
}

echo "<div align='center'  style='background-color:  #FFF; margin-top:0px; opacity:0.7;'>";
			 echo'<br><form method="POST">';
echo "$err<br>	";
echo'<input type="submit" name="delete" value="Delete"/>';
echo'<input type="submit" name="save" value="Save"/>';
echo "<br><br></div>";
	 
			}
			}

			

			}
	}
	else
	
	if(isset($_GET['dr']))
	{
		$dr=$_GET['dr'];
		$us1=mysqli_connect("localhost","root","","draft");
		$us2="SELECT * FROM $x where uid='$dr'";
		if($result=mysqli_query($us1,$us2))
			{
			if(mysqli_num_rows($result)>0)
			{
				echo "<div style='background-color:  #FFF; text-align:left; opacity:0.7; font-size:16px; margin-top:6px; opacity:0.7'>";
			echo"<table cellpadding='18'>";
			while($row=mysqli_fetch_array($result))
			{
				
				echo"<tr style='font-size:22px;'><td><u>".$row['sub']."</u></td></tr>";
			echo"<tr><td>From:<u>".$row['too']."@smail.com</u></td></tr>";
			$zx1=$row['tm'];
				$too=$row['too'];
			$cc=$row['cc'];
			$bbc=$row['bbc'];
			$sub=$row['sub'];
			$msg=$row['msg'];
			$uid=$row['uid'];

			
			
			 error_reporting(0);
			$pExt=array('jpg','png','jpeg','bmp','gif');
			$sc=opendir("User_Data/$x/draft/$too/$zx1");
			while($file=readdir($sc))
			{	
				if($file!='.' && $file!='..')
				{
					$filedata=pathinfo($file);
					if(in_array($filedata['extension'], $pExt))
					{
					$img=$filedata['basename'];
					
					}
					
				}
			}
			
			
			
			
			echo"<tr><td></td><td >".$row['msg']."<br><br><br><br><a href='User_Data/$x/draft/$too/$zx1/$img'><img src='User_Data/$x/draft/$too/$zx1/$img' width='100' height='100px'/></a></td></tr>";
			
			echo"<tr><td></td><td></td><td style='font-size:13px; align='right'><u>".$row['tdate']."--".$row['ttime']."</u></td></tr></table></div>";
			
							
	
	if(isset($_POST['delete']))
	{
	
	
  
   	$del1=mysqli_connect("localhost","root","","trash");
	$del2="INSERT INTO $x(ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$too','$cc','$bbc','$sub','$msg','$zx')";
	mkdir("User_Data/$x/trash/$too/");
		 mkdir("User_Data/$x/trash/$too/$zx/");
		 	 copy("User_Data/$x/draft/$too/$zx1/$img","User_Data/$x/trash/$too/$zx/$img");

	
	if(mysqli_query($del1,$del2))
	{
	$err="Message Deleted";
	}
	
	$del3=mysqli_connect("localhost","root","","draft");
	$del4="Delete from $x WHERE uid='$uid'";
	mysqli_query($del3,$del4);

}

echo"<div align='center'  style='background-color:  #FFF; margin-top:0px; opacity:0.7;'>";
			 echo'<br><form method="POST">';
echo "$err<br>	";
echo'<input type="submit" name="delete" value="Delete"/><br><br></div>';
			}
			}

			

			}
	}
	
	else
	
	if(isset($_GET['fa']))
	{
		$fa=$_GET['fa'];
		$us1=mysqli_connect("localhost","root","","fail");
		$us2="SELECT * FROM $x where uid='$fa'";
		if($result=mysqli_query($us1,$us2))
			{
			if(mysqli_num_rows($result)>0)
			{
			echo "<div style='background-color:  #FFF; text-align:left; opacity:0.7; font-size:16px; margin-top:6px; opacity:0.7'>";
			echo"<table cellpadding='18'>";
			while($row=mysqli_fetch_array($result))
			{
				
				echo"<tr style='font-size:22px;'><td><u>".$row['sub']."</u></td></tr>";
			echo"<tr><td>From:<u>".$row['too']."@smail.com</u></td></tr>";
			$too=$row['too'];
			$cc=$row['cc'];
			$bbc=$row['bbc'];
			$sub=$row['sub'];
			$msg=$row['msg'];
			$uid=$row['uid'];
			$zx1=$row['tm'];
	
			
			error_reporting(0);
			$pExt=array('jpg','png','jpeg','bmp','gif');
			$sc=opendir("User_Data/$x/fail/$too/$zx1");
			while($file=readdir($sc))
			{	
				if($file!='.' && $file!='..')
				{
					$filedata=pathinfo($file);
					if(in_array($filedata['extension'], $pExt))
					{
					$img=$filedata['basename'];
					
					}
					
				}
			}
			
			
			
			
			echo"<tr><td></td><td >".$row['msg']."<br><br><br><br><a href='User_Data/$x/fail/$too/$zx1/$img'><img src='User_Data/$x/fail/$too/$zx1/$img' width='100' height='100px'/></a></td></tr>";
						
			echo"<tr><td></td><td></td><td style='font-size:13px; align='right'><u>".$row['tdate']."--".$row['ttime']."</u></td></tr></table></div>";
			
        	
	
	if(isset($_POST['delete']))
	{
	
	
  
   	$del1=mysqli_connect("localhost","root","","trash");
	$del2="INSERT INTO $x(ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$too','$cc','$bbc','$sub','$msg','$zx')";
	mkdir("User_Data/$x/trash/$too/");
		 mkdir("User_Data/$x/trash/$too/$zx/");
		 	 copy("User_Data/$x/fail/$too/$zx1/$img","User_Data/$x/trash/$too/$zx/$img");

	
	if(mysqli_query($del1,$del2))
	{
	$err="Message Deleted";
	}
	
	$del3=mysqli_connect("localhost","root","","fail");
	$del4="Delete from $x WHERE uid='$uid'";
	mysqli_query($del3,$del4);

}

if(isset($_POST['save']))
	{
	
	
  
   	$del1=mysqli_connect("localhost","root","","draft");
	$del2="INSERT INTO $x(ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$too','-','-','$sub','$msg','$zx')";
	mkdir("User_Data/$x/draft/$too/");
		 mkdir("User_Data/$x/draft/$too/$zx/");
		 	 copy("User_Data/$x/fail/$too/$zx1/$img","User_Data/$x/draft/$too/$zx/$img");

	
	if(mysqli_query($del1,$del2))
	{
	$err="Message Save";
	}
	
	
}

echo"<div align='center'  style='background-color:  #FFF; margin-top:0px; opacity:0.7;'>";
			 echo'<br><form method="POST">';
echo "$err<br>	";
echo'<input type="submit" name="delete" value="Delete"/>';
echo'<input type="submit" name="save" value="Save"/><br><br>';
echo "</div>";
			 
			}
			}

			

			}
	}
	
	else
	
	if(isset($_GET['tr']))
	{
		$tr=$_GET['tr'];
		$us1=mysqli_connect("localhost","root","","trash");
		$us2="SELECT * FROM $x where uid='$tr'";
		if($result=mysqli_query($us1,$us2))
			{
			if(mysqli_num_rows($result)>0)
			{
			echo "<div style='background-color:  #FFF; text-align:left;  font-size:16px; margin-top:6px; opacity:0.7'>";
			echo"<table cellpadding='18'>";
			while($row=mysqli_fetch_array($result))
			{
				
				echo"<tr style='font-size:22px;'><td><u>".$row['sub']."</u></td></tr>";
			echo"<tr><td>From:<u>".$row['too']."@smail.com</u></td></tr>";
			
			$zx1=$row['tm'];
	
			$too=$row['too'];
			
			$sub=$row['sub'];
			$msg=$row['msg'];
			$uid=$row['uid'];

			error_reporting(0);
			$pExt=array('jpg','png','jpeg','bmp','gif');
			$sc=opendir("User_Data/$x/trash/$too/$zx1");
			
			
			while($file=readdir($sc))
			{	
				if($file!='.' && $file!='..')
				{
					$filedata=pathinfo($file);
					if(in_array($filedata['extension'], $pExt))
					{
					$img=$filedata['basename'];
					
					}
					
				}
			}
			echo"<tr><td></td><td >".$row['msg']."<br><br><br><br><a href='User_Data/$x/trash/$too/$zx1/$img'><img src='User_Data/$x/trash/$too/$zx1/$img' width='100' height='100px'/></a></td></tr>";

			echo"<tr><td></td><td></td><td style='font-size:13px; align='right'><u>".$row['tdate']."--".$row['ttime']."</u></td></tr></table></div>";
			
						
	
	if(isset($_POST['delete']))
	{
	
	
	$del3=mysqli_connect("localhost","root","","trash");
	$del4="Delete from $x WHERE uid='$uid'";
	
	if(mysqli_query($del3,$del4))
	
	{
		$err="Message Deleted";
	}

}

if(isset($_POST['save']))
	{
	
	
  
   	$del1=mysqli_connect("localhost","root","","draft");
	$del2="INSERT INTO $x(ttime,tdate,too,cc,bbc,sub,msg,tm) VALUES ('$tm1','$dt','$too','-','-','$sub','$msg','$zx')";
	mkdir("User_Data/$x/draft/$too/");
		 mkdir("User_Data/$x/draft/$too/$zx/");
		 	 copy("User_Data/$x/trash/$too/$zx1/$img","User_Data/$x/draft/$too/$zx/$img");

	
	if(mysqli_query($del1,$del2))
	{
	$err="Message Save";
	}
	
	
}
echo"<div align='center'  style='background-color:  #FFF; margin-top:0px; opacity:0.7;'>";

			 echo'<br><form method="POST">';
echo "$err<br>	";
echo'<input type="submit" name="delete" value="Delete"/>';
echo'<input type="submit" name="save" value="Save"/>';

echo "<br><br></div>";
			
			

			
			
			}
			}

			}
	}
	

		
}
?>

 </td>
 
 
 

  </tr>
 
  
</table>

</body>
</html>