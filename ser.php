


<form method="post">
<input type="text" name="a" placeholder="Mail ID" style="opacity:0.8;" />
<input type="submit" name="search" value="Search mail" /></form>



<?php


$ser=$_POST['a'];

$u=$_SESSION['user'];	
$x1=mysqli_connect("localhost","root","","inbox");
$x2=mysqli_connect("localhost","root","","send");
$x3=mysqli_connect("localhost","root","","fail");
$x4=mysqli_connect("localhost","root","","draft");
$x5=mysqli_connect("localhost","root","","trash");

$z="SELECT * FROM $u  WHERE too='$ser'";
$result=mysqli_query($x1,$z);
$result2=mysqli_query($x2,$z);
$result3=mysqli_query($x3,$z);
$result4=mysqli_query($x4,$z);
$result5=mysqli_query($x5,$z);

echo"<hr>";
echo "<table align='left' cellspacing='5' >";
echo "<tr style='background-color: #09F; opacity:0.7;'><th width='200' align='center' ><font color='#000000'>User</font></th><th width='200' align='center' ><font color='#000000'>Place</font></th><th width='400' align='center'><font color='#000000'>Subject</font></th><th width='200' align='center'><font color='#000000'>Time</font></th><th width='200' align='center'><font color='#000000'>Date</font></th></tr>";

while($row=mysqli_fetch_array($result))
{
$uid=$row['uid'];
$too=$row['too'];
$ttime=$row['ttime'];
$tdate=$row['tdate'];


  $sub=$row['sub'];
  echo"<tr align='center' style='background-color: #FFF; opacity:0.7;'>";
  
  echo"<td>";
  echo "<a href='home.php?in=$uid'>$too</a>";
  echo"</td>";

  echo"<td>";
  echo "<a href='home.php?option=inbox'>Inbox</a>";
  echo"</td>";
  
   echo"<td>";
  echo "<a href='home.php?in=$uid'>$sub</a>";
  echo"</td>";
    
    
  echo"<td>";
  echo "<a href='home.php?in=$uid'>$ttime</a>";
  echo"</td>";

  
  echo"<td>";
  echo "<a href='home.php?in=$uid'>$tdate</a>";
  echo"</td>  </tr>";
 
 }


while($row=mysqli_fetch_array($result2))
{
$uid=$row['uid'];
$too=$row['too'];
$ttime=$row['ttime'];
$tdate=$row['tdate'];


  $sub=$row['sub'];
  echo"<tr align='center' style='background-color: #FFF; opacity:0.7;>";
    echo"<td>";
  echo "<a href='home.php?sn=$uid'></a>";
  echo"</td>";

  echo"<td>";
  echo "<a href='home.php?sn=$uid'>$too</a>";
  echo"</td>";
 
  echo"<td>";
  echo "<a href='home.php?option=send'>Send</a>";
  echo"</td>";
  
   echo"<td>";
  echo "<a href='home.php?sn=$uid'>$sub</a>";
  echo"</td>";
    
  echo"<td>";
  echo "<a href='home.php?sn=$uid'>$ttime</a>";
  echo"</td>";

  
  echo"<td>";
  echo "<a href='home.php?sn=$uid'>$tdate</a>";
  echo"</td>  </tr>";
 
 }

while($row=mysqli_fetch_array($result3))
{
$uid=$row['uid'];
$too=$row['too'];
$ttime=$row['ttime'];
$tdate=$row['tdate'];


  $sub=$row['sub'];
  echo"<tr align='center' style='background-color: #FFF; opacity:0.7;	 >";
  
  echo"<td>";
  echo "<a href='home.php?fa=$uid'></a>";
  echo"</td>";
  echo"<td>";
  echo "<a href='home.php?fa=$uid'>$too</a>";
  echo"</td>";
  
   echo"<td>";
  echo "<a href='home.php?option=fail'>Fail</a>";
  echo"</td>";
  
   echo"<td>";
  echo "<a href='home.php?fa=$uid'>$sub</a>";
  echo"</td>";
    
  echo"<td>";
  echo "<a href='home.php?fa=$uid'>$ttime</a>";
  echo"</td>";

  
  echo"<td>";
  echo "<a href='home.php?fa=$uid'>$tdate</a>";
  echo"</td>  </tr>";
 
 }
 
 while($row=mysqli_fetch_array($result4))
{
$uid=$row['uid'];
$too=$row['too'];
$ttime=$row['ttime'];
$tdate=$row['tdate'];


  $sub=$row['sub'];
  echo"<tr align='center'  style='background-color: #FFF; opacity:0.7;>";
  
    echo"<td>";
  echo "<a href='home.php?dr=$uid'></a>";
  echo"</td>";

  echo"<td>";
  echo "<a href='home.php?dr=$uid'>$too</a>";
  echo"</td>";
  
  echo"<td>";
  echo "<a href='home.php?option=draft'>Draft</a>";
  echo"</td>";
  
   echo"<td>";
  echo "<a href='home.php?dr=$uid'>$sub</a>";
  echo"</td>";
    
  echo"<td>";
  echo "<a href='home.php?dr=$uid'>$ttime</a>";
  echo"</td>";

  
  echo"<td>";
  echo "<a href='home.php?dr=$uid'>$tdate</a>";
  echo"</td>  </tr>";
 
 }
 
 while($row=mysqli_fetch_array($result5))
{
$uid=$row['uid'];
$too=$row['too'];
$ttime=$row['ttime'];
$tdate=$row['tdate'];


  $sub=$row['sub'];
  echo"<tr align='center' style='background-color: #FFF; opacity:0.7;>";
  echo"<td>";
  echo "<a href='home.php?tr=$uid'></a>";
  echo"</td>";
  
  echo"<td>";
  echo "<a href='home.php?tr=$uid'>$too</a>";
  echo"</td>";

  echo"<td>";
  echo "<a href='home.php?option=trash'>Trash</a>";
  echo"</td>";

  
   echo"<td>";
  echo "<a href='home.php?tr=$uid'>$sub</a>";
  echo"</td>";


    
  echo"<td>";
  echo "<a href='home.php?tr=$uid'>$ttime</a>";
  echo"</td>";

  
  echo"<td>";
  echo "<a href='home.php?tr=$uid'>$tdate</a>";
  echo"</td>  </tr>";
 
 }

echo"</table>"; 



?>