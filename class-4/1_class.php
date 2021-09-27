<?php
//class
class zahid{
    public $a="this is a class";
    //function
    function simplefunction(){
        return "this is a function";
    }
}

//object

$classObj=new zahid();

echo $classObj->a."\n";
echo $classObj->simplefunction();
