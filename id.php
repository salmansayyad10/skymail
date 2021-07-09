<html>
<body>
<?php

$a=$_SESSION['user'];
$o=$_SESSION['us'];

$x=mysqli_connect("localhost","root","","inbox");
$z="SELECT * FROM $a where uid='$o'";

if($result=mysqli_query($x,$z))
{
if(mysqli_num_rows($result)>0)
echo "<table>";
{
while($row=mysqli_fetch_array($result))
{
echo "hello";
echo "<tr>"."<td>".$row['msg']."@smail.com</td></tr>";
}
echo "</table>";
}
}

?>
</body>
</html>