<?php
    include 'config.php';
    require 'admin.php';

    if(isset($_POST['submit'])){
        $productName = $_POST["productName"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $brandID = $_POST["chooseBrand"];
        $fileName = $_FILES["productPhoto"]["name"];
        $tempName = $_FILES["productPhoto"]["tmp_name"];
        $folder = "../images/".$fileName;
        move_uploaded_file($tempName, $folder);
    
        $sql = "INSERT INTO products(productName, description, price, productPhoto,brandID) VALUES ('$productName', '$description', '$price', '$folder','$brandID')";
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
    <h1>Add Product</h1>
    <div class="formContainer">
        <form action="" method="POST" enctype="multipart/form-data">
            <h3>Add product</h3>
            <label for="choosebrand">Choose Brand:</label>
            <?php
                $sql = "SELECT * FROM brands";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    echo "<select name='chooseBrand'>";
                    //fetch rows from the result set
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<option value='" . $row['brandID'] . "'>" . $row['brandName'] . "</option>";
                        

                    }
                    echo "</select>";
                }
                else{
                    echo "No data found";
                }
                mysqli_close($conn);
            ?>

            <br>
            <label for="productName">Product Name:</label>
            <input type="text" name="productName"><br><br>

            <label for="description">Product Description:</label>
            <input type="text" name="description"><br><br>

            <label for="price">Price(Rs): </label>
            <input type="text" name="price"><br><br>

            <label for="photo">Choose image:</label>
            <input type="file" name="productPhoto"><br><br>

            <input type="submit" value="Add" name="submit" class="button">
        </form>
    </div>
</body>
</html>
