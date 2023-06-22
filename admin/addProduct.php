<?php
    include 'config.php';
    require 'admin.php';

    if(isset($_POST['submit'])){

        
        $productName = $_POST["productName"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        
        //ADDED
        $fileName = $_FILES ["productPhoto"]["name"];
        $tempName = $_FILES ["productPhoto"]["tmp_name"];
        $folder = "images/".$fileName;
        move_uploaded_file($tempName, $folder);
    
    $sql = "INSERT INTO products(productName, description, price, productPhoto) VALUES ('$productName', '$description', '$price', '$folder')";
    if (mysqli_query($conn, $sql)) {
        header('Location: products.php');
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
    <h1>Products</h1>
    <div class="formContainer">
    <form action="" method="POST" enctype="multipart/form-data">
        <h3>Add product</h3>
        <label for="choosebrand">Choose Brand:</label>
        <?php
            $sql = "SELECT * FROM brands";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                echo "<select>";
                //fetch rows from the result set
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<option>". $row["brandName"] . "</option>";
                }
            }
            else{
                echo "No data found";
            }
            echo "</select>";

            mysqli_close($conn);
        ?>

        <br>
        <label for="productName">Product Name:</label>
        <input type="text" name="productName"><br><br>

        <label for="description">Product Description:</label>
        <input type="text" name="description"><br><br>

        <label for="price">Price: &nbsp; &nbsp; &nbsp; Rs.</label>
        <input type="text" name="price"><br><br>

        <label for="photo">Choose image:</label>
        <input type="file" name="productPhoto"><br><br>

        <input type="submit" value="Add" name="submit" class="button">
        
    </form>
    </div>
</body>
</html>