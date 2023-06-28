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
            margin-top: 30px;
        }
        
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        
        th, td {
            padding: 15px;
            text-align: left;
        }
        
        th {
            background-color: #333;
            color: #fff;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        a {
            text-decoration: none;
            color: #333;
        }
        
        .add-button {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .add-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .add-button a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Brands</h1>
    <div class="add-button">
        <a href="addBrand.php">Add Brand</a>
    </div>
    <?php
        $sql = "SELECT * FROM brands";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr><th>Brand ID</th><th>Brand Name</th><th>Action</th></tr>";

            //fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $row["brandID"] . "</td>";
                echo "<td>". $row["brandName"] . "</td>";
                echo "<td>". '<a href="editBrandForm.php?brandID=' . $row["brandID"] . '">' . "Edit" . "</a>" . " | "  . '<a href="../formaction/deleteBrand.php?brandID=' . $row["brandID"] .'" onclick="return confirmDelete()">' . "Delete" . '</a>'."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else{
            echo "No data found";
        }
        
        mysqli_close($conn);
    ?>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this brand?");
        }
    </script>
</body>
</html>
