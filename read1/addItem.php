<?php

include "connection.php";

$grocery_name = $_POST["g_name"];
$grocery_quantity = $_POST["g_quantity"];
$grocery_price = $_POST["g_price"];

$statement = $connection->prepare("INSERT INTO groceries (name_, quantity, price) VALUES (?, ?, ?)");

$statement->execute([$grocery_name, $grocery_quantity, $grocery_price]);

header("Location: index.php");


