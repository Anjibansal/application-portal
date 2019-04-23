<!--<?php
include ('server.php');
?>-->

<!DOCTYPE html>
<html>
<head>
	<title>upload documents</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	h1{
            margin: 5%;  
            text-align: center;
            background-color: #4CAF50;
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

    button[type=button], button[type=submit] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 12px 20px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    button[type=submit]:hover{
      background-color: #005f00;
      }
  	input[type=file]:focus{
      border: 2px solid green;
      outline: none;
    }
  </style>
</head>
<body>
	<div class="container">
  <h1 style="margin: 5%;"><center>UPLOAD DOCUMENTS</center></h1>
  <br>
  
	<form class="form-horizontal" action="Details.php" method="post">

		<div class="form-group">
      <label class="control-label col-sm-8">------Note: Please Upload the screenshot of the fee reciept </label>
      <label class="control-label col-sm-8">which you took in the previous section-------</label>
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
      <label class="control-label col-sm-4">Upload Fee Reciept</label>
      <div class="col-sm-6">
        <input type="file" class="form-control" id="thumb" placeholder="Upload Image" name="thumb">
      </div>
      </div>


      <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-6">

        <a href="http://localhost/MyProjects/PayDetails.php"> <button type="submit" class="btn btn-default" >SUBMIT</button></a>
          
      </div>
    </div>

  </form>
</div>


</body>
</html>
