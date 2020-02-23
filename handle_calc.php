<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Cost Calculator</title>
	<style type="text/css">
		.number {font-weight:bold;}
</head>
<body>

<?php // Script 4.2 - handle_calc.php /* This script takes values from calculator.html 
										and performs total cost and monthly payment calculations. */
										
// Address error handling, if you want.
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Get the values from the $_POST array:
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

// Calculate the total:
$total = $price * $quantity;
$total = $total + $shipping;
$total = $total - $discount;

// Determine the tax rate:
$taxrate = $tax / 100;
$taxrate = $taxrate + 1;

// Factor in the tax rate:
$total = $total * $taxrate;

//Calculate the monthly payments:
$monthly = $total / $payments; 