<?php
    include 'config.php';
    require 'admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <?php
        
        
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr><th>User ID</th><th>Name</th><th>Email</th><th>No. of orders</th><th>Action</th></tr>";

            //fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $row["userID"] . "</td>";
                echo "<td>". $row["name"] . "</td>";
                echo "<td>". $row["email"] . "</td>";
                $query = "SELECT COUNT(*) AS ordersCount FROM orders JOIN users ON orders.userID = users.userID";
                $queryResult = mysqli_query($conn,$query);
                $ordersCount = mysqli_fetch_assoc($queryResult);
                echo "<td>". $ordersCount['ordersCount'] . "</td>";
                


                echo "<td>". '<a href="editOrderForm.php?orderID=' . $row["orderID"] . '">' . "edit" . "</a>" . " | "  . '<a href="../formaction/deleteOrder.php?orderID=' . $row["orderID"] .'" onclick="return confirmDelete()">' . "delete" . '</a>'."</td>";
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