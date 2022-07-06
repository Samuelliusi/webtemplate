<?php

require_once('logics/dbconnection.php');

$sqliQuery = mysqli_query($conn,"SELECT * FROM enrollment");



?>


<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php') ?>
	</div>
	<div class="main-content">
		 <div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student</span>
					</div>
					<div class="card-body">
                         <table class="table table-striped table-hover table-responsive">
							<thead>
								<tr>
									<th>No</th>
									<th>Fullname</th>
									<th>Phonenumber</th>
									<th>email</th>
									<th>Gender</th>
									<th>course</th>
									<th>created_at</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php while($fetchRecord = mysqli_fetch_array($sqliQuery)) { ?>
									<tr>
										   <td><?php echo $fetchRecord['no'] ?></td>
										   <td><?php echo $fetchRecord['fullname'] ?></td>
										   <td><?php echo $fetchRecord['phonenumber'] ?></td>
										   <td><?php echo $fetchRecord['email'] ?></td>
										   <td><?php echo $fetchRecord['gender'] ?></td>
										   <td><?php echo $fetchRecord['course'] ?></td>
										   <td><?php echo $fetchRecord['created_at'] ?></td>
										   <td>
											   <a href="edit-enrollment.php?id=<?php echo $fetchRecord['no'] ?>" class="btn btn-primary btn-sm">
												  <i class="fa fa-edit"></i>
											   </a>
											   <a href="#" class="btn btn-info btn-sm">
												 <i class="fa fa-eye"></i>
											   </a>
											   <a href="#" class="btn btn-danger">
												 <i class="fa fa-trash"></i>
											   </a>
								           </td>	 
								    </tr>
								<?php }?>		 
							</tbody>
						 </table>
					</div>

			</div>
		 </div>
	</div>
	<?php require_once('includes/script.php') ?>
</body>
</html>