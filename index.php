<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fahi_dTraveller</title>
  <!-- MDB icon -->
  <!-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">

</head>

<body style="overflow-x: hidden;">

  <!-- Start your project here-->
  <section id="b-head">
    <div class="bhead flex-center mb-3 flex-column">

      <h1 class="b-name align-middle mb-3 responsive-font-size"><span class="align-middle">I'm Fahi_dTraveller</span>
      </h1>
      <div class="row">
        <a href="https://wa.me/8714458402">
          <img class="m-3 icon-item" src="https://img.icons8.com/doodle/48/000000/whatsapp.png" />
        </a>
        <a href="https://www.instagram.com/fahi_dtraveller/">
          <img class="m-3 icon-item" src="https://img.icons8.com/doodle/48/000000/instagram-new.png" />
        </a>
        <a href="https://www.linkedin.com/in/mohamed-fahim-586b8a18a/">
          <img class="m-3 icon-item" src="https://img.icons8.com/doodle/48/000000/linkedin--v2.png" />
        </a>
        <a href="https://www.facebook.com/mfahim1997">
          <img class="m-3 icon-item" src="https://img.icons8.com/doodle/48/000000/facebook-new.png" />
        </a>
      </div>
      <a href="#about">
        <button type="button" class="btn m-5 transparent" href="#about">
          <p style="color: white;">Explore more</p>
        </button>
      </a>
    </div>
  </section>
  <hr class="hr-line">
  <section id="about" class="m-5">
    <div class="row mt-3">
      <div class="col-sm-6 py-3">
        <h2 class="m-5 about-head text-center">About Me</h2>
        <p class=" col-md-8 about text-center mx-auto">
          Hey I’m Fahim. Just a curious fellow, who wants to hit the road and explore every corner of the world. I have just started this journey of self-enlightenment and I wish to share every story of every person and every destination that I may come across, with as many people as possible.
        </p>
      </div>
      <div class="col-sm-6">
        <img class="about-image  hover hoverable" src="img/about.jpg" style="max-height: 100%;max-width:100%;">
      </div>
    </div>
  </section>
  <!--Mask with wave-->
  <hr class="hr-line">
  <section id="quote">
    <div class="jumbotron jumbotron-fluid col-sm-8 mx-auto m-3">
      <blockquote class="blockquote text-center">
        <p class="h3-responsive mb-0">“Let the world change you, and you change the world”</p>
        <footer class="blockquote-footer mb-3"><cite title="Source Title">Che Guevara</cite></footer>
      </blockquote>
    </div>
  </section>
  <section id="travel-cards" class="mb-5">
    <h2 class="m-5 text-center card-head" style="text-align: center;">Recent Visits</h2>
    <div class="row no-gutters mt-5 flex-center" style="margin-left: auto;margin-right:auto;">
      
        <div class="view overlay zoom col-sm-3 mx-auto">
          <a href="post.php">
            <img src="img/IMG_7435.JPG" class="mx-auto" style="max-width: 100%;max-height:100%" />
          </a>
          <div class="mask flex-center">
            <a id="abc" class="white-text card-hover" href="post.php">Chasing the Kumari
            </a>
          </div>
        </div>
        <div class="view overlay zoom col-sm-3 mx-3">
          <a href="post.php">
            <img src="img/head2.jpg" class="mx-auto" style="max-width: 100%;max-height:100%" />
          </a>
          <div class="mask flex-center">
            <a id="abc" class="black-text card-hover" href="post2.php">Journey across Chennai
            </a>
          </div>
        </div>
    </div>
  </section>
  <hr class="hr-line">
  <section class="subscription">
    <?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "travelblog";
    $dbTable = "SubscriberTable";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
    if (isset($_POST['send'])) {
      $sql = "INSERT INTO SubscriberTable (name, email) VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "')";
      $result = mysqli_query($conn, $sql);
    }
    $sql = "SELECT email,name from $dbTable";
    $result = $conn->query($sql);
    ?>
    
    <div class="row">
      <div class="col-sm-4 flex-center flex-column mx-auto">
        <img src="img/undraw_subscriber_vabu.png" style="max-width: 100%;max-height:100%;">
      </div>
      <div class="col-sm-4 mx-auto">
        <p class="h2 text-center mb-4">Subscribe</p>
        <!-- Default form subscription -->
        <form class="text-center border border-light p-5 mb-5 my-auto" action="index.php" method="post">

          <!-- Name -->
          <input type="text" name="name" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">

          <!-- Email -->
          <input type="email" name="email" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail">

          <!-- Sign in button -->
          <button class="btn btn-block" name="send" type="submit" style="background-color: #f7a825;">Subscribe</button>


        </form>
        <!-- Default form subscription -->
      </div>
    </div>
  </section>
  <section id="footer">
    <!-- Footer -->
    <footer class="page-footer font-small yellow darken-3">

      <!-- Footer Elements -->
      <div class="container">

        <!-- Grid row-->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12 py-3">
            <div class="mb-3 flex-center">

              <!-- Facebook -->
              <a class="fb-ic" href="https://www.facebook.com/mfahim1997">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <a class="wa-ic" href="https://wa.me/8714458402">
                <i class="fab fa-whatsapp fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
              </a>
              <!--Linkedin -->
              <a class="li-ic" href="https://www.linkedin.com/in/mohamed-fahim-586b8a18a/">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic" href="https://www.instagram.com/fahi_dtraveller/">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
  </section>
  <!-- End your project here-->
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>

</html>