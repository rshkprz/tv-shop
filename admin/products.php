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
</head>
<body>
    <h1>Products</h1>
    <a href="addProduct.php"><button>Add Product</button></a>
    <?php
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr><th>product ID</th><th>Photo</th><th>Product Name</th><th>Price</th></tr>";

            //fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $row["productID"] . "</td>";
                echo "<td><img src='data:image/jpeg;base64,".base64_encode($row['productPhoto'])."' alt='Image'></td>";
                // echo "<td>". $row["productPhoto"] . "</td>";
                echo "<td>". $row["productName"] . "</td>";
                echo "<td>". $row["price"] . "</td>";

                echo "<td>". '<a href="editProductForm.php?ProductID=' . $row["productID"] . '">' . "edit" . "</a>" . " | "  . '<a href="../formaction/deleteProduct.php?productID=' . $row["productID"] .'" onclick="return confirmDelete()">' . "delete" . '</a>'."</td>";
                echo "</tr>";
            }
            echo "</table>";    
        }
        else{
            echo "No data found";
        }
        mysqli_close($conn);
    ?>
</body>
</html>