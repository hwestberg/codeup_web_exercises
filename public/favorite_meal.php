<!DOCTYPE html>
<?php
  var_dump($_POST);
?>

<html> 
	<head>
		<title>My Favorite Meal</title>
	</head>
	<body>
		<header>
			<h1>Chicken Tikka Masala</h1>
			<img src="http://erecipeguide.com/sites/default/files/chiken%20tikka%20masala_0.png" width="300">
		</header>
		<main>	
			<section>
				<h2>Ingredients</h2>
				<ol>
					<li>Chicken</li>
					<li>Tomatoes</li>
					<li>Indian Spices</li>
					<li>Heavy Cream</li>	
				</ol>
			</section>
			<section>
				<form method="POST" action="/favorite_meal.php">
					<p>
						<label for="suggestion">Suggestion</label>
						<input id="suggestion" type="text"name="suggestion" placeholder="Suggestions?">
					</p>
					<p>
						<input type="submit" value="Submit">
					</p>
				</form>
			</section>
			<aside>
				<h3>Other Foods You May Like</h3>
				<ul>
					<li><a href="#" title="Spaghetti">Spaghetti</a></li>
					<li><a href="#" title="Chicken Parmesan">Chicken Parmesan</a></li>
					<li><a href="#" title="Penne Rosa">Penne Rosa</a></li>
				</ul>	
			</aside>
		</main>
	</body>
</html>