<?php 

	$animals = ["Kucing", "Kelilinci", "Kuda", "Kangguru", "Koala", "Keledai"];
	echo $animals[0]; // Output: Kucing
	echo "<br>";
	echo $animals[2]; // Output: kuda
	echo "<br>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array</title>
</head>
<body>
	<p>Nama-nama hewan</p>
	<ul>
		<?php
			foreach($animals as $animal) {
				echo "<li>". $animal. "</li>";
			}
		?>
	</ul>
</body>
</html>