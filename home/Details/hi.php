
<?php

echo $_POST['fname']."<br>";
echo $_POST['lname']."<br>";
$var1=$_POST['fname']; 
$var2=$_POST['lname']; 
$conn= new mysqli('localhost','root','','demo'); 



/*$sql="insert into form values('$var1','$var2')"; 
if(!$conn) 
	die($conn->error); 
$res=$conn->query($sql); 
if($res) 
	echo "<script>alert('Succeessfully inserted')</script>";
*/
$sql3="select * from form";
$res=$conn->query($sql3); 

while($row=$res->fetch_array())
echo $row['fname']."     ".$row['lname']."<br>";
$sql2="select * from form where fname='$var1' and lname='$var2'";
$res=$conn->query($sql2); 

if($res->num_rows!=0){
echo "<script>alert('Succeessfully logged in')</script>";
header("location:home.html");
}
else
	echo "<script>alert('not logged in')</script>";
?>