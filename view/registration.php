<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
 
</style>

    <title>Registration form</title>
</head>
<body>
<div class="row">
<div class="col-sm-6 ">
    <img src="../logo/logo1.jpg" width="700px" height="100%" style=>
</div>

    <div class="col-sm-6" style="background-color:aliceblue;">
  <h2 style="text-align:center; color:mediumblue">REGISTRATION123</h2>

  <form action="../model/registrationdata.php" method="POST" id= "form" >
  <p class="error"></p>
    <div class="form-group">
      <label for="uname">Username</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="Number">mobNumber</label>
        <input type="number" class="form-control" id="number" placeholder="number" name="number" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="uname">Address</label>
        <input type="text" class="form-control" id="address" placeholder="address" name="address" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="Confirm password">Confirm password</label>
        <input type="password" class="form-control" id="confpassword" placeholder="confirm password" name="confpassword" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        
       
      </label>
    </div>
    <button type="submit"  name= "submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    </div>


<script src="./Registration.js">



</script>
</body>
</html>