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
                // Include the database configuration file  
                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $db = "travelblog";
                $dbTable = "post_table";
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

                // If file upload form is submitted 
                $status = $statusMsg = '';
                if (isset($_POST["post"])) {
                    $status = 'error';
                    if (!empty($_FILES["head_image"]["name"])) {
                        // Get file info 
                        $fileName = basename($_FILES["head_image"]["name"]);
                        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                        // Allow certain file formats 
                        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                        if (in_array($fileType, $allowTypes)) {
                            $image = $_FILES['head_image']['tmp_name'];
                            $imgContent = addslashes(file_get_contents($image));

                            // Insert image content into database 
                            $sql = "INSERT INTO post_table (date, highlight_content,post_head,post_content_1,head_image,
                            subh1,
                            subh2,
                            subh3,
                            subh4,
                            subh5,
                            subh6,
                            subh7,
                            subh8,
                            subh9,
                            subh10,
                            subh11,
                            subh12,
                            subh13,
                            subh14,
                            subh15,
                            subh16,
                            subh17,
                            subh18,
                            subh19,
                            subh20,
                            ,subc1,subc2,subc3,subc4,subc5,subc6,subc7,subc8,subc9,subc10,subc11,subc12,subc13,subc14,subc15,subc16,subc17,subc18,subc19,subc20) 
                            VALUES ('" . $_POST["Date"] . "','" . $_POST["high_cont_1"] . "','" . $_POST["post_head"] . "','" . $_POST["post_para1"] . "','" . $imgContent . "',
                            '" . $_POST["subh1"] . "','" . $_POST["subh2"] . "',
                            '" . $_POST["subh3"] . "','" . $_POST["subh4"] . "',
                            '" . $_POST["subh5"] . "','" . $_POST["subh6"] . "',
                            '" . $_POST["subh7"] . "','" . $_POST["subh8"] . "',
                            '" . $_POST["subh9"] . "','" . $_POST["subh10"] . "',
                            '" . $_POST["subh11"] . "','" . $_POST["subh12"] . "',
                            '" . $_POST["subh13"] . "','" . $_POST["subh14"] . "',
                            '" . $_POST["subh15"] . "','" . $_POST["subh16"] . "',
                            '" . $_POST["subh17"] . "','" . $_POST["subh18"] . "',
                            '" . $_POST["subh19"] . "','" . $_POST["subh20"] . "',
                            '" . $_POST["subc1"] . "','" . $_POST["subc2"] . "',
                            '" . $_POST["subc3"] . "','" . $_POST["subc4"] . "',
                            '" . $_POST["subc5"] . "','" . $_POST["subc6"] . "',
                            '" . $_POST["subc7"] . "','" . $_POST["subc8"] . "',
                            '" . $_POST["subc9"] . "','" . $_POST["subc10"] . "',
                            '" . $_POST["subc11"] . "','" . $_POST["subc12"] . "',
                            '" . $_POST["subc13"] . "','" . $_POST["subc14"] . "',
                            '" . $_POST["subc15"] . "','" . $_POST["subc16"] . "',
                            '" . $_POST["subc17"] . "','" . $_POST["subc18"] . "',
                            '" . $_POST["subc19"] . "','" . $_POST["subc20"] . "')";
                            $result = mysqli_query($conn, $sql);

                            if ($sql) {
                                $status = 'success';
                                $statusMsg = "File uploaded successfully.";
                            } else {
                                $statusMsg = "File upload failed, please try again.";
                            }
                        } else {
                            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                        }
                    } else {
                        $statusMsg = 'Please select an image file to upload.';
                    }
                }

                // Display status message 
                echo $statusMsg;
                ?>
                <form class="text-center border border-light p-5" action="admin.php" method="post" enctype="multipart/form-data">

                    <p class="h1 mb-4 m-3"> Admin Panel </p>
                    <input type="text" name="post_head" class="form-control mb-4" placeholder="Post heading">

                    <input type="date" name="Date" class="form-control mb-3" placeholder="Date">
                    <!-- Name -->
                    <input type="text" name="high_cont_1" class="form-control mb-4" placeholder="Highlight content">

                    <!-- Email -->

                    <!-- Subject -->
                    <h3>Content</h3>
                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" name="post_para1" rows="3" placeholder="Post content - Para 1"></textarea>
                    </div>
                    <h4>Upload main image here</h4>
                    <input type="file" name="head_image" class="form-control mb-3">

                    <input type="text" name="subh1" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc1" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh2" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc2" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh3" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc3" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh4" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc4" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh5" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc5" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh6" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc6" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh7" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc7" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh8" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc8" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh9" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc9" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh10" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc10" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh11" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc11" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh12" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc12" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh13" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc13" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh14" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc14" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh15" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc15" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh16" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc16" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh17" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc17" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh18" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc18" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh19" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc19" rows="2" placeholder="subcontent"></textarea>
                    <input type="text" name="subh20" class="form-control mb-4" placeholder="sub heading">
                    <textarea class="form-control rounded-0 mb-3" name="subc20" rows="2" placeholder="subcontent"></textarea>
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