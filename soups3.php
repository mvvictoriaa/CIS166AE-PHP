<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>

<h1>Mmm...soups</h1>
<?php // Script 7.3 - soups3.php 

ini_set('display_errors', 1); // error handling

// array 
$soups = [
	'Monday' => 'Clam Chowder',
	'Tuesday' => 'Butternut Squash',
	'Wednesday' => 'Italian Sausage',
	'Thursday' => 'Chicken Noodle',
	'Friday' => 'Tomato',
	'Saturday' => 'Cream of Broccoli',
	'Sunday' => 'Tikka Masala'
];

// print each key and value:
foreach ($soups as $day => $soup) {
	print "<p>$day: $soup</p>\n";
}

?>
</body>
</html>