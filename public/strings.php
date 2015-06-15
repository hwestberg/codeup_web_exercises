<?php 


$myName = 'Hannah';
$introduction = "Hello, my name is $myName";
echo $introduction;

$firstLetter = "L";
$secondLetter = "e";
$thirdLetter = "e";

$middleName = "Hi, my middle name is {$firstLetter}{$secondLetter}{$thirdLetter}";
echo $middleName;

$lyrics = "We don't need no education.\n 
We don't need no thought control.\n All the world's a stage,\n 
And all the men and women are merely players\n
They have their exits and their entrances";

echo $lyrics;


$firstName = 'Joe';
$lastName = 'Blow';
$address = '123 Any Street';


$numbers = array(1, 2, 3, 4, 5);

var_dump($numbers);

print_r($numbers);

$numbersAgain = [1, 2, 3, 4, 5];

echo $numbersAgain[3];

$contacts = [
'first_name' => 'Hannah', 
'last_name' => 'Westberg',
'email' => 'hlwestberg@gmail.com',
'phone'=> '913-461-1006',
 ];

print_r($contacts); 

$test = [
	'person1' => [
		'first_name' => 'Hannah', 
		'last_name' => 'Westberg',
		'email' => 'hlwestberg@gmail.com',
		'phone'=> '913-461-1006',
	],
	'person2'=> [
		'first_name' => 'Josh', 
		'last_name' => 'Freeman',
		'email' => 'joshf@grok.com',
		'phone'=> '210-789-8967',
	],
	'person3'=> [
		'first_name' => 'Raul', 
		'last_name' => 'Ortiz',
		'email' => 'raul@cool.com',
		'phone'=> '210-112-1212',
	]
];

var_dump($test);

echo $test["person1"]["first_name"];

 ?>