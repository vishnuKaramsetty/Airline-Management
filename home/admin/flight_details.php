<?php
session_start();
$var1=$_SESSION['depart_city'];
$var2=$_SESSION['arrival_city'];
$var3=$_SESSION['depart_date'];
$var4=$_SESSION['multi'];
$class=$_SESSION['class'];
if(isset($_POST['booking']))
{
	$_SESSION['depart_date']=$_POST['doj'];
	$_SESSION['flight_id']=$_POST['flightno'];
	$_SESSION['time']=$_POST['depart_time'];
	header("Location:http://localhost/Takeoff/home/admin/passenger_details.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>flights</title>
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
  padding:12px;
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
 position:relative;
 padding-left:300px;

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
<br><br>

<div id="myDIV" class="mid">

<br><br>
<?php


?>

<?php
//single--------------------------------
$pp=0;
$pp_1=0;
$qwer=0;
if($var4=="single")
{
?>
<?php

$inter_med="";
$conn=new mysqli('localhost','root','','airline');

$sql3="select * from flight join Travels on (Flight.flight_id=Travels.flight_id and departure_city='$var1' and arrival_city='$var2')";

$res=$conn->query($sql3); 


?>
		


<?php
	while($row=mysqli_fetch_array($res))
	{
		$pp=$pp+1;
		if($qwer==0)
		{
?>
<table border="0"  cellspacing="35px">
<tr>
<th align="center" border="1">FLIGHT ID</th>
<th border="1">DEPARTURE DATE</th>
<th border="1">DEPARTURE CITY</th>
<th border="1">ARRIVAL CITY</th>
<th border="1">AVAIALABLE SEATS</th>
<th border="1">DEPARTURE TIME</th>
<th border="1">ARRIVAL TIME</th>

<th border="1"></th>
</tr>

	<tr>
		<?php
		}
		$qwer=$qwer+1;
		if($var3=='')
		{
			?>

		<a>
		<td align="center"><?php echo $row['flight_id']; ?></td>
		<td align="center"><?php echo $row['doj']; ?></td>
		<td align="center"><?php echo $row['departure_city']; ?></td>
		<td align="center"><?php echo $row['arrival_city']; ?></td>
		<td align="center"><?php if($class=="economy"){echo $row['available_seats_eco'];}elseif($class=="business"){echo $row['available_seats_bus'];}else{echo $row['available_seats_first'];} ?></td>
		<td align="center"><?php echo $row['departure_time']; ?></td>
		<td align="center"><?php echo $row['arrival_time']; ?></td>
		</a>
		
		<?php
		if($class=="economy")
		{
			$gre=$row['available_seats_eco'];
		}
		elseif($class=="business")
		{
			$gre=$row['available_seats_bus'];
		}
		else
		{
			$gre=$row['available_seats_first'];
		}
		?>
		<?php
		if($gre<10 && $gre!=0)
		{
		echo '<td>
		<form action="#" method="post">
		   
            <input type="hidden" name="flightno" value="'.$row['flight_id'].'">
            <input type="hidden" name="doj" value="'.$row['doj'].'">
            <input type="hidden" name="depart_city" value="'.$row['departure_city'].'">
            <input type="hidden" name="arrival_city" value="'.$row['arrival_city'].'">
            <input type="hidden" name="available_seats" value="'.$gre.'">
            <input type="hidden" name="depart_time" value="'.$row['departure_time'].'">
			<input type="hidden" name="arrival_time" value="'.$row['arrival_time'].'">
			<button type="submit" name="booking" value="1" style="background:red;">Check</button>



        </form>
		</td>';
		}
		else
		{
			if($gre==0){
			echo'<td><button type="submit" name="booking" value="1" style="background:red;" disabled >Book</button></td>';
			}
			else{
			echo '<td>
		     <form action="#" method="post">
		   
            <input type="hidden" name="flightno" value="'.$row['flight_id'].'">
            <input type="hidden" name="doj" value="'.$row['doj'].'">
            <input type="hidden" name="depart_city" value="'.$row['departure_city'].'">
            <input type="hidden" name="arrival_city" value="'.$row['arrival_city'].'">
            <input type="hidden" name="available_seats" value="'.$gre.'">
            <input type="hidden" name="depart_time" value="'.$row['departure_time'].'">
			<input type="hidden" name="arrival_time" value="'.$row['arrival_time'].'">
			<button type="submit" name="booking" value="1" >Check</button>
	

        </form>
		</td>';
			}		
		}
		
		?>
				
		<?php
$_SESSION['intermediate_city']='';
		}
		
		else
		{
			if($var3==$row['doj'])
			{
			$pp_1=$pp_1+1;
			?>

			
				<td align="center"><?php echo $row['flight_id']; ?></td>
		<td align="center"><?php echo $row['doj']; ?></td>
		<td align="center"><?php echo $row['departure_city']; ?></td>
		<td align="center"><?php echo $row['arrival_city']; ?></td>
	<td align="center"><?php if($class=="economy"){echo $row['available_seats_eco'];}elseif($class=="business"){echo $row['available_seats_bus'];}else{echo $row['available_seats_first'];} ?></td>
		<td align="center"><?php echo $row['departure_time']; ?></td>
		<td align="center"><?php echo $row['arrival_time']; ?></td>
		<?php
		if($class=="economy")
		{
			$gre=$row['available_seats_eco'];
		}
		elseif($class=="business")
		{
			$gre=$row['available_seats_bus'];
		}
		else
		{
			$gre=$row['available_seats_first'];
		}
		?>
	<?php
		if($gre<10 && $gre!=0)
		{
		echo '<td>
		<form action="#" method="post">
		   
            <input type="hidden" name="flightno" value="'.$row['flight_id'].'">
            <input type="hidden" name="doj" value="'.$row['doj'].'">
            <input type="hidden" name="depart_city" value="'.$row['departure_city'].'">
            <input type="hidden" name="arrival_city" value="'.$row['arrival_city'].'">
            <input type="hidden" name="available_seats" value="'.$gre.'">
            <input type="hidden" name="depart_time" value="'.$row['departure_time'].'">
			<input type="hidden" name="arrival_time" value="'.$row['arrival_time'].'">

             <button type="submit" name="booking" value="1" style="background:red;">Check</button>

        </form>
		</td>';
		}
		else
		{
			if($gre==0)
			{echo '<td> <button type="submit" name="booking" value="1" style="background:red;" disabled>Book</button> </td>';}
			else{
			echo '<td>
		<form action="#" method="post">
		   
            <input type="hidden" name="flightno" value="'.$row['flight_id'].'">
            <input type="hidden" name="doj" value="'.$row['doj'].'">
            <input type="hidden" name="depart_city" value="'.$row['departure_city'].'">
            <input type="hidden" name="arrival_city" value="'.$row['arrival_city'].'">
            <input type="hidden" name="available_seats" value="'.$gre.'">
            <input type="hidden" name="depart_time" value="'.$row['departure_time'].'">
			<input type="hidden" name="arrival_time" value="'.$row['arrival_time'].'">

             <button type="submit" name="booking" value="1">Check</button>

        </form>
			</td>';}
		}
		?>
		<?php
		$_SESSION['intermediate_city']='';
			}
		
		}
		?>
	</tr>
<?php	
}

}
else
{
	
if($var4=="multi_1")
{

$conn=new mysqli('localhost','root','','airline');

$sql3="select t_1.flight_id,t_1.doj,t_1.departure_city,t_1.arrival_city as e,t_2.arrival_city,t_1.available_seats_eco,t_1.available_seats_bus,t_1.available_seats_first,t_1.departure_time,t_2.arrival_time from Travels t_1,Travels t_2 where t_1.departure_city='$var1' and t_1.flight_id=t_2.flight_id  and t_1.arrival_city=t_2.departure_city and t_1.doj=t_2.doj and t_2.arrival_city='$var2'and (t_2.available_seats_eco>0 and t_2.available_seats_bus>0 and t_2.available_seats_first>0)";


$res=$conn->query($sql3); 


?>

<?php

	while($row=mysqli_fetch_array($res))
	{
		$pp=$pp+1;
?>
<?php
		if($qwer==0)
		{
			?>
	<center>
			<table border="0"  cellspacing="25px">
			<tr>
			<th align="center">Flight Id</th>
			<th>Departure Date</th>
			<th>Departure City</th>
			<th>Intermidiate City</th>
			<th>Arrival City</th>
			<th>Available seats</th>
			<th>Departure Time</th>
			<th>Arrival Time</th>
			<th></th>
			</tr>
		
	<tr>
		<?php
		}
		$qwer=$qwer+1;
		if($var3=='')
		{
			?>
		
			<?php
			$var20=$row['flight_id'];

			$inter_med=$row['e'];
			?>
		<td align="center" name="fid"><?php echo $row['flight_id']; ?></td>
		<td align="center"><?php echo $row['doj']; ?></td>
		<td align="center"><?php echo $row['departure_city']; ?></td>
		<td align="center"><?php echo $row['e']; ?></td>
		<td align="center"><?php echo $row['arrival_city']; ?></td>
		<td align="center"><?php if($class=="economy"){echo $row['available_seats_eco'];}elseif($class=="business"){echo $row['available_seats_bus'];}else{echo $row['available_seats_first'];} ?></td>
		<td align="center"><?php echo $row['departure_time']; ?></td>
		<td align="center"><?php echo $row['arrival_time']; ?></td>
		<?php
		if($class=="economy")
		{
			$gre=$row['available_seats_eco'];
		}
		elseif($class=="business")
		{
			$gre=$row['available_seats_bus'];
		}
		else
		{
			$gre=$row['available_seats_first'];
		}
		?>
		<?php
		if($gre<10 && $gre!=0)
		{
		echo '<td>
		<form action="#" method="post">
		   
            <input type="hidden" name="flightno" value="'.$row['flight_id'].'">
            <input type="hidden" name="doj" value="'.$row['doj'].'">
            <input type="hidden" name="depart_city" value="'.$row['departure_city'].'">
			    <input type="hidden" name="e" value="'.$row['e'].'">
            <input type="hidden" name="arrival_city" value="'.$row['arrival_city'].'">
            <input type="hidden" name="available_seats" value="'.$gre.'">
            <input type="hidden" name="depart_time" value="'.$row['departure_time'].'">
			<input type="hidden" name="arrival_time" value="'.$row['arrival_time'].'">

             <button type="submit" name="booking" value="1" style="background:red;">Check</button>

        </form>
		</td>';
		}
		else
					
		{
			if($gre==0)
			{echo '<td> <button type="submit" name="booking" value="1" style="background:red;" disabled>Book</button> </td>';}
		else{
		echo '<td>
		<form action="#" method="post">
		   
            <input type="hidden" name="flightno" value="'.$row['flight_id'].'">
            <input type="hidden" name="doj" value="'.$row['doj'].'">
            <input type="hidden" name="depart_city" value="'.$row['departure_city'].'">
			    <input type="hidden" name="e" value="'.$row['e'].'">
            <input type="hidden" name="arrival_city" value="'.$row['arrival_city'].'">
            <input type="hidden" name="available_seats" value="'.$gre.'">
            <input type="hidden" name="depart_time" value="'.$row['departure_time'].'">
			<input type="hidden" name="arrival_time" value="'.$row['arrival_time'].'">

             <button type="submit" name="booking" value="1">Check</button>

        </form>
		</td>';}
		}
		?>
		<?php
		$_SESSION['intermediate_city']=$row['e'];
		}
		
		else
		{
			if($var3==$row['doj'])
			{
				$pp_1=$pp_1+1;
				?>

				<?php
				$var20=$row['flight_id'];
				$inter_med=$row['e'];
				
				?>
				<td align="center"><?php echo $row['flight_id']; ?></td>
		<td align="center"><?php echo $row['doj']; ?></td>
		<td align="center"><?php echo $row['departure_city']; ?></td>
		<td align="center"><?php echo $row['e']; ?></td>
		<td align="center"><?php echo $row['arrival_city']; ?></td>
		<td align="center"><?php if($class=="economy"){echo $row['available_seats_eco'];}elseif($class=="business"){echo $row['available_seats_bus'];}else{echo $row['available_seats_first'];} ?></td>
		<td align="center"><?php echo $row['departure_time']; ?></td>
		<td align="center"><?php echo $row['arrival_time']; ?></td>
		<?php
			if($class=="economy")
		{
			$gre=$row['available_seats_eco'];
		}
		elseif($class=="business")
		{
			$gre=$row['available_seats_bus'];
		}
		else
		{
			$gre=$row['available_seats_first'];
		}
		
		?>
		<?php
		if($gre<10 && $gre!=0)
		{
		echo '<td>
		<form action="#" method="post">
		   
            <input type="hidden" name="flightno" value="'.$row['flight_id'].'">
            <input type="hidden" name="doj" value="'.$row['doj'].'">
            <input type="hidden" name="depart_city" value="'.$row['departure_city'].'">
			    <input type="hidden" name="e" value="'.$row['e'].'">
            <input type="hidden" name="arrival_city" value="'.$row['arrival_city'].'">
            <input type="hidden" name="available_seats" value="'.$gre.'">
            <input type="hidden" name="depart_time" value="'.$row['departure_time'].'">
			<input type="hidden" name="arrival_time" value="'.$row['arrival_time'].'">

             <button type="submit" name="booking" value="1" style="background:red;">Check</button>

        </form>
		</td>';
		}
		else
		{
			if($gre==0)
			{echo '<td> <button type="submit" name="booking" value="1" style="background:red;" disabled>Book</button> </td>';}
		else{
			echo '<td>
		<form action="#" method="post">
		   
            <input type="hidden" name="flightno" value="'.$row['flight_id'].'">
            <input type="hidden" name="doj" value="'.$row['doj'].'">
            <input type="hidden" name="depart_city" value="'.$row['departure_city'].'">
			    <input type="hidden" name="e" value="'.$row['e'].'">
            <input type="hidden" name="arrival_city" value="'.$row['arrival_city'].'">
            <input type="hidden" name="available_seats" value="'.$gre.'">
            <input type="hidden" name="depart_time" value="'.$row['departure_time'].'">
			<input type="hidden" name="arrival_time" value="'.$row['arrival_time'].'">

             <button type="submit" name="booking" value="1" style="background:red;">Check</button>

        </form>
		</td>';}
		}
		?>
		<?php
			$_SESSION['intermediate_city']=$row['e'];
			}
		
		}
		?>
	</tr>
	
<?php
	}

	
}
}
	if($pp==0)
{
	echo "<br><br><br><br><br><br><br><br>";
echo "<b><span style=\"background:#000066;font-size:30px;padding:10px;border:0px solid white;box-shadow:5px 5px #efefef;\" >S O R R Y !!!!</span>&nbsp;&nbsp; NO FLIGHTS AVAILABLE ON THIS ROUTE</b>";	
}

if($pp_1==0&&$pp!=0&&$var3!='')
			{ echo "<br><br><br><br><br>"."No flight available on $var3";}
?>
</table>

</table>
</center>

</form>
</div>
</div>
	
</body>


</html>

