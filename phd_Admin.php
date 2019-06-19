<?php
include 'excelSheetServer.php';

      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "1234";
      $db = "application_portal";
      
     $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
             
              if(!$conn)
            {
                die("Connection failed: ".  mysqli_connect_error());
            }
             $selectSQL = 'SELECT * FROM `phd_details`';
 # Execute the SELECT Query

  if( !( $selectRes = mysqli_query( $conn,$selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #';
  }else{
    ?>
 
<html>
    <head>
        <title>PhD Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="Admin.css">
    <script src="Admin.js"></script>
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
       <div class="container-fluid">
           <h3 class="topic">Details of Students enrolled in PhD</h3>
   
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">    </h3>
                <div class="pull-right">
                    <button class="btn-dark btn-default btn-xs btn-filter"><span><i class="fas fa-filter fa-lg"></i></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead class="thead-dark">
                     <tr class="header">
                        <th><h5>Application No.</h5></th>
                        <th><h5>Name</h5></th>
                        <th><h5>Father's Name</h5></th>
                        <th><h5>Mother's Name</h5></th>
                        <th><h5>Date of Birth</h5></th>
                        <th><h5>Gender</h5></th>
                        <th><h5>Category 1</h5></th>
                        <th><h5>Category 2</h5></th>
                        <th><h5>Nationality</h5></th>
                        <th><h5>Contact No. 1</h5></th>
                        <th><h5>Contact No. 2</h5></th>
                        
                        <th><h5>Email id</h5></th>
                        <th><h5>Address</h5></th>
                        <th><h5>City</h5></th>
                        <th><h5>State</h5></th>
                        <th><h5>Pincode</h5></th>
                        <th><h5>Tenth Board</h5></th>
                        <th><h5>Tenth Subject</h5></th>
                        <th><h5>Passing Year</h5></th>
                        <th><h5>Tenth Percentage</h5></th>
                        <th><h5>Twelfth Board</h5></th>
                        <th><h5>Twelfth Subject</h5></th>
                        <th><h5>Passing Year</h5></th>
                        <th><h5>Twelfth Percentage</h5></th>
                        <th><h5>University UG</h5></th>
                        <th><h5>Degree UG</h5></th>
                        <th><h5>Year of graduation</h5></th>
                        <th><h5>Percentage UG</h5></th>
                        <th><h5>University PG</h5></th>
                        <th><h5>Degree PG</h5></th>
                        <th><h5>Year of graduation</h5></th>
                        <th><h5>Percentage PG</h5></th>
                        <th><h5>No. of publication(Conference)</h5></th>
                        <th><h5>No. of publication(Journal)</h5></th>
                        <th><h5>Experience(organisation)</h5></th>
                        <th><h5>Experience(Duration)</h5></th>
                        <th><h5>Experience(Role)</h5></th>
                        <th><h5>Preference 1</h5></th>
                        <th><h5>Preference 2</h5></th>
                        <th><h5>Preference 3</h5></th>
                        <th><h5>Preference 4</h5></th>
                        <th><h5>Transaction Number</h5></th>
                        <th><h5>Transaction Reference</h5></th>
                        <th><h5>Transaction Date</h5></th>
                        <th><h5>Photo</h5></th>
                        <th><h5>Signature</h5></th>
                        <th><h5>Thumb Impression</h5></th>
                        <th><h5>Fee Reciept</h5></th>
                    </tr>
                    <tr class="filters">
                        <th><input type="text" class="form-control"  placeholder="Application No." disabled></th>
                        <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Father's Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Mother's Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date of Birth" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Gender" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Category 1" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Category 2" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nationality" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Contact No." disabled></th>
                        <th><input type="text" class="form-control" placeholder="Contact No. 2" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email id" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Address" disabled></th>
                        <th><input type="text" class="form-control" placeholder="City" disabled></th>
                        <th><input type="text" class="form-control" placeholder="State" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Pincode" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Tenth Board" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Tenth Subject" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Passing Year" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Tenth Percentage" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Twelfth Board" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Twelfth Subject" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Passing Year" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Twelfth Percentage" disabled></th>
                        <th><input type="text" class="form-control" placeholder="University UG" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Degree UG" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Year of graduation UG" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Percentage UG" disabled></th>
                        <th><input type="text" class="form-control" placeholder="University PG" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Degree PG" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Year of graduation PG" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Percentage PG" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Conference" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Journal" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Experience(Organisation)" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Experience(Duration)" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Experience(Role)" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Preference 1" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Preference 2" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Preference 3" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Preference 4" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Transaction Number" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Transaction Reference" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Transaction Date" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Photo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Signature" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Thumb Impression" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Fee Reciept" disabled></th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while( $row = mysqli_fetch_assoc( $selectRes ) ){
                   echo "<tr>
                        <td>{$row['Application_No']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['FathersName']}</td>
                        <td>{$row['MothersName']}</td>
                        <td>{$row['Dateofbirth']}</td>
                        <td>{$row['Gender']}</td>
                        <td>{$row['Category1']}</td>
                         <td>{$row['Category2']}</td> 
                         <td>{$row['Natonality']}</td>
                        <td>{$row['ContactNumber']}</td>
                        <td>{$row['AlternateContactNumber']}</td>
                        <td>{$row['Email-id']}</td>
                        <td>{$row['Address']}</td>
                        <td>{$row['City']}</td>
                        <td>{$row['State']}</td>
                        <td>{$row['Pincode']}</td> 
                        <td>{$row['Board_Tenth']}</td>
                        <td>{$row['Subject_Tenth']}</td>
                        <td>{$row['Year_of_completion_Tenth']}</td>
                        <td>{$row['Percentage_Tenth']}</td>
                        <td>{$row['Board_Twelfth']}</td>
                        <td>{$row['Subject_Twelfth']}</td>
                        <td>{$row['Year_of_completion_Twelfth']}</td>
                        <td>{$row['Percentage_Twelfth']}</td> 
                        <td>{$row['University_UG']}</td>
                        <td>{$row['Subject_UG']}</td>
                        <td>{$row['Year_of_graduation_UG']}</td>
                        <td>{$row['Percentage_UG']}</td> 
                             
                        <td>{$row['University_PG']}</td>
                        <td>{$row['Subject_PG']}</td> 
                        <td>{$row['Year_of_graduation_PG']}</td>
                        <td>{$row['Percentage_PG']}</td>
                        <td>{$row['Noofpublication_conference']}</td>
                        <td>{$row['Noofpublication_journal']}</td>
                        <td>{$row['Experience_organisation']}</td> 
                        <td>{$row['Experience_Duration']}</td>
                        <td>{$row['Experience_Role']}</td> 
                        <td>{$row['Preference1']}</td>
                        <td>{$row['Preference2']}</td>
                        <td>{$row['Preference3']}</td>
                        <td>{$row['Preference4']}</td> 
                        <td>{$row['Transaction_Number']}</td>
                        <td>{$row['Transaction_Reference']}</td>
                        <td>{$row['Transaction_Date']}</td>
                        <td>{$row['Upload_Photo']}</td>
                        <td>{$row['Upload_Signature']}</td>
                        <td>{$row['Upload_Thumb_Impression']}</td>
                        <td>{$row['Upload_Fee_Reciept']}</td>
                          
                        
                    </tr>\n";
                    }
                         ?>

                    
                </tbody>
            </table>
        </div>
    </div>
</div>
         <div class="btn">
             <form action="phd_excel.php" method="post">
            <button type="submit" id="btnExport" name='export_phd'
                value="Export to Excel" class="btn btn-info">Export to
                excel</button>
        </form>
    </div>
       
    </body>
    
</html>
<?php
  }

?>


