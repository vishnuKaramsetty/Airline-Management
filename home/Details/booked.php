
<?php

 session_start();
 $da=$_SESSION['depart_date'];
 $che=$_SESSION['child'];
 $da_1=$_SESSION['depart_city'];
$da_2=$_SESSION['arrival_city'];
$da_3=$_SESSION['depart_date'];
$class=$_SESSION['class'];
$time=$_SESSION['time'];
if(isset($_POST["confirm"]))
{
	$gre=$_POST['confirm'];

if($gre)
{

$var1=$_POST['fname'];
$var2=$_POST['lname'];
$var3=$_POST['age'];
$var4=$_POST['gen'];
$var5=$_POST['mobnumber'];
$_SESSION['mob']=$_POST['mobnumber'];
$var6=$_POST['adharnumber'];

/*

         require('textlocal.class.php');
				require('credential.php');

				$textlocal = new Textlocal(false, false, API_KEY);

                // You can access MOBILE from credential.php
				// $numbers = array(MOBILE);
                // Access enter mobile number in input box
                $numbers = array($_POST['mobnumber']);

				$sender = 'TXTLCL';

				$message = "Your ticket is confirmed.....Thank you for booking with us #TAKEOFF AIRLINES";
				$message_1="Dear passenger $var1  $var2 your ticket to $da_3 from $da_1 is confirmed see you on $da_3.Please report to check in before one hour of your departure time.";
                 try
				{
				    $result = $textlocal->sendSms($numbers, $message, $sender);
					$result = $textlocal->sendSms($numbers, $message_1, $sender);

				}
				catch (Exception $e)
				{
				    die('Error: ' . $e->getMessage());
				}



*/



/*echo $var2;
echo $var3;
echo $var4;
echo $var5;*/
$conn1= new mysqli('localhost','root','','airline');
$sql1_1="select * from ticket where booking_id =(select max(booking_id) from ticket)";
$res1h=$conn1->query($sql1_1);
$row=mysqli_fetch_array($res1h);

$det1=$row['booking_id'];
$det2=$row['flight_id'];
$det3=$row['arrival_city'];
$det4=$row['depart_city'];
$det5=$row['intermediate_city'];
/*echo "<br>";
echo $det1;
echo "<br>";
echo $det2;
echo "<br>";
echo $det3;
echo "<br>";
echo $det4;
echo "<br>";
echo $det5;*/
$con_i=new mysqli('localhost','root','','airline');


//$sql_1="update Travels set available_seats=available_seats-1 where flight_id IN (update  from Travels t_1,Travels t_2 where t_1.departure_city='$det4' and t_1.flight_id='$det2' and t_1.flight_id=t_2.flight_id  and t_1.arrival_city=t_2.departure_city and t_1.doj=t_2.doj and t_2.arrival_city='$det3')";

$sq_i_1="(select * from Travels where flight_id='$det2' and departure_city='$det4' and arrival_city='$det3' and doj='$da')";
$sq_j_1="select * from Travels where (flight_id='$det2' and departure_city='$det4' and arrival_city='$det5' and doj='$da') union select * from Travels where (flight_id='$det2' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";


$res_i_1_1=$con_i->query($sq_i_1);
$res_i_2_1=$con_i->query($sq_j_1);



if($det5=="")
{
while($row=mysqli_fetch_array($res_i_1_1))
{
	$sun_1=$row['flight_id'];
	$sun_2=$row['departure_city'];
	$sun_3=$row['arrival_city'];

		if($class=="economy")
		{
			$re=$row['available_seats_eco'];
			$re=$re-1 -$che;
	$sq_k_2_1_eco="update Travels set available_seats_eco='$re' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3' and doj='$da')";
		}
		elseif($class=="business")
		{
			$re=$row['available_seats_bus'];
			$re=$re-1 -$che;
	$sq_k_2_1_bus="update Travels set available_seats_bus='$re' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3' and doj='$da')";
		}
		else
		{
			$re=$row['available_seats_first'];
			$re=$re-1 -$che;
	$sq_k_2_1_first="update Travels set available_seats_first='$re' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3' and doj='$da')";
		}



	$temp=$row['filled_seats'];
	$temp=$temp+1 + $che;
	$sq_i_2_1="update Travels set filled_seats='$temp' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3' and doj='$da')";

}
}
else
{
while($row=mysqli_fetch_array($res_i_2_1))
{
	$sun_1=$row['flight_id'];
//	$sun_2=$row['departure_city'];
	$sun_3=$row['arrival_city'];

		if($class=="economy")
		{
			if($row['departure_city']==$det4)
			{
				$re=$row['available_seats_eco'];
				$re=$re - 1 -$che;
				$dinesh_1_eco_1="update Travels set available_seats_eco='$re' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da') ";
				$res_i_1=$con_i->query($dinesh_1_eco_1);
			}
			elseif($row['departure_city']==$det5)
			{
				$re=$row['available_seats_eco'];
				$re=$re - 1 -$che;
				$dinesh_1_eco="update Travels set available_seats_eco='$re' where (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
				$res_i_1=$con_i->query($dinesh_1_eco);
			}
		}
		elseif($class=="business")
		{
		/*
			$re=$row['available_seats_bus'];
			$re=$re - 1 -$che;
			$dinesh_1_bus="update Travels set available_seats_bus='$re' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da') or (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
		*/
				if($row['departure_city']==$det4)
			{
				$re=$row['available_seats_bus'];
				$re=$re - 1 -$che;
				$dinesh_1_bus_1="update Travels set available_seats_bus='$re' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da') ";
				$res_i_1=$con_i->query($dinesh_1_bus_1);
			}
			elseif($row['departure_city']==$det5)
			{
				$re=$row['available_seats_bus'];
				$re=$re - 1 -$che;
				$dinesh_1_bus="update Travels set available_seats_bus='$re' where (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
				$res_i_1=$con_i->query($dinesh_1_bus);
			}
		}
		else
		{
		/*	$re=$row['available_seats_first'];
			$re=$re - 1 -$che;
	$dinesh_1_first="update Travels set available_seats_first='$re' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da') or (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
		*/
				if($row['departure_city']==$det4)
			{
				$re=$row['available_seats_first'];
				$re=$re - 1 -$che;
				$dinesh_1_first_1="update Travels set available_seats_first='$re' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da') ";
				$res_i_1=$con_i->query($dinesh_1_first_1);
			}
			elseif($row['departure_city']==$det5)
			{
				$re=$row['available_seats_first'];
				$re=$re - 1 -$che;
				$dinesh_1_first="update Travels set available_seats_first='$re' where (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
				$res_i_1=$con_i->query($dinesh_1_first);
			}
		}



	if($row['departure_city']==$det4)
	{
	$temp=$row['filled_seats'];
	$temp=$temp+1 +$che;
	$sunny_1_1="update Travels set filled_seats='$temp' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da')";
	$res_i_2=$con_i->query($sunny_1_1);
	}
	elseif($row['departure_city']==$det5)
	{
		$temp=$row['filled_seats'];
	$temp=$temp+1 +$che;
	$sunny_1="update Travels set filled_seats='$temp' where (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
	$res_i_2=$con_i->query($sunny_1);
	}
}
}

if($det5=="")
{
$res_i_1=$con_i->query($sq_i_2_1);

if($class=="economy"){$res_i_2=$con_i->query($sq_k_2_1_eco);}elseif($class=="business"){$res_i_2=$con_i->query($sq_k_2_1_bus);}else{$res_i_2=$con_i->query($sq_k_2_1_first);}
}
$conn= new mysqli('localhost','root','','airline');
$sql_kit="insert into passenger values('$var1','$var2','$var3','$var4','$var5','$var6','$det1')";
$res_i_1=$con_i->query($sql_kit);
?>

<html>
<head>
<meta http-equiv="refresh" content="4;URL=http://localhost/Takeoff/home/Details/gi.php">
<title>Passenger Details</title>
</head>
<body>
  <style>
.details
{
  border:1px solid black;
  border-radius:10px;
  width:400px;
  padding:40px;
  background:rgba(51,51,51,0.4);
  position: relative;
  left:38%;
  top:13%;
}
body
{
  background-image:url("burj.jpg");
  background-size:cover;


}
  </style>
<div class="details">
<h1><span style="font-family:courier new;color:#0000ff;background:#ccff66;" align="center">&nbsp;&nbsp;TICKET CONFIRMED&nbsp;&nbsp;</span></h1><br>
<span style="background:black;color:white;font-family:courier new;padding:10px;">Name : </span><span style="color:white;font-family:courier new;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $var1.$var2; ?></span><br><br>
<span style="background:black;color:white;font-family:courier new;padding:10px;">Mobile  : </span><span style="color:white;font-family:courier new;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $var5; ?></span><br><br>
<span style="background:black;color:white;font-family:courier new;padding:10px;">Adhaar : </span><span style="color:white;font-family:courier new;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $var6; ?></span><br><br>
<span style="background:black;color:white;font-family:courier new;padding:10px;">Booking ID : </span><span style="color:white;font-family:courier new;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;34<?php echo $det1; ?></span><br><br>
<span style="background:black;color:white;font-family:courier new;padding:10px;">Flying FROM : </span><span style="color:white;font-family:courier new;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $det4; ?></span><br><br>
<span style="background:black;color:white;font-family:courier new;padding:10px;">Flying TO : </span><span style="color:white;font-family:courier new;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $det3; ?></span><br><br>
<br><br><span style="color:white;font-family:courier new;background:red;padding:5px;"><b>PAGE WILL REDIRECT PLEASE WAIT........</b></span>
</div>
</body>
</html>

<?php
}
}


else
{

$var1=$_POST['fname'];
$var2=$_POST['lname'];
$var3=$_POST['age'];
$var4=$_POST['gen'];
$var5=$_POST['mobnumber'];
$var6=$_POST['adharnumber'];
$conn1= new mysqli('localhost','root','','airline');
$sql1="select * from ticket where booking_id =(select max(booking_id) from ticket)";
$res1=$conn1->query($sql1);
$row=mysqli_fetch_array($res1);

$det1=$row['booking_id'];
$det2=$row['flight_id'];
$det3=$row['arrival_city'];
$det4=$row['depart_city'];
$det5=$row['intermediate_city'];

$con_i=new mysqli('localhost','root','','airline');

$conn=new mysqli('localhost','root','','airline');
//$sql_1="update Travels set available_seats=available_seats-1 where flight_id IN (update  from Travels t_1,Travels t_2 where t_1.departure_city='$det4' and t_1.flight_id='$det2' and t_1.flight_id=t_2.flight_id  and t_1.arrival_city=t_2.departure_city and t_1.doj=t_2.doj and t_2.arrival_city='$det3')";

$sq_i="(select * from Travels where flight_id='$det2' and departure_city='$det4' and arrival_city='$det3' and doj='$da')";
$sq_j="select * from Travels where (flight_id='$det2' and departure_city='$det4' and arrival_city='$det5' and doj='$da') union select * from Travels where (flight_id='$det2' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";


$res_i_1=$con_i->query($sq_i);
$res_i_2=$con_i->query($sq_j);



if($det5=="")
{
while($row=mysqli_fetch_array($res_i_1))
{
	$sun_1=$row['flight_id'];
	$sun_2=$row['departure_city'];
	$sun_3=$row['arrival_city'];

		if($class=="economy")
		{
			$re=$row['available_seats_eco'];
			$re=$re-1;
			$sq_k_2_eco="update Travels set available_seats_eco='$re' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3' and doj='$da')";
		}
		elseif($class=="business")
		{
			$re=$row['available_seats_bus'];
			$re=$re-1;
			$sq_k_2_bus="update Travels set available_seats_bus='$re' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3' and doj='$da')";
		}
		else
		{
			$re=$row['available_seats_first'];
			$re=$re-1;
			$sq_k_2_first="update Travels set available_seats_first='$re' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3' and doj='$da')";
		}



	$temp=$row['filled_seats'];
	$temp=$temp+1;
	$sq_i_2z="update Travels set filled_seats='$temp' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3' and doj='$da')";

}
}
else
{
while($row=mysqli_fetch_array($res_i_2))
{
	$sun_1=$row['flight_id'];
//	$sun_2=$row['departure_city'];
	$sun_3=$row['arrival_city'];

		if($class=="economy")
		{
			if($row['departure_city']==$det4)
			{
				$re=$row['available_seats_eco'];
				$re=$re - 1;
				$dinesh_eco="update Travels set available_seats_eco='$re' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da')";
				$din=$con_i->query($dinesh_eco);
			}
			elseif($row['departure_city']==$det5)
			{
				$re=$row['available_seats_eco'];
				$re=$re - 1;
				$dinesh_eco_1="update Travels set available_seats_eco='$re' where (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
				$din=$con_i->query($dinesh_eco_1);
			}
		}
		elseif($class=="business")
		{
			if($row['departure_city']==$det4)
			{
			$re=$row['available_seats_bus'];
			$re=$re - 1;
			$dinesh_bus="update Travels set available_seats_bus='$re' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da')";
			$din=$con_i->query($dinesh_bus);
			}
			if($row['departure_city']==$det5)
			{
			$re=$row['available_seats_bus'];
			$re=$re - 1;
			$dinesh_bus_1="update Travels set available_seats_bus='$re' where (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
			$din=$conn->query($dinesh_bus_1);
			}
		}
		else
		{
			if($row['departure_city']==$det4)
			{
			$re=$row['available_seats_first'];
			$re=$re - 1;
			$dinesh_first="update Travels set available_seats_first='$re' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da') ";
			$din=$conn->query($dinesh_first);
			}
			else
			{
				if($row['departure_city']==$det5)
				{
				$re=$row['available_seats_first'];
				$re=$re - 1;
				$dinesh_first="update Travels set available_seats_first='$re' where  (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
				$din=$conn->query($dinesh_first);
				}
			}
		}


	if($row['departure_city']==$det4)
	{
	$temp=$row['filled_seats'];
	$temp=$temp+1;
	$sunny12="update Travels set filled_seats='$temp' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5' and doj='$da')";
	$res=$conn->query($sunny12);
	}
	else
	{
	$temp=$row['filled_seats'];
	$temp=$temp+1;
	$sunny_40="update Travels set filled_seats='$temp' where  (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3' and doj='$da')";
	$res=$conn->query($sunny_40);
	}
}
}

if($det5=="")
{
  $res_i_1=$con_i->query($sq_i_2z);
  if($class=="economy"){$res_i_2=$con_i->query($sq_k_2_eco);}elseif($class=="business"){$res_i_2=$con_i->query($sq_k_2_bus);}else{$res_i_2=$con_i->query($sq_k_2_first);}
}
$conn= new mysqli('localhost','root','','airline');
$sql="insert into passenger values('$var1','$var2','$var3','$var4','$var5','$var6','$det1')";
$res_i_1=$con_i->query($sql);
header("Location:http://localhost/Takeoff/home/Details/index.php");
}
?>
