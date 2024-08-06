<?php
 $conn = mysqli_connect("localhost", "root", "", "one-music");         //hostname username password databasename

 
$id = $_GET['id'];

$PictureName = $_FILES['pic']["name"];
$PictureTmp = $_FILES['pic']["tmp_name"];

$Name = $_POST['txtname'];

$VideoName =$_FILES['videofile']['name'];
$VideoTmp=$_FILES['videofile']['tmp_name'];


//   $query = "UPDATE latestmusic SET `Name`='$name',`Age`=$age,`add`='$add',`email`='$email',`pass`='$pass' WHERE `id`=$id";
$query = "UPDATE `latestvideo` SET `Cover`='[$PictureName]',`Title`='[$Name]',`Video`='[$VideoName]' WHERE `id` =$id";
$q = mysqli_query($conn,$query);

?>
    <script>
    window.location.assign("latestvideo.php");
</script>