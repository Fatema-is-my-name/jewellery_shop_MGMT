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

	</title>
</head>
<body>
	<div class="container-fluid">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
 <div class="container">
      <a class="navbar-brand" >SALES ORDER</a>
      <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="web_proj.html" style="margin-top:5px">Close</a></li>
  </ul>
</nav>
    </div>
  </nav>
</div>
<div class="container">
	
	<br>
	<div class="row" style="margin: auto;right: 0px; margin-left: 250px">
    <!-- Left side -->
    <form method="post" action="sales_ord_db.php">
    <div class="col-lg-8">
      <!-- Basic information -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" name="nm" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Bill No</label>
                <input type="text" name="bno" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="add" class="form-control">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Mobile No</label>
                <input type="text" name="mno" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control">
              </div>
            </div>
            
          </div>

    </div>

    <center>
    <input type="button" class="btn btn-primary" name="Submit" value="Submit"><br>
    </center>
    <div><br></div>
  </div>
</div>

</form>

</div>
	<br>
	<!-- <div class="container mt-3">
    
  <table class="table">
    <thead>
      <tr>
        <th>Sr No.</th>
        <th>Details of goods</th>
        <th>Weight</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
      	<td><input type="submit" value="Submit"></td>
      	<td></td>
      	<td></td>
      	<td><input type="reset" value="Reset"></td>
      </tr>
    </tbody>
  </table>
</div> -->
</body>
</html>