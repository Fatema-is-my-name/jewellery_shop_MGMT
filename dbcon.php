<?php
$con = new mysqli("localhost","root","","project",3307);


$user = $_POST['t1'];
$pass = $_POST['t2'];
$sql = "Insert into login values('user','$pass')";
$run = mysqli_query($con,$sql);
if ($con -> query($sql) === TRUE){
		echo "Data Inserted";
		header("Location: proj_web.php");
}
else{
		echo "Error".$con->error;
	}



?>
