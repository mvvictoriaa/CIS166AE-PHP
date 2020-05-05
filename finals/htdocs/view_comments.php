<style>
@font-face { font-family: 8-BIT; src: url('8-BIT.ttf');}
p {
	color: orange;
	font-variant: small-caps;
	font-family: 8-BIT;
}

a:link, a:visited {
	color:orange;
	font-variant: small-caps;
	text-decoration: none;
}

a:hover {
	color:#32ccfe;
	font-variant: small-caps;
	text-decoration: none;
	cursor: pointer;
}
</style>

<?php // Finals - view_comments.php

// Define a page title and include the header:
define('TITLE', 'View All Comments');
include('header.html');

print '<br><h2>TESTIMONIALS</h2>';

// Need the database connection:
include('mysqli_connect.php');

// Define the query:
$query = 'SELECT id, comment, customer_name FROM comments ORDER BY date_entered';

// Run the query:
if ($result = mysqli_query($dbc, $query)) {

	// Retrieve the returned records:
	while ($row = mysqli_fetch_array($result)) {
		
		// Print the record:
		print "<div><blockquote>{$row['comment']} - {$row['customer_name']}</blockquote>\n";
		
		
		// Add adminiistrative links:
		print "<p><b>&laquo;&lbrack;<a href=\"edit.php?id={$row['id']}\"> edit</a> &rbrack;</b>
		&vert; <b>&lbrack;<a href=\"add_comment.php?id={$row['id']}\"> add</a> &rbrack;</b> &vert;
		<b>&lbrack;<b><a href=\"delete_comment.php?id={$row['id']}\"> delete</a> &rbrack;&raquo;</b></p></div>\n";
	
	} // End of while loop.
	
} else { // Query didn't run.
	print '<p class="error">Could not retrieve the data because:<br>' . mysqli_error($dbc) 
			. '.</p><p>The query being run was: ' . $query . '</p>';
} // End of query IF.

mysqli_close($dbc); // Close the connection.

include('footer.html'); // Include the footer.

?>
	