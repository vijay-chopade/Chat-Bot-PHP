<!DOCTYPE html>
    <!-- // This project use given 6-files
    // include (yinsert.php , ydbconnection.php , yfrom.html , ylogin.php , yfatchdata.php , ca_project.php ); -->
<html>    
    <head>
        <title>VALIDATION</title>
    </head>
    <body>

        <?php
            // echo"page testing <br>";
            $lemail = $_POST['lemail'];
            $lpassword = $_POST['lpassword'];
            include("ydbconnection.php");
            
            $query = "select * from register where email='$lemail' && password='$lpassword'";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            if($total!=0){
                if($total==true)
                {
                    header("Location:/college/newbot.php");

                }
                else
                {   echo('alert("Error in Username or Password!")');
                }
            }
            else
            {   echo'<script language="javascript"> alert("Error in Username or Password!")</script>';
                // echo"<b>There is no record avaleble</b>";
            }
        ?>
    </body>
</html>