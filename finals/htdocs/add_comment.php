<?php // Finals - add_comment.php

// Define a page title and include the header:
define('TITLE', 'Leave a Review');
include('header.html');
	
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
	// Check for each value...
	if (empty($_POST['comment'])) {
		$problem = true;
	print '<p class="text--error">Please enter a valid remark.</p>';
	}

	if (empty($_POST['customer_name'])) {
		$problem = true;
	print '<p class="text--error">Please enter a valid name.</p>';
	}
	
	// Validate and secure the form data:
	$problem = FALSE;
	if ( !empty($_POST['comment']) && !empty($_POST['customer_name']) ) {
		
		// Establish database connection:
		include('mysqli_connect.php');
		
		// Prepare the values for storing:
		$comment = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['comment'])));
		$customer = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['customer_name'])));

		// Define the query:
		$myquery = "INSERT INTO comments (comment, customer_name) VALUES ('$comment', '$customer')";
		mysqli_query($dbc, $myquery);
		
		// Execute the query:
		if (@mysqli_query($dbc, $myquery)) {
			
            echo '<p class="text--success">Your feedback has been submitted. Thank you for shopping at Shoppee Coffee.</p>';
			header("Location: msg.php?id=$customer");
 
		} else {
	
			echo '<p class="text--error">There was a problem with your submission.</p>';
			
		}
	
	mysqli_close($dbc); // Close the connection.
	} // No problem!
} // End of form submission IF.
?>
<div id="form" style="max-width:500px;margin:auto;">
<h2>We highly appreciate your feedback.</h2>
<br>
<h3>Please leave a comment below.</h3>
<hr1>
<br>
<form method="post" action="add_comment.php">  
	<p class="label"><b>Feedback</b> <br><textarea name="comment" rows="5" cols="30"></textarea></p>
	<p class="label"><b>From</b> <input type="text" name="customer_name"></p>
	<p class="label"><input type="submit" name="submit" value="submit" class="button-submit"></p>
</form>
</div>

<?php 

include('footer.html'); // Need the footer.

?>
