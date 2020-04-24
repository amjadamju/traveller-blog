<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Post</title>
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

</head>
<style>
    .post-head-image{
        background-image: url('<?php echo $row['head_image'];?>');
    }
</style>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "travelblog";
$dbTable = "post_table";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
if (isset($_POST["postsend"])) {
    $id= $_POST['postid'];
}
$sql = "SELECT * from post_table where post_id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

    ?>

<body style="overflow-x: hidden;">

    <!-- Start your project here-->
    <section class="post-head">
        <div class="post-head-image">
            <div class="navbar">
                <a href="index.php">
                    <h4 class="text-white post-heading p-1">Home</h4>
                </a>
            </div>
            <div class="flex-center flex-column">
                <h2 class="post-heading  text-white">
                    <?php
                    echo $row['post_head'];
                    ?> </h2>
            </div>

        </div>
    </section>

    <section id="post-detail">
        <div class="post-highlight m-5 col-sm-6 mx-auto">
            <blockquote class="blockquote bq-warning ">
                <p>
                    <?php echo $row['highlight_content']?>
                </p>
            </blockquote>
        </div>
        <div class="container col-sm-6 py-5 mx-auto">
            <p>

                <h3 class="py-3">What is Lorem Ipsum?</h3>
                <?php echo $row['post_content_1']?>
                
                </p>
        </div>

    </section>
    <section id="post-gallery">
    </section>
    <section id="feedback">
        <div class="row mt-5 mb-5 m-1">
            <div class="col-sm-6 border py-3 px-5 rounded-sm mx-auto">
                <div class="row text-md-left mb-3">
                    <h3>Leave a Comment</h3>
                </div>
                <div class="row mb-3">
                    <p>our mail will not be published.Required fields are marked:)</p>
                </div>
                <?php
                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $db = "travelblog";
                $dbTable = "comment_table";
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
                //  echo $_POST['name'];
                if (isset($_POST['send'])) {
                    $sql = "INSERT INTO comment_table (name, email,comment) VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["comment"] . "')";
                    $result = mysqli_query($conn, $sql);
                }
                $sql = "SELECT comment,name from $dbTable WHERE comment_id = $id";
                $result = $conn->query($sql);

                ?>
                <form id="review" action="post.php" method="post">
                    <div class="form-group">
                        <textarea name="comment" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="6" placeholder="Type here"></textarea>
                    </div>
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text" name="name" class="form-control" placeholder="First name">
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col">
                            <!-- Default input -->
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <!-- Grid column -->
                    </div>

                    <button type="submit" name="send" class="my-3 btn btn-amber">Submit</button>
                    <h1>
                        <?php if ($row = $result->fetch_assoc()) {
                            // echo "<h1>" . $row["comment"] . "<br>" . $row["name"] . "</h1>";
                        } ?>
                        </h1>
                </form>
            </div>
        </div>
    </section>
    <!-- <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-3 gallery-item">
                    <img src="img/about.jpg">
                </div>
                <div class="col-3 gallery-item">
                    <img src="img/about.jpg">
                </div>
                <div class="col-3 gallery-item">
                    <img src="img/about.jpg">
                </div>
                <div class="col-3 gallery-item">
                    <img src="img/about.jpg">
                </div>
            </div>
        </div>
    </section> -->
    <section id="footer">
        <!-- Footer -->
        <footer class="page-footer font-small teal pt-4">

            <!-- Footer Text -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-4 mt-md-0 mt-3">

                        <!-- Content -->
                        <div class="mb-5 flex-center">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a><br>
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
            </div>

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </section>

    </script>


    <!-- End your project here-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <!-- <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            var name = $("#userName").val();
            var email = $("#userEmail").val();
            var comment = $("#subject").val();

            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
    </script> -->
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