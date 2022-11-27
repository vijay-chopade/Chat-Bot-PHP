<!DOCTYPE html>
    <!-- // This project use given files
    // include (yinsert.php , ydbconnection.php , yfrom.html , ylogin.php , yfatchdata.php , ca_project.php ); -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ystyle.css">
        <title>LOGIN PAGE</title>
        <style>
            *{
                background-image:url(img/Black.jpg);
            }
        </style>
    </head>
    <body>
        <div class="div1" style="border: 0px;">
                <img src="img/userx.png" alt="" class="img1">
            <h1 class="h1">Member Login</h1>
            <form action="yfatchdata.php" method="POST"> <!-- action="/college/yca_project.php" -->
                <input type="email" class="inputboxx" name="lemail" placeholder="Enter your email" autofocus required>
                <input type="password" class="inputboxx" name="lpassword" placeholder="Enter your password" required>
                <br><input type="submit" class="submit" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: lightgray;" value="  Log in" name="submit">
            </form>
            <div class="div2">
                <form action="/college/yfrom.html" method="POST">
                    <input type="submit" class="otherpage" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: lightgray;" value="Sign up   " name="submit">
                </form>
            </div>
        </div>
    </body>
</html>