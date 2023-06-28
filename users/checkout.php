<?php

include '../admin/config.php';

session_start();

$email = $_SESSION['email'];
$result = mysqli_query($conn, "SELECT userID FROM users WHERE email='$email'");
$row = mysqli_fetch_assoc($result);
$userID = $row['userID'];

if(!isset($email)){
   header('location:login.php');
}

if(isset($_POST['order_btn'])){

   
   $method = $_POST['method'];
   $address = $_POST['street'].', '. $_POST['village'].', '. $_POST['district'].', '. $_POST['country'];
   $placedOn = date('d-M-Y');

   $cartTotal = 0;
   $cartProducts[] = '';

   $cartQuery = mysqli_query($conn, "SELECT * FROM `cart` 
   JOIN users ON cart.userID = '$userID'
   JOIN products ON cart.productID = products.productID") or die('query failed');
   if(mysqli_num_rows($cartQuery) > 0){
      while($cartItem = mysqli_fetch_assoc($cartQuery)){
         $cartProducts[] = $cartItem['productName'].' ('.$cartItem['quantity'].') ';
         $subTotal = ($cartItem['price'] * $cartItem['quantity']);
         $cartTotal += $subTotal;
      }
   }

   $serializedCart = serialize($cartProducts);

   
    mysqli_query($conn, "INSERT INTO `orders`(userID, method, deliveryAddress, totalProducts, orderTotalPrice, placedOn) VALUES('$userID', '$method', '$address', '$serializedCart', '$cartTotal', '$placedOn')") or die('query failed');
    
    mysqli_query($conn, "DELETE FROM `cart` WHERE userID = '$userID'") or die('query failed');
    
    echo "<script>alert('Order Placed successfully')</script>";
    header ('location: cart.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV Shop</title>
    <link rel="stylesheet" href="stylefor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <style>
      /* Add custom styles for the checkout page */
.checkout {
  padding: 20px;
  margin: 20px auto;
  max-width: 600px;
  background: #f5f5f5;
  border-radius: 5px;
}

.checkout h3 {
  text-align: center;
  margin-bottom: 20px;
}

.checkout .flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.checkout .inputBox {
  width: calc(50% - 10px);
  margin-bottom: 20px;
}

.checkout .inputBox span {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.checkout input[type="text"],
.checkout select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.checkout .btn {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  background: #4caf50;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

/* Add any other necessary styles to customize the page */

    </style>
  </head>
<body>

 
    <!-- top navbar -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="main.php" id="logo"><span id="span1">T</span>V &nbsp;  <span>Shop</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="main.php">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Brands
                </a>
                
                <?php
            $sql = "SELECT * FROM brands";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdown' style='background-color: rgb(67 0 86);'>";
                //fetch rows from the result set
                while ($row = mysqli_fetch_assoc($result)){
                  echo "<li><a class='dropdown-item' href='" . $row['brandName'] . ".php'>" . $row['brandName'] . "</a></li>";

                }
            }
            else{
                echo "No data found";
            }
            
            echo "</ul>";
            
        ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
        

          <div class="top-navbar">
            <a href="cart.php"> 
              <i class='fa fa-shopping-cart' style='color: white'></i>
              </a>
              <?php
              if(isset($_SESSION['email'])){
              echo "<a href='logout.php'>Logout</a>";
              }
              else{
              echo "<a href='login.php'>Log In</a>";
              }
              ?>
          </div>

          </div>
        </div>
      </nav>
    
    

   




<section class="checkout">

   <form action="" method="post">
      <h3>place your order</h3>
      <div class="flex">
         
         <div class="inputBox">
            <span>Payment method :</span>
            <select name="method">
               <option value="Cash on delivery">Cash on delivery</option>
               <option value="Credit card">Credit card</option>
               <option value="Esewa">Esewa</option>
               <option value="Khalti">Khalti</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Street/ Tole:</span>
            <input type="text" name="street" required placeholder="e.g. Sars tole">
         </div>
         <div class="inputBox">
            <span>Village/ Municipality :</span>
            <input type="text" name="village" required placeholder="e.g. mahalaxmi">
         </div>
         <div class="inputBox">
            <span>District:</span>
            <input type="text" name="district" required placeholder="e.g. Bhaktapur">
         </div>
         <div class="inputBox">
            <span>Province :</span>
            <input type="text" name="province" required placeholder="e.g. Bagmati">
         </div>
         <div class="inputBox">
            <span>Country :</span>
            <input type="text" name="country" required placeholder="e.g. Nepal">
         </div>
      </div>
      <input type="submit" value="order now" class="btn" name="order_btn">
   </form>

</section>





    <!-- checkout -->


    <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>TV Shop</h3>
              <p>
                Bhaktapur <br>
                Nepal<br><br>
              </p>
              <strong>Phone:</strong> +977 9800000000 <br>
              <strong>Email:</strong> tvstore@.com <br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <!-- <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policey</a></li> -->
             </ul>
            </div>



           

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

             <ul>
              <li>Televisions</li>
              <li>Monitors</li>

             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Catch us on different social platforms.</p>

              <div class="socail-links mt-3">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            
            </div>

          </div>
        </div>
      </div>
      <hr>
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>TV Shop</span></strong>. All Rights Reserved
        </div>

      </div>
    </footer>
    <!-- footer -->
   <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>