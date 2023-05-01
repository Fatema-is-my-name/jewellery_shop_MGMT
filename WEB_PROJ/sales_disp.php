<!DOCTYPE html>
<html>
<head>
	<title>
		<title>JEWELLERY SHOP MGMT SYSTEM</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style10.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	</title>
</head>
<body>

	<div class="container-fluid">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
 <div class="container">
      <a class="navbar-brand" >SALES DISPLAY</a>
      <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="web_proj.php" style="margin-top:5px">Close</a></li>
  </ul>
</nav>
    </div>
  </nav>
</div>
	<br>
	<div class="container">
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0" >
    <div class="card">
      <div class="card-body">
        <?php
       $conn=new mysqli("localhost","root","","project",3307);
          $total=0;
         $select_orders = mysqli_query($conn,"SELECT * FROM `checkout`");
        
         if(mysqli_num_rows($select_orders)> 0){
            while($row = mysqli_fetch_assoc($select_orders)){
              $total += $row['total_payment'];
            }
          }
       ?>    
       <h5 class="card-title">Total Amount Received</h5> 
        <p class="card-text">₹<?= $total; ?>/-</p>
        <a href="#" class="btn btn-primary">See Details</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
         <?php
       $conn=new mysqli("localhost","root","","project",3307);
        
         $result = mysqli_query($conn,"SELECT * FROM `checkout`");
        $rowcount = mysqli_num_rows( $result );
       ?>     
        <h5 class="card-title">Number of Payments</h5>
        <p class="card-text"><?= $rowcount; ?></p>
        <a href="#" class="btn btn-primary">See Details</a>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container mt-3">
    
  <table class="table">
    <thead>
      <tr>
        <th>Date</th>
        <th>Customer Names</th>
        <th>Amount</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
       <?php
$conn=new mysqli("localhost","root","","project",3307);
if (mysqli_error($conn)) {
  echo "error";
}
         $result = mysqli_query($conn,"SELECT * FROM `sales` LIMIT 3");
        
         if(mysqli_num_rows($result)> 0){
            while($row = mysqli_fetch_assoc($result)){
       ?>     
 
      <tr>
        <td><?php echo $row['Date']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['Amt']?></td>
        <td><?php echo $row['Quantity']?></td>

      </tr>
      <?php
    }
  }
  else{
    echo "empty";
  }
      ?>
    
    </tbody>
  </table>
</div>

</body>
</html>

</body>
</html>