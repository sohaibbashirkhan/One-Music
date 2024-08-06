<?php
$conn = mysqli_connect("localhost","root","","one-music");
?>
<!DOCTYPE html>
<html lang="en">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sound - Stream It - Register

    </title>

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
                        <div class="classy-navbar-to-ggler">
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
            <h2>Register</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->


    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Create Account</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="#" method="POST">
                            <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="txtname" class="form-control" placeholder="Enter Name" required>
            
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="txtemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail" required>
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else</small>
                                </div>
                                <div class="form-group">
                                    <label >Phone Number</label>
                                    <input type="text" name="txtphone" class="form-control" placeholder="Enter Number">
                                    <small class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="txtpass" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                </div>
                                <button type="submit"name="submit" class="btn oneMusic-btn mt-30" >Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

if(isset($_POST["submit"])){
  // error_reporting(0);
  $Name = $_POST['txtname'];
  $Email = $_POST['txtemail'];
  $Phone = $_POST['txtphone'];
  $Password = $_POST['txtpass'];

  
 $query= "INSERT INTO `registeruser`(`id`, `name`, `email`, `phone`, `password`) VALUES (null,'$Name','$Email','$Phone','$Password')";
 mysqli_query($conn,$query);

  ?>  
<?php
 
}

?>
    <!-- ##### Login Area End ##### -->


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