<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}
$db = mysqli_select_db($con, 'crud');

$id= $_GET["id"];

// echo $id; exit;
$sql = "SELECT * FROM user WHERE id='$id'";
    // $id= $_GET["id"];

	$query = mysqli_query($con,$sql);

	 $row = mysqli_num_rows($query);
     $userresult = $query->fetch_assoc();
// echo "<pre>";
//      print_r($userresult); exit;

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
		<div class="heading text-center mb-5 text-uppercase text-white">UPDATE USER  </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="updateUser.php" method="POST" onSubmit="if(!confirm('Data Updated')){return false;}">
						<div class="form-group">
                        <input type="hidden" name="userId" value="<?php echo $userresult['id']; ?>" class="form-control" autocomplete="off" required>

							<label>User Name</label>
							<input type="text" name="userName" value="<?php echo $userresult['userName']; ?>" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" value="<?php echo $userresult['password']; ?>" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label>Email ID</label>
							<input type="email" name="email" value="<?php echo $userresult['email']; ?>" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label>mobileNo</label>
							<input type="text" name="mobileNo" value="<?php echo $userresult['mobileNo']; ?>" class="form-control" autocomplete="off" required>
						</div>
						<input type="submit" class="btn btn-success" name="update" >
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>


