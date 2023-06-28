<?php
    include 'config.php';
    require 'admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        .button:hover {
            background-color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        td img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h1>Products</h1>
    <a href="addProduct.php" class="button">Add Product</a>

    <?php
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        echo "<form  action ='editProductForm.php' method='post'>";
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr><th>Product ID</th><th>Photo</th><th>Product Name</th><th>Price</th><th>Action</th></tr>";

            //fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $row["productID"] . "</td>";
                echo "<td><img src='". $row["productPhoto"] . "' alt='Product Image'></td>";
                echo "<td>". $row["productName"] . "</td>";
                echo "<td>". $row["price"] . "</td>";
                echo "<td><a href='editProductForm.php?productID=".$row['productID']."'>Edit</a> | <a href='deleteProduct.php?productID=" . $row['productID'] . "' onclick='return confirmDelete()'>Delete</a></td>";

                echo "</tr>";
            }
            echo "</table>";   
            echo "</form>";
        }
        else{
            echo "No data found";
        }

        mysqli_close($conn);
    ?>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this product?");
        }
    </script>
</body>
</html>
