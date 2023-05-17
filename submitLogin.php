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
	$email = $_POST['email'];
    $password = $_POST['password'];

 
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
   
	$query = mysqli_query($con,$sql);

	 $row = mysqli_num_rows($query);
     $userresult = $query->fetch_assoc();
      $userId=$userresult['id'];


//  echo "<pre>"; print_r($rownew);
//    exit;

    if($row == 1  ){
        
            echo "login successful";
            $_SESSION['user'] = $userresult;
            header('location:dashboard.php');
          
       
        
    }else{


        echo "login failed";
	header('location:login.php');

    }


     

}


?>

