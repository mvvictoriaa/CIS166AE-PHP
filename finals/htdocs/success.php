<?php // Finals - success.php
/* Register Confirmation */

// Set the page title and include the header file:
define('TITLE', 'Register Successful');
include('header.html');		

if(isset($_GET['id'])){
echo '<p class="text--success">Hello, ' . '<b>' . $_GET['id'] . '.' . '</b>' . ' You are now registered. Enjoy your shopping! You will now be re-directed to the order form.' 
		. '</p>';
		header('Refresh: 10; URL=index.php');
} else {
	
echo 'An error has occurred. Please try again.';

}

// Establish database connection:
include('mysqli_connect.php');
			

include('footer.html'); // Need the footer.

?>

