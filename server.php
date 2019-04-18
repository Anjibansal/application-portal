<?php

session_start();
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "1234";
      $db = "educationdetails";
      
      $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
              //or die("Connection failed: %s\n".$conn->error);
              if(!$conn)
            {
                die("Connection failed: ".  mysqli_connect_error());
            }
 
 
 ini_set('display_errors',1);
 ini_set('display_startup_errors',1);
 error_reporting(E_ALL);
//initialising variables

//$applicationNo = 0;
//$Board_Tenth = "";
//$Subject_Tenth = "";
//$Year_of_completion_Tenth = "";
//$Percentage_Tenth = 0;
//
//$Board_Twelfth = "";
//$Subject_Twelfth = "";
//$Year_of_completion_Twelfth = "";
//$Percentage_Twelfth = 0;
//
//$University_UG = "";
//$Subject_UG = "";
//$Year_of_graduation_UG = "";
//$Percentage_UG = 0;
//
//$Gate = 0;

//$errors = array();
if(isset($_POST['submit']))
{
   
//Register users
   
$Board_Tenth = mysqli_real_escape_string($conn, $_POST['Board_Tenth']);
$Subject_Tenth = mysqli_real_escape_string($conn, $_POST['Subject_Tenth']);
$Year_of_completion_Tenth  = mysqli_real_escape_string($conn, $_POST['Year_of_completion_Tenth']);
$Percentage_Tenth = mysqli_real_escape_string($conn, $_POST['Percentage_Tenth']);

$Board_Twelfth = mysqli_real_escape_string($conn, $_POST['Board_Twelfth']);
$Subject_Twelfth = mysqli_real_escape_string($conn, $_POST['Subject_Twelfth']);
$Year_of_completion_Twelfth  = mysqli_real_escape_string($conn, $_POST['Year_of_completion_Twelfth']);
$Percentage_Twelfth = mysqli_real_escape_string($conn, $_POST['Percentage_Twelfth']);

$University_UG = mysqli_real_escape_string($conn, $_POST['University_UG']);
$Subject_UG = mysqli_real_escape_string($conn, $_POST['Subject_UG']);
$Year_of_graduation_UG  = mysqli_real_escape_string($conn, $_POST['Year_of_graduation_UG']);
$Percentage_UG = mysqli_real_escape_string($conn, $_POST['Percentage_UG']);

$Gate = mysqli_real_escape_string($conn, $_POST['Gate']);
$RollNo = mysqli_real_escape_string($conn, $_POST['RollNo']);
$Year = mysqli_real_escape_string($conn, $_POST['Year']);
$Paper = mysqli_real_escape_string($conn, $_POST['Paper']);
$Score = mysqli_real_escape_string($conn, $_POST['Score']);
$Rank = mysqli_real_escape_string($conn, $_POST['Rank']);
$Preference1 = mysqli_real_escape_string($conn, $_POST['Preference1']);
$Preference2 = mysqli_real_escape_string($conn, $_POST['Preference2']);
$Preference3 = mysqli_real_escape_string($conn, $_POST['Preference3']);
$Preference4 = mysqli_real_escape_string($conn, $_POST['Preference4']);
//echo $Board_Tenth;
//echo $Subject_Tenth;
//echo $Year_of_completion_Tenth;
//echo $Percentage_Tenth;
$conn->autocommit(FALSE);
 
$conn->query("INSERT INTO educational_details(Board_Tenth,Subject_Tenth,Year_of_completion_Tenth,Percentage_Tenth,Board_Twelfth,Subject_Twelfth,Year_of_completion_Twelfth,Percentage_Twelfth,University_UG,Subject_UG,Year_of_graduation_UG,Percentage_UG,Gate,RollNo,Year,Paper,Score,Rank,Preference1,Preference2,Preference3,Preference4)
VALUES('$Board_Tenth','$Subject_Tenth','$Year_of_completion_Tenth','$Percentage_Tenth','$Board_Twelfth','$Subject_Twelfth','$Year_of_completion_Twelfth','$Percentage_Twelfth','$University_UG','$Subject_UG','$Year_of_graduation_UG','$Percentage_UG','$Gate','$RollNo','$Year','$Paper','$Score','$Rank','$Preference1','$Preference2','$Preference3','$Preference4')");

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
 
  //echo phpinfo();
 }
 
}
//mysqli_close($conn);
?>