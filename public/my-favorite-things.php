<?php 
$favoriteThings = [
	"avocados", 
	"my dog", 
	"hiking", 
	"yoga", 
	"family", 
	"swimming", 
	"chocolate", 
	"Parks and Rec", 
	"learning", 
	"writing", 
	"greek yogurt", 
	"trying new foods",
	"coding!" 
];

 ?>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	<title></title>

<style type="text/css">

html {
	font-size: 1em;
	color: white;
	font-family: 'Architects Daughter', cursive;
	background-image: url(img/symphony.png);
}

table {
	margin: auto;
	font-size: 1.5rem;
	width: 20%;
	
	
}

td, tr {
	border-radius: 10px;
	padding: 4px;
}

.even {
	background-color: #D500F9;
	text-align: center;
}

.odd, .title {
	color:#D500F9;
	text-align: center;
}
</style>
</head>
<body>
	<table>
		<tr><td class='title'>Fav Things!</td></tr>
		<?php foreach ($favoriteThings as $key => $favoriteThing):?> 
			<?php if ($key % 2 == 0): ?>		
			 	<tr><td class='even'> 
			 		<?= ucfirst($favoriteThing) ?> 
			 	</td></tr>
			<?php  else: ?>  
				<tr><td class='odd'> 
					<?= ucfirst($favoriteThing) ?> 
			<?php endif; ?> 
				</td></tr>
		<?php endforeach; ?> 
	</table>
</body>
</html>