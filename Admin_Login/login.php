<?php
include("connect.php");
error_reporting(0);

session_start();
$_SESSION["username"];
// echo $_SESSION["username"];

session_unset();
?>
<html>
<head><title>Login</title>
<style>
body{
	background-image:radial-gradient(circle,lightgray,lightblue);
}

.nav ul{
	list-style-type:none;
	margin-top:-65px;
	padding:0;
	overflow:hidden;
	width:103%;
	text-align:center;
	border-top-style:solid;
	border-bottom-style:solid;
	
}
.nav ul li{
	display:inline-block;
}
.nav a{
	display:block;
	width:100%;
	block-align:center;
	font-size:33px;
	text-align:center;
	text-decoration:none;
	color:#000;
	padding:28px;
}

footer{
	position:relative;
	background-color:#222;
	width:103%;
	height:33%;
	text-align:center;
	left:0;
	bottom:0;
	border-top-style:solid black;
}
.foottr li{
	display:inline-block;
	font-size:21px;
	
}
.foottr a{
	text-decoration:none;
	color:#ddd;
	padding:35px;	
}
.log{
color:#fff;
font-size:20px;
letter-spacing:1px;
background-color:#777;
border-radius:10px;
}
#btn{
	text-align:center;
	width:50%;
    height:33px;
	background-color:#4ac8d6;
	font-size:20px;
}
#inpt{
	width:220px;
	font-size:17px;
	border-radius:4px;
	
}
#got{
	font-size:22px;
	color:#fff;
	text-decoration:none;
}
#got:hover{
	color:#000;
}
</style>
</head>
<body>
<br><br><br><br> 
<div class="nav">
<ul>
<li><a href='program.php?'>Home</a></li>
<li><a href='campus.php?'>Campus</a></li>
<li><a href='courses.php?'>Courses</a></li>
<li><a href='departmnt.php?'>Department</a></li>
<li><a href='admission.php?'>Admission</a><li>
</ul>
</div><br><br><br><br><br><br>
<form action="" method="POST">
<table class="log" align="center" cellspacing="33px">
<tr><td>Email<td><input type="text" id="inpt" name="email"></td></tr>
<tr><td>Password<td><input type="password" id="inpt" name="password"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login" id="btn" name="submit"></td></tr>
<tr><td><a href='edit.php?' id="got">Forgot Password</a></td></tr>
</table>
</form>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

<footer>
<div class="foottr">
<?php
include 'footer.php';
?>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$mail = $_POST['email'];
	$pass = $_POST['password'];

$query = "select * from registration_portal where Email = '$mail' && password = '$pass'";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
// echo $data;

if($total == 1)
{
	// echo"Login OK";
	      
	$_SESSION['user_name'] = $mail;
	header('location:session.php');

}
else
{ echo "<font color='red'>Login Failed</font>";
}
}
?>