<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- <link href="assets/css/material-kit.css?v=2.0.4" rel="stylesheet" /> -->
    <title>Categories -  Necklace</title>
    <style>
      .sidenav {
        height: 100%;
        width: 160px;
        position: fixed;
        z-index: 1;
        top:70px;
        left: 0;
        background-color: #f0c9c9;
        overflow-x: hidden;
      }
      .unDiv{
        height:100%;
        width:160px;
        position:fixed;
        top:-10px;
        z-index:-1;
        background-color:#f0c9c9;
        overflow-x: hidden;
      }
      .content{
       margin-top: 5px;
      }
      .content a {
        padding: 6px 8px 3px 16px;
        text-decoration: none;
        font-size: 20px;
        color: white;
        display: block;
      }

      .content a:hover{
        text-decoration:underline;
      }
      .actived{
        font-weight:700;
        text-shadow:1px 1px 20px #ddd7d8;
      }
      .row{
        margin-left: 50px;
      }
      .card{
        box-shadow: 1px 1px 20px #dddddd;
        margin-top: 25px;
        border: solid transparent 0px;
        border-radius: 10px; 
      }
      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
      .butoni{
        float: right;

      }
      .wishlista{
        background-color:  #f0c9c9 !important;
        border-radius: 50px;
        float: right;
        margin-right: 5px;
      }
      .wishlista i{
        color: white !important;
      }
      .db-color:hover, .sort option:hover{
        background-color: #f0c9c9 !important;
      }
      .sort{
        margin-top: 10px;
        float: right;
        border:none;
        border-bottom: 2px solid black;
        font-size: 18px;
      }
      .btnSort{
        margin-top:10px;
        float:right;
        margin-right:5px;
        border: 1px #f5a7a7 solid;
        background-color:#f5a7a7;
        border-radius:3px;
        width:70px;
        color:white;
      }
      .img-jew{
        height:220px;
      }
      .inpCC{
        border:solid 0.5px grey;
        border-radius:5px;
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
    <li class="nav-item dropdown active">
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
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="giftcard.php">Gifts</a>
      </li>
      
    </ul>
  </div>
</nav>



<div class="unDiv"></div>
<div class="sidenav">
  <div class="content">
  <a href="earrings.php" >Earrings</a>
  <a href="rings.php">Rings</a>
  <a href="necklace.php" class="actived">Necklace</a>
  <a href="brace.php" >Bracelets</a>

</div>
</div>
<section>
 <div class="container">
  
<div class="row">
<div class="col-lg-12">
<form method="POST">
<select name="vlera" id="" class="sort">
<option value="paSort">All</option>
<option value="asc">Price: Low to High</option>
<option value="desc">Price: High to Low</option>
<option value="new">Newest</option>
</select>
<button name='sorto' class='btnSort'>Sort</button>
</form> 
</div>
</div>
<div class="row"> 
    <?php 
    
    if(isset($_POST['sorto'])){
        if($_POST['vlera'] == 'asc'){
          $qry='Select * from `product` order by price asc';
        }
        else if($_POST['vlera'] == 'desc'){
          $qry='Select * from `product` order by price desc';
        }
        else if($_POST['vlera'] == 'new'){
          $qry='Select * from `product` order by prodId desc';
        }
        else{
          $qry='Select * from `product`';
        }
      }
        else{
          $qry='Select * from `product`';
        }
    $query=$qry;
    $result=mysqli_query($con,$query);
        while($rows=mysqli_fetch_assoc($result)){
          if($rows['categoryId'] == 3){
            
        ?>
    <div class="col-lg-3 offset-1">
      <div class="card">
       <img src="<?php echo $rows['image']; ?>" class="card-img-top img-jew" alt="..."/>
        <div class="card-body">
          <h5 class="card-title" name="jName"><?php echo $rows['name']; ?></h5>
          <h6><?php echo $rows['price']; ?><span>$</span></h6>
          <a href="buy.php?prodId=<?php echo $rows['prodId']; ?> & name=<?php echo $rows['name']; ?> & price=<?php echo $rows['price']; ?> & image=<?php echo $rows['image']?> & count=<?php echo $rows['count'] ?>"  class="btn btn-success butoni">Buy</a>
          <a href="#" class="add-card btn wishlista"><i class="fas fa-heart"></i></a>
        </div>
      </div>
    </div>
    
    <?php
      }
    }
    ?>
  </div>
</div>
</section>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>