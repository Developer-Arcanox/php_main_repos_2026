<?php

include("connection.php");

$cat_name = $_POST["categoryName"];

$statement = $connection->prepare("INSERT INTO categories (CategoryName) VALUES (?)");

$statement->execute([$cat_name]);

header("Location: index.php");
