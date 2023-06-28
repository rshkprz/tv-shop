<?php 
include("config.php");
$id=$_GET['productID'];
$query="DELETE FROM products WHERE productID='$id'";
$data=mysqli_query($conn,$query);
if($data)

{ echo"<script>alert('REcord Deleted!!!! ')</script>";
    header('Location:products.php');

   ?>
    
 
 <?php 
}
else{
    echo"<script>alert('error ')</script>";
}


?>