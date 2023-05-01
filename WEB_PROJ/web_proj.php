<!DOCTYPE html>
<html>
<head>
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

</head>
<body>
	
<nav class="navbar bg-body-tertiary fixed-top">
	<div class="container-fluid">
	  	<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	   <div class="container">
	    <a class="navbar-brand" href="#">
	      	<img src="https://www.laxmijewel.net/assets/images/logo.png" alt="Bootstrap" width="85" height="45" >
	    </a>
	       
	    <!-- <a class="navbar-brand" href="#" style="font-family: cursive;font-weight: 20px;">Laxmi Jewellers</a> -->
	  </div>
 
    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sales
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sales_disp.php">Sales</a></li>
             
            </ul>
          </li>
        <!--   <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Purchases
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="pur_disp.php">Purchases </a></li>
         
        </ul>
      </li> -->
      </div>

 </nav>



<br><br><br><br> 
<div class="container">
   <div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
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
        <h5 class="card-title">₹<?= $total; ?>/-</h5>
        <p class="card-text">Completed orders</p>
        <a href="#" class="btn btn-primary">See details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
   <div class="card">
      <div class="card-body">
       <?php
       $conn=new mysqli("localhost","root","","project",3307);
        
         $result = mysqli_query($conn,"SELECT * FROM `checkout`");
        $rowcount = mysqli_num_rows( $result );
       ?>     
        <h5 class="card-title"><?= $rowcount; ?></h5>
        <p class="card-text">Orders placed</p>
        <a href="#" class="btn btn-primary">See details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
       <?php
       $conn=new mysqli("localhost","root","","project",3307);
         $result = mysqli_query($conn,"SELECT * FROM `regis`");
        
         $rowcount = mysqli_num_rows( $result );
       ?>     
        <h5 class="card-title"><?= $rowcount; ?></h5>
        <p class="card-text">Total users</p>
        <a href="#" class="btn btn-primary">See details</a>
      </div>
    </div>
  </div>
</div>
</div>

<!--<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
// Set Data
var data = google.visualization.arrayToDataTable([
  ['Price', 'Size'],
  [50,7],[60,8],[70,8],[80,9],[90,9],
  [100,9],[110,10],[120,11],
  [130,14],[140,14],[150,15]
]);
// Set Options
var options = {
  title: 'House Prices vs. Size',
  hAxis: {title: 'Square Meters'},
  vAxis: {title: 'Price in Millions'},
  legend: 'none'
};
// Draw
var chart = new google.visualization.LineChart(document.getElementById('myChart'));
chart.draw(data, options);
}
</script>-->
<div class="row">
	
<div class="col-md-6">
<div
id="myChart" style="width:100%; max-width:700px; height:600px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Asha', 'Mhl'],
  ['Sara',54.8],
  ['Amar',48.6],
  ['Tanya',44.4],
  ['Raju',23.9],
  ['Komal',14.5]
]);

var options = {
  title:'Top Customers',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
</div>

<div class="col-md-6">
	<div class="container mt-3">
  <br><br><h2>Customer Information</h2>
   <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Total Address</th>
      </tr>
    </thead>
    <tbody>
      
       <?php
$conn=new mysqli("localhost","root","","project",3307);
if (mysqli_error($conn)) {
  echo "error";
}
         $select_orders = mysqli_query($conn,"SELECT * FROM `checkout` LIMIT 3");
        
         if(mysqli_num_rows($select_orders)> 0){
            while($row = mysqli_fetch_assoc($select_orders)){
       ?>     
 
      <tr>
        <td><?php echo $row['firstname']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['total_payment']?></td>
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


</div>
        
</body>
</html>