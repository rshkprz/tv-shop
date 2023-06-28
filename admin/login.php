<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $password = $_POST['password'];
   $_SESSION['name'] = $name;
   $_SESSION['password'] = $password;
   
   $sql = "SELECT * FROM `admin` WHERE name = '$name' AND password = '$password'";
   $result = mysqli_query($conn, $sql) or die('query failed');
   $admin = mysqli_fetch_assoc($result);
   if($admin["name"] == $name){
      if($admin["password"] == $password){
         header('Location: admin.php');
         
      }
      else{
         echo "<script>alert('incorrect password')</script>";
      }
   }
   else{
      echo "<script>alert('incorrect email')</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <style>
      body {
         background-color: #f2f2f2;
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
      }
      
      .form-container {
         background-color: #fff;
         width: 300px;
         margin: 100px auto;
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      }
      
      .form-container h3 {
         text-align: center;
         margin-bottom: 20px;
         color: #333;
      }
      
      .form-container .box {
         width: 100%;
         padding: 10px;
         margin-bottom: 15px;
         border: 1px solid #ccc;
         border-radius: 4px;
         outline: none;
         font-size: 16px;
      }
      
      .form-container .btn {
         width: 100%;
         padding: 10px;
         background-color: #333;
         border: none;
         color: #fff;
         font-size: 16px;
         border-radius: 4px;
         cursor: pointer;
      }
      
      .form-container .btn:hover {
         background-color: #555;
      }
   </style>
</head>
<body>
<div class="form-container">
   <form action="" method="post">
      <h3> Admin login</h3>
      <input type="text" name="name" style="width:210px; margin-left:25px;" placeholder="Username" required class="box">
      <input type="password" name="password" style="width:210px; margin-left:25px;" placeholder="Password" required class="box">
      <input type="submit" name="submit" value="Login" class="btn">
   </form>
</div>
</body>
</html>