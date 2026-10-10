<?php

include "connection.php";

$emp_id = $_POST["emp_id"];
$emp_name = $_POST["empName"];

$statement = $connection->prepare("UPDATE employees_data SET EmployeeName = ? WHERE id = ?");

$statement->execute([$emp_name, $emp_id]);

header("Location: index.php");