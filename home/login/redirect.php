<?php
session_start();
if($_SESSION['who']=='STAFF')
{

	
echo '<html>
  <head>
    <meta charset="utf-8">
    <title>Animation Text</title>
    <link rel="stylesheet" href="style_1.css">
	<meta http-equiv="refresh" content="3;URL=http://localhost/Takeoff/home/admin/admin.php">
  </head>
  
  <body>

<div class="container">
  <span class="text1">You logged in as</span>
  <span class="text2" ><b>STAFF</b></span>
	
</div>



  </body>
</html>
';
}
else
{
echo '<html>
  <head>
    <meta charset="utf-8">
    <title>Animation Text</title>
    <link rel="stylesheet" href="style_1.css">
	<meta http-equiv="refresh" content="4;URL=http://localhost/Takeoff/home/index.php">
  </head>
  
  <body>

<div class="container">
  <span class="text1"> WELCOME TO </span>
  <span class="text2" ><b>#TAKEOFF AIRLINES</b></span>
	
</div>



  </body>
</html>
<?php
';
}
?>