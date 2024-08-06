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
        <title>Dashboard - Video</title>
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
                            <li class="breadcrumb-item active">Latest Video</li>
                        </ol>
                        <div class="row">
                            <a href="latestvideoform.php"><button class=" btn btn-success">Add New</button></a>
                           <br><br> <br>
                                        <!-- table start     -->

                            <table id="datatablesSimple" >
                                    <thead>
                                    <tr>
                                            <th>ID</th>
                                            <th>Cover</th>
                                            <th>Title</th>
                                            <th>Video</th>
                                            <th>Action</th>
                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Query -->
                                    <?php
                                    include_once("conn.php");
                                            $query = "SELECT * FROM `latestvideo`";
                                            $result = mysqli_query($conn,$query);  
                                            if(mysqli_num_rows($result)){
                                                    while($row = mysqli_fetch_array($result)){
 ?> 
 <tr>
                                            <td><?php echo $row[0];?></td>
                                            <td><img src="./picture/<?php echo $row[1];?>" width="200px";></td>
                                            <td><?php echo $row[2];?></td>
                                            <td>                                            <video width="320" height="100" controls >
  <source src="./Video/<?php echo $row[3];?>" >
</video></td> 
<td> <td><a href="edite.php?id=<?=$row['id']?>" class="btn btn-success" >Edit</a></td>
                                            <td><a href="removee.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
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
    <a href="latestvideoform.php">GO TO FORM</a>
    <!-- footer -->
   <?php
   include_once("footer.php")
   ?>
    </body>
</html>
