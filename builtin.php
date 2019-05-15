<?php

$string="HelloWorld";

//Reverse string

echo strrev($string);

//length of a string

echo strlen($string);

//to compare

strncmp("Hello world","HelloDaddy");
//MDS function used to hash the password

$password="123pass";

$hashpass=md5($password);

echo $hashpass;

$user_input_pass="123Pass";

$user_input_pass_hash=md5($user_input_pass);

if($hashpass==$user_input_pass_has){
	echo "User input the password correctly";
}
else
{
	echo "Password you entered is wrong";
}

?>
