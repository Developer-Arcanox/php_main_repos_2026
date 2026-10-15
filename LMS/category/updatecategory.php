<?php

include("connection.php");

$cat_id = $_POST["categoryID"];
$cat_name = $_POST["categoryName"];

$statement = $connection->prepare("UPDATE categories SET CategoryName = ? WHERE id = ?");

$statement->execute([$cat_name, $cat_id]);

header("Location: index.php");
