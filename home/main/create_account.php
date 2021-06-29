<?php
if(isset($_POST['casub']))
{
	$var1=$_POST['uname'];
	$var2=$_POST['password'];
	$var3=$_POST['hint'];
	$var4=$_POST['repass'];
	$who='CUSTOMER';
	if($var4==$var2)
	{
		$conn= new mysqli('localhost','root','','airline');
		$sql="select * from user_details where user_id='$var1'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==1)
		{
			echo "hi";
			echo "<script type='text/javascript'>alert('A user exist with the username');</script>";
		}
		else
		{
			$sql_1="insert into user_details values('$var1','$var2','$var3','$who')";
			$res=$conn->query($sql_1);
			header("Location:http://localhost/Takeoff/home/main/main_page.php");
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('Re-type password dosen\'t match');</script>";
	}
}
?>
<html>
<head>
</head>
<style>
body{
margin:0px;
padding:0px;
background:#004466;
}
.create{
position:absolute;
top:5%;
left:28%;
height:90px;
width:550px;
background:#004466;;
padding-left:60px;
padding-top:10px;
border:3px solid #efefef;
border-radius:7px;
}
.create a{
float:right;
text-decoration:none;
color:red;
padding-right:30px;
font-size:40px;
}
.create a:hover{
transform:scale(1.15);

}
input[type=text]{
width:170px;
padding:8px;
border:3px solid #efefef;
border-radius:6px;
text-align:center;
}
input[type=password]{
width:170px;
padding:8px;
border:3px solid #efefef;
border-radius:6px;
}
input[type=submit]
{
	padding:13px;
	border:0px solid #efefef;
	border-radius:9px;
	background:white;
	font-size:15px;
	cursor:pointer;
	position:relative;
	left:30%;
}
.create font{
font-size:16px;
}
.create h2{
padding-left:60px;
}
.er font{
font-size:35px;
}
input[type=submit]:hover{
transform:scale(1.15);
background:#3498db;
}

</style>
<body>
<div class="create">
<form action="#" method="post">
<a href="main_page.php"><font face="Tahoma">&#10060;</font></a>
<div class="er">
<h2><font  face="Brush Wedco" size="98px" color="red">#TAKEOFF AIRLNES</font></h2><br><br><br>
</div>
<font  face="Tahoma" color="white">FIRST NAME</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="fname" required><br><br><br>


<font  face="Tahoma" color="white">LAST NAME</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="lname" required><br><br><br>
<font  face="Tahoma" color="white">USER NAME</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="uname" required><br><br><br>
<font  face="Tahoma" color="white">PASSWORD</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="password" required><br><br><br>
<font  face="Tahoma" color="white">Re-type PASSWORD</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="repass" required><br><br><br>
<font  face="Tahoma" color="white">HINT</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="hint" required><br><br><br>
<input  type="Submit" value="Submit" name="casub">
</form>

</div>

</body>
</html>


