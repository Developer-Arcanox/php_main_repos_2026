<?php

include "connection.php";

$product_name = $_POST["productName"];
$product_price = $_POST["productPrice"];
$product_category = $_POST["productCategory"];

$statement = $connection->prepare("INSERT INTO products (p_name, p_price, p_category) VALUES (?, ?, ?)");

$statement->execute([$product_name, $product_price, $product_category]);

header("Location: index.php");
