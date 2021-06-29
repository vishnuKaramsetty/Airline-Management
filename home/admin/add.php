<?php
session_start();
if(isset($_POST['add']))
{
	$flight_id=$_POST['fid'];
	$departure_city=$_POST['dcity'];
	$arrival_city=$_POST['acity'];
	$doj=$_POST['dday'];
	$departure_time=$_POST['dtime'];
	$arrival_time=$_POST['atime'];
	$available_seats_eco=$_POST['eseats'];
	$available_seats_bus=$_POST['bseats'];
	$available_seats_first=$_POST['fseats'];


	$price_eco=$_POST['price_eco'];
	$price_business=$_POST['price_business'];
	$price_first=$_POST['price_first'];
	$filled_seats=0;
//	$class_Economy="class_Economy";
//	$class_Business='class_Business';
//	$class_First='class_First';



	$_SESSION['hi']='add';
	$var11=$_SESSION['sai'];
	$conn=new mysqli('localhost','root','','airline');
//	$sql="delete from  travels where flight_id='$fid' and departure_city='$dcity' and arrival_city='$acity' and  doj='$dday' and  departure_time='$dtime'";
//	$sql="insert into travels values('$flight_id','$departure_city','$arrival_city','$arrival_time','$departure_time','$doj','$available_seats_eco','Economy','$available_seats_bus','Business','$available_seats_first','First',0,'$price_eco','$price_business','$price_first')";
		$sql="INSERT INTO travels VALUES ('$flight_id','$departure_city','$arrival_city','$arrival_time','$departure_time','$doj','$available_seats_eco','Economy','$available_seats_bus','Business','$available_seats_first','First','$filled_seats','$price_eco','$price_business','$price_first')";
	$res=$conn->query($sql);
	$sq="insert into modifiees values('$var11','$flight_id')";
	$res=$conn->query($sq);
	//echo "hi";
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


	<title>Adding flight</title>


	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">


	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />



</head>
<style>
 .left{
float:left;
width:32%;
}

.right{
float:right;
padding-left:30px;

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

width:20%;
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

.din_1
{
	background:#6699ff;
	display:inline;
	padding:10px;
	position:relative;
	left:26%;
}

.din_2
{
	background:#ff4d88;
	display:inline;
	padding:10px;
	position:relative;
	left:41%;
}

.din_3
{
	background:#ff944d;
	display:inline;
	width:100px;
	padding-top:15px;
	padding-right:25px;
	padding-left:25px;
	padding-bottom:15px;
	position:relative;
	left:28%;

}

.io
{
position:relative;
left:20%;
}

.mov
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
#say
{
		padding-top:10px;
		background:#f6dbc8;
		border:0px solid #f6dbc8;
}
.c1{background:#339933;}
.c2{background:#8a8a5c;}
body{background-image:url("w.jpg");   background-size:fit;background-repeat: no-repeat;}
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

<a id="sep" href="http://localhost/Takeoff/home/admin/admin.php"><input id="we" type="button" value="Home"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<button id="say"  name="logout" value="1"><a  href="http://localhost/takeoff/home/1.php"><i class="fas fa-sign-out-alt fa-2x" style="margin-top:6px;color:black;" aria-hidden="true" ></i></a></button>


</div>
</div>

</div>

		<br><br>


			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="#" method="post">
							<input type="text" name="fid" required align="center" placeholder="FLIGHT ID" style="border:1px solid black;border-radius:15px;padding:15px;outline:none;width:300px;position:relative;left:33%;"><br><br>
						    <input type="text" name="dcity" required align="center" placeholder="Departure City" style="border:1px solid black;border-radius:15px;padding:15px;width:400px;position:relative;left:10%;outline:none;margin:10px;">
							<input type="text" name="acity" required align="center" placeholder="Arrival City" style="border:1px solid black;border-radius:15px;padding:15px;width:400px;position:relative;left:10%;outline:none;"><br><br>
							<div class="din">Departure DATE</div>
							<div class="din1">Departure TIME</div><br>
							<br><input type="date" name="dday" required align="center" placeholder="Arrival City" style="border:1px solid black;border-radius:15px;padding:15px;width:400px;position:relative;left:10%;margin:10px;outline:none;">

							<input type="time" name="dtime" align="center" required placeholder="Arrival City" style="border:1px solid black;border-radius:15px;padding:15px;width:400px;position:relative;left:10%;outline:none;"><br><br>
							<div class="din_1">Arrival TIME</div><br>
							<br>
							<input type="time" name="atime" align="center" required placeholder="Arrival City" style="border:1px solid black;border-radius:15px;padding:15px;width:400px;position:relative;left:10%;outline:none;"><br><br>
							<br>
							<div class="din_2">Available SEATS</div><br>
							<br><br>
							<div class="din_3">Economy</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="eseats" required align="center" style="border:1px solid black;border-radius:15px;padding:15px;outline:none;width:300px;position:relative;left:33%;"><br><br>
							<div class="din_3 c1">Business</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="bseats" required align="center"  style="border:1px solid black;border-radius:15px;padding:15px;outline:none;width:300px;position:relative;left:33%;"><br><br>
							<div class="din_3 c2">First class</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="fseats" required align="center"  style="border:1px solid black;border-radius:15px;padding:15px;outline:none;width:300px;position:relative;left:33%;"><br><br>





							<div class="din_3">Economy cost</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="price_eco" required align="center" style="border:1px solid black;border-radius:15px;padding:15px;outline:none;width:300px;position:relative;left:33%;"><br><br>
							<div class="din_3 c1">Business cost</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="price_business" required align="center"  style="border:1px solid black;border-radius:15px;padding:15px;outline:none;width:300px;position:relative;left:33%;"><br><br>
							<div class="din_3 c2">First class cost</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="price_first" required align="center"  style="border:1px solid black;border-radius:15px;padding:15px;outline:none;width:300px;position:relative;left:33%;"><br><br>







									<div class="btn hi">
										<button name="add" class="submit-btn" name="show_flight" value="1">ADD flight</button>
									</div>


						</form>
					</div>
				</div>
			</div>


		</div>

</body>
</html>
