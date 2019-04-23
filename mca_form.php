<!--<?php
include ('server.php');
?>-->
<!doctype html>
<html >
  <head>
    <!-- Required meta tags -->
    <meta charset="latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>MCA application form</title>
    <style>
		input[type=text],input[type=number],select,option {
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
      label{
        font-weight:bolder;
        text-transform: uppercase;
      }  
    </style>
  </head>
  <body>
    <h1>EDUCATIONAL DETAILS</h1>

    <form action="server.php" method="post">
       
  <div class="form-row">
    <div class="form-group">
        <h4>10th Standard Details</h4>
    </div>
  </div>

    <div class="form-row">

    <div class="col-md-3">
      <label for="Board_Tenth">Board</label>
      <input  type="text" class="form-control" name="Board_Tenth" required>
    </div>

    <div class="col-md-3">
      <label for="Subject_Tenth">Subjects</label>
      <input type="text" class="form-control" name="Subject_Tenth" required>
    </div>

    <div class="col-md-3">
      <label for="Year_of_completion_Tenth">Year of Passing</label>
      <input type="text" class="form-control" name="Year_of_completion_Tenth" required>
    </div>

      <div class="col-md-3">
      <label for="Percentage_Tenth">Percentage</label>
      <input type="number" class="form-control" name="Percentage_Tenth" required>
    </div>

  </div>
        
         <div class="form-row">
    <div class="form-group">
        <h4>12th Standard Details</h4>
    </div>
     
  </div>
        <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Board_Twelfth">Board</label>
      <input type="text" class="form-control" name="Board_Twelfth" required>
    </div>
    <div class="form-group col-md-3">
      <label for="Subject_Twelfth">Subjects</label>
      <input type="text" class="form-control" name="Subject_Twelfth" required>
    </div>
    <div class="form-group col-md-3">
      <label for="Year_of_completion_Twelfth">Year of Passing</label>
      <input type="text" class="form-control" name="Year_of_completion_Twelfth" required>
    </div>
            <div class="form-group col-md-3">
      <label for="Percentage_Twelfth">Percentage</label>
      <input type="number" class="form-control" name="Percentage_Twelfth"required>
    </div>
  </div>
        
    <div class="form-row">
    <div class="form-group">
        <h4>UnderGraduate Degree Details</h4>
    </div>
     
  </div>
        <div class="form-row">
    <div class="form-group col-md-3">
      <label for="University_UG">University</label>
      <input type="text" class="form-control" name="University_UG" required >
    </div>
    <div class="form-group col-md-3">
      <label for="Subject_UG">Degree</label>
      <input type="text" class="form-control" name="Subject_UG">
    </div>
    <div class="form-group col-md-3">
      <label for="Year_of_graduation_UG">Year of graduation</label>
      <input type="text" class="form-control" name="Year_of_graduation_UG" required>
    </div>
            <div class="form-group col-md-3">
      <label for="Percentage_UG">Percentage</label>
      <input type="number" class="form-control" name="Percentage_UG" required>
    </div>
  </div>
  <br>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I confirm all details.
      </label>
    </div>
  </div>
        <button type="submit" class="btn btn-primary" name="submit">Next</button>
</form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

    </body>
</html>

