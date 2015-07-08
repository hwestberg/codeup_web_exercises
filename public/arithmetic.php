<?php 
function add($a, $b)
{
    echo $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
    // Add code here
}

function multiply($a, $b)
{
    return $a * $b;
    // Add code here
}

function divide($a, $b)
{
	return $a / $b;
    // Add code here
}

function modulus($a, $b)
{
	return $a % $b;
}

// Add code to test your functions hereg
$a = 10;
$b = 5;

echo add($a, $b) . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;
echo modulus($a, $b) . PHP_EOL;

 ?>