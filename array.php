<html>
<head>
<title>
</title>
</head>
<body>
<h1>This is demonstration of array</h1>
<?php

//Array in php
$students=array('Ram','Shyam','Hari','Harihar');//Index array

/*var_dump($students);*/

foreach ($students as $key => $value)
{
	echo "Value is ".$value. "<br>";

}
 
$records=array('name'=>'ram','id'=>'12','address'=>'KTM');/*Associative array*/

/*var_dump($records);*/

foreach($records as $key => $value)
{
	echo "Key is ".$key." value is ".$value."<br>";
}

/*Multidimensional array*/

$array=array(
	array('1','KTM'),
        array('2','PKR'),
	array('3','BKT'));

        var_dump($array);

/*Null datatype demonstration*/
$x="Hello world";
$x=null;
var_dump($x);
echo "<br>";

/*Class demonstration*/

class Books
{
	function Books()
	{
		$this->model = "Internet Programming";
	}
}

$IP=new Books(); //create an object
echo $IP -> model; //show objeect properties

?>

</body>
</html>
