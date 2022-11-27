<?php
    // This project use given files
    // include (yinsert.php , ydbconnection.php , yfrom.html , ylogin.php , yfatchdata.php , ca_project.php );
    // echo"page testing <br>";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonecode = $_POST['phonecode'];
    $phone = $_POST['phone'];
    $lemail = $_POST['lemail'];
    $lpassword = $_POST['lpassword'];
    // $nickname = $_POST['nickname'];

    $dbhostname = "localhost";
    $dbusrename = "root";
    $dbpassword = "";
    $dbname = "gscollege";

    $con = new mysqli($dbhostname,$dbusrename,$dbpassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT email FROM register Where email = ? Limit 1";
        $INSERT = "INSERT Into register(username, password, email, phonecode, phone)values(?,?,?,?,?)";

        // prepare statment
        $stmt = $con->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            $stmt->close();

            $stmt = $con->prepare($INSERT);
            $stmt->bind_param("sssii",$username,$password,$email,$phonecode,$phone);
            $stmt->execute();
            // echo("New recorde insert successfully");
            header("Location: ylogin.php");
        }
        else{
            // echo("This user alredy exist!");
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            // header("Location: yerror.php");
        }
        $stmt->close();
        $con->close();
    }
?>