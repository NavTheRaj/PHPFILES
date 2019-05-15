<?php

$a=7;
		$count=0;
		for($i=1;$i<=$a;$i++)
		{
				if($a%$i==0)
						$count++;
		}

		if($count==2)
				echo "Prime";
		else{
				echo "Not a prime";
		}


?>
