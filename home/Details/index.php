<?php
session_start();


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

button
{
	outline:none;
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

textarea
{
	border:1px solid white;
	border-radius:15px;
	resize:none;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	outline:rgba(0,0,0,0);
}

.ru
{
position:relative;
left:19%;
}
.xd{
	position:relative;
	left:19%;
	margin-top:8px;
}
.xd_1{
	margin-top:10px;
	position:relative;
	left:19%;}
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



<a id="log" href="http://localhost/Takeoff/home/logout.php" style="float:right;padding-right:30px;"><i class="fa fa-sign-out fa-2x" style="margin-top:10px" aria-hidden="true" ></i></a>


</div>
</div>
</div>
<br>

		<div class="section-center">
		<br><br><br>
			<div class="container">
				<div class="row">
					<div class="booking-form">


						<form  action="booked.php" autocomplete="off" method="post">

							<div class="form-group">

							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label"><b>FIRST NAME</b></span>
										<input class="form-control" minlength=3 name="fname" type="text" placeholder="First Name" onkeypress="return (event.charCode>64 && event.charCode <91) || (event.charCode>96 && event.charCode <123)" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label"><b>LAST NAME</b></span>
										<input class="form-control" minlength=3 name="lname" type="text" placeholder="Last Name" onkeypress="return (event.charCode>64 && event.charCode <91) || (event.charCode>96 && event.charCode <123)"required>
									</div>
								</div>
							</div>
							<br>
							<div class="ru">
							<div class="row">
							<div >
								<div class="col-md-3">
								<center>
									<div class="form-group"><br>
										<span class="form-label" ><font  size="4px" color="white"><b>Gender</b></font></span>
										<input type="radio" name="gen" value="male" required><font face="courier new" size="5px" color="white" >&nbsp;Male</font>&nbsp;&nbsp;&nbsp;
										<input type="radio" name="gen" value="female" required>&nbsp;&nbsp;&nbsp;<font face="courier new" size="5px"  color="white" >Female</font><br><br>
										<font  size="5px" color="white" >Age</font><br><br>
										<input class="form-control" type="text" name="age" onkeypress="return (event.charCode!=8 && event.charCode ==0) || (event.charCode>=48 && event.charCode <=57)" maxlength="2" required>


									</div>
								</center>

								</div>
								</div>
								<br>

								<div class="mu">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label"><b>Mobile   Number</b></span>
										<input class="form-control" type="text" minlength=10 onkeypress="return (event.charCode!=8 && event.charCode ==0) || (event.charCode>=48 && event.charCode <=57)" maxlength="10" placeholder="Mobile Number" name="mobnumber" required>
										<span class="select-arrow"></span>

									</div>
								</div>
								<br><br><br><br><br>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label"><b>Adhar Number</b></span>
										<input class="form-control" type="text" onkeypress="return (event.charCode!=8 && event.charCode ==0) || (event.charCode>=48 && event.charCode <=57)" maxlength="12" minlength="11" placeholder="Adhar Number" name="adharnumber" required />
										<span class="select-arrow"></span>
									</div>
								</div>
								</div>
								</div>

							</div>
							<br>
							<div class="row">
								<div class="col-md-3 xd">
									<div class="form-btn">

										<button class="submit-btn" type="submit" name="add" value="1"><b>ADD ADULT</b></button>
										&nbsp;

									</div>
								</div>



									<div class="col-md-3 xd">
									<div class="form-btn">

										<button class="submit-btn" type="submit" name="confirm" value="1"><b>Confirm Booking  !!</b></button>
										&nbsp;

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
