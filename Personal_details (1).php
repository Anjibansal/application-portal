<?php
include ('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><center>Personal Details</center></h2>
  <br>
  <br>
  <form class="form-horizontal" action="formEducationalDetails.php" method="post">
  	<div class="form-group">
      <label class="control-label col-sm-4" for="name">Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="fname">Father's Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="fname" placeholder="Enter Father's name" name="fname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="mname">Mother's Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="mname" placeholder="Enter Mother's name" name="mname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="bdate">Date of birth:</label>
      <div class="col-sm-6">
        <input type="date" class="form-control" id="bdate" name="bdate" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="gender">Gender:</label>
      <div class="col-sm-6">
        <label><input type="radio" id="female" name="female" required>Female</label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="category">Category:</label>
      <div class="col-sm-6">
        
      <select class="form-control" id="sel1" name="category" required>
        <option>General</option>
        <option>SC/ST</option>
        <option>OBC</option>
      </select>
      
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="nation">Nationality:</label>
      <div class="col-sm-6">
        <label><input type="radio" id="india" name="india" required>Indian</label>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4" for="mobile">Contact Number:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" id="mobile" placeholder="Enter Contact Number" name="mobile" required>
      </div>
    </div>
   

    <div class="form-group">
      <label class="control-label col-sm-4" for="address">Address:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="street" placeholder="Street Name" name="street">
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-4"></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="city" placeholder="City" name="city">
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-4"></label>
      <div class="col-sm-6">
        <select class="form-control" id="state" name="state">
      <option value="">Select State</option>
      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
      <option value="Daman and Diu">Daman and Diu</option>
      <option value="Delhi">Delhi</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Lakshadweep">Lakshadweep</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Orissa">Orissa</option>
      <option value="Pondicherry">Pondicherry</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttaranchal">Uttaranchal</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="West Bengal">West Bengal</option>
      </select>
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-4"></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="pin" placeholder="PIN Code" name="pin">
      </div>
      </div>
        <div class="form-group">
      <label class="control-label col-sm-4">Upload Photo</label>
      <div class="col-sm-6">
        <input type="file" class="form-control" id="photo" placeholder="Upload Image" name="Photo">
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-4">Upload Signature</label>
      <div class="col-sm-6">
        <input type="file" class="form-control" id="sign" placeholder="Upload Image" name="sign">
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-4">Upload Thumb Impression</label>
      <div class="col-sm-6">
        <input type="file" class="form-control" id="thumb" placeholder="Upload Image" name="thumb">
      </div>
      </div>
      
     
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-6">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-6">
          <a href="http://localhost/MyProjects/formEducationalDetails.php"> <button type="submit" class="btn btn-default" >Next</button></a>
      </div>
    </div>
  </form>
</div>

</body>
</html>


