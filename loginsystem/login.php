<?php

include "connection.php";

$userName = $_POST["username"];
$password = $_POST["password"];

$statement = $connection->prepare("SELECT * FROM loginsystem WHERE user_name = ?");

$statement->execute([$userName]);

$data = $statement->fetch(PDO::FETCH_ASSOC);

if ($data) {
    if(password_verify($password, $data["user_password"])) {
        session_start();

        $_SESSION["user"] = $data["user_name"];

        header("Location: index.php");
        exit();
    }
    else {
        echo "Incorrect password";
    }
}
else {
    echo "User doesn't exist";
}