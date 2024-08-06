<?php
 $conn = mysqli_connect("localhost", "root", "", "one-music");  
 
     $id = $_GET['id'];

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

//   $query = "UPDATE  SET `Name`='$name',`Age`=$age,`add`='$add',`email`='$email',`pass`='$pass' WHERE `id`=$id";
 $query ="UPDATE `latestmusic` SET `image`='[$PictureName]',`name`='[$Name]',`genre`='[$Genre]',`year`='[$Year]',`artist`='[$Artist]',`language`='[$Language]',`album name`='[$AlbumName]',`album cover`='[$AlbumcoverName]',`audiofile`='[$AudioName]' WHERE `id`=$id";

 $q = mysqli_query($conn,$query);

?>
    <script>
    window.location.assign("latestmusic.php");
</script>