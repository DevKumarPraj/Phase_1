<html>
<head><title>Display</title>
<style>
body{
	background-image:radial-gradient(circle,lightgray,lightblue);
}
</style></head>
<body>
<table>
<?php
include("connect.php");
 

$query = "select * from upload_gallery";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
   while($result= mysqli_fetch_assoc($data))
  {
         echo"<img src='".$result['photos']."' height='200' width='200'>";
	 }
}
	 else
	 {
	 echo "No records found";
	 }
 
	 ?>
	  </table>

</body>
</html>