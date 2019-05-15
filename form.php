
<?php

$fruits=array('mango','apple','orange','papaya','Kiwi');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Password strength checker</title>
</head>
<body>
	<center>
<header>
	<nav>
		<ul >
			<li"><a href="#" >HOME</a></li>
			<li><a href="contacts.html">CONTACTS</a></li>
			<li><a href="about.html">ABOUT</a></li>
		</ul>
	</nav>
</header>

<main>
	<h1>Welcome</h1>
<?php
 echo "<ul>";
foreach ($fruits as $fruit) {
	echo "<li>".$fruit."</li>";
}
echo "</ul>";
?>
</main>
    
 
    <footer>
    	<p>&copy; All rights reserved</p>
    	<p>Team Anveshak.com</p>
    </footer>
</center>
</body>
</html>

