<?php

session_start();

print_r($_SESSION);

if(!isset($_SESSION["user"])) {
    header("Location: loginform.php");
    exit;
}


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

    <a href="logout.php">Logout</a>
</body>
</html>