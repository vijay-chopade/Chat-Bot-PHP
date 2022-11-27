<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
</head>
<body>
    <div>
        <?php
            echo("This user alredy exist!");
        ?>
        <form action="/college/ylogin.php" method="POST">
            <button type="submit" name="login">Go login</button>
        </form>
    </div>
</body>
</html>