<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<?php
session_start();
$x=$_SESSION['user'];
?>
<title><?php  echo $x;?></title>
<link rel="stylesheet" href="css/style2.css">
</head>

<body style="background-image:url('theme/<?php
		@$conTheme=$_REQUEST['thm'];
		if($conTheme)
		{
			$fo=fopen("User_Data/$x/theme","w");
			fwrite($fo,$conTheme);
		}
		
		@$f=fopen("User_Data/$x/theme","r");
		@$fr=fread($f, filesize("User_Data/$x/theme"));
		echo $fr;
		?>');
">
		


<table>
<td>
<tr align="center"  valign="top" style=" width:100px; FONT-FAMILY:Arial Black;>


<a href="home.php">Home</a>

	
	<a href="home.php?option=theme">Change_Theams</a>	
	<a href="home.php?option=settings">Settings</a>
		<a href="logout.php"style="color:#FF0000">Sign_out</a>
		<br/></h1><hr>	
	
	
  <table style=" border: groove; border-color:#000000;color:#ffffff; width:auto; height:auto; margin: 2px 2px 2px 2px;">
	 <tr>
	
	 <td align="center"  valign="top" style=" width:100px; FONT-FAMILY:Arial Black;">
	  
	<a href="home.php?option=compose">Compose</a><br/><br/>
	<a href="home.php?option=inbox">Inbox</a><br/><br/>
	<a href="home.php?option=sent">Send</a><br/><br/>
	<a href="home.php?option=draft">Draft</a><br/><br/>
	
	<a href="home.php?option=trash">Trash</a><br/>
		
	
	</td>
	<td valign="top" style="width:800px;">
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
	case 'settings';
	include('settings.php');
	break;
	
	}
	
	?>
 </td>
  </tr>
 
  </form>
</table>


</body>
</html>
