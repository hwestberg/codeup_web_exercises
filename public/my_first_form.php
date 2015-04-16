
<?php
var_dump($_POST);
?>

<html>
	<head>
		<title>My First Form</title>
		<link rel="stylesheet" type="text/css" href="style_practice.css">
	</head>
	<body>
		<main>
			<header> 
				<h1>My First Form</h1>
			</header> 			
			<form method="POST" action="/my_first_form.php">
				<section>
					<h1>User Login</h1>
							<p>
						<label for="username">Username</label>
						<input id="username" name="username" type="text" placeholder="Enter username here">
							</p>
							<p>
								<label for="password">Password!!!</label>
								<input id="password" name="password" type="password" placeholder="GIVE ME YOUR PASSWORD">
							</p>
							<p>
						<!-- <button type="submit" id="button1" name="button1">Submit</button> -->
							</p>
				</section>
				<section>
						<h1>Compose an Email</h1>
							<p>
								<label for="to">To</label>
								<input id="to" type="text" name="recipient" placeholder="Recipient">
							</p>
							<p>
								<label for="From">From</label>
								<input id="from" type="text" name="sender" placeholder="Sender">
							</p>
							<p>
								<label for="subject">Subject</label>
								<input id="subject" type="text" name="subject" placeholder="Subject"> 
							</p>	
							<p>
							<textarea id="email_body" type="text" name="email_body" rows="10" cols="20" placeholder="Write your email here"></textarea>
							</p>
							<p><label>Save a copy to your sent folder?<input type="checkbox" name="save-copy" id="save-copy" value="yes"></label></p>
				</section>
				<section>	
						<h1>Kansas Quiz</h1>
							<ol>
							<li>What is the state capital of Kansas?</li>	
								<label>
									<input type="radio" id="kansas_capital" name="kansas_capital" value="Lawrence">
									Lawrence
								</label>
								<br>
								<label>
									<input type="radio" id="kansas_capital" name="kansas_capital" value="Kansas_City">
									Kansas City
								</label>
								<br>
								<label>
									<input type="radio" id="kansas_capital" name="kansas_capital" value="Topeka">
									Topeka
								</label>
								<br>
								<label>
									<input type="radio" id="kansas_capital" name="kansas_capital" value="Salina">
									Salina
								</label>
							<br>
							<br>
							<li>What is the state flower of Kansas? </li>
							<label>
								<input type="radio" id="kansas-flower" name="kansas-flower" value="marigold">
								Marigold
							</label> 
							<br>
							<label>
								<input type="radio" id="kansas-flower" name="kansas-flower" value="poppy">
								Poppy
							</label>
							<br>
							<label>
								<input type="radio" id="kansas-flower" name="kansas-flower" value="sunflower">
								Sunflower
							</label>
							<br>
							<label>
								<input type="radio" id="kansas-flower" name="kansas-flower" value="daisy">
								Daisy
							</label>
							<br>
							<br>
							<li>Who is the current governor of Kansas?</li>
							<label>
								<input type="radio" id="kansas-governor" name="kansas-governor" value="pat-roberts">
								Pat Roberts
							</label>
							<br>
							<label>
								<input type="radio" id="kansas-governor" name="kansas-governor" value="jerry-moran">
								Jerry Moran
							</label>
							<br>
							<label>
								<input type="radio" id="kansas-governor" name="kansas-governor" value="jerry-moran">
								Sam Brownback
							</label>
							<br>
							<br>
							<li>Which of the following are mascots from Kansas colleges or universities?</li>
							<label>
								<input type="checkbox" name="kansas-mascots" id="kansas-mascots" value="yes">
								Jayhawks
							</label>
							<br>
							<label>
								<input type="checkbox" name="kansas-mascots" id="kansas-mascots" value="yes">
								Wildcats
							</label>
							<br>
							<label>
								<input type="checkbox" name="kansas-mascots" id="kansas-mascots" value="yes">
								WuSchock
							</label>
							<br>
							<label>
								<input type="checkbox" name="kansas-mascots" id="kansas-mascots" value="yes">
								Ram
							</label>
							<br>
							<label>
								<input type="checkbox" name="kansas-mascots" id="kansas-mascots" value="yes">
								Gorilla
							</label>
							<br>
							<label>
								<input type="checkbox" name="kansas-mascots" id="kansas-mascots" value="yes">
								Dolphin
							</label>
							<br>
							<br>
							<li>"Ad astra per aspera" is the Kansas State motto. What does it mean?</li>
							<label><input type="radio" name="ks-saying" id="ks-saying" value="yes">"To the stars through difficulties"</label>
							<br>
							<label><input type="radio" name="ks-saying" id="ks-saying" value="yes">"Across the plains under the stars"</label>
							<br>
							<label><input type="radio" name="ks-saying" id="ks-saying" value="yes">"Kansas is not lame. It's cool!"</label>
							<br>
							<label><input type="radio" name="ks-saying" id="ks-saying" value="yes">"Under the stars, we grow much wheat"</label>
							<br>
							<br>
							<li>What is the state animal of Kansas?</li>
							<select id="state-animal" name="state-animal">
								<option value="1">Field Mouse</option>
								<option value="2" selected>Cow</option>
								<option value="3">Wild Horse</option>
								<option value="4"> Buffalo</option>
								<option value="5">Raccoon</option>
							</select>
							</ol>
					</section>
					<section>
							<h1>Select Testing</h1>
							<label for="alive">Are you alive?</label>
							<select id="alive" name="alive">
							<option value="1">Yes</option>
							<option value="0" selected>No</option>
							</select>
						<input type="submit">
					</section>	
			</form>			
		</main>
	</body>
</html>