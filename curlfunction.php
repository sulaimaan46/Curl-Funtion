<?php

session_start();
 
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>Curl</title>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>

<h2>Curl Function</h2>

<?php if(isset($_SESSION["success"]) && $_SESSION["success"]){ session_unset(); ?>
    <div class="alert alert-info" role="alert">
          New Student Created Sucessfully!
   </div>
   <?php } ?>

 <div class="container">
<form name="myForm" action="curlfuncphp.php" method="POST" >

  <div class="form-group" name="details">
    <label> Name</label>
    <input type="text" name="name" class="form-control" id="name" value="" placeholder="Enter name">
    </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" id="email" value="" placeholder="Enter Email ">
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="text" name="phnumber" class="form-control" id="phonenumber" value="" placeholder="Enter number">
  </div>
  <div class="form-group">
    <label> Class</label>
    <input type="text" name="class" class="form-control" id="study" value="" placeholder="Enter class">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text"  name="address" class="form-control" id="address" value="" placeholder="Enter address">
  </div>
  <div class="form-group">
    <label>Country</label>
    <input type="text"  name="country" class="form-control" id="country" value="" placeholder="Enter Country">
  </div>
  
  <button type="submit" class="btn btn-primary" name=submit>Submit</button>
  
</form>
</div>

</body>
</html>
