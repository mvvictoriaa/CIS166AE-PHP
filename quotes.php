<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Quotes</title>
</head>

<body>
<?php // Script 2.4 - quotes.php

# String Variables | Single/Double Quotation Marks doesn't matter
$first_name = 'Cody';
$last_name = "James";

# Single/Double Quotation Marks Matters
$name1 = '$first_name $last_name';
$name2 = "$first_name $last_name";

print "<h1>Double Quotes</h1>
<p>name1 is $name1 <br>
name2 is $name2</p>";
print '<h1>Single Quotes</h1>
<p>name1 is $name1 <br>
name2 is $name2</p>';

?>
</body>
</html>