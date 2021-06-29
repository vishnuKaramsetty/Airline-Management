<?php
session_start(); 
			$conn =new mysqli('localhost','root','','airline');
			$var1=$_POST['username'];
			$var2=$_POST['password'];
			$var143=$_SESSION['who'];
			$sql ="select * from user_details where user_id='$var1' and pswd='$var2' and user='$var143'";
			$res=$conn->query($sql);
			$var10=0;

while($row=mysqli_fetch_array($res))
			{
				$_SESSION['username']=$var1;
				$var10=1;
				header("Location: http://localhost/Takeoff/home/login/redirect.php");
				
			}
			
			$sql1 ="select * from user_details where user_id='$var1' and pswd!='$var2' and user='$var143'";
			$res1=$conn->query($sql1);
			$var101=0;
			while($row=mysqli_fetch_array($res1))
			{
				$var101=1;
				$var23=$row['hint'];
			
			header("Location:http://localhost/Takeoff/home/login/login.php?message=<br><br>Incorrect password hint :- $var23 ");
			}
			
			if($var10==0&&$var101==0)
			{
				
				header("Location:http://localhost/Takeoff/home/login/login.php#");
			}
	
			
			
			?>