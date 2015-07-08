<?php  


function getAdjective ()
{
	$adjectives = ["quaint ", "petty ", "stinky ", "smart ", 
	"loverly ", "robust ", "tame ", "rotten ", "mighty ", "boorish ",
	"bellicose ", "pathetic ", "bubbly ", "daffy ", "tenacious ",
	"meek ", "large ", "lumpy ", "nimble ", "creepy ", "crispy ", "wise "];

	$randAdjective =  array_rand($adjectives);
	return $adjectives[$randAdjective];

};

function getNoun ()
{
	$nouns = ["toilet", "dog", "marshmellow", "gnome", "orangutan", 
	"plane", "toe", "laserbeams", "pickle", "king", "llama", 
	"walrus", "pancake", "platypus", "ben", "isaac", "ryan", "unicorn",
	"señor", "socks", "rainbows", "potato salad", "beets", "mermaids", "ninjas", "clam chowder",
	"apps", "pre-birds", "cookies", "pony", "pot-bellied pig"];

	$randNoun =  array_rand($nouns);
	return $nouns[$randNoun];

};
?>
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/border_box.css">
		<link rel="stylesheet" type="text/css" href="css/grids.css">
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,800' rel='stylesheet' type='text/css'>
		<style type="text/css">
			body {
				background-color: #F9FBE7;
			}

			.word {
				margin: auto;
				background-color: #64FFDA;
				border: 2px solid #64FFDA;
				border-radius: 30px;
				margin-top: 10px;
				color: #FF5252;
				opacity: .6;
				font-size: 2rem;
				font-family: 'Dosis', sans-serif;
			}


			.word:hover{
				opacity: 1;
			}
			.title {
				background-color: #FF5252;
				border: 2px solid #FF5252;
				padding: 10px;
				border-radius: 30px;
				color: white;
				font-size: 3rem;
				font-family: 'Dosis', sans-serif;
			}
			.container {
				margin: auto;
				margin-top: 10px;
				text-align: center;
				width: 20%;

			}
		</style>
	</head>
	<body class="container">	
		<div class="title">Your server name shall be:</div>
		<div class="row">
			<div class="row word">
				<p id="adjective"><?= getAdjective() ?> <?php echo getNoun() ?></p>
			</div>
			
		</div>
		
	</body>
	</html>