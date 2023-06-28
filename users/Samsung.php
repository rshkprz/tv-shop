<?php
   if(!isset($_SESSION['email'])){
  session_start();
   }
  include '../admin/config.php';
   if(isset($_SESSION['email'])){
    $email= $_SESSION['email'];
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
</head>
<body>

 
   

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
    <!-- navbar -->
    






    
    







    <!-- product cards -->
    <div class="container" id="product-cards">
      <h1 class="text-center">PRODUCTS</h1>
      <div class="row" style="margin-top: 30px;">
          
          <?php
    $sql = "SELECT * FROM products WHERE brandID = 4";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      
        while ($row = mysqli_fetch_assoc($result)){
          echo "<div class='col-md-3 py-5 py-md-2'>";
          echo "<form action='addToCart.php' method='POST'>";
          echo "<div class='card' style='height:400px; overflow:auto; '>";
            echo "<input type='hidden' name='productID' value='" . $row['productID'] . "'>";
            echo "<img src='" . $row['productPhoto'] . "' alt='image'>";
            echo "<div class='card-body'>";
            echo "<h3 class='text-center'>" . $row['productName'] . "</h3>";
            echo "<h2>Rs " . $row['price'] . " <span><input type='submit' style='font-size:15px;' name='addToCart' value='Add To Cart' class='fa-solid fa-cart-shopping'></span></h2>";
            echo "</div>";            
            echo "</form>";
            echo "</div>";
            echo "</div>";
        
        }
    }
    mysqli_close($conn);
?>


          
        </div>
  </div>
  </div>


        
    <!-- product cards -->






    
    
    
    


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