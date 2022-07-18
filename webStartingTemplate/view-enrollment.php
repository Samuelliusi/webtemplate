<?php
 //1.Database connection
 require_once('logics/dbconnection.php');
 require_once('includes\navbar.php');
 $sqlifetchEnrollment = mysqli_query($conn,
         "SELECT * FROM contactus WHERE number='".$_GET['id']."' ");
 while($featchStudent= mysqli_fetch_array($sqlifetchEnrollment))
 {
    $fullname = $featchStudent['firstname'];
    $fullname = $featchStudent['lastname'];
    $email = $featchStudent['email'];
    $phone= $featchStudent['phonenumber'];
    $course=$featchStudent['created_at'];
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php')?>


<body>
    <!-- All our code.Write here -->
    <?php require_once('includes/navbar.php')?>
    
    <div class="sidebar">
        <?php require_once('includes/sidebar.php')?>
    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                      <div class="card-title">personal information</div>
                    </div>
                    <div class ="card-body">
                        <ul class="list-group">
                        <li class="list-group-item">no: <span class="float-end badge bg-primary"><?php echo $no ?></span></li>
                        <li class="list-group-item">firsname: <span class="float-end badge bg-secondary"><?php echo $firstname ?></span></li>
                        <li class="list-group-item">lastname: <span class="float-end badge bg-danger"><?php echo $lastname ?></span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    
   













   	<!-- All our code. write here   -->
	
    <?php require_once('includes\scripts.php') ?>
</body>
</html>