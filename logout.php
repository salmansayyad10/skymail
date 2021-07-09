<?php
session_start();
$u=$_SESSION['user'];
$dt=date("d/m/Y"); 
$tm1=date("h:i:sa"); 		
$tmz1=mysqli_connect("localhost","root","","time2");

$tm2="INSERT INTO $u (lotime,lodate) VALUES ('$tm1','$dt')";	
		if(mysqli_query($tmz1,$tm2))
		{
	
session_start();
unset($_SESSION['user']);
header('location:index.php');

}

	
?>