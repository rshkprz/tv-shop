<?php
    include 'config.php';
    require 'admin.php';

    if(isset($_POST['submit'])){
    $brandname=$_POST["brandName"];

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
    <link rel="stylesheet" href="styleForm.css">
</head>
<body>
    <h1>Brands</h1>
    <div class="formContainer">
    <form action="" method="POST">
        <h3>Add brand</h3>
        <label for="brandName">Brand Name:</label>
        <input type="text" name="brandName"><br><br>
        
        <input type="submit" value="Add" name="submit" class="button">
    </form>
    </div>
</body>
</html>