
<h2 style="background-color:#09F; text-align:center; font-size:20px; height:27px; margin-bottom:0px; margin-top:-3px; opacity:0.8">
Sign In</h2>


<?php
$u=$_SESSION['user'];
$x1=mysqli_connect("localhost","root","","time");



$z="SELECT * FROM $u";

$result1=mysqli_query($x1,$z);
echo"<div style='margin-left:460px; margin-right:480px; background-color: #FFF; opacity:0.7;'>";


echo "<table>";
 echo"<tr>";
	while($row1=mysqli_fetch_array($result1))
	{
echo "<br>".$row1['ldate']."&nbsp;&nbsp;".$row1['ltime']."<br>";
		
			
		
		

		
	}
	echo"</tr></table>";
	echo"</div>";
	
?>

