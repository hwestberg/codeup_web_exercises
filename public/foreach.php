<?php 

$things = array('Sgt. Pepper', "11", null, 
	array(1,2,3), 3.14, "12 + 7", false, (string) 11);


// g
	
foreach ($things as $value) {
	if (gettype($value) == "scalar") {
		echo $value;
	};
};

foreach ($things as $thing){
	if (is_array($thing)){
		foreach ($thing as $element){
			echo "the type of $element is " . gettype($element);
		}
	} else {
		echo "the type of $value is " . gettype($value);

	}
}
 ?>