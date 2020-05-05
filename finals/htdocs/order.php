<?php // Finals - order.php
/* ----- ORDER FORM ------- */

// Set the page title and include the header file:
define('TITLE', 'Order');
include('header.html');
	
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
	// Check for each value...
	if (empty($_POST['first_name'])) {
		$problem = true;
	print '<p class="text--error">Please enter your name.</p>';
	}

	if (empty($_POST['email_address']) || (substr_count($_POST['email_address'], '@') != 1) ) {
		$problem = true;
	print '<p class="text--error">Please enter your email address.</p>';
	}

	if (empty($_POST['last_name'])) {
		$problem = true;
	print '<p class="text--error">Please enter your last name.</p>';
	}
	
	if (empty($_POST['street'])) {
		$problem = true;
	print '<p class="text--error">Please enter a valid address.</p>';
	}

	if (empty($_POST['city'])) {
		$problem = true;
	print '<p class="text--error">Please enter a valid city.</p>';
	}
	
	if (empty($_POST['state'])) {
		$problem = true;
	print '<p class="text--error">Please enter a valid state code.</p>';
	}	
	
	if (empty($_POST['zip_code'])) {
		$problem = true;
	print '<p class="text--error">Please enter a valid zip code.</p>';
	}

	if (empty($_POST['phone_number'])) {
		$problem = true;
	print '<p class="text--error">Please enter a valid phone number.</p>';
	}
	
	if (empty($_POST['order_coffee'])) {
		$problem = true;
	print '<p class="text--error">Please select your order.</p>';
	}
	
	// Validate and secure the form data:
	$problem = FALSE;
	if ( !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email_address']) 
			&& !empty($_POST['street']) && !empty($_POST['city']) && !empty($_POST['order_coffee']) ) {
		
		// Establish database connection:
		include('mysqli_connect.php');
		
		// Prepare the values for storing:
		$fname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['first_name'])));
		$lname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['last_name'])));
		$email = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['email_address'])));
		$address = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['street'])));
		$city = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['city'])));
		$state = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['state'])));
		$zip_code = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['zip_code'])));
		$phone = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['phone_number'])));
		$order = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['order_coffee'])));
		$quantity = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['quantity'])));		

		// Define the query:
		$sql = "INSERT INTO customer_order (first_name, last_name, street, city, state, zip_code, phone_number, email_address, order_coffee, quantity) 
				VALUES ('$fname', '$lname', '$address', '$city', '$state', '$zip_code', '$phone', '$email', '$order', '$quantity')";
		mysqli_query($dbc, $sql);
		
		if (mysqli_affected_rows($dbc) == 1) {
			            $_SESSION['first_name'] = $fname;
            header("Location: confirmation.php?id=$fname");
 
		} else {
	
			echo '<p class="text--error">There was a problem with your order. Please try again.</p>';
			
		}
	
	mysqli_close($dbc); // Close the connection.
	
	} // No problem!
} // End of form submission IF.
?>

<div id="form" style="max-width:500px;margin:auto;">
<h2>Order Form</h2>
<br>
<h3>Please fill up the form to complete your order.</h3>
<hr1>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">  
	<p class="label"><b>First Name</b><br> <input type="text" name="first_name" onfocus="this.value=''" value="John"></p>
	<p class="label"><b>Last Name</b><br> <input type="text" name="last_name" onfocus="this.value''" value="Doe"></p>
	<p class="label"><b>Email Address</b><br> <input type="email" name="email_address" onfocus="this.value=''" value="email@domain.com"></p>
	<p class="label"><b>Address</b> &nbsp;<input type="text" name="street" onfocus="this.value=''" value="Street Address"><br>
	<b>City</b> &emsp;&ensp;&ensp;<input type="text" name="city" onfocus="this.value=''" value="City"><br>
	<b>State</b> &emsp;&ensp;<input type="text" name="state" onfocus="this.value=''" value="State"><br>
	<b>Zip Code</b> &nbsp;<input type="text" name="zip_code" onfocus="this.value=''" value="85000"><br>
	<b>Phone #</b> &ensp;<input type="text" name="phone_number" onfocus="this.value=''" value="(480) 555-2222"></p>
	<p class="label"><b>Please select your order:</b></p><br>
	<p class="order"><input type="radio" name="order_coffee" value="French Roast Coffee">$30 French Roast Coffee</p>
	<p class="order"><input type="radio" name="order_coffee" value="House Blend">$25 House Blend</p>
	<p class="order"><input type="radio" name="order_coffee" value="Colombian Coffee">$19 Colombian Coffee</p>
	<p class="label"><b>Quantity</b> &ensp;<input type="number" id="quantity" name="quantity" min="1" max="50">
	<p><input type="submit" name="submit" value="submit" class="button-submit"></p>
</form>
</div>

<?php 

include('footer.html'); // Need the footer.

?>