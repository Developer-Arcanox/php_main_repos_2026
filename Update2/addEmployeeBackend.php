<?php

include("connection.php");

$emp_name = $_POST["empName"];
$emp_age = $_POST["empAge"];
$emp_salary = $_POST["empSalary"];
$emp_gender = $_POST["empGender"];
$emp_skills = implode(",", $_POST["empSkills"]);

$statement = $connection->prepare("INSERT INTO employees_data (EmployeeName, EmployeeAge, EmployeeSalary, EmployeeGender, EmployeeSkills) VALUES (?, ?, ?, ?, ?)");

$statement->execute([$emp_name, $emp_age, $emp_salary, $emp_gender, $emp_skills]);

header("Location: index.php");
