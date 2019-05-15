<html>
<head>
	<title></title>
</head>
<body>


 <form action="upload_image.php" method="post" enctype="multipart/form-data">
		Select Image:<input type="file" name="image"><br /><br />
		Description:<input type="text" name="desc"><br /><br />
		<input type="submit" name="upload" value="Upload Now">
	</form>
 
 
 

 <?php
	if(isset($_POST['upload'])){
	$image_name = $_FILES['image']['name'];

	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name= $_FILES['image']['tmp_name'];
	$desc = $_POST['desc'];
	$image_tar=	"profile/photos/$image_name";
	echo $image_tmp_name;
 
	copy($image_tmp_name,$image_tar);

		echo "<img src='profile/photos/$image_name' width='400' height='250'><br>$desc";		
			
}
?>


 



  

 
</body>
</html>
