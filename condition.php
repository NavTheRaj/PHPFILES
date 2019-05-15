<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>CONDITIONS</title>
</head>
<body>
<h3>Condition Statement: if, if..else,else if,switch</h3>
<?php
$num=10;

if($num%2==0){
	echo "$num is even"."<br>";
}
else
{
	echo "$num is odd"."<br>";
}

$color="red";
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

?>
</body>
</html>