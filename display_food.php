<?php
	// connect to database
	$servername = "localhost";
	$username = "root";
	$password = "as3843";
	$dbname = "students";
	$conn = new mysqli($servername, $username, $password, $dbname);

	// check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// retrieve selected food ID from form data
	$foodId = $_POST["foodId"];

	// query database for food name
	$sql = "SELECT name FROM food WHERE id = " . $foodId;
	$result = $conn->query($sql);

	// display food name
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		echo "Selected Food Item: " . $row["name"];
	} else {
		echo "Food item not found";
	}

	// close database connection
	$conn->close();
?>
