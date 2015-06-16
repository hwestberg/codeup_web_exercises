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

// Add code to test your functions hereg
$a = 5;
$b = 3;

echo add($a, $b) . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;

 ?>