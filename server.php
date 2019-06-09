<?php
session_start();

// initializing variables
$Name = "";
$Email    = "";
$ContactNo ="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'application_portal');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $ContactNo = mysqli_real_escape_string($db, $_POST['ContactNo']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Name)) { array_push($errors, "Name is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($ContactNo)) { array_push($errors, "Contact No. is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registrationdetails WHERE Email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    // if ($user['Name'] === $Name) {
    //   array_push($errors, "Username already exists");
    // }

    if ($user['Email'] === $Email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$Password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registrationdetails (Name, Email, ContactNo, Password) 
  			  VALUES('$Name', '$Email', '$ContactNo', '$Password')";
  	mysqli_query($db, $query);
  	$_SESSION['Email'] = $Email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: mainpage.html');
  }
}

//Login
if (isset($_POST['login_user'])) {
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);

  if (empty($Email)) {
    array_push($errors, "Email is required");
  }
  if (empty($Password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $Password = md5($Password);
    $query = "SELECT * FROM registrationdetails WHERE Email='$Email' AND Password='$Password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['Email'] = $Email;
      $_SESSION['success'] = "You are now logged in";
      header('location: mainpage.html');
    }else {
      array_push($errors, "Wrong email/password combination");
    }
  }
}

?>