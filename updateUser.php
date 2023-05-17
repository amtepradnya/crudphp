<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}
$db = mysqli_select_db($con, 'crud');

$userId = $_POST['userId'];

if(isset($_POST['update']))
{

if(isset($_POST['userName'])  && !empty($_POST['userName'])){
    $userName = $_POST['userName'];
   }
   if(isset($_POST['password'])  && !empty($_POST['password'])){
       $password = $_POST['password'];
      }
      if(isset($_POST['email'])  && !empty($_POST['email'])){
       $email = $_POST['email'];
      }
   
   if(isset($_POST['mobileNo'])  && !empty($_POST['mobileNo'])){
       $mobileNo = $_POST['mobileNo'];
   }

   
	$sql = "UPDATE user SET   `userName`='$userName' ,`PASSWORD`='$password',`email`='$email', `mobileNo`='$mobileNo' WHERE `id`=$userId";
	// print_r($sql);exit;
    $query = mysqli_query($con,$sql);

		if($query ==1){

			
			echo "password updated";
			header('location:dashboard.php');


		}

    }

?>




