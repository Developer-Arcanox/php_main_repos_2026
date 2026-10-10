<?php

include("connection.php");

$emp_id = $_POST["empID"];
$emp_name = $_POST["empName"];
// $emp_age = $_POST["empAge"];
// $emp_salary = $_POST["empSalary"];
// $emp_gender = $_POST["empGender"];
// $emp_skills = implode(",", $_POST["empSkills"]);

$statement = $connection->prepare("UPDATE employees_data SET EmployeeName = ? WHERE id = ?");

$statement->execute([$emp_name, $emp_id]);

header("Location: index.php");
