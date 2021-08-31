<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
     .db-color:hover, .sort option:hover{
        background-color: #f0c9c9 !important;
      }
      body{
        background-color: #faeee7;
      }
      .giftTitle{
          margin-top:30px;
          display:block;
      }
     .photocard{
         width:100%;
         height:100px;
         border-radius:10px;
         margin-top:10px;
     }
     /* .photoMain{
         width:100%;
         height:400px;
         border-radius:20px;
         margin-top:10px;
     } */
     #main{
         width:100%;
         height:400px;
         border-radius:20px;
         margin-top:10px;
         background-repeat:no-repeat;
         background-size:cover;
     }
     .btnCard{
         width:210px;
         height:50px;
         color:white;
         background-color:black;
         border:black solid 1px;
         border-radius:10px;
         margin-top:10px;
         margin-left:470px;
     }
     .mainTitle, .mainPara{
         text-align:center;
     }
     .mainTitle{
         margin-top:40px;
         font-size:40px;
     }
     .mainPara{
         margin-top:50px;
         font-size:25px;
     }
     .inputat{
         margin-top:10px;
     }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PREFITO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      <li class="nav-item active">
        <a class="nav-link" href="giftcard.php">Gifts</a>
      </li>
    
    </ul>
  </div>
</nav>
<div class="container">
      <div class="row">
      <h1 class="giftTitle">Design Your Own Gift Card</h1><br>

      <p class="giftPara">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatem impedit, 
      delectus aliquid aspernatur earum iste laboriosam recusandae consequatur, 
      excepturi repellendus inventore neque suscipit ipsum perferendis perspiciatis, autem quisquam molestiae.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatem impedit, 
      delectus aliquid aspernatur earum iste laboriosam recusandae consequatur, 
      excepturi repellendus inventore neque suscipit ipsum perferendis perspiciatis, autem quisquam molestiae.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatem impedit, 
      delectus aliquid aspernatur earum iste laboriosam recusandae consequatur, 
      excepturi repellendus inventore neque suscipit ipsum perferendis perspiciatis, autem quisquam molestiae.</p>
      </div>
      <hr>
      <!-- Images that user can use to create a card of it's own -->
      <div class="row">
        <div class="col-lg-2" >
        <img src="images/marble.jpg" alt="" class="photocard" onclick="changePhoto(1)">
        </div>
        <div class="col-lg-2" >
        <img src="images/flush.jpg" alt="" class="photocard" onclick="changePhoto(2)">
        </div>
        <div class="col-lg-2" >
        <img src="images/bokeh.jpg" alt="" class="photocard" onclick="changePhoto(3)">
        </div>
        <div class="col-lg-2" >
        <img src="images/fluska.jpg" alt="" class="photocard" onclick="changePhoto(4)">
        </div>
        <div class="col-lg-2" >
        <img src="images/grad.jpg" alt="" class="photocard" onclick="changePhoto(5)">
        </div>
        <div class="col-lg-2" >
        <img src="images/pika.jpg" alt="" class="photocard" onclick="changePhoto(6)">
        </div>
        <!-- Input for title -->
        <div class="col-lg-4 offset-2 inputat">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1" id="title">
        </div> 
        </div>
        <!-- Input for color -->
        <div class="col-lg-4 inputat">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="color" aria-label="Username" aria-describedby="basic-addon1" id="color">
        </div> 
        </div>
        <!-- Input for description -->
        <div class="col-lg-8 offset-2">
        <div class="input-group">
        <textarea class="form-control" placeholder="Write your own description" aria-label="With textarea" id="desc"></textarea>
        </div>
        </div>
        <!-- Button that generates the data to be displayed in the div  -->
        <button class="btnCard" id="btnInsert" onclick="insert()">Insert</button>
        <!-- The content that it is written in input and the image that it is choosen will be displayed here in the dom way -->
        <div class="col-lg-8 offset-2" class="photoMain" id="main">
        
        </div>
        
        <button class="btnCard" id="gfsave" onclick="save()">Save Your Card</button>
        <p id="preview"></p>
      </div>
</div>
    <script src="html2canvas.js"></script>
    <script src="html2canvas.min.js"></script>
    <script src="canvas2image.js"></script>
    <script src="jquery-3.3.1.js"></script>
    <script>
      $('#gfsave').click(function(){
        var elm = $('#main').get(0)
        var type = "jpg"
        var file="giftcard"
        html2canvas(elm).then(function(canvas){
          var canWidth = canvas.width
          var canHeight = canvas.height
          var img = Canvas2Image.convertToImage(canvas,canWidth,canHeight)
          $('#preview').after(img)
          Canvas2Image.saveAsImage(canvas,file,type)
        })
      })
    </script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>