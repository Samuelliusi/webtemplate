<?php

require_once ('logics/dbconnection.php');

$sqliquery = mysqli_query($conn, "SELECT * FROM addenroll");


?>










<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>

<?php require_once ('includes/navbars.php') ?>
	<!-- All our code. write here   -->

<div class="Sidebar">
<?php require_once('includes/sidebar.php') ?>
</div>			
<div class="Main-content">
 <div class="container-fluid">
	  <div class="row">
	   <div class="col-lg-12">
	     <div class="card-header bg-dark text-white text-center">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Students</span>
                        </div>
                        <div class="card">
                            <form action="edit-enrollment.php?id=<?php echo $id?>" method="POST" class="container">
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="firstname" class="form-label">First Name:</label>
                                            <input type="text" name="fullname" value="<?php echo $firstname?>" class="form-control" placeholder="Enter your first name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="lastname" class="form-label">Last Name:</label>
                                            <input type="text" name="fullname" value="<?php echo $lastname?>" class="form-control" placeholder="Enter your last name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="phonenumber" class="form-label">Phone Number:</label>
                                            <input type="text" name="phonenumber" value="<?php echo $phonenumber?>" class="form-control" placeholder="+2547...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="email" class="form-label">Email Address:</label>
                                            <input type="text" name="email" value="<?php echo $email?>" class="form-control" placeholder="Please enter your email address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">

                                            <label for="gender" class="form-label">Gender:</label><br>
                                            <select name="gender" class="form-control" name="gender" aria-label="Default select example">
                                                <option value="<?php echo $gender?>">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="course" class="form-label">Course:</label><br>
                                            <select class="form-control" name="course"  aria-label="Default select example">
                                                <option value="<?php echo $course?>">Software Development</option>
                                                <option value="Data analysis">Data analysis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-lg-12">
                                            <button style="margin-top:10px" type="submit" name="updatebutton" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>



	
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>