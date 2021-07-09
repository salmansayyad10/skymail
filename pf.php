<h2 style="background-color:#09F; text-align:center; font-size:20px; height:25px; margin-bottom:0px; margin-top:-3px; opacity:0.8">My Profile</h2>
<?php

	echo "<div style='background-color: #FFF; opacity:0.7;'>";
$u=$_SESSION['user'];
$x=mysqli_connect("localhost","root","","regis");
$x1=mysqli_connect("localhost","root","","time");
$z="SELECT * FROM $u";
$result=mysqli_query($x,$z);
$result1=mysqli_query($x1,$z);


echo "<br><br>";


echo "<table  style=  'margin-left:80px;'>";
 
while($row=mysqli_fetch_array($result))
	{

		echo "<tr><td>Name :-</td>"."<td>".$row['lname']."  ".$row['fname']."</td><td>"."<a href='home.php?option=cnm'><u>Edit</u></a></td></tr>";
			
		
		echo "<tr><td>Mail ID :-</td>"."<td>".$row['email']."@smail.com</td><td>"."<a href='home.php?option=user'><u>Edit</u></a></td></tr>";	
		
		echo "<tr><td>Password :-</td>"."<td>".$row['pass']."</td><td>"."<a href='home.php?option=pass'><u>Edit</u></a></td></tr>";
		
		echo "<tr><td>Mobile number :-</td> "."<td>".$row['mob']."</td><td>"."<a href='home.php?option=cmn'><u>Edit</u></a></td></tr>";
		
		echo "<tr><td>Date Of Birth :-</td>"."<td>".$row['dob']."</td><td>"."<a href='home.php?option=cdob'><u>Edit</u></a></td></tr>";
		
		echo "<tr><td>Gender :-</td>"."<td>".$row['gender']."</td>";
		echo "<tr><td>Sign in Date :-</td>"."<td>".$row['tdate']." | ".$row['ttime']."</td>";
		
		

		
	}
echo "</table><br><br>";

	echo "<a href='home.php?option=time1' style='margin-left:110px;''><u>Click here </u></a> for Sign in Details";
		echo "<br><br><a href='home.php?option=time2' style='margin-left:110px;''><u>Click here </u></a> for Sign out Details";
		echo "<br><br><br><br>";
		echo "</div>";
	
?>

