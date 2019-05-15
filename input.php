<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>

<div style="width:75%; height: auto">
<div style="height: 30px; width:auto">COLOR CHOOSER</div>
<form action="input.php" method="POST"></form>
<input type="text" name="color">
<input type="submit" value="OK">

<?php

 $color = $_POST['color']; 
if($color){ 
echo "<center>";
if($color=="red"){
	echo "You chose red";
}
else if ($color=="blue") {
	echo "You chose blue"."<br>";
}
else if ($color=="yellow") {
	echo "You chose yellow"."<br>";
	
}
else
{
	echo "Invalid color";
}

echo "</center>";
}
?>
</div>
</center>
</body>
</html>