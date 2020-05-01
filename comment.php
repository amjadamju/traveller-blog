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
    <section id="travel-cards" class="mb-5">
        <h2 class="m-5 text-center card-head" style="text-align: center;">Comments</h2>
        <div class="row no-gutters mt-5" style="margin-left: auto;margin-right:auto;">
            <?php
            $dbhost = "sql202.epizy.com";
            $dbuser = "epiz_25625347";
            $dbpass = "";
            $db = "epiz_25625347_travelblog";
            $dbTable = "comment_table";
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
            $sql = "SELECT * from $dbTable";
            $result = $conn->query($sql);
            ?>
            <?php while ($row = mysqli_fetch_assoc($result)) {

                // echo $_SESSION['postid'] ;
                // for ($i = 1; $i <= $total; $i++) {
            ?>
                <div class="row mx-auto" style="width:100%;">
                        <h4><?php echo $row['name'];?> - <?php echo $row['comment'];?><br></h4>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

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