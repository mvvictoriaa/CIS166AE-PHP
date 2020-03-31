<?php // Script 8.14 - welcome.php 
/* This is the welcome page. The user is redirected here after they successfully log in. */

// Need the session:
session_start();

// Set the page title and include the header file:
define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
include('templates/header2.html');

// print a greeting
print '<h2>Welcome to the J.D. Salinger Fan Club!</h2>');
print '<p>Hello, ' . $_SESSION['email'] . '!</p>';

// print logged in duration:
date_default_timezone_set('America/New_York');
print '<p>You have been logged in since: ' . date('g:i a', $_SESSION['loggedin']) . '.</p>';

// make a logout link:
print '<p><a href="logout.php">Logout</a></p>';

include('templates/footer2.html'); 
?>