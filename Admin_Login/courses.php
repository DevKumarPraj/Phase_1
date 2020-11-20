<?php
include("connect.php");
error_reporting(0);
?>
<html><head>
<title>Courses</title>
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
	position:fixed;
	background-color:#222;
	width:100%;
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
<br><br><br><br> 
<div class="nav">
<ul>
<li><a href='program.php?'>Home</a></li>
<li><a href='campus.php?'>Campus</a></li>
<li><a href='courses.php?'>Courses</a></li>
<li><a href='departmnt.php?'>Department</a></li>
<li><a href='admission.php?'>Admission</a><li>
</ul>
</div>
<center><h1>Institute Courses</h1></center>



<footer>
<div class="foottr">
<?php
include 'footer.php';
?>
</div>
</footer>
</body>
</html>
