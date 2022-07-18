<?php
require_once('logics/dbconnection.php');

$sql = mysqli_query($conn, "SELECT * FROM contactus");

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php') ?>

<body>
    <!-- All our code.Write here -->
    <div class="header">
         <img src="zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">

    </div>

    <div class="sidebar">
        <?php require_once('includes/sidebar.php') ?>
    </div>

    <div class="main-content">
        <div class="contaner-fluid">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Contactus</span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-reponsive" style='font-size:12px;'>
                            <thead>
                                <th>no</th>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>phonenumber</th>
                                <th>email</th>
                                <th>massage</th>
                                <th>created_at</th>
                            </thead>
                            <tbody>
                                <?php while($fetchEnrollmentRecord=mysqli_fetch_array($sql)) {?>
                                    <tr>
                                        <td><?php echo $fetchRecords['no'] ?></td>
                                        <td><?php echo $fetchRecords['firstname'] ?></td>
                                        <td><?php echo $fetchRecords['lastname'] ?></td>
                                        <td><?php echo $fetchRecords['phonenumber'] ?></td>
                                        <td><?php echo $fetchRecords['email'] ?></td> 
                                        <td><?php echo $fetchRecords['massage'] ?></td>
                                        <td><?php echo $fetchRecords['created_at'] ?></td>
                                    </tr>       
                                <?php 
                            }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
            </div>
        </div>
     












            
    </div>
   	<!-- All our code. write here   -->
	
<?php require_once('includes/scripts.php') ?>
</body>
</html>