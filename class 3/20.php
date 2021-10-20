<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="email" name="email" placeholder="enter your email address">
        <input type="submit">
    </form>
    <?php
    if(isset($_POST['email'])){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo $_POST['email']. "<b style='color:green;'> is a valid email address</b>";
        }else{
            echo $_POST['email']."<b style='color:red;'> is not a valid email address</b>";
        }
    }
    ?>
</body>

</html>