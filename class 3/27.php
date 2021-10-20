
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
        <input name='number' type="number" min="1" max="3">
        <input type="submit">
    </form>
</body>
</html>
<?php
//print_r($_POST);
if(isset($_POST['number'])){
    $num=$_POST['number'];   
}else{
    $num=null;
}


    switch($num){
        case 1:
            echo "this is case 1";
            break;
        case 2:
            echo "this is case 2";
            break;
        case 3:
            echo "this is case 3";
            break;
        default:
            echo "this is default case";
}