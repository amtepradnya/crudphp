\<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white"> REGISTER  PAGE </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="submitRegister.php" method="POST" onSubmit="if(!confirm('User Register')){return false;}">
						<div class="form-group">
							<label>User Name</label>
							<input type="text" name="userName" value="" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" value="" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label>Email ID</label>
							<input type="email" name="email" value="" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label>mobileNo</label>
							<input type="text" name="mobileNo" value="" class="form-control" autocomplete="off" required>
						</div>
						<input type="submit" class="btn btn-success" name="submit" >
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>


