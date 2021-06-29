<?php
if(isset($_POST['admin']))
{
	if($_POST['admin']=="ADD")
	{
		header("Location:http://localhost/Takeoff/home/admin/add.php");
	}
	else
	{
		if($_POST['admin']=="CHECK")
		{
			header("Location:http://localhost/Takeoff/home/admin/asearch_flight.php");
		}
		else
		{
			header("Location:http://localhost/Takeoff/home/admin/delete.php");
		}
	}
}
?>
<html >
<head>
<title>Staff</title>
  <meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<style>

body {
 background-image: url("w.jpg");
background-repeat : no-repeat;
background-size:cover;
background-attachment:fixed;
margin:0px;
padding:0px;
 }
 .left{
float:left;
width:32%;
}

.right{
float:right;
padding-left:30px;

}


#di {
  background-color: white;
  color: black;
  font-size: 18px; 
  border:1px solid white;
  border-radius:5px;
  padding: 8px;
  width: 160px;
  position:absolute;
  left:42%;
  font-family:xharp;
  text-align: center;
  
  mix-blend-mode: screen;
}

#di:hover
{
cursor:pointer;
transform:scale(1.05);
background:#f5bba3;
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
.hi
{
	position:relative;
	top:60%;
	height:300px;
	background:red;
}

.left
{
background:red;
}

.right
{

width:8%;
}

#log:hover
{

color:green;

}
input[type=button]
{
outline:none;
}
.middle{
  position: absolute;
  top: 200%;
  transform: translateY(-50%);
  width: 100%;
  text-align: center;
  background:rgba(51,51,51,.8);
}
.btn{
  display: inline-block;
  width: 35px;
  height: 35px;
  background: #f1f1f1;
  margin: 10px;
  border-radius: 30%;
  box-shadow: 0 5px 15px -5px #00000070;
  color: #3498db;
  overflow: hidden;
  position: relative;
}
.btn i{
  line-height: 35px;
  font-size: 16px;
  transition: 0.2s linear;
}
.btn:hover i{
  transform: scale(1.3);
  color: #f1f1f1;
}
.btn::before{
  content: "";
  position: absolute;
  width: 120%;
  height: 120%;
  background: #3498db;
  transform: rotate(45deg);
  left: -110%;
  top: 90%;
}
.btn:hover::before{
  animation: aaa 0.7s 1;
  top: -10%;
  left: -10%;
}
@keyframes aaa {
  0%{
    left: -110%;
    top: 90%;
  }50%{
    left: 10%;
    top: -30%;
  }100%{
    top: -10%;
    left: -10%;
  }
}
.low{
	background:black;
}
.mid_11
{
	position:fixed;
	left:30%;
	top:40%;
}

input[type=submit]
{
	background-image:url("w.jpg");
	color:#fc572a;
	padding:12px;
	font-size:28px;
	mix-blend-mode: screen;
	border-left:8px solid #2196f3;
	border-right:0px solid blue;
	border-top:0px solid #fc572a;
	border-bottom:0px solid #fc572a;
	outline:none;
	margin:10px;
	background:#ddffff;
	width:180px;
}

input[type=submit]:hover
{
	background:#2196f3;
	transform: scleY(2.15);
	cursor:pointer;
	border-left:8px solid #ddffff;
	border-right:0px solid blue;
	border-top:0px solid #fc572a;
	border-bottom:0px solid #fc572a;
}

#say
{
		background:#f6dbc8;
		border:0px solid #f6dbc8;
}
</style>


<body >
<div class="all">
<div class="header1">
<div class="combine clearfix">
<div class="left">
<img id="bomma" src="pep.png">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="courier new" size="5px" color="white"><b>#T A K E OFF</b> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AIRLINES<br></font>

</div>

<div class="right" >


<button id="say"  name="logout" value="1"><a  href="http://localhost/takeoff/home/main/main_page.php#"><i class="fas fa-sign-out-alt fa-2x" style="margin-top:6px;color:black;" aria-hidden="true" ></i></a></button>
</div>
</div>
</div>
<br><br><br><br>

<div class="mid_11">
<form action="#" method="post" >
<input type="submit" name="admin" value="ADD">
<input type="submit" name="admin" value="CHECK">
<input type="submit" name="admin" value="DELETE">
</form>
</div>

<div class="low">

    <div class="middle">
      <a class="btn" href="#">
        <i class="fab fa-facebook-f "></i>
      </a>
      <a class="btn" href="#">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="btn" href="#">
        <i class="fab fa-google"></i>
      </a>
      <a class="btn" href="#">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="btn" href="#">
        <i class="fab fa-youtube"></i>
		
      </a>
	&nbsp;<br><b style="color:white;">&copy; reserved 2019-2022</b>
	  
    </div>
	</div>
</div>
</body>
</html> 