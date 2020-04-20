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
  function postpage($id)
  {
    $_SESSION['postid'] = $id;
  }
  ?>
</head>

<body style="overflow-x: hidden;">

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
      <?php
      session_start();
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $db = "travelblog";
      $dbTable = "post_table";
      $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
      $sql = "SELECT * from $dbTable";
      $result = $conn->query($sql);
      ?>
      <?php while ($row = mysqli_fetch_assoc($result)) {
        
        // echo $_SESSION['postid'] ;
        // for ($i = 1; $i <= $total; $i++) {
      ?>
        <div class="view overlay zoom col-sm-3">
          <a href="post.php">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['head_image']); ?>" />
          </a>
          <div class="mask flex-center">
            <a href="post.php" id="abc" class="white-text card-hover" onclick="postpage();">
              <?php echo $row["post_head"]; ?>
            </a>
          </div>
        </div>
      <?php
      }
      ?>
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