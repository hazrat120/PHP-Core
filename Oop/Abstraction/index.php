<?php
// Abstract Class
/* abstract class Animal {
    // সাধারণ মেথড
    public function breathe() {
        echo "Breathing...\n";
    }

    // এবস্ট্রাক্ট মেথড, যার কোনো বাস্তবায়ন নেই
    abstract public function sound();
    
}

class Dog extends Animal {
    // এবস্ট্রাক্ট মেথড বাস্তবায়ন
    public function sound() {
        echo "Bark\n";
    }
}

class Cat extends Dog {
    // এবস্ট্রাক্ট মেথড বাস্তবায়ন
    public function sound() {
        echo "Meow\n";
    }

}

// অবজেক্ট তৈরি
$dog = new Dog();
$dog->breathe();  // Output: Breathing...
$dog->sound();    // Output: Bark

echo "<br>";

$cat = new Cat();
$cat->breathe();  // Output: Breathing...
$cat->sound();    // Output: Meow
 */


interface Animal{
    public function makeSount();
    public function sleep();
}

class Dog implements Animal{
    public function makeSount()
    {
        echo "Woof woof!";
    }
    public function sleep(){
        echo "The dog is sleeping.";
    }
}

/* class Cat implements Animal{
    public function makeSount()
    {
        echo "meeew... meew"
    }
} */
?>
