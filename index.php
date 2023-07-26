<head>
    <title>My Kinsta Static Website</title>
</head>
<body>

<header>
    <h1>Welcome to My Kinsta Static  Website :) </h1>
</header>
    <link rel="stylesheet" href="styles.css">
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<section id="home">
    <h2>Home</h2>
    <p>This is the home section of the website.</p>
</section>

<section id="about">
    <h2>About</h2>
    <p>This is the about section of the website.</p>
</section>

<section id="contact">
    <h2>Contact</h2>
    <p>This is the contact section of the website.</p>
    <p>Email: idelev@kinsta.com</p>
</section>

<footer>
    <p>&copy; 2023 My Kinsta Static Website. All rights reserved.</p>
</footer>
<!DOCTYPE html>
<html>
	
<head>
	<title>
		How to call PHP function
		on the click of a Button ?
	</title>
</head>

<body style="text-align:center;">
	
	<h1 style="color:green;">
	</h1>
	

	<?php
	
		if(isset($_POST['button1'])) {
			echo "I love Kinsta!";
		}
		if(isset($_POST['button2'])) {
			echo "Kinsta is the best company hosting provider!";
		}
	?>
	
	<form method="post">
		<input type="submit" name="button1"
				value="Kinsta_Love"/>
		
		<input type="submit" name="button2"
				value="Best_company?"/>
	</form>
</body>

</html>

</body>

