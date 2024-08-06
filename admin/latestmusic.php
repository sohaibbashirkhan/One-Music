
<?php
include_once("conn.php")
  ?>
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Latest Music</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
<?php
include_once("Nav.php")
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Latest Music</li>
                        </ol>
                        <div class="row">

                        <br> 
                            <a href="latestmusicform.php"> <button class=" btn btn-success">Add New</button></a>
                           <br><br> <br>
                                        <!-- table start     -->
                            <table id="datatablesSimple" >
                                    <thead>
                                    <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Genre</th>
                                            <th>Year</th>
                                            <th>Artist</th>
                                            <th>Language</th>
                                            <th>Album Name</th>
                                            <th>Album Cover</th>
                                            <th>File</th>
                                            <th>Action </th>
                                            
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Genre</th>
                                            <th>Year</th>
                                            <th>Artist</th>
                                            <th>Language</th>
                                            <th>Album Name</th>
                                            <th>Album Cover</th>
                                            <th>File</th>
                                            <th>Action</th>     
                              </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <!-- Query -->
<?php
                                    include_once("conn.php");
                                            $query = "SELECT * FROM `latestmusic`";
                                            $result = mysqli_query($conn,$query);  
                                            if(mysqli_num_rows($result)){
                                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                        <tr>
                                            <td><?php echo $row[0];?></td>
                                            <td><img src="./picture/<?php echo $row[1];?>" width="100px";></td>
                                            <td><?php echo $row[2];?></td>
                                            <td><?php echo $row[3];?></td>
                                            <td><?php echo $row[4];?></td>
                                            <td><?php echo $row[5];?></td>
                                            <td><?php echo $row[6];?></td>
                                            <td><?php echo $row[7];?></td>
                                            <td><img src="./picture/<?php echo $row[8];?>" width="100px";></td>
                                            <td><audio controls ><source src="./audio/<?php echo $row[9];?>" ></audio></td>
                                            <td><a href="edit.php?id=<?=$row['id']?>" class="btn btn-success" >Edit</a></td>
                                            <td><a href="remove.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <?php
                                        }
                                        }                                     
                                        ?>
 
                                    </tbody>
                                </table>	
 <!-- table end -->
  </div>
 </main>
    <a href="latestmusicform.php">GO TO FORM</a>

   <?php
   include_once("footer.php")
   ?>
    </body>
</html>


      