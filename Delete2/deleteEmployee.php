<?php

include "connection.php";

$id = $_GET["id"];

$statement = $connection->prepare("DELETE FROM employees_data WHERE id = ?");

$statement->execute([$id]);

header("Location: index.php");
