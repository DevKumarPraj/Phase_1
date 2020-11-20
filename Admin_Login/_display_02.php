<html>
<head>
</head>
<body>
<center> Display Images </center>
<table border="2" cellspacing="7">
<?php
$count=0;
include("connect.php");

$query = "select * from gallery";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data));
	{
		echo "
		<img src='".$result['picsource']."' height='400' width='400'>
		";
	}
}
else
{
	echo"No record founded";
}
?>
</table>
</body>
</html>