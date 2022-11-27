<?php
    // THIS PAGE ONLY USE FOR CONNECTING DATABASE NOTHING MORE
    // error_reporting(0);
    // echo"hello";
    $dbhostname = "localhost";
    $dbusrename = "root";
    $dbpassword = "";
    $dbname = "gscollege";

    $con = new mysqli($dbhostname,$dbusrename,$dbpassword,$dbname);
    
    // $query = "select * from register"; // this line to 
    // $data = mysqli_query($con,$query);
    // $total = mysqli_num_rows($data);
    // echo($total); //this line print total data avaleble in database

?>