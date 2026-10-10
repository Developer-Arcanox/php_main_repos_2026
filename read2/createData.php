<?php

include "connection.php";

$emp_name = $_POST["empName"];
$emp_age = $_POST["empAge"];
$emp_salary = $_POST["empSalary"];

$statement = $connection->prepare("INSERT INTO employees (employeeName, employeeAge, employeeSalary) VALUES (?, ?, ?)");

$statement->execute([$emp_name, $emp_age, $emp_salary]);

header("Location: index.php");
