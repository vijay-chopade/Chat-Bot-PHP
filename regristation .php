<?php

	$first_name = $_POST['firstname'];
	$middle_name = $_POST['middlename'];
	$last_name = $_POST['lastname'];
	$custemer_work_details = $_POST['custemer_work_details'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$passward = $_POST['pass'];
	$re_type_password = $_POST['repass'];

	// data connections start
	$dbhostname = "localhost";
    $dbusrename = "root";
    $dbpassword = " ";
    $dbname = "registation";
    $con = new mysqli($dbhostname,$dbusrename,$dbpassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT email FROM registation Where email = ? Limit 1";
		$INSERT = "INSERT INTO 'registation' 'registation'(first, middle, last, phone, address, email, password, repassword)
		VALUES (?,?,?,?,?,?,?,?)";

		$stmt = $con->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

		if($rnum==0){
            $stmt->close();

            $stmt = $con->prepare($INSERT);
            $stmt->bind_param("sssissss",$first_name,$middle_name,$last_name,$phone,$address,$email,$passward,$re_type_password);
            $stmt->execute();
            echo("New recorde insert successfully");
        }
		else{
            echo("This user alredy exist!");
        }
        $stmt->close();
        $con->close();
	}
?>