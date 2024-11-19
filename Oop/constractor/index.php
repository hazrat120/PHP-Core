<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php constractor</title>
</head>
<body>
    
<?php 
class PersonNameEmail{
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
unset($ali); 


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

class A{
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

?>

</body>
</html>