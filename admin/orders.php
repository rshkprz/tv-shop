<?php
    include 'config.php';
    require 'admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <h1>Orders</h1>
    <?php
        
        
        $sql = "SELECT orderID, productName, quantity, totalPrice, name
        FROM products
        JOIN orders ON products.productID = orders.productID
        JOIN users ON Orders.userID = users.userID";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr><th>Order ID</th><th>Product</th><th>Qty</th><th>Price</th><th>User Name</th></tr>";

            //fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $row["orderID"] . "</td>";
                echo "<td>". $row["productName"] . "</td>";
                echo "<td>". $row["quantity"] . "</td>";
                echo "<td>". $row["totalPrice"] . "</td>";
                echo "<td>". $row["name"] . "</td>";


                // echo "<td>". '<a href="editOrderForm.php?orderID=' . $row["orderID"] . '">' . "edit" . "</a>" . " | "  . '<a href="../formaction/deleteOrder.php?orderID=' . $row["orderID"] .'" onclick="return confirmDelete()">' . "delete" . '</a>'."</td>";
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