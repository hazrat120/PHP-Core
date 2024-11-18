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
// class Fruit{
//     public $name;
//     public $color;

//     function set_name($name){
//         return $this->name = $name;
//     }
//     function get_name(){
//         return $this-> name;
//     }
// }
// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name("Apple");
// $banana->set_name("Kola");


// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();

class FindName {
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
            $this->vehabior = "Rafi";  // Correct the assignment
        } else if ($vehabior == 'potpot') {
            $this->vehabior = 'ShawonVai';  // Correct the assignment
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
$Captun = new FindName();

$rafi->setName("Rafi");
$rafi->setBabohar("lafanga");

echo $rafi->getName();  // Outputs: Rafi
echo "<br>";
echo $rafi->getBabohar();  // Outputs: Rafi

?>
</body>
</html>