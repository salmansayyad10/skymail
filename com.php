
<?php
$com=$_POST['x'];
$u=$_SESSION['user'];
$x=mysqli_connect("localhost","root","","inbox");
$z="SELECT * FROM $u where uid='$com'";
if($result=mysqli_query($x,$z))
{
if(mysqli_num_rows($result)>0)
{
echo"<table>";
echo"</tr>";
echo"<th></th>";
echo"<td></td>";
echo"<th>to</th>";
echo"<th>sub</th>";
echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td></td>";
echo"<td>".$row['uid']."</td>";
echo"<td></td>";
echo"<td>".$row['too']."</td>";
echo"<td>".$row['msg']."</td>";
echo"</tr>";
}
echo"</table>";
}
}
?>


