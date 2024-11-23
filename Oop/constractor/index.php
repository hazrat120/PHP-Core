<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php constractor</title>
</head>
<body>
    
<?php 
/* class PersonNameEmail{
    public $name;
    public $email;

   function __construct($name, $mail){
    echo "My name is $this->name = $name and my email address $this->email = $mail. <br>";
   }

   function displayInfo($name,$email){
    echo "Name:$this->name=$name";
    echo "<br>";
    echo "Email:$this->email=$email <br>";
   }

   function __destruct(){
    echo "Hello World!";
   }

}

$ali = new PersonNameEmail("Hazrat Ali", 'hazrat.ali@gmail.com');
$ali->displayInfo("Munna Ali", 'Munna.ali@gmail.com');
unset($ali);  */


// class FileHandler {
//     private $file;

//     // কনস্ট্রাক্টর
//     function __construct($filename) {
//         echo "File opening $filename<br>";
//         // ফাইলটি লেখার জন্য খোলা হচ্ছে
//         $this->file = fopen($filename, 'w'); 
//     }

//     // ফাইল লেখার জন্য মেথড
//     function write($data) {
//         fwrite($this->file, $data);
//     }

//     // ডিস্ট্রাক্টর
//     function __destruct() {
//         fclose($this->file);
//         echo "File closed <br>";
//     }
// }

// // অবজেক্ট তৈরি এবং ফাইল লেখা
// $fileHandler = new FileHandler("example.txt");
// $fileHandler->write("This is for testing!.");

// // অবজেক্ট ধ্বংস
// unset($fileHandler); // ডিস্ট্রাক্টর স্বয়ংক্রিয়ভাবে কল হবে

/* class A{
    public $name="Md Ismail";
}
class B{
    public $name="Munna";
}
$a=new A();
$b=new B();
if($a instanceof B){
    echo"<br>The object instance by class A";
}else{
     echo"<br>The object not instance by class A";
}
 */

//  ================  Public  ==========
/* class Vehical{
    public $brand;
    protected $model;
    private $year;

    public function __construct($brand, $model, $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayInfo(){
        return "Brand:". $this->brand . ", Model: " . $this->model . ", Year: " . $this->year . ". ";
    }
    
    protected function getModel(){
        return "Protected function return model: ". $this->model;
    }

    private function getYear(){
        return "Private function return year: " . $this->year;
    }
}

class Car extends Vehical{
    public $fuelType;

    public function __construct($brand, $model, $year, $fuelType){
        parent::__construct($brand, $model, $year);
        $this->fuelType = $fuelType;
    }

    public function displayInfo(){
        echo parent::displayInfo() .", FuelType: " . $this->fuelType . "\n";
    }

    public function showModel(){
        echo "Model Show: " . $this->getModel();
    }
}

$toyota = new Vehical("Toyota", "corolla", 2022);
echo $toyota->displayInfo(); */
// echo $toyota->getModel();
/* 
class Product{
    public $name;
    public $size;
    private $code;
    public $price;

    // constructor
    public function __construct($_name, $_size, $_code, $_price)
    {
        $this->name = $_name;
        $this->size = $_size;
        $this->code = $_code;
        $this->price = $_price;
    }

    public function displayInfo(){
        echo "Product Name: " . $this->name . "Size: " . $this->size . "Code: " . $this->code . "Price: " . $this->price;
    }
}

$hoodie  = new Product('Hoodie ', 'M, L ', 'H-56 ', '850 ');
$hoodie->displayInfo();

class Test{
    public function __construct(){
        echo "Constructor called.<br>";
    }

    public function __destruct()
    {
        echo "Destructor called.<br>";
    }
}

echo "<br>";
$obj = new Test();
echo "Object in use.<br>";
 */

class Sample{
    public function __construct()
    {
        echo 'Constructor initiallized. <br>';
    }

    public function __destruct()
    {
        echo "Destructor executed. <br>";
    }
}

$obj2 = new Sample();
unset($obj2);
echo "After unset.<br>";


?>

</body>
</html>