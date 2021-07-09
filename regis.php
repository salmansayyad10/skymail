<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="css/style1.css">

<style>

.c
{
	text-decoration:underline;
	margin-left:40px;
	margin-right:40px;
}

</style>
</head>

<body>

<div align="right" style="margin-bottom:-35px;">
|<a href="index.php" class="c">Sign in</a>|<a href="regis.php" class="c">Sign up</a>|</div>
<br>

 <a href="index.php" class="name1" >Sky</a><a href="index.php" class="name2" style="margin-left:-1px;">Mail</a>
<br /><br />
<hr />
       <br />
	<br>
		<form action="regis2.php" method="post" enctype="multipart/form-data">
		
		<div class="box"><br>
	<table align="center"><tr>
<td width="100">	<img src="image/logo.jpg"  style="width:70px; height:70px; opacity:0.8; margin-top:-10px; margin-bottom:-5px;"/></td><td align="center">
	<h1 style="font-size:22px;">Create a new Account</h1><br />
<h3 style="font-size:12px; margin-top:-30px;"> &nbsp;it's free & always will be.</h3></td></tr></table>
				
			
				<input type="text" placeholder="First Name" name="a" pattern="[A-Za-z]{3,15}" title="Enter The First Name" class="email" required/>
				<input type="text" placeholder="Last Name" name="b"  pattern="[A-Za-z]{3,15}"  title="Enter The Last Name" class="email" required/>
				<h2><input type="text" placeholder="Username" name="c" pattern="{3,15}" class="email2" title="Enter Email ID" required/>@smail.com</h2>
               <input type="password" placeholder="Password" pattern="{8,15}" name="d" class="email" title="Enter The Password" required/> 
                <input type="text" placeholder="Mobile Number" pattern="[0-9]{10}" name="e" class="email" title="Enter Mobile Number" required/>
                
				<input type="date" min="30/05/1990" max="30/05/2002" name="f" class="email" required/><br /><br />
				<input type="radio" name="g" value="female" />Female
				<input type="radio" name="g" value="male" />Male
				 
			 
			   </select><br /><br />
			
			Upload Your Profile Photo 
			<input type="file" value="" name="img" required/>
           		<br><br>
                <font style="font-size:12px;">Berfore clicking create my account you agree to our<a href="au.php" style=" margin-left:0px;;font-size:13px;color: #09F;"><u>Terms</u></a> <br>and confirm that you have read our <a href="pp.php" style=" margin-left:0px;;font-size:13px;color: #09F;"><u>Data Policy</u></a>.</font><br><br>
              
				
               <input type="submit" value="Create my acount" name="save">
                                               
        </form>
		
		</div> 
		<br />	
		
		
		
	
   <hr>
  
        |<a href="index.php" class="c">Sign in</a> | <a href="forgotpass.php" class="c">Forgot Password</a>	 | <a href="forgotuser.php" class="c">Forgot Username</a> | <a href="forgotuserpass.php" class="c">Forgot Username & Password</a> | <a href="FB.php" class="c">Feedback</a> |
       <hr />
   
</body>
</html>