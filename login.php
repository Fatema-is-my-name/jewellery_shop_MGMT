<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  <link rel="stylesheet" href="CSS/login.css">
<style>
#bg{
  background-image: url('https://img.freepik.com/premium-vector/abstract-white-glowing-shiny-golden-lines-luxury-background_612247-166.jpg');
  filter: blur(0);
}
form .btn {
  background-color: #a9801c;

  }
</style>

	<script type="text/javascript">
		function validate(){
			var Username=document.f1.t1.value;
			var Password=document.f1.t2.value;
			var CPassword=document.f1.cpwd.value;

			if (Username==""||Password=="") {
				alert("Fields should not be empty!");
			}
			if (Password.length<8) {
				alert("Password should contain more than 8 characters!")
			}
			if (Password!=CPassword) {
			alert("Passwords do not match!")
			}
			/*else{
				alert("Login successful")
			}*/
			}
	</script>
</head>
<body>
<div id="bg"></div>
 
<form method="post" action="dbcon.php" name="f1">
            <h1 style="color:#f0b449;font-size: 40px;text-align: center;font-family: serif;">Login</h1>
    
  <div class="form-field">
    <input type="text" name="t1" placeholder="Username/Email" required/>                         
  </div>
  <div class="form-field">
    <input type="password" name="t2" placeholder="Password" required/>                         
  </div>

  <div class="form-field">
    <button class="btn" name="submit" type="submit" onclick="validate()">Log in</button>
    <button class="btn" type="Reset">Reset</button>
  </div>

  <a href="regis.php" style="font-size: 18px;color:black;">or Register now!</a>

</form> 

