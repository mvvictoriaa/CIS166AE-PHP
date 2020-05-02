<?php // Finals - mysqli_connect.php

// Connect to the database:
$dbc = mysqli_connect('localhost', 'root', 'finals4PHP', 'customers');

// Set the character set:
mysqli_set_charset($dbc, 'utf8');