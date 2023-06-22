<?php
    require 'config.php';

  
    // $sql = "CREATE TABLE admin (name varchar(30) not null, password varchar(30) not null)";
    // if (mysqli_query($conn,$sql)){
    //     echo "Table Created!";
    // }
    // else{
    //     echo "error";
    // }
    
    // $sql = "INSERT INTO admin values('admin','admin')";
    // if (mysqli_query($conn,$sql)){
    //     echo "Table Inserted!";
    // }
    // else{
    //     echo "error";
    // }

    // $sql = "CREATE TABLE brands (
    //     brandID INT(5) AUTO_INCREMENT PRIMARY KEY,
    //     brandName VARCHAR(50) NOT NULL
    //     )";
    // if (mysqli_query($conn,$sql)){
    //     echo "Table Created!";
    // }
    // else{
    //     echo "error";
    // }

    // $sql = "CREATE TABLE products (
    //     productID INT(5) AUTO_INCREMENT PRIMARY KEY,
    //     productName VARCHAR(100) NOT NULL,
    //     price int(15) NOT NULL,
    //     description VARCHAR(300) NOT NULL,
    //     productPhoto VARCHAR(255) NOT NULL,
    //     brandID int(5),
    //     FOREIGN KEY (brandID) REFERENCES brands(brandID)
    //     ON DELETE CASCADE
    //     ON UPDATE CASCADE
    //     )";
    // if (mysqli_query($conn,$sql)){
    //     echo "Table Created!";
    // }
    // else{
    //     echo "error";
    // }

    // $sql = "CREATE TABLE users (
    //     userID INT(5) AUTO_INCREMENT PRIMARY KEY,
    //     email VARCHAR(100) NOT NULL,
    //     password VARCHAR(20) NOT NULL,
    //     name VARCHAR(100) NOT NULL,
    //     address VARCHAR(100) NOT NULL,
    //     mobileNumber int(15)
    //     )";
    // if (mysqli_query($conn,$sql)){
    //     echo "Table Created!";
    // }
    // else{
    //     echo "error";
    // }
    // $sql = "CREATE TABLE orders(
    //     orderID INT(5) AUTO_INCREMENT PRIMARY KEY,
    //     paymentType VARCHAR(20) NOT NULL,
    //     totalPrice INT(20) NOT NULL,
    //     date datetime NOT NULL,
    //     quantity int(5) NOT NULL,
    //     userID INT(5),
    //     FOREIGN KEY (userID) REFERENCES users(userID)
    //     ON DELETE CASCADE
    //     ON UPDATE CASCADE
    //     )";

    // if (mysqli_query($conn,$sql)){
    //     echo "Table Created!";
    // }
    // else{
    //     echo "error";
    // }

    // $sql = "CREATE TABLE message(
    //     email VARCHAR(100) NOT NULL,
    //     message VARCHAR(500) NOT NULL,
    //     FOREIGN KEY (email) REFERENCES users(email)
    //     ON DELETE CASCADE
    //     ON UPDATE CASCADE
    //     )";

    // if (mysqli_query($conn,$sql)){
    //     echo "Table Created!";
    // }
    // else{
    //     echo "error";
    // }

    $sql = "CREATE TABLE cart(
        userID INT(5) NOT NULL,
        productID INT(5) NOT NULL,
        FOREIGN KEY (userID) REFERENCES users(userID)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
        FOREIGN KEY (productID) REFERENCES products(productID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
        )";

    if (mysqli_query($conn,$sql)){
        echo "Table Created!";
    }
    else{
        echo "error";
    }
    ?>