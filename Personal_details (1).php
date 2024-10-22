<?php
 include ('newserver.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
		input[type=text],input[type=number],select,option,input[type=date],input[type=email] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 2px solid green;
		  border-radius: 4px;
		  outline: none;
		}
		input[type=text]:focus{
			border: 2px solid green;
			outline: none;
		}
		input[type=number]:focus{
			border: 2px solid green;
			outline: none;
		}
    input[type=date]:focus{
      border: 2px solid green;
      outline: none;
    }
    input[type=file] {
        width: 100%;
      padding-bottom: 12px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid green;
      border-radius: 4px;
      outline: none;
      cursor: pointer;
    }

		select:focus{
			background-color: #00ff00;
		}
        form{
            margin: 5%;
        }
        h1{
            margin: 5%;  
            text-align: center;
            background-color: #4CAF50;
        }
        button[type=button], button[type=submit], input[type=reset] {
			  background-color: #4CAF50;
			  border: none;
			  color: white;
			  padding: 16px 32px;
			  text-decoration: none;
			  margin: 4px 2px;
			  cursor: pointer;
		}
		button[type=submit]:hover{
			background-color: #005f00;
    	}
    </style>
</head>
<body>

  <h1>PERSONAL DETAILS</h1>
  <form class="form" action="personaldetails.php" method="post">
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="name">Name</label></h5>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="First and last name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="fname">Father's Name</label></h5>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fname" placeholder="Father's name" name="fname" required>
      </div>
    </div>
    <div class="form-group">
      <h5>
      <label class="control-label col-sm-4" for="mname">Mother's Name</label>
      </h5>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mname" placeholder="Mother's name" name="mname" required>
      </div>
    </div>
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="bdate">Date of birth</label></h5>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="bdate" name="bdate" placeholder="dd-mm-yyyy" required>
      </div>
    </div>
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="gender">Gender</label></h5>
      <div class="col-sm-10">
        <label><input type="radio" id="female" name="female" required>Female</label>
      </div>
    </div>
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="nation">Nationality</label></h5>
      <div class="col-sm-10">
        <label><input type="radio" id="india" name="india" required>Indian</label>
      </div>
    </div>
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="category">Category 1</label></h5>
      <div class="col-sm-10">
        
      <select class="form-control" id="sel1" name="category1" required  style="border: 2px solid green;">
        <option>General</option>
        <option>SC/ST</option>
        <option>OBC</option>
      </select>
      
      </div>
    </div>
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="category">Category 2</label></h5>
      <div class="col-sm-10">
        
      <select class="form-control" id="sel1" name="category2" required  style="border: 2px solid green;">
        <option>General</option>
        <option>CW</option>
        <option>PD</option>
      </select>
      
      </div>
    </div>
    
  <div class="form-group">
      <h5><label class="control-label col-sm-4" for="mobile1">Contact Number</label></h5>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="mobile1" placeholder="9999999999" name="mobile1" required>
      </div>
    </div>
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="mobile2">Alternate Contact Number</label></h5>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="mobile2" placeholder="9999999999" name="mobile2" required>
      </div>
    </div>
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="email">Email</label></h5>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="name@domain.com" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <h5><label class="control-label col-sm-4" for="address">Address</label></h5>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Coressponding Address" name="address">
      </div>
      </div>
      
      <div class="form-group">
      <h5><label class="control-label col-sm-4">City</label></h5>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="city" placeholder="City" name="city">
      </div>
      </div>
      <div class="form-group">
      <h5><label class="control-label col-sm-4">State</label></h5>
      <div class="col-sm-10">
        <select class="form-control" id="state" name="state"  style="border: 2px solid green;">
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
      <h5><label class="control-label col-sm-4">Pincode</label></h5>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pin" placeholder="PIN Code" name="pin">
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
          <a href="http://localhost/MyProjects/formEducationalDetails.php"> <button type="submit" class="btn btn-default" name = "next">Next</button></a>
      </div>
    </div>
  </form>

</body>
</html>


