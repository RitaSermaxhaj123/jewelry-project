<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <title>HomePage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--  Fonts and icons  -->
      <!-- Fonts and icons -->
      <link rel="stylesheet" type="text/css" href="style/main.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    
    <style>
    /* .sl{
      font-size:16px;
      color:black;
    } */
    /* .user{
      color:#562349;
      margin-right:25px;
    }
    .login{
      margin-top:-10px;
      margin-right:20px;
      color:#562349;
    }
    .login:hover{
      color:black;
    } */
    .fotoback{
    top:-20px;
    height:680px;
    background-size:content;
    background-repeat:no-repeat;
    background-position:center;
}
.db-color:hover{
        background-color: #f0c9c9 !important;
      }
.link-cat{
	text-decoration: none !important;
}
.sign:hover{
  border-bottom:1px solid #562349;
}
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light navi">
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
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="giftcard.php">Gifts</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="page-header header-filter main-img fotoback" data-parallax="false" style="background-image: url('images/xample2.jpg');" >
  <div class="container" style="position:static">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand text-center" style="position:relative;margin-top:120px; margin-left:-550px; color:white">
          <h1 style="margin-left:-470px">Brand New Trend</h1>
          <div class="btn-shop">
            <a href="#categories" class="link-cat">
              <li class="shop">Shop Now</li>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised">
  <div class="container">
    <div class="section text-center" style="position:relative;top:100px">
      <!-- Categories -->
      <div class="row" id="categories">
        <div class="col-lg-8">
          <a href="rings.php" class="link-cat">
            <h3 class="title-cat">Rings</h3>
            <div class="rings-section">
          </div></a>
        </div>
        <div class="col-lg-4" >
          <a href="necklace.php" class="link-cat">
            <h3 class="title-cat">Necklace</h3>
            <div class="neck-section">
          </div></a>
        </div>
        </div>
        <div class="row">
           <div class="col-lg-4" >
          <a href="brace.php" class="link-cat">
            <h3 class="title-cat">Bracelets</h3>
            <div class="brace-section">
          </div></a>
        </div>
         <div class="col-lg-8">
          <a href="earrings.php" class="link-cat">
            <h3 class="title-cat">Earings</h3>
            <div class="ear-section">
          </div></a>
        </div>
        </div>
        <hr/>
        <!-- Web Info -->
        <div class="row info-tag">
        <div class="col-lg-5">
        <div class="desc-section">
          <h2>We bloom with you</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        </div>
        <div class="col-lg-7">
          <div class="story-sec"></div>
        </div>
      </div>
      <hr/>
      <!-- Inspire Part -->
      <div class="inspire-sec">
        <div class="row row-inspo">
          <div class="col-lg-12 inspire-txt">
            Get Inspired
          </div>
          <div class="col-lg-4">
            <div class="inspo1">
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="inspo2">
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="inspo3">
              
            </div>
          </div>
        </div>
      </div>
      <hr/>
      <!-- Contact -->
      <div class="contact-sec">
        <div class="row row-contact">
        <div class="col-lg-6">
          <h2 class="contact-txt">Come and visit us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
       <div class="col-lg-6">
          <div class="shop-interior"></div>
          
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</hr>

<footer class="footer footer-default" >
  <div class="container">
    <nav class="float-left">
     
    </nav>
    <div class="copyright float-right">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>