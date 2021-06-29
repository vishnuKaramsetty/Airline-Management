<?php

session_start();

if(isset($_POST['who']))
{
	if($_POST['who']=='STAFF')
	{
		$_SESSION['who']=$_POST['who'];
		header("Location:http://localhost/Takeoff/home/login/login4.php");
	}
	else
	{
		if($_POST['who']=='CUSTOMER')
		{
			$_SESSION['who']=$_POST['who'];
			header("Location:http://localhost/Takeoff/home/login/login.php");
		}
		else
		{
			header("Location:http://localhost/Takeoff/home/main/create_account.php");
		}
	}
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Animation Text</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
  button{margin:10px;}

  .ert{
			  text-align: center;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 100%;
  }
  </style>
  <body>

<div class="container">
  <span class="text1">#TAKEOFF</span>
  <span class="text2" ><b>AIRLINES</b></span>
	
</div>
<div class="ert">
<form action="#" method="post">
<span style="color:white;font-family:courier new;font-size:20px;">WHO ARE YOU ?????</span><br><br>
<input type="submit" style="background:#aaff80;border:0px solid white;border-radius:8px;font-size:14px;padding:20px;cursor:pointer;outline:none;" name="who" value="STAFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" style="background:#aaff80;border:0px solid white;border-radius:8px;padding:20px;font-size:14px;cursor:pointer;outline:none;" name="who" value="CUSTOMER">
<br><br><span style="color:white;font-family:courier new;font-size:20px;">Become a Family</span><br><br>
<input type="submit" style="background:#aaff80;border:0px solid white;border-radius:8px;padding:20px;font-size:14px;outline:none;cursor:pointer;" name="who" value="MEMBER">
</form>
</div>


  </body>
</html>
