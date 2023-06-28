
<?php 
include("config.php");
$id=$_GET['productID'];
$query="select * from products where productID='$id'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

?>
<?php
if(isset($_POST['submit'])){
    $productName = $_POST["productName"];
    $price = $_POST["price"];


    echo "<tr>";
            
            
    echo "<td>
        <form method='post' action=''>
        <label for='productName'>Product Name:</label>
            <input type='text' name='productName'  value='" . $row['productName'] . "'><br><br>
        
        
        <label for='price'>Price:</label>
            <input type='text' name='price' value='" . $row['price'] . "'>
       
            <input type='submit' name='submit' value='Edit'>
        </form>
    </td>";
    echo "</tr>";



    $query="UPDATE products SET productName='$productName',price='$price' where productID=$id";
     
    $data=mysqli_query($conn,$query);

    if($data)

    { echo"<script>alert('Data Updated!!!! ')</script>";
    
        header('Location:products.php');
       ?>

                
     
     <?php 
    }

    else{
        echo"<script>alert('error ')</script>";
    }
}

?>