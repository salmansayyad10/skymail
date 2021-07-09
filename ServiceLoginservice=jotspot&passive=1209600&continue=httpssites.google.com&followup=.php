

</center>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>SkyMail.com</title>

<style>
body{font-family:'Open Sans',sans-serif;
  background: url(theme/43.jpg);
  background-attachment:fixed;
  margin:0 auto 0 auto;  
  width:100%;
  color: #000;
  font-size:16px;
  text-align:center;
  margin:2px 2px 2px 2px;}

input[type=submit]:hover{background:#2CC06B;} 
.z{background: #FF0000;
                    width:170px;
                    padding-top:3px;
				    padding-bottom:3px;
          		    color:white;
     			    border-radius:4px;
  				    border:#FF0000 1px solid;
    			    margin-left:16px;
  				    font-weight:800;	
  				    font-size:0.8em;}

.x{background:#09F;
                    width:80px;
                    padding-top:5px;
				    padding-bottom:5px;
          		    color:white;
     			    border-radius:4px;
  				    border:#27ae60 1px solid;
    			    margin-left:16px;
  				    font-weight:800;	
  				    font-size:0.8em;}
					
					.name1{
font-size:40px; font-family: inherit; color: #FFF; font-weight:bold;}
.name2{
font-size:40px; font-family: inherit; color: #000;0px;font-weight:bold;}

</style>





 



<?php



if(isset($_POST['send2']))
{

$link = mysqli_connect("localhost", "root", "");
 
$sql1 = "CREATE DATABASE draft";
$sql2 = "CREATE DATABASE fail";
$sql3 = "CREATE DATABASE feed";
$sql4 = "CREATE DATABASE inbox";
$sql5 = "CREATE DATABASE regis";
$sql6 = "CREATE DATABASE send";
$sql7 = "CREATE DATABASE time";
$sql8 = "CREATE DATABASE time2";
$sql9 = "CREATE DATABASE user";
$sql10 = "CREATE DATABASE trash";




if(mysqli_query($link, $sql9))
{
	if(mysqli_query($link, $sql2))
	{
		if(mysqli_query($link, $sql3))
		{
			if(mysqli_query($link, $sql4))
			{
				if(mysqli_query($link, $sql5))
				{
					if(mysqli_query($link, $sql6))
					{
						if(mysqli_query($link, $sql7))
						{
							if(mysqli_query($link, $sql8))
							{
								if(mysqli_query($link, $sql1))
								{
									if(mysqli_query($link, $sql10))
										{
										$sqlx=mysqli_connect("localhost","root","","user");
										$sqlx1=mysqli_connect("localhost","root","","feed");
										$td3="CREATE TABLE db(uid int(100) NOT NULL AUTO_INCREMENT,fname varchar(255),lname varchar(255),email varchar(255),mno varchar(12),red varchar(255),des varchar(255),PRIMARY KEY (uid))";
										
										mysqli_query($sqlx1,$td3);
										$td2="CREATE TABLE un (uid int(100) NOT NULL AUTO_INCREMENT,un1 varchar(255),mn varchar(255), PRIMARY KEY (uid))";
										
										mkdir("User_Data");
  
 									 if(mysqli_query($sqlx,$td2))
										{
                                         echo "Thank You Admin.. !!<br>";
										 echo "!!.. Sky Mail is ready to use ..!!<br>";
										 echo "Enjoy :)<br>";
										 }
										}
								}
							}
						}
					}
				}
			}
		}
	}
}




}




else
if(isset($_POST['send']))
{

echo "<script>window.location='index.php'</script>";

}



?>


</head>
<body>

<div align="left"><?php echo date("d/m/Y"); 

        echo "     ".date("h:i:sa"); ?></div>
       
        <font class="name1">Speed</font><font class="name2" style="margin-left:-1px;">Mail</font>
<hr>

	  <br><br><br>
	
    
    <br><br><br>
<form method="post">
		
		<div class="box1">
		
	

		
			
				<br>
				
               
                
           		<br>
              	<?php echo @$err;?>
				
               <input type="submit" value="INSTALL SKY MAIL" name="send2"  class="z" /> 
			   <input type="submit" value="BACK" name="send"  class="x" /> 
                
        </form>
        <br>
                 </div>
         
</body>
</html>
