<?php
class simple_class{
    public const ABC=10;
    public $a=123456;
    public function simple_function(){
        echo self::ABC."\n";
        echo $this->a;

    }
}

$obj=new simple_class();
$obj->simple_function();
