<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
</div>
<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about1.jpg" alt="">
      </div>

      <div class="content">
         <h3>The Gift Shop</h3>
         <p>Welcome to The Gift shop, an online gift store providing gifts for any kind of occasions and celebration, whether it be annivesary or birthdays or any thing.You name it we are ready for it.Here, you can browse and buy gifts for your loved ones easily. You choose the special gift for your special ones and it's our promise to deliver at your doorstep. </p>
         <br>
         <h2>Why choose Giftshop?</h2>
         <p>Best online gift shop to send gifts to Nepal. Gift shop is ready 7 days a week to deliver your next gift order in Nepal. Our online gift delivery in Nepal is widely loved for all major occasions such as Birthday, Anniversary, Mother’s Day, Back to School Gifts, Raksha Bandhan, Nepali Father’s Day, Teej, Dashain, Tihar, Bhaitika gifts, Christmas Gifts, New Year Gifts, wedding gifts, holiday, Valentine’s Day Gifts, Women's Day, Holi Festival gifts. Order online gifts to Nepal for father, mother, siblings, brother, sister, girl friend, boy friend, cousin, best friend, sweetheart, husband, wife or friends and families for any occasions. Giftshop is always committed to offer the best gift delivery service in Nepal. </p>
      </div>


   </div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>