<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>

<body>
<?php // Script 5.6 - handle_post3.php

error_reporting(0); 

// Get values from the _POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting']);

// Full name variable:
$name = $first_name . ' ' . $last_name;

// Get a word count:
$words = str_word_count($posting);

// Get a snippet of the posting:
$posting = substr($posting, 0, 50);

print "<div>Thank you, $name, for your posting: 
<p>$posting...</p>
<p>($words words)</p></div>";

?>
</body>
</html>