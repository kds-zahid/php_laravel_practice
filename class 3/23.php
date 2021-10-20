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
        Email:
        <br>
        <input type="email" name="to" placeholder="sender mail..." required>
        <br>
        Subject
        <br>
        <input type="text" name="sub" placeholder="subject..." required>
        <br>
        Message
        <br>
        <textarea name="msg" placeholder="message..." cols="30" rows="10"  required></textarea>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $to=$_POST['to'];
        $from="example@mail.com";
        $sub=$_POST['sub'];
        $msg=$_POST['msg'];
        $header="From: $from
        \r\n 
        CC: $to";

        //mail
        if(mail($to, $sub, $msg, $header)){
            echo "<b style='color:green;'>mail send success</b>";
        }else{
            echo "<b style='color:red;'>send failed! (Failed to connect to mailserver) <br> Please verify your 'SMTP' and 'smtp_port'</b>";
        }
    }
    ?>
</body>

</html>