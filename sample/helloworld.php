<?php

	// Variable starts with $, string has to use jutumärke, lime ends with semicolon
	$first_name = "Aksel";
	$last_name = "Erit";
	
	// näitab koodi brauserile
	echo $first_name." ".$last_name;

	// > graeter than
	// < smaller than
	// >= greater than or equal
	// <= ..
	// == equal
	// != no equal
	
	$age = 4;
	
	//if age is smaller than or equal to 6, then you
	if($age <= 4){
		echo " yes you can sleep at lunchtime";
	}else{
		echo " no, you are at school";
	
		
	}
	
	
?>

<br>

<?php

	//loop
	
	for ($i=0; $i < $age; $i=$i+1){
		
		//if condition is true
		echo $i;
	}
	
?>
<br>

<?php

echo "Today is ".date("d.m.Y H:i");

?>