<h2 style="background-color:#09F; text-align:center; font-size:20px; height:25px; margin-bottom:0px; margin-top:-3px; opacity:0.8">Sent Mail</h2>

<?php


$u=$_SESSION['user'];

$x=mysqli_connect("localhost","root","","send");
$z="SELECT * FROM $u ORDER BY uid DESC";

if($result=mysqli_query($x,$z))
{
if(mysqli_num_rows($result)>0)
{
echo "<table align='left' cellspacing='5' style='background-color: #FFF; opacity:0.7;'>";
echo"<tr>";

echo"<th width='200' align='center'>To</th>";
echo"<th width='200' align='center'>CC</th>";
echo"<th width='200' align='center'>BBC</th>";
echo"<th width='200' align='center'>Subject</th><th width='100' align='center'>Attachments</th>";
echo"<th width='200' align='center'>Time</th><th width='200' align='center'>Date</th>";
echo"</tr>";

while($row=mysqli_fetch_array($result))
{
$uid=$row['uid'];
$too=$row['too'];
$cc=$row['cc'];
$bbc=$row['bbc'];
$ttime=$row['ttime'];
$tdate=$row['tdate'];
$sub=$row['sub'];
$code=$row['tm'];
  
  echo"<tr align='center'>";
   echo"<td>";
  echo "<a href='home.php?sn=$uid'>$too</a>";
  echo"</td>";
  
  echo"<td>";
  echo "<a href='home.php?sn=$uid'>$cc</a>";
  echo"</td>";
  
  echo"<td>";
  echo "<a href='home.php?sn=$uid'>$bbc</a>";
  echo"</td>";
    echo"<td>";
  echo "<a href='home.php?sn=$uid'>$sub</a>";
  echo"</td>";
    
	echo"<td>";
	 error_reporting(0);
$pExt=array('jpg','png','jpeg','bmp','gif');
$sc=opendir("User_Data/$u/send/$too/$code");
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

    echo "<img src='User_Data/$u/send/$too/$code/$img' width='80' height='50px'/>  ";
   echo"</td>";

	
  echo"<td>";
  echo "<a href='home.php?sn=$uid'>$ttime</a>";
  echo"</td>";

  
  echo"<td>";
  echo "<a href='home.php?sn=$uid'>$tdate</a>";
  echo"</td>  </tr>";

  
 }
 

echo "</table>";
}}
?>

