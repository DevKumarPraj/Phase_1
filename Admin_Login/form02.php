<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head><title>Login</title>
<style>
body{
background-image:radial-gradient(circle, gray,lightblue);
align:center;
}
table{
color:white;
background-color:#777;
border-radius:10px;
}
#btn{
background-color:#444;
color:white;
height:25px;
width:100px;
border-radius:5px;
}
</style>
</head>
<body>
<br><br><br><br><br>
<form action="#">
<table border="0" align="center" cellspacing="15">
<tr>
<td>Name<td><input type="test" name="fname" placeholder="Name"></td></tr>
<tr><td>Email <td><input type="text" name="email" placeholder="email"></td></tr>
<tr><td>Password<td><input type="password" name="password" placeholder="password" required</td></tr>
<tr><td>Confirm Password<td><input type="password" name="confirmpassword" placeholder="confirm password" required></td></tr>
<tr><td>Roll No<td><input type="text" name="gender" placeholder="Roll No" ></td></tr>
<tr><td align="center" colspan="2"><input id="btn" type="submit" name="submit" value="Submit"></td></tr>
</table>
</form>
</body>
</html>

<?php
$fn=$_GET['fname'];
$en=$_GET['email'];
$pn=$_GET['password'];
$cn=$_GET['confirmpassword'];
$gn=$_GET['gender'];

$query="INSERT INTO STUDNT VALUES ('$fn','$en',$pn','$cn','$gn')";
$data=mysqli_query($conn,$query);

if($data)
{
	echo "Data inserted into Database";
}
else{
	echo "Failed to insert Data into Database";
}

?>