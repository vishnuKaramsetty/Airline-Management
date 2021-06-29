<html>
<head>
    <title> Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
    <body>
    <div class="login-box d">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="login3.php" autocomplete="off" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
            <a href="#din">Forget Password</a> 
			<?php
			if(!empty($_GET['message'])){
				$message=$_GET['message'];
				echo $message;
			}
			
			?>
				
            </form>
        
        
        </div>
    
    </body>
	
</html>