<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.2 - handle_post.php

error_reporting(E_ALL); // display all errors

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting'], false);

$name = $first_name .' ' .$last_name;

print "<div>Thank you, $name, for your posting: 
<p>$posting</p></div>";

?>
</body>
</html>