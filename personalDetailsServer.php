<?php

session_start();
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "1234";
      $db = "portal";
      
     $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
             
              if(!$conn)
            {
                die("Connection failed: ".  mysqli_connect_error());
            }
            
      ini_set('display_errors',1);
 ini_set('display_startup_errors',1);
 error_reporting(E_ALL);
 
    if(isset($_POST['submit']))
    {  
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $mname = mysqli_real_escape_string($conn, $_POST['mname']);
        $bdate = mysqli_real_escape_string($conn, $_POST['bdate']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $nation = mysqli_real_escape_string($conn, $_POST['nation']);
        $category1 = mysqli_real_escape_string($conn, $_POST['category1']);
        $category2 = mysqli_real_escape_string($conn, $_POST['category2']);
        
        $mobile1 = mysqli_real_escape_string($conn, $_POST['mobile1']);
        $mobile2 = mysqli_real_escape_string($conn, $_POST['mobile2']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $pin = mysqli_real_escape_string($conn, $_POST['pin']);
        
        
        $conn->autocommit(FALSE);
        if(empty($name)|| empty($fname) || empty($mname) || empty($bdate) || empty($gender)|| empty($nation)|| empty($category1)|| empty($category2)|| empty($mobile1)|| empty($mobile2)|| empty($email)|| empty($address)|| empty($city)|| empty($state)|| empty($pin))
       {
           header("Location: ../PersonalDetails.php?error=emptyfields");
           exit();  
       }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
       {
           header("Location: ../PersonalDetails.php?error=invalidmail".$email);
           exit();
       }
        $conn->query("INSERT INTO personal_details(Name,FathersName,MothersName,Dateofbirth,Gender,Category1,Category2,Natonality,ContactNumber,AlternateContactNumber,Email_id,Address,City,State,Pincode)
        VALUES('$name','$fname','$mname','$bdate','$gender','$category1','$category2','$nation','$mobile1','$mobile2','$email','$address','$city','$state','$pin')");
        $res = $conn->query("START TRANSACTION");
        $conn->commit();
        if($res)
        {
           echo  "<script>alert('Data Saved')</script>";
        }
        else
        {
           echo "<script>alert('Data not saved')</script>";
  
            mysqli_error($conn);
 
        }
    }
   
?>