<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Registration Results</h1>

<?php // Script 6.3 - handle_reg2.php

error_reporting(E_ALL);  // error handling

$okay = true; // flag variable

// validate email
if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = false;
}

// validate password
if (empty($_POST['password'])) {
	print '<p class="error">Please enter your password.</p>';
	$okay = false;
}

// success message
if ($okay) {
	print '<p>You have been successfully registered (but not really).</p>';
	}
	
// example | output if current time is less than 20hrs
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}

?>
</body>
</html>