<?php 
session_start();
$_SESSION["name"]="Zahid";
$_SESSION["roll"]=5154;
$_SESSION["email"]="zahid@gmail.com";
echo "session start succefull \n";
echo "view session <a href='class-2-4.1_session_view.php'>link</a>";