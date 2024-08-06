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
    <title>Sound - Stream It - Home</title>

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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Explore</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Latest Music <span>Latest Music</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="Music.php" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Explore  </h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms"> Music Videos<span>Music Videos</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="Videos.php" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <li class="breadcrumb-item active"><h4 class="text-center">Welcome to Dashboard <?php echo $_SESSION["name"]?></h4></li>
    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>See what’s new</p>
                        <h2>What’s New</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                          </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a1.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>The Cure</h5>
                                </a>
                                <p>Second Song</p>
                            </div>
                        </div>
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a2.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Sam Smith</h5>
                                </a>
                                <p>Underground</p>
                            </div>
                        </div>
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a3.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Will I am</h5>
                                </a>
                                <p>First</p>
                            </div>
                        </div>
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a4.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>The Cure</h5>
                                </a>
                                <p>Second Song</p>
                            </div>
                        </div>
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a5.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>DJ SMITH</h5>
                                </a>
                                <p>The Album</p>
                            </div>
                        </div>
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a6.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>The Ustopable</h5>
                                </a>
                                <p>Unplugged</p>
                            </div>
                        </div>
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a7.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Beyonce</h5>
                                </a>
                                <p>Songs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>See what’s new</p>
                        <h2> Latest Music</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                 <!-- Single Album Area  -->
                 <?php
                                    include_once("./admin/conn.php");
                                            $query = "SELECT * FROM `latestmusic`";
                                            $result = mysqli_query($conn,$query);  
                                            if(mysqli_num_rows($result)){
                                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
           
                    <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                   
                        <div class="album-thumb">
                  <img src="admin./picture/<?php echo $row[1];?>" width="100px";>
                        </div>
                        <div class="album-info">
                            <a href="Music.php">
                                <h5><?php echo $row[5];?></h5>
                            </a>
                            <p><?php echo $row[3];?></p>
                        </div>
                    </div>
                </div>
                <?php
                                        }
                                        }                                     
                                        ?>

            </div>
    <!-- load more -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                        <a href="Music.php" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
        </div>
       
    <!-- <h6 class="text-center">##### Buy Now Area End #####</h6> -->
    </section>
    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="img/bg-img/fa.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>See what’s new</p>
                            <h2>Latest Music</h2>
                        </div>
                        <?php
include_once("./admin/conn.php");
$query = "SELECT * FROM `latestmusic` LIMIT 1";  // Only fetch one record
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result); // Fetch the single record
?>
                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>01. Gham Hai Ya Khushi</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="./admin/audio/<?php echo $row[9];?>">
                            </audio>
                        </div>
                    </div>
                </div>
                <?php
                                        }
                                                                           
                                        ?>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Miscellaneous Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ***** Weeks Top ***** -->
                <div class="col-12 col-lg-4">
                    <div class="weeks-top-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>This week’s top</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt1.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Sam Smith</h6>
                                <p>Underground</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt2.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Power Play</h6>
                                <p>In my mind</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt3.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Cristinne Smith</h6>
                                <p>My Music</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt4.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Music Band</h6>
                                <p>Underground</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt5.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Creative Lyrics</h6>
                                <p>Songs and stuff</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt6.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Culture</h6>
                                <p>Pop Songs</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>New Hits</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt7.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Sam Smith</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt8.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Power Play</h6>
                                    <p>In my mind</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt9.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Cristinne Smith</h6>
                                    <p>My Music</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt10.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>The Music Band</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt11.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Creative Lyrics</h6>
                                    <p>Songs and stuff</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt12.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>The Culture</h6>
                                    <p>Pop Songs</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- ***** Popular Artists ***** -->
                <div class="col-12 col-lg-4">
                    <div class="popular-artists-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>Popular Artist</h2>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa1.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Sam Smith</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa2.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>William Parker</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa3.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Jessica Walsh</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa4.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Tha Stoves</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa5.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>DJ Ajay</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa6.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Radio Vibez</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa7.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Music 4u</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ##### -->
     <!-- ##### Contact Area Start ##### -->
     <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="txtname" class="form-control"  placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" name="txtemail" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="txtsubject" class="form-control"  placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="txtmessage" class="form-control"  cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" name="submit" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
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
  $Subject = $_POST['txtsubject'];
  $Message = $_POST['txtmessage'];
  $query = "INSERT INTO `contact`(`id`, `name`, `email`, `subject`, `message`) VALUES (null,'$Name','$Email','$Subject','$Message')";
 mysqli_query($conn,$query);
  ?>
    <script>
    window.location.assign("index.php");
  </script>
  <?php
  }

?>
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