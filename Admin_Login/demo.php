<?php
include("connect.php");
error_reporting(0);
?>
<htm>
<body>

<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="uploadfile">

<input type="submit" value="Upload" name="submit">
</form>
</body>
</html>

<?php
if($_POST['submit'])
{
$filename=$_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "_gallery/".$filename;
move_uploaded_file($tempname,$folder);

if($filename!="")
{
	$query = "insert into _gallery_display values('$folder')";
	$data = mysqli_query($conn,$query);
	if($data)
	{
		echo "inserted";
	}
	else
	{
		echo "faild";
	}
}
}
?>