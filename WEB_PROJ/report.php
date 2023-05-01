

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>customer report</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin_style.css">
   

</head>
<body>
   

<section class="dashboard">

   <p style="text-align: center; font-family:serif;font-weight: 55px;font-size: 40px"> Customer Report</p>
      <?php

if(isset($_POST['search'])){
    $name = $_POST['name'];
    $conn = new mysqli("localhost","root","","project",3307);
    $sql = "SELECT * FROM checkout WHERE firstname='$name'";
$result=mysqli_query($conn,$sql);

}


?>
<div class="box-container">
      <div class="box">
<form method="POST">
    <p>
    Enter Customer Name
    <input type="text" name="name" class="empty">
    <button type="submit" name="search" class="btn">Search</button></p>
</form>
      
      
      <div style="overflow-x:auto;" id="res">
      
<?php
if(isset($result)){
    echo"<div class='empty' >";
    echo "<center>";
    echo "<table class='table-bordered' border='1' cellpadding='5' >";
    echo "<tr class='border'>";
    echo"<th>Order id</th>";
    echo"<th>Customer Name</th>";
    echo"<th>Email</th>";
    echo"<th>Address</th>";
    echo"<th>Total Price</th>";
  
    echo"</tr>";
    echo"</div>";
    while($row=mysqli_fetch_assoc($result)){
         echo "<tr>";
         echo"<td>". $row["order_id"]."</td>";
         echo"<td>". $row["firstname"]."</td>"; 
         echo"<td>". $row["email"]."</td>";
         echo"<td>". $row["address"]."</td>"; 
         echo"<td>". $row["total_payment"]."</td>";
         echo"</tr>";
    }
    echo "</center>";
    echo "</table>";
}
else
{
echo"<p class='empty'>no data found</p>";
}
    

?>
      </div>
      <br><br>
      <button onclick="printDiv()" class="btn">Print</button>
</section>
    </body>
    <script src="script.js"></script>
</html>
