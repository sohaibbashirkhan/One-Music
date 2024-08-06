<?php
include_once("conn.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard_Add Latest_Video</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<!--  =========================== Add Video Form ============================== -->
    <h1  style = "text-align : center;">Welcome To Our New Video Page</h1>


<form action ="#" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="" class="form-label">Cover</label>
    <input type="file"  name= "pic" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Title</label>
    <input type="text"  name= "txtname" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Video</label>
    <input type="file" name="videofile" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>
<?php
if(isset($_POST["submit"])){
    // error_reporting(0);
    $PictureName = $_FILES['pic']["name"];
    $PictureTmp = $_FILES['pic']["tmp_name"];
    $Name = $_POST['txtname'];
    $VideoName =$_FILES['videofile']['name'];
    $VideoTmp=$_FILES['videofile']['tmp_name'];

    $path = "./picture/" . $PictureName;
    move_uploaded_file($PictureTmp,$path);

    $path = "./Video/" . $VideoName;
    move_uploaded_file($VideoTmp,$path);

   $query= "INSERT INTO `latestvideo`(`id`, `Cover`, `Title`, `Video`) VALUES (null,'$PictureName','$Name','$VideoName')";
   mysqli_query($conn, $query);
   
    ?>
     <script>
      window.location.assign("latestvideo.php");
    </script>
    <?php

  }

?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>


 
