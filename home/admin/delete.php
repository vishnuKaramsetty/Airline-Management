<?php
session_start();
if(isset($_POST['delete']))
{
	$fid=$_POST['fid'];
	$dcity=$_POST['dcity'];
	$acity=$_POST['acity'];
	$dday=$_POST['dday'];
	$dtime=$_POST['dtime'];
	$_SESSION['hi']='delete';
	$conn=new mysqli('localhost','root','','airline');
	$sql="delete from  travels where flight_id='$fid' and departure_city='$dcity' and arrival_city='$acity' and  doj='$dday' and  departure_time='$dtime'";
	$res=$conn->query($sql);
	header("Location:http://localhost/Takeoff/home/admin/message.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Booking Form HTML Template</title>


	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">


	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


	<link type="text/css" rel="stylesheet" href="css/style.css" />

	

</head>
<style>
 .left{
float:left;
width:32%;
}

.right{
float:right;
padding-left:300px;
position:relative;
}




#we
{
  float:left;
  background:#f6dbc8;
  margin:6px;
  width:130px;
  padding:8px;
  font-weight:bold;
  border:1px solid #f6dbc8;
  border-radius:3px;
  font-family:GRACETIANS;
  outline:none;
}

#we:hover
{
cursor:pointer;
transform:scale(1.05);
background:white;
}


.clearfix:after{
	clear:both;
	content:"";
	display:block;
}

#bomma
{
height:60px;
width:80px;
border:1px solid #986852;
border-radius:90px;
position:absolute;
left:1%;

}


.left
{
background:red;
}

.right
{

width:43%;
}

#log:hover
{

color:green;

}
#sep
{
color:black;
}
button
{
	outline:none;
}
.din{
	background:#6699ff;
	display:inline;
	padding:10px;
	position:relative;
	left:25%;
}

.din1{
	background:#6699ff;
	display:inline;
	padding:10px;
	position:relative;
	left:48%;
}

.io
{
position:relative;
left:20%;	
}



.hi
{
	position:relative;
	left:40%;
	width:200px;
}
</style>


<body>

	<div id="booking" class="section">

	<div class="header1">
<div class="combine clearfix">
<div class="left">
<img src="pep.png" id="bomma">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="courier new" size="5px" color="white"><b>#T A K E OFF</b> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AIRLINES<br></font>

</div>

<div class="right" >

<form action="https://www.facebook.com">
<a id="sep" href="http://localhost/Takeoff/home/admin/admin.php"><input id="we" type="button" value="Home"></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a id="log" href="http://localhost/takeoff/home/1.php"><i class="fa fa-sign-out fa-2x" style="margin-top:10px" aria-hidden="true" ></i></a>
</form>

</div>
</div>
</div>

		<div class="section-center">
		<br>
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="#" method="post">
							<input type="text" name="fid" align="center" placeholder="FLIGHT ID" style="border:1px solid black;border-radius:15px;padding:15px;outline:none;width:300px;position:relative;left:33%;"><br><br>
						    <input type="text" name="dcity" align="center" placeholder="Departure City" style="border:1px solid black;border-radius:15px;padding:15px;width:400px;position:relative;left:10%;outline:none;margin:10px;">
							<input type="text" name="acity" align="center" placeholder="Arrival City" style="border:1px solid black;border-radius:15px;padding:15px;width:400px;position:relative;left:10%;outline:none;"><br><br>
							<div class="din">Departure DATE</div>
							<div class="din1">Departure TIME</div><br>
							<br><input type="date" name="dday" align="center" placeholder="Arrival City" style="border:1px solid black;border-radius:15px;padding:15px;width:400px;position:relative;left:10%;margin:10px;outline:none;">
						
							<input type="time" name="dtime" align="center" placeholder="Arrival City" style="border:1px solid black;border-radius:15px;padding:15px;width:400px;position:relative;left:10%;outline:none;">
							
							<br><br>
									<div class="btn hi">
										<button name="delete" class="submit-btn" name="show_flight" value="1">Delete flight</button>
									</div>
								
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>