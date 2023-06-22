<?php
    include 'config.php';
    require 'admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands</title>
</head>
<body>
    <h1>Brands</h1>
    <?php
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr><th>Order ID</th><th>User Name</th></tr>";

            //fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $row["brandID"] . "</td>";
                echo "<td>". $row["brandName"] . "</td>";
                echo "<td>". '<a href="editBrandForm.php?brandID=' . $row["brandID"] . '">' . "edit" . "</a>" . " | "  . '<a href="../formaction/deleteBrand.php?brandID=' . $row["brandID"] .'" onclick="return confirmDelete()">' . "delete" . '</a>'."</td>";
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