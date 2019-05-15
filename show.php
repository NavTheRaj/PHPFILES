<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>CV</title>
</head>
<body>
	<center>
   <div id="bar">
	<div id="navbar"><h3>PROFILE VIEW</h3></div>

<?php
$name=$loc=$dob=$phone=$sex=$state=$fname=$dharma=$mstat=$degree="";
echo "navraj";

// // print_r($_POST);
// // 	die();

if(isset($_POST['submit']))

{
	
$name=($_POST['name']);
$loc=$_POST['address']);
$dob=$_POST['dob'];
$phone=$_POST['ph_number'];
$sex=$POST['gender'];
$state=$_POST['state'];
$fname=$_POST['fname'];
$dharma=$_POST['dharma'];
$mstat=$_POST['mstat'];
$degree=$_POST['degree'];
 
 
}


// function test_input($data){
//  $data=trim($data);
//  $data=stripslashes($data);
//  $data=htmlspecialchars($data);
//  return $data;
// }


// // if($submit){
// // // $img = "upload/".$image;

// // echo "<center>";
// // echo "<fieldset>";
// // echo "<legend>Info</legend>";
// // //echo "<img src=\"upload/$img\">";
// // echo "<table>";
// // echo "<tr><td>Name:</td><td>$name</td></tr>";
// // echo "<tr><td>Address:</td><td>$loc</td></tr>";
// // echo "<tr><td>Date of birth:</td><td>$dob</td></tr>";
// // echo "<tr><td>Contact:</td><td>$phone</td></tr>";
// // echo "<tr><td>Gender:</td><td>$sex</td></tr>";
// // echo "<tr><td>Nationality:</td><td>$state</td></tr>";
// // echo "<tr><td>Fathers' name:</td><td>$fname</td></tr>";
// // echo "<tr><td>Religion:</td><td>$dharma</td></tr>";
// // echo "<tr><td>Marital status:</td><td>$mstat</td></tr>";
// // echo "<tr><td>Qualification:</td><td>$degree</td></tr>";
// // echo "</table>";
// // echo "</fieldset>";
// // echo "</center>";
// // }



// echo $name;
// }

?>
<div id="footer"><p>Developed by Team Anveshak</p><p> &copy;No rights reserved at all!</p><div>
</div>

</center>
</body>
</html>
