<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>PROFILE MANAGEMENT</title>
</head>
<body>
<center>
	<div id="bar">
	<div id="navbar"><h3>PROFILE MANAGEMENT SYSTEM</h3></div>
<h4>Fill up the form</h4>

<fieldset>
 <legend>Form</legend>
	
	<form action="show.php" method="POST" enctype="multipart/form-data">
		<table id="table">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Name" required=""></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" placeholder=""></td>
			</tr>
			<tr>
				<td>Date of birth</td>
				<td><input type="date" name="dob" placeholder=""></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="Male" placeholder="">Male
				<input type="radio" name="gender" value="Female" placeholder="">Female
				<input type="radio" name="gender" value="Others" placeholder="">Others</td>
			</tr>
			<tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="ph_number" placeholder=""></td>
			</tr>
			<tr>
				<td>Nationality</td>
				<td><input type="text" name="state" placeholder=""></td>
			</tr>
			<tr>
				<td>Father's name</td>
				<td><input type="text" name="fname" placeholder=""></td>
			</tr>
			<tr>
				<td>Religion</td>
				<td><input type="text" name="dharma" placeholder=""></td>
			</tr>
			<tr>
				<td>Marital status</td>
				<td><input type="radio" name="mstat" value="Single" placeholder="">Single</td>
				<td><input type="radio" name="mstat" value="Married" placeholder="">Married</td>
			</tr>
			<tr>
				<td>Qualification</td>
				<td><input type="text" name="degree" placeholder=""></td>
			</tr>
			<tr>
				<td>PP photo</td>
				<td><input type="file" name="pimg" placeholder="" value="Upload"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit Details" placeholder=""></td>
			</tr>

		</table>
	</form>	
	 
</fieldset>
<div id="footer"><p>Developed by Team Anveshak</p><p> &copy;No rights reserved at all!</p><div>
</div>


</center>
</body>
</html>