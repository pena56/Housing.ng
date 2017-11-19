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
          <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Uploaded Images</strong>
        </h2>
        <hr class="divider">
        <div class="row">
        	<div class="col-md-6 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="img/img1.jpg" alt="" id="teamImg">
              <div class="card-body text-center">
                <a href="#modal-image1" class="btn btn-primary card-title m-0" data-toggle="modal">View Image</a><br><br>
                <a href="#" class="btn btn-warning">Change Image</a>
              </div>
              <div id="modal-image1" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title">Image 1</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <img src="img/img1.jpg" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            </div>


        </div>
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="img/img2.jpg" alt="">
              <div class="card-body text-center">
                <a href="#modal-image2" data-toggle="modal" class="btn btn-primary card-title m-0">View Image</a><br><br>
                <a href="#" class="btn btn-warning">Change Image</a>
              </div>
            </div>

            <div id="modal-image2" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title">Image 2</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <img src="img/img2.jpg" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div><br>
        <div class="row">

          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="img/img3.jpg" alt="" id="teamImg">
              <div class="card-body text-center">
                <a href="#modal-image3" data-toggle="modal" class="btn btn-primary card-title m-0">View Image</a><br><br>
                <a href="#" class="btn btn-warning">Change Image</a>
              </div>
            </div>

            <div id="modal-image3" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title">Image 3</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <img src="img/img3.jpg" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-4 mb-4 mb-md-0">

            <div class="card h-100">
              <img class="card-img-top" src="img/img4.jpg" alt="">
              <div class="card-body text-center">
                <a href="#modal-image4" data-toggle="modal" class="btn btn-primary card-title m-0">View Image</a><br><br>
                <a href="#" class="btn btn-warning">Change Image</a>
              </div>
            </div>

            <div id="modal-image4" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title">Image 4</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <img src="img/img4.jpg" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-4">

            <div class="card h-100">
              <img class="card-img-top" src="img/img5.jpg" alt="">
              <div class="card-body text-center">
                <a href="#modal-image5" data-toggle="modal" class="btn btn-primary card-title m-0">View Image</a><br><br>
                <a href="#" class="btn btn-warning">Change Image</a>
              </div>
            </div>

            <div id="modal-image5" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title">Image 5</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <img src="img/img5.jpg" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              <strong>Edit Location</strong>
            </h2>
          <hr class="divider">
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group col-lg-12">
                    <label class="text-heading"><strong>Edit State:</strong></label>
                    <input type="text" class="form-control" placeholder="Previous State">
                </div>
                <div class="form-group col-lg-12">
                    <label class="text-heading"><strong>Edit City:</strong></label>
                    <input type="text" class="form-control" placeholder="Previous City">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="form-group col-lg-12">
                    <label class="text-heading"><strong>Edit Description Of Location:</strong></label>
                    <textarea class="form-control" rows="8" placeholder="Detailed description of the location of the apartment including landmarks surrounding the said property to enable the easy location of the apartment"></textarea><br>
                    <a href="#" class="btn btn-success float-right">Save Changes</a><br>
                </div>
              </div>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              <strong>Edit Description of Apartment</strong>
            </h2>
          <hr class="divider">
          	<div class="form-group col-lg-12">
                <label class="text-heading"><strong>Edit Description Of Apartment:</strong></label>
                <textarea class="form-control" rows="8" placeholder="A precise and concise descriptiion of the apartment including number of rooms and the facilities included in the apartmentLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse"></textarea><br>
                <a href="#" class="btn btn-success float-right">Save Changes</a><br>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              <strong>Edit Description Of Prefered Tenant</strong>
            </h2>
          <hr class="divider">
          	<div class="form-group col-lg-12">
                <label class="text-heading"><strong>Edit Description Of Prefered tenant:</strong></label>
                <textarea class="form-control" rows="8" placeholder="Should contain a description of the prefered tenant the apartment owner might want staying in his property such as for students only or family."></textarea><br>
                <a href="#" class="btn btn-success float-right">Save Changes</a><br>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              <strong>Edit Rental Conditions</strong>
            </h2>
          <hr class="divider">
          	<div class="form-group col-lg-12">
                <label class="text-heading"><strong>Edit Rental Conditions:</strong></label>
                <textarea class="form-control" rows="8" placeholder="Should contain a list of certain criterias the landlord user wants the tenants user to met before renting out the apartment. Criterias such as: 
                Amount Of First Rent: #0000.00 
                Amount Of Monthly/Annual Rent: #0000.00 
                Bills of Other Amenities in the building: #0000.00 
                Minimum Amount of Stay: 2years"></textarea><br>
                <a href="#" class="btn btn-success float-right">Save Changes</a><br>
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
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
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

