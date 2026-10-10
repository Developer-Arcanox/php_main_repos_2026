<?php

$username = $_POST["username"];
$age = $_POST["age"];

$connection = new PDO("mysql:host=localhost;dbname=2026_900tts", "root", "");

$stmt = $connection->prepare("INSERT INTO users (username, age) VALUES (?, ?)");

$stmt->execute([$username, $age]);

?>
