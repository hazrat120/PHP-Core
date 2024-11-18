<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oop Class</title>
</head>
<body>
    <h1>Hello OOP</h1>
    
<?php 
// Define the Fruit class
/* class Fruit {
    // Public properties to store name and color of the fruit
    public $name;
    public $color;

    // Method to set the name of the fruit
    function set_name($name) {
        // Assign the provided name to the name property of the current object
        return $this->name = $name;
    }

    // Method to get the name of the fruit
    function get_name() {
        // Return the name of the fruit
        return $this->name;
    }
}

// Create a new instance of the Fruit class for an apple
$apple = new Fruit();
// Create another instance of the Fruit class for a banana
$banana = new Fruit();

// Set the name for the apple object
$apple->set_name("Apple");
// Set the name for the banana object
$banana->set_name("Kola");

// Output the name of the apple fruit
echo $apple->get_name(); // Expected output: Apple
echo "<br>";
// Output the name of the banana fruit
echo $banana->get_name(); // Expected output: Kola
 */

/* class FindName {
    public $name;
    public $vehabior;

    // Set the name of the person
    function setName($name) {
        $this->name = $name;
    }

    // Get the name of the person
    function getName() {
        return $this->name;
    }

    // Set the behavior based on input
    function setBabohar($vehabior) {
        if ($vehabior == "lafanga") {
            $this->vehabior = "Rafi lafanga!";  // Correct the assignment
        } else if ($vehabior == 'potpot') {
            $this->vehabior = 'Shawon Pok pok!';  // Correct the assignment
        } else {
            $this->vehabior = "Munna";  // Correct the assignment
        }
    }

    // Get the behavior of the person
    function getBabohar() {
        return $this->vehabior;
    }
}

$rafi = new FindName();
$laptun = new FindName();

$rafi->setName("Rafi");
$rafi->setBabohar("lafanga");
$laptun->setName('ShawonKaku');
$laptun->setBabohar('potpot');

echo $laptun->getName();
echo "<br>";
echo $laptun->getBabohar();
echo "<br>";echo "<br>";
echo $rafi->getName();  // Outputs: Rafi
echo "<br>";
echo $rafi->getBabohar();  // Outputs: Rafi
 */

 /* class Unic_ople{
    public $name;
    public $behaviour;
    public $universalBehaviour;

    function set_Name($name){
        return $this->name = $name;
    }
    function get_Name(){
    return $this->name;
    }

    function  set_Behaviour($behaviour){
        if($behaviour == "pokpok"){
            $this->behaviour = "Rafi is a Pot pot!";
        }else if($behaviour == "Jogra"){
        $this->behaviour = "Jogra Kore onek!";
        }
    }
 }
  */

//   dynamic class
//   class Student{
//     public static $name = "Munna";

//     static function studentName($name){
//         return $name;
//     }
//   }


//   echo Student::$name;

//   dynamic 
/* class Student{
    public $name = "ismail";
    public $age;

    function set_Name($cname){
        $this->name = $cname;
    } 
    function get_Name(){
        return $this->name;
    }

    function set_Age($Page){
        $this->age = $Page;
    }
    function get_Age(){
        return $this->age;
    }
}

$razib = new Student();
$razib->set_Name("");
echo $razib->get_Name();
 */
?>
</body>
</html>