<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- <link href="assets/css/material-kit.css?v=2.0.4" rel="stylesheet" /> -->
    <title>Document</title>
    <style>
    .db-color:hover{
        background-color: #f0c9c9 !important;
      }
      input{
        margin-top:10px;
      }
    </style>
</head>
<body>
    
<?php
  include('db.php');
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PREFITO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav navi-jew">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item db-color" href="earrings.php">Earrings</a>
          <a class="dropdown-item db-color" href="rings.php">Rings</a>
          <a class="dropdown-item db-color" href="brace.php">Bracelets</a>
          <a class="dropdown-item db-color" href="necklace.php">Necklace</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="giftcard.php">Gifts</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container">
<div class="row">
<?php
include('db.php');
$prodId = $_REQUEST['prodId'];
$jName = $_REQUEST['name'];
$jPrice = $_REQUEST['price'];
$jimage = $_REQUEST['image'];
$count = $_REQUEST['count'];
$query = "Select * from `product` where prodId='$prodId'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_row($result);

if($fetch){
  ?>
  <div class='col-lg-6' style="margin-top:30px;">
    <form action='' method='POST'>
      <div class='card' >
       <img src='<?php echo $jimage ?>' class='card-img-top img-jew' alt='...' style="height:450px;"/>
        <div class='card-body'>
        <p> <?php $prodId ?> </p>
          <h5 class='card-title' name='jName'><?php echo $jName ?></h5>
          <h6 name='jPrice'><?php echo $jPrice ?><span>$</span></h6>
        </div>
      </div>
      </form>
    </div>
    
    <div class='col-lg-6' style="margin-top:250px;">
    <div>
    <form action="" method="POST">
    <h2 style="margin:10px;">Order</h2>
    <p name="prodId" style="margin-left:9px;">Transaction Id:<?php echo $prodId ?></p>
    <h4 style="margin:10px;">In Stock:</h4>
    <h5 style="margin:10px;"><?php echo $count?></h5>
    <span style="margin:10px;">Quantity:</span><input type="number" name='quan'><br/>
    <span style="margin:10px;">Address:</span><input style="margin-left:4px;" type="text" name='address'><br/>
    <span style="margin:10px;">City:</span><input style="margin-left:33px;" type="text" name='city'>
    <button name='buy' class="btn btn-block btn-success butoni" style="display:block;margin-top:22px;">Buy</button>
    </form>
    <?php
    if(isset($_POST['buy'])){
      $product = $prodId;
      $quantity = stripslashes($_REQUEST['quan']); 
      $quantity = mysqli_real_escape_string($con,$quantity);
      $address = stripslashes($_REQUEST['address']); 
      $address = mysqli_real_escape_string($con,$address);
      $city = stripslashes($_REQUEST['city']); 
      $city = mysqli_real_escape_string($con,$city);

      if($quantity <= $count){
      $qr = "INSERT INTO orderproduct(prodId, quantity,address,city) values ('$product', '$quantity','$address','$city')";
      $stockLeft =$count-$quantity;
      $reStock = 'UPDATE `product` set `count`="'.$stockLeft.'" where `prodId`="'.$prodId.'"';
      }
      else{
        echo "<script type='text/javascript'>alert('There is not that much stock for your order')</script>";
        $qr="INSERT INTO orderproduct(prodId, quantity,address,city) values ('', '','','')";
      }

      $update = mysqli_query($con,$reStock);
      $result = mysqli_query($con,$qr);
            if($result == 1){
                echo "<script type='text/javascript'>";
                echo "alert('Your order is successfully registered')";
                echo "</script>";
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('Your order has not been registered')";
                echo "</script>";
            }
  }
    ?>
    </div>
    </div>
    <?php

    }
// else{
//         echo"<br>result set not fetched";
//     }
?>
<?php 

?>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>