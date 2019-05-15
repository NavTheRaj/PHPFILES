<?php

function isEven($number){
	if($number % 2 == 0){
		return true;
	}
		return false;
}

function isOdd($number){

	if($number % 2==1){
		return true;
	}
	return false;
}

$number=12;

echo isEven($number);

echo isOdd($number);

?>
