<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

<style>
.logo {height:100px;}
.contact-header {margin-top:20px;}
.contact-header>b {color:orange;}
.dropdown-item {color:white;}
.nav-link, .navbar-nav {margin:0px 8px;}
.carousel-item>img {height:calc(100vh - 150px);}


.cards .col-sm-4 {height:500px; overflow:hidden; padding:0;}
.cardmenu {background-size:cover; background-position: center; background-repeat: no-repeat;height:500px; }
.cardhover {height:100%; width:100%; position:relative;-webkit-transition: 0.2s; transition: 0.2s;}
.cardhover:hover {background-color:rgba(255, 0, 0, 0.6); cursor:pointer;}
.cards p {width:100%; height:50px; background-color:rgba(255, 0, 0, 0.3); color:white; text-align:center; position:absolute; bottom:0; left:0; margin:0; line-height:50px; -webkit-transition: 0.4s; transition: 0.4s;}
.cardhover:hover p { height:100%; line-height:250px;}

.footer {background-color:#343a40;}

.social {text-align:center; margin-top:20px;}
.footer .fab {font-size:25px; height:40px; width:40px; border:; text-align:center; line-height:40px; border-radius:50px; color:white;  box-shadow: 2px 5px 30px 1px black; margin:3px;}
.footer .fab:hover {box-shadow: 0px 0px 0px 0px black;}
.fa-facebook-f {background-color:#3b5998;}
.fa-linkedin-in {background-color:#0082ca;}
.fa-google-plus-g {background-color:#dd4b39;}

.logoengfooter, .logoarbfooter{max-width:250px; display:block;margin:auto;}

.section_button {text-align:center; margin-top:5px; margin-bottom:30px;}

.bottomfooter {background-color:#18262a; text-align:center; width:100%; height:70px;}
.bottomfooter ul { margin:0;}
.bottomfooter li {display:inline; line-height:70px; color:wheat; font-size:12px;}

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
  </body>
</html>