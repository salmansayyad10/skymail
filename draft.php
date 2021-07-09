
<h2 style="background-color:#09F; text-align:center; font-size:20px; height:25px; margin-bottom:0px; margin-top:-3px; opacity:0.8">Draft</h2><?php

$u=$_SESSION['user'];
	
$x1=mysqli_connect("localhost","root","","draft");
$z="SELECT * FROM $u ORDER BY uid DESC";
$result=mysqli_query($x1,$z);
echo "<table align='left' cellspacing='5' style='background-color: #FFF; opacity:0.7;'>";
echo"<th width='200' align='center'>To</th>";
echo"<th width='200' align='center'>CC</th>";
echo"<th width='200' align='center'>BBC</th>";
echo"<th width='200' align='center'>Subject</th><th width='100' align='center'>Attachments</th>";
echo"</th><th width='200' align='center'>Time</th><th width='200' align='center'>Date</th>";
echo"</tr>";


while($row=mysqli_fetch_array($result))
{
$uid=$row['uid'];
$too=$row['too'];
 $cc=$row['cc'];
$bbc=$row['bbc'];
$ttime=$row['ttime'];
$tdate=$row['tdate'];
$code=$row['tm'];
  $sub=$row['sub'];
  echo"<tr align='center'>";
 echo"<td>";
  echo "<a href='home.php?dr=$uid'>$too</a>";
  echo"</td>";
  
  echo"<td>";
  echo "<a href='home.php?dr=$uid'>$cc</a>";
  echo"</td>";
  
  echo"<td>";
  echo "<a href='home.php?dr=$uid'>$bbc</a>";
  echo"</td>";
   echo"<td>";
  echo "<a href='home.php?dr=$uid'>$sub</a>";
  echo"</td>";
    
	echo"<td>";
	 error_reporting(0);
$pExt=array('jpg','png','jpeg','bmp','gif');
$sc=opendir("User_Data/$u/draft/$too/$code");
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

    echo "<img src='User_Data/$u/draft/$too/$code/$img' width='80' height='50px'/>  ";
   echo"</td>";

	
  echo"<td>";
  echo "<a href='home.php?dr=$uid'>$ttime</a>";
  echo"</td>";

  
  echo"<td>";
  echo "<a href='home.php?dr=$uid'>$tdate</a>";
  echo"</td>  </tr>";
  
 }


echo "</table>";
?>

