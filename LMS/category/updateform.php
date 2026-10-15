<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Update Category</h1>

    <form action="updatecategory.php" method="post">
        <input type="hidden" name="categoryID" value="<?php echo $_GET["id"] ?>">
        <input type="text" name="categoryName" placeholder="Enter category name">

        <input type="submit">
    </form>
</body>

</html>