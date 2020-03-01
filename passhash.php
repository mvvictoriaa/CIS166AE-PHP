<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Encrypt Data</title>
</head>

<body>
<?php // Script 1.0 - passhash.php

$password = "helloclass";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo  $hashed_password;

?>
</body>
</html>