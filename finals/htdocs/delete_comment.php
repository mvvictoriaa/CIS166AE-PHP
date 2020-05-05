  
<?php // Script 13.10 - delete_quote.php
/* This script deletes a quote. */

// Define a page title and include the header:
define('TITLE', 'Delete Comment');
include('header.html');

print '<h2>Are you sure you want to delete your comment?</h2>';

// Need the database connection:
include('mysqli_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0) ) { // Display the quote in a form:

	// Define the query:
	$query = "SELECT comment, customer_name FROM comments WHERE id={$_GET['id']}";
	if ($result = mysqli_query($dbc, $query)) { // Run the query.

		$row = mysqli_fetch_array($result); // Retrieve the information.

		// Make the form:
		print '<form action="delete_comment.php" method="post">
		<div><blockquote>' . $row['comment'] . ' -' . $row['customer_name'] . '</blockquote>';

		print '</div><br><input type="hidden" name="id" value="' . $_GET['id'] . '">
		<p><center><input type="submit" name="submit" value="YES" class="button-submit"></center></p>
		</form>';

	} else { // Couldn't get the information.
		print '<p class="error">Could not retrieve the quote because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0) ) { // Handle the form.

	// Define the query:
	$query = "DELETE FROM comments WHERE id={$_POST['id']} LIMIT 1";
	$result = mysqli_query($dbc, $query); // Execute the query.

	// Report on the result:
	if (mysqli_affected_rows($dbc) == 1) {
		print '<p class="text-success">Your feedback has been deleted.</p>';
			header("Location: index.php?id=$customer");
	} else {
		print '<p class="error">OOPS. SOMETHING WENT WRONG.</p>';
	}

} else { // No ID received.
	print '<p class="error">This page has been accessed in error.</p>';
} // End of main IF.

mysqli_close($dbc); // Close the connection.

include('footer.html');
?>