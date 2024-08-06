<?php
include_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Music</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
<!--  =========================== Add Music Form ============================== -->
<form action ="#" method="POST" enctype="multipart/form-data">
<h1  style = "text-align : center;">Welcome To Latest Music Page</h1>
  <div class="mb-3">
    <label for="" class="form-label">Image</label>
    <input type="file" name= "pic" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" name="txtname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Genre</label>
    <input type="text" name="genrename" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Year</label>
    <input type="text" name="yearname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Artist</label>
    <input type="text" name="txtartist" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Language</label>
    <input type="text" name="languagename" class="form-control" >
  </div>

  <div class="mb-3">
    <label for="" class="form-label">AlbumName</label>
    <input type="text" name="albumname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">AlbumCover</label>
    <input type="file" name= "coverpic" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">AudioFile</label>
    <input type="file" class="form-control"  name="audiofile" >
  </div>
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>
<?php
if(isset($_POST["submit"])){
    $PictureName = $_FILES['pic']["name"];
    $PictureTmp = $_FILES['pic']["tmp_name"];
    $Name = $_POST['txtname'];
    $Genre = $_POST['genrename'];
    $Year = $_POST['yearname'];
    $Artist = $_POST['txtartist'];
    $Language = $_POST['languagename'];
    $AlbumName = $_POST['albumname'];
    $AlbumcoverName = $_FILES['coverpic']["name"];
    $AlbumcoverTmp = $_FILES['coverpic']["tmp_name"];
    $AudioName =$_FILES['audiofile']['name'];
    $AudioTmp=$_FILES['audiofile']['tmp_name'];

                 // path
    $path = "./picture/" . $PictureName;
    move_uploaded_file($PictureTmp,$path);

    $path = "./picture/" . $AlbumcoverName;
    move_uploaded_file($AlbumcoverTmp,$path);

    $path ="./audio/".$AudioName;
    move_uploaded_file($AudioTmp,$path);

                              // Query
$query ="INSERT INTO `latestmusic`(`id`, `image`, `name`, `genre`, `year`, `artist`, `language`, `album name`, `album cover`, `audiofile`) VALUES
                                        (null,'$PictureName','$Name','$Genre','$Year','$Artist','$Language','$AlbumName','$AlbumcoverName','$AudioName')";

    mysqli_query($conn,$query);
    ?>  
    <script>
      window.location.assign("latestmusic.php");
    </script>

    <?php
    }
  
?>
</body>
<?php
include_once("footer.php")
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>


 