<?php 

include("connection.php");

$id = $_POST["empID"];
$emp_name = $_POST["empName"];
$emp_age = $_POST["empAge"];

$statement = $connection->prepare("UPDATE employees_data SET EmployeeName = ?, EmployeeAge = ? WHERE id = ?");

$statement->execute([$emp_name, $emp_age, $id]);

header("Location: index.php");