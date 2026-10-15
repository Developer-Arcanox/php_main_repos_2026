<?php

include("connection.php");

$statement = $connection->query("SELECT * FROM categories");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>

<body>
    <a href="addform.php">
        <button>Add Category</button>
    </a>

    <br><br>

    <table border="2">
        <tr>
            <th>BOOK id</th>
            <th>BOOK Category</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php

        foreach ($statement as $data) {

        ?>

            <tr>
                <td><?php echo $data["id"] ?></td>
                <td><?php echo $data["CategoryName"] ?></td>
                <td>
                    <a href="updateform.php?id=<?php echo $data["id"] ?>">
                        <button>Update </button>
                    </a>
                </td>
                <td>
                    <button>Delete</button>
                </td>
            </tr>

        <?php
        }
        ?>

    </table>
</body>

</html>