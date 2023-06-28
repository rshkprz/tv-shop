<?php
    include '../admin/config.php';
    session_start();
    if (!isset($_SESSION['email'])){
      header ('location: login.php');
      exit();
    }

    if(isset($_POST['updateCart'])){
        $userID = $_POST['userID'];
        $quantity = $_POST['quantity'];
        mysqli_query($conn, "UPDATE `cart` SET quantity = '$quantity', totalPrice = '$subTotal' WHERE userID = '$userID'") or die('query failed');
        echo "<script>alert('quantity updated');</script>";
        header ('location: cart.php');
        exit();
     }
     if(isset($_GET['productID'])){
      $email = $_SESSION['email'];
      $result = mysqli_query($conn, "SELECT userID FROM users WHERE email='$email'");
      $row = mysqli_fetch_assoc($result);
      $userID = $row['userID'];
        $productID = $_GET['productID'];
        mysqli_query($conn, "DELETE FROM `cart` WHERE productID = '$productID' AND userID = '$userID'") or die('query failed');
        header('location:cart.php');
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
      .heading {
  text-align: center;
  margin-bottom: 30px;
}

/* Table */
table {
  width: 100%;
  border-collapse: collapse;
}

table th, table td {
  padding: 10px;
  text-align: center;
  border: 1px solid #ddd;
}

table th {
  background-color: #f2f2f2;
}

/* Image */
table td img {
  max-width: 100px;
  height: auto;
}

/* Form */
table td form {
  display: flex;
  align-items: center;
  justify-content: center;
}

table td form input[type="number"] {
  width: 60px;
  padding: 5px;
}

/* Total price */
.cart-total p span {
  font-weight: bold;
  color: #ff0000;
}

/* Buttons */
.option-btn {
  padding: 5px 10px;
  background-color: #4caf50;
  color: white;
  border: none;
  cursor: pointer;
  margin-right: 5px;
}

.disabled {
  opacity: 0.5;
  pointer-events: none;
}
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
    

    <!-- CART -->

    <div class="cartContainer">

    <section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   

         <?php 
         $result = mysqli_query($conn, "SELECT userID FROM users WHERE email = '" . $_SESSION['email'] . "'");
         $row = mysqli_fetch_assoc($result);   
         $userID = $row['userID'];

         $sql = "SELECT *
                FROM cart
                JOIN products ON cart.productID = products.productID
                WHERE userID = '$userID'";
         $result = mysqli_query($conn, $sql);
         $grandTotal = 0;
         echo "<table>";
         echo '<tr>';
            echo '<th>image</th>';
            echo '<th>name</th>';
            echo '<th>price</th>';
            echo '<th>quantity</th>';
            echo '<th>total price</th>';
            echo '<th>action</th>';
            echo '</tr>';
             if(mysqli_num_rows($result) > 0){
             while($rows = mysqli_fetch_assoc($result)){
               
            echo "<tr>";
            echo "<td><img src='". $rows["productPhoto"] . "'height='100px' width='100px'></td>";
            echo "<td>". $rows["productName"] . "</td>";
            echo "<td>Rs". $rows["price"] . "</td>";
            echo "<td><form action='' method='POST'>
            <input type='hidden' name='userID' value='" . $userID . "'>
            <input type='number' name='quantity' value='" . $rows['quantity'] . "'>
            <input type='submit' min='1' name='updateCart' value='Update' class='option-btn'></td>";
            echo "<td>" . $subTotal = ($rows['quantity'] * $rows['price'])."</form></td>";
            echo '<td><a href="cart.php?productID=' . $rows['productID'] . '"  onclick="return confirm(\'Delete item from cart?\');">Delete</a></td>';
            
            
            
            $grandTotal += floatval($subTotal);
            echo "</tr>";
            }
        }
        else{
            echo '<p class="empty">Your cart is empty</p>';
        }
        echo "</table>";
        
        ?>
       

   <div class="cart-total">
      <p>grand total : <span>Rs.<?php echo $grandTotal; ?>/-</span></p>
      <div class="flex">
         <a href="main.php" class="option-btn">Continue shopping</a>
         <a href="checkout.php" class="btn <?php echo ($grandTotal > 1)?'':'disabled'; ?>">Proceed to checkout</a>
      </div>
   </div>

</section>

</div>

    <!-- CART -->




    <!-- footer -->
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