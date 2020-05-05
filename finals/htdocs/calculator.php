<?php // Finals - index.php 

// Define a page title and include the header:
define('TITLE', 'Free Calculator');
include('header.html');

// tax rate 
$tax = 5.7;

// calculate function()

function total($quantity, $price) {
	
	global $tax;
	
	$total = $quantity * $price; // calculation
	$taxrate = ($tax / 100) + 1; // add the tax
	$total = $total * $taxrate;
	$total = number_format($total, 2); // formatting
	
	return $total; // return the value.
} // end of function.

// check for a form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// check for values:
	if ( is_numeric($_POST['quantity']) AND is_numeric($_POST['price']) ) {
		$total = total($_POST['quantity'], $_POST['price']);
		echo '<p class="text--success">Your total is ' . '$<span style=\"font-weight: bold;\">' . $total . '</span>, including the ' . $tax . ' percent tax rate.' 
			. ' You can now start shopping, enjoy. 😄</p>';
				header('Refresh: 10; URL=index.php');
	} else { // inappropriate values entered.
		print '<p style="color: red;">Please enter a valid quantity and price!</p>';
	}
}

?>
<div id="form" style="max-width:500px;margin:auto;">
<h2>Free Calculator for our beloved customers. 😄</h2>
<br>
<h3>Tax included. 5.7% tax rate.</h3>
<hr1>
<br>
<form action="calculator.php" method="post">
	<p class="label"><b>Quantity:</b> <input type="int" name="quantity" size="2"></p>
	<p class="label"><b>Price:</b> <input type="int" name="price" size="3"></p>
	<input type="submit" name="submit" value="Calculate!" class="button-submit">
</form>

<?php 

include('footer.html'); // Need the footer.

?>
