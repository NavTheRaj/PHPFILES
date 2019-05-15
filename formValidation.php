<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

<?php
  
  $nameErr = $emailErr = $genderErr = $addressErr = "";
  $name = $email = $gender = $comment = $address = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
  	if(empty($_POST["name"])){
  		$nameErr = "Name is Required.";
  	}
  	else{
  		$name = test_input($_POST["name"]);
  	}

  	if(empty($_POST["email"])){
  		$emailErr = "Email is Required.";
  	}
  	else{
  		$email = test_input($_POST["email"]);

  		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  			$emailErr = "Invalid email format.";
  		}
  	}

  	if(empty($_POST["address"])){
  		$address = "";
  	}
  	else{
  		$address = test_input($_POST["address"]);
  	}

  	if(empty($_POST["comment"])){
  		$comment = "";
  	}
  	else{
  		$name = test_input($_POST["comment"]);
  	}

  	if(empty($_POST["gender"])){
  		$genderErr = "Gender is Required.";
  	}
  	else{
  		$name = test_input($_POST["gender"]);
  	}
  }

  function test_input($data){

  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);

  	return $data;
  }


?>

  <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  	
<table>
	
	<caption>
		<h2>Simple Form:</h2>
		<P><span>* required field.</span>

	</caption>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name">
		    <span>* <?php echo $nameErr;?></span></td>
	</tr>

	<tr>
		<td>Email:</td>
		<td><input type="text" name="email">
		    <span>* <?php echo $emailErr;?></span></td>
	</tr>

	<tr>
		<td>Address:</td>
		<td><input type="text" name="address">
		    <span>* <?php echo $addressErr;?></span></td>
	</tr>

	<tr>
		<td>Message:</td>
		<td><textarea name="comment" rows="5" cols="40"></textarea></td>
	</tr>

	<tr>
		<td>Gender:</td>
		<td>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<span>* <?php echo $genderErr;?></span></td>
		</td>

	</tr>

	<td>
		<input type="submit" name="submit" value="Submit">
	</td>

</table>

  </form>

  <?php
     echo "<h2>Your given values are as:</h2>";
     echo $name;
     echo "</br>";

     echo $email;
     echo "</br>";

     echo $address;
     echo "</br>";

     echo $comment;
     echo "</br>";

     echo $gender;
     echo "</br>";
  ?>

</body>
</html>