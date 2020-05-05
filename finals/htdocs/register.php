<?php // Finals - register.php
/* Registration page. */

// Set the page title and include the header file:
define('TITLE', 'Register');
include('header.html');
	
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
	// Check for each value...
	if (empty($_POST['username'])) {
		$problem = true;
	print '<p class="text--error">Please enter a username!</p>';
	}

	if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1) ) {
		$problem = true;
	print '<p class="text--error">Please enter your email address!</p>';
	}

	if (empty($_POST['password1'])) {
		$problem = true;
	print '<p class="text--error">Please enter a password!</p>';
	}

	if ($_POST['password'] != $_POST['password1']) {
		$problem = true;
	print '<p class="text--error">Your password did not match your confirmed password!</p>';
	}
	
	// Validate and secure the form data:
	$problem = FALSE;
	if ( !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
		
		// Establish database connection:
		include('mysqli_connect.php');
		
		// Prepare the values for storing:
		$username = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['username'])));
		$email = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['email'])));
		$password = sha1($_POST['password']);

		// Define the query:
		$query = "INSERT INTO registered_users (username, email, password) VALUES ('$username', '$email', '$password')";
		mysqli_query($dbc, $query);
		
		// Execute the query:
		if (@mysqli_query($dbc, $query)) {
			
            $_SESSION['username'] = $username;
            header("Location: success.php?id=$username");
 
		} else {
	
			echo '<p class="text--error">There was a problem with your registration.</p>';
			
		}
	
	mysqli_close($dbc); // Close the connection.
	} // No problem!
} // End of form submission IF.
?>

<div id="form" style="max-width:500px;margin:auto;">
<h2>Registration Form</h2>
<br>
<h3>Register to earn rewards.</h3>
<hr1>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">  
	<p class="label"><b>Username</b></label><br> <input type="text" name="username" onfocus="this.value=''" value="username"></p>
	<p class="label"><b>Email Address</b></label><br> <input type="email" name="email" onfocus="this.value=''" value="email@domain.com"></p>
	<p class="label"><b>Password</b></label><br> <input type="password" name="password" onfocus="this.value=''" value="password"></p>
	<p class="label"><b>Confirm Password</b></label><br> <input type="password" name="password1" onfocus="this.value=''" value="confirm password" ></p>
	<p><input type="submit" name="submit" value="submit" class="button-submit"></p>
</form>
</div>

<?php 

include('footer.html'); // Need the footer.

?>
