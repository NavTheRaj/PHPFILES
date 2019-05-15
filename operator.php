<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>OPERATORS</title>
</head>
<body>

<h3>OPERATORS IN PHP</h3>

<ul>
	<li>Arithemetic: + - * / **</li>
	<li>Assignment: = += -= *= /=</li>
	<li>Comparison: == != < ></li>
	<li>Logical: && || !</li>
</ul>

<?php
$a=10;
$b=70;

echo "Power: ".$a**$b."<br>";
echo "Compare: ".$a<$b."<br>";
$a+=2;

echo "New value: ".$a."<br>";

$i=true;
$j=false;

echo "X-or operation: ".$i xor $j."<br>";
echo "Not: ".!$j."<br>";
?>

</body>
</html>