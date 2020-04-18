<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
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
</head>
<?php
include_once 'connection.php';
?>

<body style="overflow-x: hidden;">

    <!-- Start your project here-->
    <section id="post">
        <div class="container">
            <div class="head h1 m-5 text-center">
            </div>
            <div class="blog-form">
                <!-- Default form contact -->
                <?php
                 $dbhost = "localhost";
                 $dbuser = "root";
                 $dbpass = "";
                 $db = "travelblog";
                 $dbTable="post_table";
                 $id=2;
                 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
                //  echo $_POST['name'];
                if (isset($_POST['post'])) {
                    $sql = "INSERT INTO post_table (date,highlight_head , highlight_content,post_head,post_content_1,post_content_2) 
                    VALUES ('".$_POST["Date"]."','".$_POST["high_head"]."','".$_POST["high_cont_1"]."','".$_POST["post_head"]."','".$_POST["post_para1"]."','".$_POST["post_para2"]."')";
                    $result = mysqli_query($conn,$sql);
                }
                ?>
                <form class="text-center border border-light p-5" action="admin.php" method="post">

                    <p class="h1 mb-4 m-3"> Admin Panel </p>
                    <input type="text" name="post_head" class="form-control mb-4" placeholder="Post heading">

                    <input type="date" name="Date" class="form-control mb-3" placeholder="Date">
                    <!-- Name -->
                    <input type="text" name="high_head" class="form-control mb-4" placeholder="Highlight heading">
                    <input type="text" name="high_cont_1" class="form-control mb-4" placeholder="Highlight content">

                    <!-- Email -->

                    <!-- Subject -->
                    <h3>Content</h3>
                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" name="post_para1"  rows="3" placeholder="Post content - Para 1"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control rounded-0" name="post_para2"  rows="3" placeholder="Post content - Para 2"></textarea>
                    </div>
                    <!-- <h4>Upload main image here</h4>
                    <input type="file" name="file" class="form-control mb-3"> -->


                    <!-- <h5>Upload to image Gallery</h5>
                    <input type="file" name="file" class="form-control mb-3" multiple> -->
                    <!-- Send button -->
                    <button class="btn btn-info btn-block" name="post" type="submit">Post</button>

                </form>
                <!-- Default form contact -->
            </div>
        </div>
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