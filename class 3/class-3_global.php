<?php

// GLOBALS
$a="this is variable a";
$b="this is variable b";
function simplefunction(){
    global $a;
    
    echo $a."<br>";
    echo $GLOBALS['b'];
}
simplefunction();