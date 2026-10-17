<?php

include("category/connection.php");

$data = $connection->query("SELECT * FROM categories");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add Book</h1>

    <form action="">
        <input type="text" name="bookName" placeholder="Book name">
        <br><br>
        <input type="text" name="bookPrice" placeholder="Book Price">
        <br><br>
        <input type="text" name="bookAuthor" placeholder="Book Author">
        <br><br>
        <select name="" id="">
            <?php foreach ($data as $category) { ?>
                <option value=""><?php echo $category["CategoryName"] ?></option>
            <?php } ?>
        </select>
        <br><br>

        <input type="submit">
    </form>
</body>

</html>