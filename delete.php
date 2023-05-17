<?php
 


session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}

 $id= $_GET["id"];
 $newId=trim($id);
// echo $id; exit;
$db = mysqli_select_db($con, 'crud');


 
        $sql = "DELETE FROM  user WHERE id='$id'";
        // echo "<pre>"; print_r($sql);
        // exit;// 
	$query = mysqli_query($con,$sql);

	//  $row = mysqli_num_rows($query);
    //  $userresult = $query->fetch_assoc();


    if($query == 1  ){
        
            // echo "user deleted";
            header('location:dashboard.php');
          
       
        
    }


     




?>

