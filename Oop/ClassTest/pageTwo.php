<?php
namespace user;

interface User{
    function personOne();
}

abstract class Userinherit implements User{
    abstract public function personOne();
}

class Munna extends Userinherit{
    public function Razib(){
        echo "This person is Razib!";
    }

    public function personOne()
    {
     echo "Hello this person is Ismail.! do you know who is ismail?";   
    }
}

?>