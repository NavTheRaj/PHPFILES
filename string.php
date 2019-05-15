
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>String</title>
</head>
<body>
	<h3>String is sequence of characters enclosed within single or double quotes.</h3>

<?php

 echo "<h4>Examples:</h4>";

 $name = "sunway college";

 echo $name."<br>";

 echo "Length: ".strlen($name)."<br>";
 echo "Pos: ".strpos($name, "college")."<br>";
 echo "Replace: ".str_replace("college","International",$name);

?>

</body>
</html>