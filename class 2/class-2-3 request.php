<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> <!--get/post jekono ekta dilei holo, jekonotatei request kaj kore.-->
        <input type="text" name="name" placeholder="Enter name...">
        <input type="number" name="roll" placeholder="Enter roll...">
        <input type="email" name="email" placeholder="Enter name...">
        <input type="submit" value="sabmit">
    </form>
    <div>
        <h1>info</h1>
        Name    : <?php echo isset($_REQUEST["name"])?$_REQUEST["name"]:null ?>
        <br>
        Roll    : <?php echo isset($_REQUEST["roll"])?$_REQUEST["roll"]:null ?>
        <br>
        Email   : <?php echo isset($_REQUEST["email"])?$_REQUEST["email"]:null ?>
    </div>
</body>
</html>