<?php
require_once("logics/dbconnection.php");
$queryuser =mysqli_query($conn, "SELECT * FROM enrollment WHERE no= '".$_GET['id']."' ");

while($fetchUser= mysqli_fetch_array($queryuser))
{
    $fullname =$fetchUser['fullname'];
    $email=$fetchUser['email'];
    $phonenumber=$fetchUser['phonenumber'];
    $gender=$fetchUser['gender'];

}

?>


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
                <div  class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center ">
                            <h4>Edit student <?php echo $fullname ?></h4>
                        </div>
                        <div class="card-body">
                         <!-- add form here -->
                         <form action="enroll.php" method='POST'>
       <div class="container">
        <div class="row">
              <div class="col-lg-6">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" name='fullname' value="<?php echo $fullname ?>" placeholder="Please Enter Your Name">
              </div>
              <div class="mb-3 col-lg-6">
                <label for="phone" class="form-label">Phonenumber</label>
                <input type="tel" class="form-control" name='phonenumber' value="<?php echo $phonenumber ?>" placeholder="Please Enter Your phone number">
              </div>
              <div class="mb-3 col-lg-6">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name='email' value="<?php echo $email ?>"  placeholder="Please Enter Your email address">
              </div>
              <div class="mb-3 col-lg-6">
                <select class="form-control multiplechose_questiontypes" name="gender"id="selector">
                  <option value="" disable>...chose your gender...</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>  
          </div>
          <div class="row">
           <p>in order to complete your registration to the bootcamp you are required to select one course you will be<br>undertaking.PLEASE NOTE this will be your learning track duriing the two weeks immersion</P>
              <div class="mb-3 col-lg-6">
                <select name="course"class="form-control multiplechose_questiontypes"id="selector">
                  <option value="" disable>...chose your course...</option>
                  <option value="web Designing">Web Designing</option>
                  <option value="web Development">Web Development</option>
                  <option value="app Development">app development</option>
                  <option value="game development">Game Development</option>
                  <option value="graphic Designing">Graphic Desiging</option>
                  <option value="digital marketing">Digital Marketing</option>
                </select> 
              </div>
          </div>
        <div class="row">
          <div class="col-lg-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos magni, commodi autem esse velit laboriosam vel quibusdam reprehenderit quasi nostrum</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" for="flexCheckDefault">
               Agree  terms and conditiions 
              </label>          
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-lg-3">
              <button class="btn btn-primary" name="submitButton">SubmitButton</button> 
            </div>
          </div> 
        </div>
    </form>
                        </div>
                    </div>
                </div>
            </div>

         </div>
	</div>
	<?php require_once('includes/script.php')?>
</body>
</html>