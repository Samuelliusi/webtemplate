<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>
	
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		 <div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
					<div class="card-body">
                         
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group"></i></span>
						<span class="float-right">00</span> 
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Available courses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-folder-open"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Campuses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-graduation-cap"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
			    <div class="col-lg-3">
				   <div class="card-header bg-dark text-white text-center">
					    <span>Users</span>
				   </div>
				   <div class="card-body">
					<span><i class="fa fa-users"></i></span>
						<span class="float-right">00</span>
				   </div>
				   <div class="card-footer"></div>
				</div>  
			    <div class="col-lg-12">
				     <div class="card-header bg-dark text-white text-center">
					   <span>Student Analysis</span>
				</div>
			</div>
		 </div>
	</div>
	<?php require_once('includes/script.php')?>
</body>
</html>