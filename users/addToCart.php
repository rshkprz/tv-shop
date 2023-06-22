<?php
    session_start();
    include '../admin/config.php';
    if(!isset($_SESSION['email'])){
        header ('Location:login.php');
        exit();
    }
    $email= $_SESSION['email'];
    
    $productID = $_POST['productID'];
    $priceSelect = mysqli_query($conn, "SELECT price FROM products WHERE productID = $productID");
    $productPrice = mysqli_fetch_assoc($priceSelect);
    $price = $productPrice['price'];
    $sql = "SELECT userID FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1){
        $userDetail = mysqli_fetch_assoc($result);
        $userID = $userDetail['userID'];
    }
    $sql = "INSERT INTO cart(productID, userID, quantity, totalPrice) VALUES ('$productID','$userID', 1, '$price')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('inserted successfully')</script>";
        include 'main.php';
    }



?>