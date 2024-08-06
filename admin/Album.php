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
        <title>Dashboard - Albums</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
                    include_once("Nav.php");
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Albums</li>
                        </ol>
                        <div class="row">
                         
                            <a href="Albumform.php"><button class=" btn btn-success">Add Albums</button></a>
                           <br><br> <br>
                                        <!-- table start     -->
                            <table id="datatablesSimple" >
                                    <thead>
                                    <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Label</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Action</th> 
                                        </tr>
</thead>
                                    <tbody>
<?php
                                    include_once("conn.php");
                                            $query = "SELECT * FROM `albums`";
                                            $result = mysqli_query($conn,$query);  
                                            if(mysqli_num_rows($result)){
                                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                        <tr>
                                            <td><?php echo $row[0];?></td>
                                            <td><?php echo $row[1];?></td>
                                            <td><?php echo $row[2];?></td>
                                            <td><?php echo $row[3];?></td>
                                            <td><?php echo $row[4];?></td>
                                            <td><img src="./picture/<?php echo $row[5];?>" width="100px";></td>
                                            <td><?php echo $row[6];?></td>
                                            <td><a href="Albumedit.php?id=<?=$row['id']?>" class="btn btn-success" >Edit</a></td>
                                            <td><a href="Albumdelete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
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
    <a href="Albumform.php">GO TO FORM</a>

    <?php
                    include_once("footer.php");
            ?>
               </body>
</html>