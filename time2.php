<h2 style="background-color:#09F; text-align:center; font-size:20px; height:27px; margin-bottom:0px; margin-top:-3px; opacity:0.8">
Sign out</h2>


<?php
$u=$_SESSION['user'];


$x2=mysqli_connect("localhost","root","","time2");

$z="SELECT * FROM $u";



$result2=mysqli_query($x2,$z);

echo"<div style='margin-left:460px; margin-right:480px; background-color: #FFF; opacity:0.7;'>";
echo "<table align='center' style='background-color: #FFF; opacity:0.7;'>";
 echo"<tr>";
	while($row1=mysqli_fetch_array($result2))
	{
echo "<br>".$row1['lodate']."&nbsp;&nbsp;".$row1['lotime']."<br>";
		
			
		
		

		
	}
	echo"</tr></table>";
echo"</div>";
	
?>

