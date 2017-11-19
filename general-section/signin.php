<?php
  include_once '../php-files/users.php';
  include_once '../php-files/session.php';

  $msg = "";
  if(isset($_POST['submit'])){
    $user = User::instantiate($_POST);
    if($user->insertUser()){
      $session->login($user);
      if($user->role == 'Tenant'){
        $user->redirect("../tenants-section/profile.php");
      }elseif ($user->role == 'Landlord'){
        $user->redirect("../landlord-section/profile.php");
      }
    } else {
      $msg = "<div class='alert alert-danger alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Registration Failed!</strong></h4>
                <p class='text-center'>Something went wrong, check your inputs and try again.</p>
                </div>";
    }
  }

  if(isset($_POST['login'])){
    $password = $_POST['password'];
    $username = $_POST['username'];

    $user = User::authenticate($password,$username);
    if($user){
      $session->login($user);
      if($user->role == 'Tenant'){
        $user->redirect("../tenants-section/index.php");
      }elseif ($user->role == 'Landlord'){
        $user->redirect("../landlord-section/index.php");
      }
    }else{
      $msg = "<div class='alert alert-danger alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Login Failed!</strong></h4>
                <p class='text-center'>Incorrect Username or Password.</p>
                </div>";
    }
  }

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
              <a class="nav-link text-uppercase text-expanded" href="index.html"><strong><span class="fa fa-home fa-2x"></span>Home</strong>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html"><strong><span class="fa fa-id-card fa-2x"></span>About</strong></a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.html"><strong><span class="fa fa-phone fa-2x"></span>Contact</strong></a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="signin.php"><strong><span class="fa fa-sign-in fa-2x"></span>Log in | Sign up</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="bg-faded p-4 my-4">
          <section clas="main-container">
            <div class="container">
              <p><?php echo $msg; ?></p>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-block">
                          <h2><strong>Register</strong></h2>
                          <div class="form">
                            <form action="signin.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your First Name" name="first_name"  required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Last Name" name="last_name"  required>
                                </div>
                                <div class="form-group">
                                    <input id="username" type="text" class="form-control" placeholder="Enter Your Username" name="username"  required><em class="text-danger" id="username-msg"></em>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="sex">
                                      <option selected="" disabled="">Choose your Sex</option>
                                      <option>Male</option>
                                      <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Enter Your Date Of Birth" name="dob" required>
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control" placeholder="Enter Your email" name="email"  required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter Password" name="password"  required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Repeat Password"  required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="role" required>
                                      <option value='' >Choose Your Role</option>
                                      <option value="Tenant">Tenant</option>
                                      <option value='Landlord'>Landlord</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Current Address" name="address">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter a brief description About youself to help Other users Know More about you" rows="6" name="about_me"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary custom-btn" name="submit">Register</button>
                            </form>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-block">
                           <h2><strong>Login</strong></h2>
                           <div class="form">
                            <form action="signin.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                                </div>
                                <button type="submit" class="btn btn-success custom-btn" name="login">Log In</button>
                            </form>
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
    <script type="text/javascript" src="script.js"></script>
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
