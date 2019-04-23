<!--php
include ('server.php');
?>-->

<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
  button[type=button], button[type=submit], input[type=reset] {
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
      input[type=text],input[type=number],input[type=date] {
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
    h1{
            margin: 5%;  
            text-align: center;
            background-color: #4CAF50;
        }
      </style>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 style="margin: 5%;"><center>Payment Details</center></h2>
  <br>
  <br>

  <form class="form-horizontal" action="PayDetails.php" method="post">

    <div class="form-group">
      <label class="control-label col-sm-8">------Note: Please fill the below details after the transaction is complete</label>
      <label class="control-label col-sm-8">Take a screenshot of the generated successful transaction reciept</label>
      <label class="control-label col-sm-8">The screenshot will be needed for upload in the next section-------</label>
      
    </div> 
    

     <div class="form-group">
      <label class="control-label col-sm-4" for="number">Payment Link:</label>
      <div class="col-sm-6">
      <label class="col-sm-8"><a href="www.youcanemptyyourwalletshere.com">www.youcanemptyyourwalletshere.com</a></label>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="number">Transaction Number:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" id="number" name="number" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="ref">Transaction Reference:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="ref" name="ref">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="tdate">Transaction Date:</label>
      <div class="col-sm-6">
        <input type="date" class="form-control" id="tdate" name="tdate">
      </div>
    </div>
  </form>
</div>
<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-6">

        <a href="http://localhost/MyProjects/PayDetails.php"> <button type="submit" class="btn btn-default" >SUBMIT</button></a>
          
      </div>
    </div>

</body>
</html>


