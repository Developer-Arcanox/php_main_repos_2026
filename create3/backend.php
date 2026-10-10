<?php

$customer_name = $_GET["customerName"];
$customer_email = $_GET["customerEmail"];
$customer_age = $_GET["customerAge"];

$connection = new PDO("mysql:host=localhost;dbname=2026_900tts", "root", "");

$statement = $connection->prepare("INSERT INTO customers (customerName, customerEmail, customerAge) VALUES (?, ?, ?)");

$statement->execute([$customer_name, $customer_email, $customer_age]);

?>