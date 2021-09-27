<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Session info</h1>
    Name: <?php echo isset($_SESSION['name'])?$_SESSION['name']:"session destroyed";?>
    <br>
    Roll: <?php echo isset($_SESSION['roll'])?$_SESSION['roll']:"session destroyed";?>
    <br>
    Email: <?php echo isset($_SESSION['email'])?$_SESSION['email']:"session destroyed";?>
    <br>
    <h5>
        <a href="class-2-4-2_session_destroy.php"> session destroy </a>
    </h5>
</body>
</html>