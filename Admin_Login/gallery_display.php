<!DOCTYPE HTML>
<html>
<head><title> Photos </title>
</head>
<body>
<h1><center>Display of Gallery</center></h1>

<?php
include("connect.php");

$query = "select * from gallery";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while ($result = mysqli_fetch_assoc($data))
	   {
		   echo "
		   <img src='".$result['picsource']."' height='200' width='200'>
		   ";
}
}
else{
	echo"No Photos Uploaded";
}
?>
</body>
</html>