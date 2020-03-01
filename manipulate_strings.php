<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Finding Substrings</title>
</head>

<body>
<?php // Script 1.0 - manipulate_strings.php

error_reporting(E_ALL);

$first_name = "Victoria";
$last_name = "Torreno";
print "<b>$first_name</b> | <b>substr()</b> extracts part of the string, leaving the last 4 characters as indicated.<br>";
echo $first_name = substr($first_name, 4) ."<br>"; // substr() | example #1

print "<b>Maria Victoria Torreno</b> | <b>strlen()</b> counts the number of characters in a string, including spaces or punctuations if applicable.</b><br>";
echo strlen('Maria Victoria Torreno') ."<br>"; // strlen() | example #2

$name = "Maria Torreno";
print "Hello, my name is <b>$name</b> | <b>str_ireplace()</b> replaces a substring with a new value.<br>";
echo str_ireplace("Maria","Victoria","Hello, my name is <b>$name</b>"); // str_ireplace() | example #3

?>
</body>
</html>