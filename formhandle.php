<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>FORM HANDLING</title>
</head>
<body>
<center>
	<h3>Form handling in PHP</h3>

</center>
<center>
<p>$_GET & $_POST super globals are used to collect form data</p>
<p>$_POST is assigned with array data passed as body HTTP post method</p>
<p>The array is assigned to both variables are associative array</p>
<p>Since the data are passed in the url in GET method it is bad praactice to include sensitive data like password..while using this method in html form</p>
<p>POST method is much secure compared to the GET method</p>
<p>THe name attribute of the input type is used as key by the $_POST and $GET method to extract the paasssed value</p>


	<p>REGISTRATION FORM</p>
	<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>

		<tr>
			<td>Age</td>
			<td><input type="number" name="age"></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="email" name="mail"></td>
		</tr>

		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">FeMale
			<input type="radio" name="gender" value="Others">Others</td>
		</tr>

		<tr>
			<td>Address</td>
			<td><input type="text" name="address"></td>
		</tr>

<tr>
	<td></td>

		<td><input type="submit" name="submit" value="Submit Details"></td>

</tr>


	</table>
</form>

<?php
$name=$age=$gender=$address=$mail=0;

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=check($_POST['name']);
    $age=check($_POST['age']);
    $mail=check($_POST['mail']);
    $gender=check($_POST['gender']);
    $address=check($_POST['address']);

    echo "Name :".$name."<br>";
     echo "Age :".$age."<br>";
      echo "Email :".$mail."<br>";
       echo "Gender :".$gender."<br>";
        echo "Address :".$address."<br>";
}

function check($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>

</body>
</html>