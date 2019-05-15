
<!DOCTYPE html>
<html>
<body>

<form action="display.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>



<?php
$image_name = $_FILES['image']['name'];
$target_dir = "photos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $image=$_FILES["fileToUpload"]["tmp_name"];
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        move_uploaded_file($image, $target_dir);
        echo "img src='photos/$image_name'>";
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
</body>
</html>