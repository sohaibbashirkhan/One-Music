
<?php
 $conn = mysqli_connect("localhost", "root", "", "one-music");         //hostname username password databasename
$id = $_GET['id'];
$Name = $_POST['txtname'];
$Email =$_POST['txtemail'];
$Phone =$_POST['txtphone'];
$Password=$_POST['txtpass'];
$query ="UPDATE `registeruser` SET `name`='$Name',`email`='$Email',`phone`='$Phone',`password`='$Password' WHERE `id`=$id";
$q = mysqli_query($conn,$query);
?>
  <script>
    window.location.assign("registeruser.php");
</script>