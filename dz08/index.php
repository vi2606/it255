<?php
session_start();
include "php/functions.php";
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="modal.css">
  <title> MetHotels </title>
</head>




<body data-spy="scroll" data-target=".fixed-top">





  <!-- The Modal -->
  <div class="modal fade mod-login-modal" data-backdrop="static" id="mod-login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal body -->
        <div class="modal-body mod-login-modal-body">
          <h5 class="modal-title text-center">LOGIN TO MY ACCOUNT</h5>
          <button type="button" class="close" data-dismiss="modal" onclick="modalTurnOff()">
            <span>&times;</span>
          </button>


          <form class="mod-login-form" action="index.php" method="POST">
            <div class="form-group">
              <!-- <input type="email" class="form-control" required autocomplete="off" name="email"> -->
              <input type="name" class="form-control" required autocomplete="off" name="email">

              <label class="form-control-placeholder" for="name">Email address</label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" required autocomplete="off" name="password">
              <label class="form-control-placeholder" for="password">Password</label>
            </div>

            <div class="">
              <button type="submit" class="btn btn-success" name="loginsubmit">LOGIN</button>
            </div>

            <div class="">
              <button type="submit" class="btn btn-outline-primary mt-3 w-100" data-toggle="modal" data-target="#mod-reg"
                data-dismiss="modal">Create
                A New Account</button>
            </div>

            <div class="">
              <button type="submit" class="btn btn-outline-danger btn-sm mt-3 float-right">Forgot Your
                Password?</button>
            </div>


          </form>

        </div>
      </div>
    </div>
  </div>

  <!-- The Modal -->
  <div class="modal fade mod-login-modal" data-backdrop="static" id="mod-reg">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal body -->
        <div class="modal-body mod-login-modal-body">
          <h5 class="modal-title text-center">CREATE AN ACCOUNT</h5>

          <button type="button" class="close" data-dismiss="modal" onclick="modalTurnOff()">
            <span>&times;</span>
          </button>


          <form class="mod-login-form"  action="index.php" method="POST">
            <div class="form-group">
              <input type="name" class="form-control" required autocomplete="off" name="fname"  value="<?php
if (isset($_POST['fname'])) {
    echo h($_POST['fname']);
}
?>">
              <label class="form-control-placeholder" for="name">First Name</label>
            </div>
            <div class="form-group">
              <input type="name" class="form-control" required autocomplete="off" name="lname"   value="<?php
if (isset($_POST['lname'])) {
    echo h($_POST['lname']);
}
?>">
              <label class="form-control-placeholder" for="name">Last Name</label>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" required autocomplete="off" name="phone"   value="<?php
if (isset($_POST['phone'])) {
    echo h($_POST['phone']);
}
?>">
              <label class="form-control-placeholder" for="name">Phone Number</label>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" required autocomplete="off" name="email"   value="<?php
if (isset($_POST['email'])) {
    echo h($_POST['email']);
}
?>">
              <label class="form-control-placeholder" for="name">Email address</label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" required autocomplete="off" name="password">
              <label class="form-control-placeholder" for="password">Password</label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" required autocomplete="off"  name="confpassword">
              <label class="form-control-placeholder" for="password">Confirm Password</label>
            </div>

            <div class="form-group text-center ">
              <a href="/terms-conditions/" class="text-primary small">
                By Clicking "SIGN UP" you accept our<br>
                <span class="">Terms and Conditions</span>
              </a>
            </div>

            <div class="">
              <button type="submit" class="btn btn-success" name="regsubmit">SIGN UP</button>
            </div>
            <div class="text-center pt-3">
              <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#mod-login"
                data-dismiss="modal">Already Have An Account</button>

            </div>
          </form>

        </div>
      </div>
    </div>
  </div>



  <!-- msg modal -->

<div class="modal" tabindex="-1" role="dialog" id="msg-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div> -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>


  <header id="home">


    <nav id="main-nav" class="navbar fixed-top bg-light navbar-light navbar-expand-md">

      <div class="container-fluid">
        <!-- <div class="navbar-brand d-sm-inline-block "> -->
        <div class="navbar-brand">
          <!-- <img src="img/MetHotels2.svg" alt=""> -->
          <!-- <span></span> -->
        </div>


        <!-- <div id="navbar1" class="navbar-nav d-sm-inline-block d-md-flex  ml-sm-aut0"> -->
        <div id="navbar1" class="collapse navbar-collapse nobr">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item ">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#mission">Mission</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#footer-id">About us</a>
            </li>
          </ul>
          <span class="navbar-text d-md-inline-block ml-1 ">
            <button id="log-reg-btn" class="btn btn-primary" data-toggle="modal" data-target="#mod-login" onclick="modalTurnOn()">Login
              & Register</button>
          </span>
        </div>
        <!-- <span class="navbar-text d-none d-xl-inline-block ml-5"> -->
        <div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
      <!-- container-fluid for header -->
    </nav>

  </header>


<div class="alert alert-danger alert-dismissible fade hide" role="alert">
  <strong>Error: </strong>  No such user or bad password
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="alert alert-success alert-dismissible fade hide" role="alert">
  <strong>User added ! </strong> Login with your email and password!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <!-- carousel  -->

  <div id="featured-cont" class="container-fluid px-0">
    <div id="featured" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#featured" data-slide-to="0" class="active"></li>
        <li data-target="#featured" data-slide-to="1"></li>
        <li data-target="#featured" data-slide-to="2"></li>
        <li data-target="#featured" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 crsl-img" src="img/room.jpg" alt="Hotel room">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 crsl-img" src="img/ballroom.jpg" alt="ballroom">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 crsl-img" src="img/dining.jpg" alt="Dining room">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 crsl-img" src="img/pool.jpg" alt="Pool area">
        </div>
      </div>

      <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!-- Date picker -->
  <div id="date-pick" class="container-fluid pb-3 pt-3">

    <form>
      <fieldset class="form-group ">
        <div class="form-group form-inline ">
          <div class="row ">
            <label class="form-control-label sr-only" for="dat-dolazak">Datum dolaska</label>
            <input id="dat-dolazak" class="form-control mx-1 mt-1 col-sm-3" type="date" placeholder="Datum dolaska ">

            <label class="form-control-label sr-only" for="dat-odlazak">Datum odlaska</label>
            <input id="dat-odlazak" class="form-control mx-1 mt-1 col-sm-3 " type="date" placeholder="Datum odlaska ">

            <label class="form-control-label sr-only" for="broj-osoba">Broj osoba</label>
            <input id="broj-osoba" class="form-control mx-1 mt-1 col-sm-3 " type="number" placeholder="Broj osoba ">

            <button class="shit btn btn-primary mx-1 mt-1 col-*" type="submit ">Find room </button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>


  <div class="main">
    <!-- Mission -->
    <div class="page " id="mission">
      <div class=" container">
        <h1>Our Mission</h1>
        <div class="row">
          <p class="col-md-5 offset-md-1 text-justify">MetHotels is the world class hotel and getaway from everyday's
            life. Years of quality service and a army of satisfied
            guests are behind us and we look forward to many more still to&nbsp;come.</p>
          <p class="col-md-5 text-justify">We strive to be your only option when it comes to relaxing, having fun or
            just needing a place to lay your head.
            We want to give you long and healthy rest and have you ready for challenges that tomorrow&nbsp;brings.</p>
        </div>
        <!-- row -->
      </div>
      <!-- content container -->
    </div>
    <!-- mission page -->

    <div class="page" id="services">
      <div class=" container">
        <h1>Services</h1>
        <div class="row">
          <article class="service col-md-4 col-sm-6 col-xs-12">
            <img class="icon rounded-circle" src="img/room_icon.jpg" alt="Icon">
            <h4>Accommodation</h4>
            <p>We offer world class accommodation for your pleasure.</p>
          </article>

          <article class="service col-md-4 col-sm-6 col-12">
            <img class="icon rounded-circle" src="img/dining_icon.jpg" alt="Icon">
            <h4>Dining</h4>
            <p>Our master chefs will cook for you meals that you won't forget.</p>
          </article>

          <article class="service col-md-4 col-sm-6 col-12">
            <img class="icon rounded-circle" src="img/pool_icon.jpg" alt="Icon">
            <h4>Health</h4>
            <p>Enjoy the sun next to our magnificent pool while being served best beverages.</p>
          </article>

          <article class="service col-md-4 col-sm-6 col-12">
            <img class="icon rounded-circle" src="img/staff_icon.jpg" alt="Icon">
            <h4>Service</h4>
            <p>Our goal is your satisfaction delivered by our highly trained staff.</p>
          </article>

          <article class="service col-md-4 col-sm-6 col-12">
            <img class="icon rounded-circle" src="img/connect_icon.jpg" alt="Icon">
            <h4>Connectivity</h4>
            <p>Stay connected with complementary broadband speed internet and 4G connectivity.</p>
          </article>

          <article class="service col-md-4 col-sm-6 col-12">
            <img class="icon rounded-circle" src="img/transp_icon.jpg" alt="Icon">
            <h4>Transportation</h4>
            <p>We are taking care of your transportation while you are our guest.</p>
          </article>


        </div>
        <!-- row -->
      </div>
      <!-- content container -->
    </div>
    <!-- services page -->
  </div>
  <!-- main -->

  <!-- footer -->
  <footer>
    <div id="footer-id" class=" container-fluid">
      <div class="row">
        <div class="col-sm-4 text-center text-sm-left mb-0">
          <p class="mb-0">Call us toll-free at: </br>
            <span class="phone"> 321-534-1010</span>
          </p>

        </div>
        <!-- col-sm-4 -->



        <div class="col-sm-3 offset-sm-5">

          <nav class="navbar bg-dark navbar-light justify-content-center">
            <div id="navbar2" class="navbar-nav  ">
              <ul class="navbar-nav flex-row  ">
                <li class="nav-item ">
                  <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#mission">Mission</a>
                </li>

                </li>
              </ul>
            </div>
          </nav>



        </div>
        <!-- col-sm-4 -->
      </div>
      <!-- row -->

      <div class="row justify-content-center mb-0">

        <p>All contents &copy; 2018
          <a href="http://methotels.com">MetHotels.com</a>
        </p>

      </div>
    </div>
    <!-- footer content container -->
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
  <script src="script.js"></script>

</body>

</html>

<?php
include "php/post_process_index.php";
?>


