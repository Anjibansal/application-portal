<?php
session_start();
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "1234";
      $db = "application_portal";
      
     $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
             
              if(!$conn)
            {
                die("Connection failed: ".  mysqli_connect_error());
            }
       
       

if (isset($_POST["export_bba"])) {
    
     $sql = 'SELECT * FROM `bba_details`';
     $productResult = mysqli_query($conn,$sql);
    $filename = "BBA_Details.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();
}

if (isset($_POST["export_mtech"])) {
     $sql = 'SELECT * FROM `details`';
     $productResult = mysqli_query($conn,$sql);
    $filename = "MTech_Details.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();
}

if (isset($_POST["export_mca"])) {
    $sql = 'SELECT * FROM `mca_details`';
        $productResult = mysqli_query($conn,$sql);
    $filename = "MCA_Details.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();
}

if (isset($_POST["export_mplan"])) {
    
    $sql = 'SELECT * FROM `mplan_details`';
    $productResult = mysqli_query($conn,$sql);
    $filename = "MPlan_Details.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();
}

if (isset($_POST["export_phd"])) {
    
    $sql = 'SELECT * FROM `phd_details`';
    $productResult = mysqli_query($conn,$sql);
    $filename = "PhD_Details.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();
}
?>

