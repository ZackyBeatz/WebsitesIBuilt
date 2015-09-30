<?php

	$link = mysqli_connect("localhost", "DATABASEUSER", "DATABASEUSEPASSWORD", "DATABASENAME");

	if (mysqli_connect_error()) {
		
		die("Could not connect to database");

	}

/* Adding Data into our database */

	 /*$query = "INSERT INTO `users` (`name`, `email`, `password`)
VALUES('yourname', 'YOUREMAIL@gmail.com', 'apples')"; */




/* Updating data into our database */

	$query = "UPDATE `users` SET `email`='youremail@hotmail.com' WHERE `id`=5 LIMIT 1";

	mysqli_query($link, $query);



/* Retrieving data from our mySQL database*/

	$query = "SELECT * FROM users";

	if ($result = mysqli_query($link, $query)) {
		
		$row = mysqli_fetch_array($result);

		print_r($row);

	} else {
		echo "it failed";
	}

?>