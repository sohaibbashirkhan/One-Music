<?php
include_once("conn.php");


    $id = $_GET["id"];

    $query = "DELETE FROM `latestvideo` WHERE `id` = $id";

    mysqli_query($conn,$query);

    // header("Location: showData.php");   

?>

<script>
    window.location.assign("latestvideo.php");
</script>