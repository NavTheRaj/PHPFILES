<html>
 
<head>
<title>PASSWORD STRENGTH</title>
</head><center>
<body>
<div id="container">
<div id="nav">PASSWORD STRENGTH CHECKER</div>

<form action="regex.php" method="POST">
<label>ENTER YOUR PASSWORD</label>
<br>
<input type="text" name="password">
<br>
<input type="submit" name="get" value="Submit">
</form>



<?php
 
$pass=0;
if($_POST['$pass']){
$pass=$_POST['password'];

$isValid=passwordStrength($pass);

if($isValid){
	echo "Password validated";

}

else{
	echo "Password must contain at least two loer and upper cases and numbers and special characters and overall length must be at least of 8 characters";
}
 
 

 function passwordStrength($pass)
 {


 	if(count(strlen($pass))<8){
 		return false;
 	}

    $pass_array=str_split($pass);
 	$numbers="1234567890";
 	$numbers_array=str_split($numbers);
 	
 if($countNum(array_intersect($numbers_array, $pass_array))<2)
 {
 	return false;
 }

       $caps = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 		$caps_array=str_split($caps_array);
 		 
        if($countCaps(array_intersect($caps_arrays, $pass_array))<2){
        return false; 
    }
        
         $lower = "abcdefghijklmnopqrstuvwxyz";
 		$lower_array=str_split($lower);
 		 
       if ($count(array_intersect($lower_array, $pass_array))<2)
       {
          return false; 
       }
        
        $special= "!@#$%^&*()_+?>:<~";
 		$special_array=str_split($special);
 		 
       if($count(array_intersect($special_array, $pass_array))<2){
       	return false;
       }

 	return true;
 }
}
?>


</div>
</body>
</center>
</html>


