<?php
session_start();
$user=$_SESSION['username'];
if(isset($_POST['booking']))
{
	$_SESSION['depart_date']=$_POST['doj'];
	$_SESSION['flight_id']=$_POST['flightno'];
	$_SESSION['time']=$_POST['depart_time'];
	header("Location:http://localhost/Takeoff/home/Details/index_2.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
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

#say
{
		background:#f6dbc8;
		border:0px solid #f6dbc8;
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

<a id="sep" href="http://localhost/Takeoff/home/index.php"><input id="we" type="button" value="Home"></a>
<a href="http://localhost/Takeoff/home/about_us.php"><input id="we" type="button" value="About Us"></a>
<a href="http://localhost/takeoff/home/cus.php"><input id="we" type="button" value="Contact Us"></a>
<input  id="we" type="button" value="Our Service">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="" href="http://localhost/Takeoff/home/1.php"><i class="fas fa-sign-out-alt fa-2x" style="margin-top:6px;color:black;" aria-hidden="true" ></i></a>
</div>
</div>
</div>
<br><br><br>

<div id="myDIV" class="mid">

<br><br>

<?php
$qwer=0;
$conn= new mysqli('localhost','root','','airline');
$sql="select * from passenger where (booking_id) IN (select booking_id from ticket where username='$user')";
$res=$conn->query($sql);




?>

<center>
<table border="0"  cellspacing="35px">
<?php
	while($row=mysqli_fetch_array($res))
	{

		if($qwer==0)
		{

?>

<tr>

<th align="center" border="1">BOOKING ID</th>
<th border="1" align="center">PURCHASED ON</th>
<th border="1" align="center">PASSENGER</th>
<th border="1" align="center">DEPARTURE CITY</th>
<th border="1" align="center">ARRIVAL CITY</th>
<th border="1" align="center">FLIGHT ON</th>




</tr>
<?php
$qwer=$qwer+1;
		}

?>
<tr>

		<td align="center"><?php echo $row['booking_id']; ?></td>
		<?php
							$tenet=$row['booking_id'];
							$sqlnet="select * from ticket where booking_id='$tenet'";
							$res97=$conn->query($sqlnet);
							$row79=mysqli_fetch_array($res97);
							$tenet1=$row79['flight_id'];
							$tenet2=$row79['depart_city'];
							$tenet3=$row79['arrival_city'];
							$sqlnet1="select * from travels where flight_id='$tenet1' and departure_city='$tenet2' and arrival_city='$tenet3'";
							$res971=$conn->query($sqlnet1);
							$row791=mysqli_fetch_array($res971);
		?>
		<td align="center"><?php echo $row79['on_date']; ?></td>
		<td align="center"><?php echo $row['fname'].$row['lname']; ?></td>
		<td align="center"><?php echo $row79['depart_city']; ?></td>
		<td align="center"><?php echo $row79['arrival_city']; ?></td>
		<td align="center"><?php echo $row791['doj']; ?></td>


	</tr>

<?php
	}
	?>
</table>
</center>
</div>
</div>

</body>


</html>
