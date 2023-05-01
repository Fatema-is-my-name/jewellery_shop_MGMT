<?php
$con = new mysqli("localhost","root","","project",3307);


$firstname = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

$sql = "Insert into checkout values('$ord_id','$firstname','$email','$address','$city','$state','$zip')";
$run = mysqli_query($con,$sql);
if ($con -> query($sql) === TRUE){
		
		header("Location: last.php");
}
else{
		echo "Error".$con->error;
	}

?>