<?php
session_start();
if(isset($_SESSION['user'])){
}
$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}
$db = mysqli_select_db($con, 'crud');
$sql = "SELECT * FROM user";
   
$query = mysqli_query($con,$sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<div class="container center-div shadow">
		<div class="heading text-center text-uppercase text-white mb-5">  Dashboard </div>

		<a href="logout.php" class="btn btn-danger text-right" style="margin-top:-3vw; margin-left:78vw;">  Logout</a>

		<h2 class="text-center">USER LISTING</h2>

			<div class="container row d-flex flex-row justify-content-center mb-5">
			<!-- <div class="admin-form shadow p-2 "> -->

			<table class="table">
  <thead>
    <tr>
	<th scope="col">Sr.No</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile No</th>
	  <th scope="col">Edit</th>
	  <th scope="col">Delete</th>


	


    </tr>
  </thead>
  <tbody>
	
    <tr>
	
		<?php
		$counter = 0;

		while($row = $query->fetch_assoc())
        { 
	    ?>
		
	<th><?php echo ++$counter;?>	</th>
      <td><?php echo  $row['userName'];?></td>
	  <td><?php echo  $row['email'];?></td>
      <td><?php echo  $row['mobileNo'];?></td>
	  <!-- <td> <button type="button" class="btn btn-success">Edit</button></td> -->
	  <td> <a href="edit.php?id=<?php echo $row['id'] ?>"  class="btn btn-info" role="button">Edit</a>
	  <td> <a href="delete.php?id=<?php echo $row['id'] ?>"  class="btn btn-info" role="button">Delete</a>
 </td>

	


	
		</tr>
		<?php 
		}
		?>
	
  
   
  </tbody>
</table>
				
			<!-- </div> -->
		</div>

</div>
		





</body>
</html>

