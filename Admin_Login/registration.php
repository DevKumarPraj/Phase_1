<?php
include ("connect.php");
error_reporting(0);

if(isset($_POST[submit])){
	
    $name=$_POST['name'];
	$username=$_POST['user'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$addrss=$_POST['addrss'];
	$residence=$_POST['state'];
	$pin=$_POST['pin'];
	$number=$_POST['number'];
	$password=$_POST['password'];
	
	
  $insertquery = "insert into `registration_portal`  values('$name','$username','$dob','$gender','$addrss','$residence','$pin','$number','$password')";
  
  
   $result = mysqli_query($conn,$insertquery);  
  
   if($result){
    ?>
	   <script>
	   alert("data inserted succesfully")
	   </script>
	   <?php
}
        else{
       ?>
	   <script>
	   alert("data not inserted succesfully") 
	   </script>
	  <?php
		}
}
?>


<br><br><br><br>
	
<!DOCTYPE html>
<html>
<head><title>Registration Page</title>
<style>
body{
background-image:radial-gradient(circle,gray,lightblue);
}
form{
margin:-85px 300px 100px 300px;
padding-left:200px;
background-color:#ddd;
}
.name{
margin:0 200px 0 -140px;
font-size:25px;
}
.gndr{
margin:0 200px 0 -140px;
font-size:25px;
}
.inpt{
font-size:18px;
width:50%;
height:32px;
}
.date{
width:25%;
height:32px;
}
.sbmt{
font-size:18px;
width:30%;
height:33px;
color:white;
margin:20px 0 0 72px;
background-color:#444;
border-radius:7px;
}
.box{
box-shadow:5px 5px 7px grey;
font-size:20px;
margin:10px 180px 0 0;
text-align:center;
}
#link{
	 border:1px solid black;
	 font-size:14px;
     width:70px;
     height:35px;
     color:white;
     margin:30px 0 0 100px;
     background-color:#444;
     border-radius:2px;
	 text-decoration:none;
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
 .nav a:hover{
	 color:red;
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

</style>
</head>
<body>
<div class="nav">
<ul >
<li><a href='program.php?'>Home</a></li>
<li><a href='campus.php?' target="_blank">Campus</a></li>
<li><a href='courses.php?' target="_blank">Courses</a></li>
<li><a href='dprtmnt.php?'target="_blank">Department</a></li>
<li><a href='registration.php?' target="_blank">Admission</a></li>
</ul>
</div><br><br><br><br><br><br>

<form action= "#" method="POST">
<div class="box">
<h1>Registration Form</h1>
</div >
   <div class="name">
      <label>Name</label><br>
      <input class="inpt" name="name" type="text" ><br>
      <label>Email</label><br>
      <input class="inpt" name="user" type="email  "><br>
      <label>Date of Birth</label><br>
      <input class="date" type="date" name="dob"  
       min="1975-01-01" max="2020-10-30"><br><br>
   </div>
  <div class="gndr">
         <label>Gender</label><br>
         <input type="radio" value="Male" name="gender">Male  <input type="radio"  value="Female" name="gender">Female  <input type="radio"  value="Other" name="gender">Transgender<br><br>
         <label>Address</label><br>
        <input type="text"style="font-size:16px; height:30px;width:40%;" name="addrss"><br>
		State<br>
		<select name="state" style="font-size:20px; ;">
		        <option>select a state</option>
		        <option value="tagr">Jaipur</option>
			    <option>Jodhpur </option>
				<option>Ajmer </option>
				<option>Bikaner</option>
			    <option>Udaipur </option>
				<option>Mumbai</option>
				</select><br>
         <label>Pin Code</label><br>
         <input type="number" style="height:25px;font-size:16px;" name="pin" ><br>
         <label>Mobile Number</label><br>
         <input type="tel" name="number" style="height:30px; width:30%;font-size:16px;" required><br>
		 <label>Password</label><br>
		 <input type="password" style="height:25px;width:35%;" name="password"><br>
   </div>
 <input class="sbmt" name="submit" type="submit" value="Submit">
<a href="display.php" target="_blank" id="link">Check Details</a>
</form>

<footer>
<div class="foottr">
<?php
include 'footer.php';
?>
</div>
</footer>
</body>
</html>

