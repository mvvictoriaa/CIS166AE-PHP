<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>

<h1>Mmm...soups</h1>
<?php // Script 7.1 - soups1.php 

ini_set('display_errors', 1); // error handling

// array 
$soups = [
	'Monday' => 'Clam Chowder',
	'Tuesday' => 'White Chicken Chili',
	'Wednesday' => 'Vegetarian',
	'Thursday' => 'French Onion',
	'Friday' => 'Slow Cooker Thai Butternut Squash Soup',
	'Saturday' => 'Corn and Leek Bisque',
	'Sunday' => 'Tikka Masala'
];

// print array
print "<p>$soups</p>";

// print the contents of array
print_r($soups);

?>
</body>
</html>