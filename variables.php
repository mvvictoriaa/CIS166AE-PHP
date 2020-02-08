<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Variables</title>
</head>

<body>
<?php // Script 2.3 - variables.php

# contact details
$first_name = "Victoria";
$lastName = "Torreno";
$street = "1202 W. Thomas Rd.";
$city = "Phoenix";
$state = "AZ";
$zipCode = "85013";
$phone_number = "(602) 432-3407";

# print details 
print "<p>My name is $first_name $lastName.<br> My address is $street $city , $state $zipCode.<br> 
For more details, you can reach me at $phone_number.</p>";

?>
</body>
</html>