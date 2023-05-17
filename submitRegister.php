<?php 

session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'crud');

if(isset($_POST['submit'])){
    // echo "submit"; exit;
    $userName = $_POST['userName'];
	$email = $_POST['email'];
    $password = $_POST['password'];
    $mobileNo = $_POST['mobileNo'];

    $sql = "INSERT INTO user (userName, email,password,mobileNo) 
    VALUES('$userName', '$email', '$password','$mobileNo')";

	$query = mysqli_query($con,$sql);
    //  $row = mysqli_num_rows($query);
  


    // print_r($num); exit;

		if($query){

			
			echo "user created";
			// $_SESSION['user'] = $username;
			header('location:login.php');


		}else{
			echo " failed to create user";
			// header('location:createUser.php');
		}



   


     }else{ 


     }


?>