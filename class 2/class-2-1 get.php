<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name" placeholder="Enter name...">
        <input type="number" name="roll"  placeholder="Enter roll..." >
        <input type="email" name="email" placeholder="Enter email...">
        <input type="submit" value="submit">
    </form>
    <div>
        <h1>info</h1>
        Name    : <?php echo isset($_GET["name"])?$_GET["name"]:null ?>
        <br>
        Roll    : <?php echo isset($_GET["roll"])?$_GET["roll"]:null ?>
        <br>
        Email   : <?php echo isset($_GET["email"])?$_GET["email"]:null ?>
    </div>
</body>
</html>