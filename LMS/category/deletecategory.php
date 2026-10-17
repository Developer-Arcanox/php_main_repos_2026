<?php

include("connection.php");

$id = $_GET["id"];

$statement = $connection->prepare("DELETE FROM categories WHERE id = ?");

$statement->execute([$id]);

header("Location: index.php");
exit;
