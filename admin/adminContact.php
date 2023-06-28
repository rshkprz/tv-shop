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
            padding:10px;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        th:first-child {
            padding-right: 40px; /* Increase the gap between "Email" and "Message" */
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
            margin: 0 auto; /* Center the container with a margin on the left and right */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User's Messages</h1>
        <?php
            $sql = "SELECT * FROM message";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                echo "<tr><th>Email</th><th>Message</th></tr>";

                //fetch rows from the result set
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>". $row["email"] . "</td>";
                    echo "<td>". $row["message"] . "</td>";
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
