<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="style.css">

<style>



.cards .col-sm-4 {height:500px; overflow:hidden; padding:0;}
.cardmenu {background-size:cover; background-position: center; background-repeat: no-repeat;height:500px; }
.cardhover {height:100%; width:100%; position:relative;-webkit-transition: 0.2s; transition: 0.2s;}
.cardhover:hover {background-color:rgba(255, 0, 0, 0.6); cursor:pointer;}
.cards p {width:100%; height:50px; background-color:rgba(255, 0, 0, 0.3); color:white; text-align:center; position:absolute; bottom:0; left:0; margin:0; line-height:50px; -webkit-transition: 0.4s; transition: 0.4s;}
.cardhover:hover p { height:100%; line-height:250px;}



</style>	



    <title>Nexrise-Events</title>
  </head>
  <body>
  
<?php include 'menu.php';?>


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/city1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/city2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/city3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/city4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="container-fluid cards">

<div class="row">
<div class="col-sm-4">
<div class="cardmenu" style="background-image:url('img/d2.jpg');">
<div class="cardhover"><p>ABOUT</p></div>
</div>
</div>
<div class="col-sm-4">
<div class="cardmenu" style="background-image:url('img/d3.jpg');">
<div class="cardhover"><p>EVENTS</p></div>
</div>
</div>
<div class="col-sm-4">
<div class="cardmenu" style="background-image:url('img/d1.jpg'); height:250px;">
<div class="cardhover"><p>GALLERY</p></div>
</div>
<div class="cardmenu" style="background-image:url('img/d4.jpg'); height:250px;">
<div class="cardhover"><p>CONTACT</p></div>
</div>
</div>
</div>

</div>

<?php include 'footer.php';?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>

$("#home").addClass("active");

</script>


  </body>
</html>