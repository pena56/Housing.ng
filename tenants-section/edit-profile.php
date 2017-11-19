<?php 

  include_once '../php-files/session.php';
  include_once '../php-files/users.php';

  $msg = '';
  if(!($session->is_logged_in())) header("Location: ../general-section/signin.php");
  $tenant = User::find($session->user_id);

  if(isset($_POST['update'])){
        $update_tenant = User::instantiate($_POST);
        $update_tenant->username = $tenant->username;
        if($update_tenant){
          if($update_tenant->update()){
            $msg = "<div class='alert alert-success alert-dismissable'>
                      <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <h4 class='text-center'><strong>Update Successful</strong></h4>
                    </div>";
          }else{
            $msg = "<div class='alert alert-danger alert-dismissable'>
                      <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <h4 class='text-center'><strong>Update Failed!</strong></h4>
                      <p class='text-center'>Something went wrong, check your inputs and try again.</p>
                    </div>";
          }
        }
      }
      $tenant = User::find($session->user_id);

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Students Housing</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../vendor/font-awesome-4.7.0/css/font-awesome.min.css">

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
          <section clas="main-container">
            <?php echo "$msg"; ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-block">
                          <h2><strong>Edit Profile</strong></h2>
                          <div class="form">
                            <form action="edit-profile.php" method="post">
                                <div class="form-group col-lg-12">
                                    <label class="text-heading"><strong>Edit First Name:</strong></label>
                                    <input name="first_name" type="text" class="form-control" placeholder="<?php echo "$tenant->first_name"; ?>">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="text-heading"><strong>Edit Last Name:</strong></label>
                                    <input name="last_name" type="text" class="form-control" placeholder="<?php echo "$tenant->last_name"; ?>">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="text-heading"><strong>Edit Date of Birth:</strong></label>
                                    <input name="dob" type="date" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="text-heading"><strong>Edit Email Address:</strong></label>
                                    <input name="email" type="email" class="form-control" placeholder="<?php echo "$tenant->email"; ?>">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="text-heading"><strong>About Me:</strong></label>
                                    <textarea name="about_me" class="form-control" rows="6" placeholder="<?php echo "$tenant->about_me"; ?>"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="text-heading"><strong>Change Password:</strong></label>
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="text-heading"><strong>Confirm Password:</strong></label>
                                    <input name="password" type="password" class="form-control" placeholder="Confirm New Password">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="text-heading"><strong>Change Address:</strong></label>
                                    <input name="address" type="text" class="form-control" placeholder="<?php echo "$tenant->address"; ?>">
                                </div>
                                <button type="submit" class="btn btn-success custom-btn" name="update">Save Changes</button>
                            </form>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card h-100">
                          <img class="card-img-top" src="img/empty_profile.png" alt="">
                            <div class="card-body text-center">
                                <hr class="divider">
                                  <small class="text-muted">Last Seen: 2 days ago</small>
                                <hr class="divider">
                                <div class="form-group col-lg-12">
                                  <a href="profile.php"><button type="submit" class="btn btn-primary">View Profile</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
    </div>
    <!-- container -->

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
