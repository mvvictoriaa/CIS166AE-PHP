<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Date Menus</title>
</head>
<body>
<?php // Script 10.1 - menus.php
/* This script defines and calls a function. */

// fxn makes 3 pull-down menus for the months, days, and years.
function make_date_menus() {

// array to store the months:
$months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// month pull-down menu:
print '<select name="month">';
foreach ($months as $key => $value) {
	print "\n<option value=\"$key\">$value</option>";
}
print '</select>';

// day pull-down menu:
print '<select name="day">';
for ($day = 1; $day <= 31; $day++) {
	print "\n<option value=\"$day\">$day</option>";
}
print '</select>';

// year pull-down menu:
print '<select name="year">';
$start_year = date('Y');
for ($y = $start_year; $y <= ($start_year + 10); $y++) {
	print "\n<option value=\"$y\">$y</option>";
}
print '</select>';

} // end of make_date_menus() function.

// create the form:

print '<form action="" method="post">';
make_date_menus();
print '</form>';

?>
</body>
</html>