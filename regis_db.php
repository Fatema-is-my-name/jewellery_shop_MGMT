<?php
$con = new mysqli("localhost","root","","project",3307);


$name = $_POST['r1'];
$addr = $_POST['r2'];
$mno = $_POST['r3'];
$gen = $_POST['gen'];
$user = $_POST['t1'];
$pass = $_POST['t2'];

$sql = "Insert into regis values('$name','$addr','$mno','$gen')";
$run = mysqli_query($con,$sql);
if ($con -> query($sql) === TRUE){
		echo "Data Inserted";
}
else{
		echo "Error".$con->error;
	}
header("Location: proj_web.php");
?>