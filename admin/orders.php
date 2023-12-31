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
    <style>
       .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f8f8f8;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        p.no-data {
            text-align: center;
            font-style: italic;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Users</h1>
        <?php
            $sql = "SELECT * FROM orders";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                echo "<tr><th>User ID</th><th>Order ID</th><th>Method</th><th>Delivery Address</th><th>Order Total Price</th><th>Placed On</th></tr>";

                //fetch rows from the result set
                while ($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td>". $row["userID"] . "</td>";
                    echo "<td>". $row["orderID"] . "</td>";
                    echo "<td>". $row["method"] . "</td>";
                    echo "<td>". $row["deliveryAddress"] . "</td>";                  
                    echo "<td>". $row["orderTotalPrice"] . "</td>";
                    echo "<td>". $row["placedOn"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            else{
                echo "<p>No data found</p>";
            }
            
            mysqli_close($conn);
        ?>
    </div>
</body>
</html>
