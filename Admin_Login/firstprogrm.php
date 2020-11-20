<?php
include<!DOCTYPE html>
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
<td>Name<td><input type="test" placeholder="Name"></td></tr>
<tr><td>Email <td><input type="text" placeholder="email"></td></tr>
<tr><td>Password<td><input type="password" placeholder="password" required</td></tr>
<tr><td>Confirm Password<td><input type="password" placeholder="confirm password" required></td></tr>
<tr><td>Gender<td><input type="radio" name="gender" >Male<input type="radio" name="gender">Female</td></tr>
<tr><td align="center" colspan="2"><input id="btn" type="submit" value="Submit"></td></tr>
</table>
</form>
</body>
</html>