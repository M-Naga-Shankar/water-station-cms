<?php 
session_start();
$status=11;
include './include/config.php';
if(!empty($_POST))
{
    $count=$_POST['count'];
    $sql=mysqli_query($conn,"update tins set count=$count");
    
if($sql){
 
}
else{
     
}
  }
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

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

<body class="h-100">
   
<div id="main-wrapper" >
<?php 
       include './compo/header.php';
       include './compo/sidebar.php';
       ?>       
        <br>
    <br>
    <br>
    <br>
    <br>
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Enter Tin Details </h4>
                                    <form action="" method='POST'>
                                    <?php 
                                                $amount=0;
                                                $sql2 = mysqli_query($conn, "select * from tins");
    while ($j = mysqli_fetch_array($sql2)) {

$amount=$j['count'];
    }
                                                ?>
                                        <div class="form-group">
                                            <label><strong>Enter Tin Count</strong></label>
                                            <input name='count' type="number" class="form-control" value="<?php echo $amount; ?>">
                                        </div>
                                       
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Update Tins Count</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="page-login.html">Sign in</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
       <!-- Required vendors -->
       <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>