
<h2 style="background-color:#09F; text-align:center; font-size:20px; height:25px; margin-bottom:0px; margin-top:-3px; opacity:0.8">Inbox</h2>



<?php

$u=$_SESSION['user'];	
$x1=mysqli_connect("localhost","root","","inbox");
$z="SELECT * FROM $u  ORDER BY uid DESC";
$result=mysqli_query($x1,$z);


echo "<table align='left' cellspacing='5' style='background-color: #FFF; opacity:0.7;' >";

echo "<tr><th width='200' align='center'>Sender</th><th width='400' align='center'>Subject</th><th width='100' align='center'>Attachments</th><th width='200' align='center'>Time</th><th width='200' align='center'>Date</th></tr>";


while($row=mysqli_fetch_array($result))
{
$uid=$row['uid'];
$too=$row['too'];
$ttime=$row['ttime'];
$tdate=$row['tdate'];
$code=$row['tm'];


  $sub=$row['sub'];
  echo"<tr align='center' >";
  
  echo"<td>";
  echo "<a href='home.php?in=$uid'>$too</a>";
  echo"</td>";
  
   echo"<td>";
  echo "<a href='home.php?in=$uid'>$sub</a>";
  echo"</td>";
     echo"<td>";
	 error_reporting(0);
$pExt=array('jpg','png','jpeg','bmp','gif');
$sc=opendir("User_Data/$u/inbox/$too/$code");
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

    echo "<img src='User_Data/$u/inbox/$too/$code/$img' width='80' height='50px'/>  ";
   echo"</td>";
  echo"<td>";
  echo "<a href='home.php?in=$uid'>$ttime</a>";
  echo"</td>";

  echo"<td>";
  echo "<a href='home.php?in=$uid'>$tdate</a>";
  echo"</td>  </tr>";
 
 }
echo"</table>"; 
?>



