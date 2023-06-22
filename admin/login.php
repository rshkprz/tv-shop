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

</head>
<body>
<div class="form-container">
   <form action="" method="post">
      <h3> Admin login</h3>
      <input type="text" name="name" placeholder="Username" required class="box">
      <input type="password" name="password" placeholder="Password" required class="box">
      <input type="submit" name="submit" value="Login" class="btn">
   </form>
</div>
</body>
</html>