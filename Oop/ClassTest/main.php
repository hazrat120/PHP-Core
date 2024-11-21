<?php
namespace test;

// interface
interface PersonOne{
    function munna();
}

//  abstract 
abstract class Razib implements PersonOne{
    abstract function munna();
}

// inherit
class Ismail extends Razib{
    public function munna(){
        echo "Munna is my friend!";
    }
    public function hello(){
        echo "This is helllo function!";
    }
}

?>