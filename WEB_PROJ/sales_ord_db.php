<?php


$con = new mysqli("localhost","root","","project",3307);


$name = $_POST['nm'];
$bno =  $_POST['bno'];
$add =  $_POST['add'];
$mno =  $_POST['mno'];
$date =  $_POST['date'];

$sql = "Insert into regis values('$bno','$date','$name','$amt','')";
$run = mysqli_query($con,$sql);
if ($con -> query($sql) === TRUE){
		echo "Data Inserted";
}
else{
		echo "Error".$con->error;
	}
header("Location: sales_ord.html");


?>