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

.contactperson {padding:30px;}


.jumbotron {
background: #311761;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}

.fas {padding-right:20px;}

.mapcontain {padding:0; padding-top:50px; }
.map {width:100%; height:500px;}

</style>



    <title>Nexrise-Events</title>
  </head>
  <body>
  
<?php include 'menu.php';?>


<div class="container contactperson">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mohammed Khobaib</h5>
		<p><i class="fas fa-users"></i>Founder and Chief Executive Officer</p>
		<p><i class="fas fa-envelope"></i><a href="mailto:muhammed@nexrise-events.com">muhammed@nexrise-events.com</a></p>
		<p><i class="fas fa-phone"></i><a href="tel:+919739545678">+91-9739545678</a></p>
      </div>
    </div>
</div>

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Nexrise Events</strong><br>
                Flat:91, Building:205, Road:2803,<br>
Block:42, Al Seef.<br>
Kingdom of Bahrain, <br>
                <abbr title="Phone">
                    P:</abbr>
                <a href="tel:+919739545678">+91-9739545678</a>
            </address>
            <address>
                <strong>Mohammed Khobaib</strong><br>
                <a href="mailto:muhammed@nexrise-events.com">muhammed@nexrise-events.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid mapcontain">
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d337.0537260719575!2d50.53454927714327!3d26.240215671267755!2m3!1f90!2f39.41789957698271!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x0%3A0xa9598925b58eb298!2sACT+Pro+Consultancy+%26+Business+Services!5e1!3m2!1sen!2sin!4v1509918581144" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php include 'footer.php';?>



    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>

$("#contact").addClass("active");

</script>


  </body>
</html>