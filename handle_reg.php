<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>
<h1>Registration Results</h1>

<?php // Script 6.2 - handle_reg.php

error_reporting(E_ALL);  // error handling

$okay = true; // flag variable

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