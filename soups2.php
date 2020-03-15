<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>

<h1>Mmm...soups</h1>
<?php // Script 7.2 - soups2.php 

ini_set('display_errors', 1); // error handling

// array 
$soups = [
	'Monday' => 'Clam Chowder',
	'Tuesday' => 'Butternut Squash',
	'Wednesday' => 'Italian Sausage',
];

// count and print the current number of elements:
$count1 = count($soups);
print "<p>The soups array originally had $count1 elements.</p>";

// add three items to the array:
$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';
$soups['Sunday'] = 'Tikka Masala';

// count and print the number of elements again:
$count2 = count($soups);
print "<p>After adding 3 more soups, the array now has $count2 elements.</p>";

// print the contents of array
print_r($soups);

?>
</body>
</html>