<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="CSS/regis.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#bg{
  background-image: url('https://img.freepik.com/premium-vector/abstract-white-glowing-shiny-golden-lines-luxury-background_612247-166.jpg');
  filter: blur(0);
}
form .btn {
  background-color: #a9801c;

  }
</style>
</head>
<body>
	 <div id="bg"></div>  
  <div class="row" >
    <div class="container">

      <form method="post" action="regis_db.php">
        
        <div class="row">
          <div class="col-50">
            <h1 style="color:#f0b449;font-size: 40px;text-align: center;font-family: serif;">Registration</h1>
           <div  class="form-field">
    <input type="text" name="r1" placeholder="Name" required/>                         
  </div>
            <div class="form-field">
    <input type="text" name="r2" placeholder="Address" required/>                         
  </div>
           <div class="form-field">
    <input type="text" name="r3" placeholder="Mobile Number" required/>                         
  </div>
  <div style="background-color: white;padding-left: 10px;padding-right: 10px " class="form-field">
    <h3>Gender:</h3><br>
    <input type="radio" name="gen" value="male" required><h4>Male</h4>  
    <input type="radio" name="gen" value="female" required><h4>Female</h4>  
  </div>
  
          <div class="form-field">
    <input type="text" name="t1" placeholder="Username/Email" required/>                         
  </div>
  <div class="form-field">
    <input type="password" name="t2" placeholder="Password" required/>                         
  </div>

        
          <input type="submit" value="Create Account" class="btn" onclick="validate()">
           <!-- <button class="btn" name="submit" type="submit" onclick="validate()">Log in</button> -->
   </div>
</form>
</div>
</div>
</div>

</body>
</html>