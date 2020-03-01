<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.5 - handle_post2.php

error_reporting(E_ALL); // display all errors

// Get values from the _POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting'], false);

// Full name variable:
$name = $first_name .' ' .$last_name;

print "<div>Thank you, $name, for your posting: 
<p>$posting</p></div>";

// Make a link to another page:
$name = urlencode($name);
$email = urlencode($_POST['email']);
print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";


?>
</body>
</html>