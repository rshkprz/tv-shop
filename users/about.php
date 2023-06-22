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
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
      }

      header {
          background-color: #333;
          color: #fff;
          padding: 20px;
          text-align: center;
      }

      .aboutContainer {
          max-width: 800px;
          margin: 20px auto;
          padding: 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
      }

      h1 {
          text-align: center;
      }

      p {
          line-height: 1.5;
      }

      .features {
          margin-top: 30px;
          display: flex;
          justify-content: space-between;
      }

      .feature {
          width: 30%;
          padding: 10px;
          background-color: #f5f5f5;
          border-radius: 5px;
      }

      .feature h3 {
          text-align: center;
      }

      .feature p {
          text-align: center;
      }

      .cta-button {
          display: block;
          width: 200px;
          margin: 30px auto;
          padding: 10px 20px;
          background-color: #4CAF50;
          color: #fff;
          text-align: center;
          text-decoration: none;
          border-radius: 4px;
      }

      .cta-button:hover {
          background-color: #45a049;
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
              <!-- <li class="nav-item">
                <a class="nav-link" href="">Product</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Brands
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67 0 86);">
                  <li><a class="dropdown-item" href="#">Samsung</a></li>
                  <li><a class="dropdown-item" href="#">Apple</a></li>
                  <li><a class="dropdown-item" href="#">Videocon</a></li>
                  <li><a class="dropdown-item" href="#">TCL</a></li>
                  <li><a class="dropdown-item" href="#">CG</a></li>
                  <li><a class="dropdown-item" href="#">Skyworth</a></li>
                  <li><a class="dropdown-item" href="#">ddddddddddddddd</a></li>
                  <li><a class="dropdown-item" href="#">Laptop</a></li>
                  <li><a class="dropdown-item" href="#">PC Moniter</a></li>
                </ul>
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
              <a href="login.php">Login</a>
          </div>

          </div>
        </div>
      </nav>
    <!-- navbar -->
    
   
        
    
        <div class="aboutContainer">
            <h2>About Us</h2>
            <p>Welcome to our Online TV Store! We are your ultimate destination for all your television needs. Whether you're looking for the latest smart TVs, high-definition displays, or cutting-edge features, we've got you covered. With our wide selection of top-quality TVs from leading brands, you can find the perfect match to elevate your home entertainment experience. We pride ourselves on offering competitive prices, ensuring that you get the best value for your money. Our fast and reliable shipping ensures that your new TV will be delivered to your doorstep in no time. We strive to provide exceptional customer service and make your online shopping experience smooth and enjoyable. Explore our vast range of TVs, compare specifications, read customer reviews, and make an informed decision. Upgrade your viewing pleasure and immerse yourself in the world of entertainment with our Online TV Store.</p>
            <div class="features">
                <div class="feature">
                    <h3>Wide Selection</h3>
                    <p>Choose from a wide range of high-quality TVs from top brands.</p>
                </div>
                <div class="feature">
                    <h3>Competitive Prices</h3>
                    <p>Get the best deals and competitive prices for your favorite TVs.</p>
                </div>
                <div class="feature">
                    <h3>Fast Shipping</h3>
                    <p>Enjoy quick and reliable shipping to your doorstep.</p>
                </div>
            </div>
        </div>
    </body>
    </html>
    







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