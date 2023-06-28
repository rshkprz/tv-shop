<?php
    include 'config.php';
    require 'admin.php';
    $productID=$_GET['productID'];
    if(isset($_POST['submit'])){
        $productName = $_POST["productName"];
        $price = $_POST["price"];

    
        $sql = "UPDATE products SET productName = '$productName', price = '$price' WHERE productID = '$productID'";
        if (mysqli_query($conn, $sql)) {
            header('Location: products.php');
            exit();
        } 
        else {
            echo "Error adding product: " . mysqli_error($conn);
        }
      
        mysqli_close($conn);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styleForm.css">
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

        .formContainer {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #fff;
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
    </style>
</head>
<body>

    <h1>Edit Products</h1>
    
        <?php
        //$productID = $_GET['productID'];
        $sql = "SELECT * FROM products WHERE productID = '$productID'";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            
            
            echo "<td>
                <form method='post' action=''>
                <label for='productName'>Product Name:</label>
                    <input type='text' name='productName'  value='" . $row['productName'] . "'><br><br>
                
                
                <label for='price'>Price:</label>
                    <input type='text' name='price' value='" . $row['price'] . "'>
               
                    <input type='submit' name='submit' value='Edit'>
                </form>
            </td>";
            echo "</tr>";
        }
        ?>
   



</body>
</html>

