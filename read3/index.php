<?php
include "connection.php";

$data = $connection->query("SELECT * FROM products");
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

    <a href="addProduct.php">
        <button>Add Product</button>
    </a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Category</th>
        </tr>

        <?php
        foreach($data as $row) {
        ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["p_name"] ?></td>
            <td><?php echo $row["p_price"] ?></td>
            <td><?php echo $row["p_category"] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
