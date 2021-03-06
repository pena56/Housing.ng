<?php 

  include_once '../php-files/generalClass.php';
  include_once '../php-files/session.php';

  if(!($session->is_logged_in())) header("Location: ../general-section/signin.php");

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View-item</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../vendor/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="../css/business-casual.css" rel="stylesheet">

  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Students Housing</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Students Housing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php"><strong><span class="fa fa-home fa-2x"></span>Home</strong>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="message.php"><strong><span class="fa fa-comments-o fa-2x"></span>Messages</strong></a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="profile.php"><strong><span class="fa fa-user fa-2x"></span>Profile</strong></a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="../php-files/logout.php"><strong><span class="fa fa-sign-out fa-2x"></span>Log out</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="bg-faded p-4 my-4">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" data-interval="false"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid w-100" src="img/img1.jpg" alt="">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid w-100" src="img/img2.jpg" alt="">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid w-100" src="img/img3.jpg" alt="">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid w-100" src="img/img4.jpg" alt="">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid w-100" src="img/img5.jpg" alt="">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              <strong>Location</strong>
            </h2>
          <hr class="divider">
            <div class="row">
              <div class="col-lg-8">
                <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0">
                  <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                </div>
              </div>
              <div class="col-lg-4">
                <p>Detailed description of the location of the apartment including landmarks surrounding the said property to enable the easy location of the apartment</p>
              </div>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              <strong>Description</strong>
            </h2>
          <hr class="divider">
            <p>A precise and concise descriptiion of the apartment including number of rooms and the facilities included in the apartment</p>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
              <li>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
              <li>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</li>
              <li>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
            </ul>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              <strong>Prefered Tenant</strong>
            </h2>
          <hr class="divider">
            <p>Should contain a description of the prefered tenant the apartment owner might want staying in his property such as for students only or family.</p>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              <strong>Availabilty</strong>
            </h2>
          <hr class="divider">
            <p>Should notify the tenant users of the number of buildings the landlord user still has avialable or if the apartments are completely rented out.</p>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              <strong>Rental Conditions</strong>
            </h2>
          <hr class="divider">
            <p>Should contain a list of certain criterias the landlord user wants the tenants user to met before renting out the apartment. Criterias such as:</p>
            <ul>
              <li>Amount Of First Rent: #0000.00</li>
              <li>Amount Of Monthly/Annual Rent: #0000.00 </li>
              <li>Bills of Other Amenities in the building: #0000.00</li>
              <li>Minimum Amount of Stay: 2years</li>
            </ul>
        </div>

        <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Contact /Landlord name/</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-6">
            <div class="card h-100">
              <img class="card-img-top" src="img/img1.jpg" alt="" id="teamImg">
              <div class="card-body text-center">
                <a target="_blank" href="contact-owner.php"><h4 class="card-title m-0">Contact /landlord name/<br>
                </h4></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h3>/LANDLORD NAME/</h3>
            <h4>from /ADDRESS OF LANDLORD/</h4>
            <p>Member Since: /Date landlord Registered./</p>
            <p>Response Rate: /70%/</p>
            <p>Number of Properties: /3/</p>
            <div class="form-group col-lg-12">
              <a target="_blank" href="owner-profile.php"><button type="submit" class="btn btn-primary">View Profile</button></a>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!-- /.container -->

    <!-- scroll to top button -->
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
    <!-- /scroll to top button -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; StudentsHousing.com 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
      // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0; // For Chrome, Safari and Opera 
                document.documentElement.scrollTop = 0; // For IE and Firefox
            }
    </script>

  </body>

</html>
