<?php
if(isset($_POST['name']) && isset($_POST['email'])){
 setcookie('name',$_POST['name'],time()+60*60*24*7);
 setcookie('email',$_POST['email'],time()+60*60*24*7);
 header('location: profile.php');
}
elseif(isset($_COOKIE['name']) && isset($_COOKIE['email'])){
    header('location: profile.php');
}

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
    <form action="" method="post">
        <input type="text" name="name" placeholder="enter name...">
        <br>
        <input type="email" name="email" placeholder="enter email.....">
        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>