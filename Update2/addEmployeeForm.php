<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee Details</h1>

    <form action="addEmployeeBackend.php" method="post">
        <input type="text" name="empName" placeholder="Employee Name">
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