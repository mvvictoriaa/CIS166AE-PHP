<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create A Table</title>
</head>
<body>
<?php // Finals - create_table.php
/* This script connects to the MySQL server, selects the database, and creates a table. */

// Connect and select:
if ($dbc = @mysqli_connect('localhost', 'root', 'finals4PHP', 'customers')) {

	// Define the query:
	$query = 'CREATE TABLE customer ( id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, 
		street VARCHAR(100) NOT NULL, city VARCHAR(35) NOT NULL, state CHAR(2) NOT NULL, zip_code CHAR(10) NOT NULL, phone_number INT(11) NOT NULL, 
		email_address VARCHAR(75) NOT NULL, order_coffee VARCHAR(100) NOT NULL, date_entered DATETIME NOT NULL) CHARACTER SET utf8 ';
								
	// Execute the query:
	if (@mysqli_query($dbc, $query)) {
		print '<p>The table has been created!</p>';
	} else {
		print '<p style="color: red;">Could not create the table because:<br>' . mysqli_error($dbc) 
						. '.</p><p>The query being run was: ' . $query . '</p>';
}

	mysqli_close($dbc); // Close the connection.
	
} else { // Connection failure.
	print '<p style="color: red;">Could not connect to the database:<br>' .mysqli_connect_error() . '.</p>';
}

?>
</body>
</html>