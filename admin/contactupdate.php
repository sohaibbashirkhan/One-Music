<?php
 $conn = mysqli_connect("localhost", "root", "", "one-music");  
  $id = $_GET['id'];
  $Name = $_POST['txtname'];
  $Email = $_POST['txtemail'];
  $Subject = $_POST['txtsubject'];
  $Message = $_POST['txtmessage'];

//   $query = "UPDATE  SET `Name`='$name',`Age`=$age,`add`='$add',`email`='$email',`pass`='$pass' WHERE `id`=$id";
 $query ="UPDATE `contact` SET `name`='$Name',`email`='$Email',`subject`='$Subject',`message`='$Message' WHERE `id`=$id";

 $q = mysqli_query($conn,$query);

?>
    <script>
    window.location.assign("contact.php");
</script>