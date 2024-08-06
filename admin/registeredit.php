<?php
include_once("conn.php");
     $id = $_GET['id'];
     $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from registeruser where id='$id'"));
  ?>
    <!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Register</title>
</head>
<body>

<form action ="registerupdate.php?id=<?= $row['id'] ?>" method="POST">
<!-- <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input type="Hidden" value="<?= $row['id'] ?>" name= "id" class="form-control" aria-describedby="emailHelp">
  </div> -->
<div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" value="<?= $row['name'] ?>" name= "txtname" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input  type="text" value="<?= $row['email'] ?>" name="txtemail" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Phone</label>
    <input type="text" value="<?= $row['phone'] ?>" name="txtphone" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="text" value="<?= $row['password'] ?>" name="txtpass" class="form-control" >
  </div>
  
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>