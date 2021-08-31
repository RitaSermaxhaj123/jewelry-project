<?php
ob_start(); 
?>
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


    <!-- Material Kit CSS -->
    <link href="assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <style>
    .form {
      background:#e8e4e1;
      padding: 40px;
      max-width:700px;
      margin:90px auto;
      border-radius:5px;
      box-shadow:0 4px 10px 4px grey;
      }
    .form-categories {
      list-style:none;
      padding:0;
      margin:0 0 40px 0;
      }
    .form-categories:after {
        content: "";
        display: table;
        clear: both;
      }

  	.form-categories li a {
      display:block;
      text-decoration:none;
      padding:15px;
      background:black;
      color:white;
      font-size:20px;
      float:left;
      width:50%;
      text-align:center;
      cursor:pointer;
      transition:.5s ease;
	}
	.form-categories li a:hover {
		background:#562349;
		color:white;  
	}
	.form-categories .active {
	  background:#562349;
	  color:white;
	}
  
  .tab-content > div:last-child {
	display:none;
  }
  
  ::placeholder{
    color:black;
    font-size:20px;
    opacity:0.9;
  }
  h1 {
	text-align:center;
	color:white;
	font-weight:thin;
	margin:0 0 40px;
  }
  
  input {
	font-size:22px;
	display:block;
	width:100%;
	height:50px;
	padding:5px 10px;
	background:none;
	background-image:none;
	border:1px solid black;
	color:black;
	border-radius:0;
  }
  input:focus {
		  outline:0;
		  border-color:black;
	}
  
  .field-wrap {
	position:relative;
	margin-bottom:30px;
  }
  
  .top-row :after {
	  content: "";
	  display: table;
	  clear: both;
  }
  .button {
	border:0;
	outline:none;
	border-radius:0;
	padding:15px 0;
	font-size:2rem;
	font-weight:bold;
	text-transform:uppercase;
	letter-spacing:.1em;
	background:black;
	color:white;
	transition:all.5s ease;
	-webkit-appearance: none;
  }
	.button:hover, .button:focus {
	  background:#562349;
	}
  
  .button-block {
	display:block;
	width:100%;
  }
  .db-color:hover{
        background-color: #f0c9c9 !important;
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

<div class="form">
  <ul class="form-categories">
    <li><a href="signlogin.php" class="active" id="sign">Sign Up</a></li>
    <li><a href="login.php" id="log">Log in</a></li>
  </ul>
<?php
  require('db.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['fname'])){
    $fname = stripslashes($_REQUEST['fname']); // removes backslashes
    $fname = mysqli_real_escape_string($con,$fname); //escapes special characters in a string
    $lname = stripslashes($_REQUEST['lname']); // removes backslashes
    $lname = mysqli_real_escape_string($con,$lname);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $creditcard = stripslashes($_REQUEST['creditcard']);
    $creditcard = mysqli_real_escape_string($con,$creditcard);

        $query = "INSERT into users(fName, lName, email, password, creditCard) VALUES ('$fname', '$lname',
        '$email', '".md5($password)."','$creditcard')";
        $result = mysqli_query($con,$query);
        if($result){
            // echo "<div class='form'><h3>You are registered successfully.</h3></div>";
            header("Location: login.php?");
            //ob_end_flush();
        }
    }
?>
  <div class="tab-cont">
    <div id="signup" >
       <h2>Sign Up</h2>
          <form name="signlogin" action="" method="POST">
          <div class="top-row">
            <div class="field-wrap">
              <input type="text" required autocomplete="off" name="fname" placeholder="First Name" />
            </div>
        
            <div class="field-wrap">
              <input type="text"required autocomplete="off" name="lname" placeholder="Last Name"/>
            </div>
          </div>

          <div class="field-wrap">
            <input type="email"required autocomplete="off" name="email" placeholder="E-Mail"/>
          </div>
          
          <div class="field-wrap">
            <input type="password"required autocomplete="off" name="password" placeholder="Password"/>
          </div>
          <div class="field-wrap">
            <input type="text" required autocomplete="off" name="creditcard" placeholder="Credit Card"/>
          </div>
          <button type="submit" name="submit" class="button button-block">Get Started</button>
          </form>
        </div>
  </div>
</div>
<script type="text/javascript" src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>  
</html>