<?php

include("connection.php");

$data = $connection->query("SELECT * FROM employees_data");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dashboard</h1>

    <a href="addEmployeeForm.php">
        <button>Add Employee</button>
    </a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Employee Age</th>
            <th>Employee Salary</th>
            <th>Employee Gender</th>
            <th>Employee Skills</th>
        </tr>

        <?php
        foreach ($data as $employee) {
        ?>
            <tr>
                <td><?php echo $employee["id"] ?></td>
                <td><?php echo $employee["EmployeeName"] ?></td>
                <td><?php echo $employee["EmployeeAge"] ?></td>
                <td><?php echo $employee["EmployeeSalary"] ?></td>
                <td><?php echo $employee["EmployeeGender"] ?></td>
                <td><?php echo $employee["EmployeeSkills"] ?></td>
                <td>
                    <a href="updateEmployeeForm.php?id=<?php echo $employee["id"] ?>">
                        <button>Update</button>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>