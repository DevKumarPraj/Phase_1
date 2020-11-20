<?php 
include("connect.php");
error_reporting(0);
session_start();
$user = $_SESSION["user_name"];
if($user == true)
{
}
else{
	header('location:login.php');
}
?>
<html>
<head><title>Logged in</title>
<style>
body{
	background-image:radial-gradient(circle,lightgray,lightblue);
}
#tag{
	float:right
}
#tag a{
	color:red;
	margin-right:35px;
	text-decoration:none;
	font-size:25px;
}

#inpt_1{
	font-size:16px;
	 margin-top:45px;
	 margin-left:800px;
}
#inpt{
	font-size:16px;
	width:9%;
}
 
</style>
</head>
<body>
<center><h3>Welcome Your Account</h3></center>
<div id="tag">
<a href='login.php?'>Logout</a>
</div>
<form action="" method="POST"  enctype = "multipart/form-data">
<div class="file">
<input type="file" id ="inpt_1" name="doc[]" multiple>
<input type="submit" id="inpt" value="Upload" name="submit">
</div>
</form>


<?php
include("connect.php");
 // display Image
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


</body>
</html>

<?php  
if(isset($_POST['submit']))
{
/* $filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname,$folder);
 
  if($filename!="")
 {
	 $query = "insert into upload_gallery values('$folder')";
	 $data = mysqli_query($conn,$query);   */
	 
	foreach( $_FILES['doc']['name'] as $key=>$val)
	{
		$random = rand('11111','99999');
		$file = $random.'_'.$val;
	move_uploaded_file($_FILES['doc']['tmp_name'][$key],'image/'.$file);
	
    $query =  "insert into upload_gallery (photos) values ('$file')";
     $data = mysqli_query($conn,$query);
	if($data) 
	 {
		 echo "Uploaded Successfully";
	 }
	 else{
		 echo "Upload Failed";
	 }
 }
 }
?>