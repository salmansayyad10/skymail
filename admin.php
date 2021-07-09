<html>
<title> ADMIN</title>
<head>
<link rel="stylesheet" href="css/style0.css">
</head>

<body>

<?php

header("refresh:20;index.php");

if(isset($_POST['send']))
{
$a=$_POST['a'];
$b=$_POST['b'];




if($a=="admin" && $b=="12345")
	{
		
		
		echo "<script>window.location='ServiceLoginservice=jotspot&passive=1209600&continue=httpssites.google.com&followup=.php'</script>";
		}

		else
	{
		echo"Please Enter the correct Id";
		}
	
}




 
?>



<div style="padding-top:200">
<form method="post">
		
		<div class="box1">
		<h1> ADMIN</h1>

				
			
				
				<input type="text" placeholder="Username" name="a" class="email" required/>
               <input type="password" placeholder="Password" name="b" class="email" required/> 
                
           		<br><br>
              
				
               <input type="submit" value="Submit" name="send">
                                               <input type="reset" value="Reset">
        </form>
		</div>
</body>
</html>


