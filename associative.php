<form action="associative.php" method="POST">
<input type="text" name="char">
<input type="submit" name="submit" value="submit">
</form>
<?php
$name=$_POST['char'];
switch($name){
case 'a':
case 'A':echo "Vowel";
		break;
case 'e':
case 'E':echo "Vowel";
		break;
		case 'i':
   case 'I':echo "Vowel";
   break;
   case 'o':
   case 'O':echo "Vowel";
           break; 
  case 'U':
   case 'u':echo "Vowel";
   break;
   default:echo "This is not vowel idiot";
   break;
}


?>

