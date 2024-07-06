<?php 
session_start();
include './include/config.php';
if (!empty($_GET)) {
    $userId=$_GET['id'];

    $sql1 = mysqli_query($conn, "select * from user where id='$userId'");
    while ($j = mysqli_fetch_array($sql1)) {
    $userName=$j['Name'];
    $mobile=$j['Mobile'];
    
    }

}
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
    <link href="./css/style.css" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="./vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="./vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="./vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="./vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.date.css">
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
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <!-- <p class="mb-0">Your business dashboard template</p> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Party Profile</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                            <div class="row ">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary"><?php echo $userName; ?></h4>
                                                        <p>Party Name</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted"><?php echo $mobile; ?></h4>
                                                        <p>Mobile Number</p>
                                                    </div>
                                                </div>
</div>
                                <div class="profile-statistics">
                                    <div class="text-center mt-4 border-bottom-1 pb-3">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0"><?php 
                                                $quantity=0;
                                                $sql2 = mysqli_query($conn, "select * from log where user_id='$userId'");
    while ($j = mysqli_fetch_array($sql2)) {

        $quantity=$quantity+$j['quantity'];
    
    }
    echo $quantity;
                                                ?>
                                                </h3><span> <i class="fa fa-database"></i> Tins</span>
                                            </div>
                                          
                                            <div class="col">
                                                <h3 class="m-b-0"><?php 
                                                $amount=0;
                                                $sql2 = mysqli_query($conn, "select * from log where user_id='$userId'");
    while ($j = mysqli_fetch_array($sql2)) {

$amount=$amount+$j['amount'];
    
    }
    echo $amount;
                                                ?>
                                                </h3><span> &#8377; Amount</span>
                                            </div>
                                        </div>
                                        <div class="mt-4"><a href="javascript:void()"  data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary pl-5 pr-5 mr-3 mb-4">ADD RECORD</a> 
                                        
                                      
                                    <!-- Modal -->
                                    <div class="modal fade col-12"  id="exampleModalCenter">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Enter Details   </h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action='addRecord.php' method='POST'>
                                                <div class="input-group mb-3" >
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark ">Date/Time</span>
                                            </div>
                                            <input type="text" class="form-control" name='out_time' id="min-date">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark ">Quantity</span>
                                            </div>
                                            <input type="number" class="form-control" name='quantity' id="min-date">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark">Amount</span>
                                            </div>
                                            <input type="number" class="form-control" name='amount' id="min-date">
                                        </div>
                                        <input type='hidden' name='out_by' value="<?php echo $_SESSION['admin_id']; ?>">
                                        <input type='hidden' name='user_id' value="<?php echo $userId; ?>">
     
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Clear</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
</form>
                                        </div>
                                    </div>



                                    </div>
                                </div>

                          
                               
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Record Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr style='color:black;'>
                                                <th scope="col">Date</th>
                                                <th scope="col">Pending Tins</th>
                                                <th scope="col">Pending Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                $sql1 = mysqli_query($conn, "select * from log where user_id='$userId'");


                while ($j = mysqli_fetch_array($sql1)) {
                    ?>
                                            <tr href="javascript:void()"  data-toggle="modal" data-target="#exampleModalCenter<?php echo $j['id']; ?>" >
                                                <td><?php echo $j['out_time']; ?></td>
                                                <!-- <td>98989898989</td> -->
                                                <td>
                                                <span class="badge badge-warning">  <i class="fa fa-database"></i> <?php echo $j['quantity']; ?></span>
                                                </td>
                                                <td><span class="badge badge-primary">&#8377; <?php echo $j['amount']; ?></span>
                                                </td>
                                            

                                                <div class="modal fade col-12"  id="exampleModalCenter<?php echo $j['id']; ?>">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Enter Details   </h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action='updateRecord.php' method='POST'>
                                    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark ">Quantity</span>
                                            </div>
                                            <input type="number" class="form-control" name='quantity' value="<?php echo $j['quantity']; ?>">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark">Amount</span>
                                            </div>
                                            <input type="number" class="form-control" name='amount' value="<?php echo $j['amount']; ?>">
                                        </div>
                                        <input type='hidden' name='out_by' value="<?php echo $_SESSION['admin_id']; ?>">
                                        <input type='hidden' name='user_id' value="<?php echo $userId; ?>">
                                        <input type='hidden' name='id' value="<?php echo $j['id']; ?>">
     
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Clear</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
</form>
                                        </div>
                                    </div>



                                    </div>
                                </div>



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
    


    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="./vendor/moment/moment.min.js"></script>
    <script src="./vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="./vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="./vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="./vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="./vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="./vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="./vendor/pickadate/picker.js"></script>
    <script src="./vendor/pickadate/picker.time.js"></script>
    <script src="./vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="./js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="./js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="./js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="./js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="./js/plugins-init/pickadate-init.js"></script>

</body>

</html>