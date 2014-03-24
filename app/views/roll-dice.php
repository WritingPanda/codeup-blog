<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Roll Dice</title>
</head>
<body>
    
    <h1>Your guess is: <?= $guess; ?>.</h1>

    <h2>The random number is: <?= $rand;?> </h2>

	<h3>
		<?php 
			if ($guess == $rand) {
				echo "That's right! Nice work!";
			} else {
				echo "Sorry, not right. Try again by refreshing the page.";
			}
 		?>
 	</h3>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.0.js"></script>
</body>
</html>