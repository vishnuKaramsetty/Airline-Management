<?php
session_start();
?>
<html>
<head>
<meta http-equiv="refresh" content="3;URL=http://localhost/Takeoff/home/admin/admin.php">
</head>
</html>
<?php
if($_SESSION['hi']=='add')
{
echo "Succesfully flight added......Loading please wait........";
}
else
{
echo "Succesfully deleted flight......Loading please wait........";
}
?>