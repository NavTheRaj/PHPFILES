<html>
<head>
<title>MULTIPLICATION TABLE</title>
</head>
<body>
<center>
<div style="height:auto; width:75%; background-color:skyblue;">
<div style="height:70px; width:auto; color:gray; background-color:black; padding-bottom:2px; padding-top:2px; "><h2>MULTIPLICATION TABLE GENERATOR</h2></div>
<br>
<form action="multi.php" method="POST">
<input type="number" name="number">
<br>
<input type="submit" value="ok">
</form>

<!--PHP STARTS-->
<?php
$num=$_POST['number'];
if($num){
	echo "<h3>MULTIPLICATION OF ".$num."</h3>";
	echo "<fieldset>";
for($i=1;$i<=10;$i++){
    
 	$result=$num*$i;
        echo "<table style='text-align:justify; border:1px solid black; font-size:20;background-color:white;'>";
	echo "<tr width:100px><td>".$num."</td>"."<td>X</td>"."<td>".$i."</td>"."<td>=</td>"."<td>".$result."</td></tr>";
	echo "</table>";
	
}
echo "</fieldset>";
}
?>
<!--PHP ENDS-->

<br>
<div style="height:70px; width:auto; color:gray; background-color:black; padding-top: 2px; padding-top: 2px;"><p>Developed by Team Anveshak</p>&copy; All Rights not reseverd at all!!</p></div>
</center>
</div>
</body>
<html>


