<?php 

$bookName = $_POST["bookName"];
$bookPrice = $_POST["bookPrice"];
$bookAuthor = $_POST["bookAuthor"];

$connection = new PDO("mysql:host=localhost;dbname=2026_900tts", "root", "");

$statement = $connection->prepare("INSERT INTO books (bookname, bookprice, bookauthor) VALUES (?, ?, ?)");

$statement->execute([$bookName, $bookPrice, $bookAuthor]);

?>