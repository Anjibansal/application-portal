<?php
 include ('server.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>MPlan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="regisHome.css" />
    <style>
    input[type=text],
    input[type=number],
    select,
    option,
    input[type=date],
    input[type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid green;
        border-radius: 4px;
        outline: none;
    }

    input[type=text]:focus {
        border: 2px solid green;
        outline: none;
    }

    input[type=number]:focus {
        border: 2px solid green;
        outline: none;
    }

    input[type=date]:focus {
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

    select:focus {
        background-color: #00ff00;
    }

    form {
        margin: 5%;
    }

    h1 {
        margin: 5%;
        text-align: center;
        background-color: #4CAF50;
    }

    button[type=button],
    button[type=submit],
    input[type=reset] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }

    button[type=submit]:hover {
        background-color: #005f00;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="header-nav">
        <a class="navbar-brand" href="#"><img src="iglogo1.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome User!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Nav-bar END -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <center>
                        <h2 class="topic">Apply for MPlan</h2>
                    </center>
                </div>
                <div class="card">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li role="presentation" class="nav-item">
                            <a class="nav-link active" id="personal-info" data-toggle="tab" href="#personal" role="tab"
                                aria-controls="personal" aria-selected="true">1: Personal Details</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" id="imp-education" data-toggle="tab" href="#education" role="tab"
                                aria-controls="education" aria-selected="false">2: Educational Details</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" id="imp-payment" data-toggle="tab" href="#payment" role="tab"
                                aria-controls="payment" aria-selected="false">3: Payment</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" id="imp-docs" data-toggle="tab" href="#docs" role="tab"
                                aria-controls="docs" aria-selected="false">4: Upload Documents</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel" aria-labelledby="personal-info">
                            <div class="container info-container">
                                <h1>PERSONAL DETAILS</h1>
                                <form class="form" action="personaldetails.php" method="post">
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="name">Name</label></h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="First and last name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="fname">Father's Name</label></h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="Father's name" name="fname" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>
                                            <label class="control-label col-sm-4" for="mname">Mother's Name</label>
                                        </h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="mname"
                                                placeholder="Mother's name" name="mname" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="bdate">Date of birth</label></h5>
                                        <div class="col-sm-12">
                                            <input type="date" class="form-control" id="bdate" name="bdate"
                                                placeholder="dd-mm-yyyy" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="gender">Gender</label></h5>
                                        <div class="col-sm-12">
                                            <label><input type="radio" id="female" name="female" required>Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="nation">Nationality</label></h5>
                                        <div class="col-sm-12">
                                            <label><input type="radio" id="india" name="india" required>Indian</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="category">Category 1</label></h5>
                                        <div class="col-sm-12">

                                            <select class="form-control" id="sel1" name="category1" required
                                                style="border: 2px solid green;">
                                                <option>General</option>
                                                <option>SC/ST</option>
                                                <option>OBC</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="category">Category 2</label></h5>
                                        <div class="col-sm-12">

                                            <select class="form-control" id="sel1" name="category2" required
                                                style="border: 2px solid green;">
                                                <option>General</option>
                                                <option>CW</option>
                                                <option>PD</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="mobile1">Contact Number</label>
                                        </h5>
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="mobile1"
                                                placeholder="9999999999" name="mobile1" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="mobile2">Alternate Contact
                                                Number</label></h5>
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="mobile2"
                                                placeholder="9999999999" name="mobile2" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="email">Email</label></h5>
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="name@domain.com" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="address">Address</label></h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="email"
                                                placeholder="Coressponding Address" name="address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4">City</label></h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="city" placeholder="City"
                                                name="city">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4">State</label></h5>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="state" name="state"
                                                style="border: 2px solid green;">
                                                <option value="">Select State</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                                </option>
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
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="pin" placeholder="PIN Code"
                                                name="pin">
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
                                            <a href="http://localhost/MyProjects/formEducationalDetails.php"> <button
                                                    type="submit" class="btn btn-default" name="next">Next</button></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane" id="education" role="tabpanel" aria-labelledby="imp-education">
                            <div class="container info-container">
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
                                            <input type="text" class="form-control" name="Board_Tenth" required>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="Subject_Tenth">Subjects</label>
                                            <input type="text" class="form-control" name="Subject_Tenth" required>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="Year_of_completion_Tenth">Year of Passing</label>
                                            <input type="text" class="form-control" name="Year_of_completion_Tenth"
                                                required>
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
                                            <input type="text" class="form-control" name="Year_of_completion_Twelfth"
                                                required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Percentage_Twelfth">Percentage</label>
                                            <input type="number" class="form-control" name="Percentage_Twelfth"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group">
                                            <h4>Under Graduate Degree Details</h4>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="University_UG">University</label>
                                            <input type="text" class="form-control" name="University_UG" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Subject_UG">Degree</label>
                                            <input type="text" class="form-control" name="Subject_UG">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Year_of_graduation_UG">Year of graduation</label>
                                            <input type="text" class="form-control" name="Year_of_graduation_UG"
                                                required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Percentage_UG">Percentage</label>
                                            <input type="number" class="form-control" name="Percentage_UG" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <h4>GATE</h4>
                                        </div>
                                        <div class="form-check form-check-inline form-group col-md-2">
                                            <input class="form-check-input" type="radio" name="Gate" value="option1">
                                            <label class="form-check-label" for="inlineRadioY">YES</label>
                                        </div>
                                        <div class="form-check form-check-inline form-group col-md-3">
                                            <input class="form-check-input" type="radio" name="Gate" value="option2">
                                            <label class="form-check-label" for="Gate">NO</label>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <p>If NO then fill NA</p>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="RollNo">Roll Number</label>
                                            <input type="text" class="form-control" name="RollNo">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="Year">Year</label>
                                            <input type="text" class="form-control" name="Year">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Paper">Paper</label>
                                            <select name="Paper" class="form-control" style="border: 2px solid green;">
                                                <option selected>Choose...</option>
                                                <option> ABC </option>
                                                <option> XYZ </option>
                                                <option> PQR</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="Score">Score</label>
                                            <input type="text" class="form-control" name="Score">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="Rank">Rank</label>
                                            <input type="text" class="form-control" name="Rank">
                                        </div>
                                    </div>


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
                            </div>
                        </div>

                        <div class="tab-pane" id="payment" role="tabpanel" aria-labelledby="imp-payment">
                            <div class="container info-container">
                                <h1>PAYMENT DETAILS
                                </h1>
                                <form class="form-horizontal" action="PayDetails.php" method="post">

                                    <div class="form-group">
                                        <center>
                                            <b>
                                                <label class="control-label col-sm-8">------Note: Please fill the below
                                                    details after the transaction is complete</label>
                                                <label class="control-label col-sm-8">Take a screenshot of the generated
                                                    successful transaction reciept</label>
                                                <label class="control-label col-sm-8">The screenshot will be needed for
                                                    upload in the next section-------</label>
                                            </b>
                                        </center>

                                    </div>


                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="number">Payment Link:</label>
                                        </h5>
                                        <div class="col-sm-12">
                                            <label class="col-sm-12"><a
                                                    href="www.youcanemptyyourwalletshere.com">www.youcanemptyyourwalletshere.com</a></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="number">Transaction
                                                Number:</label></h5>
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="number" name="number"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4" for="ref">Transaction
                                                Reference:</label></h5>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="ref" name="ref">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>
                                            <label class="control-label col-sm-4" for="tdate">Transaction Date:</label>
                                        </h5>
                                        <div class="col-sm-12">
                                            <input type="date" class="form-control" id="tdate" name="tdate">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-6">

                                            <a href="http://localhost/MyProjects/PayDetails.php"> <button type="submit"
                                                    class="btn btn-default">SUBMIT</button></a>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="tab-pane" id="docs" role="tabpanel" aria-labelledby="imp-docs">
                            <div class="container info-container">
                                <h1>UPLOAD DOCUMENTS</h1>

                                <form class="form-horizontal" action="Details.php" method="post">

                                    <div class="form-group">
                                        <center>
                                            <b>
                                                <label class="control-label col-sm-12">------Note: Please Upload the
                                                    screenshot
                                                    of the fee reciept
                                                </label>
                                                <label class="control-label col-sm-12">which you took in the previous
                                                    section-------</label>
                                            </b>
                                        </center>
                                    </div>

                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4">Upload Photo</label></h5>
                                        <div class="col-sm-12">
                                            <input type="file" class="form-control" id="photo"
                                                placeholder="Upload Image" name="Photo">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4">Upload Signature</label></h5>
                                        <div class="col-sm-12">
                                            <input type="file" class="form-control" id="sign" placeholder="Upload Image"
                                                name="sign">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4">Upload Thumb Impression</label></h5>
                                        <div class="col-sm-12">
                                            <input type="file" class="form-control" id="thumb"
                                                placeholder="Upload Image" name="thumb">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5><label class="control-label col-sm-4">Upload Fee Reciept</label></h5>
                                        <div class="col-sm-12">
                                            <input type="file" class="form-control" id="thumb"
                                                placeholder="Upload Image" name="thumb">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-6">

                                            <a href="http://localhost/MyProjects/PayDetails.php"> <button type="submit"
                                                    class="btn btn-default">SUBMIT</button></a>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>