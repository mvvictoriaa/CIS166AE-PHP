<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Larry Ullman's Books and Chapters</title>
</head>
<body>
<h1>Some of Larry Ullman's Books</h1>

<?php // Script 7.4 - books.php

ini_set('display_errors', 1); // error handling

// first array
$phpvqs = [1 => 'Getting Started with PHP', 'Variables', 'HTML Forms and PHP', 'Using Numbers'];

// second array
$phpadv = [1 => 'Advanced PHP Techniques', 'Developing Web Applications', 'Advanced Database Concepts', 'Basic Object-Oriented Programming'];

// third array
$phpmysql = [1 => 'Introduction to PHP', 'Programming with PHP', 'Creating Dynamic Websites', 'Introduction to MySQL'];

// multidimensional array
$books = [
	'PHP VQS' => $phpvqs,
	'PHP Advanced VQP' => $phpadv,
	'PHP and MySQL VQP' => $phpmysql
];

// print values
print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
print "<p>The fourth chapter of my fourth book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";

// foreach
foreach ($books as $title => $chapters) {
	print "<p>$title";
	foreach ($chapters as $number => $chapter) {
		print "<br />Chapter $number is $chapter";
	}
	print '</p>';
}

?>
</body>
</html>
