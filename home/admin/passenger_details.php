<?php
session_start();
$var1=$_SESSION['depart_city'];
$var2=$_SESSION['arrival_city'];
$var3=$_SESSION['depart_date'];
$var4=$_SESSION['multi'];
$class=$_SESSION['class'];
$fd=$_SESSION['flight_id'];
$inter_mediate=$_SESSION['intermediate_city'];
$time=$_SESSION['time'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Passengers</title>
</head>
<style>
 .left{
float:left;
width:32%;
}

.right{
float:right;
padding-left:350px;
position:relative;


}


body{
background-image:url("w.jpg");
margin:0px;
padding:0px;
background-size:cover;
}
.mid
{
	
	text-align:center;
	color:white;
	font-size:20px;
	font-family:courier new;
	width:90%;
	position:relative;
	top:35%;
	left:4%;
	
}


#we
{
  float:left;
  background:#f6dbc8;
  margin:6px;
  width:130px;
  padding:12px;
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


.left
{
background:red;
}

.right
{

width:23%;
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

.mid
{

border:0px solid black;
border-radius:10px;
opacity:0.9px;



background:rgba(51,51,51,.8);
}






.ru
{
position:relative;
left:19%;
}

table
{
color:white;
font-family:courier new;
font-size:20px;


}
button
{background:#39e600;
font-family:courier new;
font-size:19px;
color:white;
width:70px;
padding:10px;
border:0px solid white;
border-radius:10px;
}
button:hover
{
	background:#66b3ff;
	transform:scale(1.05);
	cursor:pointer;
	outline:none;
}
table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  padding: 19px;
  text-align: left;
  border-bottom: 0px solid #ddd;
}
tr:hover {background-color:#000000;}
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

<a id="sep" href="http://localhost/Takeoff/home/admin/admin.php"><input id="we" type="button" value="Home"></a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="log" href="http://localhost/Takeoff/home/1.php"><i class="fa fa-sign-out fa-2x" style="margin-top:10px" aria-hidden="true" ></i></a>
</div>
</div>
</div>
<br><br><br><br><br>

<div id="myDIV" class="mid">
	
		<?php
		$conn=new mysqli('localhost','root','','airline');
		$sql="select * from passenger where departure_city='$var1' and arrival_city='$var2' and flight_id='$fd' and depart_date='$var3' and  intermediate_city='$inter_mediate' and class='$class' and depart_time='$time'";
		$res=$conn->query($sql);
		$kk=0;
		$k_1=0;
		while($row=mysqli_fetch_array($res))
		{
			if($k_1==0)
			{
				$k_1=$k_1+1;
			?>
			<center>
			<table border="0"  cellspacing="25px">
			<tr>
			<th align="center">Booking ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Mobile Number</th>
			<th>Adhaar Number</th>
			<th>Class</th>
			</tr>
			<?php
			}
			$kk=$kk+1;
			?>
			<tr>
		<td align="center"><?php echo $row['booking_id']; ?></td>
		<td align="center"><?php echo $row['fname'].$row['lname']; ?></td>
		<td align="center"><?php echo $row['age']; ?></td>
		<td align="center"><?php echo $row['gender']; ?></td>
		<td align="center"><?php echo $row['mobnumber']; ?></td>
		<td align="center"><?php echo $row['adharnumber']; ?></td>
		<td align="center"><?php echo $row['class']; ?></td>
			</tr>
		<?php
		}
		?>
		</table>
		</center>
		<?php
		if($kk==0 && $k_1==0)
		{
			echo "<br><br><br><br><br><br><br><br>";
echo "<b><span style=\"background:#000066;font-size:30px;padding:10px;border:0px solid white;box-shadow:5px 5px #efefef;\" >N O !!!!</span>&nbsp;&nbsp; PASSENGERS</b>";	
		}
		?>
</div>
</div>
<br><br>

</body>
</html>
