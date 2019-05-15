<?php

#Three types of loops
#For Loop
#While Loop
#For each Loop
#
#For loop syntax same like cprogramming
#
#Program to print even numbers upto n 

$n=100;

for($i=0;$i<=100;$i++)
{
	if($i%2==0)
		echo $i;
	echo "<br>";
	echo "<hr>";
}

//While loop
$count=0;
while($count<=100)
{
	echo $count."<br>";
	$count++;
}

//For each loop

$fruits=array('Banana','Papaya');

for each($fruits as $fruit){
	echo $fruit."<br>";
}
?>
