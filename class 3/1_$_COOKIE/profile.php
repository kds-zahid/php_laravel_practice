<?php
if(isset($_COOKIE['name']) && isset($_COOKIE['email'])){
    echo "name: ".$_COOKIE['name'];
    echo "<br> email: ".$_COOKIE['email'];
    echo "<br> <a href='logout.php'> logout</a>";
}else{
    header('location:index.php');
}