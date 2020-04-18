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
  <?php
  include_once 'connection.php';
  ?>
</head>

<body style="overflow-x: hidden;">
  <?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "travelblog";
  $dbTable = "post_table";
  $id = 1;
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
  $sql = "SELECT * from $dbTable where post_id=$id";
  $result = $conn->query($sql);
  ?>
  <!-- Start your project here-->
  <section id="b-head">
    <div class="bhead flex-center mb-3 flex-column">

      <h1 class="b-name align-middle mb-3 responsive-font-size"><span class="align-middle">I'm Fahi_dTraveller</span>
      </h1>
      <div class="row">
        <img class="m-3 icon-item" src="https://img.icons8.com/doodle/48/000000/whatsapp.png" />
        <img class="m-3 icon-item" src="https://img.icons8.com/doodle/48/000000/instagram-new.png" />
        <img class="m-3 icon-item" src="https://img.icons8.com/doodle/48/000000/facebook-new.png" />
        <img class="m-3 icon-item" src="https://img.icons8.com/doodle/48/000000/twitter--v1.png" />
      </div>
      <button type="button" class="btn m-5 transparent" href="#about">
        <p style="color: white;">Explore more</p>
      </button>
    </div>
  </section>
  <hr class="hr-line">
  <section id="about" class="m-5">
    <div class="row mt-3">
      <div class="col-sm-6 py-3">
        <h2 class="m-5 about-head">About Me</h2>
        <p class="ml-5 col-md-8 mr-5 mt-5 about " style="text-align: justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris leo lectus, vestibulum nec nunc quis, ultrices
          congue urna. Proin eget tellus posuere, volutpat quam eu, fringilla ante. Donec libero justo, tristique eget
          elit venenatis, porta viverra nibh. Donec bibendum tortor lorem, at iaculis leo porta ac.
        </p>
      </div>
      <div class="col-sm-6">
        <img class="about-image  hover hoverable" src="img/about.jpg">
      </div>
    </div>
  </section>
  <!--Mask with wave-->
  <hr class="hr-line">

  <section id="travel-cards" class="mb-5">
    <h2 class="m-5 text-center card-head" style="text-align: center;">Recent Visits</h2>
    <div class="row no-gutters mt-5">
      <!-- <div class="view zoom col-sm-3 travel-card-item">
        <img src="img/IMG_20180827_164430_371.jpg" class="img-fluid hoverable" alt="Sample image with waves effect.">
        <a>
          <div class="mask waves-effect waves-light rgba-white-slight">
            <h4 class="flex-center text-center white-text flex-column card-hover">Mysore</h4>
          </div>
        </a>
      </div> -->
      <div class="view overlay zoom col-sm-3">
        <a href="post.php">
          <img src="img/IMG_20180827_164430_371.jpg" class="img-fluid" alt="smaple image">
        </a>
        <div class="mask flex-center">
          <a href="post.php" class="white-text card-hover">
            <?php if ($row = $result->fetch_assoc()) {
              echo $row["post_head"];
            } ?></a>
        </div>
      </div>
      <!--Mask with wave--><a href="post.php">
        <div class="view overlay zoom col-sm-3">
          <img src="img/IMG_20180827_164430_371.jpg" class="img-fluid" alt="smaple image">
      </a>
      <div class="mask flex-center">
        <a href="post.php" class="white-text card-hover">See the post</a>
      </div>
    </div>
    <div class="view overlay zoom col-sm-3">
      <a href="post.php"><img src="img/IMG_20180827_164430_371.jpg" class="img-fluid" alt="smaple image"></a>
      <div class="mask flex-center">
        <a href="post.php" class="white-text card-hover">See the post</a>
      </div>
    </div>
    <!--Mask with wave-->
    <div class="view overlay zoom col-sm-3">
      <a href="post.php"><img src="img/IMG_20180827_164430_371.jpg" class="img-fluid" alt="smaple image"></a>
      <div class="mask flex-center">
        <a href="post.php" class="white-text card-hover">See the post</a>
      </div>
    </div>
    </div>
  </section>
  <hr class="hr-line">
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
              <a class="fb-ic">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
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