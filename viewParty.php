<?php
include './include/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
       <?php 
       include './compo/header.php';
       ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php 
       include './compo/sidebar.php';
       ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Today Users </div>
                                    <div class="stat-digit"> <i class="fa fa-user" aria-hidden="true"></i>  <?php 
// Execute the query to select all rows from the 'tins' table
$sql2 = mysqli_query($conn, "SELECT * FROM user");

// Get the number of rows in the result set
$count = mysqli_num_rows($sql2);

// Display the count
echo  $count;
?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Pending Amount</div>
                                    <div class="stat-digit"> &#8377; 650</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header ">
                                <h4 class="card-title">Parties Table</h4>
                                <input class="form-control col-6" type="search" placeholder="Search" aria-label="Search">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr style='color:black;'>
                                                <th scope="col">Name</th>
                                                <th scope="col">Moblie</th>
                                                <th scope="col">Pending Tins</th>
                                                <th scope="col">Pending Amount</th>
                                                <!-- <th scope="col">Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                $sql1 = mysqli_query($conn, "select * from user");


                while ($j = mysqli_fetch_array($sql1)) {
                    ?>
                                           
                                            <tr onclick="location.href='profile.php?id=<?php echo $j['id']; ?>'" style="cursor: pointer;">
                                                <td><?php 
                                                $quantity=0;
                                                $sql7="select * from user where id='".$j['id']."'";
                                                $sql6 = mysqli_query($conn, $sql7);
    while ($j6 = mysqli_fetch_array($sql6)) {

      
        echo $j6['Name'];
    }
                                                ?></td>
                                                <td><?php 
                                                $quantity=0;
                                                $sql11="select * from user where id='".$j['id']."'";
                                                $sql10 = mysqli_query($conn, $sql7);
    while ($j10 = mysqli_fetch_array($sql10)) {

      
        echo $j10['Mobile'];
    }
                                                ?></td>
                                                <td>
                                                <span class="badge badge-warning">  <i class="fa fa-database"></i> <?php 
                                                $amount1=0;
                                                $sql4="select * from log where user_id='".$j['id']."'";
                                                $sql5 = mysqli_query($conn,$sql4 );
    while ($j1 = mysqli_fetch_array($sql5)) {

$amount1=$amount1+$j1['quantity'];
    
    }
    echo $amount1;
                                                ?></span>
                                                </td>
                                                <td><span class="badge badge-primary">&#8377; <?php 
                                                $amount=0;
                                                $sql3="select * from log where user_id='".$j['id']."'";
                                                $sql2 = mysqli_query($conn,$sql3 );
    while ($j = mysqli_fetch_array($sql2)) {

$amount=$amount+$j['amount'];
    
    }
    echo $amount;
                                                ?></span>
                                                </td>
                                        
                                            </tr>
<?php } ?>
                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
</div>
</div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>