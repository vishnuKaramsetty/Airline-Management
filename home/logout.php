<?php
$conn1= new mysqli('localhost','root','','airline');
$sql1_1="delete from books where booking_id =(select max(booking_id) from books)";
$res=$conn1->query($sql1_1);

$sql1_1_1="delete from ticket where booking_id =(select max(booking_id) from ticket)";
$res=$conn1->query($sql1_1_1);
session_destroy();
header("Location:http://localhost/Takeoff/home/login/login.php");
?>