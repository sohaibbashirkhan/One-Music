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
        <title>Dashboard - Album Data</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
<h1  style = "text-align : center;">Welcome To Album Page</h1>
<!--  =========================== Add Music Form ============================== -->
<form action ="#" method="POST" enctype="multipart/form-data">
<div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" name="txtname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Date</label>
    <input type="text" name="txtdate" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">label</label>
    <input type="text" name="txtlabel" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input type="text" name="txtdescription" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Image</label>
    <input type="file" name= "pic" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input type="text" name="txtprice" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>
</body>
</html>
<?php

  if(isset($_POST["submit"])){
    $Name = $_POST['txtname'];
    $Date = $_POST['txtdate'];
    $label = $_POST['txtlabel'];
    $Description = $_POST['txtdescription'];
    $PictureName = $_FILES['pic']["name"];
    $PictureTmp = $_FILES['pic']["tmp_name"];
    $Price = $_POST['txtprice'];

                 // path
    $path = "./picture/" . $PictureName;
    move_uploaded_file($PictureTmp,$path);


                              // Query
$query ="INSERT INTO `albums`(`id`, `Name`, `Date`, `label`, `Description`, `Image`, `Price`)VALUES
                                        (null,'$Name','$Date','$label','$Description','$PictureName','$Price')";

    mysqli_query($conn,$query);
    ?>  
    <script>
      window.location.assign("Album.php");
    </script>

    <?php
    }
  
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>

