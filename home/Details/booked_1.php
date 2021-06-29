
<?php
$var1=$_POST['fname'];
$var2=$_POST['lname'];
$var3=$_POST['age'];
$var4=$_POST['gen'];
$var5=$_POST['mobnumber'];
$var6=$_POST['adharnumber'];
$conn1= new mysqli('localhost','root','','airline');
$sql1="select * from books where booking_id =(select max(booking_id) from books)";
$res1=$conn1->query($sql1);
$row=mysqli_fetch_array($res1);

$det1=$row['booking_id'];
$det2=$row['flight_id'];
$det3=$row['arrival_city'];
$det4=$row['departure_city'];
$det5=$row['intermediate_city'];

$con_i=new mysqli('localhost','root','','airline');


//$sql_1="update Travels set available_seats=available_seats-1 where flight_id IN (update  from Travels t_1,Travels t_2 where t_1.departure_city='$det4' and t_1.flight_id='$det2' and t_1.flight_id=t_2.flight_id  and t_1.arrival_city=t_2.departure_city and t_1.doj=t_2.doj and t_2.arrival_city='$det3')";

$sq_i="(select * from Travels where flight_id='$det2' and departure_city='$det4' and arrival_city='$det3')";
$sq_j="select * from Travels where (flight_id='$det2' and departure_city='$det4' and arrival_city='$det5') union select * from Travels where (flight_id='$det2' and departure_city='$det5' and arrival_city='$det3')";
 

$res_i_1=$con_i->query($sq_i);
$res_i_2=$con_i->query($sq_j);



if($det5=="")
{
while($row=mysqli_fetch_array($res_i_1))
{
	$sun_1=$row['flight_id'];
	$sun_2=$row['departure_city'];
	$sun_3=$row['arrival_city'];
	
	$re=$row['available_seats'];
	$re=$re-1;
	$sq_k_2="update Travels set available_seats='$re' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3')";
	
	
	$temp=$row['filled_seats'];
	$temp=$temp+1;
	$sq_i_2="update Travels set filled_seats='$temp' where (flight_id='$sun_1' and departure_city='$sun_2' and arrival_city='$sun_3')";

}
}
else
{
while($row=mysqli_fetch_array($res_i_2))
{
	$sun_1=$row['flight_id'];
//	$sun_2=$row['departure_city'];
	$sun_3=$row['arrival_city'];
	
	
	$re=$row['available_seats'];
	$re=$re - 1;
	echo $re;
	//$dinesh="select * from Travels";
	
	$dinesh="update Travels set available_seats='$re' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5') or (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3')";
	
	
	$temp=$row['filled_seats'];
	$temp=$temp+1;
	$sunny="update Travels set filled_seats='$temp' where (flight_id='$sun_1' and departure_city='$det4' and arrival_city='$det5') or (flight_id='$sun_1' and departure_city='$det5' and arrival_city='$det3')";

}
}

if($det5=="")
{
	

$res_i_1=$con_i->query($sq_i_2);
$res_i_2=$con_i->query($sq_k_2);
}
else
{
	
	
$res_i_1=$con_i->query($dinesh);
//$res_i_1=$con_i->query($dinesh_1);
$res_i_2=$con_i->query($sunny);
//$res_i_2=$con_i->query($sunny_1);
}

$conn= new mysqli('localhost','root','','airline');
$sql="insert into passenger values('$var1','$var2','$var3','$var4','$var5','$var6','$det1','$det2','$det4','$det3','$det5')";

redirect_to("index.php");
?>