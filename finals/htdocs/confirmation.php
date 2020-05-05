<?php // Finals - confirmation.php
/* Order Confirmation. */

// Set the page title and include the header file:
define('TITLE', 'Confirmation');
include('header.html');		

if(isset($_GET['id'])){
echo '<p class="text--success">Hello, ' . '<b>' . $_GET['id'] . '.' . '</b>' . 'Your order has been submitted.' . '<br>' 
		. 'Please allow 2-3 days for shipping.' . '<br>' . 'Please leave us a review on the next page. Thank you.😄' . '</p>';
		header('Refresh: 10; URL=add_comment.php');
} else {
	
echo 'An error has occurred. Please try again.';

}

// Establish database connection:
include('mysqli_connect.php');
			

include('footer.html'); // Need the footer.

?>	



