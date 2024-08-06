<?php
$conn = mysqli_connect("localhost","root","","one-music");
?>
<?php
session_start();
if($_SESSION["name"]){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sound - Stream It - Albums</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/navicon.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>


                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <!-- <li><a href="About.php">About us</a></li> -->
                                    <li><a href="Music.php">Music</a></li>
                                    <li><a href="Video.php">Videos</a></li>
                                    <li><a href="#">Albums</a>
                                        <ul class="dropdown">
                                        <li><a href="albums-store.php">Albums</a></li>
                                            <li><a href="genre.php">Genre</a></li>
                                            <li><a href="language.php">Language</a></li>
                                            <li><a href="year.php">Year</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Artist.php">Artist</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                   
                                </ul>
                               
                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <a href="login.php" id="loginBtn">Login</a>
                                       
                                    </div>
                                    
                                    <div class="login-register-btn mr-50">
                                        <a href="Register.php">Register</a>
                                    </div>
                                    <div class="login-register-btn mr-50">
                                    <a href="logout.php" id="loginBtn">Logout</a>
                                    </div>
                                   
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Videos</h2>
        </div>
    </section>
    <div class="add-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="adds">
                        <!-- <a href="#"><img src="img/bg-img/add3.gif" alt=""></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- ##### Buy Now Area Start ##### -->
     <div class="oneMusic-buy-now-area mb-100">
        <div class="container">
            <div class="row">
            <?php
 include_once("./admin/conn.php");
$query = "SELECT * FROM `latestvideo`";
 $result = mysqli_query($conn,$query);  
if(mysqli_num_rows($result)){
 while($row = mysqli_fetch_array($result)){
 ?> 
                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
<video controls poster="./admin/picture/<?php echo $row[1];?>"width="280px"; style="margin-left: 15px;" ><source src="./admin/Video/<?php echo $row[3];?>"></video> 
                        </div>
                        <div class="album-info">
                            <a href="Video.php">
                                <p><?php echo $row[3];?></p>
                            <!-- <p><?php echo $row[3];?></p> -->
                            </a>
                        </div>
                    </div>
                </div>
                <?php
     }
      }                                     
    ?>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
<?php
}
else{
    ?>
        <script>
            window.location.assign("login.php");
        </script>
    <?php
}
?>