<?php
$age=25;
$weight=100;

if($age < 30 && weight < 65 && $weight > 45){
	echo "You are normal";
}
else if($age < 30 && $weight > 100){

	echo "You are abnormal";
}

else if($age < 30 && $weight < 45){

	echo "You are underweight";
}

else
	echo "Incorrect data input";
?>
