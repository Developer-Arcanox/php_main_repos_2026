<?php

include "connection.php";

$userUsername = $_POST["username"];
$userEmail = $_POST["email"];
$userPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);;

$statement = $connection->prepare("INSERT INTO loginsystem (user_name, user_email, user_password) VALUES (?, ?, ?)");

$statement->execute([$userUsername, $userEmail, $userPassword]);

session_start();

$_SESSION["user"] = $userUsername;

header("Location: index.php");
exit;
