<?php
 $conn = mysqli_connect("localhost", "root", "", "one-music");         //hostname username password databasename
    $id= $_GET['id'];
    $Name = $_POST['txtname'];
    $Date = $_POST['txtdate'];
    $label = $_POST['txtlabel'];
    $Description = $_POST['txtdescription'];
    $PictureName = $_FILES['pic']["name"];
    $PictureTmp = $_FILES['pic']["tmp_name"];
    $Price = $_POST['txtprice'];
//   $query = "UPDATE latestmusic SET `Name`='$name',`Age`=$age,`add`='$add',`email`='$email',`pass`='$pass' WHERE `id`=$id";
$query = "UPDATE `albums` SET `Name`='$Name',`Date`='$Date',`label`='$label',`Description`='$Description',`Image`='$PictureName',`Price`='$Price' WHERE `id` =$id";
$q = mysqli_query($conn,$query);
?>
    <script>
    window.location.assign("Album.php");
</script>