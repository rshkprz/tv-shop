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
                  echo "<li><a class='dropdown-item' href='#'>" . $row['brandName'] . "</a></li>";

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
            <form class="d-flex" id="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

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
    






    
    <!-- home content -->
    <section class="home">
    <div class="content">
      <h1> <span>Televisions</span>
        <br>
        Up To <span id="span2">50%</span> Off
      </h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, saepe.
        <br>Lorem ipsum dolor sit amet consectetur.
      </p>
      <div class="btn"><button>Shop Now</button></div>

    </div>
    <!-- <div class="img">
      <img src="./images/background.png" alt="">
    </div> -->

    <div class="bgImg">
      <div id="bgImg1">

      </div>
    </div>

  </section>
    <!-- home content -->








    <!-- product cards -->
    <div class="container" id="product-cards">
      <h1 class="text-center">PRODUCTS</h1>
      <div class="row" style="margin-top: 30px;">
          
          <?php
    $sql = "SELECT * FROM products LIMIT 8";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      
        while ($row = mysqli_fetch_assoc($result)){
            echo "<div class='col-md-3 py-5 py-md-2'>";
            echo "<div class='card' style='height:400px; display:flex; '>";
            echo "<form action='addToCart.php' method='POST'>";
            echo "<input type='hidden' name='productID' value='" . $row['productID'] . "'>";
            echo "<img src='" . $row['productPhoto'] . "' alt='image'>";
            echo "<div class='card-body'>";
            echo "<h3 class='text-center'>" . $row['productName'] . "</h3>";
            echo "<h2>Rs " . $row['price'] . " <span><li><input type='submit' name='addToCart' value='Add To Cart' class='fa-solid fa-cart-shopping'></li></span></h2>";
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






    
    
    
    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h3>Free Shipping</h3>
          <p>On order over $1000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Free Returns</h3>
          <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h3>Fast Delivery</h3>
          <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Big choice</h3>
          <p>Of products</p>
        </div>
      </div>
    </div>


    <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>TV Shop</h3>
              <p>
                Karachi <br>
                Sindh <br>
                Pakistan <br>
              </p>
              <strong>Phone:</strong> +000000000000000 <br>
              <strong>Email:</strong> electronicshop@.com <br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policey</a></li>
             </ul>
            </div>



           

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

             <ul>
              <li><a href="#">PS 5</a></li>
              <li><a href="#">Computer</a></li>
              <li><a href="#">Gaming Laptop</a></li>
              <li><a href="#">Mobile Phone</a></li>
              <li><a href="#">Gaming Gadget</a></li>
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quibusdam.</p>

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