<?php
session_start();
$var20 =$_SESSION['flight_id'];
$var1=$_SESSION['depart_city'];
$var2=$_SESSION['arrival_city'];

$var69=$_SESSION['class'];
//$var3=$_SESSION['depart_date'];
$inter_med=$_SESSION['intermediate_city'];
$conn1=new mysqli('localhost','root','','airline');

if(!is_null($inter_med))
{
  if($var69=='economy')
  {
    $sql909="select (t1.price_eco + (select t.price_eco from travels t where (flight_id='$var20' and departure_city='$inter_med' and arrival_city='$var2'))) as price from travels t1 where (flight_id='$var20' and departure_city='$var1' and arrival_city='$inter_med')";
    $res734=$conn1->query($sql909);
    $row79=mysqli_fetch_array($res734);
    $price=$row79['price'];
  }
  elseif($var69=='business')
  {
    $sql909="select (t1.price_business + (select t.price_business from travels t where (flight_id='$var20' and departure_city='$inter_med' and arrival_city='$var2'))) as price from travels t1 where (flight_id='$var20' and departure_city='$var1' and arrival_city='$inter_med')";
    $res734=$conn1->query($sql909);
    $row79=mysqli_fetch_array($res734);
    $price=$row79['price'];
  }
  else {
    $sql909="select (t1.price_first + (select t.price_first from travels t where (flight_id='$var20' and departure_city='$inter_med' and arrival_city='$var2'))) as price from travels t1 where (flight_id='$var20' and departure_city='$var1' and arrival_city='$inter_med')";
    $res734=$conn1->query($sql909);
    $row79=mysqli_fetch_array($res734);
    $price=$row79['price'];
  }
}
else
{
  if($var69=='economy')
  {
    $sql909="select price_eco from travels where flight_id='$var20' and departure_city='$var1' and arrival_city='$var2' ";
    $res734=$conn1->query($sql909);
    $row79=mysqli_fetch_array($res734);
    $price=$row79['price_eco'];
  }
  elseif($var69=='business')
  {
    $sql909="select price_business from travels where flight_id='$var20' and departure_city='$var1' and arrival_city='$var2' ";
    $res734=$conn1->query($sql909);
    $row79=mysqli_fetch_array($res734);
    $price=$row79['price_business'];
  }
  else {
    $sql909="select price_first from travels where flight_id='$var20' and departure_city='$var1' and arrival_city='$var2' ";
    $res734=$conn1->query($sql909);
    $row79=mysqli_fetch_array($res734);
    $price=$row79['price_first'];
  }
}
$sql909="select CURDATE() AS date";
$res734=$conn1->query($sql909);
$row79=mysqli_fetch_array($res734);

$tenet=$row79['date'];
$user=$_SESSION['username'];
$sql7="insert into Ticket values( '','$var20','$var1','$var2','$inter_med','$user','$tenet','$price')";
$sql90="insert into checks values('$user','$var20')";
$res7=$conn1->query($sql90);
$res7=$conn1->query($sql7);
$res7=$conn1->query($sql71);
header("Location:http://localhost/Takeoff/home/Details/index.php")
?>
