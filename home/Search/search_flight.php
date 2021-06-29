<?php
session_start();
if(isset($_POST['show_flight'])){
$_SESSION['depart_city']=$_POST['depart_city'];
$_SESSION['arrival_city']=$_POST['arrival_city'];
$_SESSION['depart_date']=$_POST['depart_date'];
$_SESSION['multi']=$_POST['multi'];
$_SESSION['child']=$_POST['child'];
$_SESSION['class']=$_POST['class'];
header("Location:http://localhost/Takeoff/home/Search/avail.php");
}
?>





<!DOCTYPE html>
<html lang="en">

<head>

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
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

#say
{
		padding-top:10px;
		background:#f6dbc8;
		border:0px solid #f6dbc8;
}
</style>


<body>

	<div id="booking" class="section">

	<div class="header1">
<div class="combine clearfix">
<div class="left">
<img src="img/pep.png" id="bomma">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="courier new" size="5px" color="white"><b>#T A K E OFF</b> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AIRLINES<br></font>

</div>

<div class="right" >
<a id="sep" href="http://localhost/Takeoff/home/index.php"><input id="we" type="button" value="Home"></a>
<a href="http://localhost/Takeoff/home/about_us.php" style="color:black;"><input id="we" type="button" value="About Us"></a>
<a href="http://localhost/takeoff/home/cus.php"><input style="color:black;"id="we" type="button" name="contact" value="Contact Us"></a>
<a href="http://localhost/takeoff/home/our_service.php"><input style="color:black;"id="we" type="button" name="service" value="Our Service"></a>
<button id="say"  name="logout" value="1"><a  href="http://localhost/Takeoff/home/1.php"><i class="fas fa-sign-out-alt fa-2x" style="margin-top:6px;color:black;" aria-hidden="true" ></i></a></button>
</div>
</div>
</div>

		<div class="section-center">
		<br>
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="#" method="post">
							<div class="form-group">
								<div class="form-checkbox">
							
									<label for="one-way">
										<input type="radio" id="one-way" name="flight-type" checked>
										<span></span>One way
									</label>
									<label for="multi-city">
										<input type="radio" id="multi-city" name="multi" value="single" required>
										<span></span>Direct-Flight
									</label>
									<label for="multi-city_1">
										<input type="radio" id="multi-city_1" name="multi" value="multi_1" required>
										<span></span>Single-Stop
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying from</span>
										<input class="form-control" name="depart_city" type="text" placeholder="City or airport" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying to</span>
										<input class="form-control" type="text" name="arrival_city" placeholder="City or airport" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date" name="depart_date" >
									</div>
								</div>
								
								
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Children (0-17)</span>
										<select class="form-control" name="child">
											<option value="0" >0</option>
											<option value="1" >1</option>
											<option value="2" >2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Travel class</span>
										<select class="form-control" name="class">
											<option value="economy">Economy class</option>
											<option value="business">Business class</option>
											<option value="first">First class</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button style="outline:none;" class="submit-btn" name="show_flight" value="1">Show flights</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>