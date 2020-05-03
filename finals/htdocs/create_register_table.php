<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create a Table for Registered Customers</title>
</head>
<body>
<?php // Finals - create_register_table.php
/* This script connects to the MySQL server, selects the database, and creates a table. */

// Connect and select:
if ($dbc = @mysqli_connect('localhost', 'root', 'finals4PHP', 'customers')) {

	// Define the query:
	$query = 'CREATE TABLE registered_users ( id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50) NOT NULL,
			email VARCHAR(75) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, date_entered TIMESTAMP NOT NULL) CHARACTER SET utf8 ';
								
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