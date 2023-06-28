<?php
    include 'config.php';
    require 'admin.php';

    if(isset($_POST['submit'])){
        $brandname = $_POST["brandName"];

        $sql = "INSERT INTO brands(brandName) VALUES ('$brandname')";
        if (mysqli_query($conn, $sql)) {
            header('Location: brands.php');
            exit();
        } 
        else {
            echo "Error adding brand: " . mysqli_error($conn);
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
    <title>Add Brand</title>
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
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        form {
            text-align: center;
        }
        
        h3 {
            margin-bottom: 20px;
            color: #333;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        
        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Brands</h1>
    <div class="formContainer">
        <form action="" method="POST">
            <h3>Add Brand</h3>
            <label for="brandName">Brand Name:</label>
            <input type="text" name="brandName"><br><br>

            <input type="submit" value="Add" name="submit" class="button">
        </form>
    </div>
</body>
</html>
