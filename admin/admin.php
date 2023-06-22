<?php

if(isset($_SESSION['name']) && $_SESSION['password'])
   {
    header('location: admin.php');
    exit();
   }
?>

<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Panel</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="brands.php" >Brands</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="products.php" > Products </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="orders.php" > Orders </a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="users.php" > Users</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="contact.php" > Contact </a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="reviews.php" >User Reviews</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" ><img src="images/Logo.png" ></a>
                  <a class="navbar-brand hidden" ><img src="images/Logo.png" ></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>