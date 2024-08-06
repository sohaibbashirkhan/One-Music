<?php
include_once("conn.php")
?>
<?php
session_start();
if($_SESSION["name"]){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin_Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <?php
        include_once("Nav.php")
        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Admin Panel <h4 class="text-center">Welcome to Dashboard <?php echo $_SESSION["name"]?></h4></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Latest Music 
                                    <span> 
                                    <?php
                                    $query = "SELECT COUNT(*) AS `count` FROM `latestmusic`";
                                    $result =mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $count =$row ['count'];
                                    ?>
                                    </span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="latestmusic.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Latest Video
                                    <span> 
                                    <?php
                                    $query = "SELECT COUNT(*) AS `count` FROM `latestvideo`";
                                    $result =mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $count =$row ['count'];
                                    ?>
                                    </span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="latestvideo.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Contact
                                    <span> 
                                    <?php
                                    $query = "SELECT COUNT(*) AS `count` FROM `contact`";
                                    $result =mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $count =$row ['count'];
                                    ?>
                                    </span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="contact.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Register User
                                    <span> 
                                    <?php
                                    $query = "SELECT COUNT(*) AS `count` FROM `registeruser`";
                                    $result =mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $count =$row ['count'];
                                    ?>
                                    </span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="registeruser.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <!-- <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable 
                            </div> -->
                            
                        </div>
                    </div>
                </main>
    </body>
</html>

<?php
}
else{
    ?>
        <script>
            window.location.assign("adminLogin.php");
        </script>
    <?php
}
?>
<?php
include_once("footer.php")
?>