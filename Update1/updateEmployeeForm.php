<?php

include("connection.php");

$id = $_GET["id"];

$statement = $connection->prepare("SELECT * FROM employees_data WHERE id = ?");

$statement->execute([$id]);

$data = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee Details Update</h1>

    <form action="updateEmployeeBackend.php" method="post">
        <input type="hidden" name="empID" value="<?php echo $id ?>">
        <input type="text" name="empName" placeholder="Employee Name" value="<?php echo $data["EmployeeName"] ?>">
        <br><br>
        <input type="text" name="empAge" placeholder="Employee Age">
        <br><br>
        <input type="text" name="empSalary" placeholder="Employee Salary">
        <br><br>
        <input type="radio" name="empGender" value="Male"> Male
        <input type="radio" name="empGender" value="Female"> Female
        <br><br>
        <input type="checkbox" name="empSkills[]" value="HTML"> HTML
        <input type="checkbox" name="empSkills[]" value="CSS"> CSS
        <input type="checkbox" name="empSkills[]" value="JS"> JS
        <br><br>
        <input type="submit">
    </form>
</body>
</html>