<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Variables</title>
</head>
<body>
    <!-- <form action="<?php $_SERVER["REQUEST_METHOD"]?>" method="POST">
    <input type="number" name="num1" placeholder="Enter first number"> <br> <br>
    <input type="number" name="num2" placeholder="Enter second number"><br> <br>
    <input type="number" name="num3" placeholder="Enter third number"><br> <br>
    <button type="submit" value="submit">Submit</button>
    </form>
     -->
<form action="" method="POST">
    <input type="text" placeholder="Check Prime!" name="number">
    <button type="submit" value="submit">Submit</button>
</form>
<?php 
//In PHP, a variable starts with the $ sign, followed by the name of the variable

/* A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) */

    // echo "Hello PHP <br>";
    // $name = "JavaScript";
    // echo "I love $name! <br>";
    // $NAME = "JAVASCRIPT";
    // echo "We love " . $NAME . " ! <br>";

    // $a = 10;
    // $b = 15;
    // echo $a + $b . "<br>";

    //  php Strict mode
    /* declare(strict_types=1);

    function add(int $a, int $b) : int{
        return $a + $b;
    }

    echo add(5, 10); */

  /*   $a = 20;
    $hi = "Hello!";

    function hello() {
       
        global $a;
        echo $a;
    }
    hello();

    function myName(){
        $name = "Hello Hazrat <br>";
        echo $name;
        echo $GLOBALS['a'];
         static $x = 220;
          echo $GLOBALS['hi'];
        $x++;
        echo $x;
    }
    myName();
 */
/*     $name = "Hazrat Ali";
    function variable(){
    static $x = 10;
    global $name;
    echo $x . "<br>";
    echo $name . "<br>";
    $x++;
    echo $x;

    }

    variable();
    variable();
    variable();
 */
/*     $a = 10;
    $b = 20;

    function globalVar(){
        global $a, $b;
        echo "Global Variable acces: " . $a +  $b;
        $GLOBALS['a'] - $GLOBALS['b'] + $GLOBALS['a'];
    }
    globalVar() */;

/*     $txt1 = "Learn PHP";
    echo "<p>$txt1</p>";
    print"<h2>$txt1</h2>"; */

    // strlen(): স্ট্রিং এর দৈর্ঘ্য বা লেন্থ বের করে।
   /*  $str = "Hello World!";
    echo strlen($str); */

    // strpos(): স্ট্রিং এর মধ্যে কোন সাবস্ট্রিং কোথায় আছে, তা খুঁজে বের করে।
   /*  $str2 = "Hello, World";
    echo strpos($str2, 'World');
 */
    //substr(): স্ট্রিং থেকে একটি অংশ কেটে বের করে।
    /* $str ='Hello Hazrat Ali';
    echo substr($str, 6, 6); */

    //str_replace(): স্ট্রিং এর মধ্যে কোনো সাবস্ট্রিং পরিবর্তন বা রিপ্লেস করা হয়।
   /*  $str = "Hello World";
    echo str_replace("World", 'PHP', $str); */

    // strtolower(): স্ট্রিং এর সব অক্ষরকে ছোট অক্ষরে পরিবর্তন করে।
/*     $str = "Hazrat Ali";
    echo strtolower($str); */

    // Grade mark point
/*     $point = 80;
    if($point >= 90 && $point <= 100){
    echo "Grade A+";
    }else if($point >= 80 && $point <= 89){
    echo "Grade B";
    }else if($point >= 70 && $point <= 79){
        echo "Grade C";
    }else if($point >= 60 && $point <= 79){
        echo "Grade D";
    }else{
        echo "Fail";
    } */

    //trim(): স্ট্রিংয়ের শুরু ও শেষে অবাঞ্ছিত স্পেস (বা অন্য কোনো চিহ্ন) মুছে ফেলে।
   /*  $str = "<br>  Hello Hazrat    Ali   !   ";
    echo trim($str);

    echo $_POST['fullname'];
    echo "<br>";
    echo $_POST['email'];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["SERVER_ADDR"];
    echo "<br>";
    echo $_SERVER["SERVER_PORT"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo $_SERVER['REQUEST_URI'];
    echo "<br>";
    echo $_SERVER["HTTP_USER_AGENT"];
    echo "<br>";

    if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == 'on'){
        echo "এই পেজটি নিরাপদ (HTTPS)।";
    }else{
        echo "এই পেজটি নিরাপদ নয় (HTTP)।";
    }
    echo "<br>";
    echo $_SERVER['HTTPS'];

    echo "<br>";
    if(isset($_SERVER['HTTP_REFERER'])){
        echo "আপনি এই পেজে এসেছেন: " . $_SERVER['HTTP_REFERER'];
    }else{
        echo "আপনি সরাসরি এই পেজে এসেছেন।";
    }

    echo "<br>";
    if(!file_exists($_SERVER['DOCUMENT_ROOT'] . $_SERVER["REQUEST_URI"])){
        header("HTTP/1.0 404 Not Found");
        echo "Page not found";
    }

    echo "<br>";
    echo "Right now you are in: ". $_SERVER['PHP_SELF'] . "<br>";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "ফর্ম সফলভাবে সাবমিট হয়েছে!";
    } else {
        echo "<form method='POST' action='" . $_SERVER['PHP_SELF'] . "'>
                <input type='text' name='name' placeholder='আপনার নাম'>
                <input type='submit' value='সাবমিট'>
            </form>";
    }
 */


/*     function factorial($n) {
        if ($n == 0) {
            return 1; // 0! = 1
        } else {
            return $n * factorial($n - 1); // n! = n * (n-1)!
        }
    }

    $num = 4;
    echo "$num এর ফ্যাক্টোরিয়াল হল: " . factorial($num);
 */

     // find large number
    /* $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];


    if($num1 > $num2  && $num1 > $num3){
    echo "Large Number is: $num1 <br>";
    }else if($num2 > $num1  && $num2 > $num3){
    echo "Large Number is: $num2 <br>";
    }else{
    echo "Large Number is: $num3 <br>";
    } 

    if($_POST){
        $fact = 1;
        $number = $_POST['num1'];
        echo "Factorial of $number: ";
        for($i = 1; $i <= $number; $i++){
            $fact *= $i;
        }
        echo $fact . "<br>";
    }

     */

    function primeNum(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $number = $_POST['number'];
        $initial = 0;
            
            if($number <= 1){
                echo "This $number is not prime number.";
            }else{
                for($i=2; $i < $number; $i++){
                    if($number % 2 === 0){          
                        $initial++;
                        break;
                    }
                }if ($initial === 0){
                    echo "$number is prime number.";
                }else{
                    echo "$number is not prime.";
                }
            }
        }
    }
    primeNum();
?>


</body>
</html>