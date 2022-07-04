<?php
$server ="localhost";
$username="root";
$password="";
$database="web2";


$conn = mysqli_connect($server,$username,$password,$database);

$sqliQuery = mysqli_query($conn,"SELECT * FROM enrollment");



?>



<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header">
	    <img src="images/download.png" alt="download" height="50" width="50" class="rounded-circle">
		<a href="#" class="navbar-trigger"><span></span></a>
	</div>
	<div class="sidebar">
	     <nav>
			<ul>
				<li>
					<a href="student.php">
						<span><i class="fa fa-group"></i></span>
						<span>students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-folder-open"></i></span>
						<span>courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-graduation-cap"></i></span>
						<span>campus</span>
					</a>
				</li>
			</ul>
		 </nav>
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
										   <td>
											   <a href="">Edit</a>
											   <a href="">Veiw</a>
											   <a href="">Delete</a>
								           </td>	 
								    </tr>
								<?php }?>		 
							</tbody>
						 </table>
					</div>

			</div>
		 </div>
	</div>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>