<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));

   $users = mysqli_query($conn, "SELECT * FROM `admin` WHERE name = '$name' AND password = '$password'") or die('query failed');

   if(mysqli_num_rows($users) > 0){

      

      

   }else{
      $message[] = 'Incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3> login</h3>
      <input type="text" name="name" placeholder="Username" required class="box">
      <input type="password" name="password" placeholder="Password" required class="box">
      <input type="submit" name="submit" value="Login" class="btn">
   </form>

</div>

</body>
</html>