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
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #333;
            color: #fff;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* Add spacing between columns */
        td:not(:last-child),
        th:not(:last-child) {
            padding-right: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Users</h1>
        <?php
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                echo "<tr><th>User ID</th><th>Name</th><th>Email</th><th>No. of orders</th></tr>";

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
