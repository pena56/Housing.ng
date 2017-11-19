<?php 

  include_once '../php-files/session.php';
  include_once '../php-files/users.php';

  if(!($session->is_logged_in())) header("Location: ../general-section/signin.php");
  $tenant = User::find($session->user_id);
  $age = User::getAge($tenant->dob);

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php"><strong><span class="fa fa-home fa-2x"></span>Home</strong>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="message.php"><strong><span class="fa fa-comments-o fa-2x"></span>Messages</strong></a>
            </li>
            <li class="nav-item active px-lg-4">
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
              <strong><?php echo "$tenant->first_name"; ?> Profile</strong>
            </h2>
          <hr class="divider">
            <div class="row">
              <div class="col-lg-8">
                <div class="bg-faded p-4 my-4">
                  <hr class="divider">
                    <h2 class="text-center text-lg my-0">
                      <strong>Learn About <?php echo "$tenant->first_name"; ?></strong>
                    </h2>
                  <hr class="divider">
                    <p><?php echo "$tenant->about_me"; ?></p>
                  <hr class="divider">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top img-fluid" src="img/empty_profile.png" alt="">
                    <div class="card-body text-center">
                      <h4 class="card-title m-0"><?php echo "$tenant->first_name $tenant->last_name"; ?>
                        <hr class="divider">
                          <small class="text-muted"><strong>Username:</strong> <?php echo "$tenant->username"; ?></small><br>
                        <hr class="divider">
                          <small class="text-muted"><strong>Address:</strong> <?php echo "$tenant->address "; ?></small><br>
                        <hr class="divider">
                          <small class="text-muted"><strong>Age:</strong> <?php echo "$age"." "; ?> years</small>
                        <hr class="divider">
                          <small class="text-muted"><strong>Email:</strong> <?php echo "$tenant->email "; ?></small><br>
                        <hr class="divider">
                        <div class="form-group col-lg-12">
                          <a href="edit-profile.php"><button type="submit" class="btn btn-warning">Edit Profile</button></a>
                        </div>
                      </h4>
                    </div>
                </div>
              </div>
            </div>
        </div>
      
    </div>

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
