 <?php
 function passwordStrength($pass)
 {


 	if(count(strlen($pass))<8){
 		return false;
 	}

    $pass_array=str_split($pass);
 	$numbers="1234567890";
 	$numbers_array=str_split($numbers);
 	
 if(count(array_intersect($pass_array,$numbers_array))<2)
 {
 	return false;
 }

       $caps = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 		$caps_array=str_split($caps);
 		 
        if(count(array_intersect($pass_array,$caps_array))<2){
        return false; 
    }
        
         $lower = "abcdefghijklmnopqrstuvwxyz";
 		 $lower_array=str_split($lower);
 		 
       if (count(array_intersect($pass_array,$lower_array))<2)
       {
          return false; 
       }
        
        $special= "!@#$%^&*()_+?>:<~";
 		$special_array=str_split($special);
 		 
       if(count(array_intersect($pass_array,$special_array))<2){
       	return false;
       }

 	return true;
 }

?>


 
