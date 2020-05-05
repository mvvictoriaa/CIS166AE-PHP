<?php // Script 13.9 - edit.php
/* This script allows you to modify your order. */

// Define a page title and include the header:
define('TITLE', 'Edit a Comment');
include('header.html');

print '<div id="form" style="max-width:500px;margin:auto;">' . '<h2>Comment Editor</h2>';

// Need the database connection:
include('mysqli_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0) ) { 

// Display the entry form:
// Define the query:
$query = "SELECT comment, customer_name FROM comments WHERE id={$_GET['id']}";
if ($result = mysqli_query($dbc, $query)) { // Run the query.

	$row = mysqli_fetch_array($result); // Retrieve the information.
	
	// Make the form:
	print '<form action="edit.php" method="post">
		<p class="label"><b>Feedback</b><br> <textarea name="comment" rows="5" cols="30">' . htmlentities($row['comment']) . '</textarea></label></p>
		<p class="label"><b>From</b> <input type="text" name="customer_name" value="' . htmlentities($row['customer_name']) . '"></label></p>';
	
	// Complete the form:
	print '</label></p>
		<input type="hidden" name="id" value="' . $_GET['id'] . '">
		<p><input type="submit" name="submit" value="submit" class="button-submit"></p>
</form>';		

print '</div>';
} else { // Couldn't get the information.
		print '<p class="error">Could not retrieve the quotation because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0)) { // Handle the form.

	// Validate and secure the form data:
	$problem = FALSE;
	if ( !empty($_POST['comment']) && !empty($_POST['customer_name']) ) {

		// Prepare the values for storing:
		$comment = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['comment'])));
		$customer_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['customer_name'])));

	} else {
		print '<p class="error">Please fill up the required fields.</p>';
		$problem = TRUE;
	}

	if (!$problem) {

		// Define the query.
		$query = "UPDATE comments SET comment='$comment', customer_name='$customer_name' WHERE id={$_POST['id']}";
		if ($result = mysqli_query($dbc, $query)) {
			print '<p class="text--success">Thank you. Your feedback has been updated.</p>';
					header('Refresh: 7; URL=view_comments.php');
		} else {
			print '<p class="error">Could not update the quotation because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
		}

	} // No problem!

} else { // No ID set.
	print '<p class="error">This page has been accessed in error.</p>';
} // End of main IF.

mysqli_close($dbc); // Close the connection.

include('footer.html'); // Include the footer.
?>