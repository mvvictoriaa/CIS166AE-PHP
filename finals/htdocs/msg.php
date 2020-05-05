<?php // Finals - msg.php
/* Order Confirmation. */

// Set the page title and include the header file:
define('TITLE', 'Comment Successfully Added');
include('header.html');		

if(isset($_GET['id'])){
echo '<p class="text--success">Hello, ' . '<b>' . $_GET['id'] . '.' . '</b>' . 'Your comment has been successfully added. We appreciate your feedback. 😄' . '</p>';
		header('Refresh: 10; URL=view_comments.php');
} else {
	
echo 'An error has occurred. Please try again.';

}

// Establish database connection:
include('mysqli_connect.php');
			

include('footer.html'); // Need the footer.

?>	


