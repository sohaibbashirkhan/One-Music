<?php
include_once("conn.php");
     $id = $_GET['id'];
     $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from latestmusic where id='$id'"));
  ?>
    <!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Music Edit</title>
</head>
<body>

<form action ="update.php?id=<?= $row['id'] ?>" method="POST" enctype="multipart/form-data">
<!-- <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input type="Hidden" value="<?= $row['id'] ?>" name= "id" class="form-control" aria-describedby="emailHelp">
  </div> -->
<div class="mb-3">
    <label for="" class="form-label">Image</label>
    <input type="file" value="<?= $row['image'] ?>" name= "pic" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input  type="text" value="<?= $row['name'] ?>" name="txtname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Genre</label>
    <input type="text" value="<?= $row['genre'] ?>" name="genrename" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Year</label>
    <input type="text" value="<?= $row['year'] ?>" name="yearname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Artist</label>
    <input type="text" value="<?= $row['artist'] ?>" name="txtartist" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Language</label>
    <input type="text" value="<?= $row['language'] ?>" name="languagename" class="form-control" >
  </div>

  <div class="mb-3">
    <label for="" class="form-label">AlbumName</label>
    <input type="text" value="<?= $row['album name'] ?>" name="albumname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">AlbumCover</label>
    <input type="file" value="<?= $row['album cover'] ?>" name= "coverpic" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">AudioFile</label>
    <input type="file" value="<?= $row['audiofile'] ?>" class="form-control"  name="audiofile" >
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